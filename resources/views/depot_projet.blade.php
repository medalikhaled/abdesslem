@extends('template')

@section('contenu')
  <div class="form_place">
    <h1>Déposer votre projet</h1>
    <form method="POST" action="{{ url('/projet/result') }}" class="me-3">
        @csrf
        <div class="mb-3">
          <label for="titre" class="form-label">Titre</label>
          <input type="text" class="form-control" id="titre" name="title">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Prix</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
          <label for="delivery" class="form-label">Date de Livraison</label>
          <input type="date" class="form-control" id="delivery" name="DeliveryDate">
        </div>

        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
          <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection

