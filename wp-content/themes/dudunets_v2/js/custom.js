
jQuery(document).ready(function (){

    jQuery("#subscribe-btn").click(function (e){
        e.preventDefault();
        var email = jQuery("#email-subscribe").val();
        //ajax
        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'newsletter_subscription',
                email: email
            },
            success: function (response){
                var msg = JSON.parse(response);
                alert(msg.message);
            }

        });

    });

    jQuery.validator.addMethod("IsValidMobile", function (value, element) {
        var mobileregex = new RegExp(/^07\d{8}$/i);

        return mobileregex.test(value);
    }, "Mobile number should start with 07 followed by 8 digits.");
    jQuery("#quote_form").validate({
        rules: {
            fname: {
                required:true,
                minlength:3
            },
            lname: {
                required:true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            mobile:  {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
                IsValidMobile: true
            },
            screens: {
                required:true,
                minlength:1
            },
            location: {
                required:true,
                minlength:3
            },
        },
        // Specify validation error messages
        messages: {
            fname: "Please enter your firstname",
            lname: "Please enter your lastname",
            mobile: {required: "Please enter your mobile number",regex:"Please enter valid mobile number"},
            screens: "Please select atleast one product",
            email: "Please enter a valid email",
            location: "please enter a valid location"

        },
        submitHandler: function(form) {
             let fname = jQuery("input[name=fname]").val();
             let lname = jQuery("input[name=lname]").val();
             let mobile = jQuery("input[name=mobile]").val();
             let email = jQuery("input[name=email]").val();
             let location = jQuery("input[name=location]").val();
             let selections = [];
             jQuery("input:checkbox[name=screens]:checked").each(function() {
                    selections.push(jQuery(this).val());
             });
            jQuery.ajax({
                type: "POST",
                url: script.ajaxurl,
                data: {
                    action:'submit_lead',
                    firstName:fname,
                    lastName:lname,
                    mobile:mobile,
                    email:email,
                    location:location,
                    selections:JSON.stringify(selections)
                },
                success: function (response) {
                    alert("done");
                },
                error: function (response){
                    console.log(response);
                },
            });

        }


    });

});




jQuery(document).ready(function (){

    jQuery.validator.addMethod("IsValidMobile", function (value, element) {
        var mobileregex = new RegExp(/^07\d{8}$/i);

        return mobileregex.test(value);
    }, "Mobile number should start with 07 followed by 8 digits.");
    jQuery("#front_page_quote_form").validate({
        rules: {
            full_name: {
                required:true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            mobile:  {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
                IsValidMobile: true
            },
            location: {
                required:true,
                minlength:3
            },
        },
        // Specify validation error messages
        messages: {
            full_name: "Please enter your full name",
            mobile: {required: "Please enter your mobile number",regex:"Please enter valid mobile number"},
            email: "Please enter a valid email",
            location: "please enter a valid location"

        },
        submitHandler: function(form) {
            let full_name = jQuery("input[name=full_name]").val();
            let mobile = jQuery("input[name=mobile]").val();
            let email = jQuery("input[name=email]").val();
            let location = jQuery("input[name=location]").val();
            jQuery.ajax({
                type: "POST",
                url: script.ajaxurl,
                data: {
                    action:'submit_front_page_lead',
                    full_name:full_name,
                    mobile:mobile,
                    email:email,
                    location:location,
                },
                success: function (response) {
                    alert("done");
                },
                error: function (response){
                    console.log(response);
                },
            });

        }


    });

});



jQuery(document).ready(function (){

    jQuery.validator.addMethod("IsValidMobile", function (value, element) {
        var mobileregex = new RegExp(/^07\d{8}$/i);

        return mobileregex.test(value);
    }, "Mobile number should start with 07 followed by 8 digits.");
    jQuery("#sidebar_form").validate({
        rules: {
            full_name: {
                required:true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            mobile:  {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
                IsValidMobile: true
            },
            location: {
                required:true,
                minlength:3
            },
            message:{
                required: true,
                minlength:3
            }
        },
        // Specify validation error messages
        messages: {
            full_name: "Please enter your full name",
            mobile: {required: "Please enter your mobile number",regex:"Please enter valid mobile number"},
            email: "Please enter a valid email",
            location: "please enter a valid location",
            message: "please enter a message"

        },
        submitHandler: function(form) {
            let full_name = jQuery("input[name=full_name]").val();
            let mobile = jQuery("input[name=mobile]").val();
            let email = jQuery("input[name=email]").val();
            let location = jQuery("input[name=location]").val();
            let message = jQuery("input[name=message]").val();
            jQuery.ajax({
                type: "POST",
                url: script.ajaxurl,
                data: {
                    action:'submit_page_lead',
                    full_name:full_name,
                    mobile:mobile,
                    email:email,
                    location:location,
                    message: message
                },
                success: function (response) {
                    alert("done");
                },
                error: function (response){
                    console.log(response);
                },
            });

        }


    });


    jQuery("#contact_form").validate({
        rules: {
            full_name: {
                required:true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            mobile:  {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
                IsValidMobile: true
            },
            location: {
                required:true,
                minlength:3
            },
            message:{
                required: true,
                minlength:3
            }
        },
        // Specify validation error messages
        messages: {
            full_name: "Please enter your full name",
            mobile: {required: "Please enter your mobile number",regex:"Please enter valid mobile number"},
            email: "Please enter a valid email",
            location: "please enter a valid location",
            message: "please enter a message"

        },
        submitHandler: function(form) {
            let full_name = jQuery("input[name=full_name]").val();
            let mobile = jQuery("input[name=mobile]").val();
            let email = jQuery("input[name=email]").val();
            let location = jQuery("input[name=location]").val();
            let message = jQuery("input[name=message]").val();
            jQuery.ajax({
                type: "POST",
                url: script.ajaxurl,
                data: {
                    action:'submit_page_lead',
                    full_name:full_name,
                    mobile:mobile,
                    email:email,
                    location:location,
                    message: message
                },
                success: function (response) {
                    alert("done");
                },
                error: function (response){
                    console.log(response);
                },
            });

        }


    });

});



const swiper = new Swiper(".home-slider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


const clientsLogo = new Swiper(".clientLogos", {
    watchSlidesProgress: true,
    slidesPerView: 4,
    spaceBetween: 20,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
});

jQuery(document).ready(function() {
    jQuery(".fancy_youtube").fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '70%',
        height      : '70%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });

    jQuery('.accordion_title').click(function(e){
        e.preventDefault();
        var currentAttrvalue = jQuery(this).attr('href');
        if(jQuery(e.target).is('.active')){
            jQuery(this).removeClass('active');
            jQuery('.accordion_content:visible').slideUp(300);
        } else {
            jQuery('.accordion_title').removeClass('active').filter(this).addClass('active');
            jQuery('.accordion_content').slideUp(300).filter(currentAttrvalue).slideDown(300);
        }
    });
});


jQuery(document).ready(function ($) {
    var page = 2;

    $('#load-more').on('click', function (e) {
        e.preventDefault();
        var button = $(this);

        $.ajax({
            url: script.ajaxurl,
            type: 'POST',
            data: {
                action: 'load_more_posts',
                page: page
            },
            beforeSend: function () {
                button.text('Loading...');
            },
            success: function (data) {
                if (data) {
                    var newPosts = $(data);
                    newPosts.hide();
                    $('.grid').append(data);
                    //newPosts.fadeIn(4000);
                    page++;
                    button.text('View more');
                } else {
                    button.text('No more posts');
                    button.prop('disabled', true);
                }
            }
        });
    });
});


