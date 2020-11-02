@extends('adminlte.layouts.app')

@section('title', 'Daftar Event')

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
		        <h3 class="card-title">Daftar Event</h3>
		    </div>
		    <div class="card-body">
		    	<!-- @include('partial.alert') -->
		    	<p>
		    		<a href="{{ route('event.create') }}" class="btn btn-primary">Tambah Data Event</a>
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
                            <th>ID Event</th>
							<th>Foto</th>
		    				<th>Nama Event</th>
                            <th>Tanggal Event</th>
                            <th>Harga Event</th>
							<th>Lokasi</th>
							<th>Link</th>
                            <th>Uraian</th>
							<th>Opsi</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($event as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
		    				<td>{{ $data->id }}</td>
							<td><img src="img/{{$data->foto}}" width="200px;" alt=""></td>
		    				<td>{{ $data->nama_event }}</td>
		    				<td>{{ $data->tanggal_event }}</td>
							<td>{{ $data->harga_event }}</td>
							<td>{{ $data->lokasi }}</td>
							<td>{{ $data->link }}</td>
                            <td>{{ $data->keterangan }}</td>
		    				<td>@include('partial.action', ['data' => $data, 'route'=>'event'])</td>
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