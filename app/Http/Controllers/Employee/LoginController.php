<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.employee.login.index');
    }

    public function login(EmployeeLoginRequest $request){
        $credentials = $request->getCredentials();

        $output = Auth::validate($credentials);

        dd($output);

        if(!Auth::validate($credentials)):
            dd($credentials);
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated()
    {
        return redirect()->intended('employee/dashboard');
    }
}
