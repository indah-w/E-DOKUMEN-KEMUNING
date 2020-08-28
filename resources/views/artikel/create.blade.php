@extends('adminlte.layouts.app')

@section('title', 'Create Artikel')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Create Artikel</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
		    		@csrf
                    <div class="form-group row">
                        <label for="foto" class="col-md-3 col-form-label text-md-right">{{ __('Foto ') }}</label>

                        <div class="col-md-7">
                            <input id="foto" type="file" accept="foto/x-png,foto/gif,foto/jpeg" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pembuat" class="col-md-3 col-form-label text-md-right">{{ __('Pembuat') }}</label>

                        <div class="col-md-7">
                            <input id="pembuat" type="text" class="form-control @error('pembuat') is-invalid @enderror" name="pembuat" value="{{ old('pembuat') }}" required autocomplete="pembuat" autofocus>

                            @error('pembuat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_artikel" class="col-md-3 col-form-label text-md-right">{{ __('Nama Artikel') }}</label>

                        <div class="col-md-7">
                            <input id="nama_artikel" type="text" class="form-control @error('nama_artikel') is-invalid @enderror" name="nama_artikel" value="{{ old('nama_artikel') }}" required autocomplete="nama_artikel" autofocus>

                            @error('nama_artikel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_artikel" class="col-md-3 col-form-label text-md-right">{{ __('Tanggal Artikel') }}</label>

                        <div class="col-md-7">
                            <input id="tanggal_artikel" type="text" class="form-control @error('tanggal_artikel') is-invalid @enderror" name="tanggal_artikel" value="{{ old('tanggal_artikel') }}" required autocomplete="tanggal_artikel" autofocus>

                            @error('tanggal_artikel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan" autofocus>

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
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
