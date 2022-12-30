<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class editProfileController extends Controller
{
    public function index() {
        return view('editProfile');
    }

    public function update(Request $request) {
        $update = User::find($request->username);

        $imageFile = $request->file('image');
        $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
        Storage::putFileAs('public/user-profile-image', $imageFile, $imageName);

        Storage::open('your_path', array('files'=> true));

        $update->image = $imageName;
        $update->save();

        return redirect()->with('Success', 'Successfully update your profile');
    }
}
