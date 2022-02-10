  <?php
  include 'navbar.php';
  ?>
<?php
    include 'config.php';?>

<style type="text/css">
  .bbb{

     background: url('./images/user.jpg') no-repeat center;
  background-size: cover;
  margin-top: 0px;

  }
  .login-wrapper {
        font-family: 'Supermercado One', cursive;

  display: flex;
  justify-content: center;
  align-items: center;
}
.form {

   margin-bottom: 100px;
   margin-top: 100px;
  position: relative;
  width: 100%;
  max-width: 500px;
  padding: 80px 40px 40px;
  background: rgba(0,0,0 ,0.7);

  border-radius: 10px;
  color: #fff;
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
}
.form::before {
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255,255,255, 0.08);
  transform: skewX(-26deg);
  transform-origin: bottom left;
  border-radius: 10px;
  pointer-events: none;
}
.form img {
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
  width: 100px;
  background: rgba(255,255,255, 0.8);
  border-radius: 50%;
}

.form .input-group {
  position: relative;
}
.form .input-group input {
  width: 100%;
  padding: 10px 0;
  font-size: 1rem;
  letter-spacing: 1px;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background-color: transparent;
  color: inherit;
}
.form .input-group label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 1rem;
  pointer-events: none;
  transition: .3s ease-out;
}
.form .input-group input:focus + label,
.form .input-group input:valid + label {
  transform: translateY(-18px);
  color: #ff652f;
  font-size: .8rem;
}
.submit-btn {
 width: 100px;
        background: #C0392B;
        color: #fff;
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;
  cursor: pointer;
}

</style>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>bank management system</title>
    
  </head>

  <body>
    <?php
     if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";}}
                     ?>
 <div class="bbb">
 <div class="login-wrapper">
    <form action="" class="form" method="post">
     
      
      <div class="input-group">
        <input type="text" name="name" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="email" name="email"  required>
        <label for="loginPassword">Email</label>
      </div>
      <div class="input-group">
        <input type="number" name="balance" required>
        <label for="loginPassword" >Balance</label>
      </div>
      <input type="submit" value="Submit" class="submit-btn" name="submit">
      <input type="Reset" value="Reset" class="submit-btn" name="reset">
       </form>

    
  </div>
</div>

 <?php
  include 'footer.php';
  ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>