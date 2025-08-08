<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Edit Data  Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

        <form action="/pegawai/update/{{ $pegawai->id }}" method="post">
        @csrf 
        @method('PUT')
            Nama <input type="text" required="required" name="nama" value="{{ $pegawai->nama }}"> <br/>
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $pegawai->jabatan }}"> <br/>
            Umur <input type="number" required="required" name="umur" value="{{ $pegawai->umur }}"> <br/>
            Alamat <textarea name="alamat">{{ $pegawai->alamat }}</textarea> <br/>
            <input type="submit" value="Simpan Data">
        </form>

</body>
</html>