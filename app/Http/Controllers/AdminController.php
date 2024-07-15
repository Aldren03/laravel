<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Employee;

use App\Models\Borrower;


class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id()) 
        {
            $usertype = Auth()->user()->usertype;
            
            if($usertype =='user')
            {
                return view('dashboard');
            }
            else if($usertype =='admin')
            {
                return view('admin.index');
            }
            else if($usertype =='manager')
            {
                return view('manager.index');
            }
            else if($usertype =='postingclerk')
            {
                return view('postingclerk.index');
            }
            else if($usertype =='collector')
            {
                return view('collector.index');
            }
            else if($usertype =='creditinvestigator')
            {
                return view('creditinvestigator.index');
            }
            else 
            {
                return redirect()->back();
            }
        }

    }
    public function home()
    {
       return view('home.index'); 
    }
    public function add_employee(Request $request)
    {
        $data = new Employee();
        $data->employee_name = $request->employeeName;
        $data->position = $request->position;
        $data->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('employee'), $imageName);
            $data->image = $imageName;
        }

        $data->save();

        return redirect()->back()->with('success', 'Employee added successfully.');
    }

    public function view_employee(Request $request)
{
    $search = $request->input('search');
    
    $data = Employee::when($search, function($query) use ($search) {
        $query->where('employee_name', 'like', '%' . $search . '%');
    })->get();
    
    return view('admin.view_employee', compact('data'));
}


    public function employee_delete($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully.');
    }

    public function update_employee($id)
    {
        $data = Employee::findOrFail($id);
        return view('admin.emp_update', compact('data'));
    }

    public function edit_employee(Request $request, $id)
    {
        $data = Employee::findOrFail($id);
        $data->employee_name = $request->employeeName;
        $data->position = $request->position;
        $data->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('employee'), $imageName);
            $data->image = $imageName;
        }

        $data->save();

        return redirect()->route('view_employee')->with('success', 'Employee updated successfully.');
    }
    public function view_user()
    {
        $data = User::all();
        return view('admin.view_user', compact('data'));
    }
    public function dashboard()
    {
        $totalEmployees = employee::count();
        $totalUsers = user::count();
        return view('admin.dashboard', compact('totalEmployees', 'totalUsers'));
    }
    public function add_borrower(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'contact_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Create a new Borrower instance
        $borrower = new Borrower();
        $borrower->full_name = $request->full_name;
        $borrower->contact_number = $request->contact_no;
        $borrower->address = $request->address;
        $borrower->email = $request->email;

        // Save the new Borrower to the database
        $borrower->save();

        // Redirect to the add borrower page with a success message
        return redirect()->route('add_borrower_form')->with('success', 'Borrower added successfully!');
    }

    public function show_add_borrower_form()
    {
        // Retrieve all borrowers to display in the view
        $data = Borrower::all();

        // Return the view with the borrower data
        return view('admin.add_borrower', compact('data'));
    }

}
