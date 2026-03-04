@extends('layouts.template')

@section('content')
  <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
          <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create') }}">Kembali</a>
        </div>
      </div>
      <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-bordered table-sm table-striped table-hover">
          <tr>
            <th>ID</th>
            <td>{{ $level->level_id }}</td>
          </tr>
          <tr>
            <th>Kode Level</th>
            <td>{{ $level->level_kode }}</td>
          </tr>
          <tr>
            <th>Nama Level</th>
            <td>{{ $level->level_nama }}</td>
          </tr>
        </table>

        <a href="{{ url('/level') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
      </div>
  </div>
@endsection
