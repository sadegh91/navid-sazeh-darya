<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests\InsertUserRequest;
use App\Http\Requests\UpdatePasswordRequest;
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


class PasswordController extends Controller
{
    use JalaliDateConverter;
    use Utils;


    public function index(): Factory|Application|View
    {
        return view('password.panel-password');
    }

    public function update(UpdatePasswordRequest $request): RedirectResponse
    {
        $user = User::find(auth()->user()->id);
        $user->update(['password' => Hash::make($request->input('password'))]);

        toastr()->success('رمز عبور با موفقیت ویرایش شد', 'رمز عبور');
        return redirect()->back();
    }

}
