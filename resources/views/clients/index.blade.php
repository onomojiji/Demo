@extends('layouts.app')

@section('title')
    {{ "Clients" }}
@endsection

@section('content')
    <h1 >{{ "Nos Clients "}}
        <span class="badge badge-success badge-pill" >
            {{ $nombreClient }}
        </span>
    </h1>

    <div class="form-group">
        <a href="{{ route('clients.create') }}" type="submit" class="btn btn-primary my-3"
        name="nouveauClient" id="btn">{{ "Nouveau Client" }}</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">{{ "Nom" }}</th>
            <th scope="col">{{ "Entreprise" }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td><a href="{{ route('clients.show', ['client'=>$client->id]) }}">{{ $client->nom }}</a></td>
                    <td>{{ $client->entreprise->nomEntreprise }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br>
<div class="row d-flex justify-content-center">
    {{ $clients->links() }}
</div>

@endsection

