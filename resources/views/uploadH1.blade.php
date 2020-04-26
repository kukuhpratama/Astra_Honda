@extends('layouts.master')           

@section('custom-style')
<style>
    .btn-custom{
        box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2) !important;
        padding: 6px 22px !important;
        background-color: #00AAFF !important;
        border-color: #00a0f0 !important;
        color: white !important;
    }

</style>
@endsection

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title pull-right">
                                    <h2>Database H1</h2>
                                </div>
                                <br><br><br>
                                @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class="col-12">
                                    <div class="col-6">
                                        <form class="form-horizontal" action="{{ url('database/H1/filter') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="dealer" class="col-md-2 ">Nama Deler</label>
                                                <div class="col-md-10">
                                                    @if (isset($jabatan) && $jabatan == 'main_dealer')
                                                        <select name="dealer" id="dealer" class="form-control" required>
                                                            <option value="">Pilih Dealer</option>
                                                            @foreach ($dealers as $dealer)
                                                                <option value="{{ $dealer['id_dealer'] }}" @if(isset($filter_data['id_dealer']) && $dealer['id_dealer'] == $filter_data['id_dealer']) selected @endif>{{ $dealer['nama_dealer']}}</option>
                                                            @endforeach
                                                        </select>
                                                    @else
                                                        <select name="dealer" id="dealer" class="form-control" required readonly>
                                                            <option value="{{ $dealers['id_dealer'] }}" @if(isset($filter_data['id_dealer']) && $dealers['id_dealer'] == $filter_data['id_dealer']) selected @endif>{{ $dealers['nama_dealer']}}</option>
                                                        </select>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="periodesales" class="col-md-2 ">Periode Sales</label>
                                                <div class="col-md-5">
                                                    <input type="date" class="form-control" name="start_date" placeholder="Start Date" value="{{ isset($filter_data['start_date']) ? $filter_data['start_date'] : date('Y-m-d') }}">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="date" class="form-control" name="end_date" placeholder="End Date" value="{{ isset($filter_data['end_date']) ? $filter_data['end_date'] : date('Y-m-d') }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn-custom">Filter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                    <div class="pull-right">
                                        @if (session()->has('jabatan') && session('jabatan') == 'main_dealer')
                                            <!-- Import Excel -->
                                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#importExcel"><i class="fa fa-upload"></i> UPLOAD FILE EXCEL</a>
                                            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form method="post" action="{{ secure_url('/database/H1/import_excel') }}" enctype="multipart/form-data">
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
                                        @endif
                                        <!-- Export Excel -->
                                        <a href="{{ secure_url('database/H1/export_excel') }}"  class="btn btn-primary"><i class="fa fa-download"></i> EXPORT</a>
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
                                                <th>No.</th>
                                                @foreach ($columns as $cols)
                                                    <th>{{ $cols }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($result as $key => $row)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
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