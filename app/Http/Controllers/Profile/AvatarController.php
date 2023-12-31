<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAvatarRequest;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request)
    {
        $request->file('avatar')->store('avatar');
        return back()->with('message', 'Avatar is updated');
    }
}
