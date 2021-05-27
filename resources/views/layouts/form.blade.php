@csrf

<div class="form-goup row">
    <div class="col col-lg-6 col-sm-12">
        <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror"
           name="nom" value="{{ old('nom') ?? $client->nom}}" placeholder="Nom du Client" required autocomplete="nom" autofocus>

            @error('nom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
    </div>

    <div class="col col-lg-6 col-sm-12">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
            name="email" placeholder="E-mail" value="{{ old('email') ?? $client->email     }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

</div>
<br>
<div class="form-group row">
    <div class="col">
        <select class="custom-select @error('statut') is-invalid @enderror" name="statut" >
            <option value="0">{{ "Inactif" }}</option>
            <option value="1">{{ "Actif" }}</option>
            <option value="2">{{ "En Attente" }}</option>
        </select>
        @error('statut')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col">
        <select class="custom-select @error('entreprise_id') is-invalid @enderror"
        name="entreprise_id" >
            @foreach ($entreprises as $entreprise)
                <option value="{{ $entreprise->id }}">{{ $entreprise->nomEntreprise }}</option>
            @endforeach
        </select>
        @error('entreprise_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
