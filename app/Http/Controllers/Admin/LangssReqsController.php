<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\LangssReq;
use Illuminate\Http\Request;

class LangssReqsController extends Controller
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
            $langssreqs = LangssReq::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $langssreqs = LangssReq::latest()->paginate($perPage);
        }

        return view('Admin.langss-reqs.index', compact('langssreqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.langss-reqs.create');
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
        
        LangssReq::create($requestData);

        return redirect('admin--localize=yes/langss-reqs')->with('flash_message', 'LangssReq added!');
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
        $langssreq = LangssReq::findOrFail($id);

        return view('Admin.langss-reqs.show', compact('langssreq'));
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
        $langssreq = LangssReq::findOrFail($id);

        return view('Admin.langss-reqs.edit', compact('langssreq'));
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
        
        $langssreq = LangssReq::findOrFail($id);
        $langssreq->update($requestData);

        return redirect('admin--localize=yes/langss-reqs')->with('flash_message', 'LangssReq updated!');
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
        LangssReq::destroy($id);

        return redirect('admin--localize=yes/langss-reqs')->with('flash_message', 'LangssReq deleted!');
    }
}
