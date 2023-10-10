@extends('base')
@section('title','contact')
@section('content')

<body>
    <div class="container mt-5">
      <h1 class="mb-4">Contactez-nous</h1>
      <form>
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" placeholder="Votre nom">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="votre.email@example.com">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Écrivez votre message ici"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
      <div class="card">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          This is some text within a card body. ughjk
        </div>
      </div>
    </div>


    <!-- Inclure les fichiers JS de Bootstrap (optionnel, mais requis pour certains composants) -->

  </body>
@endsection


