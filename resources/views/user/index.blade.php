@extends('layouts.app')
@section('title', 'Data User')

@section('content')
<div class="table-responsive">
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-xs mb-3">Tambah Data</a>
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
                <td class="text-center">
                    <a href="{{ route('user.edit', $usr->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                    {{-- <a href="{{ route('user.destroy', $usr->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                    <form action="{{ route('user.destroy', $usr->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
