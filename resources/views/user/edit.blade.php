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
                                    <h2>Edit User</h2>
                                </div>
                                <br><br>
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
                                <form action="{{url('user/update/'.$user->id_user)}}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control"  value="{{$user->email}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" value="{{$user->password}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2">Jabatan</label>
                                        <div class="col-sm-10">
                                            <select name="jabatan" class="form-control" required>
                                                <option value="main_dealer" @if($user->jabatan == 'main_dealer') selected @endif>Main Dealer</option>
                                                <option value="dealer" @if($user->jabatan == 'dealer') selected @endif>Dealer</option>
                                                <option value="purifikator" @if($user->jabatan == 'purifikator') selected @endif>Purifikator</option>
                                                <option value="salesman" @if($user->jabatan == 'salesman') selected @endif>Salesman</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2">Dealer</label>
                                        <div class="col-sm-10">
                                            <select name="id_dealer" class="form-control" required>
                                                @foreach ($dealers as $item)
                                                    <option value="{{$item->id_dealer}}" @if($user->id_dealer == $item->id_dealer) selected @endif>{{$item->nama_dealer}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection