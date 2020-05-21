<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeMarkPageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('ce-mark');
    }
}
