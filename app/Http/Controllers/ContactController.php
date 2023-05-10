<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        
        return view('contacts', compact('contacts'));
    }
//
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('contato.index')->withSuccess('O contato ' . $request->name . ' foi salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);

        return view('edit_contact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreContactRequest $request, string $id)
    {
        
        $contact = Contact::findOrFail($id);

        $contact->update($request->validated());
        
        return redirect()->route('contato.index')->withSuccess('O contato ' . $contact->name . ' foi alterado com sucesso!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect()->route('contato.index')->withSuccess('O contato ' . $contact->name . ' foi deletado com sucesso!');
    
    }
}
