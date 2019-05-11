<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Carioke4;
use Illuminate\Http\Request;

class Carioke4Controller extends Controller
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
            $carioke4 = Carioke4::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $carioke4 = Carioke4::latest()->paginate($perPage);
        }

        return view('Admin.carioke4.index', compact('carioke4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.carioke4.create');
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
        
        Carioke4::create($requestData);

        return redirect('admin/carioke4')->with('flash_message', 'Carioke4 added!');
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
        $carioke4 = Carioke4::findOrFail($id);

        return view('Admin.carioke4.show', compact('carioke4'));
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
        $carioke4 = Carioke4::findOrFail($id);

        return view('Admin.carioke4.edit', compact('carioke4'));
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
        
        $carioke4 = Carioke4::findOrFail($id);
        $carioke4->update($requestData);

        return redirect('admin/carioke4')->with('flash_message', 'Carioke4 updated!');
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
        Carioke4::destroy($id);

        return redirect('admin/carioke4')->with('flash_message', 'Carioke4 deleted!');
    }
}
