<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request; // Import the Request class
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request  $request  // Add Request as an argument
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Format the user data using the UserResource
        $userResource = new UserResource($user);

        // Use the ApiResponse class to generate the JSON response
        return ApiResponse::success('User registered successfully', $userResource, 201);
    }
}