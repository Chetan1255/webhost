<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="Style.css"/>
    <title>Sign-in Sign-up</title>
    <Style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    align-items: center;   
    justify-content: center;
    min-height: 100vh;
    background-image: url("../images/BG_image/BG.jpg");
    background-size: cover;
    position: relative;
    z-index: 1;
}

/* Overlay to make background lighter */
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.6); /* Adjust alpha to control lightness */
    z-index: -1;
}
a{
    text-decoration: none;
}
.container{
    width: 350px;
    height: 500px;
    background: #e0e0e0;
    border-radius: 40px;
    box-shadow: 12px 12px 24px 0 rgba(0, 0, 0, 0.2),-12px -12px 24px 0 rgba(255, 255, 255, 1);
    display: flex;
    justify-content: center;
    align-items: center;
}
.singin-sign-up{
    display: grid;
    grid-template-columns: 1fr;
}
form{
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
form.sign-up-form{
    visibility: hidden;
}
.title{
    font-size: 35px;
    color: #5ab9ea;
    margin-bottom: 10px;
    text-transform: uppercase;
}
.input-field{
    width: 280px;
    height: 50px;
    margin: 10px 0;
    background: #e0e0e0;
    border-radius: 40px;
    display: flex;
    align-items: center;
    box-shadow: inset 6px 6px 10px 0 rgba(0, 0, 0, 0.2), inset -6px -6px 10px 0 rgba(255, 255, 255, 0.5);
}
.input-field i{
    flex: 1.2;
    text-align: center;
    font-size: 20px;
    color: #999;
}
.input-field input{
    flex: 5;
    width: 100%;
    color: #999;
    font-size: 18px;
    font-weight: 600px;
    border: none;
    outline: none;
    background: none;
}
.input-field input::placeholder{
    color: #999;
}
p, a{
    font-size: 14px;
    color: #999;
}

.forgot-password{
    align-self: flex-end;
}

.btn{
    width: 130px;
    height: 45px;
    background: #e0e0e0;
    outline: none;
    border: none;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: 600px;
    margin: 20px 0;
    color: #5ab9ea;
    cursor: pointer;
    border-radius: 40px;
    box-shadow: 12px 12px 24px 0 rgba(0, 0, 0, 0.2), -12px -12px 24px rgba(255, 255, 255, 0.5);
}

.account-text{
    color: #5ab9ea;
}
.container.sign_up_mode form.sign-in-form{
    visibility: hidden;
}
.container.sign_up_mode form.sign-up-form{
    visibility: visible;
}
@media(max-width:400px){
    .container{
        width: 100vw;
        height: 100vh;
    }
}
    </style>
</head>
<body>

<?php
 
?>
<div class="container">
    <div class="singin-sign-up">
        <form action="" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="password">
                </div>
                <a href="#" class="forgot-password">Forgot password</a>
                <input type="submit" value="login" class="btn">
                <p>Don't have an account ? <a href="#" class="account-text" id="sign-up-link">Sign up</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="password">
                </div>
                <input type="submit" value="sign up" class="btn">
                <p>Already have an account ? <a href="#" class="account-text" id="sign-in-link">Sign in</a></p>
            </form>
    </div>
</div>
<script src="function.js"></script>
</body>
</html>