<?php
include("../Backend/config.php");
$p=$_GET['p'];
// $page_title="Password Reset Form";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  <link rel="stylesheet" href="CSS/teacherLogin.css"></link>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
<div class="container">
  <div class="box">
    <span></span>
    <div class="content">
    <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-success">
                            <h5><?= $_SESSION['status'];?></h5>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
      <form method="post" action="../Backend/recover_email_code.php?p=<?php echo $p?>" onsubmit="return validate();">
        <h2>Reset Password</h2>
        <div class="inputBox">
          <input type="email" placeholder="Email Address" name="email" id="email" required />
        </div>
      <div class="inputBox">
        <button class="btn submit" type="submit" name="password_reset_link">Send Password Reset Link<i class="fa-solid fa-right-to-bracket icon"></i></button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
   function showHide() {
        const password = document.querySelector('.btn');
        const passwordInput1 = document.querySelector('.password');
        if (passwordInput1.type === "password") {
            passwordInput1.type = "text";
            password.innerHTML = `<i class="fa-regular fa-eye-slash"></i>`;
            passwordInput1.style.width = `${270}px`;
            console.log("inside button event show");
        } else {
            passwordInput1.type = "password";
            console.log("inside button event hide");
            password.innerHTML = `<i class="fa-regular fa-eye icon"></i>`;
        }
    }
</script>
</body>

</html>