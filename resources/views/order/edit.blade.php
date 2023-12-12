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
                            <form action="{{route('order.update', $order->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukan nama" value="{{ $order->nama }}">
                                    </div>
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="menu">Menu</label>
                                        <input class="form-control @error('menu') is-invalid @enderror" type="text" name="menu" id="menu" placeholder="Masukan menu" value="{{ $order->menu }}">
                                    </div>
                                    @error('menu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="minuman">Minuman</label>
                                        <input class="form-control @error('minuman') is-invalid @enderror" type="text" name="minuman" id="minuman" placeholder="Masukan minuman" value="{{ $order->minuman }}">
                                    </div>
                                    @error('minuman')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
            
                                    <div class="form-group">
                                        <label for="meja">Meja</label>
                                        <input class="form-control @error('meja') is-invalid @enderror" type="text" name="meja" id="meja" placeholder="Masukan meja" value="{{ $order->meja }}">
                                    </div>
                                    @error('meja')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input class="form-control @error('tanggal') is-invalid @enderror" type="date" name="tanggal" id="tanggal" placeholder="Masukan tanggal" value="{{ $order->tanggal }}">
                                    </div>
                                    @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>    
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection