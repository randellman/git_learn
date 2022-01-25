import { showHidePreloader, showMsg , sendAjax , updateURLParameter , getURLParameter } from './common.js';

class HelpCenter {
    constructor() {
        this.init();
        console.log('hcAjaxLoadContent--constructor');
    }

    init() {
       $(document).on('click' , '.hc_ajax_load_content', this.hcAjaxLoadContent);
       $(document).on('click' , '.pagination_help_center a', this.hcAjaxPaginationLoadContent);

    }

    hcAjaxPaginationLoadContent = async(e) => {
        e.preventDefault();
        let $el = $(e.target);
        let $href = $el.prop('href');
        let page = getURLParameter($href , 'paged');
        let $id = getURLParameter( window.location.href , 'term_id');

        let $data = {'action':'ajax_help_center_load_content', 'id': $id , 'paged':page  , 'type': 'taxonomy'  };
        this.hcSendContentRequest($data , {});

    };

    hcAjaxLoadContent = async(e) => {
        console.log('hcAjaxLoadContent --' );

        e.preventDefault();
        console.log('hcAjaxLoadContent--hcAjaxLoadContent');
        let $el = $(e.target);
        let $id = $($el).data('id');
        let $data = {'action':'ajax_help_center_load_content', 'id': $id , 'type': 'taxonomy'  };

        if($($el).data('type')){
            $data['type'] = $($el).data('type');

            if($data['type'] == 'post'){
                window.history.replaceState('', '', updateURLParameter(window.location.href, "post_id", $id));
            }else{
                var newURL = updateURLParameter(window.location.href, 'post_id', 'delete_param' , );
                window.history.replaceState('', '', updateURLParameter(newURL, "term_id", $id));
            }

        }

        this.hcSendContentRequest($data , {});

    }
    async hcSendContentRequest($data = '' , $addparam ={}) {
        let $r = await sendAjax($data, $addparam );
        if($r.success){
            if($r.content) {
                // $('.help_center_content_wrp').html();
                this.setMainContent($r.content)
            }
        }
    }

    setMainContent($content = '') {
        $('.help_center_content_wrp').html($content);
    }

}

document.addEventListener('DOMContentLoaded', function() {
    new HelpCenter();
});
