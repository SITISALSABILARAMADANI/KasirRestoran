@extends('layouts.master')
@section('title', 'dashboard')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Welcome</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="text-center">
                                <div class="card-header">
                                    <h3 class="m-0">Kasir Restoran</h3>
                                </div>
                                {{-- <div class="card-body">
                                    <a href="{{route('user.create')}}" class="btn btn-primary">user</a>
                                    <a href="{{route('transaksi.create')}}" class="btn btn-primary">transaksi</a>
                                    <a href="{{route('order.create')}}" class="btn btn-primary">order</a>
                                    <a href="{{route('detail_order.create')}}" class="btn btn-primary">detail_order</a>
                                    <a href="{{route('masakan.create')}}" class="btn btn-primary">masakan</a>
                                </div> --}}
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Data Order</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, asperiores!</p>
                                    <a href="/order" class="btn btn-primary">Click me</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Data Masakan</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, asperiores!</p>
                                    <a href="/masakan" class="btn btn-primary">Click me</a>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
@endsection