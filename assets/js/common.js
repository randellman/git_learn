import Swal from 'sweetalert2';

export async function showMsg($param) {

    // return  false ;

    let $args = {
        icon: 'info',
    }

    if(typeof $param.title != "undefined"){ $args.title = $param.title; }
    if(typeof $param.text != "undefined"){ $args.text = $param.text; }
    if(typeof $param.icon != "undefined"){ $args.icon = $param.icon ;}
    if(typeof $param.showCancelButton != "undefined"){ $args.showCancelButton = $param.showCancelButton; }
    if(typeof $param.showCancelButton != "undefined"){ $args.showCancelButton = $param.showCancelButton ;}
    if(typeof $param.confirmButtonColor != "undefined"){ $args.confirmButtonColor = $param.confirmButtonColor; }
    if(typeof $param.cancelButtonColor != "undefined"){ $args.cancelButtonColor = $param.cancelButtonColor; }
    if(typeof $param.confirmButtonText != "undefined"){ $args.confirmButtonText = $param.confirmButtonText; }

    let $r =  Swal.fire($args);
    return  $r;
}

export function getURLParameter(url = window.location.href, name) {
    return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
}
/*export function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};*/
export function updateURLParameter(url = '', param = '', paramVal)
{
    var TheAnchor = null;
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";

    if (additionalURL)
    {
        var tmpAnchor = additionalURL.split("#");
        var TheParams = tmpAnchor[0];
        TheAnchor = tmpAnchor[1];
        if(TheAnchor)
            additionalURL = TheParams;

        tempArray = additionalURL.split("&");

        for (var i=0; i<tempArray.length; i++)
        {
            if(tempArray[i].split('=')[0] != param)
            {
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }
    else
    {
        var tmpAnchor = baseURL.split("#");
        var TheParams = tmpAnchor[0];
        TheAnchor  = tmpAnchor[1];

        if(TheParams)
            baseURL = TheParams;
    }

    if(TheAnchor)
        paramVal += "#" + TheAnchor;

    if(paramVal == 'delete_param'){
        var rows_txt = '' ;
    }else{
        var rows_txt = temp + "" + param + "=" + paramVal;
    }


    return baseURL + "?" + newAdditionalURL + rows_txt;
}

export function showHidePreloader($show = true  , $class = '.block-preloader' ,$parent = {} ){

    let $preloader = {} ;
    if(!$.isEmptyObject($parent)){
        $preloader = $parent.find($class);
    }else{
        $preloader = $($class);
    }

    if($show){
        if($preloader.length > 0){
            $preloader.css('display', 'block');
        }
    }else{
        if($preloader.length > 0){
            $preloader.css('display', 'none');
        }
    }

}

export async function sendAjax ($data = {} , $addparam = {})  {
    let $ajax_param = {
        type: 'post',
        url: ali.ajax_url,
        dataType: 'json',
        data: $data,
    };

    $.each($addparam , ($ind, $v)=>{ $ajax_param[$ind] = $v ; });

    let  $ajax =  $.ajax($ajax_param);
    return  $ajax;
};


function validationForm($form_obj){
    let $inputs = $($form_obj).find('.validation');
    $inputs.removeClass('invalid');
    $($form_obj).find('.input-group').removeClass('error');
    let $valid = true ;
    $.each($inputs , function ($ind, $v) {
        const $inp_obj = $($v);
        const $inp_v = $inp_obj.val();
        const $inp_name = $inp_obj.prop('name');
        let $inp_length = $inp_obj.data('length');

        if($($inp_obj).is(':disabled')){
            return false;
        }

        if($inp_length == undefined){
            $inp_length = 6;
        }
        if($inp_name == 'billing_postcode'){
            $inp_length = 2;
        }

        if($inp_obj.is('input')){
            if($inp_obj.prop('type') == 'email'){
                if(!$inp_obj.is(':valid')){
                    $valid = false;
                    if($inp_obj.closest('.input-group').length>0){
                        $inp_obj.closest('.input-group').addClass('error');
                    }else{
                        $inp_obj.addClass('invalid');
                    }
                }
            }else{
                if($inp_v.length<$inp_length){
                    $valid = false;
                    if($inp_obj.closest('.input-group').length>0){
                        $inp_obj.closest('.input-group').addClass('error');
                    }else{
                        $inp_obj.addClass('invalid');
                    }
                }
            }

        }else if($inp_obj.is('select')){


        }else{

        }

    });

    if($($form_obj).find('input[name="password"]').length>0 && $($form_obj).find('input[name="confirm_password"]').length>0){
        let $pass_inp = $($form_obj).find('input[name="password"]');
        let $pass_conf = $($form_obj).find('input[name="confirm_password"]');
        if($pass_conf.val().length < 5 || $pass_inp.val().length < 5 || $pass_conf.val() != $pass_inp.val()){
            $valid = false;
            if($pass_inp.closest('.input-group').length>0){
                $pass_inp.closest('.input-group').addClass('error');
            }else{
                $pass_inp.addClass('invalid');
            }

            if($pass_conf.closest('.input-group').length>0){
                $pass_conf.closest('.input-group').addClass('error');
            }else{
                $pass_conf.addClass('invalid');
            }
        }
    }


    if($($form_obj).find('input[name="privacy_policy"]').length>0 ){
        let $rul_inp = $($form_obj).find('input[name="privacy_policy"]');
        if($rul_inp.is(':checked')){
            $rul_inp.closest("label").find('.check').removeClass('invalid');
        }else{
            $rul_inp.closest("label").find('.check').addClass('invalid');
            $rul_inp.addClass('invalid');
            $valid = false;
        }

    }

    if($($form_obj).find('#g-recaptcha-response').length>0 ){
       if(!$('#g-recaptcha-response').val()){
           $valid = false;
       }
    }

    return $valid;
}

class Common_Script {
    constructor() {
        this.init();
    }

    init() {
        $(document).on('click', '.add_to_wishlist' , this.addToWishlist );
    }

    addToWishlist = async (e) => {
        e.preventDefault();
        let $el = $(e.target);

        if(!$el.hasClass('add_to_wishlist')){
            $el = $(e.target).closest('.add_to_wishlist');
        }

        if($el.hasClass('in_process')){
            return  false;
        }

        let $pid = $el.data('id');
        let $data = {'action': 'ajax_add_to_wishlist' , 'product_id':$pid };


        $el.addClass('in_process');
        let $ret = await sendAjax($data , {} );  /*{processData: false,  contentType: false }*/
        $el.removeClass('in_process');
        if($ret.success){

            if($ret.img){
               if( $el.is('img')){
                   $el.prop('src' , $ret.img);
               }else{
                   $el.find('img').prop('src' , $ret.img);
               }
            }
            if( (typeof $el.data('delete') != "undefined") && $el.data('delete') ){
                $($el).closest('.item_block').remove();
            }

        }

    }
}

$(document).ready( () => {
    new Common_Script();
});
