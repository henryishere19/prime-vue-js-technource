<?php

namespace App\Http\Controllers;

use App\Models\UserInformation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserInformationController extends Controller
{
    public function create()
    {
        return Inertia::render('UserInformation');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);

        UserInformation::create($request->all());

        return redirect('/dashboard')
            // ->route('user-informations.create')
            ->with('success', 'User information created successfully.');
    }
}
