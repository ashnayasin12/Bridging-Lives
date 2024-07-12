<!DOCTYPE html>
<html lang="en">

<head>

    <title>BRIDGING LIVES</title>

    <link rel="stylesheet" href="css/style_d.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">


</head>

<body>
    <section class="nav" id="navbar">
        <nav class="navbar">
            <div class="first">
                <div class="logo">
                    <img src="logo.png" />
                </div>
                <div class="logo_txt">
                    <h3>REGISTRATION</h3>
                </div>
            </div>
        </nav>
    </section>

    <div class="logincontainer">
        <form action="insert_don.php" id="registrationForm" method="post">
            <div class="center">
                <div class="left">
                <div class="field">
                    <label for="firstName" id="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName">
                </div>
                <div class="field">
                    <label for="email" id="email">E-mail</label>
                    <input type="email"  id="email" name="email">
                </div>
                <div class="field">
                    <label for="weight">Weight</label>
                    <input type="number" id="weight" name="weight" min="50" max="">
                </div>
                <div class="field password-field">
                    <label for="password">Password</label>
                    <div class="password-input-container">
                        <input type="password" id="password" name="password">
                        <i class="fa fa-eye-slash toggle-password"></i>
                    </div>
                </div>
                
            
                <div class="field">
                <label for="district" id="district">District</label>
                <select id="district" name="district">
                    <option value="alappuzha">Alappuzha</option>
                    <option value="ernakulam">Ernakulam</option>
                    <option value="idukki">Idukki</option>
                    <option value="kannur">Kannur</option>
                    <option value="kasaragod">Kasaragod</option>
                    <option value="kollam">Kollam</option>
                    <option value="kottayam">Kottayam</option>
                    <option value="kozhikode">Kozhikode</option>
                    <option value="malappuram">Malappuram</option>
                    <option value="palakkad">Palakkad</option>
                    <option value="pathanamthitta">Pathanamthitta</option>
                    <option value="thiruvananthapuram">Thiruvananthapuram</option>
                    <option value="thrissur">Thrissur</option>
                    <option value="wayanad">Wayanad</option>
                </select>
            </div>
            
            </div>
            <div class="right">
                <div class="field">
                    <label for="lastName">Last Name</label>
                    <input type="text"  id="lastName" name="lastName" >
                </div>
                <div class="field">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" min="1959-01-01" max="2006-12-31">

                </div>
                <div class="field">
                    <label for="bloodType">Blood Type</label>
                    <select id="bloodType" name="bloodType" class="field">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="other">Other (Please specify)</option>
                    </select>
                    <input type="text" id="otherBloodType" name="otherBloodType" style="display: none;" class="field">
                </div>
                <div class="field">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="number" id="phoneNumber" name="phoneNumber">
                </div>
                
                <div class="field">
                    <label for="townCity">Town/City</label>
                    <input type="text"  id="townCity" name="townCity">
                </div>
                </div>
                </div>
                <div class="form-footer">
                     <button class="reg-btn" onclick="checkWeight(); validatePhoneNumber(); validateForm(); signupRedirect()">Sign Up</button>
                <div class="last">
                    <span>Already have an account ? <a href="login_d.html">Log In</a></span>
                </div>
                </div>
               
            
        </form>
        
                        
    
    </div>
    <script src="script/script_d.js"></script>
    </body>
    </html>
