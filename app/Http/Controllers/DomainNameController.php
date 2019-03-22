<?php

namespace App\Http\Controllers;

use App\domainName;
use Illuminate\Http\Request;

class DomainNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_domain = domainName::orderBy('id','DESC')->get();
        return view('admin.domain.list', ['list_domain' => $list_domain]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.domain.create');
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
        $this->validate($request, [
            'txtUserName' => 'required|min:3|max:50',
            'txtDomainName' => 'required|min:3|max:100'
        ], [
            'txtUserName.required'    => 'Username là bắt buộc',
            'txtUserName.min'      => 'Username phải lớn hơn 3 ký tự',
            'txtUserName.max'      => 'Username phải nhỏ hơn 100 ký tự',

            'txtDomainName.required'  => 'Domain name là bắt buộc',
            'password.min'      => 'Domain name phải lớn hơn 3 ký tự',
            'password.max'      => 'Domain name phải nhỏ hơn 100 ký tự'
        ]);

        // Insert for database
        $domainName = new domainName;

        $domainName->username = $request->txtUserName;
        $domainName->namedomain = $request->txtDomainName;

        $domainName->save();

        return redirect()->route('admin_domain_create')->with('thongbao','Thêm mới thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\domainName  $domainName
     * @return \Illuminate\Http\Response
     */
    public function show(domainName $domainName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\domainName  $domainName
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $domain = domainName::find($id);
        return view('admin.domain.edit')->with('domain', $domain);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\domainName  $domainName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, domainName $domainName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\domainName  $domainName
     * @return \Illuminate\Http\Response
     */
    public function destroy(domainName $domainName)
    {
        //
    }
}
