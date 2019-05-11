<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\services;
use DB;

class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        app()->setLocale($lang);
        $all = services::all();
        return view('admin/services/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:50',
        ]);

        $status = request('status') == '' ? 0 : 1 ;

        if(request('image') == ''){
            $name =  'df.jpg';
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/services');
            $image->move($path , $name);
        }

        services::create([
            'title' => request('title'),
            'description' => request('description'),
            'image' => $name,
            'status' => $status,
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , $lang)
    {
        app()->setLocale($lang);
        $find = services::where('id' , $id)->get();
        return view('admin/services/edit' , compact('find'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:50',
        ]);

        $status = request('status') == '' ? 0 : 1 ;

        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/services');
            $image->move($path , $name);
        }

        DB::table('services')->where('id' , $id)->update([
            'title' => request('title'),
            'description' => request('description'),
            'image' => $name,
            'status' => $status,
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = services::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
