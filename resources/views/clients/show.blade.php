@extends('layouts.app')

@section('title')
    {{ "Profil CLient" }}
@endsection


@section('content')
    <h1>{{ $client->nom }}</h1>

    <hr>

    <a href="{{ route('clients.edit', ['client'=> $client->id] )}}" class="btn btn-secondary my-3">{{ "Editer" }}</a>

    <form action="{{ route('clients.destroy', ['client'=>$client->id]) }}" method="POST" style="display :inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">{{ "Supprimer" }}</button>
    </form>
    <p>
        <strong>
            {{ "E-mail : " }}
        </strong>
        {{ $client->email }}
    </p>

    <p>
        <strong>
            {{ "Entreprise : " }}
        </strong>
        {{ $client->entreprise->nomEntreprise }}
    </p>
    <p>
        <strong>
            {{ "Statut : " }}
        </strong>
        {{ $client->statut }}
    </p>


@endsection
