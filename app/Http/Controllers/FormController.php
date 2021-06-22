<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function checkValidation(FormExampleRequest $request)
    {
        Session::flash('success','Dữ liệu được xác thực thành công 1');
        return view('index');
    }
}
