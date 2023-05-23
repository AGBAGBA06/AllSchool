<div style="margin-left:25%">
@include('include/dash_header')

  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{('/dashboad')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section align-items-center justify-content-center">
    <div class="row ml-4 mr-4">
      <div class="col-lg">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">publier une ecoles</h5>
 
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

            <!-- General Form Elements -->
            <form action="{{ url('/sauverecole')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">Nom ecole</label>
                <div class="col-sm-8">
                  <input type="text"  name="nom" class="form-control">
                </div>
              </div>

              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">Nom directeur</label>
                <div class="col-sm-8">
                  <input type="text"  name="directeur" class="form-control">
                </div>
              </div>
              
              <div class="row mb-4">
                <label class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-8">
                  <select class="form-select"  name="type" aria-label="Default select example">
                    <option value="publique">publique</option>
                    <option value="privee">privee</option>
                    <option value="laique">laique</option>
                    <option value="confessionnelle">confessionnelle</option>
                  </select>
                </div>
              </div> 

              <div class="row mb-4">
                <label class="col-sm-2 col-form-label">Niveau scolaire</label>
                <div class="col-sm-8">
                  <select class="form-select"  name="niveau_scolaire" aria-label="Default select example">
                    <option value="maternelle">maternelle</option>
                    <option value="primaire">primaire</option>
                    <option value="secondaire">secondaire</option>
                    <option value="universitaire">universitaire</option>
                  </select>
                </div>
              </div> 

              

              <div class="row mb-4">
                <label for="inputNumber" class="col-sm-2 col-form-label">Image de couverture</label>
                <div class="col-sm-8">
                  <input class="form-control"  name="image_couverture" type="file" id="formFile">
                </div>
              </div>

              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                  <input type="text"  name="address" class="form-control">
                </div>
              </div>


              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">domaine</label>
                <div class="col-sm-8">
                  <input type="text"  name="domaine" placeholder="exemple:scolaire,informatique,etc" class="form-control">
                </div>
              </div>

              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">ville</label>
                <div class="col-sm-8">
                  <input type="text"  name="ville" class="form-control">
                </div>
              </div>

              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">Num. tel.</label>
                <div class="col-sm-8">
                  <input type="text"  name="tel" class="form-control">
                </div>
              </div>

             

              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">Resultat CEP</label>
                <div class="col-sm-8">
                  <input type="text"  name="resultatcep" class="form-control">
                </div>
              </div>

              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">Resultat BEPC</label>
                <div class="col-sm-8">
                  <input type="text"  name="resultatbepc" class="form-control">
                </div>
              </div>


              <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">Resultat BAC</label>
                <div class="col-sm-8">
                  <input type="text"  name="resultatbac" class="form-control">
                </div>
              </div>

              {{-- <div class="row mb-4">
                <label for="inputText" class="col-sm-2 col-form-label">User_id</label>
                <div class="col-sm-8">
                  <input type="number"  name="user_id" class="form-control">
                </div>
              </div> --}}

              <div class="row mb-4">
                <label for="inputPassword" class="col-sm-2 col-form-label">Descripion</label>
                <div class="col-sm-8">
                  <textarea class="form-control"  name="description" style="height: 100px"></textarea>
                </div>
               </div>
            
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">publier</button>
                </div>
              </div>
            </form>
            <!-- End General Form Elements -->
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('include/dash_footer')
</div>
