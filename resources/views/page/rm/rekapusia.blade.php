@extends('layouts.layout-rm')

@section('content')
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			{{-- <a href="{{ route('direktur.cetak') }}" class="btn btn-warning text-white">
				<i class="lnr lnr-printer">  </i>CETAK
			</a> --}}
			<p></p>
			<!-- Rekap Hari ini -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Data Rawat Inap Pasien <strong class="text-danger">(Hari Ini)</strong></h3>
				</div>
				<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-sm" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th></th>
										<th>Bangsal Lt.3</th>
										<th>Bangsal Lt.4</th>
										<th>Kebidanan</th>
										<th>Perinatologi</th>
										<th>Isolasi</th>
										<th>ICU</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Total Jml</th>
										{{--  <th colspan="6">{{ $list['akomodasi']['total'][0]->jumlah }}</th>  --}}
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<th>Jml</th>
										{{--  <td>{{ $list['akomodasi']['lt3'][0]->jumlah }}</td>
										<td>{{ $list['akomodasi']['lt4'][0]->jumlah }}</td>
										<td>{{ $list['akomodasi']['keb'][0]->jumlah }}</td>
										<td>{{ $list['akomodasi']['per'][0]->jumlah }}</td>
										<td>{{ $list['akomodasi']['iso'][0]->jumlah }}</td>
										<td>{{ $list['akomodasi']['icu'][0]->jumlah }}</td>  --}}
									</tr>
								</tbody>
							</table>
						</div>
				</div>
            </div>


        </div>
    </div>
</div>
@endsection
