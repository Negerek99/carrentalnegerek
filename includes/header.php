
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/logo.png" alt="image" width="250" height="70" /></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 <div class="login_btn" style="margin-top: 40px;"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Logowanie/Rejestracja</a> </div>
<?php }
else{

echo "Witamy w naszej wypozyczalni";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Ustawienia profilu</a></li>
              <li><a href="update-password.php">Zmien haslo</a></li>
            <li><a href="my-booking.php">Moje rezerwacje</a></li>
            <li><a href="logout.php">Wyloguj</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Ustawienia profilu</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Zmien haslo</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Moje rezerwacje</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Wyloguj</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Strona Glowna</a></li>
          <li><a href="car-listing.php">Lista pojazdow</a>
          <li><a href="contact-us.php">Kontakt</a></li>

        </ul>
      </div>
    </div>
  </nav>

</header>
