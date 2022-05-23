@extends('layouts.loginlayout')
@section ('content')
<div class="box">
    <div class="login">Login to Your Account</div>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" > <br><br>
        <label for="password">Password</label>
        <input type="password" name="pass" id="password"> <br><br>
        <!-- Butuh function untuk tombol sign in -->
        <button type="submit"><a href="dashboard">Sign In</a></button> <br> 
        <a href="sign-up"><div class="sign-up">Create Account</div></a>
    </form>
</div>

@endsection