<?php
	namespace app\index\controller;
	use think\Controller;
	
	class Demo9 extends Controller
	{
		//1、验证器，使用validate类中的rule属性
	    public function test1()
	    {
	    	//要验证的数据
	    	$data = [
	    		'name'=>'peter',
	    		'email'=>'peter@php.com',
	    		'password'=>'123abc',
	    		'mobile'=>'18966775522'
	    	];
	    }
	
	}

?>