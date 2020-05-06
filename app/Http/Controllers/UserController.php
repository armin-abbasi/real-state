<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param LoginUserRequest $request
     * @return string|void
     */
    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!auth()->attempt($credentials)) {
            return abort(401);
        }

        return redirect(route('property_list'));
    }
}
