<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Noto Sans", sans-serif;
}
body {
  background-image: url("https://img.cdn-pictorem.com/uploads/collection/E/EH4LNA1KMP/900_7ob_Trees_Moon_Lake_Moonlight_Night_Image_Manipulation_Mystic_Light_Mood_Illuminated_Night.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}
body::before{
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);
}
.container {
  box-shadow: 0px 0px 10px white;
  border-radius: 10px;
  backdrop-filter: blur(5px);
  color: #fff;
  height: 380px;
  width: 340px;
  padding: 20px;
}
.title {
  font-size: 40px;
  text-align: center;
}
.form-container .input-box  {
  position: relative ;
  display: flex;
  align-items: center;
}
.form-container .email {
  margin-top: 30px;
}
.form-container .password {
  margin-top: 20px;
}
.input-box input {
  width: 100%;
  outline: 0;
  border: 2px solid #cecece;
  border-radius: 50px;
  padding: 8px 8px 8px 15px;
  background: transparent;
  color: #fff;
  font-size: 16px;
}
input::placeholder{
  color: #fff;
}
.input-box img {
  position: absolute;
  right: 25px;
}
.remember-forgot {
  display: flex;
  justify-content: space-between;
  margin-top: 12px;
}
.forgot a {
  font-size: 15px;
  color: #fff;
}
.button {
  display: flex;
  justify-content: center;
  margin-top: 28px;
}
.button button {
  border: none;
  background-color: #fff;
  border-radius: 50px;
  color: #000;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  padding: 10px 0;
  outline: none;
  width: 100%;
}
.button button:hover {
  background-color: #cecece;
}
.register p {
  font-size: 14px;
  margin-top: 10px;
  text-align: center;
}
.register p a {
  color: #fff;
}
.register p a:hover,
.forgot a:hover {
  color: blue;
}


    </style>
</head>
<body>

<div class="container">
        <h2 class="title">Login</h2>
        <form action="{{route('loginMatch')}}" method ="POST" class="form-container">
            @csrf
            <div class="input-box email">
                <input type="email" name = "email"  id="email-input" required placeholder="Username">
                <img src="https://cdn-icons-png.flaticon.com/512/6325/6325109.png" alt="user-image" width="25px">
            </div>
            <div class="input-box password">
            <input type="password" class="form-control" id="password" name="password" required placeholder = "Password">

                <img src="https://cdn-icons-png.flaticon.com/512/2489/2489659.png" alt="lock-image" width="22px">
            </div>
            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
            </div>
            <div class="button">
                <button class="login">Login</button>
            </div>
            <div class="register">
                <p>Don't you have an account ?<a href='/register'>Register</a></p>
            </div>
        </form>
        @if($errors->any())

            <ul>
            @foreach($errors->all() as $error)
               <li> {{$error}}</li>
        @endforeach
            </ul>

            @endif

    </div>


 
</body>
</html>



