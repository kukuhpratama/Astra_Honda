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

    .search{
        border-radius: 5px;
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
                                <div class="panel-title pull-left">
                                    <h2>Data User</h2>
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
                            </div>
                            <div class="panel-body">
                                @if (auth()->user()->jabatan == 'main_dealer')
                                    <div class="row" style="padding-bottom:2%">
                                        <div class="col-md-4">
                                            <a class="btn btn-primary" href="{{url('user/create')}}"><i class="la la-plus"></i> Add User</a>
                                        </div>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="cell-border" id="dataTable">
                                        <thead>
                                            <tr class="bg-primary">
                                               <th>No. </th>
                                               <th>Nama</th>
                                               <th>Email</th>
                                               <th>Jabatan</th>
                                               <th>Dealer</th>
                                               @if (auth()->user()->jabatan == 'main_dealer')
                                               <th>Action</th>
                                               @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $item)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->jabatan}}</td>
                                                    <td>{{$item->dealer['nama_dealer']}}</td>
                                                    @if (auth()->user()->jabatan == 'main_dealer')
                                                    <td>
                                                        <a class="btn btn-warning" href="{{url('user/edit/'.$item->id_user)}}"><i class="la la-edit"></i> Edit</a>
                                                        <a class="btn btn-danger" href="{{url('user/delete/'.$item->id_user)}}"><i class="la la-trash"></i> Hapus</a>      
                                                    </td>
                                                    @endif
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
    <script type="text/javascript">
        $(document).ready(function(){
            myTable = $('#dataTable').DataTable({
                // "dom": '<"wrapper"lipt>'
            });
        });
    </script>
@endsection