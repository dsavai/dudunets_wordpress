
<<<<<<< HEAD

jQuery(document).ready(function (){



    jQuery("#subscribe-btn").click(function (e){

        e.preventDefault();

        var recaptchaResponse = grecaptcha.getResponse();
             if (recaptchaResponse.length === 0) {
                  alert('Please complete the reCAPTCHA');
             }

        var email = jQuery("#email-subscribe").val();

        //ajax

        jQuery.ajax({

            url: script.ajaxurl,

            type: 'POST',

            data: {

                action: 'newsletter_subscription',

                email: email,
                recaptchaResponse : recaptchaResponse

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

                      var response = JSON.parse(response);

                  if (response.success == 1) {
                        alert("Success: " + response.message);
                    } else {
                        alert("Error: " + response.message);
                  }

                },

                error: function (response){

                    console.log(response);

                },

            });



        }





    });



=======
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

>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
});




<<<<<<< HEAD





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
           var submitButton = jQuery(form).find('button[type="submit"]');
            submitButton.attr('disabled', true);

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

                    form: "Front Page Form"
                    

                },

                success: function (response) {
                    var response = JSON.parse(response);

                  if (response.success == 1) {
                    jQuery("#front_page_quote_form")[0].reset();
                        alert("Success: " + response.message);
                    } else {
                        alert("Error: " + response.message);
                  }

                },

                error: function (response){

                    alert("There was an error submitting your response please try again later");

                },
                complete: function () {
                    // Re-enable the submit button
                    submitButton.attr('disabled', false);
                }

            });



        }





    });



=======
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

>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
});



<<<<<<< HEAD




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

            var submitButton = jQuery(form).find('button[type="submit"]');
            submitButton.attr('disabled', true).text('Submitting...');
            var recaptchaResponse = grecaptcha.getResponse();
             if (recaptchaResponse.length === 0) {
                  alert('Please complete the reCAPTCHA');
             }

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

                    message: message,

                    form : "Side Bar Form",
                    recaptchaResponse : recaptchaResponse

                },

                success: function (response) {

               var response = JSON.parse(response);

                  if (response.success == 1) {
                    jQuery("#sidebar_form")[0].reset();
                        alert("Success: " + response.message);
                    } else {
                        alert("Error: " + response.message);
                  }

                },

                error: function (response){

                    alert("There was an error submitting your response please try again later");

                },
                complete: function () {
                    // Re-enable the submit button
                    submitButton.attr('disabled', false).text('Submit');
                }

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

            var submitButton = jQuery(form).find('button[type="submit"]');
            submitButton.attr('disabled', true).text('Submitting...');

            var recaptchaResponse = grecaptcha.getResponse();
             if (recaptchaResponse.length === 0) {
                  alert('Please complete the reCAPTCHA');
             }

            let full_name = jQuery("input[name=full_name]").val();

            let mobile = jQuery("input[name=mobile]").val();

            let email = jQuery("input[name=email]").val();

            let location = jQuery("input[name=location]").val();

            let message = jQuery("#form_message").val();

        

            jQuery.ajax({

                type: "POST",

                url: script.ajaxurl,

                data: {

                    action:'submit_page_lead',

                    full_name:full_name,

                    mobile:mobile,

                    email:email,

                    location:location,

                    message: message,

                    form : "Contact Us Form",
                    recaptchaResponse : recaptchaResponse

                },

                success: function (response) {
                    var response = JSON.parse(response);

                  if (response.success == 1) {
                    jQuery("#contact_form")[0].reset();
                        alert("Success: " + response.message);
                    } else {
                        alert("Error: " + response.message);
                  }

                },

                error: function (response){

                    alert("There was an error submitting your response please try again later");

                },
                complete: function () {
                    // Re-enable the submit button
                    submitButton.attr('disabled', false).text('Submit');
                }

            });



        }





    });



});



const openMenuModal = document.getElementById("openMobileMenuOverlay");

const menuMobileOverlay = document.getElementById("menuMobileOverlay");

const body = document.querySelector("body")

const menuMobileClose = document.getElementById("menuMobileClose");

const menuHasChildren = document.querySelectorAll(".menu-item-has-children");

const menuDropDowns = document.querySelectorAll(".m-nav-submenu");





// menuHasChildren.forEach((button) => {

//     button.addEventListener("click", () => {

//         menuDropDowns.forEach(item => {

//             item.classList.add("showMenu")

//         })

//     })

// })



openMenuModal.addEventListener("click", () =>{

    body.classList.add("disable-scrolling");

    menuMobileOverlay.classList.add("show-mobile-menu")

});



menuMobileClose.addEventListener("click", () =>{

    body.classList.remove("disable-scrolling");

    menuMobileOverlay.classList.remove("show-mobile-menu")

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

    slidesPerView: 1,

    spaceBetween: 20,

    autoplay: {

        delay: 2000,

        disableOnInteraction: false,

    },

    breakpoints: {

        580: {

            slidesPerView: 1,

            spaceBetween: 20,

        },

        640: {

            slidesPerView: 2,

            spaceBetween: 20,

        },

        768: {

            slidesPerView: 3,

            spaceBetween: 40,

        },

        1024: {

            slidesPerView: 4,

            spaceBetween: 50,

        },

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





=======
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

const openMenuModal = document.getElementById("openMobileMenuOverlay");
const menuMobileOverlay = document.getElementById("menuMobileOverlay");
const body = document.querySelector("body")
const menuMobileClose = document.getElementById("menuMobileClose");
const menuHasChildren = document.querySelectorAll(".menu-item-has-children");
const menuDropDowns = document.querySelectorAll(".m-nav-submenu");


// menuHasChildren.forEach((button) => {
//     button.addEventListener("click", () => {
//         menuDropDowns.forEach(item => {
//             item.classList.add("showMenu")
//         })
//     })
// })

openMenuModal.addEventListener("click", () =>{
    body.classList.add("disable-scrolling");
    menuMobileOverlay.classList.add("show-mobile-menu")
});

menuMobileClose.addEventListener("click", () =>{
    body.classList.remove("disable-scrolling");
    menuMobileOverlay.classList.remove("show-mobile-menu")
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
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        580: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
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


>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
