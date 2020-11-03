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
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor">Halaman Laporan Keuangan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Halaman Data Keuangan</li>
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
        <a href="{{url ('/adduang')}}" class="btn btn-primary">Tambah Data Keuangan</a>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tab panes -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="color: black;">No</th>
                                    <th style="color: black;">Uang Masuk</th>
                                    <th style="color: black;">Uang Keluar</th>
                                    <th style="color: black;">Keterangan</th>
                                    <th style="color: black;">Saldo</th>
                                    <th style="color: black;">Diinput</th>
                                    <th style="color: black;">Terakhir Diubah</th>
                                    <th style="color: black;">Aksi</th>
                                </tr>
                                <tr>
                                    <?php $no = 0; ?>
                                    @foreach($uang as $duit)
                                    <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$duit->uang_masuk}}</td>
                                    <td>{{$duit->uang_keluar}}</td>
                                    <td>{{$duit->keterangan}}</td>
                                    <td>{{$duit->saldo}}</td>
                                    <td>{{$duit->updated_at}}</td>
                                    <td>{{$duit->created_at}}</td>
                                    <td>
                                        <a href="/edituang/{{$duit->id}}/edit" class="btn btn-info">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>

                                        <a href="/hapus/{{$duit->id}}/destroy" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?')">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td colspan="4">Total Saldo</td>
                                    <td>{{ $saldo }}</td>
                                </tr>


                            </tbody>
                        </table>
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