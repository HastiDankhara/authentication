<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class UserController extends Controller
// {
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('register');
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('register');
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validator = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     $user = new User();
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->password = bcrypt($request->input('password'));
    //     $user->save();

    //     return redirect()->route('register.index');
    // }

    /**
     * Display the specified resource.
     */
    // public function show(User $user)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(User $user)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, User $user)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
//     public function destroy(User $user)
//     {
//         //
//     }

//     /**
//      * Show the login form.
//      */
//     public function login(Request $request)
//     {
//         // Validate the request
//         $credentials = $request->validate([
//             'email' => 'required|email',
//             'password' => 'required|string',
//         ]);
//         // Attempt to log the user in
//         if (Auth()->attempt($credentials)) {
//             // Redirect to the intended page
//             return redirect()->intended('dashboard');
//         }
//     }
//     public function dashboard()
//     {
//         if(Auth::check()) {
//             return view('dashboard');
//         }
//         else {
//             return redirect()->route('login');
//         }
//         // return redirect()->route('login');
//     }
// }
