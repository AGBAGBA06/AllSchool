
@extends('layout/base_client')
  <!-- ======= Hero Section ======= -->
  @section('contenu')

<section id="hero" class="hero">


<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

<div class="carousel-item active" style="background-image: url(assets/img/carousel/hero-carousel-1.jpg)">
    
<div class="info d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h2>Gagnez du temps et trouvez les ecoles qui vous intéressent en un seul endroit !
        </span></h2>
      </div>
    </div>
  </div>
</div>
</div>


 <div class="carousel-item" style="background-image: url(assets/img/carousel/hero-carousel-3.jpg)">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h2>Simplifiez votre recherche  d'ecoles avec notre site pratique et efficace !
            </span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item" style="background-image: url(assets/img/carousel/hero-carousel-4.jpg)">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h2 data-aos="">Soyez informé en temps réel ecoles disponibles grâce à notre site !
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item" style="background-image: url(assets/img/carousel/hero-carousel-5.jpg)">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h2 >Économisez du temps et de l'argent en trouvant les ecoles qui vous conviennent sur notre site !
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-ico" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-ico" aria-hidden="true"></span>
  </a>

</div>

</section><!-- End Hero Section -->


<main id="main">
<!-- ======= Features Section ======= -->
<div id="features" class="features ">
  <div class="container">
    {{-- <div class="position-relative w-75 mt-3">
      <form action="{{ url('/search')}}" method="GET" role="search">
        {{ csrf_field() }}
        <input class="form-control border-3 rounded-pill w-100 ps-4 pe-5" value="{{Request::get('search')}}" name="search" type="text" placeholder="Rechercher une ecole" style="height: 58px;">
        
        <button type="submit" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Recherche</button>
      </form>
    </div> --}}
    
    <div class="row align-items-center justify-content-center ">
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-file-4-line" style="color: #29cc61;"></i>
          <h3><a href="/" class="{{ (request()->is('/')?'Active':'') }}">All</a></h3>
        </div>
      </div>

       
        <div class="col-lg-3 col-md-4 mt-4 ">
          <div class="icon-box">
        <i class="ri-ball-pen-line" style="color: #ff5828;"></i>
        <h3><a href="">Secondaire</a></h3>
      </div>
    </div>  
       
     

    
    <div class="col-lg-3 col-md-4 mt-4">
      <div class="icon-box">
        <i class="ri-file-4-line" style="color: #29cc61;"></i>
        <h3><a href="">Secondaire</a></h3>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 mt-4">
      <div class="icon-box">
        <i class="ri-file-4-line" style="color: #29cc61;"></i>
        <h3><a href="">Universitaire</a></h3>
      </div>
    </div>
  
        
      </div>
  </div>
</div>
</div><!-- End Features Section -->
<!-- Booking Start -->
<div class="container-fluid booking pb-5 mt-4 wow fadeIn" data-wow-delay="0.1s">
<div class="container">
  <div class="my shadow" style="padding: 35px;">
      <div class="row g-2">
          <div class="col-md-10">
              <div class="row g-2">
                  <div class="col-md-3">
                      <div class="" id="" data-target-input="nearest">
                        <form action="{{ url('/search')}}" method="GET" role="search">
                          {{ csrf_field() }}
                          <input  class="form-control "
                              placeholder="Domaine" value="{{Request::get('search')}}" name="domaine" type="text" />
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="" id="" data-target-input="nearest">
                      <input type="text" class="form-control "value="{{Request::get('search')}}" name="ville" placeholder="Ville" data-target="" data-toggle="" />
                  </div>
                  </div>
                  <div class="col-md-3">
                      <select class="form-select" value="{{Request::get('search')}}" name="type">
                          <option selected>Type</option>
                          <option value="publique">Publique</option>
                          <option value="privee">Privee</option>
                          <option value="laique">Laique</option>
                          <option value="confessionnelle">Confessionelle</option>
                      </select>
                  </div>
                  <div class="col-md-3">
                      <select class="form-select"  placeholder="" value=" " name="niveau_scolaire">
                          <option selected>Niveau Scolaire</option>
                          <option value="maternelle">Maternelle</option>
                          <option value="primaire">Primaire</option>
                          <option value="secondaire">Secondaire</option>
                          <option value="universitaire">Universitaire</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="col-md-2">
              <button class="btn btn-primary w-100">Rechercher</button>
              </form>
          </div>
      </div>
  </div>
</div>
</div>
<!-- Booking End -->

<!-- ======= Popular ecoles Section ======= -->
<section id="ecoles"  class="courses">
  <div class="container">

    <div class="section-title">
      <h2>ecoles</h2> 
      <p> ecoles recentes</p>
    </div>

    <div  class="row justify-content-center">

      @foreach ($ecolese as $ecolee)
      <div  class="col-lg-4 col-md-6 d-flex mb-4 align-items-stretch">
        <div style="background-color: #f5fafa" class="course-item">
          <a href="{{asset('upload/ecoles/'.$ecolee->image_couverture)}}">
          <img src="{{asset('upload/ecoles/'.$ecolee->image_couverture)}}"  style="min-width:154px !important;object-fit:cover ; height:254px" class="card-img-top" alt="..."></a>
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>{{$ecolee->nom}}</h4>
            </div>

            <h3><a href="{{url('/ecoles_details/'.$ecolee->id)}}">{{Str::limit($ecolee->nom, 75)}}</a></h3>
                <div class="container"><p class="justify-content-center">{{Str::limit($ecolee->description, 195)}} <a style="color: #ff5828" class="" href=" {{url('/ecoles_details/'.$ecolee->id)}}"> voir plus</a></p>
                </div>               
            </div>
        </div>
      </div> <!-- End Course Item-->
      
      @endforeach
      
    </div>
    {{$ecolese->links('pagination::bootstrap-4')}}
    {{-- <nav aria-label="Page navigation example">
      <ul class="paginatiobn align-items-center justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav> --}}
  </div>
  
</section><!-- End Popular Courses Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
  @endsection