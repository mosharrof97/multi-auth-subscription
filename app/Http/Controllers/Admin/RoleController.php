<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'asc')->get();
        return view('admin.page.role.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.page.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
        ]);

        Role::create([
            'name'=>$request->name
        ]);

        return redirect()->route('admin.role')->with('success', 'Role Create Successful!');
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
    public function edit(string $id)
    {
        //
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
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('admin.role')->with('success', 'Role Delete Successful!');
    }

    public function add_role_rermission($id){
        $role = Role::findOrFail($id);
        $permission = Permission::all();
        $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id',$role->id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();

        return view('admin.page.role.assignPermission', compact(['role','permission','rolePermissions']));
    }

    public function storeRolePermission(Request $request, $id){
        $request->validate([
            'permission'=>['required'],
        ]);

        $role = Role::findOrFail($id);
        $role->syncPermissions($request->permission);
        
        
        return redirect()->route('admin.role')->with('success', 'sync Role Permissions Successful!');
    }
}
