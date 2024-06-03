<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        // $users = $this->userService->getUsers();

        if (request()->ajax()) {
            $model = User::with('roles:id,name');
                return DataTables::eloquent($model)
                ->addColumn('name', function (User $user) {
                    return '<h5 class="font-size-14 mb-1">
                      <a href="javascript: void(0);" class="text-dark">'.$user->name.'</a>
                    </h5>';
                })
                ->addColumn('avatar', function (User $user) {
                    if($user->image){
                      return '<div>
                        <img class="rounded-circle avatar-xs" src="'.url('storage/img/users').'/'.$user->image.'" alt="">
                      </div>';
                    }else{
                      return '<div class="avatar-xs">
                        <span class="avatar-title rounded-circle">'.$user->getInitials().'
                        </span>
                      </div>';
                    }
                })
                ->addColumn('roles', function (User $user) {
                    return $user->roles[0]->name;
                })

                ->addColumn('status', function (User $user) {
                    if($user->is_active)
                      return '<span class="text-success">Active</a>';
                    else
                      return '<span class="text-danger">Inactive</a>';
                })
                ->addColumn('lastLogin', function (User $user) {
                    return $user->last_login_at ? $user->last_login_at->format('d M Y H:i') : 'N/A';
                })
                ->addColumn('action', function (User $user) {
                    $deleteIcon = '';
                    $permissionIcon = '';
                    if (auth()->id() != $user->id) {
                        $deleteIcon = '<a href="'.route('user.delete',$user->id).'" class="text-danger delete" data-original-title="Delete" data-id="'.$user->id.'"><i class="mdi mdi-delete font-size-18"></i></a>';
                    }
                    if(!($user->hasRole('SuperAdmin') || $user->hasRole('Admin'))) {
                        $permissionIcon = '<a href="'.route('user.permission',$user->id).'" class="text-primary" data-original-title="View">
                        <i class="mdi mdi-key font-size-18"></i>
                        </a>';
                    }
                    return '<div class="d-flex gap-3">
                        <a href="'.route('user.edit',$user->id).'" class="text-success edit-user" data-id="'.$user->id.'" data-original-title="Edit">
                            <i class="mdi mdi-pencil font-size-18"></i>
                        </a>
                        '.$permissionIcon.'
                        '.$deleteIcon.'
                    </div>';
                })
                ->rawColumns(['name','avatar','status','action'])
                ->toJson();
        }

        return view('modules.user.index');
    }

    public function create(Request $request)
    {
        $roles = $this->userService->getRoles();
        $permissions = $this->userService->getPermissions()->groupBy('group');

        if($request->ajax()) {
            $html = $this->userService->randerPermissionHTML($request);
            return response()->json($html);
        }

        return view('modules.user.create', compact('roles', 'permissions'));
    }

    public function store(CreateUserRequest $request)
    {
        if($this->userService->createUser($request)) {
            return redirect()->route('user.index')->with('success', 'User is created.');
        }
        return redirect()->route('user.index')->with('error', 'User is not created.');
    }

    public function edit(Request $request, $id)
    {
        $user = $this->userService->getUserById($id);
        $roles = $this->userService->getRoles();
        $permissions = $this->userService->getPermissions()->groupBy('group');

        if($request->ajax()) {
            $html = $this->userService->randerPermissionHTML($request);
            return response()->json($html);
        }

        return view('modules.user.edit', compact('user', 'roles', 'permissions'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        if($this->userService->updateUser($request, $id)) {
            return redirect()->route('user.index')->with('success', 'User is updated.');
        }
        return redirect()->route('user.index')->with('error', 'User is not updated.');
    }

    public function destroy($id)
    {
        if(User::find($id)->delete()) {
            return redirect()->route('user.index')->with('success', 'User is deleted.');
        }
        return redirect()->route('user.index')->with('error', 'User is not deleted.');
    }

    public function getUserPermission($id)
    {
        $user = $this->userService->getUserById($id);
        $roles = $this->userService->getRoles();
        $permissions = $this->userService->getPermissions()->groupBy('group');
        return view('modules.user.permission', compact('user', 'roles', 'permissions'));
    }

    public function updateUserPermission(Request $request, $id)
    {
        if($this->userService->updateUserPermission($request, $id)) {
            return redirect()->route('user.index')->with('success', 'User permission is updated.');
        }
        return redirect()->route('user.index')->with('error', 'User permission is not updated.');
    }
}
