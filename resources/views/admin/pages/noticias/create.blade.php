@extends('admin.layout.app')
@section('title', 'Noticias')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger text-center" style="margin: 10px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="text-align: center">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('msg'))
                            <div class="row text-center">
                                <div class="col-md-12" \>
                                    <div class="alert alert-success text-center" style="color: white; margin: 10px;">
                                        {{ session('msg') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Notícia</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard', ['id' => 1]) }}">Home</a></li>
                            <li class="breadcrumb-item active">Notícias</li>
                        </ol>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cadastrar</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- /.card-body -->
                            <form action="{{ route('admin.pages.noticias.store', ['id' => 1]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="customFile">Imagem 600x600px</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" required class="custom-file-input"
                                                    placeholder="600x600px" id="customFile">
                                                <label class="custom-file-label" for="customFile">Imagem</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Categoria</label>
                                            <select class="custom-select rounded-0" name="cat_id">
                                                @foreach ($cat as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Titulo</label>
                                            <div class="custom-file">
                                                <input type="text" name="title" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Descrição</label>
                                            <div class="custom-file">
                                                <input type="text" name="desc" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Conteúdo</label>
                                            <textarea name="content" id="mytextarea"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    </div>

                                </div>
                            </form>
                            <!-- /.card-body -->

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
