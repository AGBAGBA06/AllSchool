@include('include/header')
  <main id="">

     <!-- ======= Contact Section ======= -->
     <section id="register" class="register">
      
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-2 content">
          
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row mb-3">

                <div class="col-md-8">
                    <input id="raison_sociale" type="text" placeholder="Raison sociale" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" value="{{ old('raison_sociale') }}" required autocomplete="raison_sociale" autofocus>

                    @error('raison_sociale')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md-8">
                    <input id="name" type="text" placeholder="Nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md-8">
                    <input id="prenom" type="text" placeholder="Prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            

            <div class="row mb-3">

                <div class="col-md-8">
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md-8">
                    <input id="password" type="password" placeholder="mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md-8">
                    <input id="password-confirm" placeholder="Confirmer" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 ">
                    <button type="submit" class="btn btn-secondary w-100">
                        {{ __('inscrire') }}
                    </button> <br>
                    <h6>vous avez deja un compte ? <a href="{{URL::to('/login')}}" >Connectez vous</a>
                    </h6>
                </div>
                
            </div>
        </form>
        </div>
        <div class="pt-4 mt-6 pb-2">
          
          <h5 class="card-title text-center mb-4 mt-5 pb-0 fs-4">Creer un compte</h5>
          <!-- <p class="text-center small">Entrer vos donnees personnelles pour creer un compte</p> -->
        </div>
        <div class="col-lg-6 order-2 order-lg-1">
          <img src="assets/img/offres-details-tab-4.png" class="img-fluid" alt="">
        </div>
      </div>

 
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="dashboard/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dashboard/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="dashboard/assets/vendor/echarts/echarts.min.js"></script>
  <script src="dashboard/assets/vendor/quill/quill.min.js"></script>
  <script src="dashboard/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="dashboard/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="dashboard/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="dashboard/assets/js/main.js"></script>

</body>

</html>