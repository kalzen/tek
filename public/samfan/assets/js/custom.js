


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
            $('#buynow').data('model', data.model);
            console.log(data);
        },error:function(){ 
             //console.log(data);
        }
    });
});
$('#buynow').click(function(e){
    e.preventDefault();
    console.log('ok');
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
            window.location.href = "/gio-hang";
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
            $('.cart-contents .count').html(data.total_items);
            getCart();
            toastr["success"]("Thêm giỏ hàng thành công!", "Thêm giỏ hàng");
        },
        error: function(xhr, status, error) {
            console.error('Error adding to cart:', error);
            alert('Đã có lỗi xảy ra, vui lòng thử lại sau.');
        }
    });
});
function getCart()
    {
    var url_data = $('#cart_url').val();
    $('.cart_list').html('');
    $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: url_data,
        dataType: 'json',
        success: function (data) {
            // $('#package-' + package).html(data.price);
            // $('#cart-'+package).data('model', data.model);
            $('.cart_list').append(data.html);
            $('.cart-contents .count').html(data.total_items);
            $('#totalPrice').html(data.total_price);
            console.log(data);
        },error:function(){ 
             //console.log(data);
        }
    });
}
$('#checkout').click(function(e)
{
    e.preventDefault();
    //toastr["success"]("", "Thêm giỏ hàng");
    swal({
        title: "Đặt hàng thành công!",
        text: "Cảm ơn bạn đã đặt hàng tại Samfan. Chúng tôi sẽ liên hệ xác nhận đơn hàng sớm nhất có thể!",
        icon: "success",
        buttons: true,
      })
      .then(() => {
        window.location.href = "clearcookies";
      });
   
});
function removeFromCart(element) {
    var model = $(element).data('model');
    var url_data = $('#cart_remove_url').val()+"?model="+model;
    $.ajax({
        url: url_data,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.error) {
                alert(response.error);
            } else {
                // Update the cart UI
                $('.cart_totals .woocommerce-Price-amount.amount').text(response.total_price + '₫');
                $('.cart_totals .order-total .woocommerce-Price-amount.amount').text(response.total_price + '₫');
                $(element).closest('tr').remove();
                getCart();
                //$(element).closest('li').remove();
                //toastr["success"]("Xóa sản phẩm!", "Xóa sản phẩm giỏ hàng thành cô"); 
            }
        },
        error: function(xhr, status, error) {
            alert('An error occurred while removing the item from the cart. Please try again later.');
            console.error(error);
        }
    });
}
$(document).ready(function() {   
    
    getCart();
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      };
});