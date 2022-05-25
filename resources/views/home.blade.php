@extends('template')


@section('contenu')
@include('components.header')
<div class="main">
  <h1>Liste des projets</h1>
  <table class="table bg-light ">
      <thead>
        <tr>
          <th scope="col">No Projet</th>
          <th scope="col">Titre</th>
          <th scope="col">Prix</th>
          <th scope="col">Description</th>
          <th scope="col">Date de Livraison</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($projet as $project)
              <th scope="row">1</th>
              <td>{{ $project->getTitre() }}</td>
              <td>{{ $project->getPrix() }}</td>
              <td>{{ $project->getDescription() }}</td>
              <td>{{ $project->getDelaiLivraison() }}</td>
              </tr>
          @endforeach
      </tbody>
    </table>
</div>
@endsection