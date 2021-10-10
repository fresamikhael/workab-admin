@extends('layouts.admin')

@section('title')
   Edit Product | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="container">
          <form action="{{ route('attendance.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="detail">
              <div class="detail-judul">Nama Produk</div>
              <div class="detail-keterangan">
                <input type="text" id="name" name="name" value="{{ $item->name }}"/>
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Toko</div>
              <div class="detail-keterangan">
                <input type="text" id="shop_id" name="shop_id" value="{{ $item->shop_id }}" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Stock</div>
              <div class="detail-keterangan">
                <input type="number" id="stock" name="stock" value="{{ $item->stock }}" />
              </div>
            </div>

            <button type="submit" class="btn-save">Save</button>
            <div class="btn-kembali">
              <a href="{{ route('product.index') }}">Kembali</a>
            </div>
          </form>
        </div>
      </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="/assets/css/editProductStore.css" />
@endpush
