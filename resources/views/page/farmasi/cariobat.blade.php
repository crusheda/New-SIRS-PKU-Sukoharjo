<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Farmasi - Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/bootstrap.min.css') }}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/font-awesome.min.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/normalize.css') }}">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/wave/button.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/notika-custom-icon.css') }}">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/jquery.dataTables.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css-farmasi/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('css-farmasi/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="card-header py-3 text-center">
        <h3 class="m-0 font-weight-bold text-primary"><b>DAFTAR PENJUALAN OBAT LISINOPRIL 5mg & 10mg</b></h3>
        <strong class="text-success">Rumah Sakit PKU Muhammadiyah Sukoharjo</strong>
    </div><hr>
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>RM</th>
                                        <th>NO REGISTRASI</th>
                                        <th>TGL PULANG</th>
                                        <th>NO PELAYANAN</th>
                                        <th>LISINOPRIL 5</th>
                                        <th>LISINOPRIL 10</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list['all'] as $item)
                                    <tr>
                                        <th>{{ $item->DAT_PASIEN }}</th>
                                        <th>{{ $item->REG_KUNJUNGANPASIEN }}</th>
                                        <th>{{ $item->TGL_DISCHARGE }}</th>
                                        <th>{{ $item->TRANS_JNSPELAYANAN }}</th>
                                        @if ( $item->DAT_OBATALKES == '1081000018')
                                            <th><i class="fa fa-check"></i></th>
                                        @else
                                            <th></th>
                                        @endif
                                        @if ( $item->DAT_OBATALKES == '1081000017')
                                            <th><i class="fa fa-check"></i></th>
                                        @else
                                            <th></th>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>RM</th>
                                        <th>NO REGISTRASI</th>
                                        <th>TGL PULANG</th>
                                        <th>NO PELAYANAN</th>
                                        <th>LISINOPRIL 5</th>
                                        <th>LISINOPRIL 10</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <hr>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
        <div class="copyright text-center my-auto"><span>RS PKU Muhammadiyah Sukoharjo</span>
        </div>
        </div>
    </footer><br>
    <!-- jquery
		============================================ -->
    <script src="{{ asset('css-farmasi/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('css-farmasi/js/bootstrap.min.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('css-farmasi/js/jquery.scrollUp.min.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('css-farmasi/js/plugins.js') }}"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="{{ asset('css-farmasi/js/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('css-farmasi/js/data-table/data-table-act.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('css-farmasi/js/main.js') }}"></script>
</body>

</html>
