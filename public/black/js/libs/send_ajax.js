//Send ajax request
function send_ajax(url, method, send_data, settings_obj, dataType = false) {

    if (settings_obj.hasOwnProperty('abort') && settings_obj['abort'] == true) {
        if (typeof xhr != 'undefined' && xhr.readyState != 4) {
            xhr.abort();
        }
    }

    var async;

    if (settings_obj.hasOwnProperty('async') && settings_obj['async'] == 'false') {
        async = false;
    }

    dataType = dataType ? dataType : 'json';

    xhr = $.ajax({
        url: url,
        type: method,
        dataType:dataType,
        data: send_data,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        async: async,
        beforeSend: function () {

            if (settings_obj.hasOwnProperty('loader')) {
                $(settings_obj['loader']).show();
            }

            if (settings_obj.hasOwnProperty('beforsend')) {
                eval(settings_obj['beforsend']);
            }

            /*if (settings_obj.hasOwnProperty('show_loader')) {

                $(settings_obj['answer']).html("<div class='progress-container'><div class='progress'><div class='progress-bar'><div class='progress-shadow'></div></div></div></div>");
            }*/
        },

        complete: function () {

            if (settings_obj.hasOwnProperty('loader')) {
                $(settings_obj['loader']).hide();
            }

            if (settings_obj.hasOwnProperty('complete')) {
                eval(settings_obj['complete']);
            }
        },
        success: function (data) {
            if (settings_obj.hasOwnProperty('handler')) {
                //data = JSON.stringify(data);
                data = eval(settings_obj['handler'] + '(' + data + ')');
            }

            if (settings_obj.hasOwnProperty('answer')) {
                $(settings_obj['answer']).html(data);
                $(settings_obj['answer']).show();
            }

            if (settings_obj.hasOwnProperty('success')) {
                eval(settings_obj['success']);
            }
        }
    });

}

function default_handler(data) {

    if(data.status == 0){
        bootbox.alert({
            message: data.errors.join('<br/>'),
            backdrop: true,
            className: 'dialog_message_error'
        });
    }
    else if(data.status == 1){

        bootbox.alert({
            message: data.success,
            backdrop: true,
            className: 'dialog_message_success'
        });

    }
}