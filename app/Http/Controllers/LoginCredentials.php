<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCredentials extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        //
    }

    public function validateCredentials(Request $request)
    {

        $returnObj = array("status" => "verified");
        return $returnObj;
    }
}