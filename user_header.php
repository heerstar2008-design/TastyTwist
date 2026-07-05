    <header>
        
      <div class="logo-area"> 
            <!-- <a href="admin.php"><i class="fa-solid fa-house"></i> Admin</a> --> 

            <div class="logo-circle">
                <img src="finallogo.png" alt="Logo Icon" class="icon" >
              
            </div>
          <br>
             <!-- <a href="login.php" class="admin-link" style="margin:30px" ><i class="fa-solid fa-user-shield"></i> Admin Side</a> -->
              
        </div>

        <nav class="nav-links">
            <a href="user_homepage.php"><i class="fa-solid fa-house"></i> Home</a>
            <a href="user_about.php"><i class="fa-solid fa-circle-info"></i> About</a>
            <a href="user_login.php"><i class="custom-login-icon"></i> 
            <?php
              if(!isset($_SESSION['user']))
                {
                  
                echo "<i>Login</i>";
               
                }
                else{
                   echo $_SESSION['user']."   Login";
                }?>
            </a>
        </nav>
    </header>