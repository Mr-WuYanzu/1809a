<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \email\PHPMailer;
use \App\Http\Requests\RegPost;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
	//主页
    public function index(){
        $model=new \App\ShopGood;
        $data=$model->limit(6)->get();
    	return view('index.index',compact('data'));
    }
    //登录页面
    public function login(){
    	return view('index.login');
    }
    //退出
    public function quit(Request $request){
        $request->session()->forget('user');
    }
    //登录验证
    public function loginAdd(Request $request){

        $data=$request->all();
        $model=new \App\Reg;
        $Info=$model::where('user_email',$data['user_email'])->first();
        if(empty($Info)){
            return redirect('index/login')->with('fail','用户名或密码不正确');
        }else{
            // dd(encrypt($data['user_pwd']));
            if($data['user_pwd']!=decrypt($Info['user_pwd'])){
                return redirect('index/login')->with('fail','用户名或密码不正确');
            }else{
                session(['user'=>['user_email'=>$data['user_email'],'user_id'=>$Info['user_id']]]);
                return redirect('index/index')->with('success','登录成功');
            }
        }
    }
    //注册页面
    public function reg(){

    	return view('index/reg');
    }
    //注册执行
    public function regAdd(RegPost $request){
        $data=$request->all();
        unset($data['_token']);
        unset($data['repwd']);
        
        $model=new \App\Reg;
        $data['user_pwd']=encrypt($data['user_pwd']);
        foreach($data as $k=>$v){
            $model->$k=$v;
        }
        $res=$model->save();
        if($res){
            return redirect('/index/index');
        }
    }
    
    
}
