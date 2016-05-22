<?php include_once "includes/header.php";?>
<div class="inrHdr" style="background:url(images/bg1.jpg) no-repeat center center;">
<div class="page">

    <h1>CONTACT</h1>
    
    <div class="brdkm">
        <a href="#">home</a> / <span>contact</span>
    </div>

</div>
</div>


<div class="minPge">
<div class="page">

<div class="pgeHdr">
	<h1>contact us</h1>
    
</div>
<form method="POST" action="submitContact" class="contactForm" onsubmit="return submitContact(this)">
<div class="cntRow">
    <div class="whitCC">
		<div class="frmHldr">
<div class="fldBx">
	<input class="inpFld" name="name" type="text" placeholder="YOUR NAME" required>
</div>
<div class="fldBx">
	<input class="inpFld" type="email" name="email" placeholder="YOUR EMAIL" required>
</div>
<div class="fldBx">
	<input class="inpFld" type="text" name="phone" placeholder="PHONE NUMBER" required>
</div>
<div class="fldBx">
	<input class="inpFld" type="text" name="message" placeholder="MESSAGE" required>
</div>
<div class="btnBxC">
	<input class="btnA" type="submit" value="SEND">
</div>        		
        </div>    
    </div>
    <div class="blckCC">
    	<DIV class="txtAA">


<p>
<i class="fa fa-phone"></i> &nbsp; +1 (720) 449-1113 <br /><br />
<i class="fa fa-envelope-o"></i> &nbsp; contact@theplatehub.com
</p>
<br />
<p>
<i class="fa fa-map-o laRg"></i> 1585 Filmore St, Apt - 2  <br />Denver. CO - 80206
</p>
        </DIV>
    </div>
<div class="magic"></div>
</div>
</form>

</div>
</div>
<?php include_once "includes/footer.php";?>