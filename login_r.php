<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style_login_r.css" />
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
                    <h1 class="anta-regul">BRIDGING LIVES</h1>
                </div>
            </div>
        </nav>
    </section>

    <div class="container">
        <div class="login">
            <form action="javascript:void(0)">
                <div class="left">
                    <div class="field">
                        <label for="name">Email</label>
                        <input type="email">
                    </div>
                    <div class="field">
                        <label for="name">Password</label>
                        <input type="password">
                    </div>
                </div>
                <div class="form-footer">
                    <button class="reg-btn">Log In</button>
                    <div class="last">
                        <span><a>I Forgot My Password</a></span>
                        <span>Don't have an account ? <a href="signup_rec.php">Sign Up</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="script/script_login_r.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
