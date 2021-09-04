<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use keygen;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $kostum = [
            'required' => ':attribute jangan di kosongkan',
            'email' => 'bukan penulisan email',
            'password' => 'password tidak sama ',
            'same' => 'password yang anda masukan tidak sama',
            'min' => 'minimal 8 karakter',
            'max' => 'minimal 255 karakter',
            'unique' => 'email yang anda masukan sdh ada'
        ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'asalsekolah' => ['required', 'string', 'max:255'],
            'namasekolah' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password_conf' => ['required', 'string', 'min:8', 'same:password'],
        ], $kostum);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'asalsekolah' => $data['asalsekolah'],
            'namasekolah' => $data['namasekolah'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'noreg' => keygen::numeric(10)->generate(),
        ]);
    }
}
