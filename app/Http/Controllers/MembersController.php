<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use DB;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::all();
        return view('profil.members.member', compact('members'));
    }

    public function cetak()
    {
        //
        $members = Member::all();
        return view('profil.members.cetak', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profil.members.create');
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
            'kode' => 'required|unique:members',
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required|max:12',
            'email' => 'required'
        ]);

        Member::create($request->all());

        return redirect('/member')->with('status', 'Data anggota berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $members = DB::table('members')->where('id', $id)->first();
        return view('profil.members.edit', compact('members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('members')->where('id', $id)->update(
            [
                'kode' => $request->kode,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tlp' => $request->tlp,
                'email' => $request->email
            ]
        );
        return redirect('/member')->with('status', 'Data anggota berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('members')->where('id', $id)->delete();
        return redirect('/member')->with('status', 'Data anggota berhasil dihapus!');
    }
}
