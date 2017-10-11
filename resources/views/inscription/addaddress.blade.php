@extends('inscription.step')

@section('stepcontent')
    
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/inscription/updateaddresse') }}">

        {{ csrf_field() }}
    
        @include('inscription._addressform')

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Enregistrer
                </button>
            </div>
        </div>

    </form>
@endsection
