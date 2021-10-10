@extends('layouts.admin')

@section('title')
   Create Store | Admin Dashboard
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
          <form action="{{ route('store.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="detail">
              <div class="detail-judul">Nama Toko</div>
              <div class="detail-keterangan">
                <input type="text" id="name" name="name" class="form-control" />
              </div>
            </div>

            <div class="detail">
              <div class="detail-judul">Alamat Toko</div>
              <div class="detail-keterangan">
                <input type="text" id="address" name="address" class="form-control" />
              </div>
            </div>

            <div class="detail">
              <div class="detail-judul">Latitude</div>
              <div class="detail-keterangan">
                <input type="number" id="lat" name="lat" class="form-control" />
              </div>
            </div>

            <div class="detail">
              <div class="detail-judul">Longtitude</div>
              <div class="detail-keterangan">
                <input type="number" id="long" name="long" class="form-control" />
              </div>
            </div>

            <div class="detail">
              <div class="detail-judul">Barcode</div>
              <div class="detail-keterangan">
                <input type="text" id="barcode" name="barcode" class="form-control" />
              </div>
            </div>

            <div class="detail">
              <div class="detail-judul">Barcode Image</div>
              <div class="detail-keterangan">
                <input type="text" id="barcode_image" name="barcode_image" class="form-control" />
              </div>
            </div>

            <button type="submit" class="btn-save">Save</button>
            <div class="btn-kembali">
              <a href="{{ route('store.index') }}">Kembali</a>
            </div>
          </form>
        </div>
      </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="/assets/css/tambahStore.css" />
@endpush
