<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function index()
    {
        $users = User::get()->where('rol', "medewerker");
        return view('beheerder.staff', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'rol' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('beheerder.editStaff')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|email',
            'rol' => 'required',
        ]);

        $user = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'rol' => $request->rol,
        ]);

        return redirect('staff');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
