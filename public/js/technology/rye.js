// simplified ajax submit version 5
function simPost(post_data, method, url, success_callback, error_callback)
{
    $.ajax({
        type: method,
        url: url,
        data: post_data,
        cache: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend : function() {
            $('.preloader').addClass('loader').show();
            $('form').hide();
        },
        success: function (data) {
            success_callback(data);
        },
        error: function (data) {
            error_callback(data)
        },
        complete : function() {
            $('.preloader').removeClass('loader').hide();
            $('form').show();
        }
    });
}

function simPostUpload(post_data, method, url, success_callback, error_callback)
{
    $.ajax({
        type: method,
        url: url,
        data: post_data,
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend : function() {
            $('.preloader').addClass('loader').show();
            $('form').hide();
        },
        success: function (data) {
            success_callback(data);
        },
        cache: false,
        contentType: false,
        processData: false,
        error: function (data) {
           success_callback(data);
        },
        complete : function() {
            $('.preloader').removeClass('loader').hide();
            $('form').show();
        }
    });
}

function simPostHtml(post_data, method, data_type, url, success_callback, error_callback)
{
    $.ajax({
        type: method,
        url: url,
        dataType: data_type,
        data: post_data,
        cache: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend : function() {
            $('.preloader').addClass('loader').show();
            $('form').hide();
        },
        success: function (data) {
            success_callback(data);
        },
        error: function (data) {
            error_callback(data)
        },
        complete : function() {
            $('.preloader').removeClass('loader').hide();
            $('form').show();
        }
    });
}

function addZero(number)
{
    if (number < 10) {
        return number = '0' + number;
    }

    return number;
}

function currentDateTime()
{
    var date = new Date();

    var year = date.getFullYear();
    var month = addZero(date.getMonth() + 1);
    var day = addZero(date.getDate());
    var hours = addZero(date.getHours());
    var minutes = addZero(date.getMinutes());
    var seconds = addZero(date.getSeconds());

    return year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
}

function currentDate()
{
    var date = new Date();

    var year = date.getFullYear();
    var month = addZero(date.getMonth() + 1);
    var day = addZero(date.getDate());

    return year + '-' + month + '-' + day;
}

function mysqlDateToHtml( post_data )
{
    var final_date = post_data.split('-');
    return final_date[1]+'/'+final_date[2]+'/'+final_date[0];
}

function displayErrors(errors)
{
    $.each(errors, function (key, value) {
        $('#error-' + key).html(value);
        $('.border-' + key).addClass('has-error');
    });
}

// notification message
function pageNotification(target_class, message_type, icon, message_title, message)
{
    var result = $('.'+target_class).html('' +
        '<div class="alert alert-'+message_type+'">' +
            '<i class="fa '+icon+'"></i> <strong>'+message_title+'</strong> '+message+'.' +
        '</div>'
    ); 

    return result;
}