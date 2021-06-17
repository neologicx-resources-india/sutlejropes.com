<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include 'header.php';?>

<style>
    #contact{
        box-shadow: 0 0 20px rgb(0 0 0 / 14%);
    padding: 30px 30px 30px 30px;
    }
</style>
<div class="container">
<h3 class="mt-5 about-us-h text-center">Contact Us</h3>
<hr size="8" class="hr-heading-bottom">
   <div class="row mt-5 mb-5">
  

   <div class="col-md-6">
         <div class="row">
            <div class="col-md-2">
               <div class="wrap">
                  <a class="hover-fx1"> <i class="fa fa-envelope fa-bottom-icons" style="padding: 16px 22px 18px 19px;"></i></a>
               </div>
            </div>
            <div class="col-md-10 ">
               <p class="phone-email-p-contact-us" >
                   <h4 style=" font-size: 18px;"><b>For International Enquiries</b></h4>
                   <a href="mailto:export@sutlejropes.com">export@sutlejropes.com</a></p>
            </div>
         </div>
      </div>
     
<div class="col-md-6">
         <div class="row">
             <div class="col-md-4"></div>
            <div class="col-md-2">
               <div class="wrap">
                  <a class="hover-fx1"> <i class="fa fa-envelope fa-bottom-icons" style="padding: 16px 22px 18px 19px;"></i></a>
               </div>
            </div>
            <div class="col-md-6">
               <p class="phone-email-p-contact-us" >
                   <h4 style=" font-size: 18px;"><b>For Domestic Enquiries</b></h4>
                   <a href="mailto:india@sutlejropes.com">india@sutlejropes.com</a></p>
            </div>
         </div>
      </div>
      
   </div>


   
</div>




   <div class="container" style=" padding: 0;">
      <div class="col-md-12" style=" padding: 0;">
          <?php

if(isset($_GET['msg'])){
    ?>
    <script>
     sweetalert();
        function sweetalert(){
        swal("Thank you for getting in touch!", "We will get back in touch with you soon!");
    }
    </script>
<?php }
?>
         
         <form id="contact" action="action.php" method="post" class="mb-3">
            <div class="row">
               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="name">Name</label>
                     <input name="name" id="name" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" type="text" tabindex="1" required autofocus >
                  </fieldset>
               </div>
               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="designation">Designation</label>
                     <input name="designation" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" type="text" tabindex="1" required autofocus>
                  </fieldset>
               </div>

               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="companyname">Company Name</label>
                     <input name="companyname"  type="text" tabindex="1" required autofocus>
                  </fieldset>
               </div>


               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="business">Kind of Business</label>
                     <input name="business" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$"  type="text" tabindex="1" required autofocus>
                  </fieldset>
               </div>

               
               <div class="col-md-4">
                  <fieldset>
                     <label for="ccode">Country Code</label>
                     <input name="ccode"  type="text" tabindex="1"  autofocus>
                  </fieldset>
               </div>

               <div class="col-md-8">
                  <fieldset>
                     <label class="required" for="tnumber">Tel Number</label>
                     <input name="tnumber" pattern="[789][0-9]{9}"  type="text" tabindex="1" required autofocus>
                  </fieldset>
               </div>

               <div class="col-md-6">
                  <fieldset>
                     <label class="required" for="mnumber">Mobile Number</label>
                     <input name="mnumber" pattern="[789][0-9]{9}"  type="text" tabindex="1" required autofocus>
                  </fieldset>
               </div>

               <div class="col-md-6">
                  <fieldset>
                     <label class="required" for="email">Email</label>
                     <input  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" tabindex="2" required>
                  </fieldset>
               </div>
                  
               


               
               
               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="enquiry">Select Enquiry Purpose</label>
                     <select class="form-control" id="sel1" name="sel1" placeholder="" required>
                                    <option value="" disabled selected hidden 
                                    style="color:red; font-size:15px!important;">Select Purpose*</option>
                                    <option value="International Enquiries" id="be">International Enquiries</option>
                                     <option value="Domestic Enquiries" id="ot">Domestic Enquiries</option>
                                    
                                 </select>
                  </fieldset>
               </div>


               <div class="col-md-12">
                  <fieldset>
                     <label class="required" for="enquiry">Enquiry</label>
                     <textarea rows="4" cols="50" name="enquiry" tabindex="1" required autofocus>
                     </textarea>
                  </fieldset>
               </div>
               
            </div>
            
            
            <fieldset>
               <button name="submit" type="submit" class="b-btn-p btn-secondary"  id="submit" data-submit="...Sending" >Submit</button>
            </fieldset>
         </form>
      </div>

      <!--<div class="col-md-12">-->
      <!--<h5 class="text-center mb-5"><b>Alternatively mail your enquiry on: <br>-->
      <!--<a href="mailto:info@sutlejropes.com">info@sutlejropes.com</a>, <a href="mailto:sutlejropes@rediffmail.com">sutlejropes@rediffmail.com</a> -->
      <!--</b></h5>-->
      <!--</div>-->
   </div>

<?php include 'footer.php';?>