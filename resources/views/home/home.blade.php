@extends('base')
@section('title','home')

@section('content')

 <!-- Section principale avec images en background -->
    <div class="container-fluid" >
        <div class="row" id="row1">
          <div class="col">
            <h1>HamdyCoaching</h1>
            <p class="">Coaching en développement professionnel et coaching d'orientation scolaire</p> <br>
            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <div class="card mx-auto">
                      <div class="card-body" style="background-color: rgba(255, 255, 255, 0.5);">
                        <p>Pour passer à un autre niveau dans des compétences spécifiques et prendre du recul sur vos pratiques.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <a href="{{ route('app_contact') }}" class="btn btn-primary">Contactez nous</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center mt-2 ">
          <div class="col-md-4">
            <div class="card mb-3">
              <img src="assets/img/ca4.png" class="card-img-top" alt="Image Card 1">
              <div class="card-body">
                <h5 class="card-title">Mon article</h5>
                <p class="card-text">Contenu de la carte 3. Lorem ipsum dolor
                    sit amet consectetur, adipisicing elit. Totam error fugiat
                    doloribus nostrum vitae. Ipsam rerum iste accusantium tempore?
                    Quidem labore earum explicabo debitis,
                    ratione ex! Omnis expedita ipsa asperiores.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <img src="./assets/img/ca4.png" class="card-img-top" alt="Image Card 2">
              <div class="card-body">
                <h5 class="card-title">Mon text</h5>
                <p class="card-text">CContenu de la carte 3. Lorem ipsum dolor
                    sit amet consectetur, adipisicing elit. Totam error fugiat
                    doloribus nostrum vitae. Ipsam rerum iste accusantium tempore?
                    Quidem labore earum explicabo debitis,
                    ratione ex! Omnis expedita ipsa asperiores.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <img src="/assets/img/ca4.png" class="card-img-top" alt="Image Card 3">
              <div class="card-body">
                <h5 class="card-title">Card</h5>
                <p class="card-text">Contenu de la carte 3. Lorem ipsum dolor
                     sit amet consectetur, adipisicing elit. Totam error fugiat
                     doloribus nostrum vitae. Ipsam rerum iste accusantium tempore?
                     Quidem labore earum explicabo debitis,
                     ratione ex! Omnis expedita ipsa asperiores.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mx-auto mb-2">
              <div class="card-body text-center">
                <p>Pour passer à un autre.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection


