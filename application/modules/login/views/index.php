<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Material Design Login Form</title>
  
  
  
      <link rel="stylesheet" href="<?php echo public_url('temp');?>/login/css/style.css">

  
</head>

<body>
  <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="<?php echo public_url('temp');?>/login/images/admin.png" alt="Avatar" /> 
    </button>
    <div class="login-err">
        <?php echo validation_errors(); ?>
    </div>
    <form method="post" action="<?php echo base_url('login/verify_login') ?>">
        <div class="profile__form">
        <div class="profile__fields">
            <div class="field">
            <input type="text" id="fieldUser" name="username" class="input" required pattern=.*\S.* />
            <label for="fieldUser" class="label">Username</label>
            </div>
            <div class="field">
            <input type="password" id="fieldPassword" name="password" class="input" required pattern=.*\S.* />
            <label for="fieldPassword" class="label">Password</label>
            </div>
            <div class="profile__footer">
            <div class="button raised blue">
                <div class="center" fit>
                    <button class="login-btn" type="submit">Login</button>
                </div>
                <paper-ripple fit></paper-ripple>
            </div>
            </div>
        </div>
        </div>
     </form>
  </div>
</div>
  
    <script src="<?php echo public_url('temp');?>/login/js/index.js"></script>

</body>
</html>
