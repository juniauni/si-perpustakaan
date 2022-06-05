<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use DB;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::all();
        return view('profil.employees.employee', compact('employees'));
    }

    public function cetak()
    {
        //
        $employees = Employee::all();
        return view('profil.employees.cetak', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profil.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode' => 'required|unique:employees',
            'nama' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        Employee::create($request->all());

        return redirect('/employee')->with('status', 'Data pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employees = DB::table('employees')->where('id', $id)->first();
        return view('profil.employees.edit', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('employees')->where('id', $id)->update(
            [
                'kode' => $request->kode,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'username' => $request->username,
                'password' => $request->password
            ]
        );
        return redirect('/employee')->with('status', 'Data pegawai berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('employees')->where('id', $id)->delete();
        return redirect('/employee')->with('status', 'Data pegawai berhasil dihapus!');
    }
}
