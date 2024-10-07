<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

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

        body::before {
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
            width: 400px;
            padding: 20px;
        }

        .title {
            font-size: 40px;
            text-align: center;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            outline: 0;
            border: 2px solid #cecece;
            border-radius: 50px;
            padding: 8px 15px;
            background: transparent;
            color: #fff;
            font-size: 16px;
        }

        input::placeholder {
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

    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form action="{{ route('registerSave') }}" method="POST">
            @csrf
            <div class="input-box">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
            </div>
            
            <div class="input-box">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
            </div>

            <div class="input-box">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required placeholder="City">
            </div>

            <div class="input-box">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required placeholder="Address">
            </div>

            <div class="input-box">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
            </div>

            <div class="input-box">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password">
            </div>

            <div class="button">
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </div>

        </form>

        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
