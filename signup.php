<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Nice Guys</title>
    <meta name="description" content="Nice Guys - An App to Protect Women">
    <meta name="author" content="Will, Samia, Ben">

    <!--Samia and Ben, when you view this, change the href path to your own-->
    <link rel="stylesheet" href="C:\Users\Will_Macomber\Desktop\Project\CSS\style.css">
    <script type="text/javascript" src="C:\Users\Will_Macomber\Desktop\Project\scripts\signup.js"></script>
</head>

<body>
    <div id="nav">
        <div id="links">
            <a href="C:\Users\Will_Macomber\Desktop\Project\HTML\index.html">Home</a>
            <a href="C:\Users\Will_Macomber\Desktop\Project\HTML\about.html">About</a>
            <a href="#">Sign Up</a>
            <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width: auto;">Sign In</a>
        </div><!--end links-->
    </div> <!--end nav div-->

    <div id="header">
        <h3>Nice Guys</h3>
    </div><!--end header-->

    <div id="header2">
        <h2>Sign Up</h2>
    </div><!--end header2-->


    <div id="signup">
            <input type="text" id="firstname" name="firstname" placeholder="First Name" required minlength="3" maxlength="15"><br>
            <input type="text" id="lastname" name="lastname" placeholder="Last Name" required><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="password" id="confirm_pass" name="confirm_pass" placeholder="Confirm Password" required><br>

        


    </div><!--end signup-->
   
    <div id="buttons">
        <input type="submit" id="submit2" name="submit2" onclick="getInputValue()" onclick="test.php">
        <input type="reset" id="reset" name="reset">
    </div><!--end buttons-->

    <p id="warning"></p>



<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">x</span>
    <form class="modal-content animate" action="signup_action.php">
    <div class="container">
        <input type="text" placeholder="Email" name="email" required id="signup_email"><br>
        
        <input type="password" placeholder="Password" name="psw" id="signup_password" required><br><br>

        <input type="checkbox" id="check">Remember Me 
        <p class="blurb">By creating an account, you agree to our <a href="#">Terms of Service</a>.</p> 
         
        <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div><!-- end clearfix div -->
    </div><!--end container div-->
    </form>
</div><!-- end id01 div -->

<script type="text/javascript">
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) 
    {
        modal.style.display = "none";
    }
}
</script>


</body>



</html>