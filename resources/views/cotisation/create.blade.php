@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une cotisation</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('storecotisation', ['id' => $user->id]) }}">

                      {{ csrf_field() }}
                    
                        <div class="row">

                            <div class="form-group @if ($errors->has('season')) has-error @endif">
                                <label for="season" class="col-md-4 control-label">Année</label>
                                <div class="col-md-6">
                                    <select id="season" name="season">
                                        @foreach(['2017' => '2017', '2018' => '2018'] as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('season'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('season') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Phonenumber Form Input -->
                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <label for="amount" class="col-md-4 control-label">Montant</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}">

                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Ajouter
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
