<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PdfFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PDFController extends Controller
{
    public function index(Request $request)
    {
        $pdfs = PdfFiles::all();
        if ($request->ajax()) {
            $pdfs = PdfFiles::query();
            return DataTables::of($pdfs)
                ->addColumn('actions', function ($row) {
                    return '<button class="btn btn-sm btn-primary edit" data-id="' . $row->id . '">' . __('Edit') . '</button>
                                  <button class="btn btn-sm btn-danger delete" data-id="' . $row->id . '">' . __('Delete') . '</button>';
                })

                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('backend.dashboard.template2.pages.pdf.index', compact('pdfs'));
    }



    public function add()
    {
        return view('backend.dashboard.template2.pages.pdf.add');
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

        return redirect()->route('pdfs');
    }

    public function edit($id)
    {
        $pdf = PdfFiles::findOrFail($id);
        return response()->json($pdf);
    }

    public function update(Request $request, $id)
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

        $pdf = PdfFiles::findOrFail($id);
        $pdf->name = $request->input('name'); // Get the 'name' input from the request
        $pdf->file = $pdfPath;
        // $pdf->name = $originalName;
        $pdf->save();

        return redirect()->route('pdfs');
    }
}
