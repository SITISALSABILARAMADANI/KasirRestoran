@extends('layouts.master')
@section('title', 'masakan')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">masakan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">masakan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form masakan</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form action="{{route('masakan.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="menu">Menu</label>
                                        <input class="form-control" type="text" name="menu" id="menu" placeholder="Masukan Menu" value="{{ $masakan->menu}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input class="form-control" type="text" name="harga" id="harga" placeholder="Masukan harga" value="{{ $masakan->harga}}" disabled>
                                    </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection