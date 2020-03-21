<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserListController extends Controller
{
    function getAllUsers() {
        $userCollection = \App\User::all();
        $userJson = $userCollection ->toJson();
        return response()->json($userJson);
    }
}
