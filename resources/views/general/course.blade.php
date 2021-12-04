@extends('layouts.public-layout')
@section('title-page', $course->title)
@section('main-content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset("images/bg_2.jpg")}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 mt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="index.html">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Cours <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">{{$course->title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="description d-flex flex-wrap bg-white">
        <div class="img w-50 p-3 d-flex justify-content-center align-items-center">
            <img src="{{asset('images/blockchain.png')}}" alt="Logo K4A Blockchain">
        </div>
        <div class="w-50 p-2">
            <h3 class="arlon-semibold title-color">Descriptif</h3>
            <ul class="list">
                <li class="list-item">Nombre de séances :<span class="fw-bold">1</span></li>
                <li class="list-item">Support :<span class="fw-bold">Textuel</span></li>
            </ul>
            <div class="author-infos mx-2">
                <i class="fas fa-user fs-2"></i><span class=""> {{$course->author}}</span>
                <div class="author-qualifcation"></div>
            </div>
            <div class="description-cours">
                <h6 class="arlon-semibold title-color">Mot de l'auteur</h6>
                <p class="arlon-light">{{$course->description}}</p>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-outline-primary py-3">Commencer maintenant</a>
            </div>
        </div>
    </div>
    @if ($same_categories_courses->count()>0)
    <div class="same-category px-3">
        <section class="my-3 courses-section">
            <h3 class="arlon-semibold title-color">Dans la même catégorie</h3>
            <div class="container">
              <div class="row">
        
                @foreach ($same_categories_courses as $same_categories_course)
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
                <div class="courses d-flex flex-column justify-content-between">
                  <div class="d-flex">
                      <div class="icon d-flex justify-content-center align-items-center"><img src="{{asset($same_categories_course->category->icon)}}" alt="{{$same_categories_course->category->title}}"></div>
                      <div class="text">
                          <h2>{{$same_categories_course->title}}</h2>
                          {{-- <p class="rate">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span>(5.0)</span>
                          </p> --}}
                          <div class="author-wrap d-flex align-items-center">
                              {{-- <div class="img" style="background-image: url(images/author-1.jpg);">
                              </div> --}}
                              <span class="author text-capitalize">{{$same_categories_course->author}}</span>
                          </div>
                          {{-- <p class="lec"><a href="#">50 lectures (190 hrs)</a></p> --}}
                      </div>
                  </div>
                  {{-- <div class="text-center bg-light rounded py-2 my-3">
                      <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                      </p>
                  </div> --}}
                  <div class="text-center">
                      <a href="{{route('course.show',["category_id"=>$same_categories_course->category_id,"course_id"=>$same_categories_course->id])}}" class="btn d-block btn-primary btn-outline-primary py-3">Rejoindre la session!</a>
                  </div>
                </div>
                </div>
                @endforeach
        
              </div>
            </div>
          </section>
    </div>
    @endif
@endsection
