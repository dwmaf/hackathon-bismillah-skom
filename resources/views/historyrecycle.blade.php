@extends('layouts.layout')
@section('child')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        History
    </div>
    <div class="card-body">
        
        <table id="datatablesSimple">
            <thead>
                    <tr>
                        <th >No</th>
                        <th >Merk</th>
                        <th >Kondisi</th>
                        <th >Lokasi</th>
                        <th >Deskripsi</th>
                        <th >Estimasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recycles as $recycle)
                    <tr>
                        <td >{{ $loop->iteration}}</td>
                        <td >{{ $recycle->merk->nama_merk }}</td>
                        <td >{{ $recycle->model }}</td>
                        <td >{{ $recycle->kondisi }}</td>
                        <td >{{ $recycle->lokasi }}</td>
                        <td >{{ $recycle->deskripsi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

@endsection