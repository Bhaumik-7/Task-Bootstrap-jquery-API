$(document).ready(function(){
    $("#login").click(function(){
    var email = $("#email").val();
    var password = $("#password").val();
    // Checking for blank fields.
    if( email =='' || password ==''){
        $('input[type="text"],input[type="password"]');
        $('input[type="text"],input[type="password"]');
        alert("Please fill all fields...!!!!!!");
    }else {
        $.post("login.php",{ email1: email, password1:password},
        function(data) {
        if(data=='Invalid Email.......') {
            $('input[type="text"]');
            $('input[type="password"]');
        alert(data);
        }else if(data=='Email or Password is wrong...!!!!'){
            $('input[type="text"],input[type="password"]');
            alert(data);
        } else if(data=='Successfully Logged in...'){
            $("form")[0].reset();
            $('input[type="text"],input[type="password"]');
        alert(data);
    } else{
        alert(data);
    }
    });
    }
    });
    });