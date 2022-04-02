<title> </title>





<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="{{ asset('backend/css/login.css') }}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>




   <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">


        @if (isset(Auth::user()->email))
            <script>
                window.location = "/main/successregister";
            </script>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger" style="color:red">
                <h5>
                    @foreach ($errors->all() as $error)
                        <h5>{{ $error }}</h5>
                    @endforeach
                </h5>
            </div>
        @endif

        <!-- reg Form -->

        <form method="POST" action="{{ route('register') }}">
            @csrf







            <div class="user-details">
                <div class="input-box">
                  <span class="details">User Name</span>


            <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name"
       placeholder="User Name">
                </div>

                <div class="input-box">
                    
                  <span class="details">Email</span>
                  <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="email" 
                  placeholder="Email">                </div>

                



                <div class="input-box">
                    <span class="details">Password</span>
     <input type="password" id="password"  name="password" required autocomplete="new-password"
                placeholder="password">                  </div>
                  <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" id="password_confirmation"  name="password_confirmation" required
                    autocomplete="new-password"  placeholder="Confirm password">                  </div>

                <div class="input-box">
                  <span class="details">Date of Barth</span>

                  <input type="date" id="dob" name="dob"  required autofocus 
                >                </div>


                <div class="input-box">
                    <span class="details">City</span>
                    <input type="text" id="city" name="city"  required autofocus autocomplete="city"
                    placeholder="City">
                  </div>


                  <div class="input-box">
                    <span class="details">Country</span>
                  <input type="text" id="country" name="country"  required autofocus autocomplete="country"
                 placeholder="country">
                </div>






                <div class="input-box">
                  <input type="radio" value ="Active"name="activity" id="dot-1">
                  <input type="radio" value="Inactive" name="activity" id="dot-2">
                  <span class="a-title">Active/Inactive</span>
                  <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="a">Active</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="a">Inactive</span>
                  </label>
               
                  </div>
              </div>
   </div>






   
  
              <div class="button">
                <input type="submit" value="{{ __('Register') }}">
              </div>
      









            























            
        </form>





        <!-- Remind Passowrd -->
        <div id="formFooter">
          
            <a class="underlineHover"  href="{{ route('home') }}"> Back</a>
         
        </div>

    </div>
</div>
