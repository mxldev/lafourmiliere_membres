@extends('emails._tplmail')

@section('content')
<h1>Bonjour  {{ $user->firstname }} {{ $user->name }},</h1>
<h3>Bravo pour votre inscription, vous venez de franchir la première étape.</h3>
<p>Pour la suite de l’aventure, nous avons besoin de vérifier votre adresse mail.<br />
Merci de cliquer sur le lien ci dessous :
<a href="{{url('/confirm/' . $user->id . '/' . urlencode($user->confirmation_token))}}">Vérifier le compte</a>
</p>

<p>Si le lien ne fonctionne pas, merci de copier puis coller l'adresse ci-dessous dans votre navigateur internet :<br />
{{url('/confirm/' . $user->id . '/' . urlencode($user->confirmation_token))}}
</p>
@endsection