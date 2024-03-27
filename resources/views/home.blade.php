@extends('layouts.main')

@section('navHome', 'active')

@section('content')
<header class="bg-gradient" id="home">
  <div class="container mt-5">
      <h1>Kebersihan Terjamin, Kepuasan Anda Prioritas Utama</h1>
      <p class="tagline">Layanan laundry kami menawarkan kualitas cuci yang tinggi dengan perhatian khusus pada detil dan kebersihan pakaian, sehingga pelanggan akan mendapatkan hasil yang memuaskan setiap kali. </p>
  </div>
  <div class="img-holder mt-3"><img src="/images/mesin.png" alt="phone" class="img-fluid"></div>
</header>

<div class="section light-bg" id="about">
  <div class="container">
    <h3 class="jud pt-3">Why Choose Us?</h3>
      <div class="row">
          <div class="col-md-8 d-flex align-items-center">
              <ul class="list-unstyled ui-steps">
                  <li class="media">
                      <div class="circle-icon mr-4">1</div>
                      <div class="media-body">
                          <h5>Kualitas Pelayanan</h5>
                          <p> Layanan laundry Kami menawarkan kualitas cuci yang tinggi dengan perhatian khusus pada detil dan kebersihan pakaian, sehingga pelanggan akan mendapatkan hasil yang memuaskan setiap kali.</p>
                      </div>
                  </li>
                  <li class="media my-4">
                      <div class="circle-icon mr-4">2</div>
                      <div class="media-body">
                          <h5>Pengerjaan Cepat dan Tepat Waktu</h5>
                          <p> Layanan laundry Kami menjamin pengerjaan yang cepat dan tepat waktu, sehingga pelanggan tidak perlu menunggu lama untuk mendapatkan pakaian kembali.</p>
                      </div>
                  </li>
                  <li class="media">
                      <div class="circle-icon mr-4">3</div>
                      <div class="media-body">
                          <h5>Harga Bersaing</h5>
                          <p>Meskipun menawarkan kualitas tinggi, harga yang Kami tawarkan tetap bersaing dan terjangkau bagi berbagai kalangan pelanggan. </p>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="col-md-4">
              <img src="/images/promo.png" alt="promo" class="img-fluid">
          </div>

      </div>

  </div>

</div>
  <div class="section light-bg"  id="service">
      <div class="container">
          <div class="section-title">
              <h3>Price List</h3>
          </div>
          <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#communication">Promo</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#schedule">Drop Off</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#messages">Self Service</a>
              </li>
          </ul>
          <div class="tab-content">
              <div class="tab-pane fade show active" id="communication">
                  <div class="d-flex flex-column flex-lg-row">
                      <img src="images/diskon.png" alt="graphic"  class="img-fluid rounded justify-content-center mr-lg-5 mb-5 mb-lg-0">
                      
                  </div>
              </div>
              <div class="tab-pane fade" id="schedule">
                  <div class="d-flex flex-column flex-lg-row">
                     
                      <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                  </div>
              </div>
              <div class="tab-pane fade" id="messages">
                  <div class="d-flex flex-column flex-lg-row">
                      <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                     
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="client-logos" id="contact">
      <div class="container text-center">
        <img src="images/client-logos.png" alt="client logos" class="img-fluid" />
      </div>
    </div>
    <div class="map height-300 pt-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d249.35548031799578!2d101.3987705457664!3d0.463652338091255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9bc86b4b417%3A0x94e290673138bc58!2sGaruda%20Cyber%20Institute!5e0!3m2!1sid!2sid!4v1711440903911!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
@endsection