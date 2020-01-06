<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function alipay()
    {
        // echo 111;die;
        $appid = '2016100100638360';
        $method='alipay.trade.page.pay';
        $charset = 'utf-8';
        $sign = '';
        $timestamp = data('Y-m-d H:i:s');
        $version = '1.0';
        //支付宝异步通知地址
        $notify_url = 'http://hzb.wen5211314.com/alipay/notify';
        $biz_content = '';
        //请求参数
        $out_trade_no = time().rand(1111,9999);
        $product_code = 'FAST_INSTANT_TRADE_PAY'; 
        $total_amount =0.01;
        $subject = '测试订单'.$out_trade_no;
        
        
        $url ='https://openapi.alipaydev.com/gateway.do?';


        $request_param = [
            'out_trade_no' =>$out_trade_no,
            'product_code' =>$product_code,
            'total_amount' =>$total_amount,
            'subject'      =>$subject
        ];
    
        $param = [
            'app_id'    =>$appid,
            'method'    =>$method,
            'charset'   =>$charset,
            'sign_type' =>$sign_type,
            'timestamp' =>$timestamp,
            'version'   =>$version,
            'notify_url'    =>$notify_url,
            'biz_content'    =>json_encode($request_param)   
        ];



    }
}
