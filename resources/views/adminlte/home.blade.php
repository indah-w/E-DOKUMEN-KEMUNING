@extends('adminlte.layouts.app')

@section('title', 'Dashboard')
@push('css')
<style>
.custom{
}
</style>
@endpush
@section('content')


<div class="row container-fluid d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Laporan Keuangan</h3>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>
</div>
<div class="row container-fluid d-flex justify-content-center">
    <div class="col-md-12">
        @if(count($kegiatanHarian) > 0)
        <div class="row">
            <div class="col">
                <div>
                    <span>
                        <h3 style="display: inline;">Kegiatan Harian</h3>
                    </span>
                    <span class="pull-right">
                        <a href="{{ route('kegiatan.list', 'type=Harian') }}">View Full</a>
                    </span>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row d-flex justify-content-between">
                    @foreach($kegiatanHarian as $key=>$harian)
                    @include('partial.modalImage', ['data'=>$harian])
                    <div class="col-md-4">
                        <div class="card custom">
                            <div class="card-header" style="padding:unset;">
                                <a data-toggle="modal" data-target="#modalImage-{{ $harian->id }}">
                                    <img class="img" src="{{ asset('img/'.$harian->foto) }}" alt="Foto Harian" style="max-width: -webkit-fill-available;">
                                </a>
                            </div>
                            <div class="card-body" style="padding-top: 10px;padding-bottom: 10px;">
                                <div class="row">
                                    <div class="col">
                                        <span>{{ $harian->nama }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>{{ $harian->tema }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>{{ $harian->tanggal }}</span>
                                    </div>
                                    <div class="col-md-6" style="text-align: right;">
                                        {{-- <a href="">Detail ...</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        
        @if(count($kegiatanBulanan) > 0)
        <div class="row">
            <div class="col-md-12">
                <div>
                    <span>
                        <h3 style="display: inline;">Kegiatan Bulanan</h3>
                    </span>
                    <span class="pull-right">
                        <a href="{{ route('kegiatan.list', 'type=Bulanan') }}">View Full</a>
                    </span>
                </div>
                <div class="row">
                    @foreach($kegiatanBulanan as $key=>$bulanan)
                    @include('partial.modalImage', ['data'=>$bulanan])
                    <div class="col-md-4">
                        <div class="card custom">
                            <div class="card-header" style="padding:unset;">
                                <a data-toggle="modal" data-target="#modalImage-{{ $bulanan->id }}">
                                    <img class="img" src="{{ asset('img/'.$bulanan->foto) }}" alt="Foto Bulanan" style="max-width: -webkit-fill-available;">
                                </a>
                            </div>
                            <div class="card-body" style="padding-top: 10px;padding-bottom: 10px;">
                                <div class="row">
                                    <div class="col">
                                        <span>{{ $bulanan->nama }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>{{ $bulanan->tema }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>{{ $bulanan->tanggal }}</span>
                                    </div>
                                    <div class="col-md-6" style="text-align: right;">
                                        {{-- <a href="">Detail ...</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif  

        @if(count($kegiatanTahunan))
        <div class="row">
            <div class="col-md-12">
                <div>
                    <span>
                        <h3 style="display: inline;">Kegiatan Tahunan</h3>
                    </span>
                    <span class="pull-right">
                        <a href="{{ route('kegiatan.list', 'type=Tahunan') }}">View Full</a>
                    </span>
                </div>
                <div class="row">
                    @foreach($kegiatanTahunan as $key=>$tahunan)
                    @include('partial.modalImage', ['data'=>$tahunan])
                    <div class="col-md-4">
                        <div class="card custom">
                            <div class="card-header" style="padding:unset;">
                                <a data-toggle="modal" data-target="#modalImage-{{ $tahunan->id }}">
                                    <img class="img" src="{{ asset('img/'.$tahunan->foto) }}" alt="Foto Tahunan" style="max-width: -webkit-fill-available;">
                                </a>
                            </div>
                            <div class="card-body" style="padding-top: 10px;padding-bottom: 10px;">
                                <div class="row">
                                    <div class="col">
                                        <span>{{ $tahunan->nama }}</span>
                                        }
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span>{{ $tahunan->tema }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>{{ $tahunan->tanggal }}</span>
                                    </div>
                                    <div class="col-md-6" style="text-align: right;">
                                        {{-- <a href="">Detail ...</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('js/jquery.canvasjs.min.js') }}"></script>
<script src="{{ asset('js/canvasjs.min.js') }}"></script>
<script>
    $('document').ready(function(){
    var dataPoints = [];
    var dataChart = [];
    function getSum(total, num) {
       return total + Math.round(num);
    }

    $.getJSON('{{ route('home.data') }}', function(data) {
        console.log(data)
        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
                e.dataSeries.visible = false;
            } else {
                e.dataSeries.visible = true;
            }
            chart.render();
        }
        
        var chart = new CanvasJS.Chart("chartContainer",{
            theme:"light2",
            animationEnabled: true,
            title:{
                text: "Total Dana"
            },
            axisY :{
                title: "Total Dana",
                includeZero: false
            },
            toolTip: {
                shared: "true"
            },
            legend:{
                cursor:"pointer",
                itemclick : toggleDataSeries
            },
                data : dataChart
            });
            
            $.each(data, function(key, value){
                dataPoints = [];
                dataChart.push({
                    type: "spline",
                    visible: true, 
                    showInLegend: true,
                    yValueFormatString: "",
                    name: key,
                    dataPoints : dataPoints,
                });
                $.each(value, function(ke, va){
                    var sum = va.value.reduce(getSum, 0);
                    dataPoints.push({label: va.label, y: parseInt(sum)});
                });
            });
        chart.render();
    });
    })
</script>
@endpush