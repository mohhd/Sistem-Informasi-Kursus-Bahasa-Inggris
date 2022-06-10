@extends('layouts.frontend')

@section('title', 'Join | AILC Course')

@section('content')
  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome To Our Course <span>Ailc</spa>
      </h1>
      <h2>Aziza's International Language Course</h2>
      <div class="d-flex">
        <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> -->
      </div>
    </div>
  </section><!-- End Hero --> -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Reguler</a></h4>
              <p class="description">Reguler merupakan salah satu program yang banyak diminati di ailc yang mana pembelajarannya terdiri berbagai macam2 dan juga cara pembelajarannya yang santai</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Conversation</a></h4>
              <p class="description">program ini adalah program untuk mengasah skill kita dalam berbicara bahasa inggris dengan memperdalam kosa kata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Intensive</a></h4>
              <p class="description">program ini umumnya diminati untuk siswa yang ingin belajar bahasa inggris dengan cepat dikarenakan waktunya yang mendekati ujian sehingga banyak yang memilih program ini</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Semi Intensive</a></h4>
              <p class="description">program ini sama seperti program intensive yang biasanya dilaksanakan juka mendekati ujian di sekolah unbk ataupun try out</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Bergabung</h2>
          <h3>Kenali Kita Lebih dekat <span>Join With Us</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('frontend') }}/assets/img/portfolio/suasana kelas.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Form Pendaftaran</h3>
            <p class="font-italic">
              Silahkan Isi Form dibawah ini.
            </p>
            <form action="/siswa/create" method="POST">
                @csrf
                <div class="from-group {{$errors->has('nama') ? 'has-error' : ''}}">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                    @if($errors->has('nama'))
                        <span class="help-block">{{ $errors->first('nama') }}</span>
                    @endif
                </div>
                <div class="from-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="from-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="from-group {{$errors->has('password_confirmation') ? 'has-error' : ''}}">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
                    @if($errors->has('password_confirmation'))
                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <div class="from-group mt-4">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  @endsection
