@extends('emails._tplmail')

@section('content')
<h1>Bienvenue, </h1>
<h3>Vous faites désormais partie de La Fourmilière.</h3>

<p>Dorénavant, vous allez pouvoir participer aux commandes groupées, ainsi qu’à la vie de l’association.</p>

<p><a href="{{ url('/images/administratif/catalogue.pdf') }}" target="_blank">Consulter le catalogue en cliquant ici.</a> </p>

<p>Si vous voulez nous faire profiter de votre énergie, n’hésitez pas à nous contacter via contact@lafourmiliere.org pour rejoindre nos groupes de travail.</p>

<p>Fourmilièrement vôtre,</p>

@if(!$user->hasvalidemail())
<p>Vous n'avez pas encore validé votre mail.<br />
Pour ce faire, merci de cliquer sur le lien ci-dessous :</p>
@include('emails._emailvalidationlink')
@endif

<p>Vous pouvez effectuer un virement aux coordonnées suivantes : <br />
<a href="{{ url('/images/administratif/rib_fourmiliere.png') }}">Télécharger le RIB</a></p>
<p>Vous pouvez également envoyer un chèque à l'ordre de "La Fourmilière" adressé à :<br />
Hélène HENRY,<br />
18 rue Champs Verts,<br />
67880 KRAUTERGERSHEIM</p>

@endsection





