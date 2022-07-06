<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Validator;

class PetController extends Controller
{
    public function getPets()
    {
        return dd("ola");
    }

    public function storePet(Request $request)
    {
        try {
            // $request->validate([
            //     "name" => ['required', 'name'],
            //     "breed" => ['required', 'breed'],
            //     "about" => ['required', 'about'],
            //     "image" => ['required', 'image']
            // ]);

            $pet = $request->all();
            
            return Pet::create($pet);
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }
    }
}
