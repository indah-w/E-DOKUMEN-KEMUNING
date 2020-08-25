@extends('adminlte.layouts.app')

@section('title', 'Edit Member')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Member</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('member.update', $member->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf
                    <div class="form-group row">
                        <label for="nama_kartu_keluarga" class="col-md-3 col-form-label text-md-right">{{ __('Nama Kartu Keluarga') }}</label>

                        <div class="col-md-7">
                            <input id="nama_kartu_keluarga" type="text" class="form-control @error('nama_kartu_keluarga') is-invalid @enderror" name="nama_kartu_keluarga" value="{{ $member->nama_kartu_keluarga }}" required autocomplete="nama_kartu_keluarga" autofocus>

                            @error('nama_kartu_keluarga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-7">
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $member->alamat }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telepon" class="col-md-3 col-form-label text-md-right">{{ __('No Telepon') }}</label>

                        <div class="col-md-7">
                            <input id="no_telepon" type="number" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $member->no_telepon }}" required autocomplete="no_telepon" autofocus>

                            @error('no_telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status_rumah" class="col-md-3 col-form-label text-md-right">{{ __('Status Rumah') }}</label>

                        <div class="col-md-7">
                            <input id="status_rumah" type="number" class="form-control @error('status_rumah') is-invalid @enderror" name="status_rumah" value="{{ $member->status_rumah }}" required autocomplete="status_rumah" autofocus>

                            @error('status_rumah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_anak" class="col-md-3 col-form-label text-md-right">{{ __('Jumlah Anak') }}</label>

                        <div class="col-md-7">
                            <input id="jumlah_anak" type="number" class="form-control @error('jumlah_anak') is-invalid @enderror" name="jumlah_anak" value="{{ $member->jumlah_anak }}" required autocomplete="jumlah_anak" autofocus>

                            @error('jumlah_anak')
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