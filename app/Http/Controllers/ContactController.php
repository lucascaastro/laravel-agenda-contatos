<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $contacts = Contact::where('user_id', '=', $user->id)->get();

        return view('contacts.contacts', compact('user', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('contacts.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_id' => $user->id

        ]);
        return redirect('/contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = auth()->user();

        $contact = Contact::find($id);

        if (!$contact || $user->id != $contact->user_id) {
            abort(404);
        } else {
            return view('contacts.show', compact('user', 'contact'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();
        $contact = Contact::find($id);
        if (!$contact || $user->id != $contact->user_id) {
            abort(404);
        } else {
            return view('contacts.edit', compact('user', 'contact'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $contact = Contact::find($id);
        if (!$contact || $user->id != $contact->user_id) {
            abort(404);
        } else {
            $contact->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'user_id' => $user->id
            ]);
            return redirect('/contacts');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = auth()->user();
        $contact = Contact::find($id);
        if (!$contact || $user->id != $contact->user_id) {
            abort(404);
        } else {
            $contact->delete();
            return redirect('/contacts');
        }
    }
}