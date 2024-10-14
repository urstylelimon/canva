<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant; // Assuming you have an Applicant model
use Illuminate\Support\Facades\Storage;
use App\Models\Job;
use App\Models\Setting;
class JobApplicationController extends Controller
{
    public function submitApplication(Request $request)
    {
        // Validate the form input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'required|string|max:2000',
            'job_id' => 'required|exists:jobs,id', // Ensure job_id is provided and exists
        ]);
    
        // Handle the resume upload
        $resumePath = $request->file('resume')->store('resumes', 'public');

    
        // Save the applicant's data to the database
        $applicant = new Applicant();
        $applicant->name = $request->full_name;
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->resume = $resumePath;
        $applicant->cover_letter = $request->cover_letter;
        $applicant->job_id = $request->job_id; // Set job_id here
        $applicant->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
    public function destroy($id)
    {
        // Find the applicant by ID
        $applicant = Applicant::findOrFail($id);

        // Delete the applicant
        $applicant->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Applicant deleted successfully.');
    }
    public function apply($slug)
    {
        // Fetch the job by slug
        $job = Job::where('slug', $slug)->firstOrFail();

        // Retrieve the settings from the database
        $settings = Setting::first(); // Fetch the settings record

        // Pass the job and settings to the view
        return view('frontend.apply', compact('job', 'settings'));
    }
    
}
