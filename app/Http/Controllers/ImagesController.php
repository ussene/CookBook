<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageFormRequest;
use Image;

class ImagesController extends Controller
{
    public function store(ImageFormRequest $request)
    {
    	if ($request->hasFile('image')) {
    		$file = $request->file('image'); // retrieve input data
    		$name = $file->getClientOriginalName(); // get the image name
    		$file->move(public_path() . '/images/', $name); // store file at public/images
    		$imagePath = public_path() . '/images/' .$name;
    		$image = Image::make($imagePath)->resize(1000, 250)->greyscale()->save();

    		return redirect('/')->with('status', 'Your image has been uploaded successfully!');
    	}
    }
}
