@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Daftar Barang</h1>
            <table class="table table-striped">
                <thead>
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
                    @foreach ( $barang as $b )
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$b->nama_barang}}</td>
                        <td>{{$b->deskripsi}}</td>
                        <td>{{$b->kategori}}</td>
                        <td>{{$b->stok}}</td>
                        <td><a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
