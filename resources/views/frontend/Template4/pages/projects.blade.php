@extends('frontend.Template4.layouts.master')

@section('content')
<section class="py-3 position-relative">

<div class="container-fluid px-0">
  <div class="position-absolute w-100 border-dashed-bottom opacity-25 top-5 z-index-2"></div>
  <div class="container px-md-5">
    <div class="row g-0">
      <div class="col-lg-12 pb-6 px-0 mb-lg-0">
        <div class="swiper-container swiper-theme" data-swiper='{"slidesPerView":1,"breakpoints":{"576":{"slidesPerView":1.2}},"spaceBetween":30,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"loopedSlides":3,"slideToClickedSlide":true}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row align-items-xl-center">
                <div class="col-lg-5"><img class="img-fluid w-100" src="{{ asset('frontend/template4/assets/img/exhibitions/img01.png')}}" alt="" />
                  <div class="position-absolute top-5 start-5 mt-n1 d-flex flex-column align-items-center"><span class="rounded-circle bg-white p-2 d-block"></span><span class="text-white fw-bold">2017</span></div>
                </div>
                <div class="col-lg-6 col-xl-5 mt-4 mt-lg-0">
                  <h1 class="fw-bolder mb-3">Through the Eyes of Kubrick</h1>
                  <p class="text-warning fs-3 opacity-75">Individual</p>
                  <p class="fs-0">s a genre of Japanese art that became popular in the 17th century through to the 19th century. The word roughly translates as “pictures of the floating world” and artists belonging to the movement produced woodblock prints and paintings of scenes from history and folktales, sumo wrestlers, landscapes of flora and fauna, and a touch of erotica.</p>
                  <button class="btn btn-link text-warning p-0 fs-2"><span class="fw-bolder">Details </span><img class="ms-3" src="{{ asset('frontend/template4/assets/img/icons/long-arrow.png')}}" alt="" /></button>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row align-items-xl-center">
                <div class="col-lg-5"><img class="img-fluid w-100" src="{{ asset('frontend/template4/assets/img/exhibitions/img02.png')}}" alt="" />
                  <div class="position-absolute top-5 start-5 mt-n1 d-flex flex-column align-items-center"><span class="rounded-circle bg-white p-2 d-block"></span><span class="text-white fw-bold">2015</span></div>
                </div>
                <div class="col-lg-6 col-xl-5 mt-4 mt-lg-0">
                  <h1 class="fw-bolder mb-3">Wave of Surrealism in photography</h1>
                  <p class="text-warning fs-3 opacity-75">Collective</p>
                  <p class="fs-0">s a genre of Japanese art that became popular in the 17th century through to the 19th century. The word roughly translates as “pictures of the floating world” and artists belonging to the movement produced woodblock prints and paintings of scenes from history and folktales, sumo wrestlers, landscapes of flora and fauna, and a touch of erotica.</p>
                  <button class="btn btn-link text-warning p-0 fs-2"><span class="fw-bolder">Details </span><img class="ms-3" src="{{ asset('frontend/template4/assets/img/icons/long-arrow.png')}}" alt="" /></button>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row align-items-xl-center">
                <div class="col-lg-5"><img class="img-fluid w-100" src="{{ asset('frontend/template4/assets/img/exhibitions/img03.png')}}" alt="" />
                  <div class="position-absolute top-5 start-5 mt-n1 d-flex flex-column align-items-center"><span class="rounded-circle bg-white p-2 d-block"></span><span class="text-white fw-bold">2015</span></div>
                </div>
                <div class="col-lg-6 col-xl-5 mt-4 mt-lg-0">
                  <h1 class="fw-bolder mb-3">Through the Eyes of Kubrick</h1>
                  <p class="text-warning fs-3 opacity-75">Individual</p>
                  <p class="fs-0">s a genre of Japanese art that became popular in the 17th century through to the 19th century. The word roughly translates as “pictures of the floating world” and artists belonging to the movement produced woodblock prints and paintings of scenes from history and folktales, sumo wrestlers, landscapes of flora and fauna, and a touch of erotica.</p>
                  <button class="btn btn-link text-warning p-0 fs-2"><span class="fw-bolder">Details </span><img class="ms-3" src="{{ asset('frontend/template4/assets/img/icons/long-arrow.png')}}" alt="" /></button>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row align-items-xl-center">
                <div class="col-lg-5"><img class="img-fluid w-100" src="{{ asset('frontend/template4/assets/img/exhibitions/img04.png')}}" alt="" />
                  <div class="position-absolute top-5 start-5 mt-n1 d-flex flex-column align-items-center"><span class="rounded-circle bg-white p-2 d-block"></span><span class="text-white fw-bold">2015</span></div>
                </div>
                <div class="col-lg-6 col-xl-5 mt-4 mt-lg-0">
                  <h1 class="fw-bolder mb-3">Through the Eyes of Kubrick</h1>
                  <p class="text-warning fs-3 opacity-75">Individual</p>
                  <p class="fs-0">s a genre of Japanese art that became popular in the 17th century through to the 19th century. The word roughly translates as “pictures of the floating world” and artists belonging to the movement produced woodblock prints and paintings of scenes from history and folktales, sumo wrestlers, landscapes of flora and fauna, and a touch of erotica.</p>
                  <button class="btn btn-link text-warning p-0 fs-2"><span class="fw-bolder">Details </span><img class="ms-3" src="{{ asset('frontend/template4/assets/img/icons/long-arrow.png')}}" alt="" /></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-theme swiper-pagination d-flex mt-4"></div>
      </div>
    </div>
  </div>
</div>
<!-- end of .container-->

</section>
@endsection
