<style>
#sidenav-container{
    display:none !important;
}
.footer-bg {
    background: #1e1d24;
    position: absolute;
    width: 100%;
    z-index: -1;
}

/*End style*/

</style>
<?php include 'header.php';?>

<div class="container mb-5">
<h3 class="about-us-h text-center mt-5">Certifications</h3>
<hr size="8" class="hr-heading-bottom">
<div class="">
<div class="row mt-5">
    
    <div class="col-md-5 mt-3"> 
    <h3 class="text-center"> ISO Certificate</h3>
    <img src="images/iso.jpg" class="w-100">
    </div>
     
     <br> <br>
     <div class="col-md-2 mt-3"></div>
    <div class="col-md-5 mt-3">
         <h3 class="text-center"> BSI Certificate</h3>
        <object data="bis_endorsement_20210401_0001 (1).pdf" type="application/pdf" width="100%" height="100%"></object>



           
           
            
        </div>
   
    
    </div>

    <div class="row mt-5 mb-3">
    <div class="col-md-2"> </div>
    <!--<div class="col-md-4 mt-3"><img src="images/Sample-Certificate.jpg" class="w-100"></div>-->
    <!--<div class="col-md-4 mt-3"><img src="images/Sample-Certificate.jpg" class="w-100"></div>-->
    <div class="col-md-2"> </div>
    
    </div>
</div>
</div>

 
  
 



<div class="show">
  <div class="overlay"></div>
  <div class="img-show">
    <span>X</span>
    <img src="">
  </div>
</div>
<!--End image popup-->
<?php include 'footer.php';?>
<script>
$(function () {
    "use strict";
    
    $(".popup img").click(function () {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });
    
});
</script>