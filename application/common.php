<?php
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function getCateInfo($cateInfo,$parent_id=0,$level=0){
    static $info = [];

    foreach($cateInfo as $k=>$v){
        if($v['parent_id']==$parent_id){
            $v['level'] = $level;
            $info[]=$v;
            getCateInfo($cateInfo,$v['cate_id'],$level+1);
        }
    }
    return $info;
}

function getCateId($cateInfo,$parent_id){
    static $c_id = [];

    foreach($cateInfo as $k=>$v){
        if($v['parent_id']==$parent_id){
            $c_id[] = $v['cate_id'];
            getCateInfo($cateInfo,$v['cate_id']);
        }
    }
    return $c_id;
}

/**处理左侧分类 */
function getLeftInfo($cateInfo,$parent_id=0){
    $info = [];
    foreach ($cateInfo as $k => $v) {
       if($v['parent_id']==$parent_id){
           $child = getLeftInfo($cateInfo,$v['cate_id']);
            $v['child']=$child;
            $info[] = $v;
       }
    }
    return $info;
}






function successly($font){
    $arr = ['font'=>$font,'code'=>1];
    echo json_encode($arr);
}

function fail($font){
    $arr = ['font'=>$font,'code'=>2];
    echo json_encode($arr);exit;
}

function sendSMS($tel,$code){
// Download：https://github.com/aliyun/openapi-sdk-php
// Usage：https://github.com/aliyun/openapi-sdk-php/blob/master/README.md

AlibabaCloud::accessKeyClient('LTAI4GATt5jbQjiAZ33cRTwU', 'HBY3wSdrWIaaiGx5QCkF7Id9om6IYf')
                        ->regionId('cn-hangzhou')
                        ->asDefaultClient();

try {
    $result = AlibabaCloud::rpc()
                          ->product('Dysmsapi')
                          // ->scheme('https') // https | http
                          ->version('2017-05-25')
                          ->action('SendSms')
                          ->method('POST')
                          ->host('dysmsapi.aliyuncs.com')
                          ->options([
                                        'query' => [
                                          'RegionId' => "cn-hangzhou",
                                          'PhoneNumbers' => "$tel",
                                          'SignName' => "ABC商城",
                                          'TemplateCode' => "SMS_188635114",
                                          'TemplateParam' => "{code:$code}",
                                        ],
                                    ])
                          ->request();
             if($result['Code']=='OK'){
                return true;
             }else{
                 return false;
             }
} catch (ClientException $e) {
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    echo $e->getErrorMessage() . PHP_EOL;
}

}