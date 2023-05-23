@include('include/header')
  <main>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" >
        <div class="container">
          <h2>Comment ca marche</h2>
          <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
        </div>
      </div><!-- End Breadcrumbs -->
      <section id="about" class="about">
          <div class="container" >
    
            <div class="row">
              <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Comment ca marche</h3>
               
                <ul>
                  <li><i class="bi bi-check-circle"></i>Les entités publiques ou privées publient des appels d'offres sur le site web « offres actuelles » en fournissant les détails et les exigences du projet, y compris la date limite pour soumettre les offres..</li>
                  <li><i class="bi bi-check-circle"></i>Les entreprises intéressées peuvent consulter les appels d'offres disponibles sur le site et examiner les détails du projet.</li>
                  <li><i class="bi bi-check-circle"></i>Les entreprises qui souhaitent soumissionner pour un appel d'offres doivent s'inscrire sur le site web et soumettre leur proposition conformément aux exigences de l'appel d'offres.</li>
                  <li><i class="bi bi-check-circle"></i>Les propositions sont examinées par l'entité publique ou privée et le contrat est généralement attribué à l'entreprise ayant soumis l'offre la plus compétitive.</li>
                </ul>
                
              </div>
            </div>
    
          </div>
        </section><!-- End About Section -->
        {{-- <select class="form-select"  name="type" id="type" aria-label="Default select example">
          <option value="Admin" {{( $data[0]->type==$data[0]->type) ? 'selected' : ''}}>{{$data[0]->type}}</option>
          @foreach ($roleName as $key->$value)
              
          <option value="{{$value->categorie}}" >{{$value->categorie}}</option>
          @endforeach
          --}}
          {{-- @foreach ($roleName as $key=>$value)
          <option value="{{$value->categorie}}" {{$value->categorie=='Admin'? 'selected' : ''}} >{{$value->role_type}}</option>
          @endforeach 
        </select>--}}
</main>



  <!-- ======= Footer ======= -->
  @include('include/footer')