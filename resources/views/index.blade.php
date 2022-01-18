<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="3" class="table table-bordered" style="">
        <tr class="table text-white" style="text-align:center;  background-color:#424242;">
            
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Kemasan</th>
            <th>Jenis Barang</th>
            <th>Harga</th>            
            <th>Tanggal Masuk</th>
            <th>Gambar</th>
            <th>Action</th>
            
        </tr>
        @foreach($barang as $b)
        <tr style="text-align:center; vertical-align : middle;">
            <td>{{ $b->Idbarang}}</td>
            <td>{{ $b->NamaBarang}}</td>
            <td>{{ $b->Stok}}</td>
            <td>{{ $b->Kemasan}}</td>
            <td>{{ $b->JenisBarang}}</td>
            <td>{{ $b->Harga}}</td>
            <td>{{ $b->TanggalMasuk}}</td>
            <td><image src="{{ Storage::url($b->Gambar) }}" width="170" height="200"></td>
            <td><a href="/show/{{ $b->Idbarang }}"><button type="button" class="btn btn-success btn" style="border-radius: 32px; border-color:white;">&#128394Edit</button></a>
            <a href="/hapus/{{ $b->Idbarang }}"><button type="button" class="btn btn-danger btn" style="border-radius: 32px; border-color:white;">&#128465Hapus</button></a></td>
        </tr>
@endforeach
    </table>

</body>
</html>