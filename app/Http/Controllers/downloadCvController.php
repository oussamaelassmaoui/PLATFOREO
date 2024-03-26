<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class downloadCvController extends Controller
{
    public function download()
    {
        $path = public_path('cv/cv_oussama.pdf'); 
        // Change this to the actual path of your CV file
        $headers = [
         'Content-Type' => 'application/pdf',
        ];
        $fileName = 'your_cv.pdf';
        // Change this to the name you want the downloaded file to have

        return response()->download($path, $fileName, $headers);
    }
}
