<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Relawan;
use App\Jadwal;
use App\Pesan;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;


class PesanController extends Controller
{

    public function create_signature(int $from_id, int $to_id){
        if($to_id > $from_id){
            $signat = strval($from_id).':'.strval($to_id);
        }
        else if($to_id === $from_id) return NULL;
        else{
            $signat = strval($to_id).':'.strval($from_id);    
        }
        return strval($signat);
    }




    public function index()
    {
        //
    }

    public function send(Request $request)
    {
         // dd($request);
        //  {"other_id":"1", "messages":"me"}
        $req = json_decode($request->getContent());
        $other_id   = $req->other_id;
        $message   = $req->messages;
         $self_id = Auth::user()->id;
         $sign = $this->create_signature($other_id, $self_id);
         if($sign === NULL){
             return 'error. You can\'t send yourself message to yourself';
         }                

         $new_message = new Pesan;
         $new_message->signature = $sign;
         $new_message->messages  = $message;
         $new_message->to        = $other_id;
         $new_message->from      = $self_id;
         $new_message->save();             
        // return redirect('/messages#v-pills-user'.$other_id)->with('info','Messages sent');
        return '{"hasil":"success"}';
         
    }

    public function retrieve(Request $request)
    {
          
        // $to_id   = 1;
        // $from_id = 3;
        // $guest_id   = $id;
        $self_id = Auth::user()->id;
        $req = json_decode($request->getContent());
        $guest_id   = $req->other_id;

        $sign = $this->create_signature($guest_id, $self_id);
        
        if($sign === NULL){
            return 'error. You can view yourself message to yourself';
        }                
        Pesan::where('from', $self_id)
        ->where('to', $guest_id)
        ->where('read_status', 0)
        ->update(['read_status' => 1]);

        $data = \DB::table('pesans')
        ->leftjoin('relawans', 'pesans.from', '=', 'relawans.id')
        ->leftjoin('relawans as relawans2', 'pesans.to', '=', 'relawans2.id')
            ->select(
                'pesans.id',
                'pesans.from','relawans.nama_lengkap as name1', 
                'pesans.to','relawans2.nama_lengkap as name2',
                'pesans.created_at',
                'pesans.read_status',
                'pesans.messages'
            )
            ->where('signature','=',$sign)
            ->orderBy('pesans.id', 'asc')
            // ->toSql();
            // ->paginate(6);
            ->get();
        $row = Relawan::where('id', $guest_id)->first();
        $other_name = $row["nama_lengkap"];
        $hasil["hasil"]   = $data;     
        $hasil["other_name"]   = $other_name;   
        return $hasil;
        
    }

    // hasil
    public function dialog()
    {
        // return view('messages'); // buat route doang, nanti diapus
        $self_id = Auth::user()->id;
        $mess = \DB::table('pesans')
        ->select('signature')
        ->where('signature', 'like', $self_id.':%')
        ->orwhere('signature', 'like', '%:'.$self_id)
        ->groupBy('signature')
        ->orderBy('pesans.id', 'desc')
        ->get()
        // ->first()
        ->pluck('signature')
        ;
        $arr =  array();
        $sebagian = array();
        foreach ($mess as $sign) {
            $objek = \DB::table('pesans')
            ->leftjoin('relawans', 'pesans.from', '=', 'relawans.id')
            ->leftjoin('relawans as relawans2', 'pesans.to', '=', 'relawans2.id')
            ->select(
                'pesans.id',
                'pesans.from','relawans.nama_lengkap as name1', 
                'pesans.to','relawans2.nama_lengkap as name2',
                'pesans.created_at',
                'pesans.read_status',
                'pesans.messages',
                'signature'

            )
            ->where('signature','=',$sign)
            ->orderBy('pesans.id', 'desc')
            
            ->first()

            ;

            if( $objek->from !== $self_id){  $objek->other_id= $objek->from;}
            else {$objek->other_id = $objek->to; }
            $row = Relawan::where('id', $objek->other_id)->first();
            $image = $row["image"];
            $other_name = $row["nama_lengkap"];
            $objek->image = $image;
            $objek->other_name = $other_name;

            // $sebagian = $this->retrieve($objek->other_id);
            // $objek->sebagian = $sebagian;
            // dd($sebagian);
            $arr[] = $objek;
            // $arr["id"] = $objek->id;
        }
        // var_dump($arr);
        // $key = array_column($arr, 'id');
        // array_multisort($key, SORT_DESC, $arr);
        // $wek = [];
        // foreach ($arr as $key => $row)
        // {
            // $wek[$key]  = $row['wek'];
        // }    
        // array_multisort($wek, SORT_ASC, $arr);

        // usort($arr, function($a,$b){return $a['id']-$b['id'];});

        // usort($arr, function($a, $b) {
        //     return $a['id'] <=> $b['id'];
        // });        
        // $col = collect($arr);
        // $jumlah = $col->count();
        
        // $currentPage = LengthAwarePaginator::resolveCurrentPage();
        // $perPage = 10;
        // $currentResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        // $messages_res = new LengthAwarePaginator($currentResults, $col->count(), $perPage);
        // cara nampilin nya
        // $results->withPath('messages')->links();
        // $dd($results);

        // compact($messages_res, $from_id);
        // return $results;
        // return view('messages', [
            // 'results' => $results,
        // ]);
        // dd($arr);        
        $hasil["hasil"] = $arr;    
        $hasil = json_encode($hasil);
        // $hasil["hasil"] = $arr;    
        echo ($hasil);
        // return view('messages', compact('arr', 'self_id')); // buat route doang, nanti diapus
           
    }
    public function dialog2(Request $request){
        $self_id = Auth::user()->id;
        $mess = \DB::table('pesans')
        ->select('signature')
        ->where('signature', 'like', $self_id.':%')
        ->orwhere('signature', 'like', '%:'.$self_id)
        ->groupBy('signature')
        ->orderBy('pesans.created_at', 'desc')
        ->get()
        ->pluck('signature')
        ;
        dd($mess);       
    }


}
