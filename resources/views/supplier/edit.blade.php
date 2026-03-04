@extends('layouts.template')

@section('content')
  <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('/supplier/' . $supplier->supplier_id) }}">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label class="col-2 col-form-label">Kode Supplier</label>
            <div class="col-10">
              <input type="text" class="form-control @error('supplier_kode') is-invalid @enderror"
                     id="supplier_kode" name="supplier_kode" value="{{ old('supplier_kode', $supplier->supplier_kode) }}"
                     required placeholder="Masukkan kode supplier">
              @error('supplier_kode')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Nama Supplier</label>
            <div class="col-10">
              <input type="text" class="form-control @error('supplier_nama') is-invalid @enderror"
                     id="supplier_nama" name="supplier_nama" value="{{ old('supplier_nama', $supplier->supplier_nama) }}"
                     required placeholder="Masukkan nama supplier">
              @error('supplier_nama')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Alamat</label>
            <div class="col-10">
              <textarea class="form-control @error('supplier_alamat') is-invalid @enderror"
                        id="supplier_alamat" name="supplier_alamat"
                        placeholder="Masukkan alamat supplier" rows="3">{{ old('supplier_alamat', $supplier->supplier_alamat) }}</textarea>
              @error('supplier_alamat')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label">Telepon</label>
            <div class="col-10">
              <input type="text" class="form-control @error('supplier_telepon') is-invalid @enderror"
                     id="supplier_telepon" name="supplier_telepon" value="{{ old('supplier_telepon', $supplier->supplier_telepon) }}"
                     placeholder="Masukkan nomor telepon supplier">
              @error('supplier_telepon')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2 col-form-label"></label>
            <div class="col-10">
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              <a href="{{ url('/supplier') }}" class="btn btn-sm btn-default ml-1">Kembali</a>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection
