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
                                <h2>Database H2</h2>
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
                                    <form class="form-horizontal" action="{{ secure_url('database/H2/filter') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="dealer" class="col-md-2 ">Nama Deler</label>
                                            <div class="col-md-10">
                                                @if (isset($jabatan) && $jabatan == 'main_dealer')
                                                    <select name="dealer" id="dealer" class="form-control" required>
                                                        <option value="all">Pilih Dealer</option>
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
                                                <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Start Date" value="{{ isset($filter_data['start_date']) ? $filter_data['start_date'] : date('Y-m-d',strtotime('-1 year', strtotime(date('Y-m-d')))) }}">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="date" class="form-control" name="end_date" id="end_date" placeholder="End Date" value="{{ isset($filter_data['end_date']) ? $filter_data['end_date'] : date('Y-m-d') }}">
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
                                    <a type="button" class="btn btn-success" data-toggle="modal" data-target="#importExcel" style="margin-left:10px;"><i class="fa fa-upload"></i> UPLOAD FILE EXCEL</a>
                                    <!-- Import Excel -->
                                    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form method="post" action="{{ secure_url('/database/H2/import_excel') }}" enctype="multipart/form-data">
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
                                    <!-- Export Excel -->	
                                    <form action="{{ secure_url('database/H2/export_excel') }}" method="post" style="float:left">
                                        @csrf
                                        <input type="hidden" id="dealer_hidden" name="dealer_hidden" value="">
                                        <input type="hidden" id="start_date_hidden" name="start_date_hidden" value="">
                                        <input type="hidden" id="end_date_hidden" name="end_date_hidden" value="">
                                        <button type="submit" class="btn-custom" id="export-btn"><i class="fa fa-download"></i> EXPORT</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="cell-border" id="dataTable">
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

@section('custom-script')
    <script>
        $(document).ready( function () {
            myTable = $('#dataTable').DataTable({
                // "dom": '<"wrapper"lipt>'
            });

            var id_dealer = $('#dealer').val();
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val(); 

            $('#dealer_hidden').val(id_dealer);
            $('#start_date_hidden').val(start_date); 
            $('#end_date_hidden').val(end_date);

            $("#dealer").change(function(){
                id_dealer = $(this).val();
                $('#dealer_hidden').val(id_dealer);
                console.log($('#dealer_hidden').val());
            });

            
            $("#start_date").change(function(){
                start_date = $(this).val();
                $('#start_date_hidden').val(start_date);
                console.log($('#start_date_hidden').val());
            });

            
            $("#end_date").change(function(){
                end_date = $(this).val();
                $('#end_date_hidden').val(end_date);
                console.log($('#end_date_hidden').val());
            });
        });
    </script>
@endsection