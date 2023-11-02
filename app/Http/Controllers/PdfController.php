<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function uploudPDF(Request $request)
    {

        $data = $request->except('_token');

        return view('uploudPdf', compact('data'));

    }
}
