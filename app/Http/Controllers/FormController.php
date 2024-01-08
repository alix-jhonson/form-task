<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\company_registration;
use App\Models\private_registration;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function list()
{
    return view('form-listing');
}
public function store(Request $request)
{
    if ($request->type === 'company') {
        // Store data into company_registrations table
        company_registration::create($request->except('_token', 'type'));
    } elseif ($request->type === 'private') {
        // Store data into private_registrations table
        private_registration::create($request->except('_token', 'type'));
    }
    // Redirect or do something after data is stored
      return redirect()->route('search');
}
public function searchForm()
{
    return view('search-results');
}
public function performSearch(Request $request)
{
    $searchTerm = $request->input('searchTerm');

    $companyResults = company_registration::where('companyName', 'LIKE', "{$searchTerm}%")->get();
    $privateResults = private_registration::where(function ($query) use ($searchTerm) {
        $query->where('contactFirstName', 'LIKE', "{$searchTerm}%")
              ->orWhere('contactLastName', 'LIKE', "{$searchTerm}%");
    })->get();

    if ($companyResults->isEmpty() && $privateResults->isEmpty()) {
                // Redirect back to the form with a message
             return redirect('search')->with('no-results', 'Please add the details of the user or company that was not found.');
            }
    
    $success = 'User found successfully.';
    return redirect('search')->with('success', 'User found successfully.'); 
}
}
