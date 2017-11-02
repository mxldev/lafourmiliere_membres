@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3>Details {{ $user->name }}</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Retour</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        
                        
 <div class="row">
<!-- Gender Form Input -->
<div class="col-md-12 form-group @if ($errors->has('gender')) has-error @endif">
    Sexe : {{ $user->gender }}
</div>
</div>

<div class="row">
<!-- Firstname Form Input -->
<div class="col-md-6 form-group @if ($errors->has('firstname')) has-error @endif">
    Prénom : {{ $user->firstname }}
</div>

<!-- Lastname Form Input -->
<div class="col-md-6 form-group @if ($errors->has('lastname')) has-error @endif">
    Nom : {{ $user->name }}
</div>
</div>

<div class="row">
<!-- email Form Input -->
<div class="col-md-6 form-group @if ($errors->has('email')) has-error @endif">
    E-mail : {{ $user->email }}
</div>

<!-- Phonenumber Form Input -->
<div class="col-md-6 form-group @if ($errors->has('phonenumber')) has-error @endif">
    Téléphone : {{ $user->phonenumber }}
</div>
</div>

<div class="row">
<!-- Address Form Input -->
<div class="col-md-6 form-group @if ($errors->has('address')) has-error @endif">
    Adresse : {{ $user->address }}
</div>

<!-- Addresscomp Form Input -->
<div class="col-md-6 form-group @if ($errors->has('addresscomp')) has-error @endif">
    Complément d'adresse : {{ $user->addresscomp }}
</div>
</div>

<div class="row">
<!-- Postcode Form Input -->
<div class="col-md-6 form-group @if ($errors->has('postcode')) has-error @endif">
    Code postal : {{ $user->postcode }}
</div>

<!-- City Form Input -->
<div class="col-md-6 form-group @if ($errors->has('city')) has-error @endif">
    Ville : {{ $user->city }}
</div>
</div>


@if ($user->cotisations->count() > 0)
  <ul>
  @foreach ($user->cotisations as $cotisation)

    <li>{{ $cotisation->amount }}</li>

  @endforeach
  </ul>
@else
 <p>
  You haven't created any cotisation. 
</p>  
@endif





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection