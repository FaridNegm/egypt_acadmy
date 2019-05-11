<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\NewApp4;
use Illuminate\Http\Request;

class NewApp4Controller extends Controller
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
            $newapp4 = NewApp4::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $newapp4 = NewApp4::latest()->paginate($perPage);
        }

        return view('Admin.new-app4.index', compact('newapp4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.new-app4.create');
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
        
        NewApp4::create($requestData);

        return redirect('admin/new-app4')->with('flash_message', 'NewApp4 added!');
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
        $newapp4 = NewApp4::findOrFail($id);

        return view('Admin.new-app4.show', compact('newapp4'));
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
        $newapp4 = NewApp4::findOrFail($id);

        return view('Admin.new-app4.edit', compact('newapp4'));
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
        
        $newapp4 = NewApp4::findOrFail($id);
        $newapp4->update($requestData);

        return redirect('admin/new-app4')->with('flash_message', 'NewApp4 updated!');
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
        NewApp4::destroy($id);

        return redirect('admin/new-app4')->with('flash_message', 'NewApp4 deleted!');
    }
}
