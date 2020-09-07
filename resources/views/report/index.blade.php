@extends('adminlte.layouts.app')

@section('title', 'Report Kampung Kemuning')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Report Kampung Kemuning</h3>
		    </div>
		    <div class="card-body">
		    	<!-- @include('partial.alert') -->
		    	<!-- <p>
		    		<a href="{{ route('report.create') }}" class="btn btn-primary">Tambah Data Report</a>
		    	</p> -->
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
		    				<th>Jumlah Rumah Tetap</th>
		    				<th>Jumlah Rumah Kontrak</th>
		    				<th>Jumlah Anak-anak</th>
                            <th>Jumlah Tempat Sampah</th>
                            <th>Jumlah Biopori</th>
                            <th>Jumlah Anggota Bank Sampah</th>
							<th>Opsi</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<tr>
		    				<td>{{ \Carbon\Carbon::now() }}</td>
		    				<td>{{ $jumlahRumahTetap }}</td>
		    				<td>{{ $jumlahRumahTidakTetap }}</td>
		    				<td>{{ $jumlahAnak }}</td>
		    				<td>{{ $jumlahMemilikiTempatSampah }}</td>
		    				<td>{{ $jumlahBiopori }}</td>
		    				<td>{{ $jumlahAnggotaBankSampah }}</td>
		    				<td></td>
		    			</tr>
		    		</tbody>
		    	</table>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush