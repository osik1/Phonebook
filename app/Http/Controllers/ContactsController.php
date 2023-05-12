<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Spatie\QueryBuilder\QueryBuilder;


class ContactsController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use query builder to  query the  table and also filter with last name
        $contact = QueryBuilder::for(Contact::class)
        ->allowedFilters(['last_name'])
        ->get();
        //return the results to the phonebook view
        return View::make('phonebook', compact('contact'));
    } 

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Request all input and validate
        $input = $request->all();
        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u|max:55',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u|max:55',
            'phone' => 'required|min:10',
        ]);
        // Send input to the  contact table
        $contact = Contact::create($input);
        // return with a success message 
        return redirect("/")->with('success', 'Contact saved!!');
    }




    /**
     * Edit contact form
     */
    public function editpage($id)
    {
        //find the contact with that id
        $contact = Contact::find($id);
        //fetch detain unto the edit form
        return view('edit-contact', compact('contact'));
    }
  



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //find the contact  with the id you want to update
        $contact = Contact::find($id);
        // validate the input
        $input = $request->all();
        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u|max:55',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u|max:55',
            'phone' => 'required|min:10',
        ]);
        //update the old records with the current  input
        $contact->first_name = $input['first_name'];
        $contact->last_name =  $input['last_name'];
        $contact->phone =  $input['phone'];
        $contact->save();
        return redirect("/")->with('success', 'Contact updated');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //find the id from the contact model
        $contact = Contact::find($id);
        //delete the found contact with that id
        $contact->delete();
        return redirect("/")->with('success', 'Contact deleted');
    }
}
