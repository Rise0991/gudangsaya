<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/brain.js') }}"></script>
    <script type="text/javascript">

        function lihatbarang(){
            $.ajax({
                type:"GET",
                url:"/tabel"
            }).done(function(data){
                $('#tabel').html(data);
            });
        }

        function caribarang(){
            var Idbarang = document.getElementById("Idbarang").value;
            $.ajax({
                type:"GET",
                url:"/cari/"+Idbarang
            }).done(function(data){
                $('#tabel').html(data);
            })
        }

    </script>
    <title>TOKO SEJAHTERA</title>
</head>
<body onload="lihatbarang()";>
<img src="{{ asset('images/logo2.png')}}" alt="Foto" style="float: left; width: 150px; height: 150px;">
<img src="{{ asset('images/logo.png')}}" alt="Foto" style="float: right; width: 150px; height: 150px;">
<div id="loading" style="background-image: url('{{ asset('images/background.jpg')}}'); background-size:cover; background-repeat:no-repeat;">
    <div id="header" class="container-fluid p-5 text-white" style="background-color: #2E2E2E; text-align:center;">
        <h1 id="atas">TOKO SEJAHTERA</h1>
    </div>
    <div id="nav" class="row">
    
        <ul class="nav container-fluid">
            <li class="nav-item col-6 container-fluid" style=" vertical-align : middle; text-align: center; background-color: #424242;"><button type="button" id="isi" class="btn text-white" data-bs-toggle="modal" data-bs-target="#ModalInsert">&#128221Pendaftaran Barang Masuk&#128221</button></li> 
            <li class="col-6 container-fluid dropdown row" style=" vertical-align : middle; text-align: center; background-color: #424242;"><p class="btn text-white dropdown-toggle" data-bs-toggle="dropdown">Menu</p> 
            <ul class="dropdown-menu">
                <li><a class="dropdown-item col-6" href="https://www.youtube.com/watch?v=HzZU_owM0LI">Pengenalan Gudang Modern</a></li>
            </ul>
            </li>
        </ul>
    </div>
    <div class="row" style="padding-top: 40px">
        <div id="kiri" class="col-6" style="float:left;">
            <h3>Data Persedian Barang</h3>
        </div>

        <div id="kanan" class="col-6">
            <table style="float:right;"> 
                <tr>
                    <td><button type="button" id="all" class="btn btn-danger btn" style="width:100px;border-radius:4px 24px; background-color: #DBA901; border-color:white;" onclick="lihatbarang(); ">&#8635Refresh</button></td>
                    <td><input type="text" id="Idbarang" class="form-control form-control" placeholder="Masukkan ID Barang" style="width: 200px;"></td>
                    <td><button type="button" id="submit" class="btn btn-success btn" style="width:100px; border-radius:24px 4px; background-color:#0174DF; border-color:white;" onclick="caribarang();">&#128269Search</button></td>    
                </tr>
            </table>
        </div>
        <div id="tabel">
        </div>
    </div>
    <div class="modal fade" id="ModalInsert">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
    
                <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
                    {{ csrf_field() }}

        
                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color:#0080FF">
                        <h4 class="modal-title" >&#128221Pendaftaran Barang Masuk</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
        
                    <!-- Modal body -->
                    <div class="modal-body" style="background:linear-gradient(#0080FF, #1cb5e0)">
                    
                        <table style="vertical-align : middle;">
                        
                            <tr>
                                <td>Id Barang :</td><td><input type="text" id="Idbarang" name="Idbarang" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Nama Barang :</td><td><input type="text" id="NamaBarang" name="NamaBarang"  class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Stok :</td><td><input type="number" id="Stok" name="Stok" min="1" max="200" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Kemasan :</td>
                                <td>
                                    <select name="Kemasan" id="Kemasan" style="width: 650px; height:40px; font-size:16px" class="form-select form-select-lg">
                                        <option value="Botol"  >Botol</option>
                                        <option value="Plastik">Plastik</option>
                                        <option value="Box">Box</option>
                                        <option value="Karung">Karung</option>                           
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Barang :</td>
                                <td style="vertical-align : middle;">
                                <input type="radio" id="pecah" name="JenisBarang" value="Mudah Pecah" class="form-check-input">
                                <label for="pecah" class="form-check-label">Mudah Pecah</label>
                                <input type="radio" id="tidak" name="JenisBarang" value="Tidak Mudah Pecah" class="form-check-input">
                                <label for="tidak" class="form-check-label">Tidak Mudah Pecah</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Harga :</td><td><input type="text" id="Harga" name="Harga" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>TanggalMasuk :</td><td><input type="date" id="TanggalMasuk" name="TanggalMasuk" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Upload Gambar</td> <td><input type="file" name="file"></td>
                            </tr>  
                        
                        </table>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer" style="background-color:#1cb5e0">
                        <input type="submit" class="btn btn-success" style="border-color:white;" value="Submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</div>


</body>
</html>