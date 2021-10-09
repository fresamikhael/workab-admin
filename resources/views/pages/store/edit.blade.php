@extends('layouts.admin')

@section('title')
   Edit Store | Admin Dashboard
@endsection

@section('content')
            <main>
                <div class="container">
                    <form action="">
                        <div class="detail">
                            <div class="detail-judul">ID Toko</div>
                            <div class="detail-keterangan">
                                <input
                                    type="text"
                                    value="1"
                                    id=""
                                    name=""
                                    disabled
                                />
                            </div>
                        </div>
                        <div class="detail">
                            <div class="detail-judul">Nama Toko</div>
                            <div class="detail-keterangan">
                                <input
                                    type="text"
                                    value="Sumber Makmur"
                                    id=""
                                    name=""
                                />
                            </div>
                        </div>

                        <div class="detail">
                            <div class="detail-judul">Alamat Toko</div>
                            <div class="detail-keterangan">
                                <textarea type="number" value="" id="" name="">
                                    Jl.ABCD NO.12</textarea
                                >
                            </div>
                        </div>

                        <button type="submit" class="btn-save">Save</button>
                        <div class="btn-kembali">
                            <a href="store.html">Kembali</a>
                        </div>
                    </form>
                </div>
            </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/editProductStore.css" />
@endpush
