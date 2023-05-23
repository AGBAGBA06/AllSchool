<div style="margin-left:25%">
@include('include/dash_header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          
          
              @php($profile_image = auth()->user()->profile_image) 
              <img src="@if($profile_image == null){{ asset("logos/logos/avatar.png") }}  @else {{ asset("logos/logos/$profile_image") }} @endif" alt="Profile" class="rounded-circle">
              
              <h2>{{ Auth::user()->name }}</h2>
              <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

           
              </ul>
                      
            @if (Session::has('status'))
            <div class="alert alert-success">
              {{Session::get('status')}}
            </div>
          @endif
          @if (count($errors)>0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
         @endif
              
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Description</h5>
                  <p>{{ auth()->user()->description }}</p>
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Raison sociale</div>
                    <div class="col-lg-9 col-md-8">{{ Auth::user()->raison_sociale }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nom et Prenom</div>
                    <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}  {{ Auth::user()->prenom }}</div>
                  </div>
                  
                  <div class="row">
           
                    <div class="col-lg-3 col-md-4 label">secteur d’activité</div>
                    <div class="col-lg-9 col-md-8"> {{ auth()->user()->adresse }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Image de couverture</div>
                    <div class="col-lg-9 col-md-8"> {{ auth()->user()->Profile_image }}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Adresse</div>
                    <div class="col-lg-9 col-md-8"> {{ auth()->user()->adresse }}</div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">logo</div>
                    <div class="col-lg-9 col-md-8">{{ auth()->user()->logo }}
                    </div>
                  </div>

                  

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  Profile Edit Form
          
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
        
        
                      @php($profile_image = auth()->user()->profile_image) 
                      <img src="@if($profile_image == null){{ asset("logos/logos/avatar.png") }}  @else {{ asset("logos/logos/$profile_image") }} @endif" alt="Profile">
                      <div class="pt-2">
                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      </div>
                    </div> 
                  </div>
                  <form action="{{ url('/sauverprofile')}}" method="POST" enctype="multipart/form-data"> 
                    {{ csrf_field() }}                   
                   

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="adresse" type="text" class="form-control" id="adresse" value="adresse">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="description" class="form-control" id="about" style="height: 100px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">logo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="logo" type="file" class="form-control" id="logo" value="logo">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                  </form>
                   {{-- End Profile Edit Form  --}}

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <script src="{{asset('dashboard/js/profileupdate.js')}}"></script>
  @include('include/dash_footer')
</div>
