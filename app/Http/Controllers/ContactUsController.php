<?php
namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string|max:5000',
            'company_name' => 'nullable|string|max:255',
        ]);

        // Prepare the data for the email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'company_name' => $request->input('company_name'),
            'message' => $request->input('message'),
        ];

        try {
            // Attempt to send the email
            Mail::to('muhammad@estisharati.com')
                ->send(new ContactUsMail($data, $request->input('email')));

            // If email is sent successfully, redirect with success message
            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (Exception $e) {
            // Log the error message for debugging
            \Log::error('Contact Us email sending failed: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->back()->withErrors('There was an error sending your message. Please try again later.');
        }
    }
}
