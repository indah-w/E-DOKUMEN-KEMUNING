@extends('adminlte.layouts.app')

@section('title', 'Edit Dokumen')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Dokumen</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                    <div class="form-group row">
                        <label for="file" class="col-md-3 col-form-label text-md-right">{{ __('File') }}</label>

                        <div class="col-md-7">
                            <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" autocomplete="file" autofocus>

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
                            <input id="nama_dokumen" type="text" class="form-control @error('nama_dokumen') is-invalid @enderror" name="nama_dokumen" value="{{ $dokumen->nama_dokumen }}" required autocomplete="nama_dokumen" autofocus>

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
                            <select class="form-control selec2bs4" name="type_file" id="type_file">
                                <option value="Pilih">Pilih</option>
                                <option value="Word" @if($dokumen->type_file == "Word") selected @endif>Word</option>
                                <option value="Excel" @if($dokumen->type_file == "Excel") selected @endif>Excel</option>
                                <option value="Pdf" @if($dokumen->type_file == "Pdf") selected @endif>Pdf</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $dokumen->keterangan }}" required autocomplete="keterangan" autofocus>

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