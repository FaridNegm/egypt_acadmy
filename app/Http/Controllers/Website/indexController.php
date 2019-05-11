<?php

namespace App\Http\Controllers\Website;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Session;
use App\reserve;
use App\services;
use App\teams;
use App\users;
use App\works;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = reserve::where('status' , 1)->get();
        $services = services::limit('6')->where('status' , 1)->get();
        $teams = teams::limit('4')->where('status' , 1)->get();
        $works = works::limit('6')->where('status' , 1)->orderBy('id', 'DESC')->get();
        return view('website/index' , compact('courses' , 'services' , 'teams' , 'works'));
    }

    public function not_authorized()
    {
        return view('Admin/layouts/false');
    }

    public function send_email(Request $request)
    {
        $data = [
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'address' => request('address'),
            'city' => request('city'),
            'course' => request('course'),
            'coupon_number' => request('coupon_number'),
            'graduate' => request('graduate'),
            'laptop' => request('laptop'),
            'opinion' => request('opinion'),
        ];

        $form_data = ['name' => 'farid fery'];

        Mail::send('website/send_to' , ['data' => $data] , function($message){
            $message->to('faridnegm44@gmail.com' , 'FaridNegm')->subject(request('course'));
            $message->from(request('email') , request('first_name'));
        });

        Session::flash('success' , 'تم الارسال بنجاح');
        return redirect()->back();
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
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
