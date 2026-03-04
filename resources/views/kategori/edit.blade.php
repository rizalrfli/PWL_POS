@extends('layouts.template')

@section('content')
  <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('/kategori/' . $kategori->kategori_id) }}">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label class="col-2 col-form-label">Kode Kategori</label>
            <div class="col-10">
              <input type="text" class="form-control @error('kategori_kode') is-invalid @enderror"
                     id="kategori_kode" name="kategori_kode" value="{{ old('kategori_kode', $kategori->kategori_kode) }}"
                     required placeholder="Masukkan kode kategori">
              @error('kategori_kode')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Nama Kategori</label>
            <div class="col-10">
              <input type="text" class="form-control @error('kategori_nama') is-invalid @enderror"
                     id="kategori_nama" name="kategori_nama" value="{{ old('kategori_nama', $kategori->kategori_nama) }}"
                     required placeholder="Masukkan nama kategori">
              @error('kategori_nama')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label"></label>
            <div class="col-10">
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              <a href="{{ url('/kategori') }}" class="btn btn-sm btn-default ml-1">Kembali</a>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection
