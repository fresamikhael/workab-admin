@extends('layouts.app')

@section('title')
   Create Attendance | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-2">
                    <div class="detail">
                        <div class="detail-foto">
                            <label for="" class="detail-judul"
                                >Unggah Foto</label
                            >
                            <input
                                type="file"
                                class="file-foto"
                                value=""
                            />
                        </div>
                    </div>
                    <button type="submit" class="btn-save">
                        Save
                    </button>
                    <div class="btn-kembali">
                        <a href="user.html">Kembali</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="detail">
                        <div class="detail-judul">Nama Lengkap</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">NIK</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">
                            Jenis Kelamin
                        </div>
                        <div class="detail-keterangan">
                            <input
                                type="radio"
                                name="gender"
                                value="laki-laki"
                                id="laki"
                            />
                            <label for="laki">Laki-laki</label>
                            <br />
                            <input
                                type="radio"
                                name="gender"
                                value="perempuan"
                                id="perempuan"
                            />
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Jabatan</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Email</div>
                        <div class="detail-keterangan">
                            <input
                                type="email"
                                value=""
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Username</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Password</div>
                        <div class="detail-keterangan">
                            <input
                                type="password"
                                value=""
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/tambah.css">
@endpush
