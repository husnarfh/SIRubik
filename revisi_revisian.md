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