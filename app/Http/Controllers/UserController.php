<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests\InsertUserRequest;
use App\Models\User;
use App\Traits\JalaliDateConverter;
use App\Traits\Utils;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    use JalaliDateConverter;
    use Utils;


    public function list(): Factory|Application|View
    {
        $users = User::all();

        return view('user.user-list',compact('users'));
    }

    public function insert(InsertUserRequest $request): RedirectResponse
    {
        $first_name = $this->convertBadSymbols($request->input('first_name'));
        $last_name = $this->convertBadSymbols($request->input('last_name'));
        $national_code = $this->convertBadSymbols($request->input('national_code'));

        User::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'national_code' => $national_code,
            'password' => Hash::make('123'),
            'role' =>  $request->input('role'),
            'status' =>  'active',
            'remember_token' => Str::random(100),
        ]);

        toastr()->success('کاربر با موفقیت ثبت شد', 'کاربر');
        return back();
    }


    public function status($id,Request $request): RedirectResponse
    {
        $user = User::find($id);
        $status = 'inactive';
        if ($request->input('status_'.$id) == 'active_'.$id){
            $status = 'active';
        }
        $user->update(['status' => $status]);

        toastr()->success('وضعیت کاربر با موفقیت ویرایش شد', 'کاربر');
        return back();
    }


    public function password($id): RedirectResponse
    {
        $user = User::find($id);

        $user->update(['password' => Hash::make('123')]);

        toastr()->success('پسورد کاربر با موفقیت ویرایش شد', 'کاربر');
        return back();
    }
}
