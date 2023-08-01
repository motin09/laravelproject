<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function __invoke(Request $request)
    {
        $secret_key = 85978;
        $user_key = $request->user_key;

        $data = [
            'user_name' => 'Md Motin',
            'designation' => 'Full Stack Enginner',
            'mobile' => '12345678',
            'bank_acc' => '1234567877897123534',
        ];

        if($secret_key == $user_key){
            return response()->json([
                'user_info' => $data
            ]);
        }else
        return response([
            'message' => 'Provide valid secret key'
        ], 404);
    }
}
