<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body>
  <?php include "dbconnect.php"; ?>
  
  <div class="container">
  <div class="mt-3  jumbotron">
    <h1>Insert Data</h1>
  </div>
  <form class="mt-4 pt-4" action="http://localhost/apps/git_repositories/PHP-Web-Service/" method="POST">
    <input type="text" name="tag" hidden value="addstudent">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="name" placeholder="name">
    </div>
  
    <div class="form-group">
      <label for="">Location</label>
      <input type="text" class="form-control" name="location" placeholder="location">
    </div>

    <div class="form-group">
      <label for="">Course</label>
      <input type="text" class="form-control" name="course" placeholder="course">
    </div>
    
    <button class="btn btn-defualt" type="submit">Add Data</button>

      
  </form>

    </div>


</body>
</html>