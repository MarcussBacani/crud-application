<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use App\Models\Students;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function indexStudent()
    {
        $students = Students::get();
        return view('crud.indexStudent', compact('students'));
    }
    public function createStudent()
    {
        return view('crud.createStudent');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'age' => 'required|max:255|int',
            'address' => 'required|max:255|string',
            'course' => 'required|max:255|string',
            'subject' => 'required|max:255|string',
        ]);

        Students::create([
            'name' => $request->name,
            'age'=> $request->age,
            'address' => $request->address,
            'course'=> $request->course,
            'subject'=> $request->subject,
        ]);
        return redirect('crudStudent/createStudent')->with('status','success');
    }
    
    public function edit(int $id)
    {
        $crud = Students::findOrFail($id);
        return view('crud.editStudent',compact('crud'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'age' => 'required|max:255|int',
            'address' => 'required|max:255|string',
            'course' => 'required|max:255|string',
            'subject' => 'required|max:255|string',
        ]);

        Students::findOrFail($id) -> update([
            'name' => $request->name,
            'age'=> $request->age,
            'address' => $request->address,
            'course'=> $request->course,
            'subject'=> $request->subject,
        ]);

        return redirect()->back()->with('status','success');
    }
    public function destroy(int $id)
    {
        $crud = Students::findOrFail($id);
        $crud ->delete();

        return redirect()->back()->with('status','deleted');
    }
}
