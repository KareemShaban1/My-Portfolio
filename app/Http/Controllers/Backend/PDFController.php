<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PdfFiles;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index(){
        $pdfs = PdfFiles::all();
        return view('backend.pages.pdf.index',compact('pdfs'));
    }
    //

    public function add(){
        return view('backend.pages.pdf.add');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048', // PDF file validation (2MB limit)
            'name' => 'required|string', // Validate the 'name' input
        ]);
    
        $pdfFile = $request->file('file');
        $originalName = $pdfFile->getClientOriginalName();
        $customName = $request->input('name') . '.' . $pdfFile->getClientOriginalExtension();
    
        // Store the PDF file with the custom name
        $pdfPath = $pdfFile->storeAs('pdfs', $customName, 'public');
    
        $pdf = new PdfFiles();
        $pdf->name = $request->input('name'); // Get the 'name' input from the request
        $pdf->file = $pdfPath;
        // $pdf->name = $originalName;
        $pdf->save();
    
        return redirect()->route('PDFs');
    }
    
}