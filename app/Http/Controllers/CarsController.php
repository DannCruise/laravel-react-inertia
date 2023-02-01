<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Inertia\Inertia;
class CarsController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return Inertia::render('Cars/Index',['cars'=>$cars]);
    }

    public function store(Request $request)
    {
        $request-> validate([
            'make' => 'required|max:50',
            'model' => 'required|max:100',
            'color' => 'required|max:10'
        ]);
        $car = new Cars($request->input());
        $car->save();
        return redirect('cars');
    }

    public function update(Request $request, $id)
    {
        $car = Cars::find($id);
        $car->fill($request->input())->saveOrFail();
        return redirect('cars');
    }

    public function destroy($id)
    {
        $car = Cars::find($id);
        $car->delete();
        return redirect('cars');
    }
}
