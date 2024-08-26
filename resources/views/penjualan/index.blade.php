@extends('layouts.app')
@section('title', 'Transaksi Penjualan')

@section('content')
<form action="" method="post">
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label for="">Kode Transaksi</label>
                <input type="text" class="form-control" name="kode_transaksi" value="" readonly>
            </div>
            <div class="mb-3">
                <label for="">Kategori Produk</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">Pilih Kategori Produk</option>
                    @foreach ($categories as $ctg)
                    <option value="{{ $ctg->id }}">{{ $ctg->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">Qty Produk</label>
                <input type="number" class="form-control" placeholder="Qty Produk" id="product_qty">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label for="">Tanggal Transaksi</label>
                <input type="text" class="form-control" name="tanggal_transaksi" value="<?= date('d/M/Y') ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="">Nama Produk</label>
                <select name="" id="product_id" class="form-control">
                    <option value="">Pilih Produk</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" id="product_name">
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" id="product_price">
            </div>
        </div>
    </div>
    <div class="table-transaction mt-5">
        <div class="float-right mb-3">
            <button type="button" class="btn btn-sm btn-primary tambah-produk">Tambah Produk</button>
        </div>
        <table class="table table-bordered bg-dark">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="row mt-2">
            <div class="col-sm-11">
                <h3>Total</h3>
            </div>
            <div class="col-sm-1">
                <h4 class="total_price"></h4>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-10">
                <h3>Bayar</h3>
            </div>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="bayar">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-10">
                <h3>Kembali</h3>
            </div>
            <div class="col-sm-2">
                <input type="text" class="form-control" readonly id="kembali">
            </div>
        </div>
    </div>
</form>
@endsection
