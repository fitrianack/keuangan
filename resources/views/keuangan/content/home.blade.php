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
                        <h4 class="text-themecolor">Selamat Datang di Halaman Wali Murid!</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Obat</div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color:white"></h5>
                                </div>
                        </div>
                    </div>    
                    <div class="col-lg-4">
                        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header">Sarana</div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color:white"></h5>
                            </div>
                        </div>
                    </div>    
                    <div class="col-lg-4">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Siswa</div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color:white"></h5>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">Agenda Kegiatan </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color:white;"></h5>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header"> Rekam </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color:white;"></h5>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Periksa </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color:white;"></h5>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2020 Keuangan
             </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@stop