<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class AdminCompanyProfileController extends Controller
{
    public function index()
    {
        $profile = CompanyProfile::first();

        return view(
            'admin.company-profile.index',
            compact('profile')
        );
    }

    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        CompanyProfile::updateOrCreate(
            ['id' => 1],
            [
                'company_name' => $request->company_name,
                'description' => $request->description,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        return redirect()
            ->back()
            ->with('success', 'Company Profile berhasil diupdate.');
    }
}