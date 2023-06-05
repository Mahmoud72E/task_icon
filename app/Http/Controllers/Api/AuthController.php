<?php

namespace App\Http\Controllers\Api;

use App\Models\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Login the user.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email:rfc,filter',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->all())->status(422);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = User::where('email', $request->email)->first();

            $accessTokenCount = $user->tokens()->count();

            if ($accessTokenCount >= 2) {
                // Return error message if the user is already logged in from two devices
                throw ValidationException::withMessages([
                    'email' => 'You are logged in from two devices.',
                    'tokens' => $user->tokens()->get(),
                ])->status(403);
            }

            $token = $user->createToken('device-token')->plainTextToken;

            return response()->json(['token' => $token, 'devices' => $accessTokenCount]);
        }

        throw ValidationException::withMessages([
            'email' => 'These credentials do not match our records.',
        ])->status(422);
    }

    /**
     * Logout the user.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
    */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }

    /**
     * Log out other tokens and delete them.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutOtherTokens(Request $request)
    {
        $user = $request->user();

        // Delete all tokens except the current one
        $user->tokens()
            ->where('id', '!=', $request->user()->currentAccessToken()->id)
            ->delete();

        return response()->json(['message' => 'Other tokens have been deleted.']);
    }
}
