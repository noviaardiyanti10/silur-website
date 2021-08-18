@extends('admin.layouts.app')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="row" style="margin-left:1pc;margin-right:1pc;">
                    <h1 style="font-weight: bold;">DASHBOARD</h1>
                    <hr>
                    <div class="row">
                        <!--STATUS PANELS -->
                        <div class="col-md-3">
                            <div class="panel panel-success kotak">
                                <div class="panel-heading">
                                    <h5 style="font-weight: bold; font-size: 17px;"><i class="fas fa-bookmark"
                                            style="margin-right: 10px;"></i>Data Pedagang</h5>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <h1>1 Pedagang</h1>
                                    </center>
                                </div>
                                <div class="panel-footer">
                                    <h4 style="font-size:15px;"><a href='list_pedagang.html'
                                            style="color: rgb(73, 141, 73);">Tabel data pedagang <i
                                                class='fa fa-arrow-right'></i></a></h4>
                                </div>
                            </div>
                            <!--/grey-panel -->
                        </div><!-- /col-md-3-->
                        <!-- STATUS PANELS -->
                        <div class="col-md-3">
                            <div class="panel panel-success kotak">
                                <div class="panel-heading">
                                    <h5 style="font-weight: bold; font-size: 17px;"><i class="fas fa-bookmark"
                                            style="margin-right: 10px;"></i>Data Pembeli</h5>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <h1>3 Orang</h1>
                                    </center>
                                </div>
                                <div class="panel-footer">
                                    <h4 style="font-size:15px;"><a href='list_pembeli.html'
                                            style="color: rgb(73, 141, 73);">Tabel data pembeli <i
                                                class='fa fa-arrow-right'></i></a></h4>
                                </div>
                            </div>
                            <!--/grey-panel -->
                        </div><!-- /col-md-3-->
                        <!-- STATUS PANELS -->
                        <div class="col-md-3">
                            <div class="panel panel-success kotak">
                                <div class="panel-heading">
                                    <h5 style="font-weight: bold; font-size: 17px;"><i class="fas fa-bookmark"
                                            style="margin-right: 10px;"></i>Data Admin</h5>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <h1>5 Orang</h1>
                                    </center>
                                </div>
                                <div class="panel-footer">
                                    <h4 style="font-size:15px; color: rgb(101, 236, 11);"><a href='list_admin.html'
                                            style="color: rgb(73, 141, 73);">Tabel data admin <i
                                                class='fa fa-arrow-right'></i></a></h4>
                                </div>
                            </div>
                            <!--/grey-panel -->
                        </div><!-- /col-md-3-->
                        <div style="margin-left: 20px; margin-top: 300px;">
                        </div>
                    </div>
                </div><!-- /col-lg-9 END SECTION MIDDLE -->
            </div>
            <div class="clearfix" style="padding-top:18%;"></div>
        </section>
    </section>
@endsection