<?php

namespace App\Http\Controllers;

use App\DataTables\Estates\UsersDataTable;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\UserInfo;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('pages.users.index');
    }

    public function create()
    {
        return view('pages.users.create');
    }


    public function store(CreateUserRequest $request)
    {
        $validated = $request->validated();

        $userData = $request->safe()->only(['first_name', 'last_name','username','email','password','password_confirm']);
        $infoData = $request->safe()->except(['first_name', 'last_name','username','email','password','password_confirm']);


        $user = User::create([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'editable'         => true,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'email_verified_at' => now(),
            'api_token'         => Hash::make($request->password),
        ]);

        $info = UserInfo::where('user_id', $user->id)->first();

        $user->update($userData);

        if ($info === null) {
            // create new model
            $info = new UserInfo();
        }

        // attach this info to the current user
        $info->user()->associate($user);

        foreach ($infoData as $key => $value) {
            if (is_array($value)) {
                $value = serialize($value);
            }
            $info->$key = $value;
        }

        // include to save avatar
        if ($avatar = $this->upload(folder: "user/".auth()->user()->id.'/profile')) {
            $info->avatar = $avatar;
        }

        if ($request->boolean('avatar_remove')) {
            Storage::delete($info->avatar);
            $info->avatar = null;
        }

        $info->save();

        return redirect('/users');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $user = User::find($id);
        $info = UserInfo::where('user_id', $user->id)->first();
        return view('pages.users.edit.index', ['user' => $user,'info' => $info]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        $info = UserInfo::where('user_id', $user->id)->first();
        return view('pages.users.edit.index', ['user' => $user,'info' => $info]);
    }


    public function update(UpdateUserRequest $request, $id)
    {

        $validated = $request->validated();

        $userData = $request->safe()->only(['first_name', 'last_name']);
        $infoData = $request->safe()->except(['first_name', 'last_name','roles']);

        $user = User::find($id);
        $info = UserInfo::where('user_id', $user->id)->first();

        $user->update($userData);

        foreach ($user->roles as $role) {
            $user->removeRole($role->name);
        }

        $user->assignRole($validated['roles']);

        $user->save();

        if ($info === null) {
            // create new model
            $info = new UserInfo();
        }

        // attach this info to the current user
        $info->user()->associate($user);

        foreach ($infoData as $key => $value) {
            if (is_array($value)) {
                $value = serialize($value);
            }
            $info->$key = $value;
        }

        // include to save avatar
        if ($avatar = $this->upload(folder: "user/".auth()->user()->id.'/profile')) {
            $info->avatar = $avatar;
        }

        if ($request->boolean('avatar_remove')) {
            Storage::delete($info->avatar);
            $info->avatar = null;
        }



        $info->save();

        return redirect('/users');
    }


    public function delete($id)
    {
        $user = User::find($id);
        return view('pages.users.delete.index', ['user' => $user]);
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect('/users');
    }


    private function upload($folder = 'images', $key = 'avatar', $validation = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|sometimes')
    {
        request()->validate([$key => $validation]);

        $file = null;
        if (request()->hasFile($key)) {
            $file = Storage::disk('uploads')->putFile($folder, request()->file($key), 'public');
        }

        return $file;
    }
}
