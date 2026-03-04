@extends('layouts.template')

@section('content')
  <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('/barang') }}">
          @csrf
          <div class="form-group row">
            <label class="col-2 col-form-label">Kategori</label>
            <div class="col-10">
              <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" required>
                <option value="">- Pilih Kategori -</option>
                @foreach($kategori as $item)
                  <option value="{{ $item->kategori_id }}" {{ old('kategori_id') == $item->kategori_id ? 'selected' : '' }}>
                    {{ $item->kategori_nama }}
                  </option>
                @endforeach
              </select>
              @error('kategori_id')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Kode Barang</label>
            <div class="col-10">
              <input type="text" class="form-control @error('barang_kode') is-invalid @enderror"
                     id="barang_kode" name="barang_kode" value="{{ old('barang_kode') }}"
                     required placeholder="Masukkan kode barang">
              @error('barang_kode')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Nama Barang</label>
            <div class="col-10">
              <input type="text" class="form-control @error('barang_nama') is-invalid @enderror"
                     id="barang_nama" name="barang_nama" value="{{ old('barang_nama') }}"
                     required placeholder="Masukkan nama barang">
              @error('barang_nama')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Harga Jual</label>
            <div class="col-10">
              <input type="number" class="form-control @error('harga_jual') is-invalid @enderror"
                     id="harga_jual" name="harga_jual" value="{{ old('harga_jual') }}"
                     required placeholder="Masukkan harga jual">
              @error('harga_jual')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Harga Beli</label>
            <div class="col-10">
              <input type="number" class="form-control @error('harga_beli') is-invalid @enderror"
                     id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}"
                     required placeholder="Masukkan harga beli">
              @error('harga_beli')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label"></label>
            <div class="col-10">
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              <a href="{{ url('/barang') }}" class="btn btn-sm btn-default ml-1">Kembali</a>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection
