<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserImageUpdateRequest;
use App\Models\User;
use App\Services\UserService;

class UserImageUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UserImageUpdateRequest $request,UserService $userService)
    {
       $userService->saveUserImage($request->images());
       
        return redirect()->route('profile.edit')->with('status', 'user-image-updated');
    }
}
