<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANKEDGE Admission</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
    <div style="background: url('./img/as.png') no-repeat; background-size: contain; background-position: center; height: 100px;"></div>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANKEDGE Admission</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for title styling -->
     <!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="./about.html">About</a></li>
								<li><a href="./course2.html">Programs</a></li>
								<li><a href="./contact.html">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+91 912 999 651 0/1</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:info@ibfpro.com">info@ibfpro.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="img/lgg.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							
							<div class="col-lg-7 col-md-9 col-12 mt-3">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="./index.html">Home</a>
												
											
											</li>
											<li><a href="./about.html">About </a></li>
											<li><a href="./placements.html">Placements </a></li>
											<li><a href="./gallery.html">Gallery</a>
												
											</li>
											<li><a href="./course2.html">Programs</i></a>
												
											</li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
    <style>
        .page-title {
            text-align: center;
            font-family: 'Arial', sans-serif;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
        }
        .qr-code-img {
            max-width: 400px;
            height: auto;
            display: none;
        }
        .center-button {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .token-input, .upi-text {
            display: none;
        }
        .copyable-text {
            display: block;
            width: fit-content;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
    </style>
    <script>
        function generateQR() {
            document.getElementById('qrImage').style.display = 'block';
            document.getElementById('upiText').style.display = 'block';
        }

        function handlePaymentModeChange() {
            var paymentMode = document.getElementById('paymentMode').value;
            if (paymentMode === 'campus') {
                document.getElementById('tokenField').style.display = 'block';
                document.getElementById('qrButton').style.display = 'none';
                document.getElementById('qrImage').style.display = 'none';
                document.getElementById('upiText').style.display = 'none';
            } else if (paymentMode === 'upi') {
                document.getElementById('tokenField').style.display = 'none';
                document.getElementById('qrButton').style.display = 'block';
            } else {
                document.getElementById('tokenField').style.display = 'none';
                document.getElementById('qrButton').style.display = 'none';
                document.getElementById('qrImage').style.display = 'none';
                document.getElementById('upiText').style.display = 'none';
            }
        }

        function copyText() {
            var copyText = document.getElementById("upiText");
            var textArea = document.createElement("textarea");
            textArea.value = copyText.innerText;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("Copy");
            document.body.removeChild(textArea);
            alert("Copied the text: " + copyText.innerText);
        }
    </script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="page-title">Admission Form</h2>
        <form action="admissions.php" method="post" id="admissionForm">
            <!-- Personal Information -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="middleName">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" name="middleName">
                </div>
                <div class="form-group col-md-4">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="uri">Unique Registration ID (URI)</label>
                    <input type="text" class="form-control" id="uri" name="uri" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="male" name="gender" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="female" name="gender" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fatherName">Father's/Guardian's Name</label>
                    <input type="text" class="form-control" id="fatherName" name="fatherName" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="fatherContact">Contact Number</label>
                    <input type="tel" class="form-control" id="fatherContact" name="fatherContact" pattern="[0-9]{10}" title="Please enter 10 digits" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="motherName">Mother's Name</label>
                    <input type="text" class="form-control" id="motherName" name="motherName">
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
            </div>
            <div class="form-group">
                <label for="PermanentAdress">Permanent Address</label>
                <textarea class="form-control" id="PermanentAdress" name="PermanentAdress" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="correspondenceAddress">Correspondence Address</label>
                <textarea class="form-control" id="correspondenceAddress" name="correspondenceAddress" rows="3"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" title="Please enter 10 digits" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="alternateMobile">Alternate Mobile Number</label>
                    <input type="tel" class="form-control" id="alternateMobile" name="alternateMobile" pattern="[0-9]{10}" title="Please enter 10 digits">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="The updates will be sent to your registered mail" required>
            </div>
            <div class="form-group">
                <label for="program">Program Applying For</label>
                <select id="program" name="program" class="form-control">
                    <option value="None">Select Program</option>
                    <option value="PROBE">PROBE</option>
                    <option value="PROBE+">PROBE+</option>
                </select>
            </div>
            <!-- Optional Fields -->
            <div class="form-group">
                <label for="occupation">Current Occupation (Optional)</label>
                <input type="text" class="form-control" id="occupation" name="occupation">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="orgName">Organisation Name (Optional)</label>
                    <input type="text" class="form-control" id="orgName" name="orgName">
                </div>
                <div class="form-group col-md-6">
                    <label for="workExp">Work Experience (Optional)</label>
                    <select id="workExp" name="workExp" class="form-control">
                        <option value="1">1 Year</option>
                        <option value="2">2 Years</option>
                        <option value="3">3+ Years</option>
                    </select>
                </div>
            </div>
            <!-- New fields for Amount and Transaction ID -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="transactionId">Transaction ID</label>
                    <input type="text" class="form-control" id="transactionId" name="transactionId" required>
                </div>
            </div>
            <div class="form-group">
                <label for="paymentMode">Payment Mode</label>
                <select id="paymentMode" name="paymentMode" class="form-control" onchange="handlePaymentModeChange()">
                    <option value="">Select Payment Mode</option>
                    <option value="campus">Pay at Campus</option>
                    <option value="upi">UPI</option>
                </select>
            </div>
            <div class="form-group token-input" id="tokenField">
                <label for="token">Enter Token Number</label>
                <input type="text" class="form-control" id="token" name="token">
            </div>
            <div class="center-button">
                <button type="button" class="btn btn-primary" id="qrButton" onclick="generateQR()">Generate QR Code</button>
            </div>
            <div class="form-group text-center">
                <img src="./img/qr.jpg" alt="QR Code" class="qr-code-img" id="qrImage">
                <div class="copyable-text upi-text" id="upiText" onclick="copyText()">paytmqr2810050501011hsbn645g8e1@paytm</div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $uri = $_POST['uri'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $fatherName = $_POST['fatherName'];
    $fatherContact = $_POST['fatherContact'];
    $motherName = $_POST['motherName'];
    $dob = $_POST['dob'];
    $PermanentAdress = $_POST['PermanentAdress'];
    $correspondenceAddress = $_POST['correspondenceAddress'];
    $mobile = $_POST['mobile'];
    $alternateMobile = $_POST['alternateMobile'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    $occupation = $_POST['occupation'];
    $orgName = $_POST['orgName'];
    $workExp = $_POST['workExp'];
    $amount = $_POST['amount'];
    $transactionId = $_POST['transactionId'];
    $paymentMode = $_POST['paymentMode'];
    $token = isset($_POST['token']) ? $_POST['token'] : '';

    $mail = new PHPMailer(true);
     $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.ibfpro.com';                     // SMTP server
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'admissions@ibfpro.com';               // SMTP username
        $mail->Password   = 'pranav@123';                        // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom('admissions@ibfpro.com', 'New Admission');
        $mail->addAddress('chaturvediakshat01@gmail.com', 'Recipient Name');     // Add a recipient


        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'New Admission Form Submission';
        $mail->Body    = nl2br("
        First Name: $firstName\n
        Middle Name: $middleName\n
        Last Name: $lastName\n
        Unique Registration ID: $uri\n
        Gender: $gender\n
        Father's/Guardian's Name: $fatherName\n
        Father's/Guardian's Contact: $fatherContact\n
        Mother's Name: $motherName\n
        Date of Birth: $dob\n
        Permanent Address: $PermanentAdress\n
        Correspondence Address: $correspondenceAddress\n
        Mobile Number: $mobile\n
        Alternate Mobile Number: $alternateMobile\n
        Email: $email\n
        Program Applying For: $program\n
        Current Occupation: $occupation\n
        Organisation Name: $orgName\n
        Work Experience: $workExp\n
        Amount: $amount\n
        Transaction ID: $transactionId\n
        Payment Mode: $paymentMode\n
        Token: $token\n");

        $mail->AltBody = "
        First Name: $firstName\n
        Middle Name: $middleName\n
        Last Name: $lastName\n
        Unique Registration ID: $uri\n
        Gender: $gender\n
        Father's/Guardian's Name: $fatherName\n
        Father's/Guardian's Contact: $fatherContact\n
        Mother's Name: $motherName\n
        Date of Birth: $dob\n
        Permanent Address: $PermanentAdress\n
        Correspondence Address: $correspondenceAddress\n
        Mobile Number: $mobile\n
        Alternate Mobile Number: $alternateMobile\n
        Email: $email\n
        Program Applying For: $program\n
        Current Occupation: $occupation\n
        Organisation Name: $orgName\n
        Work Experience: $workExp\n
        Amount: $amount\n
        Transaction ID: $transactionId\n
        Payment Mode: $paymentMode\n
        Token: $token\n";

        $mail->send();
        echo 'Request has been submitted, We will get back to you soon!';
    } catch (Exception $e) {
        echo "Request could not be processed. Please try again later! Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

    <!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Welcome to the Institute of Banking & Finance, your premier destination for comprehensive training and courses tailored for a career in banking. With a steadfast commitment to excellence, we empower individuals to thrive in the dynamic world of finance. Discover our range of programs designed to equip you with the knowledge and skills essential for success in the banking industry.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></i></a></li>
									<li><a href="#"><i class="icofont-youtube-play"></i></i></a></li>
									
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="./index.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="./about.html"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											 <li><a href="./gallery.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Gallery</a></li>
											
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="./course2.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Courses</a></li>
											<li><a href="./contact.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Drop by during our open hours to experience firsthand the expertise and support awaiting you at our institute.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Friday <span>9:00 am-07:00 pm</span></li>
									<li class="day">Sunday <span>9:00 am-05:00 pm</span></li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>Subscribe to our newsletter for the latest industry insights, course updates, and exclusive offers tailored to your banking career ambitions</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  All Rights Reserved </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
   <script>
        // Use touchend event in addition to click event
    document.getElementById('submitButton').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('admissionForm').submit();
    });

    document.getElementById('submitButton').addEventListener('touchend', function(event) {
        event.preventDefault();
        document.getElementById('admissionForm').submit();
    });
    </script>
    
    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>