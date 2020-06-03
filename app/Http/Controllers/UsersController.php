<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends BaseController
{
    public function __construct()
    {
        $this->classe = User::class;
    }

    public function newUser(Request $request)
    {
        $newUser = $request->all();
        $newUser['password'] = Hash::make($request->input('password'));
        return response()
            ->json(
                $this->classe::create($newUser),
                201
            );
    }

    public function checkEmailExist(Request $request)
    {
        $all = $request->all();
        $email = $all['email'];
        $usuario = User::query()
            ->where('email', $email)->get();

        return count($usuario);
    }

    public function checkUsernameExist(Request $request)
    {
        $all = $request->all();
        $username = $all['username'];
        $usuario = User::query()
            ->where('username', $username)->get();

        return count($usuario);
    }
}
