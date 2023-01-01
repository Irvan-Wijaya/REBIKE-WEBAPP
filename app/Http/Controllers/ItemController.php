<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function dashboard(Request $request){
        if($request->has('search')){
            $data = Item::where('name', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }
        else{
            $data = Item::paginate(10);
        }
        return view('admins.dashboard', compact('data'));
    }

    public function insertdata(Request $request){
        // dd($request->all());
        $data = Item::create($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('itemPhoto/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return redirect('/dashboard')->with("success", "Data has been inserted!");
    }

    public function update($id){
        $data = Item::find($id);
        return view('admins.update', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Item::find($id);
        $data->update($request->all());
        return redirect('/dashboard')->with("success", "Data has been updated!");
    }

    public function delete(Item $item){
        Item::destroy($item->id);
        return redirect('/dashboard')->with("success", "Data has been deleted!");
    }
}
