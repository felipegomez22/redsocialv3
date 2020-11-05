<?php
  require_once 'index.php';
  $error = $user = $pass = "";
  
  if (isset($_POST['nombre']))
  {
    $user = sanitizeString($_POST['nombre']);
    $pass = sanitizeString($_POST['pass']);
  
  if ($user == "" || $pass == "")
     $error = 'not all fields were entered';
  else
  {
    $result = queryMySQL("SELECT nombre,pass FROM empleados
      WHERE nombre='$user'  AND pass='$pass'");
   if ($result->num_rows == 0)
   {
    $error = "invalid login attempt";
   }
   else
   {
    $_SESSION['nombre'] = $user;
    $_SESSION['pass'] = $pass;
    die("<div class='center'> you are now logged in. please
    <a data-transition='slide' href='index.php?view=$user'>click here</a>
    to continue.</div></div></body></html>");
  }
 }
} 

echo <<<_END
     <form method='post' action='ingresar.php'>
        <div data-role='fieldcontain'>
        <label></label>
        <span class='error'>$error</span>
       </div>
       <div data-role='fieldcontain'>
          <label></label>
       please enter your details to log in
       </div>
        <div data-role='fieldcontain'>
          <label>Username</label>
          <input type='text' maxlength= '16' name='user' value='$user'>
         </div>
         <div data-role='fieldcontain'>
           <label>Password</label>
          <input type='password' maxlength= '16' name='pass' value='$pass'>
           </div>
          <div data-role='fieldcontain'>
            <label></label>  
          <input data-transition='slide' type='submit' value='Login'>
          </div>
          </form> 
         </div> 
       </body> 
     </html>
_END;
    ?> 