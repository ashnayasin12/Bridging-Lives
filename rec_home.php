<!doctype html>
<html class="no-js" lang="en">

    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        
        <title>Bridging Lives</title>

        
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <link rel="stylesheet" href="assets/css/rec.css">
        
    
    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
								
			                </button>
							<a class="navbar-brand" href="index.html">
								<img src="assets/logo/favicon.png" alt="Your Logo">

							</a>
							
			                <a class="navbar-brand" href="index.html">Bridging Lives</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                <li class=" smooth-menu active"></li>
			                    <li class="smooth-menu"><a href="#contact">LOGIN</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div> 

		</header><!-- /.top-area-->
		<!-- top-area End -->
	
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h3> Welcome to Bridging Lives </h3><br>
                            <p>Welcome to our community! We're dedicated to a simple yet vital mission: connecting those in need with life-saving blood donations, wherever and whenever they're needed. Together, let's ensure no one faces their battles alone.</p>
							
							
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--about start -->
        <section id="about" class="about">
    <div class="container">
        <div class="about-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-about-txt">
                        <div class="about-text-center">
                            <h3>Request for a Donor</h3>
                            <form id="requestForm" >
                                <div class="dropdowns-container">
                                    <div class="dropdown-container">
                                        <label for="bloodType">Select Blood Type:</label>
                                        <select id="bloodType" name="bloodType">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    <div class="dropdown-container">
                                        <label for="location">Select Location:</label>
                                        <select id="location" name="location">
                                            <option value="location1">Alappuzha</option>
                                            <option value="location2">Kollam</option>
                                            <option value="location3">Palakkad</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                </div>
                                <button action="insert_request.php" method="post" id="sendRequest" name="sendRequest" type="submit">Send Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/.about-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#sendRequest').click(function(event) {
            // Prevent default form submission behavior
            event.preventDefault();

            // Get values from input fields
            var bloodType = $('#bloodType').val().trim();
            var location = $('#location').val().trim();

            // Check if both fields are not empty
            if (bloodType === '' || location === '') {
                alert('Please fill out both blood type and location fields.');
                return;
            }

            // Sanitize user input
            bloodType = encodeURIComponent(bloodType);
            location = encodeURIComponent(location);

            // Send AJAX request to PHP script
            $.ajax({
                url: 'insert_request.php', // PHP script URL
                method: 'POST',
                data: {
                    bloodType: bloodType,
                    location: location
                },
                success: function(response) {
                    alert('Request sent successfully!');
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('Failed to send request. Please try again.');
                }
            });
        });
    });
</script>


			<!--contact start -->
			<section id="contact" class="contact">
				<div class="section-heading text-center">
					<h2>FAQ</h2>
				</div>
				<div class="container">
					<div class="faq-item">
						<h3 class="question">How do I specify the blood type I need when making a request for blood donations? <span class="toggle-sign">+</span></h3>
						<div class="answer">
							<p>When requesting blood donations, specifying the recipient's blood type streamlines the process. Whether it's A, B, AB, or O, this information ensures donors with compatible blood types are notified, expediting the donation process and ensuring suitability for the recipient</p>
						</div>
					</div>
					
					<div class="faq-item">
						<h3 class="question">What happens after I send a request for blood donations? <span class="toggle-sign">+</span></h3>
						<div class="answer">
							<p>After sending a request for blood donations, the information is forwarded to potential donors in the specified location. Donors who match the requested blood type and are available to donate will receive notifications and can choose to respond to the request. Once a donor confirms their willingness to donate, further coordination is made to arrange the donation process, including scheduling an appointment at a convenient location such as a blood donation center or hospital.</p>
						</div>
					</div>
					
					<div class="faq-item">
						<h3 class="question">What should I do if I receive multiple responses from donors willing to donate blood? <span class="toggle-sign">+</span></h3>
						<div class="answer">
							<p>If you receive multiple responses from donors willing to donate blood, you can prioritize and coordinate with donors based on factors such as proximity, availability, and compatibility with the recipient's blood type. Communicate with each donor to confirm donation details and schedule appointments accordingly. Additionally, consider informing other donors of the successful arrangement to express appreciation for their willingness to help and to avoid unnecessary duplication of efforts.</p>
						</div>
					</div>
					
									
				</div><!--/.container-->

			</section><!--/.contact-->
			<!--contact end -->

			<!--footer-copyright start-->
			<footer id="footer-copyright" class="footer-copyright">
				<div class="container">
					<div class="hm-footer-copyright text-center">
						<p>
							&copy; Mahin | Gauri | Ashna | Aswathy | Surabhi <a href=""></a>
						</p><!--/p-->
					</div><!--/.text-center-->
				</div><!--/.container-->
				<div id="scroll-Top">
					<div class="return-to-top">
						<i class="fa fa-angle-up " id="scroll-top" ></i>
					</div>
					
				</div><!--/.scroll-Top-->
				
			</footer><!--/.footer-copyright-->

		<script src="script/faq.js"></script>
			

		
			
		</body>
		
	</html>