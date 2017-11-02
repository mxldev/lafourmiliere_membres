@extends('emails._tplmail')

@section('content')
<p>Nouveau partenaire pour l'utilisateur {{$user->email}} : {{$user->partner}}</p>
@endsection