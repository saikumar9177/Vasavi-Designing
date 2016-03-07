	
	<div class="container-fluid vasavi_footer">
		<div class="row vasavi_footer_sub vasavi_f18">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerbox">
				<div class="info">
					<h3>INFO</h3>

					<ul class="footer_menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>

				</div>
			</div>

		

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerbox">
				<div class="newsletter">
					<h3>NEWSLETTER SIGNUP</h3>
					<h6>
						Keep up to date with all the latest news, events and special offers from Goldcane.
					</h6>
					<form>
						<div class="form-group">
							<p>EMAIL</p>
							<input type="email" class="form-control">
							<input type="submit" class="btn vasavi-btn" value="SUBMIT">
						</div>
					</form>
				</div>
			</div>



			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerbox">
				<div class="address">
					<h3>Vasavi Business Forum</h3>
						<div class="newsletter_content">

						<p>tel:&nbsp; &nbsp; &nbsp;040-13456789<br>

						e-mail: info@vasivbuilders.com</p>

						<div class="location">
							<p>26 Hitech Street<br>1st Floor <br>Flat No:24, Hitech City, <r> Hyderabad</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background: #fff;">
		<div class="row copyrights">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rights">
				Copyrights (c) 2016 Vasavi Business Forum Ltd All Right are Reserverd
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 terms">
				Terms and Conditions are applicable
			</div>
		</div>
	</div>

	

	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/bootstrap.min.js"></script>

    <script src="js/formalize.js" type="text/javascript"></script>

   


     <script>
		$(document).ready(function () {
		  var trigger = $('.hamburger'),
		      overlay = $('.overlay'),
		     isClosed = false;

		    trigger.click(function () {
		      hamburger_cross();      
		    });

		    function hamburger_cross() {

		      if (isClosed == true) {          
		        overlay.hide();
		        trigger.removeClass('is-open');
		        trigger.addClass('is-closed');
		        isClosed = false;
		      } else {   
		        overlay.show();
		        trigger.removeClass('is-closed');
		        trigger.addClass('is-open');
		        isClosed = true;
		      }
		  }
		  
		  $('[data-toggle="offcanvas"]').click(function () {
		        $('#wrapper').toggleClass('toggled');
		  });  
		});
</script>


  </body>
</html>




