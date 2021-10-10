@extends('layouts.admin')

@section('title')
   Create User | Admin Dashboard
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
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="detail">
                        <div class="detail-judul">Nama Lengkap</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id="name"
                                name="name"
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">NIK</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id="nik"
                                name="nik"
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
                                value="Laki-Laki"
                                id="Laki-Laki"
                            />
                            <label for="laki">Laki-laki</label>
                            <br />
                            <input
                                type="radio"
                                name="gender"
                                value="Perempuan"
                                id="Perempuan"
                            />
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Role</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id="role"
                                name="role"
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Email</div>
                        <div class="detail-keterangan">
                            <input
                                type="email"
                                value=""
                                id="email"
                                name="email"
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Username</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id="username"
                                name="username"
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Password</div>
                        <div class="detail-keterangan">
                            <input
                                type="text"
                                value=""
                                id="password"
                                name="password"
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-foto">
                            <label for="" class="detail-judul"
                                >Unggah Foto</label
                            >
                            <input
                                type="file"
                                class="file-foto form-control"
                                name="photo"
                                id="photo"
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
            </div>
        </form>
    </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="/assets/css/tambah.css">
@endpush
