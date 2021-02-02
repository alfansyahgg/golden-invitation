
@extends('layouts.head')

    <!--Custom CSS -->
    @push('styles')
      <link rel="stylesheet" href="{{ asset('public/assets/css/custom-css/custom_front.css') }}" />
    @endpush

@section('content')
    @include('main.components.navbar')

      <div class="section1">
          <div class="boxfloat">
            <h3>Buat Milikmu Sekarang dan Lihat Hasilnya</h3>
              <div class="contentBox">
                  <form action="">
                      <div class="form-group">
                          <input class="form-control form-control-lg" type="text" placeholder="Nama Kamu">
                          <input class="form-control form-control-lg" type="text" placeholder="Nama Pasangan Kamu">

                          <button class="btn form-control btn-lg btn-buat">Mari Kita Buat</button>
                          <button class="btn form-control btn-lg btn-outline-success btn-koleksi">Lihat Koleksi Lain</button>
                          <p id="s_kodepesan">Sudah Punya Kode Pesanan</p>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div class="section section2">
        <hr>
        <h3>Pilihan Harga</h3>

        <div class="rowBox">
          <div class="box_harga">
            <div class="icon">
            </div>
            <div class="text-harga">
                <h4>Buat Undangan Video Mulai dari 128 Ribu</h4>
                <p>Coba Sekarang Juga</p>
            </div>
        </div>

        <div class="box_harga">
            <div class="icon">
            </div>
            <div class="text-harga">
                <h4>Undangan Gambar Mulai dari 99 Ribu</h4>
                <p>Coba Sekarang Juga</p>
            </div>
        </div>
        </div>

      </div>

      <div class="section section3">
        <hr>
        <h3>Undangan Video</h3>
        <div class="box_video">

        </div>
        <div class="box_text">
            <p>Sampaikan kabar tentang hari bahagia dan ungkapkan harapanmu melalui <strong>Undangan Video.</strong></p>
            <button class="btn btn-lg btn-custom">Pilih Tema dan Buat Undanganmu Sekarang</button>
        </div>

      </div>

      <div class="section section4">
        <hr>
        <h3>Undangan Images</h3>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('public/assets/images/wedding-1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('public/assets/images/wedding-2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('public/assets/images/wedding-3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="box_text">
            <p>Untuk yang suka simple, <strong>Undangan Images</strong> pilihan tepat buat kamu. Berbagai macam Desain dan Tema telah kami sediakan dan siap kamu gunakan</p>
            <button class="btn btn-lg btn-custom">Pilih Desain dan Buat Undanganmu Sekarang</button>
        </div>
      </div><!-- End Section 4 -->

      <!-- Section 5 -->
      <div class="section section5">
        <hr>
        <h3>Kenapa harus kami?</h3>
        <div class="boxWhyUs">
            <div class="icon">

            </div>
            <div class="text">
                <h4>Real Time Production</h4>
                <p>Kamu bisa langsung dapatkan undanganmu setelah selesai melakukan transaksi</p>
            </div>
        </div>

        <div class="boxWhyUs">
            <div class="icon">

            </div>
            <div class="text">
                <h4>Revisi? Bebas!</h4>
                <p>Terjadi hal tidak diinginkan? Tenang. Kamu dapat menggantinya tanpa perlu menunggu lam</p>
            </div>
        </div>

        <div class="boxWhyUs">
            <div class="icon">

            </div>
            <div class="text">
                <h4>Layanan 24jam</h4>
                <p>Nggak ada lagi yang namanya menunggu balasan dari admin. Karena sistem kita bisa kamu pakai 24jam non-stop</p>
            </div>
        </div>

        <div class="boxWhyUs">
            <div class="icon">

            </div>
            <div class="text">
                <h4>Berbagai Macam Pilihan</h4>
                <p>Pilih dan gunakan desain yang telah kami sediakan. Masih kurang? Tenang, kita akan selalu update koleksi kita.</p>
            </div>
        </div>

        <div class="boxWhyUs">
            <div class="icon">

            </div>
            <div class="text">
                <h4>Harga Terjangkau</h4>
                <p>Tidak perlu khawatir. Meski dengan berbagai keuntungan diatas, harga yang kita tawarkan pasti menyenangkan</p>
            </div>
        </div>
      </div>

      <!-- Section 6 -->
      <div class="section section6">
        <hr>
        <h3>Buat Sekarang</h3>
        <p>Sekarang, coba buat undanganmu sendiri. Cukup masukan <strong>nama kamu</strong> dan <strong>pasangan kamu,</strong> dan lihat hasilnya</p>
        <div class="formBuat">
            <form action="">
                <div class="form-group">
                    <label for="formGroupExampleInput">Pilih Jenis Undanganmu</label>
                    <select class="form-control">
                        <option>Undangan Video</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Masukkan Nama Lengkap Kamu</label>
                    <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Kamu">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Masukkan Nama Lengkap Pasangan Kamu</label>
                    <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Pasangan Kamu">
                </div>

                <button class="btn form-control btn-lg btn-buat">Mari Kita Buat</button>
            </form>
        </div>
      </div>

      <!-- Section 7 -->
      <div class="section section7">
        <h3>Update Data Revisi</h3>
        <p>Buat kamu yang sudah melakukan Transaksi dan mau melakukan perubahan / melengkapi data, gunakan tombol dibawah ini yes!</p>
        <button class="btn form-control btn-lg btn-buat">Update / Ubah Data</button>
        </div>
      </div>

      <footer>
          <p>Perkenalkan, kami <span>GOLDEN GARDEN INVITATION</span>, sebuah platform penyedia undangan online yang hasilnya bisa kamu dapatkan saat itu juga?</p>
          <hr>
          <p id="copyRight">Produksi Oleh GOLDEN GARDEN DEVELOPER</p>
        </footer>
@endsection
