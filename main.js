$(document).ready(function(){
    (function($){
        $(function(){
            $('#contact-form').validate({
                rules:{
                    customer_name: {
                        required:true,
                        
                    },
                    quantity:{
                        required:true,
                        minlength:4
                    },
                    price:{
                        required:true,
                        minlength:4
                    },
                },
                messages:{
                    customer_name:{
                        required:"Kindly enter the customer's name!",
                    },
                    quantity:{
                        required:"Enter quantity purchased by customer!",
                        minlength:"Enter a valid qauntity"
                    },
                    price:{
                        required:"write something",
                        minlength:"enter a valid price"
                    }
                }
            })
        })
    })(jquery)
})


