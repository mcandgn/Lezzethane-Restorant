<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musteriler;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Urunler;



class UserController extends Controller
{
    // Bu kısım başlangıçta home sayfası için yapıldı
    // public function welcome(){
    //     return'welcome';
    // }
    // route sayfasındaki getLogin classını burada çalıştırdık.
    public function getLogin(){
        return view('auth.login');
    }
    public function getRegister()
{
    return view('auth.register');
    
}
public function urunler()
{
    return view('urunler');
}

public function MusteriEklePost(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);
    
    $existingUser = Musteriler::where('email', $request->email)->first();
if ($existingUser) {
    session()->flash('alert', 'Bu e-posta adresi zaten kullanımda.');
    return redirect()->back()->withInput();
}
    
    Musteriler::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);
    
    return redirect()->route('login','Müşteri Bilgileri Başarıyla Eklendi');
}

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

    $email = $request->email;
    $password = ($request->password);

    $user = Musteriler::where('email', $email)->where('password', $password)->first();

    if ($user) {
        session([
            'user' => $user,
            'email' => $email
        ]);
        return redirect()->route('welcome');
    } else {
        return back()->with('error', 'Kullanıcı Adı Veya Şifreniz Hatalı')->withInput();
    }
}
public function welcome() {
    $user = session('user');
    return view('welcome', compact('user'));
}
public function logout(Request $request)
{
    $request->session()->flush();
    return redirect('/login');
}
public function shopping(){
    return view('shopping-card');
}






}


 
