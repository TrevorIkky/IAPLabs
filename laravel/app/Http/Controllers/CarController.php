<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\CarRequest;


class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();

        return response(['data' => $cars ], 200);
    }

    public function store(CarRequest $request)
    {
        $car = Car::create($request->all());

        return response(['data' => $car ], 201);

    }

    public function show($id)
    {
        $car = Car::findOrFail($id);

        return response(['data', $car ], 200);
    }

    public function update(CarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return response(['data' => $car ], 200);
    }

    public function destroy($id)
    {
        Car::destroy($id);

        return response(['data' => null ], 204);
    }
}
