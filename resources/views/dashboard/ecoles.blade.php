<div style="margin-left:25%">
@include('include/dash_header')


  <main id="main" class="main">

    <div class="pagetitle">
      <br><br>
      <h1>Salut {{ Auth::user()->prenom }} !! Consultez la liste des ecoles que vous avez publie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{('/dashboad')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">liste des ecoles publiees <span>| Today</span></h5>
                  @if (Session::has('status'))
                  <div class="alert alert-success">
                    {{Session::get('status')}}
                  </div>
                @endif
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">image</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Type</th>
                        <th scope="col">Directeur</th>
                        <th scope="col">Addresse</th>
                        <th scope="col">num.Tel</th>
                        <th scope="col">Acttion</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ecoles as $ecole)
                      <tr>
                        <th scope="row"><a href="#"><img src="{{asset('upload/ecoles/'.$ecole->image_couverture)}}" alt=""></a></th>
                        <td><a href="{{url('/ecoles_details/'.$ecole->id)}}" class="text-primary fw-bold">{{Str::limit($ecole->nom, 50)}}</a></td>
                        <td>{{$ecole->type}}</td>
                        <td>{{$ecole->directeur}}</td>
                        <td>{{$ecole->address}}</td>
                        <td>{{$ecole->tel}}</td>
                        <td>
                          <a href="{{url('/deleteecole/'.$ecole->id)}}"><button class='btn btn-outline-danger' type="button">suppr </button>
                            <a href="{{url('/editecole/'.$ecole->id)}}"><button class='btn btn-outline-success' type="button">modifier </button>
                              @if ($ecole->status==1)
                       <button class="btn btn-outline-warning" >
                            <a href="{{url('/desactiver_ecole/'.$ecole->id)}}"> desactivé</a></button>
                         @else
                          <button class="btn btn-outline-primary" >
                            <a href="{{url('/activer_ecole/'.$ecole->id)}}">activé</a></button></td>
                        @endif 
                            </tr>  
                      @endforeach
                     
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('include/dash_footer')
</div>
