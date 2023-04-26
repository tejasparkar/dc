<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCRMRequest;
use App\Http\Requests\UpdateCRMRequest;
use App\Models\CRM;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CRMController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function editHome(){
        return view('crm.edithomeform');
     }
     public function editabout(){
        return view('crm.editaboutform');
     }
     public function editcontact(){
        return view('crm.editcontactform');
     }

     public function saveHomePage(Request $request){
            CRM::create($request->all());
            return redirect('/');
     }  
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCRMRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CRM $cRM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CRM $cRM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCRMRequest $request, CRM $cRM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CRM $cRM)
    {
        //
    }
}
