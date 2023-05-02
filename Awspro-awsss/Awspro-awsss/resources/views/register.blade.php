<link rel="stylesheet" href="{{ asset('css/signup.css') }}">

<body>

    <div id="container">
     <!-- Form Wrap Start -->
     <div class="form-wrap">
       <h1>Sign Up</h1>
       <p>Regser for free </p>
       <!-- Form Start -->

       <form action="/register" method="post">
        @csrf
         <div class="form-group">
           <label for="first-name">Full Name</label>
           <input type="text" name="name" id="first-name">required
         </div>

         <div class="form-group">
           <label for="email">Email</label>
           <input type="email" name="email" id="email"required>
         </div>
         <div class="form-group">

         		<label for="country"country>Role</label>

         <select id="country" name="role_id" required>
			<option value="">Select your"Role</option>
			<option value="2">Manager</option>
			<option value="3">Creator</option>
 		</select>
    </div>

         <div class="form-group">
           <label for="password">Password</label>
           <input type="password" name="password" id="password" required>
         </div>
         <div class="form-group">
            <label for="password_confirmation ">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
          </div>

         <button type="submit">Sign Up</button>
         <p class="bottom-text">
           By Clicking the Sign Up Button, you agree to our
           <a href="#">Term & Conditions</a> and <a href="#">Primary Policy</a>
         </p>
       </form>
       <!-- Form Close -->
     </div>
     <!-- Form Wrap Close -->
     <footer>
       <p>Already Have an Account? <a href="/" id="login-link">Login Here</a></p>
     </footer>
   </div>
 </body>
