#!/usr/bin/ruby -w
#coding=utf-8
require File.dirname(__FILE__) + '/tracking.rb'

#1 List all carriers(列出所有运输商)
=begin
url="http://api.trackingmore.com/v2/carriers/"
postData = ""
tracker = Tracking.new()
res = tracker.tracker(url,postData,"GET")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#2 detect a carriers by tracking number(识别运输商)
=begin
url="http://api.trackingmore.com/v2/carriers/detect"
postData = {"tracking_number":"EA152563251CN"}
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#3 create a tracking number(新建一个单号)
=begin
url="http://api.trackingmore.com/v2/trackings/post"
postData = {"tracking_number":"BYS006086078","carrier_code":"yanwen","title":"chase chen","customer_name":"chase","customer_email":"abc@qq.com","order_id":"#123","order_create_time":"1521314361","destination_code":"IL","tracking_ship_date":"1521314361","tracking_postal_code":"13ES20","lang":"en","logistics_channel":"4PX挂号小包"}
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#4 List all trackings(列出所有跟踪)
=begin
url="http://api.trackingmore.com/v2/trackings/get?page=1&limit=100&created_at_min=1521314361&created_at_max=1541314361&update_time_min=1521314361&update_time_max=1541314361&order_created_time_min=1521314361&order_created_time_max=1541314361&numbers=BYS006086078&orders=#123&lang=en"
postData = ""
tracker = Tracking.new()
res = tracker.tracker(url,postData,"GET")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#5 Get tracking results of a single Tracking.
=begin
url="http://api.trackingmore.com/v2/trackings/yanwen/BYS006086078/cn"
postData = ""
tracker = Tracking.new()
res = tracker.tracker(url,postData,"GET")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#6 create muti tracking number(创建多个订单号)
=begin
url="http://api.trackingmore.com/v2/trackings/batch"
postData = [
   {"tracking_number": "BYS006086087","carrier_code":"yanwen","title":"chase chen","customer_name":"chase","customer_email":"abc@qq.com","order_id":"#123","order_create_time":"2018-05-11 12:00","destination_code":"IL","tracking_ship_date":"1521314361","tracking_postal_code":"13ES20","lang":"en","logistics_channel":"4545454"},
   {"tracking_number": "BYS006086076","carrier_code":"yanwen","title":"chase chen","customer_name":"chase","customer_email":"abc@qq.com","order_id":"#123","order_create_time":"2018-05-10 12:00","destination_code":"IL","tracking_ship_date":"1521314361","tracking_postal_code":"13ES20","lang":"en","logistics_channel":"4PX挂号小包"}
]
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#7 Update Tracking item(更新一个单号)
=begin
url="http://api.trackingmore.com/v2/trackings/yanwen/BYS006086079"
postData = {"title":"ruby test","customer_name":"test","customer_email":"dddabc@qq.com","order_id":"#1234567","logistics_channel":"4PX挂号小包"}
tracker = Tracking.new()
res = tracker.tracker(url,postData,"PUT")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#8 Delete a tracking item(删除一个单号)
=begin
url="http://api.trackingmore.com/v2/trackings/yanwen/BYS006086079"
postData = ""
tracker = Tracking.new()
res = tracker.tracker(url,postData,"DELETE")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#9 Get realtime tracking results of a single tracking(获取单次跟踪的实时跟踪结果)
=begin
url="http://api.trackingmore.com/v2/trackings/realtime"
postData = {"tracking_number": "RO454978691CN","carrier_code":"china-post","destination_code": "United States","tracking_ship_date":"deutsch-post","tracking_postal_code":"postnl-3s","specialNumberDestination":"postnl-3s","order":"#123123","order_create_time":"1521314361","lang":"en"}
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#10 Modify courier code(修改运输商)
=begin
url="http://api.trackingmore.com/v2/trackings/update"
postData = {"tracking_number":"BYS006086077","carrier_code":"dhl","update_carrier_code":"yanwen"}
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#11 Get user info(获取个人信息)
=begin
url="http://api.trackingmore.com/v2/trackings/getuserinfo"
postData = ""
tracker = Tracking.new()
res = tracker.tracker(url,postData,"GET")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#12 Get status number(获取单号状态)
=begin
url="http://api.trackingmore.com/v2/trackings/getstatusnumber"
postData = ""
tracker = Tracking.new()
res = tracker.tracker(url,postData,"GET")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#13 Set number not update(设置单号不再更新)
=begin
url="http://api.trackingmore.com/v2/trackings/notupdate"
postData = [
   {"tracking_number":"BYS006086077","carrier_code":"yanwen"},
   {"tracking_number":"BYS006086088","carrier_code":"yanwen"}
]
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#14 Get remote iterm results(偏远)
=begin
url="http://api.trackingmore.com/v2/trackings/remote"
postData = [{"country":"CN","postcode":"400422","company":"dhl"},{"country":"CN","postcode":"412000","company":"dhl"}]
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#15 Get cost time iterm results(花费时间)
=begin
url="http://api.trackingmore.com/v2/trackings/costtime"
postData = [{"carrier_code":"dhl","destination":"US","original":"CN"},{"carrier_code":"dhl","destination":"RU","original":"CN"}]
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#16 Delete multiple tracking item(批量删除)
=begin
url="http://api.trackingmore.com/v2/trackings/delete"
postData = [{"tracking_number":"BYS006086077","carrier_code":"yanwen"},{"tracking_number":"BYS006086088","carrier_code":"yanwen"}]
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end

#17 Update multiple Tracking item(批量更新)
=begin
url="http://api.trackingmore.com/v2/trackings/updatemore"
postData =[{"tracking_number":"BYS006086087","carrier_code":"yanwen","title":"chase chen111","customer_name":"chaseddd","customer_email":"abcd@qq.com","order_id":"#123457777774","destination_code":"IL","status":"4","logistics_channel":"4PX挂号小包"},{"tracking_number":"BYS006086076","carrier_code":"yanwen","title":"chase chen222","customer_name":"chase dsd","customer_email":"abcd@qq.com","order_id":"#1234577777","destination_code":"IL","status":"4","logistics_channel":"4PX挂号小包"}]
tracker = Tracking.new()
res = tracker.tracker(url,postData,"POST")
puts "Response #{res.code} #{res.message}: #{res.body}"
=end