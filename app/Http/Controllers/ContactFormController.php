<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Exception;
use Illuminate\Support\Facades\Validator;
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


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:128',
            'body' => 'required|string',
            'phone' => 'required|string',
            'company' => 'string',
            'email' => 'required|email',
            'subject' => 'required|integer'
        ]);

        $data = $request->all();

        $data['type_id'] = (int) $data['subject'];

        if ($validator->fails()) {
            return response(['status' => '', 'message' => $validator->errors()->first()], 200);
        }

        try {
            Inquiry::create($data);
        } catch (Exception $e) {
            return response(['message' => 'Възникна грешка.'], 200);
        }

        return response(['status' => 'success', 'message' => 'Запитването Ви е изпратено успешно.']);
    }
}
