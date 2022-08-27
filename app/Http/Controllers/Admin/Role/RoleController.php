<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    final public function index(Role $role): View
    {
        return view('admin.role.index', [
            'roles' => $role->getRoles()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    final public function create(): View
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    final public function store(Request $request, Role $role)
    {
        $data = $request->validate([
            'name' => 'bail|required|string|max:255'
        ]);

        $role->createRole($data);

        return redirect()
            ->route('roles.index')
            ->with('success', "Admin role added!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    final public function edit(Role $role)
    {
        abort_if($role->name === 'admin', 403, "Super admin role cannot be updated!");
        return view('admin.roles.edit', [
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    final public function update(Request $request, Role $role)
    {
        $data = $request->validate([
            'name' => 'bail|required|string|max:255',
        ]);

        abort_if($role->name === 'admin', 403, "Super admin role cannot be updated!");

        $role->updateRole($data);

        return redirect()
            ->back()
            ->with('success', "Admin role updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    final public function destroy(Role $role)
    {
        abort_if($role->name === 'admin', 403, "Super admin role cannot be deleted!");

        $role->deleteRole();

        return redirect()
            ->back()
            ->with('success', "Admin role Deleted!");
    }
}
