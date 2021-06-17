<?php include 'header.php';?>
<style>


.wrapper {
 
  width: 100%;
  margin: 0 auto;
  position: relative;
}

.row-features {
  position: relative;
}
.fakeh1{
    font-size:32px;
}

.new-feature-slider {
  width: 100%;
  float: left;
  overflow: hidden;
}
.new-feature-slider .feature-slide {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: all 0.5s ease;
}
.new-feature-slider .feature-slide .feature-slide-image img {
  width: 70%;
  display: block;
}
.new-feature-slider .feature-slide.active {
  opacity: 1;
}

.block-wrap {
  position: relative;
  width: 100%;
}
.block-wrap:before {
  content: "";
  width: 100%;
  padding-top: 100%;
  display: block;
}

.w50 {
  width: 50%;
  float: left;
}

.h50:before {
  padding-top: 50%;
}

.block {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  overflow: hidden;
  box-sizing: border-box;
}

.content-centered {
  
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 100;
  width: 100%;
  padding-left: 30px;
  transform: translate(-50%, -50%);
  height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
}

.controls {
  box-sizing: border-box;
  width: 50px;
  height: 100px;
  position: absolute;
  z-index: 9999;

  overflow: visible;
}
.controls .control {
  box-sizing: border-box;
  width: 40px;
  height: 40px;
  display: block;
  background: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  float: right;
  background-color: #1e1d24;
  border: 1px solid #ccc;
}
.controls .control:first-child {
  border-bottom: 1px solid rgba(4, 68, 86, 0.2);
}
.controls .control.button-next {
  transform: rotate(180deg);
}
.controls .control:before, .controls .control:after {
  width: 15px;
  height: 2px;
  position: absolute;
  top: 50%;
  left: 50%;
  display: block;
  transform-origin: left center;
  content: "";
  background-color: #ffcc33;
  transition: all 0.3s ease;
}
.controls .control:before {
  transform: translate(-50%, -50%) rotate(45deg);
}
.controls .control:after {
  transform: translate(-50%, -50%) rotate(-45deg);
}
.controls .control:hover {
  background-color: #1e1d24;
}
.controls .control:hover:before, .controls .control:hover:after {
  background-color: white;
}

.new-feature-controls {
  bottom: 40%;
  right: 50%;
}

@media only screen and (max-width: 600px) {
    .fakeh1{
    font-size:17px;
}
    .controls .control {
    box-sizing: border-box;
    width: 40px;
    height: 40px;
    display: block;
    background: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    float: right;
    background-color: #1e1d24;
    border: 1px solid #ccc;
}
.content-centered {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 100;
    width: 100%;
    padding-left: 30px;
    transform: translate(-50%, -50%);
    height: 180px;
    overflow-y: scroll;
    overflow-x: hidden;
}
.for-pc{
  display:none;
}
.for-mob{
  display:block;
}
}

@media only screen and (min-width: 600px) {
    .fakeh1{
    font-size:17px;
}
    .controls .control {
    box-sizing: border-box;
    width: 40px;
    height: 40px;
    display: block;
    background: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    float: right;
    background-color: #1e1d24;
    border: 1px solid #ccc;
}
.content-centered {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 100;
    width: 100%;
    padding-left: 30px;
    transform: translate(-50%, -50%);
    height: 280px;
    overflow-y: scroll;
    overflow-x: hidden;
}
.for-pc{
  display:none;
}
.for-mob{
  display:block;
}
}

@media only screen and (min-width: 768px) {
    .controls .control {
    box-sizing: border-box;
    width: 40px;
    height: 40px;
    display: block;
    background: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    float: right;
    background-color: #1e1d24;
    border: 1px solid #ccc;
}
.fakeh1{
    font-size:25px;
}
.content-centered {
  
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 100;
  width: 100%;
  padding-left: 30px;
  transform: translate(-50%, -50%);
  height: 350px;
    overflow-y: scroll;
    overflow-x: hidden;
}

.for-pc{
  display:none
}
.for-mob{
  display:block;
}
}

@media only screen and (min-width: 992px) {
    .content-centered {
  
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 100;
  width: 100%;
  padding-left: 30px;
  transform: translate(-50%, -50%);
  height: 480px;
    overflow-y: scroll;
    overflow-x: hidden;
}
 .fakeh1{
    font-size:32px;
}
    .controls .control {
    box-sizing: border-box;
    width: 40px;
    height: 40px;
    display: block;
    background: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    float: right;
    background-color: #1e1d24;
    border: 1px solid #ccc;
}
.for-pc{
  display:none;
}
.for-mob{
  display:block;
}
}

@media only screen and (min-width: 1200px) {
    .fakeh1{
    font-size:32px;
}
    .content-centered {
  
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 100;
  width: 100%;
  padding-left: 30px;
  transform: translate(-50%, -50%);
  height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
}

    .controls .control {
    box-sizing: border-box;
    width: 40px;
    height: 40px;
    display: block;
    background: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    float: right;
    background-color: #1e1d24;
    border: 1px solid #ccc;
}
.for-pc{
  display:block
}
.for-mob{
  display:none;
}
}



.tabgroup {
  position: relative;
  display: inline-block;
  width: 100%;
}
.tabgroup__item {
  -webkit-appearance: none;
  -moz-appearance: none !important;
  left: -99999px;
  padding: 0;
  height: 0;
  width: 0;
  z-index: -100;
  outline: 0;
}
.tabgroup__item:checked + .tab {
  background-color: #1e1d24;
  color: white;
  position: relative;
}
.tabgroup__item--1:checked ~ .panel--1, .tabgroup__item--2:checked ~ .panel--2, .tabgroup__item--3:checked ~ .panel--3, .tabgroup__item--4:checked ~ .panel--4, .tabgroup__item--5:checked ~ .panel--5, .tabgroup__item--6:checked ~ .panel--6, .tabgroup__item--7:checked ~ .panel--7, .tabgroup__item--8:checked ~ .panel--8, .tabgroup__item--9:checked ~ .panel--9, .tabgroup__item--10:checked ~ .panel--10, .tabgroup__item--11:checked ~ .panel--11  {
  display: block;
}
.tabgroup .tab {
  float: left;
  width: 100%;
  display: block;
  background-color: #ffcc33;
  padding: 6px;
  cursor: pointer;
  transition: all 0.15s ease-in;
  color:#fff;
  font-size:14px;
}
.tabgroup .panel {
  
  min-height: 200px;
  padding: 25px;
  display: none;
  width: 100%;
  margin-bottom: 30px;
}
.tabgroup .panel .cta {
  background-color: #ff8037;
  padding: 10px 35px;
  color: white;
  border-bottom: 5px solid #b24e14;
  font-size: 20px;
  display: inline-block;
  text-decoration: none;
}

@media screen and (min-width: 768px) {
  .tabgroup .tab {
    display: inline-block;
    float: none;
    width: auto;
  }
}

ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 1px solid #333;
	width: 100%;
}

ul.tabs li {
	float: left;
	margin: 0;
	cursor: pointer;
	padding: 0px 21px;
	height: 31px;
	line-height: 31px;
	border-top: 1px solid #333;
	border-left: 1px solid #333;
	border-bottom: 1px solid #333;
	background-color: #666;
	color: #ccc;
	overflow: hidden;
	position: relative;
}

.tab_last { border-right: 1px solid #333; }

ul.tabs li:hover {
	background-color: #ccc;
	color: #333;
}

ul.tabs li.active {
	background-color: #fff;
	color: #333;
	border-bottom: 1px solid #fff;
	display: block;
}

.tab_container {
	border: 1px solid #333;
	border-top: none;
	clear: both;
margin-bottom: 30px;
	width: 100%;
	background: #fff;
	overflow: auto;
}

.tab_content {
	padding: 20px;
	display: none;
}

.tab_drawer_heading { display: none; }
.button {
  border: 1px solid #bbb;
  border-radius: .3em;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  background: #f3f3f3; /* Old browsers */
  background: -moz-linear-gradient(top, #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* IE10+ */
  background: linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%); /* W3C */
  width:100%;
}
select option {
    background-color:#1e1d24;
    font-weight: bold;
    color: #fff;
}
.dropdown select {
  width:100%;
  margin:0;
  background:none;
  border: 1px solid transparent;
  outline: none;
  /* Prefixed box-sizing rules necessary for older browsers */
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  /* Remove select styling */
  appearance: none;
  -webkit-appearance: none;
  /* Magic font size number to prevent iOS text zoom */
  font-size:1.25em;
  /* General select styles: change as needed */
  /* font-weight: bold; */
  color: #fff !important;
  padding: .6em 1.9em .5em .8em;
  line-height:1.3;
}
@media screen and (max-width: 480px) {
	.tabs {
		display: none;
	}
	.tab_drawer_heading {
		background-color: #1e1d24;
		color: #fff;
		border-top: 1px solid #333;
		margin: 0;
		padding: 15px 20px;
		display: block;
		cursor: pointer;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		font-size: 22px;
	}
	.d_active {
		background-color: #666;
		color: #fff;
	}
	.button {
  border: 1px solid #bbb;
  border-radius: .3em;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  background: #f3f3f3; /* Old browsers */
  background: -moz-linear-gradient(top, #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* IE10+ */
  background: linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%); /* W3C */
  width:100%;
}
.w-100 {
    margin-bottom:30px;
}
.dropdown select {
  width:100%;
  margin:0;
  background:none;
  border: 1px solid transparent;
  outline: none;
  /* Prefixed box-sizing rules necessary for older browsers */
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  /* Remove select styling */
  appearance: none;
  -webkit-appearance: none;
  /* Magic font size number to prevent iOS text zoom */
  font-size:14px;
  /* General select styles: change as needed */
  /* font-weight: bold; */
  color: #444;
  padding: .6em 1.9em .5em .8em;
  line-height:1.3;
}
}


/* Label styles: style as needed */
label {
  display:block;
  margin: 2em 1em .25em .75em;
  font-size: 1.25em;
  color:#333;
}

/* Container used for styling the custom select, the buttom class adds the bg gradient, corners, etc. */
.dropdown {
  position: relative;
  display:block;
  margin-top:0.5em;
  padding:0;
}

/* This is the native select, we're making everything the text invisible so we can see the button styles in the wrapper */

.dropdown select,
label {
  font-family: AvenirNextCondensed-DemiBold, Corbel, "Lucida Grande","Trebuchet Ms", sans-serif;
}

/* Custom arrow sits on top of the select - could be an image, SVG, icon font, etc. or the arrow could just baked into the bg image on the select */

.dropdown::after {
  content: "";
  position: absolute;
  width: 9px;
  height: 8px;
  top: 50%;
  right: 1em;
  margin-top:-4px;
  z-index: 2;
  background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 12'%3E%3Cpolygon fill='rgb(102,102,102)' points='8,12 0,0 16,0'/%3E%3C/svg%3E") 0 0 no-repeat;  
  /* These hacks make the select behind the arrow clickable in some browsers */
  pointer-events:none;
}

/* This hides native dropdown button arrow in IE 10/11+ so it will have the custom appearance, IE 9 and earlier get a native select */
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .dropdown select::-ms-expand {
    display: none;
  }
  /* Removes the odd blue bg color behind the text in IE 10/11 and sets the text to match the focus style text */
  select:focus::-ms-value {
    background: transparent;
    color: #222;
  }
}



/* Firefox 7+ -- Will let us hide the arrow, but inconsistently (see FF 30 comment below). We've found the simplest way to hide the native styling in FF is to make the select bigger than its container. */
/* The specific FF selector used below successfully overrides the previous rule that turns off the custom icon; other FF hacky selectors we tried, like `*>.dropdown::after`, did not undo the previous rule */

/* Set overflow:hidden on the wrapper to clip the native select's arrow, this clips hte outline too so focus styles are less than ideal in FF */
_::-moz-progress-bar, body:last-child .dropdown {
  overflow: hidden;
}
/* Show only the custom icon */
_::-moz-progress-bar, body:last-child .dropdown:after {
  display: block;
}
_::-moz-progress-bar, body:last-child .dropdown select {
  /* increase padding to make room for menu icon */
  padding-right: 1.9em;
  /* `window` appearance with these text-indent and text-overflow values will hide the arrow FF up to v30 */
  -moz-appearance: window;
  text-indent: 0.01px;
  text-overflow: "";
  /* for FF 30+ on Windows 8, we need to make the select a bit longer to hide the native arrow */
  width: 110%;
}

/* At first we tried the following rule to hide the native select arrow in Firefox 30+ in Windows 8, but we'd rather simplify the CSS and widen the select for all versions of FF since this is a recurring issue in that browser */
/* @supports (-moz-appearance:meterbar) and (background-blend-mode:difference,normal) {
.dropdown select { width:110%; }
}   */


/* Firefox 7+ focus style - This works around the issue that -moz-appearance: window kills the normal select focus. Using semi-opaque because outline doesn't handle rounded corners */
_::-moz-progress-bar, body:last-child .dropdown select:focus {
  outline: 2px solid rgba(180,222,250, .7);
}


/* Opera - Pre-Blink nix the custom arrow, go with a native select button */
x:-o-prefocus, .dropdown::after {
  display:none;
}


/* Hover style */
.dropdown:hover {
  border:1px solid #888;
}

/* Focus style */
select:focus {
  outline:none;
  box-shadow: 0 0 1px 3px rgba(180,222,250, 1);
  background-color:transparent;
  color: #222;
  border:1px solid #aaa;
}


/* Firefox focus has odd artifacts around the text, this kills that */
select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}

option {
  font-weight:normal;
}


/* These are just demo button-y styles, style as you like */

.output {
  margin: 0 auto;
  padding-top: 2em; 
}
.colors {
  padding: 2em;
 background: #6e97bb3d;
    box-shadow: 0 0 20px rgb(0 0 0 / 40%);
  display: none;
  margin-bottom:30px;
}
.red {
  background: #c04;
} 
.yellow {
  color: #000;
  background: #f5e000;
} 
.blue {
  background: #079;
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
 
  height: 3em;
  line-height: 3;
  background: #286090;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #286090;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

</style>

<div class="container">

<h3 class="about-us-h text-center mt-5">Our Products</h3>
<hr size="8" class="hr-heading-bottom">


<div class="col-md-12 mb-5">
    
    <p>At Sutlej Ropes, we take pride in our product, its world-class quality and our range of specialized variants. Each unit of our Sutlej Ropes meets the most exacting standards of quality toughness, tensile strength, flexibility, abrasion resistance and fatigue resistance. They are drawn to the strictest specifications and every coil of every variant is thoroughly tested to ensure that it complies with international standards.
    <br><br>

But, to ensure this level of perfection in the product we make, we need to be sure of the quality of steel we use. In the older days, Crucible Cast Steel and Mild Plow Steel were used to make wire ropes. However, we do not use lower grades of carbon steel wire, since today's modern machinery and equipment requires higher strength wire ropes, because of greater loads and fatigue. Keeping this in mind, we almost exclusively use Improved Plow Steel and Special Improved Plow Steel in the making of our wire ropes. Depending upon the industry-specific use, we make these ropes with a tensile strength ranging from 2,40,000 to 2,90,000 pounds per sq. inch. Our elevator wire ropes, however, are customized because they must be made of steel of low tensile strength and high flexibility.
<br><br>
Our integrated wire rope facilities include stranding machines with 6 bobbins, 12 bobbins, 18 bobbins, 36 bobbin machines and high speed wire rope closers. These stranding machines, along with our coiling and other equipment enable our production to include variations of all types of industrial Sutlej Ropes. These are the different variants of our Sutlej Ropes –
<br><br>
At Sutlej Ropes, we believe that being 'specialized' is very significant in order to satisfy each and every industry-specific customer. It is with this in mind, that we have a wide range of custom-engineered wire rope variants that cater specifically to different industries. Our range of products is ideal for industries like -</p>

<div class="row">
<!--    <div class="col-md-6">-->
<!--        <ul>-->
<!--    <li>Mining Equipment</li>-->
<!--<li>Oil & Gas Rigs</li>-->
<!--<li>Tensile Membrane Structures</li>-->
<!--<li>Elevators</li>-->
<!--<li>High Mast Lighting Poles</li>-->
<!--<li>Container Lifting Terminals</li>-->


<!--</ul>-->
<!--    </div>-->
    
<!--      <div class="col-md-6">-->
<!--        <ul>-->


<!--<li>Material Handling Equipment</li>-->
<!--<li>Construction Cranes</li>-->
<!--<li>Bridges & Infrastructure</li>-->
<!--<li>Shipping Cranes</li>-->
<!--<li>Industrial Overhead Gantry Cranes</li>-->
<!--<li>Gondola Ropes</li>-->
<!--</ul>-->
<!--    </div>-->
</div>
</div>

</div>

<div class="container">
    


<div class="row">
     <div class="col-md-6">
         <h3 style="
    position: relative;
    top: 15px;">Select the Product type </h3>
     </div>
    <div class="col-md-6">
        <div class="button dropdown select"> 
  <select id="colorselector" class="slct">
     <option value="MINING">MINING</option>
     <option value="Cranes">Cranes</option>
     <option value="FISHINGROPE">FISHING ROPE</option>
     <option value="SUSPENSION">SUSPENSION BRIDGES (excluding spiral strands)</option>
     
     
      <option value="LIFE">LIFE BOAT ROPES</option>
       <option value="AERIAL">AERIAL ROPES</option>
        <option value="SHIPPING">SHIPPING ROPES</option>
         <option value="OIL">OIL EXPLORATION ROPES</option>
          <option value="SUSPENSION">SUSPENSION BRIDGES (excluding spiral strands)</option>
           <option value="LOGGING">LOGGING</option>
            <option value="SteelWire">Steel Wire</option>
             <option value="Strands">Strands</option>
              <option value="WipeRopes">Wipe Ropes</option>
  </select>
</div>
    </div>
</div>

<div class="output">
  <div id="MINING" class="colors">   
  
  <div class="row">
      <div class="col-md-6">
          <img src="images/mining.jpg" class="w-100">
      </div>
      
      <div class="col-md-6">
          <h5><b>Underground Mining</b></h5>
                  <ul>
                  <li>Haulage Rope</li>
                  <li>Drum Winding Rope</li>
                  <li>Friction Winder Rope</li>
                  <li>Sinking Rope</li>
                  <li>Balance Rope or Tail Rope</li>
                  <li>Guide and Rubbing Rope</li>
                  <li>Coal Cutting Machine Rope</li>
                  <li>Slusher Rope</li>
                  <li>Roof Stitching Rope</li>
                  </ul>
                  <br>
                  <h5><b>Open Cast Mining (six stranded ropes)</b></h5>
                  <ul>
                  <b>1. Shovels</b>
                  <ul>
                  <li>Bucket Hoist Rope</li>
                  <li>Boom Hoist Rope</li>
                  <li>Trip Rope </li>
                  </ul>
                  <br>

                  <b>2. Draglines</b>
                  <ul>
                  <li>Drag Ropes</li>
                  <li>Hoist Rope</li>
                  </ul>
                  <br>

                  <b>3. Dozers</b>
                  
                  </ul>
                  </p>
      </div>
  </div>
  </div>
  <div id="Cranes" class="colors"> 
  
    <div class="row">
      <div class="col-md-6">
          <img src="images/Cranes.jpg" class="w-100">
      </div>
      <div class="col-md-6">
          <ul>
                 <li>E.O.T. Cranes</li>
                 <li>Hot Metal E.O.T. Cranes</li>
                 <li>Stripper</li>
                 <li>Skip Hoist</li>
                 <li>Wagon Hauler</li>
                 <li><b>Wagon Trippler</b>
                 <ul>
                 <li>Hoist Rope</li>
                 <li>Counter Weight Rope</li>
                 </ul>
                 </li>
                 
                 <li><b>Mobile Cranes</b>
                 <ul>
                 <li>Hoist Rope</li>
                 <li>Guy Rope or Stay Rope</li>
                 </ul>
                 </li>
                 </ul>
      </div>
  </div>
  
  </div>
  <div id="FISHINGROPE" class="colors"> 
  <div class="row">
      <div class="col-md-6">
          <img src="images/fishing-ropes.jpg" class="w-100">
      </div>
      <div class="col-md-6">
          <ul>
                  <li>Trawl Rope</li>
                  </ul>
      </div>
  </div>
  </div>
   <div id="SUSPENSION" class="colors"> 
    <div class="row">
      <div class="col-md-6"> 
          <img src="images/Suspension-Bridge.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
          <ul>
                  <li>Main Cable</li>
                  <li>Suspender</li>
                  <li>Guy Rope</li>
                  </ul>
      </div>
  </div>
   </div>
   
   <div id="LIFE" class="colors"> 
    <div class="row">
      <div class="col-md-6"> 
          <img src="images/Life-Boat-Ropes.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
         <ul>
                  <li>Life Boat Falls</li>
                  <li>Life Boat Davit Guys</li>
                 
                  </ul>
      </div>
  </div>
   </div>
   
   <div id="AERIAL" class="colors"> 
    <div class="row">
      <div class="col-md-6"> 
          <img src="images/Aerial-Ropes.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
         
      </div>
  </div>
   </div>
   
   <div id="SHIPPING" class="colors"> 
    <div class="row">
      <div class="col-md-6"> 
          <img src="images/Shipping-Ropes.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
         <ul>
                  <li>Standing Rigging</li>
                  <li>Mooring Ropes</li>
                  <li>Towing Rope</li>
                 
                  </ul>
      </div>
  </div>
   </div>
   
   
   
   <div id="OIL" class="colors"> 
    <div class="row">
      <div class="col-md-6"> 
          <img src="images/Oil-Exploration-Ropes.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
          <ul>
                  <li>Casing Line Ropes</li>
                  <li>Sand Line Ropes</li>
                  <li>Bull Line Ropes</li>
                  <li>Pig Tail Ropes</li>
                 
                  </ul>
      </div>
  </div>
   </div>
   
   
   <div id="LOGGING" class="colors"> 
    <div class="row">
      <div class="col-md-6"> 
          <img src="images/Logging.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
         <ul>
                  <li class="lifirst"><b>Tractor Logging</b>
                  <ul>
                  <li>Archlines and Winchlines</li>
                  <li>Chokers</li>
                  </ul>
                  </li>
                  <br>
                  <li class="lifirst"><b>Portable High Lead System (Steel Spar)</b>
                  <ul>
                  <li>Main Line</li>
                  <li>Haulback Line</li>
                  <li>Straw Line</li>
                  <li>Guys (Drum Tensioned)</li>
                  <li>Choker</li>
                  </ul>
                  </li><br>
                  <li class="lifirst"><b>Tight Skyline System</b>
                  <ul>
                  <li>SkyLine</li>
                  <li>Mainline Skidding Line</li>
                  <li>Haulback Line</li>
                  <li>Strawline</li>
                  <li>Choker</li>
                  </ul>
                  </li><br>

                  <li class="lifirst"><b>Slack Line System (Fixed)</b>
                  <ul>
                  <li>Main Line or Skidding Line</li>
                  <li>Haulback Line</li>
                  <li>Tightening Line</li>
                  <li>Chokers</li>
                  </ul>
                  </li><br>

                <li class="lifirst"><b>Ground Skidders</b>
                <ul>
                <li>Mainline</li>
                <li>Haulback Line</li>
                </ul>
                </li><br>

                <li class="lifirst"><b>Cargo Working Gear</b>
                <ul>
                <li>Cargo Falls and Cargo Runners</li>
                <li>Topping Pendents</li>
                <li>Topping Lifts</li>
                <li>Guy Pendents</li>
                </ul>
                </li><br>
                <li class="lifirst"><b>Preventer Stays</b></li>

                  </ul>
      </div>
  </div>
   </div>
   
   <div id="SteelWire" class="colors"> 
    <div class="row">
      <div class="col-md-6"> 
          <img src="images/Img1.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
         <p class="mt-5">A Wire Rope is made of a number of strands laid helically around a core which may be of FIBRE or STEEL. The strands themselves are composed of a number of wires laid in various geometrical configurations. A typical description of a rope will be as follows :
            "22mm dia 6 x 19 (12\6\1) construction, 160 grade, Right Hand Ordinary lay, Ungalvanised rope with Fibre Main core," 
         </p>
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
               <img src="images/Img5tab.jpg" class="w-100" alt="">
            </div>
            <div class="col-md-5"></div>
         </div>
         <p class="mt-3"> In the construction of rope, the first figure(6) indicates the number of strands and the second (19) the number of wires in each strand. The figure in the parenthesis i.e. 12/6/1 describes the formation of the strand which in this case consists of 12 wires laid around 6 wires which in turn are laid around 1 central wire.
            The traditional method of clarifying the arrangement of wires is to use terms like Seale, Filler, Warrington, SealeWarrington etc. For example,6 x19 Seale, 6x19 Warrington and 6x19 Filler where the arrangement of wires is 9/9/1, 6 & 6/611 and 12/6 + 6F/1 respectively. The insertion of 'sEt' between two figures indicates that wires are of two different sizes. The sign and the suffix indicate that Fillerwires of specified number are used.
            160 grade in this instance means that the rope is composed of wires which belong to the 160 grade i.e. their minimum ten-sile strength 160 kgf/ mm2 the maximum being specified sizewise in the 15:1835.The latest way to express the tensilestrength of the wire is to express the same in terms of NEWTONS per mm. sq., in which system the above rope would be placed in1570 Grade (1 N/mm2= 0.102 kgf/mrril).
            The lay of rope denotes the direction in which strands have been laid in the rope and the direction in which wires have been laid in the strands, In right hand lay ropes strands are laid 'clock-wise" and 'anti-clock-wise' in left hand lay ropes.
         </p>
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
               <img src="images/Img6tab.jpg" class="w-100" alt="">
            </div>
            <div class="col-md-5"></div>
         </div>
         <ul  class="mt-3" style="list-style:none;">
            <li>a)	Rigid and ordinary lay</li>
            <li>b)	Right hand tangs lay</li>
            <li >c)	Left hand ordinary lay</li>
         </ul>
         <p class="mb-5">In ordinary lay ropes,wires in strands are laid in opposite direction to that of the strands, such that the ordinary lay rope has the outer wires approximately parallel to the longitudinal axis of the rope.(Fig.2)
            In Lang's lay wire rope, wires in the strands are laid in the same direction as that of the strands, such that the outer wires run diagonally across the longitudinal axis of the rope.
         </p>
      </div>
  </div>
   </div>
   
   
   <div id="Strands" class="colors"> 
   <div class="row">
      <div class="col-md-6"> 
          <img src="images/Img2.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
         
      </div>
  </div>
   </div>
   
    <div id="WipeRopes" class="colors"> 
   <div class="row">
      <div class="col-md-6"> 
          <img src="images/Img3.jpg" class="w-100"> 
      </div>
      <div class="col-md-6">
         
      </div>
  </div>
   </div>
   
   
   
   
   
   
   
   
   
</div>




</div>


<script>

	
// 	select drop down
$(function() {
    $('#MINING').show();
  $('#colorselector').change(function(){
      var ele = $(this).val();
    //   alert(ele);
    // $('.colors').hide();
    $('#' + ele).show();
    $('.colors').not('#' + ele).hide();
  });
});
// [forked from](http://jsfiddle.net/FvMYz/)
// [show-hide-based-on-select-option-jquery)(http://stackoverflow.com/questions/2975521/show-hide-div-based-on-select-option-jquery/2975565#2975565)
	
</script>

<?php include 'footer.php';?>