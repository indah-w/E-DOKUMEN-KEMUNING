@extends('adminlte.layouts.app')

@section('title', 'Daftar Warga')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Daftar Warga</h3>
		    </div>
		    <div class="card-body">
		    	<!-- @include('partial.alert') -->
		    	<p>
		    		<a href="{{ route('member.create') }}" class="btn btn-primary">Tambah Data Warga</a>
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
		    				<th>ID Warga</th>
		    				<th>Nama Kepala Keluarga</th>
		    				<th>Alamat</th>
							<th>No Telepon</th>
							<th>Status Rumah</th>
							<th>Jumlah Anak</th>
							<th>Memiliki Tempat Sampah</th>
							<th>Jumlah Biopori</th>
							<th>Anggota Bank Sampah</th>
							<th>Tanggal Pembaharuan</th>
							<th>Opsi</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($member as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
		    				<td>{{ $data->id }}</td>
		    				<td>{{ $data->nama_kartu_keluarga }}</td>
		    				<td>{{ $data->alamat }}</td>
							<td>{{ $data->no_telepon }}</td>
							<td>{{ $data->status_rumah }}</td>
							<td>{{ $data->jumlah_anak }}</td>
							<td>{{ $data->memiliki_tempat_sampah }}</td>
							<td>{{ $data->jumlah_biopori }}</td>
							<td>{{ $data->anggota_bank_sampah }}</td>
							<td>{{ $data->updated_at->toDateString() }}</td>
		    				<td>@include('partial.action', ['data' => $data, 'route'=>'member'])</td>
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

<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
      	dom: 'Bfrtip',
        buttons: [
        'excel', 'print'
        ],
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush