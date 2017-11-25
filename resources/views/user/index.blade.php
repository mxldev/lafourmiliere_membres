@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $users->total() }} {{ str_plural('Utilisateur', $users->count()) }} </h3>
        </div>
    </div>

    <div class="result-set">
        <table class="table table-bordered table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Date d'inscription</th>
                <th>Cotisation</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
                <tr>
                    <td>
                    <a href="{{ route('getdetails', ['users' => $item->id])  }}">
                    {{ $item->firstname }} {{ $item->name }}</a>
                    </td>
                    <td>{{ $item->email }}</td>

                    <td>{{ $item->created_at->toFormattedDateString() }}</td>
                    <td>@if($item->cotisations->count() > 0)
                    {{ $item->cotisations[0]->amount }}
                    @endif
                    </td>
                    <td class="text-center">
                            <a href="{{ route('addcotisation', ['id' => $item->id]) }}" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i> + cotisation</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
