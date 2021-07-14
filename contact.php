<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $err_msg = '';
    $complete_msg = '';

} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $err_msg = '';
    $complete_msg = '';

    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        $err_msg = '全ての項目を入力してください。';
    }

    if ($err_msg == '') {
        $to = 'cube397@gmail.com'; 
        $headers = "From: " . $email . "\r\n";

        $message .= "\r\n\r\n" . $name;

        mb_send_mail($to, $subject, $message, $headers);

        $complete_msg = '送信されました！';

        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }

}
?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--OTHER-->
    <link rel="stylesheet" href="p_style.css">
    <script src="https://kit.fontawesome.com/26f96087ab.js" crossorigin="anonymous"></script>


    <title>Contact|UNA.portfolio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="index.html"><i class="fas fa-arrow-alt-circle-left fa-lg"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto pr-5">
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="work.html">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.html">Blog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main-top bg-contact"></div>
<div class="main">
  <div class="form-text">
    <p>御用の方は以下のメールフォームからどうぞ。</p>
  </div>
  
   <?php if ($err_msg != ''): ?>
                <div class="alert alert-danger">
                    <?php echo $err_msg; ?>
                </div>
            <?php endif; ?>

            <?php if ($complete_msg != ''): ?>
                <div class="alert alert-success">
                    <?php echo $complete_msg; ?>
                </div>
            <?php endif; ?>
  
  <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control col-4" name="name" placeholder="お名前" value="<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="メールアドレス" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control col-4" name="subject" placeholder="件名" value="<?php echo $subject; ?>">
    </div>
  <div class="form-group">
    <label>Textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="本文"><?php echo $message; ?></textarea>
  </div>
  
  <button type="submit" class="btn btn-dark btn">Send</button>
</form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>