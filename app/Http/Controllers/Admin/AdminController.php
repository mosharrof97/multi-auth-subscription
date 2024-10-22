<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->get();
       
        return view('admin.page.user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.page.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required'],
        ]);
        
        $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);

        $user->syncRoles($request->role);

        return redirect()->route('admin.user')->with('success', 'User Create Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        // dd($user->roles->name);
        return view('admin.page.user.edit',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'role'=>['required'],
        ]);
        
        $user = User::findOrFail($id);
        $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
            ]);

        $user->syncRoles($request->role);

        return redirect()->route('admin.user')->with('success', 'User Create Successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }


    public function add_user_permission($id){
        $user = User::findOrFail($id);
        $permission = Permission::all();

        // $assignPermission = $user->getDirectPermissions();
        $assignPermission = $user->getDirectPermissions()->pluck('id')->toArray();
        
        // dd($user->getDirectPermissions());
        // $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id',$role->id)
        // ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();

        return view('admin.page.user.assignPermission', compact(['user','permission','assignPermission']));
    }

    public function storeUserPermission(Request $request, $id){
        $request->validate([
            'permission'=>['required'],
        ]);


        $user = User::findOrFail($id);

        // $test = $user->givePermissionTo($request->permission);
        $user->syncPermissions($request->permission);
        return redirect()->route('admin.role')->with('success', 'sync Role Permissions Successful!');
    }
}
