<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Helpers\CollectionHelper;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get()->each(function ($client) {
            $client->show_url = URL::route('clients.show', $client);
            $client->edit_url = URL::route('clients.edit', $client);
            $client->destroy_url = URL::route('clients.destroy', $client);

            return $client;
        });

        return Inertia::render('Clients/Index', [
            'clients' => CollectionHelper::paginate($clients),
            'create_url' => URL::route('clients.create'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return Inertia::render('Clients/Show', [
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $client->update_url = URL::route('clients.update', $client);

        return Inertia::render('Clients/Edit', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        // ddd($request->all());

        $client->update($request->all());

        return redirect()->route('clients.show', $client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
    }
}
