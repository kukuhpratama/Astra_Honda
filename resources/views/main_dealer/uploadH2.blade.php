                                    @extends('layouts.master')
                                    
                                    @section('content')

                                    <div class="main">
                                        <div class="main-content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel">
                                                        <div class="panel-heading">
                                                                        <div class="panel-title pull-right">
                                                                            <h2>DATABASE H2</h2>
                                                                        </div>
                                                                        <br><br><br>
                                                                    <div class="col-12">
                                                                        <div class="col-6">
                                                                            <form class="form-horizontal">
                                                                            <div class="form-group">
                                                                                <label for="namadeler" class="col-md-2 ">Nama Deler</label>
                                                                                <div class="col-md-10">
                                                                                <input type="text" class="form-control" id="namadeler" placeholder=" Nama Deler">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="periodesales" class="col-md-2 ">Periode Sales</label>
                                                                                <div class="col-md-5">
                                                                                <input type="date" class="form-control" id="inputPassword3" placeholder="Periode Sales">
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                <input type="date" class="form-control" id="inputPassword3" placeholder="Periode Sales">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="col-sm-offset-2 col-sm-10">
                                                                                <a type="submit" class="btn btn-primary">Search</a>
                                                                                </div>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-6">
                                                                        <div class="pull-right">
                                                                            <a href="" class="btn btn-success"><i class="fa fa-upload"></i> UPLOAD FILE EXCEL</a>
                                                                            <a href="" class="btn btn-primary"><i class="fa fa-download"></i> EXPORT</a>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <br>
                                                            <div class="panel-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th scope="col">Nomor</th>
                                                                        <th scope="col">Nomor Nama AHASS</th>
                                                                        <th scope="col">Kode Dealer</th>
                                                                        <th scope="col">Nomor Nota Service</th>
                                                                        <th scope="col">Tgl Nota Servis</th>
                                                                        <th scope="col">No PKB</th>
                                                                        <th scope="col">No Antrian</th>
                                                                        <th scope="col">Nama Tipe</th>
                                                                        <th scope="col">Alasan Ingat Service</th>
                                                                        <th scope="col">Dealer Sendiri</th>
                                                                        <th scope="col">No Polisi</th>
                                                                        <th scope="col">Nomor Mesin</th>
                                                                        <th scope="col">Nomor Rangka</th>
                                                                        <th scope="col">Nama Motor</th>
                                                                        <th scope="col">Warna</th>
                                                                        <th scope="col">Tahun Rakit</th>
                                                                        <th scope="col">Nama Pemilik</th>
                                                                        <th scope="col">Alamat</th>
                                                                        <th scope="col">Kelurahan</th>
                                                                        <th scope="col">Kecamatan</th>
                                                                        <th scope="col">Kabupaten</th>
                                                                        <th scope="col">No Telp</th>
                                                                        <th scope="col">No HP</th>
                                                                        <th scope="col">Km Sekarang</th>
                                                                        <th scope="col">Km Berikut</th>
                                                                        <th scope="col">Kode Jasa/Part</th>
                                                                        <th scope="col">Grup Jasa/Part </th>
                                                                        <th scope="col">Nama Jasa/Part</th>
                                                                        <th scope="col">Satuan</th>
                                                                        <th scope="col">Jumlah</th>
                                                                        <th scope="col">Harga</th>
                                                                        <th scope="col">Total</th>
                                                                        <th scope="col">Tipe Pembayaran</th>
                                                                        <th scope="col">Nama Mekanik</th>
                                                                        <th scope="col">User Login</th>
                                                                        <th scope="col">Uang Bayar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                        <td>lorem</td>
                                                                    </tr>
                                                        
                                                                </tbody>
                                                                </table>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                        

                                    @endsection