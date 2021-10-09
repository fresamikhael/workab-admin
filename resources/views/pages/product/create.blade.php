@extends('layouts.admin')

@section('title')
   Create Product | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="container">
          <form action="">
            <div class="detail">
              <div class="detail-judul">ID Produk</div>
              <div class="detail-keterangan">
                <input type="text" value="" id="" name="" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Produk</div>
              <div class="detail-keterangan">
                <input type="text" value="" id="" name="" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Toko</div>
              <div class="detail-keterangan">
                <select id="" name="">
                  <option value="" disabled>Pilih Toko :</option>
                  <option value="">Mekarjaya</option>
                </select>
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Stock</div>
              <div class="detail-keterangan">
                <input type="number" value="" id="" name="" />
              </div>
            </div>

            <button type="submit" class="btn-save">Save</button>
            <div class="btn-kembali">
              <a href="product.html">Kembali</a>
            </div>
          </form>
        </div>
      </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/tambahProduct.css" />
@endpush
