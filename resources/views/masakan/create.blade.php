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
                                        <select class="custom-select" name="menu">
                                              <option selected disabled>Pilih menu</option>
                                              <option value="Ayam Goreng">Ayam Goreng</option>
                                              <option value="Nasi Goreng">Nasi Goreng</option>
                                              <option value="Spaghetti">Spaghetti</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <select class="custom-select" name="harga">
                                              <option selected disabled>Pilih harga</option>
                                              <option value=15.000>15.000</option>
                                              <option value=25.000>25.000</option>
                                              <option value=30.000>30.000</option>
                                        </select>
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