@include('include/header')
  <!-- ======= Hero Section ======= -->
 

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Resultats pour <<>> </h2>
        <p>Les questions qu’on nous posent fréquemment sont répondues ici </p>
      </div>
    </div><!-- End Breadcrumbs -->
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

    <!-- ======= Popular ecoles Section ======= -->
    <section id="ecoles"  class="courses">
      <div class="container">

        <div class="section-title">
          <h2>ecoles</h2> 
          <p> ecoles recentes</p>
        </div>

        <div class="row justify-content-center">

            @forelse ($searchecole as $ecoleItem)
                
          <div class="col-lg-4 col-md-6 d-flex mb-4 align-items-stretch">
            <div class="course-item"><a href="/upload/ecoles/{{$ecoleItem->image_couverture}}">
              <img src="/upload/ecoles/{{$ecoleItem->image_couverture}}" style="min-width:154px !important;object-fit:cover ; height:254px" class="card-img-top" alt="..."></a>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{$ecoleItem->type}}</h4>
                </div>

                <h3>
                    <a href="{{url('/ecoles_details/'.$ecoleItem->id)}}">{{$ecoleItem->nom}}</a></h3>
                    <div class="container"><p class="justify-content-center">{{Str::limit($ecoleItem->description, 75)}}</p>
                    </div>               
                </div>
            </div>
          </div> <!-- End Course Item-->
            @empty
                <p class=" align-items-center " style="color: red;">Pas de resultats !!!!</p>
            @endforelse
          
        </div>
        {{$searchecole->links('pagination::bootstrap-4')}}
        {{-- <nav aria-label="Page navigation example">
          <ul class="pagination align-items-center justify-content-center">
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
  @include('include/footer')