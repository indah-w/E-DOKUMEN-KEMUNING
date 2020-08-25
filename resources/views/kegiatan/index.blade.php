@extends('adminlte.layouts.app')

@section('title', 'List Kegiatan')

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
		        <h3 class="card-title">List Kegiatan</h3>
		    </div>
		    <div class="card-body">
		    	<!-- @include('partial.alert') -->
		    	<p>
		    		<a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Tambah Data Kegiatan</a>
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
		    				<th>Type File</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
							<th>Action</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($kegiatan as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
		    				<td>{{ $data->id }}</td>
		    				<td>{{ $data->type_file }}</td>
		    				<td>{{ $data->nama_kegiatan }}</td>
							<td>{{ $data->tanggal_kegiatan }}</td>
		    				<td>@include('partial.action', ['data' => $data, 'route'=>'kegiatan'])</td>
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