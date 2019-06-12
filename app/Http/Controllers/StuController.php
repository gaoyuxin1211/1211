<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo"qqq";
        $query=request()->all();
        // dd($query);
        $data=DB::table('stu')->get();
        // dd($data);
        return view('/stu/list',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        // echo "111";
        return view('stu/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\s  Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->except(['_token']);
        $data['time']=time();
        // dd($data);
        
        $validatedDate = $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>'用户名不能为空',
        ]);
        // dd ($validatedDate);
        $res=DB::table('stu')->insert($data);
        // dd ($res);

        if($res){
            return redirect('/stu/list');
        }else{
            return error('添加失败','/stu/add');
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
        // echo "111";
        $data=DB::table('stu')->where('id','=',$id)->first();
        // dd($data);
        return view('stu/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $data = request()->except(['_token']);
        // dd($data);
        $res=DB::table('stu')->where(['id'=>$id])->update($data);
        if($res){
            return redirect('/stu/list');
        }else{
            return ('修改失败');
        }

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
        $res=DB::table('stu')->where('id','=',$id)->delete();
        // dd($res);
        if($res){
            return redirect('/stu/list');

        }else{
            return error('删除失败','/user/list');
        }
    }
}
