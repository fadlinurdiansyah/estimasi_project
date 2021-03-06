/*
    convert date to ind / to itl
    @date : date YYYY-MM-DD || DD-MM-YYYY
*/
function formatDate(date, to_indo = true){
    var m,d,y,formatted;
    if(to_indo == true){
        y = date.substr(0, 4);
        m = date.substr(5, 2);
        d = date.substr(8, 2);
        formatted = d +'-'+ m +'-'+ y;
    }else{
        y = date.substr(6, 4);
        m = date.substr(3, 2);
        d = date.substr(0, 2);
        formatted = y +'-'+ m +'-'+ d;
    }
    return formatted;

}

/* notify */

function notify(type, msg, delay = 100){
    $.notify({
        // options
        message: msg ,
        icon: 'fa fa-info-circle',
    },{
        // settings
        type: type,
        delay: delay,
    });
}

function convertDateIndo(dt){
    dt = dt.trim();
    return dt.substr(8,2) +'-'+ dt.substr(5,2) +'-'+ dt.substr(0,4);
}
//loading...
function loading(div_container, is_show ){
    $("#"+div_container).css({
        'display':'none',
        'float':'right',
        'margin-right':'20px',
        'z-index':'5'
    });
    if(is_show == true)
        $("#"+div_container).html('<img src="'+base_url+'assets/cms/img/icons/loading.gif" />').fadeIn();
    if(is_show == false)
        $("#"+div_container).html('<img src="'+base_url+'assets/cms/img/icons/loading.gif" />').fadeOut();
}

function blockPage(message) {
    $.blockUI({
        message: '<h4><img src="'+base_url+'assets/cms/img/icons/ajax-loader.gif" /><i class="icon-info-sign"></i> ' + message + '</h4>', 
        css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff'
        }
    });
}

function loadContent(dURL, callback){
    blockPage('Mohon tunggu...');
    setTimeout(function(){
        $.ajax({
            url: dURL,
            data: 0,
            dataType: "html",
            type: "POST",
            cache: false,
            success: function(html){
                $.unblockUI();
                if(html != ''){
                    $("#dinamic-content").html(html);
                } else {
                    $(location).attr('href', base_url);
                }

                if (typeof callback == 'function') {
                    callback();
                }
            },
            error: function () {
                $.unblockUI();
                genericAlert("Tidak dapat menampilkan data! Request tidak valid.", "error", "");
            }
        });
    },10);
}

function ClearInput (IDform) {
    $("#"+IDform+" input[type=text]").each(function() {
        this.value ='';
    });
    $("#"+IDform+" textarea").each(function() {
        this.value ='';
    });
    $("#"+IDform+" input[type=email]").each(function() {
        this.value ='';
    });
    $("#"+IDform+" input[type=number]").each(function() {
        this.value ='';
    });
    $("#"+IDform+" input[type=hidden]").each(function() {
        this.value ='';
    });
    return false;
}

function DisableInput (IDform) {
    $("#"+IDform+" input[type=text]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" textarea").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" select").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" input[type=email]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" input[type=number]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" input[type=submit]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    return false;
}

function hideInput (IDform) {
    $("#"+IDform+" input[type=text]").each(function() {
        $(this).attr('hidden', true);
    });
    $("#"+IDform+" textarea").each(function() {
        $(this).attr('hidden', true);
    });
    $("#"+IDform+" select").each(function() {
        $(this).attr('hidden', true);
    });
    $("#"+IDform+" input[type=email]").each(function() {
        $(this).attr('hidden', true);
    });
    $("#"+IDform+" input[type=number]").each(function() {
        $(this).attr('hidden', true);
    });
    $("#"+IDform+" input[type=submit]").each(function() {
        $(this).attr('hidden', true);
    });
    return false;
}

function splitMsg(strOri){
    var splt = strOri.split('. ');
    var strRet='';
    if(splt.length>1){
        for (var i = 0; i < splt.length; i++) {
            strRet = strRet+splt[i]+'.<br>';
        };
    }
    return strRet;
}

//alert
function confAlert(message, type, url) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: type, 
        showCancelButton: true,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ya ",
        cancelButtonClass: 'btn-default',
        cancelButtonText: ' Batal ',
        closeOnConfirm: false,
        closeOnCancle: true
    }, function() {
        $(location).attr('href', url);
    });
}

function warnAlert(message) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: 'warning', 
        showCancelButton: false,
        confirmButtonClass: "btn-danger", 
        confirmButtonText: "Tutup",
        closeOnConfirm: true
    });
}

function doneAlert(message, type, url) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: type, 
        showCancelButton: false,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ok ",
        closeOnConfirm: false
    }, function() {
        $(location).attr('href', url);
    });
}

function deniedAlert(message, url) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: 'Access denied!',
        text: message,
        type: 'error', 
        showCancelButton: false,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ok ",
        closeOnConfirm: false
    }, function() {
        $(location).attr('href', url);
    });
}

function genericAlert(message, type, texttitle) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: texttitle,
        text: message,
        //textClass: textclass,
        type: type, 
        showCancelButton: false,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ok ",
        closeOnConfirm: true
    });
}

function loginAlert(message) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: 'error', 
        showCancelButton: false,
        confirmButtonClass: "btn-danger", 
        confirmButtonText: "Tutup",
        closeOnConfirm: true
    }, function() {
        //$('#id-input').val('');
        $('#pin-input').val('');
    });
}

function FDate(datex){
    var vd ='';

    if (datex == null) {
         vd ='';
    } else {
        var dd = datex.substr(8,2);
        var mm = datex.substr(5,2);
        var yyyy = datex.substr(0,4);
        vd = dd+'/'+mm+'/'+yyyy;

        if (vd == '//') {
            vd = '';
        }
    }

    return vd;
}


  function encodeStr(str){
    var str1 = "";
    str1 = str.toString();
    str1 = str1.replace(/\s/gi, "_spasi_");
    str1 = str1.replace(/:/gi, "_t2_");
    str1 = str1.replace(/\//gi, "_slash_");
    str1 = str1.replace(/\(/gi, "_b_");
    str1 = str1.replace(/\)/gi, "_e_");
    str1 = str1.replace(/\'/gi, "_k_");
    str1 = str1.replace(/\"/gi, "_kk_");
    return str1;
  }

  function decodeStr(str){
    var str1 = "";
    str1 = str.toString();
    str1 = str1.replace(/_spasi_/g, " ");
    str1 = str1.replace(/_t2_/g, ":");
    str1 = str1.replace(/_slash_/g, "/");
    str1 = str1.replace(/_b_/g, "(");
    str1 = str1.replace(/_e_/g, ")");
    str1 = str1.replace(/_k_/g, "'");
    str1 = str1.replace(/_kk_/g, '"');
    return str1;
  }
  //switch tab
function setActiveTab(tab){
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
}

//for generate sequential number
function generateNumber(tName,idName) {
    $.ajax({
        url: base_url + "get_number/" + tName,
        data: 'id=1',
        dataType: 'html',
        type: 'POST',
        cache: false,
        success: function(html) {
            $("#" + idName).val(html);
            $("#" + idName).attr('readonly','');
        }
    });
}

/* 
    Calculate diff in months 
    @tgl1, @tgl2 : 'DD-MM-YYYY'
*/

function calcDiffDateToMonth(tgl1, tgl2){
    var date1 = new Date(tgl1.substr(6,4), (tgl1.substr(3,2) * 1) - 1, tgl1.substr(0,2));
    var date2 = new Date(tgl2.substr(6,4), (tgl2.substr(3,2) * 1) - 1, tgl2.substr(0,2));

    var diffYears = date2.getFullYear()-date1.getFullYear();
    var diffMonths = date2.getMonth()-date1.getMonth();
    var diffDays = date2.getDate()-date1.getDate();

    var months = (diffYears * 12 + diffMonths);
    return months;
}

function ucFirst(str){
    const strCapitalized = str.charAt(0).toUpperCase() + str.slice(1);
    return strCapitalized;
}

