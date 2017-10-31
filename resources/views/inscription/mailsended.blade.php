@extends('inscription.step')

@section('stepcontent')
    <h3>BRAVO !<br />Vous venez de franchir la première étape.</h3>
    <br />
    <p>Pour la suite de l'aventure nous avons besoin de valider votre adresse mail.<br />
    Pour cela il vous suffit de cliquer sur le lien que nous venons de vous envoyer par mail à l'adresse {{ $user->email }} </p>
<br />
    <p>Vous pouvez également continuer votre inscription et valider votre mail plus tard en cliquant sur le lien suivant :<br />
    <a href="{{ route('inscriptionStep', ['step' => 3]) }}"  class="btn btn-primary">Passer à l'étape suivante</a>

    </p>
@endsection
