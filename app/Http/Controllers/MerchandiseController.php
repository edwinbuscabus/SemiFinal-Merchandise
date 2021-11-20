<?php

namespace App\Http\Controllers;

use App\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(){
        $m = Merchandise::orderBy('id')->get();

        return view('merchandises.index', ['merchandises'=>$m]);
    }

    public function create(){
        return view('merchandises.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'     => 'required',
            'description'  => 'required',
            'quantity'     => 'required|numeric',
            'price'   => 'required|numeric'
        ]);

        Merchandise::create([
            'name'     => $request['name'],
            'description'  => $request['description'],
            'quantity'     => $request['quantity'],
            'price'   => $request['price']
        ]);

        return redirect('/merchandises')->with('pages.info', 'New user has been added.');   

    }
}