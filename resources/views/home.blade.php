@extends('layouts.main')

@section('navHome', 'active')

@section('content')
<header class="bg-gradient" id="home">
  <div class="container mt-1">
    <div class="container-fluid hero-header mb-1">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 class="sub1 fw-light text-white animated slideInRight">Cuci <span class="span">Hemat,</span>  Cuci Berkualitas!</h2>
                    <p class="desk text-white mb-4 animated slideInRight">Mari percayakan kebutuhan pencucian Anda kepada kami di Fast Clean Laundry  dan nikmati pakaian yang bersih, segar, dan terawat dengan baik setiap saat!
                    </p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="/images/mesincuci.png" alt="">
                </div>
            </div>
        </div>
    </div>
</header>

 <!-- About Start -->
 <div class="container-fluid py-5 " id="about">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
          <img class="img-fluid animated pulse infinite" src="/images/logo-1.png" />
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <h3 class=" pt-5 mb-4">Why Choose Us?</h3>
          <p class="mb-4">
            Layanan laundry kami menawarkan kualitas cuci yang tinggi dengan perhatian khusus pada detil dan kebersihan pakaian, sehingga pelanggan akan mendapatkan hasil yang memuaskan setiap kali. Kami juga menjamin pengerjaan yang cepat dan tepat waktu
          </p>
          <p class="mb-4"> sehingga pelanggan tidak perlu menunggu lama untuk mendapatkan pakaian kembali. Meskipun menawarkan kualitas tinggi, harga yang kami tawarkan tetap bersaing dan terjangkau bagi berbagai kalangan pelanggan.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->   

  <div class="section light-bg" id="gallery">
    <div class="container">
      <div class="section-title">
        <h3>Laundry Room</h3>
      </div>

      <div class="img-gallery owl-carousel owl-theme">
        <img src="/images/room-1.jpg" alt="image"/>
        <img src="/images/room-2.jpg" alt="image"/>
        <img src="/images/room-3.jpg" alt="image"/>
        
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
                      <img src="images/diskon.png" alt="diskon"  class="img-fluid rounded justify-content-center mr-lg-5 mb-5 mb-lg-0">
                      
                  </div>
              </div>
              <div class="tab-pane fade" id="schedule">
                  <div class="d-flex flex-column flex-lg-row">
                     
                      <img src="images/dropof.png" alt="dropof" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                  </div>
              </div>
              <div class="tab-pane fade" id="messages">
                  <div class="d-flex flex-column flex-lg-row">
                      <img src="images/selfservice.png" alt="selfservice" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                     
                  </div>
              </div>
          </div>
      </div>
    </div>


    <div class="client-logos" id="contact">
      <div class="container text-center ">
        <img src="images/client-logos.png" alt="client logos" class="img-fluid" />
      </div>
    </div>
    
    <div class="map height-300 pt-1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d249.35548031799578!2d101.3987705457664!3d0.463652338091255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9bc86b4b417%3A0x94e290673138bc58!2sGaruda%20Cyber%20Institute!5e0!3m2!1sid!2sid!4v1711440903911!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

      <div class="light-bg-y py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
              <p class="mb-2 text-white">Jl. HR. Soebrantas, Sidomulyo Bar, Kec. Tampan, Kota Pekanbaru, Riau</p>
              <div class="d-block d-sm-inline-block">
                <p class="mb-2"><span class="ti-email mr-2"></span> <a class="mr-4 text-white" href="mailto:support@mobileapp.com">fastcleanlaundry@gmail.com</a></p>
              </div>
              <div class="d-block d-sm-inline-block">
                <p class="mb-0 "><span class="ti-headphone-alt mr-2"></span> <a class="text-white"  href="tel:62-812-3434-1244">+62-812-3434-1244</a></p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection