@extends('layouts.app')
@section('title', 'Data User')

@section('content')
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($user as $key => $usr)
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $usr->name; ?></td>
                <td><?= $usr->email; ?></td>
                <td>
                    <a href="" class="btn btn-secondary btn-xs">Edit</a>
                    <a href="" class="btn btn-danger btn-xs">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
