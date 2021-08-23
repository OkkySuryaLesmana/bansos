<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;
use App\Models\User;
use App\Models\Komen;
use App\Models\Like;

class PostinganController extends Controller
{
    public function insertPost(Request $request)
    {
        $gambar = $request->gambar;
        $name_img = time() . ' - ' . $gambar->getClientOriginalName();
        Postingan::create([
            'nama' => $request->nama,
            'tulisan' => $request->tulisan,
            'gambar' => $name_img,
            'caption' => $request->caption,
            'quote' => $request->quote,
            'profil_id' => $request->profil_id,
            'foto' => $request->foto
        ]);
        $gambar->move('img', $name_img);
        $user = User::where('email', $request->email)->first();
        $user = $user->getOriginal();
        return redirect()->action(
            [UserController::class, 'Cookies'],
            ['id' => $user['email']]
        );
    }

    public function insertKomen(Request $request)
    {
        Komen::create([
            'nama' => $request->nama,
            'postingan_id' => $request->postingan_id,
            'profil_id' => $request->profil_id,
            'komen' => $request->komen,
            'foto' => $request->foto
        ]);
        $user = User::where('email', $request->email)->first();
        $user = $user->getOriginal();
        return redirect()->action(
            [UserController::class, 'Cookies'],
            ['id' => $user['email']]
        );
    }

    public function insertLike(Request $request)
    {
        $islike = Like::where('postingan_id', $request->postingan_id)->where('profil_id', $request->profil_id)->first();
        if ($islike == NULL) {
            Like::create([
                'postingan_id' => $request->postingan_id,
                'profil_id' => $request->profil_id
            ]);
        } else {
            $islike->delete();
        }
        $user = User::where('id', $request->profil_id)->first();
        $user = $user->getOriginal();
        return redirect()->action(
            [UserController::class, 'Cookies'],
            ['id' => $user['email']]
        );
    }
}
