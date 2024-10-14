<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        return response()->json(['message' => 'File uploaded successfully', 'filename' => $filename]);
    }
}
