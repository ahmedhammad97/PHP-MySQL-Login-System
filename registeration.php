<?php include 'header.php';?>

<center>

  <h1>Register Form</h1>
  <br /><br /><br />

  <div id="registerForm" class="form">
    <form action="/register" method="post">
      <input type="text" name="id" placeholder="User ID" required><br />
      <input type="email" name="email" placeholder="Email" required><br />
      <input type="text" name="username" placeholder="Username" required><br />
      <input type="password" name="password" placeholder="Password" required><br />
      <div class="formFooter">
        <button id="regButton">Register</button>
      </div>
    </form>
  </div>

  <br /><br /><br /><br />

  <a href="./login.php"><button>Login Page</button></a>

</center>

<?php include 'footer.php'; ?>
