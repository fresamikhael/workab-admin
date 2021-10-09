@extends('layouts.admin')

@section('title')
   Detail Product | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="container">
          <form action="">
            <div class="detail">
              <div class="detail-judul">ID Produk</div>
              <div class="detail-keterangan">
                <input type="text" value="1" id="" name="" disabled />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Produk</div>
              <div class="detail-keterangan">
                <input
                  type="text"
                  value="Ban Tubles 123"
                  id=""
                  name=""
                  disabled
                />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Toko</div>
              <div class="detail-keterangan">
                <input type="text" name="" id="" value="Mekarjaya" disabled />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Stock</div>
              <div class="detail-keterangan">
                <input type="number" value="120" id="" name="" disabled />
              </div>
            </div>

            <div class="btn-edit-detail">
              <a href="editProduct.html">Edit</a>
            </div>
            <div class="btn-kembali">
              <a href="product.html">Kembali</a>
            </div>
          </form>
        </div>
      </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/detailProductStore.css" />
@endpush
