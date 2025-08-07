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

    @foreach ($pegawai as $item)
        <form action="/pegawai/update" method="post">
        @csrf
            <input type="hidden" name="id" value="{{ $item->id }}"> <br/>
            Nama <input type="text" required="required" name="nama" value="{{ $item->nama }}"> <br/>
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $item->jabatan }}"> <br/>
            Umur <input type="number" required="required" name="umur" value="{{ $item->umur }}"> <br/>
            Alamat <textarea required="required" name="alamat">{{ $item->alamat }}</textarea> <br/>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach

</body>
</html>