import { showHidePreloader, showMsg } from './common.js';

class LS_script {
    constructor() {
        this.init();
    }

    init() {
        $('#add_edit_address').on('submit', this.addEditAddress);

        $('.set_def_addr').on('click', this.setDefaultAddr);

        $('.delete_addr').on('click', this.deleteAddr);

        $('#lang_switcher').on('change', this.changeCurrency);

        $('#attribbutes_filter input[type="checkbox"]').on('change', this.attribbutesFilter);
    }

    async addEditAddress(e) {
        e.preventDefault();

        const formData = new FormData(e.target);

        showHidePreloader();
        const respJ = await fetch(ali.ajax_url, {
            method: 'POST',
            body: formData
        });
        showHidePreloader(false);

        const resp = await respJ.json();

        if(resp.success) {
            /* const dd = await showMsg({
                title: 'Success',
                text: resp.data.response,
                icon: 'success'
            });

            if(dd) {
                window.location.href = resp.data.redirect;
            } */

            window.location.href = resp.data.redirect;
        } else {
            /* const dd = await showMsg({
                title: 'Error',
                text: resp.data.response,
                icon: 'error'
            });

            if(dd) {
                window.location.reload();
            } */

            window.location.reload();
        }

        /* resp.then((data) => {
            console.log(data);
        }); */
    }

    async setDefaultAddr(e) {
        e.preventDefault();

        const $link = $(this);
        const addrTarget = $link.parents('.addit_addr').data('addr-targ');
        const addrIndex = $link.parents('.address_data').data('num');

        const data = {
            addr_target: addrTarget,
            addr_index: addrIndex,
            action: 'set_default_address'
        };

        showHidePreloader();
        const respJ = await fetch(ali.ajax_url, {
            method: 'POST',
            body: new URLSearchParams(data)
        });
        showHidePreloader(false);

        const resp = await respJ.json();

        if(resp.success) {
            const dd = await showMsg({
                title: 'Success',
                text: resp.data.response,
                icon: 'success'
            });

            if(dd) {
                window.location.reload(); 
            }
        }
    }

    async deleteAddr(e) {
        e.preventDefault();

        const $link = $(this);
        const addrTarget = $link.parents('.addit_addr').data('addr-targ');
        const addrType = $link.data('addr-type');
        let addrIndex = '';

        const data = {
            addr_type: addrType,
            addr_target: addrTarget,
            action: 'delete_address'
        };

        if(addrType === 'custom') {
            addrIndex = $link.parents('.address_data').data('num');

            data.addr_index = addrIndex;
        }

        showHidePreloader();
        const respJ = await fetch(ali.ajax_url, {
            method: 'POST',
            body: new URLSearchParams(data)
        });
        showHidePreloader(false);

        const resp = await respJ.json();

        if(resp.success) {
            const dd = await showMsg({
                title: 'Success',
                text: resp.data.response,
                icon: 'success'
            });

            if(dd) {
                window.location.reload(); 
            }
        }
    }

    async changeCurrency() {
        const currency = $(this).val();
        let date = new Date(Date.now() + 86400);
        date = date.toUTCString();
        document.cookie = `current_currency=${currency}; expires=${date}; path=/;`;

        const data = {
            action: 'change_currency',
            currency: currency
        };

        showHidePreloader();
        const respJ = await fetch(ali.ajax_url, {
            method: 'POST',
            body: new URLSearchParams(data)
        });
        showHidePreloader(false);

        // const resp = await respJ.json();
    }

    attribbutesFilter() {
        showHidePreloader();
        const $this = $(this);
        const $form = $this.parents('form');
        const $isChecked = $this.is(':checked');
        const $inputVal = $(this).val();
        const $inputToSend = $this.parents('.attribbute').find('.attr_name');
        const $queryType = $this.parents('.attribbute').find('.query_type');
        const $inputToSendVal = $inputToSend.val();

        if($isChecked) {
            //set values to hidden inputs if checkboxes are checked

            if( !$inputToSend.attr('name') ) {
                // set name attribute to hidden input that will send
                $inputToSend.attr('name', $inputToSend.data('attr_name'));
            }

            if(!$inputToSendVal) {
                $inputToSend.val($inputVal);
            } else {
                $inputToSend.val(`${$inputToSendVal},${$inputVal}`);

                let data = $queryType.data();
                let name = Object.keys(data)[0];

                $queryType.attr('name', name);
                $queryType.val(data[name]);
            }

            $form.submit();
        } else {
            //clear values of hidden inputs if checkboxes are not checked
            let valuesArr = $inputToSendVal.split(',');
            let index = valuesArr.indexOf(valuesArr);

            valuesArr.splice(index, 1);

            let valueStr = valuesArr.join(',');

            $inputToSend.val(valueStr);

            if( $inputToSend.attr('name') && !$inputToSend.val() ) {
                $inputToSend.attr('name', '');
            }

            if( $queryType.attr('name') && !$inputToSend.val()) {
                $queryType.attr('name', '');
                $queryType.val('');
            }

            $form.submit();
        }
        
        showHidePreloader(false);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    new LS_script();
});
