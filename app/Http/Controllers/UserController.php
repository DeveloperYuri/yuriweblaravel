<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['getRecord'] = User::getRecord($request);

        return view('authbaru.loginmultiauth.superadmin.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authbaru.loginmultiauth.superadmin.users.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'is_role' => 'required'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('authbaru.loginmultiauth.superadmin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);

        //delete product
        $users->delete();

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function myprofile(){
        $data['getUser'] = User::getSingle(Auth::user()->id);
        return view('backenddashboard.profile.index', $data);
    }

    public function UpdateAccountSetting(Request $request){
        $getUser = User::getSingle(Auth::user()->id);
        $getUser->name = $request->name;
        
        if (!empty($request->file('profile_pic'))) {

            if (!empty($getUser->profile_pic) && file_exists('storage/profile/'.$getUser->profile_pic)) {
                unlink('storage/profile/'.$getUser->profile_pic);
            }

            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $filename = Str::random(20) . '.' . $ext;
            $file->move('storage/profile/', $filename);
            $getUser->profile_pic = $filename;
        }

        $getUser->save();

        return redirect()->back()->with('success', "Account setting successfully updated");
        
    }

    // update users

   public function indexupdate(Request $request)
    {

        $user = Auth::user();

        $data['user'] = $user;
        $data['getRecord'] = User::getRecord($request);

        return view('baru.backenddashboardupdate.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createupdate()
    {
        $user = Auth::user();

        $data['user'] = $user;
        return view('baru.backenddashboardupdate.user.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeupdate(Request $request): RedirectResponse
    {
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'is_role' => 'required'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect()->route('usersupdate')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroyupdate(string $id)
    {
        $users = User::findOrFail($id);

        //delete product
        $users->delete();

        //redirect to index
        return redirect()->route('usersupdate')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
