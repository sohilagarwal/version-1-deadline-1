<?php include_once "includes/header.php";?>
<div class="inrHdr" style="background:url(images/bg1.jpg) no-repeat center center;">
<div class="page">

    <h1>LOG IN</h1>
    
    <div class="brdkm">
        <a href="#">home</a> / <span>log in</span>
    </div>

</div>
</div>


<div class="minPge">
<div class="page">

<div class="pgeHdr">
	<h1>LOG IN</h1>
</div>

<div class="logInRw">
	<div class="lginBx">

<form method="POST" action="submitLogin" onsubmit="return submitLogin(this)">
<div class="fldBx">
    <input class="inpFld" type="email" name="email" placeholder="EMAIL ID" required>
    <div class="icOn"><i class="fa fa-envelope-o"></i></div>
</div>
<div class="fldBx">
    <input class="inpFld" type="password" name="password" placeholder="PASSWORD" required>
    <div class="icOn"><i class="fa fa-lock"></i></div>
</div>
<div class="btnBxB">
	<input class="btnA" type="submit" value="LOG IN">
</div>
</form>

    </div>
</div>

</div>
</div>
<?php include_once "includes/footer.php";?>