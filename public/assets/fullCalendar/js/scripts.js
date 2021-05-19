$(function (){
    $('.date-time').mask('00/00/00 00:00:00')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function sendEvent(route,data_){
    $.ajax({
        url:route,
        data:data_,
        method:'post',
        dataType:'json',
        success:function (json){
            if (json){
                location.reload();
            }
        }
    })
}

function routeEvents(route){
    return document.getElementById('calendar').dataset[route];
}

function resetForm(form){
    $(form)[0].reset();
}
