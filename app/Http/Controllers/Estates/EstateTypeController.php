<?php

namespace App\Http\Controllers\Estates;

use App\DataTables\Estates\EstateTypesDataTable;
use App\DataTables\RolesDataTable;
use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\PermissionsCategories;
use App\Models\User;
use App\Models\UserInfo;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Log;
use Validator;

class EstateTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EstateTypesDataTable $dataTable)
    {
        return $dataTable->render('pages.estate-types.index');
    }

    public function create()
    {
        $permission_categories = PermissionsCategories::all();
        return view('pages.estate-types.create', ['permission_categories' => $permission_categories]);
    }


    public function store(CreateRoleRequest $request)
    {


        $validated = $request->validated();

        $role = Role::create([
            'title' => $validated['title'],
            'name' => $validated['name'],
            'editable' => true
        ]);
        $role->hasPermissionTo($validated['permissions']);
        $role->save();
        return redirect('/estate-types');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $role = Role::find($id);
        return view('pages.estate-types.show.index', ['role' => $role]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $permission_categories = PermissionsCategories::all();
        $role = Role::find($id);
        return view('pages.estate-types.edit.index', ['role' => $role, 'permission_categories' => $permission_categories]);
    }


    public function update(UpdateRoleRequest $request, $id)
    {

        $validated = $request->validated();

        $role = Role::find($id);

        $role->title = $validated['title'];
        $role->name = $validated['name'];


        foreach ($role->permissions as $permission) {
            $role->revokePermissionTo($permission->name);
        }

        $role->givePermissionTo($validated['permissions']);

        $role->save();

        return redirect('/estate-types');
    }

    public function delete($id)
    {
        $role = Role::find($id);
        return view('pages.estate-types.delete.index', ['role' => $role]);
    }

    public function destroy($id)
    {
        Role::find($id)->delete();

        return redirect('/estate-types');
    }

}
