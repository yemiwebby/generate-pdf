<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
//use DOMPd

class SampleController extends Controller
{

    public function showExportReport()
    {
        return view('closingReport.finalReport');
    }
    public function sendPDFFile()
    {
        $data = [
            'email' => 'yemiwebby@gmail.com',
            'manager_name' => 'Olususi Oluyemi',
            'subject' => 'Sales Report'
        ];

        $pdf = PDF::loadView('closingReport.reportTemplate', $data);
        return  $pdf->stream('list_usual.pdf');
    }
}
