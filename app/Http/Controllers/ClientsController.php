<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{

    public function index(){
        $clients = Client::get();
    	return view('clientsList',['clients'=>$clients]);
    }

    public function new(){
    	return view('newClient');
    }

    public function save(Request $request){

        //dd($request->all());
       Client::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number,
        ]);

        return redirect('clients/new')->with('saved','Save!');

    }

    public function update($id){
        $client = Client::findOrfail($id);
        return view('newClient',['client'=>$client]);
    }

     public function updating($id,Request $request){
        $client = Client::findOrfail($id);
        $client->update($request->all());
         return redirect('/clients')->with('updated','Success');
    }

    public function delete($id){
        $client = Client::findOrfail($id);
        $client->delete();
         return redirect('/clients')->with('deleted','Deleted');
    }
}
