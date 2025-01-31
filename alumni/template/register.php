<!DOCTYPE html>
<html lang="en">
<?php 
include 'includes/header.php';
 ?>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
      background-image: url('images/loginBg.png');
    background-size: cover;
    background-position: center;
}

/*.box{
    position: relative;
    width: 370px;
    height: 450px;
    background: #1c1c1c;
    border-radius: 50px 5px;
    overflow: hidden;
}*/

.box::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 370px;
    height: 450px;
    background: linear-gradient(60deg, transparent, #45f3ff, #45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}

.box::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 370px;
    height: 450px;
    background: linear-gradient(60deg, transparent, #d9138a, #d9138a);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}

@keyframes animate{
    0% { transform: rotate(0deg);}
    100% { transform: rotate(360deg);}
}

form{
    position: absolute;
    inset: 2px;
    border-radius: 50px 5px;
    background: #28292d;
    z-index: 10;
    padding: 30px 30px;
    display: flex;
    flex-direction: column;
}

h2{
    color: #45f3ff;
    font-size: 35px;
    font-weight: 500;
    text-align: center;
}

.input-box{
    position: relative;
    width: 300px;
    margin-top: 35px;
}

.input-box input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: .05em;
    z-index: 10;
}

input[type="submit"]{
    font-size: 20px;
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 5px;
    margin-top: 40px;
    border-radius: 90px;
    font-weight: 600;
    cursor: pointer;
}

input[type="submit"]:active{
    background: linear-gradient(90deg, #45f3ff, #d9138a);
    opacity: .8;
}

.input-box span{
    position: absolute;
    left: 0;
    padding: 20px 10px 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: .05em;
    transition: .5s;
}

.input-box input:valid ~ span,
.input-box input:focus ~ span{
    color: #45f3ff;
    transform: translateX(-10px) translateY(-30px);
    font-size: .75em;
}

.input-box i{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: rgb(69, 243, 255);
    border-radius: 4px;
    transition: .5s;
    pointer-events: none;
    z-index: 9;
}

.input-box input:valid ~ i,
.input-box input:focus ~ i{
    height: 44px;
    background: rgba(69, 243, 255, .5);
}

.links{
    display: flex;
    justify-content: space-between;
}

.links a{
    margin: 25px 0;
    font-size: 1em;
    color: #8f8f8f;
    text-decoration: none;
}

.links a:hover,
.links a:nth-child(2){
    color: #45f3ff;
}

.links a:nth-child(2):hover{
    color: #d9138a;
}
.box {
    position: relative;
    width: 1000px;
    height: 88vh;
    background: #1c1c1c;
    border-radius: 50px 5px;
    overflow: hidden;
}
@media screen and (max-width: 1440px) and (min-width: 800px) {
    .box {
        position: relative;
        width: 1000px;
        height: 107vh;
        background: #1c1c1c;
        border-radius: 50px 5px;
        overflow: hidden;
    }
}
@media screen and (max-height: 740px) and (min-height: 500px){
     .box {
        height: 130vh;
    }
}
@media screen and (max-width: 768px) and (min-width: 430px) {
    .box {
        position: relative;
        height: 96vh;
        background: #1c1c1c;
        border-radius: unset;
        overflow-y: hidden;
    }
}

@media screen and (max-width: 425px) and (min-width: 100px) {
    .box {
        position: relative;
        height: 190vh;
        background: #1c1c1c;
        border-radius: unset;
        overflow-y: unset;
    }
}

@media screen and (max-width: 768px) and (min-width: 430px) {
    .box {
        position: relative;
        height: 106vh;
        background: #1c1c1c;
        border-radius: unset;
        overflow-y: hidden;
    }
}

    </style>
<body>
    <div class="box">
        <form id="login_form">
            <h2>Alumni Registration</h2>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                     <h5 style="color:white">Personal Information</h5>
                    <div class="form-group">
                        <small style="color:white;">Given Name:</small>
                        <input type="text" name="gname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Middle Name:</small>
                        <input type="text" name="mname" class="form-control" >
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Last Name:</small>
                        <input type="text" name="lname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Contact:</small>
                        <input type="text" name="contact" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Home Address:</small>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Gender:</small>
                                <select name="gender" class="form-control" required>
                                    <option selected disabled value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Birthdate:</small>
                                <input type="date" name="bdate" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Batch Year:</small>
                                <select class="select2 form-control" name="batchyear">
                                  <option selected disabled value="">Select Batch Year</option>
                                  <?php 
                                      for ($i=date('Y'); $i > '1960' ; $i--) { 
                                        $ii = $i -1;
                                   ?>
                                   <option value="<?php echo $i.'-'.$ii ?>"><?php echo $i.'-'.$ii ?></option>
                                   <?php 
                                      }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <small style="color:white;">Profile Picture:</small>
                      <input type="file" name="profile_picture" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <small style="color:white;">Civil Status:</small>
                      <select name="mar_status" class-"form-control" style="padding:5px;border-radius:10px;width:100%;">
                          <option value="" selected disabled>Select Civil Status</option>
                          <option value="Single" >Single</option>
                          <option value="Married" >Married</option>
                          <option value="Widow" >Widow</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <h5 style="color:white;">Highest Educational Attainment</h5>
                    <div class="form-group">
                        <small style="color:white;">Degree/Course:</small>
                        <input type="text" name="hea" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Year:</small>
                                <input type="text" name="hea_year" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Award:</small>
                                <input type="text" name="hea_award" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <h5 style="color:white">Employment Information</h5>
                    <div class="form-group">
                        <small style="color:white;">Company/Agency:</small>
                        <input type="text" name="emp_company" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Position:</small>
                                <input type="text" name="emp_position" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Employment Length :</small>
                                <input type="text" name="emp_year" class="form-control">
                            </div>  
                        </div>
                    </div>
                    <h5 style="color:white">Login Credential</h5>
                    <div class="row">
                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Email Address:</small>
                                <input type="text" name="user_email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                    <small style="color:white;">Password:</small>
                                    <div style="position: relative;">
                                        <input type="password" id="p1" name="password" class="form-control" required>
                                        <i id="togglePassword1" class="fa fa-eye" style="position: absolute; top: 50%; right: 10px; cursor: pointer; transform: translateY(-50%);"></i>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <small style="color:white;">Re-Password:</small>
                                    <div style="position: relative;">
                                        <input type="password" id="p2" name="repassword" class="form-control" required>
                                        <i id="togglePassword2" class="fa fa-eye" style="position: absolute; top: 50%; right: 10px; cursor: pointer; transform: translateY(-50%);"></i>
                                    </div>
                                </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                     <div class="links">
                        <a href='?login=ss'>Go Back To Login</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <div class="form-group">
                        <button class="btn btn-md btn-secondary float-right">Submit Registration</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php 
include 'includes/scripts.php';
 ?>
 <script type="text/javascript">
     $("#login_form").submit(function(e){
         e.preventDefault();
         pass1 = $('#p1').val();
         pass2 = $('#p2').val();
         if (pass1 == pass2) {
            const form_data = new FormData(this);
             form_data.append('register_alumni', 'true');
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
                                        title: 'Registration Successful',
                                        text: "Your Application Is being reviewed",
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then(function() {
                                        window.location.href = "?login=login";
                                    });
                          }else{
                             Swal.fire({
                                      title: 'Registration Failed!',
                                      text: "Try Again Later!",
                                      icon: 'warning',
                                      showConfirmButton: false,
                                      timer: 3000
                                 })
                          }
                        }
                     });
         }else{
            Swal.fire({
                      title: 'Password Does Not Match',
                      text: "Please Try Again",
                      icon: 'warning',
                      showConfirmButton: false,
                      timer: 3000
                 })
         }
        });
      // Toggle for first password field
    document.getElementById('togglePassword1').addEventListener('click', function () {
        var passwordInput = document.getElementById('p1');
        var icon = this;
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    // Toggle for re-password field
    document.getElementById('togglePassword2').addEventListener('click', function () {
        var passwordInput = document.getElementById('p2');
        var icon = this;
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
 </script>
</body>
</html>