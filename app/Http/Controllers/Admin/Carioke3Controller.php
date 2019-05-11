<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Carioke3;
use Illuminate\Http\Request;

class Carioke3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $carioke3 = Carioke3::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $carioke3 = Carioke3::latest()->paginate($perPage);
        }

        return view('Admin.carioke3.index', compact('carioke3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.carioke3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Carioke3::create($requestData);

        return redirect('admin/carioke3')->with('flash_message', 'Carioke3 added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $carioke3 = Carioke3::findOrFail($id);

        return view('Admin.carioke3.show', compact('carioke3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $carioke3 = Carioke3::findOrFail($id);

        return view('Admin.carioke3.edit', compact('carioke3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $carioke3 = Carioke3::findOrFail($id);
        $carioke3->update($requestData);

        return redirect('admin/carioke3')->with('flash_message', 'Carioke3 updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Carioke3::destroy($id);

        return redirect('admin/carioke3')->with('flash_message', 'Carioke3 deleted!');
    }
}
