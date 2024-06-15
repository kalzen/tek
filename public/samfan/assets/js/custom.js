$('.getprice').click(function(){
    $(this).closest('div').children().removeClass('active');
    $(this).addClass('active');
    var name=$(this).data('name');
    var value = $(this).data('value');
    var package = $(this).data('package');
    var url_get = $('#getprice_url').val();
    var url_data = url_get+"?name="+name+"&value="+value+"&package="+package;
    $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: url_data,
        dataType: 'json',
        success: function (data) {
            $('#package-' + package).html(data.price);
            $('#cart-'+package).data('model', data.model);
            console.log(data);
        },error:function(){ 
             //console.log(data);
        }
    });
});
$('.add_to_cart_button').click(function(){

    var model = $(this).data('model');
    var url_get = $('#addtocart_url').val();
    var url_data = url_get+"?model="+model;
    $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: url_data,
        dataType: 'json',
        success: function (data) {
            // $('#package-' + package).html(data.price);
            // $('#cart-'+package).data('model', data.model);
            $('.cart-contents .count').html(data.total_items);
            console.log(data);
        },error:function(){ 
             //console.log(data);
        }
    });
});
$(document).ready(function() {   
    var url_data = $('#cart_url').val();
    $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: url_data,
        dataType: 'json',
        success: function (data) {
            // $('#package-' + package).html(data.price);
            // $('#cart-'+package).data('model', data.model);
            $('.cart_list').append(data.html);
            $('.cart-contents .count').html(data.total_items);
            console.log(data);
        },error:function(){ 
             //console.log(data);
        }
    });
});