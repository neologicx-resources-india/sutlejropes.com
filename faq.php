<style>
   
   
</style>
<?php include 'header.php';?>
<div class="container">
   <h3 class="about-us-h text-center mt-5">FAQ's</h3>
   <hr size="8" class="hr-heading-bottom">
   <dl id="accordion" class="mb-5">
      <dt>FAQ 1  <span>></span></dt>
      <dd>
         
         <p>Answer</p>
      </dd>
      <dt>FAQ 2  <span>></span></dt>
      <dd>
         <p>Answer</p>
      </dd>
     
   </dl>
</div>
<?php include 'footer.php';?>
<script>
   let dl = document.querySelector("#accordion");
   let dt = dl.querySelectorAll("dt");
   let dd = dl.querySelectorAll("dd");
   let closeAlldd = true;
   
   for (let i = 0, len = dt.length; i < len; i++) {
     let sp = dt[i].querySelector("span");
   	
   	dt[i].onclick = function() {
   		if (!dd[i].hasAttribute('class')) {
   			if (closeAlldd) {
   				for (var j = 0; j < dd.length; j++) {
   					dt[j].querySelector('span').innerHTML = '>';
   					dd[j].removeAttribute('class');
   				}
   			}
   			sp.innerHTML = '-';
   			dd[i].setAttribute('class', 'dd-current');
   		} else {
   			sp.innerHTML = '>';
   			dd[i].removeAttribute('class');
   		}
   	}
   }
</script>