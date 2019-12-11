<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\shop;
use DB;

class MyapiController extends Controller
{
    /**
     * 商品添加
     */
    public function add(Request $request)
    {
        //接收前台传来的信息
        $goods_name = $request->goods_name;
        $goods_price = $request->goods_price;
        $goods_num = $request->goods_num;
        //验证
        if (empty($goods_name) || empty($goods_price) || empty($goods_num))
        {
            dd("商品名称,商品价格,商品数量,不能为空");
        }
        //入库
        $res = DB::table('shop')->insert([
            'goods_name'=>$goods_name,
            'goods_price'=>$goods_price,
            'goods_num'=>$goods_num,
        ]);
        if ($res){
            return json_encode(['msg'=>'添加成功','code'=>200]);die;
        }else{
            return json_encode(['msg'=>'添加失败','code'=>201]);die;
        }
    }

    /**
     * 商品数据
     */
    public function show()
    {
        //查询所有的数据
        $shopInfo = DB::table('shop')->get();
//        dd($shopInfo);
        //转换成json格式 返回给前台
        return json_encode(['msg'=>'查询成功','code'=>200,'data'=>$shopInfo]);
    }
}
