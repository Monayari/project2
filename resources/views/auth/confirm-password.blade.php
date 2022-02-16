<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>تایید رمز عبور</title>
</head>
<body class="body-signup">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8f8574" fill-opacity="1" d="M0,320L60,298.7C120,277,240,235,360,218.7C480,203,600,213,720,234.7C840,256,960,288,1080,282.7C1200,277,1320,235,1380,213.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

    <div  class="login-div">
        <div class="logo">
            <h1> لــــــرن </h1>
        </div>
    <p class="text-conf"> لطفا قبل از ادامه رمزعبور خود را تایید کنید! </p>

    <div class="message">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>
    <div class="fields">
        <form @submit.prevent="checkform" method="POST" action="{{ route('password.confirm') }}" class="form-forgot">

            @csrf
            <div class="username">
                <i class="fa fa-lock"></i>
                    <input id="password"  type="password"
                    name="password"
                    required autocomplete="current-password" class="user-input" placeholder=" رمزعبور">
                </div>

            <button class="signin-button" type="submit">تایید  </button>
        </form>

    </div>
</div>

</body>
</html>
