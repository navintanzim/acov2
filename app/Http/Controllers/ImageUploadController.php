<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function imageUploadPost()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        

        $web_page_to_send = env('API')."receive.php";

        $file_name_with_full_path = public_path('images').'\\'.$imageName;

        $post_request = array(
            "sender" => Auth::user()->name, 
            "file" => curl_file_create($file_name_with_full_path) // for php 5.5+
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $web_page_to_send);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_request);
        $result = curl_exec($ch);
        curl_close($ch);
        sleep(2);
        return Redirect::to(env('API'));



    }

}
