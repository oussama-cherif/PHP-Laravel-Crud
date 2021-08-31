<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{   
    public function index(){
    // get data from a database
  $pizzas = Pizza::all();

  return view('pizzas.index', [
      'pizzas' => $pizzas,
  ]);
}
    public function show($id){
    // get data from a database
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
}
    public function create() {
        return view ('pizzas.create');
    }
    public function store() {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza-> save();

        return redirect('/')->with('mssg', 'Your order has passed succesfully');
    }
    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza-> delete();

        return redirect('/pizzas');
    }
}
