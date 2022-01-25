import {sendAjax} from "./common";

class SLC {
	constructor() {
		this.init();
	}

	init() {
		$(document).on('change', '[name="user_currency"]', this.userChangeCurrency);
		$(document).on('change', '[name="user_country"]', this.userChangeCountry);
	}

	userChangeCurrency = async(e) => {
		let $el = $(e.target);
		let val = $('option:selected', $el).val();
		let $data = {'action':'user_change_currency', 'currency': val};

		let r = await sendAjax($data, {} );
		console.log(r);
		if(r.success){

		}
	}

	userChangeCountry = async(e) => {
		let $el = $(e.target);
		let val = $('option:selected', $el).val();
		let $data = {'action':'user_change_country', 'country': val};

		let r = await sendAjax($data, {} );
	}
}

document.addEventListener('DOMContentLoaded', function() {
	new SLC();
});