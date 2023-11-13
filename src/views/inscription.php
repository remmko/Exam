<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<?php include "mainmenu.php"?>
<body>

    <div id="form">
    <form method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control " name ="name" id="validationServer01" placeholder="First name"  required>
     
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control " name="surename" id="validationServer02" placeholder="Last name" required>
      
    </div>
   
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Address</label>
      <input type="text" class="form-control " name ="address" id="validationServer03" placeholder="Addres" required>
   
    </div>
  
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Birthday</label>
      <input type="date" class="form-control " name = "datanaix"id="validationServer03" placeholder="Data" required>
   
    </div>
  
  </div>

  <div class="mb-3">
  <label for="formFileSm" class="form-label">Resguard</label>
  <input class="form-control form-control-sm" name ="file" id="formFileSm" type="file">
</div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
    </div>
    
</body>
</html>