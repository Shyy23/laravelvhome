@extends('layouts.app')
@section('title', 'Edit Barang')
@section('header', 'Edit Barang')

@section('content')
<div class="container h-screen">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Edit Barang </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang"
                                value="{{ $barang->nama_barang}}">
                            @error('nama_barang')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                name="deskripsi" placeholder="Masukkan Deskripsi"
                                rows="5">{{$barang->deskripsi}}</textarea>
                            @error('deskripsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                                name="kategori">
                                <option value="Elektronik" {{ $barang->kategori == 'Elektronik' ? 'selected' : '' }}>
                                    Elektronik</option>
                                <option value="Furnitur" {{ $barang->kategori == 'Furnitur' ? 'selected' : '' }}>Furnitur
                                </option>
                                <option value="Pakaian" {{ $barang->kategori == 'Pakaian' ? 'selected' : '' }}>Pakaian
                                </option>
                                <option value="Alat Tulis" {{ $barang->kategori == 'Alat Tulis' ? 'selected' : '' }}>Alat
                                    Tulis</option>
                                <option value="Peralatan" {{ $barang->kategori == 'Peralatan' ? 'selected' : '' }}>
                                    Peralatan
                                </option>
                                <option value="Peralatan Jaringan" {{ $barang->kategori == 'Peralatan Jaringan' ? 'selected' : '' }}>Peralatan Jaringan</option>
                            </select>

                            @error('kategori')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control  @error('stok') is-invalid @enderror" id="stok"
                                name="stok" placeholder="Masukkan Stok" value="{{$barang->stok}}">
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