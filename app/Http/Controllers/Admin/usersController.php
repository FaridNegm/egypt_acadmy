<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Session;
use App\users;
use DB;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {

        app()->setLocale($lang);
        $all = users::all();
        return view('admin/users/index' , compact('all'));
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
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|string|min:5|max:255|unique:allusers|email',
            'password' => 'required|string|min:8',
        ]);

        $status = request('status') == '' ? 0 : 1 ;

        if(request('image') == ''){
            $name =  'df.jpg';
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/users');
            $image->move($path , $name);
        }

        users::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'phone' => request('phone'),
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
        $find = users::where('id' , $id)->get();
        return view('admin/users/edit' , compact('find'));
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
        $status = request('status') == '' ? 0 : 1 ;

        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/users');
            $image->move($path , $name);
        }


        DB::table('allusers')->where('id' , $id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'phone' => request('phone'),
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
        $delete = users::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
