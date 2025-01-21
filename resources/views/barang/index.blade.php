@extends('layouts.app')
@section('title', 'Manage Barang')
@section('header', 'Daftar Barang')
@section('content')
      <div class="container">
              <div class="row">
                <div class="col-md-12">
                <a href="{{route('barang.create')}}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Barang</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                  <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($barang as $b)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $b->nama_barang }}</td>
                        <td>{{ $b->deskripsi }}</td>
                        <td>{{ $b->kategori }}</td>
                        <td>{{ $b->stok }}</td>
                        <td>
                          <a href="/barang/edit/{{ $b->id_barang }}" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="/barang/delete/{{ $b->id_barang }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash"></i> Delete
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
