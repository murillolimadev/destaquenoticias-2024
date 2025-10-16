@extends('admin.layout.app')
@section('title', 'Dashboard')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1>Informativo</h1> --}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard', ['id' => 1]) }}">Home</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Destaque</li> --}}
                        </ol>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.pages.noticias.create') }}" class="btn btn-primary">
                            Adicionar
                        </a>
                    </div>
                </div> --}}
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    @if (session('msg'))
                        <div class="alert alert-success text-center">
                            {{ session('msg') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Administrativo</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body text-center">
                                <img src="{{ asset('home/images/logo.png') }}" alt="">
                            </div>

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->

                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
