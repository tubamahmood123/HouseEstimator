

<html lang="en">
<head>



  <title>Property Portal</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <script type="text/javascript" src="add.js"></script> 

  <link rel="stylesheet" href="add.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>  
 <body>

   
  

<div id="content">
<div class="main clr" id="" >
    <div class="content-div">
<div class=" bmrgin bgw ros add-propertyPage">
<form class="add_property add_property_form singleForm clr" method="post"  action="modelimplement" enctype="multipart/form-data"  autocomplete="off"  style="color:#333;
    width: 100%;" action="{{url('property/add')}} ">
     <!--   {{csrf_field()}} -->
    <h1 class="h mheading">Fill up the following :</h1>
     @csrf
    <!-- Property type & location -->
    <div class="subhead font_s ros subhead1">Property Type and Location</div>
    
 <!-- after selection of home select it's subtype  -->

  <!---
    <div class="divrow add_property_cities">
    <label for="City" class="label l font_s">
    City: 
    <span class="asterik"></span>
    </label>


    <span class="city_sel_box" class style> 
     <div class ="container1">
    <select name="property_city"  list="loc" class="Custom-select" id="City"   onchange="countryChange(this);">
    <option value="empty">Select City</option>
    <option value="Islamabad">Islamabad</option>
     <option value="Karachi">Karachi</option>
      <option value="Lahore">Lahore</option>
       <option value="Multan">Multan</option>
        <option value="Faisalbad">Faisalbad</option>
        <option value="Sukkhar">Sukkhar</option>
            <option value="Hyderabad">Hyderabad</option>
                <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Faisalbad">Faisalbad</option>
      
   </select>
</div>
</div> -->



<div class="divrow">
    <label for="location" class="label l font_s">
    Location: 
    <span class="asterik"></span>
    </label>
    <select name="property_loc" class="Custom-select" id="location" onmousedown="if(this.options.length>8){this.size=8;}" onchange='this.size=0;' onblur="this.size=0;" style="position:absolute;">
   <option value Selected>Select Location:
    </option>
    <option value="Bahria-Town">Bahria Town</option>
    <option value="Baldia-Town">Baldia Town</option>
    <option value="Baloch-Colony">Baloch Colony</option>
    <option value="Bin-Qasim-Town">Bin Qasim Town</option>
    <option value="Buffer-Zone">Buffer Zone</option> 
    <option value="Cattle-colony">Cattle colony</option>
    
    <option value="Clifton">Clifton</option>
    <option value="Delhi-Colony">Delhi Colony</option>
    <option value="DHA-(Defence)">DHA(Defence)</option>
    <option value="DHA-Phase-1">DHA Phase 1</option> 
    <option value="DHA-Phase-2">DHA Phase 2</option>
    <option value="DHA-Phase-4">DHA Phase 4</option>
    <option value="DHA-Phase-5">DHA Phase 5</option>
    <option value="DHA-Phase-6">DHA Phase 6</option>
    <option value="DHA-Phase-7">DHA Phase 7</option> 
    <option value="DHA-Phase-8">DHA Phase 8</option>
    <option value="Federal-B-Area">Federal B. Area</option>
    <option value="Gulistan-e-Faisal">Gulistan-e-Faisal</option>
    <option value="Gulistan-e-Jauhar">Gulistan-e-Jauhar</option>
    <option value="Gulistan-e-Jauhar-12">Gulistan-e-Jauhar 12</option>
    <option value="Gulistan-e-Jauhar-15">Gulistan-e-Jauhar 15</option> 
    <option value="Gulshan-e-Iqbal">Gulshan-e-Iqbal</option>
    <option value="Gulshan-e-Iqbal-Block-1">Gulshan-e-Iqbal Block 1</option>
    <option value="Gulshan-e-Iqbal-Block-2">Gulshan-e-Iqbal Block 2</option>
    <option value="Gulshan-e-Iqbal-Block-3">Gulshan-e-Iqbal Block 3</option>
    <option value="Gulshan-e-Iqbal-Block-4">Gulshan-e-Iqbal Block 4</option>
    <option value="Gulshan-e-Iqbal-Block-5">Gulshan-e-Iqbal Block 5</option>
    <option value="Gulshan-e-Iqbal-Block-6">Gulshan-e-Iqbal Block 6</option>
    <option value="Gulshan-e-Iqbal-Block-7">Gulshan-e-Iqbal Block 7</option>
    <option value="Gulshan-e-Iqbal-Block-13">Gulshan-e-Iqbal Block 13</option>
    <option value="Gulshan-e-Iqbal-Block-13D">Gulshan-e-Iqbal Block 13D</option>
    <option value="Gulshan-e-Iqbal-Block-17">Gulshan-e-Iqbal Block 17</option> 
    <option value="Gulshan-e-Hadeed">Gulshan-e-Hadeed</option>
    <option value="Gulshan-e-Jamal">Gulshan-e-Jamal</option>
    <option value="Gulshan-e-Maymar">Gulshan-e-Maymar</option>
    <option value="Jamshed-Quarter">Jamshed Quarter</option>
    <option value="KDA">KDA</option>
    <option value="Korangi">Korangi</option>
    <option value="Landhi">Landhi</option>
    <option value="Liaqatabad">Liaqatabad</option>
    <option value="M.A.Jinnah-Road">M.A. Jinnah Road</option>
     <option value="Malir-Cantonment">Malir Cantonment</option>
    <option value="Malir-City">Malir City</option>
    <option value="Model-Colony">Model Colony</option>


    <option value="Nazimabad">Nazimabad</option>
    
    <option value="North-Nazimabad">North Nazimabad</option>
    <option value="North-Nazimabad-block-pqst">North Nazimabad block pqst</option>
    <option value="North-Karachi">North Karachi</option>
    <option value="Orangi-Town">Orangi Town</option>
    <option value="PECHS">PECHS</option>

    <option value="Scheme-33">Scheme 33</option>
    
    <option value="Shah-Faisal-Colony">Shah Faisal Colony</option>
    <option value="Shah-Faisal-Town">Shah Faisal Town</option>
    <option value="Shah-Latif-Town">Shah Latif Town</option>
    <option value="Shahra-e-Faisal">Shahra-e-Faisal</option>
    <option value="Sindhi-Muslim-Society">Sindhi Muslim Society</option>
    <option value="Surjani-Town">Surjani Town</option>
    </select>
    
       
</div>
<!--
    
<div class="divrow">
    <label class="label l font_s">
    Price: 
    <span class="asterik"></span>
    </label>
    <input type="number" name="property_price" id="title" value="" style="width:228px;" class="rfield l">
</div>
<div class="divrow">
			<label class="label l font_s">&nbsp;</label>
			<span class="l price_text txtfont ltr">Price must contain numbers only</span>
        </div>-->
        <div class="divrow">
    <label class="label l font_s">
    Land Area: 
    <span class="asterik"></span>
    </label>
    <input type="number" name="property_area" id="title" value="" style="width:228px;" class="rfield l">
</div>
<div class="divrow">
    <label class="label l font_s">
    Unit: 
    <span class="asterik"></span>
    </label>
    <div class ="container1">
    <select name="property_unit"  class="Custom-select" id="" >
    <option value Selected>Select unit:
    </option>
    <option value="Square-feet">Square Feet</option>
    <option value="Marla">Marla</option> 
    <option value="Square-yard">Square Yard</option>
    <option value="Square-Meters">Square Meters</option>
    <option value="Kanal">Kanal</option>
    </select>
</div>
</div>

<div class="divrow OnHomeSelection" style="" >
<div class="subhead font_s ros subhead1">Amenities</div>
    <label class="label l font_s">
    Bedrooms: 
    <span class="asterik"></span>
    </label>
    <div class ="container1">
    <select name="home_bed" class="Custom-select" id="" >
    <option value Selected>Please Select:
    </option>
    <option value="1">1</option>
    <option value="2">2</option> 
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    </select>
</div>
</div>
<div class="divrow OnHomeSelection" style="" >
    <label class="label l font_s">
    Bathrooms: 
    <span class="asterik"></span>
    </label>
    <div class ="container1">
    <select name="home_bath" class="Custom-select" id="" >
    <option value Selected>Please Select:
    </option>
    <option value="1">1</option>
    <option value="2">2</option> 
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    </select>
</div>
</div>
<div class="divrow OnHomeSelection" style="" >
    <label class="label l font_s">
    Kitchens: 
    <span class=""></span>
    </label>
    <div class ="container1">
       
        <select name="home_kitch" class="Custom-select" id="">

 <option value Selected >Please Select:</option>
 <option value="0">0</option>
 <option value="1">1</option>
    <option value="2">2</option> 
    <option value="3">3</option>
    <option value="4">4</option>
     </select>


</div>
</div>
<div class="divrow OnHomeSelection" style="" >
    <label class="label l font_s">
    Construction Year: 
    <span class=""></span>
    </label>
    
    <input type="text" name="home_cont_Year" id="date" style="width:228px;" class="rfield l">

</div>

<div class="divrow OnHomeSelection" style="" >
    <label class="label l font_s">
    No Of Stories: 
    <span class=""></span>
    </label>
    



<div class ="container1">
       
        <select name="home_noofstories"  class="Custom-select" id="">

 <option value Selected >Please Select:</option>
 
 <option value="1">1</option>
    <option value="2">2</option> 
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>

</select>


</div>


</div>


<div class="divrow OnHomeSelection" style="" >
    <label class="label l font_s">
    Parking Spots: 
    <span class=""></span>
    </label>
        <div class ="container1">
       
        <select name="home_parkingspot"  class="Custom-select" id="">

 <option value Selected >Please Select:</option>
 <option value="0">0</option>
 <option value="1">1</option>
    <option value="2">2</option> 
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>

</select>


</div>
    
   

</div>

<div class="divrow OnHomeSelection" style="" >

    <label class="label l font_s">
    No Of Gardens: 
    <span class="asterik"></span>
    </label>
    <div class ="container1">
    <select name="home_garden" class="Custom-select" id="" >
    <option value Selected>Please Select:
    </option>
    <option value="0">0</option>
    <option value="1">1</option> 
    <option value="2">2</option>
    
    </select>
</div>

<!---
<div class="divrow OnHomeSelection" style="" >
    <label class="label l font_s">
    Renovation Year: 
    <span class=""></span>
    </label>
  
    <input type="text" name="home_reno_Year" id="date" value="" style="width:228px;" class="rfield l">

</div> ---->
<div class="divrow OnHomeSelection" style="">
    <label class="label l font_s">
    Servant Quaters: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="home_quater" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="home_quater" value="0">
  <span class="checkmark"></span>
</label>
</div>

<div class="divrow OnHomeSelection" style="">
    <label class="label l font_s">
    Swimming Pool: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="home_pool" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="home_pool" value="0">
  <span class="checkmark"></span>
</label>
</div>

<div class="divrow OnHomeSelection" style="">
    <label class="label l font_s">
    Powder Room: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="powder_room" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="powder_room" value="0">
  <span class="checkmark"></span>
</label>
</div>




<div class="divrow OnHomeSelection" style="">
    <label class="label l font_s">
    Society Security: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="society_security" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="society_security" value="0">
  <span class="checkmark"></span>
</label>
</div>


<div class="divrow OnHomeSelection" style="">
    <label class="label l font_s">
    Lane Society: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="lane_society" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="lane_society" value="0">
  <span class="checkmark"></span>
</label>
</div>



<div class="divrow OnHomeSelection" style="">
    <label class="label l font_s">
    Furnished: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="furnished" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="furnished" value="0">
  <span class="checkmark"></span>
</label>
</div>



<div class="divrow OnHomeSelection" style="">
    <label class="label l font_s">
    Power Backup: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="home_power" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="home_power" value="0">
  <span class="checkmark"></span>
</label>
</div>
<div class="subhead font_s ros subhead1">NearBy Locations</div>
<div class="divrow">
    <label class="label l font_s">
    Gated Society: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="gated_society" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="gated_society" value="0">
  <span class="checkmark"></span>
</label>
</div>


<div class="divrow">
    <label class="label l font_s">
    Park: 
    <span class="asterik"></span>
    </label>
    <label class="container1 ">Yes
  <input type="radio"  name="park" value="1">
  <span class="checkmark"></span>
</label>
<label class="container1 ">No
  <input type="radio" name="park"  value="0">
  <span class="checkmark"></span>
</label>
</div>



    
  
    <input type="submit"  class="clr submit_button l bgdgry ros smargin" value="Submit Property"> 
   
    
	
 
    </form>

</div>
</div>
</div>
</div>
</body>
</html>