<?php

namespace App\Http\Controllers\Auth;

use App\Models\team;
use App\Models\Setting;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View

    {
        $Settings = Setting::paginate(1);
        $teams=team::paginate(1);
        return view('auth.login',compact('Settings', 'teams'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $url = '';
        if($request->user()->role === 'admin'){
            $url = '/admin/dashboard';
        }elseif($request->user()->role === 'user'){
            $url = '/';
        }
        return redirect()->intended($url);

        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
