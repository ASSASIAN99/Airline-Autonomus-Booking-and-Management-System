<html>
<head>
</head>
<body>
<?php include "planeheader.php"; ?>
<link rel="stylesheet" href="bootstrap-theme.css">
<FIELDSET>
<font color="white">
<form class="form-horizontal" action="sqll.php" method="POST">
<div class="container">
<h1>
<font size="7" color="grey">Search flights</font></h1>
 <div class="col-lg-1"></div>
<div class="col-lg-2">
<input type="radio" name="ways" value="one way">One way
</div>
<div class="col-lg-2">
<input type="radio" name="ways" value="Round trip">Round trip
</div>
<div class="col-lg-7">
<input type="radio" name="ways" value="Multi city">Multi-city<br>
</div>



<br><br>
 <div class="col-lg-5">
      <ul class="form form-nav">
      <b><font color="WHITE" size="4">From</font></b>
      </ul>
      </div>
      <div class="col-lg-2">
      </div>
       <div class="col-lg-5">
      <ul class="form form-nav">
	<b><font color="white"size="4">To</font></b>
      </ul>
      </div>


<font color="blue">
 <div class="col-lg-5">
      <ul class="form form-nav">
      <select class="form-control" name=DEPTCITY>
      <option value=dept_city	>ANY CITY OR AIRPORT</option>
<option value=	Jammu >	Jammu	</option>
<option value=	Mumbai	>	Mumbai	</option>
<option value=	Shimla	>	Shimla	</option>
<option value=	Agra	>	Agra	</option>
<option value=	Jaipur	>	Jaipur	</option>
<option value=	Chennnai	>	Chennnai	</option>
<option value=	Kolhapur	>	Kolhapur	</option>
<option value=	Goa	>	Goa	</option>
<option value=	Puna	>	Puna	</option>
<option value=	Zirakpur	>	Zirakpur	</option>
<option value=	Chandigarh	>	Chandigarh	</option>
<option value=	Delhi	>	Delhi	</option>
</SELECT>
      </ul>
      </div>
       <div align="center" class="col-lg-2">
      <ul class="form form-nav">
      <font color="white" size="6">⇋</font>
      </ul>
      </div>
      <div class="col-lg-5">
      <ul class="form form-nav">
        <select class="form-control" name=ARRVCITY>
      <option value=Different_Cities>ANY CITY OR AIRPORT</option>  
<option value=	Bapatla	>	Bapatla	</option>
<option value=	Bellampalle	>	Bellampalle	</option>
<option value=	Bethamcherla	>	Bethamcherla	</option>
<option value=	Bhadracalam	>	Bhadracalam	</option>
<option value=	Bhainsa	>	Bhainsa	</option>
<option value=	Port Blair	>	Port Blair	</option>
<option value=	Adilabad	>	Adilabad	</option>
<option value=	Adoni	>	Adoni	</option>
<option value=	Amadalavalasa	>	Amadalavalasa	</option>
<option value=	Amalapuram	>	Amalapuram	</option>
<option value=	Anakapalle>	Anakapalle	</option>
<option value=	Anantapur>	Anantapur	</option>
<option value=	Badepalle	>	Badepalle	</option>
<option value=	Banganapalle	>	Banganapalle	</option>
</select>
      </ul>
      </div>
</font>
<div class="col-lg-12">
</div>
<div class="col-lg-4">
      <ul class="form form-nav">
      <font color="WHITE">Depart On</font>
      </ul>
      </div>
<div class="col-lg-4">
      <ul class="form form-nav">
      <font color="WHITE">Class of travel
      </ul>
      </div>
<div class="col-lg-4">
      <ul class="form form-nav">
      Preferred Airline
      </ul>
      </div></font>
      
      <font color="WHITE">
<div class="col-lg-4">
      <ul class="form form-nav">
   <input id="" class="form-control" type="date" name="date" placeholder="Pick a date" required/>
     </ul>
      </div>
            
<div class="col-lg-4">
      <ul class="form form-nav">
      <select class="form-control" name=class>
      <option value=""> Class </option>
      <option value=ECONOMIC> Economy </option>
      <option value=BUISNESS> Buisness </option>
      <option value=PREMIUM> Premium Ecomomy</option>
      </select>
      </ul>
      </div>
      

<div class="col-lg-4">
      <ul class="form form-nav">
      <select class="form-control" name="class">
      <option value=	"Select"	>Airline Name</option>
     <option value=	"SPICE JET"	>	SPICE JET	</option>
<option value=	"GO AIR"	>	GO AIR	</option>
<option value=	"INDIGO"	>	INDIGO	</option>
<option value=	"INDIAN AIRLINES"	>	INDIAN AIRLINES	</option>
<option value=	"VIRGIN"	>	VIRGIN	</option>
<option value=	"JET AIRWAYS"	>	JET AIRWAYS	</option>
<option value=	"AIR INDIA"	>	AIR INDIA	</option>
<option value=	"AIR ASIA"	>	AIR ASIA	</option>
<option value=	"KINGFISHER"	>	KINGFISHER	</option>
<option value=	"AIR CARNIVAL"	>	AIR CARNIVAL	</option>
<option value=	"AIR COASTA"	>	AIR COASTA	</option>
<option value=	"AIR HIMALAYAS"	>	AIR HIMALAYAS	</option>
<option value=	"AIR INDIA EXPRESS"	>	AIR INDIA EXPRESS	</option>
<option value=	"AIR INDIA REGIONAL"	>	AIR INDIA REGIONAL	</option>
<option value=	"AIR ODISHA"	>	AIR ODISHA	</option>
<option value=	""Chandigarh" AIRLINK"	>	Chandigarh AIRLINK	</option>
<option value=	"CLUB ONE AIR"	>	CLUB ONE AIR	</option>
<option value=	"PEMANACLE"	>	PEMANACLE	</option>
<option value=	"QUICK JET AIRLINES"	>	QUICK JET AIRLINES	</option>
<option value=	"TAJ AIR"	>	TAJ AIR	</option>
<option value=	"TRUE JET"	>	TRUE JET	</option>
<option value=	"VENTURE"	>	VENTURE	</option>
<option value=	"VISTARA"	>	VISTARA	</option>
<option value=	"ARMY DECOTA"	>	ARMY DECOTA	</option>
      </select>
      </ul>
      </div></font>

<div class="col-lg-12">
</div>
<font color="orange">
 <div class="col-lg-4">
      <ul class="form form-nav">
      Adults
      </ul>
      </div>
      
       <div class="col-lg-4">
      <ul class="form form-nav">
     Children's
      </ul>
      </div>
      
      <div class="col-lg-4">
      <ul class="form form-nav">
      Infants
      </ul>
     </div>
      </font>
      
      <font color="blue">
      <div class="col-lg-4">
      <ul class="form form-nav">
        <select class="form-control" name="class">
      <option value="ECONOMIC">0000</option>
      <option value="BUISNESS">01</option>
      <option value="PREMIUM">02</option>
      <option value="PREMIUM">03</option>
      <option value="PREMIUM">04</option>
      <option value="PREMIUM">05</option>
      <option value="PREMIUM">06</option>
      <option value="PREMIUM">07</option>
      <option value="PREMIUM">08</option>
      <option value="PREMIUM">09</option>
      
      </select>
      </ul>
      </div>
      
       <div class="col-lg-4">
      <ul class="form form-nav">
   <select class="form-control" name="class">
    <option value="ECONOMIC">0000</option>
      <option value="BUISNESS">01</option>
      <option value="PREMIUM">02</option>
      <option value="PREMIUM">03</option>
      <option value="PREMIUM">04</option>
      <option value="PREMIUM">05</option>
      <option value="PREMIUM">06</option>
      <option value="PREMIUM">07</option>
      <option value="PREMIUM">08</option>
      </select>
      </ul>
      </div>
      <div class="col-lg-4">
      <ul class="form form-nav">
        <select class="form-control" name="class">
      <option value="ECONOMIC">0000</option>
      <option value="BUISNESS">01</option>
      </select>
      </ul>
      </div>
    
 
<div align="right" class="form-group col-lg-12">
     <span class="input-group_btn">
				<input type="submit" name="submit" class="btn btn-primary newsletter-box_btn" value="SERACH FLIGHTS">
			</span>

</div>


      


</select>
</div> 
</form>
</FIELDSET>
</body>
</html>