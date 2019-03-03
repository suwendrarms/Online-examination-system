<?php include 'inc/header.php'; ?>
<div class="main">
<h1>Student Registration</h1>
	<!-- <div class="segment" style="margin-right:30px;">
		<img src="img/regi.png"/>
	</div> -->
	<div class="segment">
	<form action="" method="post" onSubmit="formValidation()"  name ='reg'>
		<table style="padding-left: 60px; padding-top: 25px">
		<tr>
           <td>Name:</td>
           <td><input type="text" name="name" id="name" required="" placeholder="Enter Name"></td>
           <p id="p11"></p>
    </tr>
		<tr>
           <td>Username:</td>
           <td><input name="name" type="text" id="username" required="" placeholder="Enter Username"></td>

            <p id="p2"></p>
         </tr>
         <tr>
           <td>Password:</td>
           <td><input type="password" name="password" id="password" required="" placeholder="Enter Password"></td>

           <p id="p8"></p>
         </tr>

         <tr>
           <td> Comform Password:</td>
           <td><input type="password" name="password" id="password" required="" placeholder="Enter Password"></td>

              <p id="p10"></p>
         </tr>


            <tr>
                <td>E-mail:</td>
                <td><input name="email" id="email" type="text" required="" placeholder="Enter Email"></td>
            </tr>
         <tr>
           <td></td>
           <td class="button_class"><input type="submit" id="regSubmit" value="Register">
           </td>
         </tr>
       </table>
	   </form>

        <br/>
        <p style="font-size: 16px; text-align: center">Already Registered? <a style="text-decoration: none" href="index.php">Login</a> Here</p>
        <br/>
        <p style="font-size: 14px; text-align: center;"><span id="state"></span></p>
	</div>

</div>


<script type="text/javascript">


function formValidation() {


    var name = document.getElementById('name');
    var username = document.getElementById('username');
    var password = document. getElementById('password');
    var compass = document.getElementById('compass');



    if (inputAlphabet2(name, "* For your name please use alphabets only *")) {  
    if (lengthDefine1(username, 6, 8)) {
    if (passwordvalid(password, " * Password should Minimum 6 characters  and maximum 10 characters, at least one uppercase letter, one lowercase letter, one number and one character($,@,!,%,*,?,&).")){
    if (Confirm(password, compass)){



    return true;






    }
    }
    }
    }
    return false;
}



function inputAlphabet2(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
}
else {
document.getElementById('p11').innerText = alertMsg; 
inputtext.focus();
return false;
}
}

function lengthDefine1(inputtext, min, max) {
var uInput = inputtext.value;
if (uInput.length >= min && uInput.length <= max) {
return true;
} 
else {
document.getElementById('p2').innerText = "* Please enter between " + min + " and " + max + " characters *";
inputtext.focus();
return false;
}
}






function passwordvalid(inputtext, alertMsg) {
var alphaExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{6,10}/;
if (inputtext.value.match(alphaExp)) {
return true;
 
} 
else {
document.getElementById('p8').innerText = alertMsg;
inputtext.focus();
return false;
}

}

function Confirm(inputtext1, inputtext2) {

        if (inputtext1.value != inputtext2.value) 

        {
           document.getElementById('p10').innerText = "*Passwords do not match.*";
            inputtext1.focus();
            inputtext2.focus();
            return false;
        }
        return true;
}


</script>
<?php include 'inc/footer.php'; ?>