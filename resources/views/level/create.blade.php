@extends('layouts.template')

@section('content')
  <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('/level') }}">
          @csrf
          <div class="form-group row">
            <label class="col-2 col-form-label">Kode Level</label>
            <div class="col-10">
              <input type="text" class="form-control @error('level_kode') is-invalid @enderror"
                     id="level_kode" name="level_kode" value="{{ old('level_kode') }}"
                     required placeholder="Masukkan kode level">
              @error('level_kode')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Nama Level</label>
            <div class="col-10">
              <input type="text" class="form-control @error('level_nama') is-invalid @enderror"
                     id="level_nama" name="level_nama" value="{{ old('level_nama') }}"
                     required placeholder="Masukkan nama level">
              @error('level_nama')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label"></label>
            <div class="col-10">
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              <a href="{{ url('/level') }}" class="btn btn-sm btn-default ml-1">Kembali</a>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection
