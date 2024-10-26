@extends('layouts.layout')
@section('child')
    <div class="container ">
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                History
            </div>
            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>jenis</th>
                            <th>Merk</th>
                            <th>Model</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recycles as $recycle)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $recycle->jenis }}</td>
                                <td>{{ $recycle->nama_merk }}</td>
                                <td>{{ $recycle->model }}</td>
                                <td>{{ $recycle->kondisi }}</td>
                                <td>{{ $recycle->name }}</td>
                                <td>{{ $recycle->deskripsi }}</td>
                                <td>{{ $recycle->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
