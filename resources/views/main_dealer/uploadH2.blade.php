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
                                    <a type="button" class="btn btn-success" data-toggle="modal" data-target="#importExcel"><i class="fa fa-upload"></i> UPLOAD FILE EXCEL</a>
                                        <!-- Import Excel -->
                                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form method="post" action="{{ secure_url('/maindealer/H2/import_excel') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label>Pilih file excel</label>
                                                            <div class="form-group">
                                                                <input type="file" name="file" required="required">
                                                            </div>
                                
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                            <button type="submit">Import</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>	
                                    <a href="{{ secure_url('maindealer/H2/export_excel') }}"  class="btn btn-primary"><i class="fa fa-download"></i> EXPORT</a>
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
                                            @foreach ($columns as $cols)
                                                <th>{{ $cols }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $key => $row)
                                            <tr>
                                                @foreach ($row as $value)
                                                    <td>{{$value}}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
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