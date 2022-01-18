<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <title>Edit Barang</title>
</head>
<body style="background:linear-gradient(#0080FF, #1cb5e0)">
    <form action="/edit" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<table>
    <div>
        <tr>
            @foreach($barang as $a)
           <td>Id Barang : {{ $a->Idbarang }} </td><td><input type="hidden" name="Idbarang" value="{{ $a->Idbarang }}"></td>
            
            </tr>
            <tr>
                <td>Nama Barang :</td><td><input type="text" id="NamaBarang" name="NamaBarang"  class="form-control" value="{{ $a->NamaBarang }}"></td>
            </tr>
            <tr>
                <td>Stok :</td><td><input type="number" id="Stok" name="Stok" min="1" max="100"  class="form-control" value="{{ $a->Stok }}"></td>
            </tr>       
            <tr>
                <td>Kemasan :</td>
                <td>
                    <select name="Kemasan" id="Kemasan" style="width: 280px; height:40px; padding:2px; font-size:16px;" class="form-select form-select-lg" value="{{ $a->Kemasan }}">
                        <option value="Botol">Botol</option>
                        <option value="Plastik">Plastik</option>
                        <option value="Box">Box</option>                        
                        <option value="Karung">Karung</option>  
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Barang :</td>
                <td>
                <input type="radio" id="pecah" name="JenisBarang" value="Mudah Pecah" class="form-check-input">
                <label for="pecah" class="form-check-label">Mudah Pecah</label>
                <input type="radio" id="tidak" name="JenisBarang" value="Tidak Mudah Pecah" class="form-check-input">
                <label for="tidak" class="form-check-label">Tidak Mudah Pecah</label>
                </td>
            </tr>    
            <tr>
                <td>Harga :</td><td><input type="text" id="Harga" name="Harga"  class="form-control" value="{{ $a->Harga }}"></td>
            </tr>
            <tr>
                <td>Tanggal Masuk :</td><td><input type="date" id="TanggalMasuk" name="TanggalMasuk"  class="form-control" value="{{ $a->TanggalMasuk }}"></td>
            </tr>
        </tr>

        </table>
        <br>
            <image src="{{ Storage::url($a->Gambar) }}" width="250" height="300">
        </br>
        
        <br><input type="submit" class="btn btn-success" style="width: 100px; border-radius: 32px; margin-left: 200px; border-color:white;" value="&#128394Edit">
    </form>
    @endforeach
</div>
</body>
</html>