@extends('layout')

@section("title-page","L'Équipe")


@section("main-content")

@include("_partials.navbar")

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 pt-5 mt-5 text-center">
        <p class="breadcrumbs"><span class="me-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>équipe <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">L'Équipe</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-1.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3>Abdoul Rachid SAWADOGO</h3>
            <span class="position">Business developper</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-2.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3> Azaviel SOMDA</h3>
            <span class="position">Legal officer</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-3.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3>Sylvain KOAMA</h3>
            <span class="position">Business law & digital learner</span>
          </div>
        </div>
      </div>
      {{-- <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-4.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3>Ph.D Brian Wooden</h3>
            <span class="position">Developer and Lead Instructor</span>
          </div>
        </div>
      </div> --}}
{{--
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-1.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3>Ph.D Adrian Molises</h3>
            <span class="position">Developer and Lead Instructor</span>
          </div>
        </div>
      </div> --}}
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-4.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3>Mariam SAVADOGO</h3>
            <span class="position"> Digital Marketing Strategist and business developer</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-5.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3>Jean- Francois ZOUBA </h3>
            <span class="position">Web and mobile web developer</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
        <div class="staff">
          <div class="img" style="background-image: url(images/team-6.png);">
            <ul class="ftco-social">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="text">
            <h3>Ismael OUIYA </h3>
            <span class="position">Web and mobile web developer</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section-counter img" style="background-image: url(images/bg_3.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row section-counter">
      <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
        <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
          <div class="icon">
            <span class="flaticon-graduation"></span>
          </div>
          <div class="text">
            <h2 class="number"><span class="countup">3000</span></h2>
            <span class="caption">Success Stories</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
        <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="icon">
            <span class="flaticon-scientist"></span>
          </div>
          <div class="text">
            <h2 class="number"><span class="countup">320</span></h2>
            <span class="caption">Trusted Tutors</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
        <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
          <div class="icon">
            <span class="flaticon-calendar"></span>
          </div>
          <div class="text">
            <h2 class="number"><span class="countup">1000</span></h2>
            <span class="caption">Schedules</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
        <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <div class="icon">
            <span class="flaticon-learning"></span>
          </div>
          <div class="text">
            <h2 class="number"><span class="countup">587</span></h2>
            <span class="caption">Courses</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-intro py-5 bg-primary">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10">
        <div class="row g-lg-5">
          <div class="col-md-7 text-lg-right">
            <h2 class="mb-0">Newsletter - Restez à l'écoute et obtenez la dernière mise à jour</h2>
            <p>Très loin, derrière le mot montagnes</p>
          </div>
          <div class="col-md-5 border-left d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex align-items-center">
                <input type="text" class="form-control" placeholder="Entrez l'adresse e-mail">
                <a href="#" class="btn-icon"><span class="fa fa-paper-plane"></span></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection