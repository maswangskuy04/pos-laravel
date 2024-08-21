@extends('layouts.app')
@section('title', 'Data Produk')

@section('content')
    <div class="table-responsive">
        <a href="{{ route('product.create') }}" class="btn btn-primary btn-xs mb-3">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Nama Produk</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($product as $key => $prd)
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $prd->category->category_name ?></td>
                        <td><?= $prd->product_name ?></td>
                        <td><?= $prd->product_qty ?></td>
                        <td><?= number_format($prd->product_price,2,',','.'); ?></td>
                        <td class="text-center">
                            <a href="{{ route('product.edit', $prd->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('product.destroy', $prd->id) }}" method="post" class="d-inline">
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
