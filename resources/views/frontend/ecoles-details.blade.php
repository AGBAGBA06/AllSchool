@include('include/header')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" >
  
      <div class="container">
        <h2>ecoles Details</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="ecoles-details" class="ecoles-details">
      <div class="container" data-aos="">

        <div class="row">
          <div class="col-lg-8"> 
            <a href="{{asset('upload/ecoles/'.$ecoles->image_couverture)}}"> 
              <img src="{{asset('upload/ecoles/'.$ecoles->image_couverture)}}" style="min-width:754px !important;object-fit:cover ; height:554px" class="img-fluid" alt="">
            </a>
            <h3>{{$ecoles->nom}}</h3>
           
            <p>
              Qui et explicabo voluptatem et ab qui vero et voluptas. Sint voluptates temporibus quam autem. Atque nostrum voluptatum laudantium a doloremque enim et ut dicta. Nostrum ducimus est iure minima totam doloribus nisi ullam deserunt. Corporis aut officiis sit nihil est. Labore aut sapiente aperiam.
              Qui voluptas qui vero ipsum ea voluptatem. Omnis et est. Voluptatem officia voluptatem adipisci et iusto provident doloremque consequatur. Quia et porro est. Et qui corrupti laudantium ipsa.
              Eum quasi saepe aperiam qui delectus quaerat in. Vitae mollitia ipsa quam. Ipsa aut qui numquam eum iste est dolorum. Rem voluptas ut sit ut.
            </p>
            <p>
              {{$ecoles->description}}</p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Nom</h5>
              <p>{{$ecoles->nom}}</p>
            </div>

            

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Type d'eccole</h5>
              <p>{{$ecoles->type}}</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Niveau Scolaire</h5>
              <p>{{$ecoles->niveau_scolaire}}</p>
            </div>



            <div class="course-info d-flex justify-content-between align-items-center">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">CEP</th>
                    <th scope="col">BEPC</th>
                    <th scope="col">BAC</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">2022-2023</th>
                    <td>{{$ecoles->resultatcep}}%</td>
                    <td>{{$ecoles->resultatbepc}}%</td>
                    <td>{{$ecoles->resultatbac}}%</td>
                    
                  </tr>
                
                  
                </tbody>
              </table>
            </div>
  
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Ville </h5>
              <p>{{$ecoles->address}}</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Telephone</h5>
              <p>{{$ecoles->tel}}</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>domaine</h5>
              <p>{{$ecoles->domaine}}</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show " data-bs-toggle="tab" href="#tab-1"></a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-10 details order-2 order-lg-1">
                    <h3></h3>
                    <p class=" justify-content-center align-items-center"></p>
                  </div>
                  <div class="col-lg-8 text-center order-1 order-lg-2">
                    {{-- <img src="{{asset('upload/ecoles/'.$ecoles->image_couverture)}}" alt="" class="img-fluid"> --}}
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
  @include('include/footer')