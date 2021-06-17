<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
   /* Template Name: Group Fitness Class */
   get_header(); 
   
   ?>
<style>

   #contact {
   background: #F9F9F9;
   padding: 25px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   }
   .rating-h{
   display: block !important;
   font-size: 20px !important;
   font-weight: 300 !important;
   color: #757575 !important;
   padding: 0 !important;
   text-align: center !important;
   }
   #contact h3 {
   display: block;
   font-size: 30px;
   font-weight: 300;
   margin-bottom: 10px;
   }
   #contact h4 {
   margin: 5px 0 15px;
   display: block;
   font-size: 13px;
   font-weight: 400;
   }
   fieldset {
   border: medium none !important;
   margin: 0 0 10px;
   min-width: 100%;
   padding: 0;
   width: 100%;
   }
   #contact input[type="text"],
   #contact input[type="email"],
   #contact input[type="tel"],
   #contact input[type="url"],
    #contact input[type="date"],
   #contact textarea {
   width: 100%;
   border: 1px solid #ccc;
   background: #FFF;
   margin: 0 0 5px;
   padding: 10px;
   }
   #contact input[type="text"]:hover,
   #contact input[type="email"]:hover,
   #contact input[type="tel"]:hover,
   #contact input[type="url"]:hover,
   #contact textarea:hover {
   -webkit-transition: border-color 0.3s ease-in-out;
   -moz-transition: border-color 0.3s ease-in-out;
   transition: border-color 0.3s ease-in-out;
   border: 1px solid #aaa;
   }
   #contact textarea {
   height: 100px;
   max-width: 100%;
   resize: none;
   }
   
   .copyright {
   text-align: center;
   }
   #contact input:focus,
   #contact textarea:focus {
   outline: 0;
   border: 1px solid #aaa;
   }
   label{
   font-weight:normal !important;
   display: initial !important;
   }
   fieldset {
   min-width: 0;
   padding-bottom: 10px !important;
   margin: 0;
   border: 0;
   }
   .required:after {
   content:" *";
   color: red;
   }
   .swal-modal {
   width: 620px;
   opacity: 0;
   pointer-events: none;
   background-color: #fff;
   text-align: center;
   border-radius: 5px;
   position: static;
   margin: 20px auto;
   display: inline-block;
   vertical-align: middle;
   -webkit-transform: scale(1);
   transform: scale(1);
   -webkit-transform-origin: 50% 50%;
   transform-origin: 50% 50%;
   z-index: 10001;
   transition: opacity .2s,-webkit-transform .3s;
   transition: transform .3s,opacity .2s;
   transition: transform .3s,opacity .2s,-webkit-transform .3s;
   }
   #checktext{
   position: relative;
   right: 30px;
   }
   @media only screen and (max-width: 600px) {
   #checktext{
   position: relative;
   right: 0px;
   }
 
   .swal-modal {
   width: 100%;
   opacity: 0;
   pointer-events: none;
   background-color: #fff;
   text-align: center;
   border-radius: 5px;
   position: static;
   margin: 20px auto;
   display: inline-block;
   vertical-align: middle;
   -webkit-transform: scale(1);
   transform: scale(1);
   -webkit-transform-origin: 50% 50%;
   transform-origin: 50% 50%;
   z-index: 10001;
   transition: opacity .2s,-webkit-transform .3s;
   transition: transform .3s,opacity .2s;
   transition: transform .3s,opacity .2s,-webkit-transform .3s;
   }
   }
   @media only screen and (min-width: 600px) {
   #checktext{
   position: relative;
   right: 0px;
   }
   .swal-modal {
   width:100%;
   opacity: 0;
   pointer-events: none;
   background-color: #fff;
   text-align: center;
   border-radius: 5px;
   position: static;
   margin: 20px auto;
   display: inline-block;
   vertical-align: middle;
   -webkit-transform: scale(1);
   transform: scale(1);
   -webkit-transform-origin: 50% 50%;
   transform-origin: 50% 50%;
   z-index: 10001;
   transition: opacity .2s,-webkit-transform .3s;
   transition: transform .3s,opacity .2s;
   transition: transform .3s,opacity .2s,-webkit-transform .3s;
   }
  
   }
   @media only screen and (min-width: 768px) {
   #checktext{
   position: relative;
   right: 0px;
   }
   .swal-modal {
   width:100%;
   opacity: 0;
   pointer-events: none;
   background-color: #fff;
   text-align: center;
   border-radius: 5px;
   position: static;
   margin: 20px auto;
   display: inline-block;
   vertical-align: middle;
   -webkit-transform: scale(1);
   transform: scale(1);
   -webkit-transform-origin: 50% 50%;
   transform-origin: 50% 50%;
   z-index: 10001;
   transition: opacity .2s,-webkit-transform .3s;
   transition: transform .3s,opacity .2s;
   transition: transform .3s,opacity .2s,-webkit-transform .3s;
   }

   }
   @media only screen and (min-width: 992px) {
   #checktext{
   position: relative;
   right: 30px;
   }
   .swal-modal {
   width: 620px;
   opacity: 0;
   pointer-events: none;
   background-color: #fff;
   text-align: center;
   border-radius: 5px;
   position: static;
   margin: 20px auto;
   display: inline-block;
   vertical-align: middle;
   -webkit-transform: scale(1);
   transform: scale(1);
   -webkit-transform-origin: 50% 50%;
   transform-origin: 50% 50%;
   z-index: 10001;
   transition: opacity .2s,-webkit-transform .3s;
   transition: transform .3s,opacity .2s;
   transition: transform .3s,opacity .2s,-webkit-transform .3s;
   }
  
   }
   img {
   border: 0;
   width: 100%;
   height: auto;
   }
   .swal-text {
   font-size: 16px;
   position: relative;
   float: none;
   line-height: normal;
   vertical-align: top;
   text-align: left;
   display: inline-block;
   margin: 0;
   padding: 0 10px;
   font-weight: 400;
   color: rgba(0,0,0,.64);
   max-width: calc(100% - 20px);
   overflow-wrap: break-word;
   box-sizing: border-box;
   display: none;
   }
   .swal-title {
   color: #000080;
   font-weight: 600;
   text-transform: none;
   position: relative;
   display: block;
   padding: 60px 16px;
   font-size: 27px;
   line-height: normal;
   text-align: center;
   margin-bottom: 25px !important;
   }
   .swal-icon {
   width: 80px;
   height: 80px;
   border-width: 4px;
   border-style: solid;
   border-radius: 50%;
   padding: 0;
   position: relative;
   box-sizing: content-box;
   margin: 20px auto;
   display: none;
   }
   .b-btn-p{
           margin: 0 auto;
    display: table;
    margin-top: 30px;
   }
   input[type="checkbox"]{
  width: 25px; 
  height: 25px; 
      position: relative;
    top: 8%;
  
}
</style>






<body>

<div class="container">
   <h3 class="text-center mt-5 "><b>Group Fitness Class</b></h3>
   <h3 class="text-center mb-5"><b>Informed Consent Form</b></h3>
   <div class="container">
      
      <div class="col-md-12">
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <?php
            if(isset($_GET['msg'])){
                ?>
         <script>
            sweetalert();
               function sweetalert(){
               swal("Thank You.", "success");
            }
         </script>
         <?php }
            ?>
         <form id="contact" action="" method="post" onsubmit="return validate_form(this);" class="mb-5">
            <div class="row">
               <div class="col-md-6">
                  <fieldset>
                     <label class="required" for="name">First Name</label>
                     <input name="fname" id="fname" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" type="text" tabindex="1" required autofocus >
                  </fieldset>
               </div>
               <div class="col-md-6">
                  <fieldset>
                     <label class="required" for="lname">Last Name</label>
                     <input name="lname" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" type="text" tabindex="1" required autofocus>
                  </fieldset>
               </div>
               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="address">Street Address</label>
                     <textarea rows="4" cols="50" name="address" tabindex="1" required autofocus>
</textarea>

                  </fieldset>
               </div>
               
               <div class="col-md-4">
                  <fieldset>
                     <label class="required" for="city">City</label>
                     <input  name="city"  type="text" tabindex="2" required>
                  </fieldset>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="required" for="country">State</label>
                     <select name="state" id="state" class="form-control" required autofocus>
                         <option value="">Select State</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <fieldset>
                     <label for="zip">Zip</label>
                     <input  name="zip"  type="text" tabindex="2">
                  </fieldset>
               </div>
               <div class="col-md-6">
                  <fieldset>
                     <label  class="required"  for="homep">Home Phone</label>
                     <input  name="homep" pattern="[789][0-9]{9}"  type="text" tabindex="2" required>
                  </fieldset>
               </div>
               <div class="col-md-6">
                  <fieldset>
                     <label  class="required"  for="cellp">Cell Phone</label>
                     <input  name="cellp"  pattern="[789][0-9]{9}" type="text" tabindex="2" required>
                  </fieldset>
               </div>
               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="email">Email</label>
                     <input  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" tabindex="2" required>
                  </fieldset>
               </div>
               <div class="col-md-6">
                  <fieldset>
                     <label  class="required"  for="ecname">Emergency Contact Name</label>
                     <input  name="ecname" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$"  type="text" tabindex="2" required>
                  </fieldset>
               </div>
               <div class="col-md-6">
                  <fieldset>
                     <label  class="required"  for="phone">Phone</label>
                     <input  name="phone" pattern="[789][0-9]{9}"  type="text" tabindex="2" required>
                  </fieldset>
               </div>
            </div>
            <div class="row">
               <div class="col-md-1 col-xs-1 col-sm-1"><input type="checkbox" name="terms" id="terms"></div>
               
               <div class="col-md-10 col-xs-10 col-sm-10" id="checktext">
                   <h4><b>INFORMED CONSENT FOR EXERCISE PARTICIPATION</b></h4>
                   <label for="checkbox">
                   
                    I desire to engage voluntarily in an exercise program given by FIT & FAB. I understand that the activities
may be strenuous, and may require me to do body movement that I am not familiar with in order to improve
overall fitness. I understand that I am responsible for monitoring my own condition throughout my workouts.
Should any unusual symptoms occur, I will cease my participation.

   <p>In signing this consent form, I affirm that I have read, accept and understand this form in its entirety and that I
      understand the nature of exercise. I know that there may be risks associated with fitness classes and willingly
      accept those possibilities. I know that it is my responsibility to ensure my own safety. I take full responsibility for
      my own health and safety in participating in the fitness class and to the extent I deem advisable, will consult a
      physician before participating in any of the activities. 
   </p>
   <h4><b>AGREEMENT AND WAIVER / RELEASE OF LIABILITY</b></h4>
   <p>In consideration for being allowed to participate in this activity, which I do freely and voluntarily for my own
      personal benefit, I hereby take action for myself, my executors, administrators, heirs, next of kin, successors and
      assigns to:
   </p>
   <ul>
      <li>Waive, release and discharge from any and all liability to FIT & FAB, and any appointed instructor, or
         other students for my death, disability, personal injury, property damage, or property theft, or actions of
         any kind which may hereafter accrue to me in activities related to my training.
      </li>
      <li>Indemnify and hold harmless FIT & FAB, and any of their instructors and students, from any and
         all liabilities or claims made by other individuals or entities as a result of or relating to my participation in
         this activity.
      </li>
   </ul>
   <p>Therefore, intending to be bound and as a condition of being allowed to participate in the fitness class,
have freely signed this waiver on the date indicated.</p>
</label><br>
               </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                  <fieldset>
                     <label  class="required"  for="date">Date</label>
                     <input  name="date" type="date" tabindex="2" required>
                  </fieldset>
               </div>
               <div class="col-md-6">
                  <fieldset>
                     <label  for="parentn"> Parent/Guardian Name</label>
                     <input  name="parentn" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$"  type="text" tabindex="2" >
                  </fieldset>
               </div>
            </div>
            
            <fieldset>
               <button name="submit" type="submit" class="b-btn-p btn-secondary"  id="submit" data-submit="...Sending" >Submit</button>
            </fieldset>
         </form>
      </div>
      
   </div>
  
</div>
</body>
<script>
// $( document ).ready(function() {
//     event.preventDefault();
//     $("#submit").on("change", "input:checkbox", function(){
//         alert("call");
//         $("#submit").submit();
//     });
 

// });

 function validate_form(thisform) {
      //alert("call");
 var checkBox = document.getElementById("terms");
  //alert(checkBox);
    if (checkBox.checked == true){
                  alert("Thank you for contacting us.");

          //      document.getElementById("submit").disabled = false;
return true;
    }
      else  {
          alert("Please read and agree to the Terms and Conditions.");
     //     document.getElementById("submit").disabled = true;
return false;
      }
}
//  function disableSubmit() {
//   document.getElementById("submit").disabled = false;
//  }

//   function activateButton() {
      
// alert("call");
//       if(element.checked) {
//         document.getElementById("submit").disabled = false;
//       }
//       else  {
//         document.getElementById("submit").disabled = true;
//       }

//   }
</script>
<?php
$to = "info@fitandfab.in";
$subject = "Contact Form";


$message = "
<html>
<head>
<title></title>
</head>
<body>



<table>
<tr>
<th style='text-align:justify'>First Name : </th>
<th style='text-align:justify'>".$_POST['fname']."</th>
</tr>

<tr>
<th style='text-align:justify'>Last Name : </th>
<th style='text-align:justify'>".$_POST['lname']."</th>
</tr>

<tr>
<th style='text-align:justify'>Street Address : </th>
<th style='text-align:justify'>".$_POST['address']."</th>
</tr>

<tr>
<th style='text-align:justify'>City : </th>
<th style='text-align:justify'>".$_POST['city']."</th>
</tr>

<tr>
<th style='text-align:justify'>State : </th>
<th style='text-align:justify'>".$_POST['state']."</th>
</tr>

<tr>
<th style='text-align:justify'>Zip : </th>
<th style='text-align:justify'>".$_POST['zip']."</th>
</tr>

<tr>
<th style='text-align:justify'>Home Phone : </th>
<th style='text-align:justify'>".$_POST['homep']."</th>
</tr>

<tr>
<th style='text-align:justify'>Cell Phone : </th>
<th style='text-align:justify'>".$_POST['cellp']."</th>
</tr>


<tr>
<th style='text-align:justify'>Email : </th>
<th style='text-align:justify'>".$_POST['email']."</th>
</tr>

<tr>
<th style='text-align:justify'>Emergency Contact Name : </th>
<th style='text-align:justify'>".$_POST['ecname']."</th>
</tr>

<tr>
<th style='text-align:justify'>Phone : </th>
<th style='text-align:justify'>".$_POST['phone']."</th>
</tr>

<tr>
<th style='text-align:justify'>Date : </th>
<th style='text-align:justify'>".$_POST['date']."</th>
</tr>

<tr>
<th style='text-align:justify'>Parent/Guardian Name : </th>
<th style='text-align:justify'>".$_POST['parentn']."</th>
</tr>





</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $_POST['email']; "\r\n";
if($_POST['email']!= '' && $_POST['fname']!= ''){
    if(mail($to,$subject,$message,$headers)){
    $msg = "success";
    
    
    
    
    }
    else{
        $msgerror = "Fail";
    }
   
    
    header(''.$msg);
    

      
    
}



   

  ?>
<?php get_footer(); ?>