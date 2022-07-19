<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = Users::all();
        return $users;
    }


    public function store(Request $request)
    {
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->cellphone = $request->cellphone;
        $user->password = $request->password;
        $user->save();
    }


    public function show($id)
    {
        $user = Users::find($id);
        return $user;
    }


    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return $user;
    }


    public function destroy($id)
    {
        $user = Users::destroy($id);
        return $user;
    }
}
