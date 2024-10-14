<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerContent;
use App\Models\Setting;

class CareerContentController extends Controller
{
    public function index()
    {
        $content = CareerContent::first();
        $settings = Setting::first();

        return view('backend.career', compact('content', 'settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner_image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'career_image_1' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'career_image_2' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'career_image_3' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'career_image_4' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $content = CareerContent::first() ?? new CareerContent();
        // $content->career_text = $request->career_text;
        // Handle image uploads for each field
        if ($request->hasFile('banner_image')) {
            $content->banner_image = $this->uploadImage($request->file('banner_image'), 'media/banners');
        }

        foreach (['career_image_1', 'career_image_2', 'career_image_3', 'career_image_4'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $content->{$imageField} = $this->uploadImage($request->file($imageField), 'media/careers');
            }
        }

        // Update career text
        // $content->career_text = $request->input('career_text');
        $content->career_text = $request->career_text;
        // Update FAQs
        $existingFaqs = json_decode($content->faqs, true) ?? [];
        $newFaqs = $request->input('faqs', []);
        $content->faqs = json_encode(array_merge($existingFaqs, $newFaqs));

        $content->save();

        // Return a JSON response
        return response()->json(['success' => true, 'message' => 'Career content updated successfully.']);
    }

    private function uploadImage($image, $directory)
    {
        $imageName = time() . '_' . uniqid() . '.' . $image->extension(); // Ensure unique filename
        $image->move(public_path($directory), $imageName);
        return $directory . '/' . $imageName;
    }

    public function storeFaq(Request $request)
    {
        $content = CareerContent::first() ?? new CareerContent();

        $faqs = json_decode($content->faqs, true) ?? [];
        $faqs[] = [
            'title' => $request->input('title'),
            'answer' => $request->input('answer'),
        ];

        $content->faqs = json_encode($faqs);
        $content->save();

        return response()->json(['success' => true, 'message' => 'FAQ added successfully.']);
    }

    public function updateFaq(Request $request)
    {
        $content = CareerContent::first();

        if ($content) {
            $faqs = json_decode($content->faqs, true) ?? [];
            $index = $request->input('index');

            if (isset($faqs[$index])) {
                $faqs[$index]['title'] = $request->input('title');
                $faqs[$index]['answer'] = $request->input('answer');
            }

            $content->faqs = json_encode($faqs);
            $content->save();

            return response()->json(['success' => true, 'message' => 'FAQ updated successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'FAQ not found.']);
    }

    public function deleteFaq(Request $request)
    {
        $content = CareerContent::first();

        if ($content) {
            $faqs = json_decode($content->faqs, true) ?? [];
            $faqs = array_filter($faqs, function ($faq) use ($request) {
                return $faq['title'] !== $request->input('title');
            });
            $content->faqs = json_encode(array_values($faqs)); // Reset array keys
            $content->save();

            return response()->json(['success' => true, 'message' => 'FAQ deleted successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'FAQ not found.']);
    }
}
