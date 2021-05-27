@extends('layouts.app')

@section('title')
    {{ "Edition du profil." }}
@endsection

@section('content')
    <div class="col-md-7 col-form-label text-md-right">
        <h1>{{ "Editer le profil de $client->nom"}}</h1>
    </div>

    <div class="card-body">
        <form method="POST" action="/clients/{{ $client->id }}">

            @method('PATCH')

            @include('layouts.form')

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Sauvegarder Les Informations') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
