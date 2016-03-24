<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<style type="text/css">
  .login{
    padding-top: 20px;
  }
  .login td{
    padding-top: 10px;
    padding-right: 10px;
  }
  .register{
    padding-top: 50px;
  }
  .register td{
    padding-top: 10px;
    padding-right: 10px;
  }
  #error{
    color: red;
    font-weight: bold;
  }


</style>
<body>

  <table class="login">
      <form action="/Main/login" method="post">
      <th>LOGIN</th>
        <tr>
          <td>Email Address:</td>
          <td> <input type="text" name="email" /></td>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" /></td>
        </tr>
        <tr>
          <td><input type="submit" value="Login" /></td>
        </tr>
      </form>

  </table>
  <div id="error">
  <?php 
  if($this->session->flashdata("login_error")) 
  {
    echo $this->session->flashdata("login_error");
  }
?>
</div>


  <table class="register">
    <form action="/Main/register" method="post">
      <th>REGISTER</th>
        <tr>
          <td>First Name:</td>
          <td><input type="text" name="firstName" placeholder="First Name" /></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input type="text" name="lastName" placeholder="Last Name" /></td>
        </tr>
        <tr>
          <td>Email Address:</td>
          <td><input type="text" name="emailAddress" placeholder="Email Address" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" placeholder="Password" /></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="passwordConfirm" placeholder="Confirm Password"  /></td>
        </tr>
        <tr>
          <td><input type="submit" value="Register" /></td>
        </tr>
    </form>
  </table>



</div>
</body>
</html>