<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerFormValidateRequest;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(VolunteerFormValidateRequest $request)
    {
        DB::beginTransaction();
        try {
            $volunteer = new Volunteer;
            $volunteer->fill($request->validated());
            $volunteer->save();

            DB::commit();
        } catch (\Exception $err) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Terjadi Kesalahan')->withInput();
        }

        return redirect()->back()->with('success', 'Terima kasih sudah bergabung, dukung saya pada pesta pemilu 2024 dapil Kota Bogor Barat. PKB No. 8');
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
