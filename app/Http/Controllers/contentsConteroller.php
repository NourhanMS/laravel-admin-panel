<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class contentsConteroller extends Controller
{
    public function upload(Request $request)
    {
        $data = [];
        if( $request->isMethod('post') )
        {
            $this->validate(
                $request,
                [
                    'image_upload' => 'mimes:jpeg,bmp,png'
                ]
            );
            $image_name=time().'.'.request()->image_upload->getClientOriginalExtension();
            request()->image_upload->move('images', $image_name);
            return redirect('/upload')->withSuccess('Great! Image has been successfully uploaded.');;
        }
        return view('files/upload', $data);
    }
}
