@extends('layouts.app')
@section('title', 'Tambah Produk')

@section('content')
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-5">
                <select name="category_id" id="" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($category as $ctg)
                    <option value="<?= $ctg->id ?>"><?= $ctg->category_name ?></option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Produk</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="product_name" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Qty</label>
            </div>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="product_qty" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Harga</label>
            </div>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="product_price" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
