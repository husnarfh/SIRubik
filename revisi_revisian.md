# Revisi SIRubik

## Database

### Nama db harus sama diantara seed, nama db, dan atribut

1. Calon_Relawan
   a. id_calon_relawan (integer)
   b. email (uniq)
   c. password (Hash::make)
   d. nama_lengkap (string)
   e. alamat (string)
   f. foto_profile (string, judul file)
   g. tempat_lahir (string)
   h. tanggal_lahir (date)
   i. tanggal_masuk (date)
   j. no_hp (string)
   k. file_cv (string)
   l. role (string)
   m. alasan_masuk (string)
   l. hari_kosong (string)
   o. id_line (string)

2. Relawan
   a. id_relawan (integer)
   b. email (uniq)
   c. password (Hash::make)
   d. nama_lengkap (string)
   e. alamat (string)
   f. foto_profile (string, judul file)
   g. tempat_lahir (string)
   h. tanggal_lahir (date)
   i. tanggal_masuk (date) 
   j. no_hp (string)
   k. file_cv (string)
   l. role (string)
   m. alasan_masuk (string)
   o. id_line (string)

3. User (admin lte) (would revision)
   a. email (string | uniq)
   b. password (Hash::make)

4. Jadwal.
   a. id_jadwal (integer)
   b. mata_pelajaran (string)
   c. tempat (string)
   d. waktu (time)

5. Materi
   a. id_materi (integer)
   b. mata_pelajaran (string)
   c. file_materi (string | konek ke file)
   d. kelas (string)
   e. id_uploader (string) <= id_relawan | 1 if admin


   
### Workflow

1. Admin dapat memasukkan relawan manual melalui admin LTE.
2. Untuk extended feature, calon relawan dapat mendaftarkan dirinya melalui aplikasi untuk menjadi relawan. Calon relawan akan melakukan wawancara pada pengurus. Pengurus akan melakukan acc pada calon relawan. Data calon relawan akan diubah menjadi data relawan melalui aplikasi.
3. Admin melalui admin lte harus dapat melakukan
    1. Melihat calon relawan dalam bentuk tabel. Jika diklik detail akan muncul data aplikan. Admin dapat menghapus data calon relawan dan menerima calon relawan menjadi relawan. Jika diterima akan muncul tampilan untuk mengubah data. Jika sudah di acc, data calon relawan dioper ke data relawan.
    2. Melakukan data input relawan secara manual.
    3. Melakukan view materi (would revision)
    4. Melakukan insert materi (would revision)
    5. Melakukan view pada pesan (would revision)
    6. FEATURE. Melakukan insert pada jadwal. (would revision)
    7. FEATURE. Melakukan view pada jadwal. (would revision)