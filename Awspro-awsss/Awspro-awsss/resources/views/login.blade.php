<
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<body>

   <div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      <h1>LOGIN</h1>
      <p> admin </p>
      <!-- Form Start -->

      <form method="POST" action="/login">
        @csrf

        <div class="form-group">
          <label for="uname">email</label>
          <input type="text" name="email" placeholder="">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="">
          <i class="fa-solid fa-eye" id="eye"></i>
        </div>

        <center><button type="submit">Sign in</button><center>

      </form>
    </div>

  </div>
</body>
