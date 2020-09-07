@extends('adminlte.layouts.app')

@section('title', 'Buat Kegiatan')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Buat Kegiatan</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
		    		@csrf
                    <div class="form-group row">
                        <label for="foto" class="col-md-3 col-form-label text-md-right">{{ __('Foto ') }}</label>

                        <div class="col-md-7">
                            <input id="foto" type="file" accept="foto/x-png,foto/gif,foto/jpeg, foto/jpg" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_kegiatan" class="col-md-3 col-form-label text-md-right">{{ __('Nama Kegiatan') }}</label>

                        <div class="col-md-7">
                            <input id="nama_kegiatan" type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}" required autocomplete="nama_kegiatan" autofocus>

                            @error('nama_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_kegiatan" class="col-md-3 col-form-label text-md-right">{{ __('Tanggal Kegiatan') }}</label>

                        <div class="col-md-7">
                            <input id="tanggal_kegiatan" type="date" class="form-control @error('tanggal_kegiatan') is-invalid @enderror" name="tanggal_kegiatan" value="{{ old('tanggal_kegiatan') }}" required autocomplete="tanggal_kegiatan" autofocus>

                            @error('tanggal_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Simpan') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
