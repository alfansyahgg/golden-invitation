@extends('layouts.head')

@section('title','Data Undangan')

@push('styles')
<link rel="stylesheet" href="{{ asset('public/assets/css/custom-css/custom_dataundangan.css') }}" />
@endpush

@section('content')
    @include('main.components.navbar')

    <div class="informasi">
        <h1>Informasi Undangan</h1>

        <div class="detail">
            <div class="thumbnail">
                <div class="box_thumbnail">

                </div>
                <p>Coba dengan Tema Lainnya</p>
            </div>
            <div class="keterangan">
                <p>Data Akan berubah sesuai dengan progres yang dilakukan</p>

                <h5 class="label">Jenis Pesanan</h5>
                <p class="ket_label">Undangan Video</p>

                <h5 class="label">Informasi Mempelai</h5>
                <p class="ket_label">Belum Terisi</p>

                <h5 class="label">Status Pembayaran</h5>
                <p class="ket_label">Belum Dibayar</p>

                <h5 class="label">Subtotal</h5>
                <p class="ket_label">Rp. 128.000</p>
            </div>
        </div>
    </div>

    <div class="form-informasi">
        <h1>Form Informasi Undangan</h1>
        <p>Form dibawah merupakan informasi yang natinya akan tampil di Undangan</p>


        <form action="" id="inputInfo">
            <hr>
            <p class="info-mempelai">Informasi Mempelai</p>
            <div class="form-group">
                <label for="namaLengkapPria">Nama Pengantin Pria</label>
                <input type="text" class="form-control" id="namaLengkapPria" placeholder="Nama Lengkap Pengantin Pria">
            </div>
            <div class="form-group">
                <label for="namaLengkapWanita">Nama Pengantin Wanita</label>
                <input type="text" class="form-control" id="namaLengkapWanita" placeholder="Nama Lengkap Pengantin Wanita">
            </div>
            <div class="form-group">
                <label for="namaPanggilanPria">Nama Panggilan Pengantin Pria</label>
                <input type="text" class="form-control" id="namaPanggilanPria" placeholder="Nama Panggilan Pengantin Pria">
            </div>
            <div class="form-group">
                <label for="namaPanggilanWanita">Nama Panggilan Pengantin Wanita</label>
                <input type="text" class="form-control" id="namaPanggilanWanita" placeholder="Nama Panggilan Pengantin Wanita">
            </div>

            <hr>
            <p class="info-mempelai">Informasi Keluarga Mempelai Pria</p>
            <div class="form-group">
                <label for="namaAyahPria">Nama Ayah Pengantin Pria</label>
                <input type="text" class="form-control" id="namaAyahPria" placeholder="Ayah dari Pihak Pria">
            </div>
            <div class="form-group">
                <label for="namaIbuPria">Nama Ibu Pengantin Pria</label>
                <input type="text" class="form-control" id="namaIbuPria" placeholder="Ibu dari Pihak Pria">
            </div>
            <div class="form-group">
                <label for="namaWaliPria">Nama Keluarga Pengantin Pria (Opsional)</label>
                <input type="text" class="form-control" id="namaWaliPria" placeholder="Jika Kosong Kita Pakai Nama Ayah">
            </div>

            <hr>
            <p class="info-mempelai">Informasi Keluarga Mempelai Wanita</p>
            <div class="form-group">
                <label for="namaAyahWanita">Nama Ayah Pengantin Wanita</label>
                <input type="text" class="form-control" id="namaAyahWanita" placeholder="Ayah dari Pihak Wanita">
            </div>
            <div class="form-group">
                <label for="namaIbuWanita">Nama Ibu Pengantin Wanita</label>
                <input type="text" class="form-control" id="namaIbuWanita" placeholder="Ibu dari Pihak Wanita">
            </div>
            <div class="form-group">
                <label for="namaWaliWanita">Nama Keluarga Pengantin Wanita (Opsional)</label>
                <input type="text" class="form-control" id="namaWaliWanita" placeholder="Jika Kosong Kita Pakai Nama Ayah">
            </div>

            <hr>
            <p class="info-mempelai">Agenda dan Kegiatan</p>
            <label for="">Akad Pernikahan</label>
            <div class="agendakegiatan">
                <div class="icon-agenda">
                    <h3>2</h3>
                </div>
                <div class="tanggal-agenda">
                    <h3>Sabtu, 19 Januari 2020 / 07.00 wIB</h3>
                    <hr>
                </div>
            </div>
            <div class="form-group">
                <label for="lokasiAkad">Pelaksanaan Resepsi Pernikahan</label>
                <input type="text" class="form-control" id="lokasiAkad" placeholder="Lokasi Janji Suci">
            </div>

            <div class="agendakegiatan">
                <div class="icon-agenda">
                    <h3>2</h3>
                </div>
                <div class="tanggal-agenda">
                    <h3>Sabtu, 19 Januari 2020 / 09.00 wIB</h3>
                    <hr>
                </div>
            </div>
            <div class="form-group">
                <label for="lokasiResepsi">Lokasi Perayaan Pernikahan</label>
                <input type="text" class="form-control" id="lokasiResepsi" placeholder="Venue Resepsi">
            </div>

            <p id="note">Pastikan datamu terisi dengan benar. Namun kamu masih bisa melakukan perubahan dikemudian hari jika terjadi perubahan.</p>

            <div class="options">
                <div class="back">
                    <a href="#"><- Kembali Ke Halaman Utama</a>
                </div>
                <div class="next">
                    <button class="btn btn-next">Ketahap Selanjutnya -></button>
                </div>
            </div>

        </form> <!-- End Form -->

    </div>

@endsection
