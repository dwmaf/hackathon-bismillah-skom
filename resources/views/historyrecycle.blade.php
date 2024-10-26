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
                            <th>Estimasi</th>
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
                                <td>{{ $recycle->estimasi }}</td>
                                <td>
                                    @if ($recycle->status === 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif ($recycle->status === 'rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @elseif ($recycle->status === 'success')
                                        <span class="badge bg-success">Success</span>
                                    @else
                                        <span class="badge bg-secondary">Unknown</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
