@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        
                        
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('account/updatedetails') }}">

                            {{ csrf_field() }}
                        
                            
<div class="row">
<div class="form-group @if ($errors->has('gender')) has-error @endif">
    <label for="gender" class="col-md-4 control-label">Gender</label>
    <div class="col-md-6">
        <select id="gender" name="gender">
            @foreach(['male' => 'Man', 'female' => 'Woman'] as $key => $value)
            <option value="{{$key}}" @if ($user->gender == $key) selected @endif>{{$value}}</option>
            @endforeach
        </select>
        @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Firstname Form Input -->
<div class="form-group @if ($errors->has('firstname')) has-error @endif">
    <label for="firstname" class="col-md-4 control-label">Firstname</label>
    <div class="col-md-6">
        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" required autofocus>
        @if ($errors->has('firstname'))
            <span class="help-block">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required >

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="row">
<!-- Address Form Input -->
  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
      <label for="address" class="col-md-4 control-label">Adresse</label>

      <div class="col-md-6">
          <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}">

          @if ($errors->has('address'))
              <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
              </span>
          @endif
      </div>
  </div>

<!-- Addresscomp Form Input -->
  <div class="form-group{{ $errors->has('addresscomp') ? ' has-error' : '' }}">
      <label for="addresscomp" class="col-md-4 control-label">étage, ...</label>

      <div class="col-md-6">
          <input id="addresscomp" type="text" class="form-control" name="addresscomp" value="{{ $user->addresscomp }}">

          @if ($errors->has('addresscomp'))
              <span class="help-block">
                  <strong>{{ $errors->first('addresscomp') }}</strong>
              </span>
          @endif
      </div>
  </div>
</div>

<div class="row">
<!-- Postcode Form Input -->
  <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
      <label for="postcode" class="col-md-4 control-label">Code postal</label>

      <div class="col-md-6">
          <input id="postcode" type="text" class="form-control" name="postcode" value="{{ $user->postcode }}">

          @if ($errors->has('postcode'))
              <span class="help-block">
                  <strong>{{ $errors->first('postcode') }}</strong>
              </span>
          @endif
      </div>
  </div>

<!-- City Form Input -->
  <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
      <label for="city" class="col-md-4 control-label">Ville</label>

      <div class="col-md-6">
          <input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}">

          @if ($errors->has('city'))
              <span class="help-block">
                  <strong>{{ $errors->first('city') }}</strong>
              </span>
          @endif
      </div>
  </div>
</div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Enregistrer
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection