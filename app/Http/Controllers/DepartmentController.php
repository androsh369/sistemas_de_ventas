<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments.index', [
            'departments'=> Department::paginate()
        ]);
    }


    public function create()
    {
        return view('departments.create');
    }

    public function store(request $request)
    {
        $data =$request->validate([
            'name' => 'required|max:225',
            'description' => 'required|max:225'
        ]);

        Department::create($data);

        return back()->with('massage', 'Department created successfully');
    }

    public function edit (Department $department)
    {
        return view('departments.edit', compact('department'));
    }


    public function update(Department $department, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:225',
            'description' => 'required|max:225'
        ]);

        $department->update($data);

        return back()->with('message', 'Department updated.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('message', 'Department deleted.');
    }
 
}
