function sentRes(url,data,method,fn){
    data=data||null;
    if(data==null){
        var content=require('querystring').stringify(data);
    }else{
        var content = JSON.stringify(data); //json format
    }

    var parse_u=require('url').parse(url,true);
    var isHttp=parse_u.protocol=='http:';
    var options={
        host:parse_u.hostname,
        port:parse_u.port||(isHttp?80:443),
        path:parse_u.path,
        method:method,
        headers:{
            'Content-Type':'application/json',
            'Content-Length':Buffer.byteLength(content,"utf8"),
            'Trackingmore-Api-Key':'YOUR API KEY'
        }
    };
    var req = require(isHttp?'http':'https').request(options,function(res){
        var _data='';
        res.on('data', function(chunk){
            _data += chunk;
        });
        res.on('end', function(){
            fn!=undefined && fn(_data);
        });
    });
    req.write(content);
    req.end();
}
//###  测试开始 #####

//1 列出所有运输商
// var postData = null;
// var url      = 'http://api.trackingmore.com/v2/carriers/';
// sentRes(url,postData,"GET",function(data){
//     console.log(data);
// });

//2 识别一个运输商
// var postData = {"tracking_number":"RO454983277CN"};
// var url      = 'http://api.trackingmore.com/v2/carriers/detect';
// sentRes(url,postData,"post",function(data){
//     console.log(data);
// });

//3 创建一个跟踪项目
// var postData = {"tracking_number": "BYS006086079","carrier_code":"yanwen","title":"chase chen","customer_name":"chase","customer_email":"abc@qq.com","order_id":"#123","order_create_time":"1521314361","destination_code":"IL","tracking_ship_date":"1521314361","tracking_postal_code":"13ES20","lang":"en","logistics_channel":"4PX挂号小包"};
// var url      = 'https://api.trackingmore.com/v2/trackings/post';
// sentRes(url,postData,"post",function(data){
//     console.log(data);
// });

//4 获取多个运单号的物流信息
// var postData = null;
// var url      = 'http://api.trackingmore.com/v2/trackings/get?page=1&limit=100&created_at_min=1521314361&created_at_max=1541314361&update_time_min=1521314361&update_time_max=1541314361&order_created_time_min=1521314361&order_created_time_max=1541314361&numbers=4951309890716,UG586285221CN&orders=123&lang=cn';
// sentRes(url,postData,"GET",function(data){
//     console.log(data);
// });

//5 列出单个运单号物流信息
// var postData = null;
// var url      = 'http://api.trackingmore.com/v2/trackings/yanwen/BYS006086075/cn';
// sentRes(url,postData,"GET",function(data){
//     console.log(data);
// });

//6 修改单个运单号附加信息（put）
// var postData = {"title": "nodejstest","customer_name":"test","customer_email":"dddabc@qq.com","order_id":"#1234567","logistics_channel":"4PX挂号小包"};
// var url       = 'http://api.trackingmore.com/v2/trackings/yanwen/BYS006086079';
// sentRes(url,postData,"PUT",function(data){
//     console.log(data);
// });

//7 删除单个订单号
// var postData = null;
// var url      = 'http://api.trackingmore.com/v2/trackings/dhl/21241212';
// sentRes(url,postData,"DELETE",function(data){
//     console.log(data);
// });

//8 查询用户剩余额度
// var postData = null;
// var url      = 'http://api.trackingmore.com/v2/trackings/getuserinfo';
// sentRes(url,postData,"GET",function(data){
//     console.log(data);
// });

//9 查看不同状态快递数量
// var postData = null;
// var url      = 'http://api.trackingmore.com/v2/trackings/getstatusnumber?created_at_min=1521314361&created_at_max=1541314361&order_created_time_min=1521314361&order_created_time_max=1541314361';
// sentRes(url,postData,"GET",function(data){
//     console.log(data);
// });

//10 设置单号不再更新
// var postData = [
//     {"tracking_number":"BYS006086075","carrier_code":"wishpost"},
//     {"tracking_number":"BYS006086079","carrier_code":"yanwen"}
//     ];
// var url      = 'http://api.trackingmore.com/v2/trackings/notupdate';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//11 查询收货地址是否偏远
// var postData = [{"country":"CN","postcode":"400422","company":"dhl"},{"country":"CN","postcode":"412000","company":"dhl"}];
// var url      = 'http://api.trackingmore.com/v2/trackings/remote';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//12 Get cost time iterm results
// var postData = [{"carrier_code":"dhl","destination":"US","original":"CN"},{"carrier_code":"dhl","destination":"RU","original":"CN"}];
// var url      = 'http://api.trackingmore.com/v2/trackings/costtime';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//13 创建多个跟踪项目
// var postData = [
//     {"tracking_number": "BYS006086088","carrier_code":"yanwen","title":"chase chen","customer_name":"chase","customer_email":"abc@qq.com","order_id":"#123","order_create_time":"2018-05-11 12:00","destination_code":"IL","tracking_ship_date":"1521314361","tracking_postal_code":"13ES20","lang":"en","logistics_channel":"4545454"},
//     {"tracking_number": "BYS006086077","carrier_code":"yanwen","title":"chase chen","customer_name":"chase","customer_email":"abc@qq.com","order_id":"#123","order_create_time":"2018-05-10 12:00","destination_code":"IL","tracking_ship_date":"1521314361","tracking_postal_code":"13ES20","lang":"en","logistics_channel":"4PX挂号小包"}
//     ];
// var url      ='http://api.trackingmore.com/v2/trackings/batch';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//14 修改多个运单号附加信息
// var postData = [
//     {"tracking_number":"BYS006086088","carrier_code":"yanwen","title":"chase chen111","customer_name":"chaseddd","customer_email":"abcd@qq.com","order_id":"#123457777774","destination_code":"IL","status":"4","logistics_channel":"4PX挂号小包"},
//     {"tracking_number":"BYS006086077","carrier_code":"yanwen","title":"chase chen222","customer_name":"chase dsd","customer_email":"abcd@qq.com","order_id":"#1234577777","destination_code":"IL","status":"4","logistics_channel":"4PX挂号小包"}
//     ];
// var url      = 'http://api.trackingmore.com/v2/trackings/updatemore';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//15 删除多个单号
// var postData = [
//     {"tracking_number":"BYS006086091","carrier_code":"yanwen"},
//     {"tracking_number":"BYS006086094","carrier_code":"yanwen"}
//     ];
// var url      = 'http://api.trackingmore.com/v2/trackings/delete';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//16 修改运输商简码
// var postData = {"tracking_number":"BYS006086079","carrier_code":"yanwen","update_carrier_code":"dhl"};
// var url      = 'http://api.trackingmore.com/v2/trackings/update';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//17 获取单次跟踪的实时结果
// var postData = {"tracking_number": "RO454978691CN","carrier_code":"china-post","destination_code": "United States","tracking_ship_date":"deutsch-post","tracking_postal_code":"postnl-3s","specialNumberDestination":"postnl-3s","order":"#123123","order_create_time":"1521314361","lang":"en"};
// var url      = 'http://api.trackingmore.com/v2/trackings/realtime';
// sentRes(url,postData,"POST",function(data){
//     console.log(data);
// });

//###  测试结束 #####