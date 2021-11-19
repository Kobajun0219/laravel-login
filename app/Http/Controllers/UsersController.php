<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Facades\Serch;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index')->with('users', $users);
    }

    public function serch(Request $request)
    {
        $keyword_name = $request->name;
        $keyword_age = $request->age;
        $keyword_sex = $request->sex;
        $keyword_age_condition = $request->age_condition;

        list($users, $message) = Serch::serch($keyword_name, $keyword_age, $keyword_sex, $keyword_age_condition);

        return view('/serch')->with([
            'users' => $users,
            'message' => $message,
        ]);
    }
}
