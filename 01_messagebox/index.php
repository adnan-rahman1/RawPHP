<?php include 'db.php'; ?>
<?php
  $query = 'select * from messages order by id desc';
  $output = mysqli_query($connection, $query); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>MessageBox</title>
  <style media="screen">
    ul { height: 550px; }
    .overflow-scroll { overflow: scroll; }
  </style>
</head>
<body>
  <div class="container"><br><br>
    <div class="row">
      <div class="offset-1 col-4">
        <form class="" action="validate.php" method="post">
          <div class="form-group">
            <input type="text" placeholder="Name" class='form-control' name='user_name'>
          </div>
          <div class="form-group">
            <input type="text" placeholder="Message" class='form-control' name="user_message" value="">
          </div>
          <input type="submit" name='submit' value='Send' class='btn btn-sm btn-primary'>
        </form>
      </div>
      <div class="card  border-primary col-6">
        <ul class="card-body overflow-scroll list-unstyled">
          <?php while ($row = mysqli_fetch_assoc($output)): ?>
            <li><?php echo $row['time'] ?> - <strong><?php echo $row['name'] ?>:</strong> <?php echo $row['message'] ?></li><hr>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
