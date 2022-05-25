@extends('template')


@section('contenu')
 <div class="form_place">
  <h1>Inscrire Dans La Platforme</h1>
  <form method="POST" action="{{ url('/inscription/result') }}">
    @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Votre Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Votre Mot de Passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div>CV</div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>
@endsection