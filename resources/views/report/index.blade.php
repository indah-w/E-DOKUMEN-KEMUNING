@extends('adminlte.layouts.app')

@section('title', 'List Report Kampung Kemuning')

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
		        <h3 class="card-title">List Report Kampung Kemuning</h3>
		    </div>
		    <div class="card-body">
		    	<!-- @include('partial.alert') -->
		    	<p>
		    		<a href="{{ route('report.create') }}" class="btn btn-primary">Tambah Data Report</a>
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
		    				<th>ID Report</th>
		    				<th>Jumlah Rumah Tetap</th>
		    				<th>Jumlah Rumah Kontrak</th>
		    				<th>Jumlah Anak-anak</th>
                            <th>Jumlah Tempat Sampah</th>
                            <th>Jumlah Biopori</th>
                            <th>Total Anggota Bank Sampah</th>
							<th>Action</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($report as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
		    				<td>{{ $data->id }}</td>
		    				<td>{{ $data->jumlah_rumah_tetap }}</td>
		    				<td>{{ $data->jumlah_rumah_kontrak }}</td>
		    				<td>{{ $data->jumlah_anak }}</td>
                            <td>{{ $data->jumlah_tempat_sampah }}</td>
                            <td>{{ $data->jumlah_biopori }}</td>
                            <td>{{ $data->jumlah_anggota_bs }}</td>
		    				<td>@include('partial.action', ['data' => $data, 'route'=>'report'])</td>
		    			</tr>
		    			@endforeach
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