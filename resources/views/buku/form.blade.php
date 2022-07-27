@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Tambah Buku</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Tambah Buku</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body table-responsive p-0">
            <form class="form-horizontal" action="/buku/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="kode">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="judul">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="pengarang">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Halaman</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="halaman">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="penerbit">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="tahun">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="stok">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="status">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
                  <a href="/buku" class="btn btn-default float-right">Batal</a>
                </div>
                <!-- /.card-footer -->
              </form>        
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection