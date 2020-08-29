@extends('adminlte.layouts.app')

@section('title', 'Edit Event')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Event</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
		    		@csrf
                    <div class="form-group row">
                        <label for="foto" class="col-md-3 col-form-label text-md-right">{{ __('Foto') }}</label>

                        <div class="col-md-7">
                            <input id="foto" type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" autocomplete="foto" autofocus>

                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_event" class="col-md-3 col-form-label text-md-right">{{ __('Nama Event') }}</label>

                        <div class="col-md-7">
                            <input id="nama_event" type="text" class="form-control @error('nama_event') is-invalid @enderror" name="nama_event" value="{{ $kegiatan->nama_event }}" required autocomplete="nama_event" autofocus>

                            @error('nama_event')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_event" class="col-md-3 col-form-label text-md-right">{{ __('Tanggal Event') }}</label>

                        <div class="col-md-7">
                            <input id="tanggal_event" type="text" class="form-control @error('tanggal_event') is-invalid @enderror" name="tanggal_event" value="{{ $kegiatan->tanggal_event }}" required autocomplete="tanggal_event" autofocus>

                            @error('tanggal_event')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga_event" class="col-md-3 col-form-label text-md-right">{{ __('Harga Event') }}</label>

                        <div class="col-md-7">
                            <input id="harga_event" type="text" class="form-control @error('harga_event') is-invalid @enderror" name="harga_event" value="{{ $kegiatan->harga_event }}" required autocomplete="harga_event" autofocus>

                            @error('harga_event')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lokasi" class="col-md-3 col-form-label text-md-right">{{ __('Lokasi') }}</label>

                        <div class="col-md-7">
                            <input id="lokasi" type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ $kegiatan->lokasi }}" required autocomplete="lokasi" autofocus>

                            @error('lokasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Uraian') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $kegiatan->keterangan }}" required autocomplete="keterangan" autofocus>

                            @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Ubah') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
@endpush