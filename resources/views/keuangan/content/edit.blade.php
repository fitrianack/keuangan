@extends('keuangan.layouts.master')
@section('keuangan.content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Halaman Edit Data Uang</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Halaman Edit Uang</li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center">
                <!-- <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a> -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tab panes -->
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post" action="/edituang/update/{{$uang->id}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Uang Masuk</label>
                                <input name="uang_masuk" type="text" class="form-control @error('uang_masuk') is-invalid @enderror" value="{{$uang->uang_masuk}}">
                                @error('uang_masuk')<div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label>Uang Keluar</label>
                                <input name="uang_keluar" type="text" class="form-control @error('uang_keluar') is-invalid @enderror" value="{{$uang->uang_keluar}}">
                                @error('uang_keluar')<div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input name="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{$uang->keterangan}}">
                                @error('keterangan')<div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2020 SI-UKS
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@stop