<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generate($username)
    {
        $user = User::where('username', $username)
            ->with(['projects', 'skills'])
            ->firstOrFail();

        $pdf = PDF::loadView('pdf.cv', compact('user'));
        
        return $pdf->download('cv-' . $user->username . '.pdf');
    }
}
