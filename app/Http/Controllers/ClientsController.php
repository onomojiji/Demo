<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Clients::with('entreprise')->paginate(5);
        $nombreClient = Clients::count();
        return view(
            'clients.index',
            compact(
                'clients',
                'nombreClient'
            )
        );
    }

    public function store()
    {
        $dataClient = request()->validate([
            'nom'=>'required',
            'email'=>'required|email',
            'statut'=>'required|integer',
            'entreprise_id'=>'required|integer'
        ]);

        Clients::create($dataClient);

        return back();
    }

    public function create()
    {
        $entreprises =Entreprise::all();
        $client = new Clients();
        return view('clients.create', compact('entreprises', 'client'));
    }

    public function show($id)
    {
        return view('clients.show', ['client' => Clients::findOrFail($id)]);
    }

    public function edit(Clients $client)
    {
        # code...
        $entreprises = Entreprise::all();
        return view(
            'clients.edit',
            compact(
                'client',
                'entreprises'
            )
        );
    }

    public function update(Clients $client)
    {
        $dataClient = request()->validate([
            'nom'=>'required',
            'email'=>'required|email',
            'statut'=>'required|integer',
            'entreprise_id'=>'required|integer'
        ]);

        $client->update($dataClient);

        return redirect('clients/'.$client->id);
    }

    public function destroy(Clients $client)
    {
        $client->delete();

        return redirect('/clients');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
}
