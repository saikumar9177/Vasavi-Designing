<?php include('header.php'); ?>
	<div class="container-fluid">
		<div class="row vasavisection1">
			<div id="startchange"></div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="vasavi_f50 vf_uppercase">We are happy to help you to find <br> your <span class="vf_green">Dream Home</span></h1>

			<ul class="nav nav-pills">
			    <li class="active">
			    	<a data-toggle="pill" href="#residential" class="btn btn-green vasavi_f18 text-center vf_uppercase">Residential</a>
			    </li>
			    <li>
			    	<a data-toggle="pill" href="#commercial" class="btn btn-green vasavi_f18 text-center vf_uppercase">Commercial</a>
			    </li>
			</ul>
  
  			<div class="tab-content">
			    <div id="residential" class="tab-pane fade in active">
			      	<form role="form" class="form-search" ng-controller="autocompleteController">
			      		
				      	<div class="form-inline searchform">
						    <div class="form-group">
						      <select class="form-control" ng-model="selectedtype">
						      	<option>SELECT TYPE</option>
						      	<option>APPARTMENT</option>
						      	<option>VILLA</option>
						      	</select>				   
						    </div>
						    <div class="form-group">
						      <select class="form-control" placeholder="BEDROOMS" ng-model="selectedrooms">
						      	<option>SELECT BEDROOMS</option>
						      	<option >1</option>
						      	<option >2</option>
						      	<option >3</option>
						      	<option >4</option>
						      	<option >5</option>
						      	<option >6</option>
						      	<option >7</option>
						      </select>
						    </div>
						    <div class="form-group">
						      <input type="text" ng-model="selectedstate"  typeahead="c as c.p_state for c in state | filter:$viewValue | limitTo:10" typeahead-min-length='1' typeahead-on-select='onSelectPart($item, $model, $label)' typeahead-template-url="customTemplate.html" class="form-control"  placeholder="STATE">
						  	</div>
						    <div class="form-group">
						      <input type="text" class="form-control" ng-model="selectedarea"  typeahead="c as c.p_subarea for c in area | filter:$viewValue | limitTo:10" typeahead-min-length='1' typeahead-on-select='onSelectPart($item, $model, $label)' typeahead-template-url="customTemplate.html" class="form-control"  placeholder="AREA">
						    </div>
						    <div class="form-group">
						      <input type="text" class="form-control" placeholder="MIN PRICE" ng-model="selectedmin">
						    </div>
						    <div class="form-group">
						      <input type="text" class="form-control" placeholder="MAX PRICE" ng-model="selecctedmax">
						    </div>
		 				
		 				</div>
		 				<div class="letsgo">
	 					<a type="submit" href="pdetails.php"
									 class="btn btn-green1">LET'S GO</a>
	 					</div>
  					</form>
			    </div>

			    <div id="commercial" class="tab-pane fade">
			    	<form role="form">
			      		<div class="form-inline searchform">
				    		<div class="form-group">
						      <select class="form-control">
						      	<option>SELECT TYPE</option>
						      	<option>FARM SHELL</option>
						      	<option>WARM SHELL</option>
						      	<option>FULLY FURNISHED</option>
						      </select>				   
				    		</div>
						    <div class="form-group">
						      <input type="text" class="form-control" placeholder="STATE">
						    </div>
						    <div class="form-group">
						      <input type="text" class="form-control" placeholder="AREA">
						    </div>
						    <div class="form-group">
						      <input type="text" class="form-control" placeholder="ROOMS">
						    </div>
						    <div class="form-group">
						      <input type="text" class="form-control" placeholder="MIN PRICE">
						    </div>
						    <div class="form-group">
						      <input type="text" class="form-control" placeholder="MAX PRICE">
						    </div>
	 					</div>
	 						<div class="letsgo">
	 					<button type="submit" class="btn btn-green1"> > LET'S GO</button>
	 					</div>
  					</form>
			    </div>
			</div>

		</div>

		</div>
	</div>
	<div class="container-fluid">
		<div class="row vasavisection2">
			<div class="tophr hidden-sm hidden-xs"><img src="img/logotop.png" class="center-block"></div>
			<h3 class="vasavi_f30 text-center vf_uppercase">40+ Builders’s to choose from</h3>
			<div class="belowhr hidden-sm hidden-xs"><img src="img/logobottom.png" class="center-block"></div>
			
			<ul class="vasaviclients">
				<li><a href="#"><img src="img/logos/1.jpg" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/2.jpg" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/3.png" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/4.png" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/5.jpg" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/6.jpg" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/7.png" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/8.png" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/9.png" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/10.png" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/11.jpg" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/12.jpg" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/13.jpg" class="img-responsive"></a></li>
				<li><a href="#"><img src="img/logos/14.jpg" class="img-responsive"></a></li>
				<p>
					...AND GROWING
				</p>
			</ul>

			

		</div>
	</div>



	<div class="container-fluid">
	 	<div class="row vasavisection3">
	 	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	 		<img src="img/realestatemap.png" class="img-responsive center-block">
	 	</div>
	 	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	 		<div class="section3_content">
	 			<h2 class="vasavi_f36 vf_green">
	 				We can find just right property for you!
	 			</h2>
	 			<p class="vasavi_f18 vf_black">
	 				Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauri asefgllus porta. Cum sociis natoque penatibus edfit magnis dis parturient montes, nascetur ridiculus musulla dusce feugiat males.
	 			</p>
	 			<p class="vasavi_f18 vf_black">
					Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonmy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis part urient natque penatibus montes
	 			</p>
	 		</div>
	 	</div>
	 	</div>
	</div>


	<div class="container-fluid">
	 	<div class="row vasavisection4">
	 		<h3 class="vasavi_f30 text-center vf_uppercase">Want to share our celbration and events</h3>
		 		<div class="section4block">
				 	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				 		<div class="section4_content">
				 			<h4 class="vasavi_f24 vf_black">
				 				Event one
				 			</h4>
				 			<p class="vasavi_f18 vf_black">
				 				Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauri asefgllus porta. Cum sociis natoque penatibus edfit.
				 			</p>

				 			<h4 class="vasavi_f24 vf_black">
				 				Celebration
				 			</h4>
				 			<p class="vasavi_f18 vf_black">
				 				Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauri asefgllus porta. Cum sociis natoque penatibus edfit.
				 			</p>

				 			<h4 class="vasavi_f24 vf_black">
				 				Real Estate
				 			</h4>
				 			<p class="vasavi_f18 vf_black">
				 				Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauri asefgllus porta. Cum sociis natoque penatibus edfit.
				 			</p>
				 			
				 		</div>
				 	</div>
			 		<div class="col-lg-6 col-md-6 col-sm-12 col=xs-12">
			 			<img src="img/countryclub.jpg" class="img-responsive center-block">
			 		</div>
			 	</div>
	 	</div>
	</div>


<?php include('footer.php'); ?>