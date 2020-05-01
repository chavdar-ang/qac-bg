<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['type_id'] = (int) $data['subject'];
        return Inquiry::create($data);
    }
}
