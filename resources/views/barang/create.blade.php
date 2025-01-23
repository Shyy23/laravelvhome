@extends('layouts.app')
@section('title', 'Tambah Barang')
@section('header', 'Tambah Barang')

@section('content')
<div class="container h-screen">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Tambah Barang Baru</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('barang.index') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang"
                                value="{{old('nama_barang')}}">
                            @error('nama_barang')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                name="deskripsi" placeholder="Masukkan Deskripsi" rows="5"
                                value="{{old('deskripsi')}}"></textarea>
                            @error('deskripsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                                name="kategori">
                                @foreach($kategoriList as $kategoriItem)
                                    <option value="{{ $kategoriItem->id_kategori }}" {{ old('kategori') == $kategoriItem->id_kategori ? 'selected' : '' }}>
                                        {{ $kategoriItem->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>

                            @error('kategori')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control  @error('stok') is-invalid @enderror" id="stok"
                                name="stok" placeholder="Masukkan Stok" value="{{old('stok')}}">
                            @error('stok')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-3">Simpan Barang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection