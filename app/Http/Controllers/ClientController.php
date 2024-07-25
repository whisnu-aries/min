<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    // client side
    public function detail(Client $client): View
    {
        return view('pages.client_detail')->with('client', $client);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.clients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.clients.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $filePath = public_path('logo');
        $fileName = "";

        if($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . $file->getClientOriginalName();

            $file->move($filePath, $fileName);
        }

        $data = $request->validated();
        $data['uuid'] = Str::uuid();
        $data['logo'] = $fileName;
        
        Client::create($data);
        return redirect()->route('client.index')->with('success', 'Client created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('pages.clients.form', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client)
    {
        try {
            $validated = $request->validated();
            $client->fill($validated);

            $filePath = public_path('logo');
            $fileName = "";

            if($request->hasFile('logo')) {
                $file = $request->file('logo');
                $fileName = time() . $file->getClientOriginalName();

                $file->move($filePath, $fileName);
                $client->logo = $fileName;
            }

            $client->save();
            return redirect()->route('client.index')->with('success', 'Client updated successfully!');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('success', 'Client deleted successfully!');
    }
}
