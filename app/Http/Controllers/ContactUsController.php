<?php
namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string|max:5000',
            'company_name' => 'nullable|string|max:255',
        ]);

        ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'company_name' => $request->input('company_name'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Done');
    }
}
