@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dernière étape</div>
                <div class="panel-body">
                    @if(!$user->hasCotisation())
                        <p>Pour finaliser votre adhésion il vous reste à nous faire parvenir votre cotisation, de préférence par virement :</p>
                        <img src="{{ url('/images/administratif/rib_fourmiliere.png') }}">
                        <p>Sinon par chèque à Hélène HENRY,<br />
                        18 rue Champs Verts,<br />
                        67880 KRAUTERGERSHEIM</p>
                        <p>Pour l’année 2017, la cotisation a été fixé à 15€ par foyer.<br />
                        Si vous le souhaitez, vous pouvez augmenter ce montant pour soutenir nos actions et faciliter le développement de l’association.</p>

                        <p>Fourmilièrement vôtre,</p>
                        <p>PS: un mail vous a été envoyé avec nos coordonnées bancaire et postale.</p>
                    @endif
                    @if(!$user->hasvalidemail())
                        <p>Vous n'avez pas encore validé votre mail.<br />
                        Pour cela, merci de cliquer sur le lien  présent dans le mail que nous vous avons envoyé.<br />
                        Si vous n'arrivez pas à valider votre mail, merci de nous contacter à l'adresse : contact@laforumilière.org</p>
                    @endif
                        <br /><br /><br />
                        <p>La cotisation est valable pour 2 membres d'une même famille. Vous pouvez nous indiquer à quel membre rajouter votre cotisation à l'aide du bouton ci-dessous. </p>
                    <a href="{{ url('/account/addpartner') }}"  class="btn btn-primary">Ajouter un partenaire</a>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
