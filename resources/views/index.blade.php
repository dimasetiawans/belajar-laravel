<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>
<body>
    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>
    <h3>Data Pegawai</h3>
    <a href="/pegawai/tambah">+ Tambah Pegawai Baru</a>

    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
    
    <br>
    <table border="1">
        <tr>
            <th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
        </tr>
        @foreach ($pegawai as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jabatan }}</td>
            <td>{{ $item->umur }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $item->id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $item->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $pegawai->links() }}

</body>
</html>