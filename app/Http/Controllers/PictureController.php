<?php

namespace App\Http\Controllers;

use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Picture;


class PictureController extends Controller
{
    public function showAllPictures()
    {
        return response()->json(Picture::all());
    }

    public function showPicture($id)
    {
        return response()->json(Picture::find($id));
    }

    public function create(Request $request)
    {
        $picture = Picture::create($request->all());

        return response()->json($picture, 201);
    }

    public function update($id, Request $request)
    {
        $picture = Picture::findOrFail($id);
        $picture->update($request->all());

        return response()->json($picture, 200);
    }

    public function delete($id)
    {
        Picture::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}