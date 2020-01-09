<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container-fluid">
  <br>
  <img src="logo.png" height="80">
  <br><br>

  <h1>Login Sistem</h1>

  <form action="" method="post">
    
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" placeholder="Masukan username anda" id="username" required="yes" autocomplete="off" autofocus="yes">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" placeholder="Masukan password anda" id="password" required="yes">
    </div>

    <button type="submit" class="btn btn-primary">Masuk</button> 

  </form>
</div>

</body>
</html>
