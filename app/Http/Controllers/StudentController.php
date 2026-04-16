<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.index', [
            'title' => 'student',
            'students' => Student::latest()->get(),
            //'students' => Student::orderBy('name','asc')->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create', ['title' => 'create student']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'nim' => 'required|digits:11|numeric',
        
    ],[
        'name.required' => 'nama wajib di isi',
        'name.max' => 'nama tidak boleh lebih dari :max karakter',
        'nim.required' => 'nim wajib di isi',
        'nim.digits' => 'nim digits:digit',
        'nim.numerik' => 'nim wajib angka',
    ]);

    Student::create( $validated);
    
 
    return to_route('student.index')->withSuccess('data berasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('student.edit', [
            'title' => 'edit student',
            'student' => $student,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
                $validated = $request->validate([
        'name' => 'required|max:255',
        'nim' => 'required|digits:11|numeric',
        
    ],[
        'name.required' => 'nama wajib di isi',
        'name.max' => 'nama tidak boleh lebih dari :max karakter',
        'nim.required' => 'nim wajib di isi',
        'nim.digits' => 'nim digits:digit',
        'nim.numerik' => 'nim wajib angka',
    ]);

    $student->update( $validated);
 
    return to_route('student.index')->withSuccess('data berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student->delete($student);
 
    return to_route('student.index')->withSuccess('data berasil dihapus');
    }
}
