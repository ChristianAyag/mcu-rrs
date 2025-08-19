<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    //Display the registration view.
    public function create(): View
    {
        return view('auth.register');
    }
    /**
     * Handle an incoming registration request.
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
        'pi_Lname' => ['required', 'string', 'max:255'],
        'pi_fname' => ['required', 'string', 'max:255'],
        'pi_MI' => ['nullable', 'string', 'max:4'], 
        'pi_Password' => [
            'required',
            'string',
            //'min:8',
            'confirmed',
            ],
        'pi_Email' => 'required|email|unique:users,pi_Email',
        'Co_Investigators' => ['string', 'max:255'],
        'pi_title' => ['string', 'max:255'],
        //'pi_program' => [],
        //'pi_school' => ['nullable', 'string', 'max:255'], //testing lang 
        ]);

        //testing lang
        /*$checkmcu = $request->has('checkmcu') ? 0 : 1;

        RegisteredUserControllerWx::create([
            'checkmcu'=> $checkmcu,
            'pi_school'=> $checkmcu ? null : $request->pi_school,
        ]);*/
        
        //---------------------------------------------------

        $user = new User();
        $user->pi_Lname = $validate['pi_Lname'];
        $user->pi_fname = $validate['pi_fname'];
        $user->pi_MI = $validate['pi_MI'] ?? null; // optional: fallback if null
        $user->pi_Password = Hash::make($validate['pi_Password']);
        $user->pi_Email = $validate['pi_Email'];
        $user->Co_Investigators = $validate['Co_Investigators'];
        //$user->checkmcu = $validate['checkmcu'];
        //Nadagdag ko
        //$user->pi_school = $validate['pi_school'];
        $user->pi_title = $validate['pi_title'];
        //$user->pi_program = $validate['pi_program'];
        $user->save();

        /*
        $request->validate([
            'userLname' => ['required', 'string', 'max:255'],
            'pi_fname' => ['required', 'string', 'max:255'],
            'userMI' => ['nullable|string|max:4'],
            //'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            //'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            //'email' => $request->email,
            //'password' => Hash::make($request->password),
        ]); */

        event(new Registered($user));

        //Auth::login($user);

        return redirect(route('login', absolute: false));
    }
}
