<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\User;

class FollowController extends Controller
{
    public function isFollow(Request $request)
    {
        $isfollow = Follow::where('profil_id1', $request->profil_id1)->where('profil_id2', $request->profil_id2)->first();
        if ($isfollow == NULL) {
            Follow::create([
                'profil_id1' => $request->profil_id1,
                'profil_id2' => $request->profil_id2
            ]);
        } else {
            $isfollow->delete();
        }
        $user = User::where('id', $request->profil_id1)->first();
        $user = $user->getOriginal();
        return redirect()->action(
            [UserController::class, 'Cookies'],
            ['id' => $user['email']]
        );
    }
}
