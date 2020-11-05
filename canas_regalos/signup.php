<?php
   require_once 'header.php';
     
  echo <<<_END
   <script>
     function checkUser(user){
      if (user.value== ''){
        $('#used').html('&nbsp;')
        return
    }
     $.post ( 'checkuser.php', { user: user.value},
       function(data){
         $('#used').html(data)
    }
   )
  }
 </script>
_END;

$error = $user = $pass = "";
if (isset($_SESSION['user'])) destroySession();
  
if (isset($_POST['user'])) {
  $user = sanitizeString($_POST['user']);
  $pass = sanitizeString($_POST['pass']);

  if ($user == ""|| $pass == "")
     $error = 'not all fields where entered<br><br>';
   else {
   $result = queryMysql("SELECT * FROM members WHERE user= '$user'");
     
   if ($result->num_rows)
     $error = 'that username already exist<br><br>';
   else {
     queryMysql("INSERT INTO members VALUES ('$user', '$pass')");
     die('<h4>Account created</h4>please log in.</div></body></html>');
   }
  }
 }

 echo <<<_END
      <form method='post' action='signup.php'>$error
      <div data-role = 'fieldcontain'>
        <label></label>
        por favor ingrese sus datos para registrarse
       </div>
      <div data-roler='fieldcontain'>
           <label>Nombre de usuario</label>
           <input type='text' maxlength='16' name='user' value='$user'
             onBlur='checkUser(this)'>
           <label></label><div id= 'used'>&nbsp;</div>
          </div>
          <div data-role='fieldcontain'>
            <label>contraseña</label>
            <input type='text' maxlength='16' name='pass' value='$pass'>
           </div>
           <div data-role='fieldcontain'>
             <label></label>
           <input data-transition='slide' type='submit' value='sign Up'>
         </div>
        </div>
       </body>
       </html>
       
_END;
    ?>

























