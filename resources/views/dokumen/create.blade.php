@extends('adminlte.layouts.app')

@section('title', 'Buat Dokumen')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Buat Dokumen</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
		    		@csrf

                    <div class="form-group row">
                        <label for="file" class="col-md-3 col-form-label text-md-right">{{ __('Dokumen ') }}</label>

                        <div class="col-md-7">
                            <input id="file" type="file" accept="file/doc,file/docx,file/xls,file/xlsx, file/ppt, file/pptx" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" autofocus>

                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_dokumen" class="col-md-3 col-form-label text-md-right">{{ __('Nama Dokumen') }}</label>

                        <div class="col-md-7">
                            <input id="nama_dokumen" type="text" class="form-control @error('nama_dokumen') is-invalid @enderror" name="nama_dokumen" value="{{ old('nama_dokumen') }}" required autocomplete="nama_dokumen" autofocus>

                            @error('nama_dokumen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type_file" class="col-md-3 col-form-label text-md-right">{{ __('Type File') }}</label>

                        <div class="col-md-7">
                            <input id="type_file" type="text" class="form-control @error('type_file') is-invalid @enderror" name="type_file" value="{{ old('type_file') }}" required autocomplete="type_file" autofocus>

                            @error('type_file')
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
                        <div class="col-md-6 offset-md-4 ">
                            <button type="submit" class="btn btn-primary float-right">
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
@push('js')
@endpush