<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function home(){
        $item = Item::paginate(10);

        return view('home')->with(['items' => $item]);
    }

    public function detail($id) {
        $item = Item::find($id);

        return view('details')-> with(['item' => $item]);
    }
}
