@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Indiquez votre partenaire</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/account/updatepartner') }}">

                        {{ csrf_field() }}
                    
                        <div class="row">
                            <!-- Partner Form Input -->
                            <div class="form-group{{ $errors->has('partner') ? ' has-error' : '' }}">
                                <label for="partner" class="col-md-4 control-label">Nom et prénom</label>

                                <div class="col-md-6">
                                    <input id="partner" type="text" class="form-control" name="partner" value="{{ $user->partner }}">

                                    @if ($errors->has('partner'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('partner') }}</strong>
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
@endsection
