@extends('layouts.public-layout')

@section("title-page","Cours de ".$courses[0]->category->title)

@section("main-content")
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/bg_2.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 mt-5 text-center">
          <p class="breadcrumbs"><span class="me-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Cours <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Cours de <span class="text-capitalize text-white">{{$courses[0]->category->title}}</span></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section courses-section">
    <div class="container">
      <div class="row">

        @foreach ($courses as $course)
        <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
        <div class="courses d-flex flex-column justify-content-between">
          <div class="d-flex">
              <div class="icon d-flex justify-content-center align-items-center"><img src="{{asset($course->category->icon)}}" alt="{{$course->category->title}}"></div>
              <div class="text">
                  <h2>{{$course->title}}</h2>
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
                      <span class="author text-capitalize">{{$course->author}}</span>
                  </div>
                  {{-- <p class="lec"><a href="#">50 lectures (190 hrs)</a></p> --}}
              </div>
          </div>
          {{-- <div class="text-center bg-light rounded py-2 my-3">
              <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
              </p>
          </div> --}}
          <div class="text-center">
              <a href="{{route('course.show',["category_id"=>$course->category_id,"course_id"=>$course->id])}}" class="btn d-block btn-primary btn-outline-primary py-3">Rejoindre la session!</a>
          </div>
        </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Catégories</span>
                    <h2 class="mb-4">Catégories de Cours/MOOCs/Formations</h2>
                </div>
            </div>
            <div class="row g-lg-2 justify-content-center">
                @foreach ($categories as $category)
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch category-item" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="1000">
                <a href="{{route('courses.by.cat',["category_id"=>$category->id])}}" class="services-2">
                    <div class="icon"><img src="{{asset($category->icon)}}" alt="{{$category->title}}"></div>
                    <div class="text">
                        <h2 class="d-flex justify-content-center align-items-center">{{$category->title}}</h2>
                        <span class="position-absolute">{{$category->courses()->count()}}</span>
                    </div>
                </a>
            </div>
                @endforeach
                
                
            </div>
        </div>
    </section>

@endsection