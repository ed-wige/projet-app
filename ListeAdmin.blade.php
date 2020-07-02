@extends('layouts.app')

@section('content')

<H1>Liste des produits</H1>

<table class="highlight">
        <thead class="card-panel dark purple lighten-1">
          <tr>
              <th>Nom du produit</th>
              <th>Categorie</th>
              <th>prix unitare</th>
              <th>Quantité</th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
            <td>$0.87</td>

          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td>$3.76</td>

          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>$7.00</td>

          </tr>
          
        </tbody>
      </table>
<br><br><br>
<a class="waves-effect dark purple lighten-1 btn-small">Ajouter un produit</a>

      @endsection
