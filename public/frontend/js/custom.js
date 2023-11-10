$(document).ready(function(){

    $('.addToCart').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: '/add-to-cart',
            data: {
                'product_id' : product_id,
                'product_qty' : product_qty,

            },

            success: function(response){
                swal(response.status);
            }

        });
    });

    $('.increament-btn').click(function(e){
        e.preventDefault();

        // var increment_value = $('.qty-input').val();
        var incre_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value < 10){
            value++;
            // $('.qty-input').val(value);
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });


    $('.decreament-btn').click(function(e){
        e.preventDefault();

        // var decrement_value = $('.qty-input').val();
        var decrement_value = $(this).closest('.product_data').find('.qty-input').val();

        var value = parseInt(decrement_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value > 1){
            value--;
            // $('.qty-input').val(value);
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $('.delete-cart-item').click(function(e){
        e.preventDefault();

        var prod_id =  $(this).closest('.product_data').find('.prod_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: 'delete-cart-item',
            data: {
                'prod_id': prod_id,
                
            },
            success: function(response){
                swal(response.status);
                window.location.reload();
            }
        });
         
    });

    $('.changeQuantityBtn').click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var prod_id =  $(this).closest('.product_data').find('.prod_id').val();
        var qty     =  $(this).closest('.product_data').find('.qty-input').val();

        data = {
            'prod_id' : prod_id,
            'prod_qty' : qty,
        }

        $.ajax({
            method: 'POST',
            url: 'update-cart',
            data: data,
            success: function(response){
                window.location.reload();
            }
        });


    });

});