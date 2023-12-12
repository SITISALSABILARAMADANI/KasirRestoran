@extends('layouts.master')
@section('title', 'order')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">order</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">order</li>
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
                                <h3 class="card-title">Form order</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form action="{{route('order.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukan nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu">Menu</label>
                                        <select class="custom-select" name="menu">
                                              <option selected disabled>Pilih menu</option>
                                              <option value="Ayam Goreng 15.000">Ayam Goreng 15.000</option>
                                              <option value="Nasi Goreng 25.000">Nasi Goreng 25.000</option>
                                              <option value="Spaghetti 30.000">Spaghetti 30.000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="minuman">Minuman</label>
                                        <select class="custom-select" name="minuman">
                                              <option selected disabled>Pilih minuman</option>
                                              <option value=chocolatte>chocolatte</option>
                                              <option value=strawberry>strawberry</option>
                                              <option value=lemonade>lemonade</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="meja">Meja</label>
                                        <select class="custom-select" name="meja">
                                              <option selected disabled>Pilih meja</option>
                                              <option value=1>1</option>
                                              <option value=2>2</option>
                                              <option value=3>3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input class="form-control" type="date" name="tanggal" id="tanggal" placeholder="Masukan kode">
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