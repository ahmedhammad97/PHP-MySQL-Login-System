<?php include 'header.php';?>

<center>

  <h1>Login Form</h1>
  <br /><br /><br />

  <div id="loginForm" class="form">
    <form action="/login" method="post">
      <input type="text" name="username" placeholder="Username" required><br />
      <input type="password" name="password" placeholder="Password" required><br />
      <div class="formFooter">
        <button id="logButton">Login</button>
      </div>
    </form>
  </div>

  <br /><br /><br /><br />

  <a href="./registeration.php"><button>Register Page</button></a>

</center>

<?php include 'footer.php'; ?>
