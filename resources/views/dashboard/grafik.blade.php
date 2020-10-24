@extends('adminlte.layouts.app')

@section('title', 'Grafik ')

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
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <img src="" alt="">
	</div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('js/jquery.canvasjs.min.js') }}"></script>
<script>
$( document ).ready(function() {
    $.getJSON("{{ route('dashboard.data') }}", function(datas) {

        var dataPoints = [];
        var options = {
            title: {
                text: "Laporan Data Member"
            },
            data: [{
                type: "column",
                dataPoints: datas
            }]
        };
        $("#chartContainer").CanvasJSChart(options);
    });
});
</script>
@endpush

