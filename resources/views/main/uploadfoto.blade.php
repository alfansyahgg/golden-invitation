@extends('layouts.head')

@section('title', 'Upload Foto')

@push('styles')
<link rel="stylesheet" href="{{ asset('public/assets/css/custom-css/custom_uploadfoto.css') }}" />
@endpush

@section('content')
    @include('main.components.navbar')

    <div class="wrapper">
        <div class="informasi">
            <h1>Informasi Undangan</h1>

            <div class="detail">
                <div class="thumbnail">
                    <div class="box_thumbnail">

                    </div>
                    <p>Masih ingin coba tema lain?</p>
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
            <hr>
        </div>

        <div class="divUpload">
            <h1>Upload Foto dan Gambar</h1>
            <p>Saatnya mengupload momen-momen kebersamaan mu dengan pasangan untuk ditampilkan dalam undangan nantinya</p>

            <div class="box">
                <div class="icon"></div>
                <p>Tekan Untuk Mengunggah</p>
            </div>

            <p id="uploaded">Gambar Terunggah (2/3)</p>

            <div class="uploaded-img">
                <div class="img-holder"></div>
                <div class="img-holder"></div>
                <div class="img-holder"></div>
            </div>
            <p id="notes">Pastikan Fotomu. Namun kamu masih bisa melakukan perubahan dikemudian hari jika terjadi perubahan.</p>

            <div class="options">
                <div class="back">
                    <a href="#"><- Kembali Ke Halaman Utama</a>
                </div>
                <div class="next">
                    <button class="btn btn-next">Ketahap Selanjutnya -></button>
                </div>
            </div>
        </div>

    </div><!-- End Wrapper -->


@endsection
