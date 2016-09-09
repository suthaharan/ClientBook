<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
class ClientController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        if($request->get('search')){
            $items = Client::where("name", "LIKE", "%{$request->get('search')}%")
                ->paginate(5);      
        }else{
		  $items = Client::paginate(5);
        }
        return response($items);
    }
    public function store(Request $request)
    {
    	$input = $request->all();
        $create = Client::create($input);
        return response($create);
    }
    public function edit($id)
    {
        $client = Client::find($id);
        return response($client);
    }
    public function update(Request $request,$id)
    {
    	$input = $request->all();
        Client::where("id",$id)->update($input);
        $client = Client::find($id);
        return response($client);
    }
    public function destroy($id)
    {
        return Client::where('id',$id)->delete();
    }
}