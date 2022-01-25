<?php
	namespace APITracking;
	
	require_once get_template_directory() . '/trackingmorecom/track.class.php/Init.class.php';

	use APITracking;

class User_Account_AM
{
	public function __construct()
	{
		add_action ('init' , [$this , 'add_endpoint']);

		add_action( 'woocommerce_account_tracking_endpoint', [$this, 'tracking_endpoint_content'] );
	}

	public function add_endpoint()
	{
		add_rewrite_endpoint( 'tracking', EP_ROOT | EP_PAGES );
	}

	// https://ali.webstaginghub.com/my-account/tracking/88/
	public function tracking_endpoint_content($order_id)
	{
		if($order_id){
			$order = wc_get_order($order_id);
			print_r($order->get_customer_order_notes());

			$track_id = carbon_get_post_meta( $order_id, 'track_id' );

			if($track_id){
				$apiKey = carbon_get_theme_option('trackingmore_api_key');
				APITracking\Api::setApiKey( $apiKey);

//				$data = ["tracking_number" => "LB181539674SG", "carrier_code" => "cainiao"]; // zak
//				$data = ["tracking_number" => "SK052616345LV", "carrier_code" => "cainiao"];
//				$response = APITracking\Realtime::post($data);
				/*
				$response = '{"meta":{"code":200,"type":"Success","message":"Success"},"data":{"items":[{"id":"8f5c9a09b955a2eab184b1e4b47638b5","tracking_number":"LB181539674SG","carrier_code":"cainiao","order_create_time":"","destination_code":"","status":"delivered","track_update":false,"original_country":"China","destination_country":"United States","itemTimeLength":36,"stayTimeLength":292,"service_code":null,"packageStatus":null,"substatus":"delivered001","last_mile_tracking_supported":null,"origin_info":{"ItemReceived":"2020-09-24 16:09:45","ItemDispatched":null,"DepartfromAirport":"2020-10-01 03:29:08","ArrivalfromAbroad":"2020-10-28 04:45:00","CustomsClearance":null,"DestinationArrived":"2020-10-27 10:17:00","weblink":"https:\/\/global.cainiao.com","phone":null,"carrier_code":"cainiao","trackinfo":[{"Date":"2020-10-30 14:42:00","StatusDescription":"[SHREVEPORT,71118]Delivered, In\/At Mailbox","Details":"SHREVEPORT,71118","checkpoint_status":"delivered","substatus":"delivered001"},{"Date":"2020-10-30 14:42:00","StatusDescription":"Product Delivered (Country code: US)","Details":"","checkpoint_status":"delivered","substatus":"delivered001"},{"Date":"2020-10-30 07:10:00","StatusDescription":"[SHREVEPORT,71118]Out for Delivery","Details":"SHREVEPORT,71118","checkpoint_status":"pickup","substatus":"pickup001"},{"Date":"2020-10-30 07:10:00","StatusDescription":"-Send item out for physical delivery (Country: US)","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-30 05:46:00","StatusDescription":"-Receive item at delivery office (Country: US)","Details":"","checkpoint_status":"pickup","substatus":"pickup001"},{"Date":"2020-10-30 05:46:00","StatusDescription":"[SHREVEPORT,71108]Arrived at Unit","Details":"SHREVEPORT,71108","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-29 00:00:00","StatusDescription":"In Transit to Next Facility","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-28 09:29:00","StatusDescription":"[DALLAS TX NETWORK DISTRIBUTION CENTER]Departed USPS Regional Destination Facility","Details":"DALLAS TX NETWORK DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-28 04:45:00","StatusDescription":"[DALLAS TX NETWORK DISTRIBUTION CENTER]Arrived at USPS Regional Facility","Details":"DALLAS TX NETWORK DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit004"},{"Date":"2020-10-27 19:00:00","StatusDescription":"[MEMPHIS TN NETWORK DISTRIBUTION CENTER]Departed USPS Regional Facility","Details":"MEMPHIS TN NETWORK DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-27 10:17:00","StatusDescription":"[MEMPHIS TN NETWORK DISTRIBUTION CENTER]Arrived at USPS Regional Destination Facility","Details":"MEMPHIS TN NETWORK DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit003"},{"Date":"2020-10-26 01:01:00","StatusDescription":"[ATLANTA GA NETWORK DISTRIBUTION CENTER]Arrived at USPS Regional Facility","Details":"ATLANTA GA NETWORK DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit004"},{"Date":"2020-10-25 16:12:00","StatusDescription":"[ATLANTA,30354]Arrived at USPS Facility","Details":"ATLANTA,30354","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-25 11:15:00","StatusDescription":"[BIRMINGHAM AL DISTRIBUTION CENTER]Arrived at USPS Regional Facility","Details":"BIRMINGHAM AL DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit004"},{"Date":"2020-10-25 03:19:00","StatusDescription":"[SHREVEPORT LA DISTRIBUTION CENTER]Departed USPS Regional Facility","Details":"SHREVEPORT LA DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-24 23:24:00","StatusDescription":"[SHREVEPORT LA DISTRIBUTION CENTER]Arrived at USPS Regional Destination Facility","Details":"SHREVEPORT LA DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit003"},{"Date":"2020-10-18 00:00:00","StatusDescription":"In Transit to Next Facility","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-17 00:00:00","StatusDescription":"In Transit, Arriving On Time","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-16 00:00:00","StatusDescription":"In Transit, Arriving On Time","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-14 20:19:00","StatusDescription":"[CHICAGO IL INTERNATIONAL DISTRIBUTION CENTER]Arrived at USPS Regional Facility","Details":"CHICAGO IL INTERNATIONAL DISTRIBUTION CENTER","checkpoint_status":"transit","substatus":"transit004"},{"Date":"2020-10-14 20:19:00","StatusDescription":"-Receive item at sorting centre (Country: US)","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-14 09:25:00","StatusDescription":"-Arrival at Destination (Country: US)","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-14 09:25:00","StatusDescription":"[ISC CHICAGO IL (USPS)]Processed Through Facility","Details":"ISC CHICAGO IL (USPS)","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-14 09:25:00","StatusDescription":"Airline arrived at destination country","Details":"","checkpoint_status":"transit","substatus":"transit004"},{"Date":"2020-10-14 09:25:00","StatusDescription":"Arrive at sorting center in destination country","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-14 09:25:00","StatusDescription":"-Arrival at Destination Postal Admin (From SG\/SIN to US)","Details":"","checkpoint_status":"transit","substatus":"transit003"},{"Date":"2020-10-14 09:25:00","StatusDescription":"Arrive at destination country","Details":"","checkpoint_status":"transit","substatus":"transit004"},{"Date":"2020-10-01 03:29:08","StatusDescription":"-Despatched to OverSeas Postal Admin (From SG\/SIN to US\/ORD)","Details":"","checkpoint_status":"transit","substatus":"transit007"},{"Date":"2020-10-01 03:29:00","StatusDescription":"Depart from  transit country or district","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-10-01 03:29:00","StatusDescription":"[SINGAPORE,SINGAPORE S06]Processed Through Facility","Details":"SINGAPORE,SINGAPORE S06","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-09-29 23:30:59","StatusDescription":"Hand over to airline","Details":"","checkpoint_status":"transit","substatus":"transit007"},{"Date":"2020-09-27 12:46:54","StatusDescription":"Received by line-haul","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-09-26 13:34:13","StatusDescription":"Outbound in sorting center","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-09-24 21:46:16","StatusDescription":"Inbound in sorting center","Details":"","checkpoint_status":"transit","substatus":"transit001"},{"Date":"2020-09-24 16:09:45","StatusDescription":"Accepted by carrier","Details":"","checkpoint_status":"transit","substatus":"transit001","ItemNode":"ItemReceived"}]},"destination_info":null,"lastEvent":"[SHREVEPORT,71118]Delivered, In\/At Mailbox,SHREVEPORT,71118,2020-10-30 14:42:00","lastUpdateTime":"2020-10-30 14:42:00"}]}}';
				*/

//				$data = ["numbers" => "LB181539674SG"]; // zak
				$data = ["numbers" => $track_id];
 				$response = APITracking\Batch::get($data);

				$tracking = json_decode($response, true);
//				print_r($tracking);

//				$courier = APITracking\Detect::post('LB181539674SG');
//				print_r($courier);
			}
		}

		include get_template_directory().'/woocommerce/myaccount/tracking.php';
	}
}

new User_Account_AM();