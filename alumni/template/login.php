<!DOCTYPE html>
<html lang="en">
<?php 
include 'includes/header.php';
 ?>
    <style type="text/css">
body {
  font-family: monospace !important;
  background-color: #f1f1f1;
  padding: 0;
  margin: 0;
  height: 100vh;
  width: 100vw;
  display: grid;
  place-items: center;
  overflow-x: hidden;
  background-image: url('images/loginBg.png');
  background-size:cover;
  background-repeat:no-repeat;
}
.container {
    background-color: #fff;
    padding: 25px;
    width: 275px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 5px;
    transform: translateY(50%);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.header {
  text-align: center;
  margin-bottom: 20px;
}
.header h1 {
  font-size: 24px;
  color: #000;
}
h1 > .l {
    font-size: 30px;
    color: #021bcb;
}
label {
  font-weight: 700;
  font-size: 16px;
}
.inp {
  font-weight: 500;
  width: 100%;
  padding: 2.5px 3.75px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #132;
  border-top: 0;
  border-left: 0;
  border-right: 0;
}
.inp,
.inp:focus {
  outline: none;
}
button {
  background-color:#021bcb;
  color: white;
  padding: 12px 20px;
  margin: 8px 0;
  width: 100%;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  opacity: 0.925;
}
button:hover {
  opacity: 1;
}
.signup {
  width: 250px;
  padding: 0 7.5px;
  text-align: center;
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
}
.signup a {
  font-weight: 800;
  color: #021bcb;
  text-decoration: none;
}
.signup a:hover {
  text-decoration: underline;
}

    </style>
<body>
    
    
    <!-- Cloned from "https://www.facebook.com/groups/340398917711992/permalink/1083432650075278/" -->
<div class="container">
  <div class="header">
    <h1><span class="l">L</span>OGIN</h1>
  </div>
  <form id="login_form">
    <label for="uname">Email</label>
    <input name="email" type="text" class="inp" required>
    <label for="psw">Password</label>
    <input type="password" class="inp" name="password" required>
    <button type="submit">Enter</button>
  </form>
  <div class="signup">
    <b>Don't have account?</b>
    <a href="?register=<?php echo date("Y-m-d") ?>" >Sign up</a>
  </div>
</div>
    
<?php 
include 'includes/scripts.php';
 ?>
 <script type="text/javascript">
     $("#login_form").submit(function(e){

         e.preventDefault();

         const form_data = new FormData(this);

         form_data.append('submit_login', 'true');

          $.ajax({  url:'includes/queries.php',

                    type: "POST",

                    data: form_data,

                    contentType: false,

                    cache: false,

                    processData:false,

                    success: function(data){

                      console.log(data)
                      if (parseInt(data) > 0) {

                         Swal.fire({

                                  title: 'Login Successfull',

                                  text: "Welcome session Started",

                                  icon: 'success',
                                  showConfirmButton: false,
                                  timer: 3000

                             });

                             window.location.href="?w=true";

                      }else{

                         Swal.fire({

                          

                                  title: 'Login Failed',

                                  text: "Invalid Username / Password",

                                  icon: 'warning',
                                  showConfirmButton: false,
                                  timer: 3000

                             })

                      }

                    }

                 });

        });
 </script>
</body>
</html>