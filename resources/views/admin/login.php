
<?php
$pageTitle = 'Login';

include 'admin_reuseable/header.php';

?>
 <div class="jumbotron login-container">
      
      <div class="row ">

        <div class="left d-none d-sm-block col-12 col-sm-6 text-center float-left">
            
        </div>
        <div class="login col-12 col-sm-6 text-center float-right">
      
              <h3 class="text-center">Hi! WELCOME ADMIN</h3>
              <p class="text-danger text-center">Please Fill in your details to login</p>
              <?php
                  
                  if($error){
                    echo '<p class="text-danger text-center">--'.$error.'.--</p>';
                  }
                    

                  

              ?>
              
      
              <form class="login-form justify-content-center" action="" method="POST">
                
                    <input class="form-control" type="email" 
                    name="email" placeholder="Email..." 
                    required
                    >
               
               
                    <input class="form-control" type="password" 
                    name="password" placeholder="password..." 
                    required
                    >
                
                
                  <input class='btn btn-primary align-justify' name="login" type="submit" value="Login">
      
              </form>
      
      
          </div>
      </div>
      
  
  
  
    </div>




<?php


include 'admin_reuseable/footer.php';

?>