<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function upload_file($request_file,$path){
        $filename = $request_file->getClientOriginalName();
        $request_file->move($path, $filename);
        return $filename;
    }
}
