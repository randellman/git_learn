using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace API
{
    class Program
    {
        static void Main(string[] args)
        {
            // 1 List all carriers
            // string urlStr = null;
            // string requestData=null;
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"carriers");

            // 2 detect a carriers by tracking number
            // string urlStr = null;
            // string requestData="{\"tracking_number\":\"EA152563251CN\"}";
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"carriers/detect");

            // 3 create a tracking number
            // string urlstr = null;
            // string requestdata = "{\"tracking_number\": \"EA152563254CN\",\"carrier_code\":\"china-ems\",\"title\":\"chase chen\",\"customer_name\":\"chase\",\"customer_email\":\"abc@qq.com\",\"order_id\":\"#123\",\"order_create_time\":\"2018-05-20 12:00\",\"destination_code\":\"IL\",\"tracking_ship_date\":\"1521314361\",\"tracking_postal_code\":\"13ES20\",\"lang\":\"en\",\"logistics_channel\":\"4PX page\"}";
            // string result = new Tracker().getOrderTracesByJson(requestdata, urlstr, "post");

            // 4 List all trackings
            // string urlStr = "?page=1&limit=100&created_at_min=1521314361&created_at_max=1541314361&update_time_min=1521314361&update_time_max=1541314361&order_created_time_min=1521314361&order_created_time_max=1541314361&numbers=1212121,UG586285221CN&orders=123&lang=cn";
            // string requestData = null;
            // string result = new Tracker().getOrderTracesByJson(requestData, urlStr, "get");

            // 5 Get tracking results of a single tracking.
            // string urlStr = "/china-ems/EA152563254CN/cn";
            // string requestData = null;
            // string result = new Tracker().getOrderTracesByJson(requestData, urlStr, "codeNumberGet");

            // 6 create muti tracking number
            // string urlstr = null;
            // string requestdata = "[{\"tracking_number\": \"RM131516216CN\",\"carrier_code\":\"china-ems\",\"title\":\"chase chen\",\"customer_name\":\"chase\",\"customer_email\":\"abc@qq.com\",\"order_id\":\"#123444\",\"order_create_time\":\"2018-05-20 12:00\",\"destination_code\":\"IL\",\"tracking_ship_date\":\"1525314361\",\"tracking_postal_code\":\"13ES20\",\"lang\":\"en\",\"logistics_channel\":\"4PX page\"},{\"tracking_number\": \"RM111516216CN\",\"carrier_code\":\"china-ems\",\"title\":\"chase chen\",\"customer_name\":\"chase\",\"customer_email\":\"abc@qq.com\",\"order_id\":\"#123444\",\"order_create_time\":\"2018-05-20 12:00\",\"destination_code\":\"IL\",\"tracking_ship_date\":\"1521314361\",\"tracking_postal_code\":\"13ES20\",\"lang\":\"en\",\"logistics_channel\":\"4PX page1\"}]";
            // string result = new Tracker().getOrderTracesByJson(requestdata, urlstr, "batch");

            // 7 Update Tracking item
            // string urlStr = "/china-post/RM131516216CN";
            // string requestData = "{\"title\": \"testtitle\",\"customer_name\":\"c#test\",\"customer_email\":\"942632688@qq.com\",\"order_id\":\"#1234567\",\"logistics_channel\":\"chase chen c#\",\"customer_phone\":\"+86 13873399982\",\"destination_code\":\"US\",\"status\":\"7\"}";
            // string result = new Tracker().getOrderTracesByJson(requestData, urlStr, "codeNumberPut");

            // 8 Delete a tracking item
            // string urlStr = "/china-ems/LS912989616CN";
            // string requestData = null;
            // string result = new Tracker().getOrderTracesByJson(requestData, urlStr, "codeNumberDel");

            // 9 Get realtime tracking results of a single tracking 
            // string urlstr = null;
            // string requestdata = "{\"tracking_number\": \"61290983300030854514\",\"carrier_code\":\"fedex\",\"destination_code\":\"US\",\"tracking_ship_date\": \"20180226\",\"tracking_postal_code\":\"13ES20\",\"specialNumberDestination\":\"US\",\"order\":\"#123123\",\"order_create_time\":\"2018/3/27 16:51\",\"lang\":\"en\"}";
            // string result = new Tracker().getOrderTracesByJson(requestdata, urlstr, "realtime");

            // 10 Modify courier code
            // string   urlStr =null;
            // string requestData="{\"tracking_number\": \"EA152563254CN\",\"carrier_code\":\"dhl\",\"update_carrier_code\":\"china-ems\"}";
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"update");

            // 11 Get user info
            // string   urlStr =null;
            // string requestData=null;
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"getuserinfo");

            // 12 Get status number
            // string   urlStr =null;
            // string requestData=null;
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"getstatusnumber");

            // 13 Set number not update
            // string   urlStr =null;
            // string requestData= "[{\"tracking_number\":\"EA152565241CN\",\"carrier_code\":\"china-ems\"},{\"tracking_number\":\"EA152563254CN\",\"carrier_code\":\"china-ems\"}]";
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"notupdate");

            // 14 Get remote iterm results
            // string   urlStr =null;
            // string requestData= "[{\"country\":\"CN\",\"postcode\":\"400422\"},{\"country\":\"CN\",\"postcode\":\"412000\"}]";
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"remote");

            // 15 Get cost time iterm results
            // string   urlStr =null;
            // string requestData= "[{\"carrier_code\":\"dhl\",\"destination\":\"US\",\"original\":\"CN\"},{\"carrier_code\":\"dhl\",\"destination\":\"RU\",\"original\":\"CN\"}]";
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"costtime");

            // 16 Delete multiple tracking item
            // string   urlStr =null;
            // string requestData= "[{\"tracking_number\":\"EA152565241CN\",\"carrier_code\":\"china-ems\"},{\"tracking_number\":\"EA152563254CN\",\"carrier_code\":\"china-ems\"}]";
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"delete");

            // 17 Update multiple Tracking item
            // string   urlStr =null;
            // string requestData="[{\"tracking_number\":\"RM131516216CN\",\"carrier_code\":\"china-post\",\"title\": \"testtitle\",\"customer_name\":\"test\",\"customer_email\":\"942632688@qq.com\",\"order_id\":\"#123\",\"logistics_channel\":\"chase chen\",\"destination_code\":\"US\",\"status\":\"7\"},{\"tracking_number\":\"RM111516216CN\",\"carrier_code\":\"china-post\",\"title\": \"testtitle\",\"customer_name\":\"test\",\"customer_email\":\"942632688@qq.com\",\"order_id\":\"#123\",\"logistics_channel\":\"chase chen\",\"destination_code\":\"US\",\"status\":\"7\"}]";
            // string result = new Tracker().getOrderTracesByJson(requestData,urlStr,"updatemore");


            //Console.WriteLine("result:" + result);
        }
    }
}
