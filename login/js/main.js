"use strict";
$(document).ready(function () {
    // Making of Unique userid..
    function userid(length) {
        let result = "";
        const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        const charactersLength = characters.length;
        let counter = 0;
        while (counter < length) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
            counter += 1;
        }
        return result;
    }

    // Registration Form..
    $('#signup').on("click", function (e) {
        e.preventDefault();
        let fname = $("#fname").val();
        let lname = $("#lname").val();
        let email = $("#email").val();
        let userid = $("#userid").val();
        let pass = $("#password").val();
        let cpass = $("#confpassword").val();
        let modal = 'register';
        if (fname == '' && lname == '' && email == '' && pass == '' && cpass == '') {
            $(".showAlert").html('Form shouldn\'t blank');
        }
        else if (fname == '') {
            $(".showAlert").html('Please Enter First Name');
        }
        else if (lname == '') {
            $(".showAlert").html('Please Enter Last Name');
        }
        else if (email == '') {
            $(".showAlert").html('Please Enter your Email');
        }
        // code for @ missing in email field.
        else if (!email.includes('@')) {
            $(".showAlert").html('Please include an "@" in the Email.');
        }
        else if (email.endsWith('@')) {
            $(".showAlert").html('Please enter a part following "@".');
        }
        else if (pass == '') {
            $(".showAlert").html('Please Enter Password');
        }
        else if (cpass == '' || (pass != cpass)) {
            $(".showAlert").html('Password and Conform Password should be same.');
        }
        else if (pass.length < 8) {
            $(".showAlert").html('Password Must be 8 characters.');
        }
        else if (cpass.length < 8) {
            $(".showAlert").html('Conform Password Must be 8 characters.');
        }
        else {
            $(".showAlert").html('');
            $.ajax({
                url: "login_handler.php",
                type: "post",
                data: { fname: fname, lname: lname, email: email, userid: userid, pass: pass, modal: modal },
                success: function (data) {
                    if (data == "registered") {
                        window.location.href = '/login/';
                        $(".showAlert").html('Registration Successfull');
                    }
                    else if (data == 'exist'){
                        $(".showAlert").html('Email Addrs. Already Exists.');
                    }
                }
            });
        }

    });

    // Login Form..
    $('#login').on('click', function (login) {
        login.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        let modal = 'login';
        if (password == '' && email == '') {
            $(".showAlert").html('Please Enter Your Email and Password');
        }
        else if (password == '') {
            $(".showAlert").html('Please Enter Your Password');
        }
        else if (email == '') {
            $(".showAlert").html('Please Enter your Email');
        }
        else if (password.length < 8) {
            $(".showAlert").html('Password Must be 8 characters.');
        }
        else {
            $.ajax({
                url: "login_handler.php",
                type: "POST",
                data: { email: email, password: password, modal: modal },
                success: function (data) {
                    if (data == 'success') {
                        window.location.href='/admin';
                    }
                    else{
                       $(".showAlert").html('Password Not Matched..');
                   }
                }
            })
        }
    });




    // Assign random userid to New User
    let id = userid(10);
    document.getElementById('userid').value = id;
});
