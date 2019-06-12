<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $query=request()->all();
        // dd($query);
        $data=DB::table('school')->get();
        // dd($data);
        return view('/school/list',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加
    public function add()
    {
        // echo "111";
        return view('school/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //添加处理
    public function store(Request $request)
    {
        //
        $data = $request->except(['_token']);
        // dd($data);

        //验证
        $validatedDate = $request->validate([
            's_name'=>'required',
        ],[
            's_name.required'=>'名称不能为空',
        ]);
        // dd($validatedDate);
        $res=DB::table('school')->insert($data);
        // dd($res);
         if($res){
            return redirect('/school/list');
        }else{
            return error('添加失败','/school/add');
        }
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
