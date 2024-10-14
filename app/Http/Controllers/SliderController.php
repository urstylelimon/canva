<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();  

       
        return view('backend.home.image-slider', compact('sliders'));
    }

    public function create()
    {
        return view('backend.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:255',
        ]);

        $imagePath = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/sliders'), $imagePath);
        }

        Slider::create([
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => $imagePath,
        ]);

        return redirect()->route('backend.sliders.index')->with('success', 'Slider created successfully.');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if (File::exists(public_path('media/sliders/' . $slider->image))) {
                File::delete(public_path('media/sliders/' . $slider->image));
            }
            // Upload new image
            $image = $request->file('image');
            $imagePath = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/sliders'), $imagePath);
            $slider->image = $imagePath;
        }

        $slider->title = $request->title;
        $slider->caption = $request->caption;
        $slider->save();

        return redirect()->route('backend.sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if (File::exists(public_path('media/sliders/' . $slider->image))) {
            File::delete(public_path('media/sliders/' . $slider->image));
        }

        $slider->delete();

        return redirect()->route('backend.sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
