<?php

namespace App\Http\Controllers;

use App\Models\Perpus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        return view('landing');
    }

    public function dashboardUser()
    {
        return view('User.dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required|min:4',
        ],[
            'email.exists' => 'email ini belum tersedia',
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);
        $user = $request->only('email', 'password');
        //auth
        if(Auth::attempt($user)){
            return redirect('/dashboardUser');
        }else {
            return redirect()->back()->with('error', 'Gagal login, dan silahkan cek dan coba lagi');
        }

    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function registerAccount(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username' => 'required|min:4|max:12',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:4',
        ]);

        // $request-> = value attribute name pada input
        // knp yg dikirim 5 data? karena table pada db todos membutuhkan 6 column input
        // salah satunya column 'done_time' yg tipenya nullable, karna nullable jd ga perlu dikirim nilai
        // 'user_id' untuk memberitahu data todo ini milik siapa, diambil melalui fitur auth
        // 'status' tipenya boolean, 0 = blm dikerjakan, 1 = sudah dikerjakan (todonya)
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('successRegister', 'Berhasil menambahkan akun! silahkan login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function show(Perpus $perpus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function edit(Perpus $perpus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perpus $perpus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perpus $perpus)
    {
        //
    }
}
