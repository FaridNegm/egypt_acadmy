<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Finaly2;
use Illuminate\Http\Request;

class Finaly2Controller extends Controller
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
            $finaly2 = Finaly2::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $finaly2 = Finaly2::latest()->paginate($perPage);
        }

        return view('Admin.finaly2.index', compact('finaly2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.finaly2.create');
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
        
        Finaly2::create($requestData);

        return redirect('admin/finaly2')->with('flash_message', 'Finaly2 added!');
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
        $finaly2 = Finaly2::findOrFail($id);

        return view('Admin.finaly2.show', compact('finaly2'));
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
        $finaly2 = Finaly2::findOrFail($id);

        return view('Admin.finaly2.edit', compact('finaly2'));
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
        
        $finaly2 = Finaly2::findOrFail($id);
        $finaly2->update($requestData);

        return redirect('admin/finaly2')->with('flash_message', 'Finaly2 updated!');
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
        Finaly2::destroy($id);

        return redirect('admin/finaly2')->with('flash_message', 'Finaly2 deleted!');
    }
}
