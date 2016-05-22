<?php include_once "includes/header.php";?>
<div class="inrHdr" style="background:url(images/bg1.jpg) no-repeat center center;">
<div class="page">

    <h1>NEW REGISTRATION</h1>
    
    <div class="brdkm">
        <a href="#">home</a> / <span>sign up</span>
    </div>

</div>
</div>


<div class="minPge">
<div class="page">

<div class="pgeHdr">
	<h1>SIGN Up</h1>
    <p>It's easy and FREE. Only a few short steps and you'll be register here as a user.<br />
Already a member? <a href="#">Sign in here</a></p>
</div>
<form method="post" action="signingup" class="signupForm" enctype="multipart/form-data" onsubmit="return signingup(this)">
<div class="rgstrRow">
	<div class="rgClmA">
    	<div class="frmBx">
<div class="fldBx">
	<input class="inpFld" name="name" type="text" placeholder="NAME" required/>
</div>
<div class="fldBx">
	<div class="imgUp">
    	<img src="images/avtr1.jpg" />
    </div>
    <div class="upBtnBx">
    	<span class="whtBtnA" onclick="clckFile()">SELECT IMAGE</span>
        <input type="file" name="image" class="ptFile" style="opacity:0; width:1px" required/>
    </div>
    <div class="magic"></div>
</div>
<div class="fldBx">
	<input class="inpFld" name="location" type="text" placeholder="LOCATION" required/>
</div>
<div class="fldBx">
	<input class="inpFld" type="date" name="dob" placeholder="DATE OF BIRTH" required/>
    <div class="icOn">
    	<i class="fa fa-calendar"></i>
    </div>
</div>
<div class="fldBx">
	<input class="inpFld" type="email" name="email" placeholder="YOUR EMAIL" required/>
</div>
<div class="fldBx">
	<input class="inpFld" type="text" name="phone" placeholder="YOUR PHONE NUMBER" required/>
</div>
<div class="fldBx">
	<select class="inpFld" name="income" required>
    	<option>SELECT INCOME RANGE</option>
        <option value="$0 - $5000">$0 - $5,000</option>
        <option value="$5000 - $20000">$5,000 - $20,000</option>
        <option value="$20000 - $50000">$20,000 - $50,000</option>
    </select>
</div>
<div class="fldBx">
	<select class="inpFld" name="education" required>
    	<option>SELECT EDUCATIONAL LEVEL</option>
        <option value="Matriculation/Secondary">Matriculation/Secondary</option>
        <option value="Higher Secondary">Higher Secondary</option>
        <option value="Graduate">Graduate</option>
    </select>
</div>
<div class="fldBx">
	<select class="inpFld" name="ethnicity" required>
    	<option>SELECT ETHNICITY</option>
        <option value="1-10">1-10</option>
        <option value="10-100">10-100</option>
        <option value="More than 100">More than 100</option>
    </select>
</div>
<div class="fldBx">
	<input class="inpFld" type="password" name="password" placeholder="YOUR PASSWORD" required/>
</div>
<div class="btnBxA">
	<input class="btnA" type="submit" value="CREATE ACCOUNT" />
</div>
        </div>
    </div>
    <div class="rgClmB">
    	<div class="imgHldrA">
        	<img src="images/img1.png" />
        </div>
    </div>
<div class="magic"></div>
</div>
</form>

</div>
</div>
<?php include_once "includes/footer.php";?>