@extends('layouts.admin')

@section('title')
   Create Product | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
          <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="detail">
              <div class="detail-judul">Nama Produk</div>
              <div class="detail-keterangan">
                <input type="text" id="name" name="name" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Toko</div>
              <div class="detail-keterangan">
                <input type="text" id="shop_id" name="shop_id" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Stock</div>
              <div class="detail-keterangan">
                <input type="number" id="stock" name="stock" />
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
    <link rel="stylesheet" href="/assets/css/tambahProduct.css" />
@endpush
