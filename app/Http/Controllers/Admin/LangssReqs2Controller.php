<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\LangssReqs2;
use Illuminate\Http\Request;

class LangssReqs2Controller extends Controller
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
            $langssreqs2 = LangssReqs2::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $langssreqs2 = LangssReqs2::latest()->paginate($perPage);
        }

        return view('Admin.langss-reqs2.index', compact('langssreqs2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.langss-reqs2.create');
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
        
        LangssReqs2::create($requestData);

        return redirect('admin/langss-reqs2')->with('flash_message', 'LangssReqs2 added!');
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
        $langssreqs2 = LangssReqs2::findOrFail($id);

        return view('Admin.langss-reqs2.show', compact('langssreqs2'));
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
        $langssreqs2 = LangssReqs2::findOrFail($id);

        return view('Admin.langss-reqs2.edit', compact('langssreqs2'));
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
        
        $langssreqs2 = LangssReqs2::findOrFail($id);
        $langssreqs2->update($requestData);

        return redirect('admin/langss-reqs2')->with('flash_message', 'LangssReqs2 updated!');
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
        LangssReqs2::destroy($id);

        return redirect('admin/langss-reqs2')->with('flash_message', 'LangssReqs2 deleted!');
    }
}
