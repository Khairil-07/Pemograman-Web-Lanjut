<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentationFile;

class DocumentationFileController extends Controller
{
    //
    public function index()
    {
        $files = DocumentationFile::latest()->get();
        return view('documentation_files', compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'attachment' => 'required|mimes:pdf,docx,png,jpg,jpeg|max:5120'
        ]);

        $file = $request->file('attachment');
        $extension = $file->getClientOriginalExtension();

        $folder = in_array($extension, ['pdf', 'docx']) ? 'documents' : 'images';
        $path = $file->store($folder, 'public');

        DocumentationFile::create([
            'title' => $request->title,
            'file_path' => $path,
            'file_type' => $extension,
        ]);

        return redirect()->back()->with('success', 'File berhasil diunggah');
    }
}
