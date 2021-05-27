@extends('layouts.app')

@section('title')
    {{ "Ajout d'un Client" }}
@endsection

@section('content')
    <div class="col-md-7 col-form-label text-md-right">
        <h1>{{ "Ajout d'un Client :"}}</h1>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('clients.store') }}">
            @include('layouts.form')

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4.5">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Enregistrer Les Informations') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
