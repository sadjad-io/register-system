<!doctype html>
<html dir="rtl" lang="fa">
<head>
   <title> Sadjad I/O </title>
   <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
   <meta charset="utf-8" />
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>

<body>
  <div class="background-image"></div>
  <div class="logo">
    <span class="tooltiptext">
      سجاد آی او سلسله گردهمایی هایی برای علاقه مندان به مهندسی و علوم کامپیوتر است که در آن به تبادل اطلاعات با یکدیگر میپردازند و زمینه ای برای آشنایی با دیگر افراد در حوزه های مرتبط میباشد.
    </span>
     <img class="logopic" src="img/logo.png" width="347px" height="248px">
  </div>
  <div class="butt">
    <button id="myBtn" autofocus>من هم شرکت میکنم <i class="fa fa-hand-peace-o" aria-hidden="true"></i></button>
  </div>
<p style="color:white;font-size:20px;font-family: Shabnam;text-align: center;">همایش به پایان رسید !</p>

  <!-- sign up form -->
  <div id="myModal" class="modal">
   <div class="modal-content">
      <form action="" method="post">
        <i class="fa fa-times close" aria-hidden="true"></i>
        <input name="name" placeholder="اسم و فامیل شما">
        <input name="phone" placeholder="شماره همراه">
        <button id="enter" type="submit" autofocus>ورود اطلاعات</button>
      </form>
  </div>
</div>
<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function()
{
    modal.style.display = "block";
}
span.onclick = function()
{
    modal.style.display = "none";
}
window.onclick = function(event)
{
    if (event.target == modal)
     {
        modal.style.display = "none";
    }
}

</script>
</body>

</html>
<?php

database info
define('DB_HOST', 'localhost');
define('DB_NAME', '');
define('DB_USER','');
define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
mysqli_query($con ,"SET CHARACTER SET utf8;");
mysqli_query($con ,"SET SESSION collation_connection = 'utf8_persian_ci'");
// varible info
if(isset($_POST['name']) && isset($_POST['phone'])) {
	 $name_IO = $_POST['name'];
	 $phone_IO = $_POST['phone'];
	
	$insert = "INSERT INTO users (name, phone)
	VALUES ('$name_IO','$phone_IO')";
	
	if (mysqli_query($con,$insert))
	{
             echo "<p style=\"color:white;font-size:25px;font-family: Shabnam;text-align: center;\">منتظرتیم پس :)</p>";
             if ($result = mysqli_query($con, "SELECT * FROM users")) {
		    $row_cnt = mysqli_num_rows($result);
		    echo "<p style=\"color:white;font-size:20px;font-family: Shabnam;text-align: center;\">تعداد افراد ثبت نام کرده : $row_cnt<p>";
		    mysqli_free_result($result);
   	 }

	}
	else
	{
	   echo "<p style=\"color:white;font-size:25px;font-family: Shabnam;text-align: center;\">شماره شما قبلا ثبت شده است ! یا اطلاعات را درست وارد نکردید !</p>";
	    //echo "Error: " . $insert . "<br>" . mysqli_error($con);
	}
	
}
else {
 if ($result = mysqli_query($con, "SELECT * FROM users")) {
    $row_cnt = mysqli_num_rows($result);
    echo "<p style=\"color:white;font-size:20px;font-family: Shabnam;text-align: center;\">تعداد افراد ثبت نام کرده : $row_cnt</p>";
    mysqli_free_result($result);
  }
  
}
