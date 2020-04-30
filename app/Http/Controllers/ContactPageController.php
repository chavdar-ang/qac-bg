<?php

namespace App\Http\Controllers;

use App\InquiryType;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function show()
    {
        $subjects = InquiryType::all();
        return view('contacts', compact('subjects'));
    }
}
