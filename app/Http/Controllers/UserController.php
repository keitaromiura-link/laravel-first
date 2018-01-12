<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  string  $name
     * @return Response
     */
    public function show(Request $request, $name)
    {
        return "User:". $name;
    }
}
