@extends('adminlte.layouts.app')

@section('title', 'Edit Artikel')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-10">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Artikel</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data"> 
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
                        <label for="pembuat" class="col-md-3 col-form-label text-md-right">{{ __('Pembuat') }}</label>

                        <div class="col-md-7">
                            <input id="pembuat" type="text" class="form-control @error('pembuat') is-invalid @enderror" name="pembuat" value="{{ $artikel->pembuat }}" required autocomplete="pembuat" autofocus>

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
                            <input id="nama_artikel" type="text" class="form-control @error('nama_artikel') is-invalid @enderror" name="nama_artikel" value="{{ $artikel->nama_artikel }}" required autocomplete="nama_artikel" autofocus>

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
                            <input id="tanggal_artikel" type="text" class="form-control @error('tanggal_artikel') is-invalid @enderror" name="tanggal_artikel" value="{{ $artikel->tanggal_artikel }}" required autocomplete="tanggal_artikel" autofocus>

                            @error('tanggal_artikel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Uraian') }}</label>

                        <div class="col-md-7">
                            <textarea id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $artikel->keterangan }}" required autocomplete="keterangan" autofocus></textarea>

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
                                {{ __('Update') }}
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