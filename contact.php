  <?php
  include 'navbar.php';
  ?>
  <?php
    include 'config.php';?>
<style type="text/css">
   
    .contact{
        font-family: 'Supermercado One', cursive;
        position: relative ;
        min-height: 100vh;
        padding: 50px 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background:url(./images/contact.jpg) ;
        background-repeat: no-repeat;
          background-size: cover;
    }
    .contact .content{
       max-width: 800px;
       text-align: center; 
    }
    .contact .content h2{
        font-size: 36px;
        font-weight: 500;
        color: #fff;

    }
    .contact .content p{
     
        font-weight: 300;
        color: #fff;
        
    }
    .containe{
       width: 100%;
       display: flex;
       justify-content: center;
       align-items: center; 
       margin-top: 30px;
    }
    .containe .contactInfo{
        width: 50%;
        display: flex;
        flex-direction: column;


    }
    .containe .contactInfo .boxs{
        position: relative;
        padding: 20px 0;
        display: flex;
    }
    .containe .contactInfo .boxs .icons{
        min-width: 60px;
        height: 60px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: 22px;
    }
    .containe .contactInfo .boxs .texts{
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: #fff;
            flex-direction: column;
            font-weight: 300;
    }
    .containe .contactInfo .boxs .texts h3{
            font-weight: 500;
            color: #C0392B;
    }
    .contactForm{
        width: 40%;
        padding: 40px;
        background: #fff;
    }
    .contactForm h2{
        font-size: 30px;
        color: #333;
        font-weight: 500;
    }
    .contactForm .inputBox{
         position: relative;
         width: 100%;
         margin-top: 10px;

    }
     .contactForm .inputBox input,textarea{
            width: 100%;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            

     }
     .contactForm .inputBox textarea{
        resize:none ;
     }
     .contactForm .inputBox span{
            position:absolute ;
            left: 0;
             padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
     }
     .contactForm .inputBox input:focus ~ span,.contactForm .inputBox input:valid ~ span,
       .contactForm .inputBox textarea:focus ~ span,.contactForm .inputBox textarea:valid ~ span 
     {
            color: #e91e63;
            font-size: 12px;
            transform: translateY(-20px);
     }
     .contactForm .inputBox input[type="submit"]{
        width: 100px;
        background: #C0392B;
        color: #fff;
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;

     }
     @media (max-width: 991px){
        .contact {
            padding: 50px;
        }
        .containe{
          flex-direction: column;
            
        }
         .containe .contactInfo{
            margin-bottom: 40px;
         }
         .containe .contactInfo{
          width: 100%;  
         }
         
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



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">


    <title>bank management system</title>

  </head>

  <body>
 
        <section class="contact">
            
                <div class="content">
                    <h2>Contact Us</h2>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
                <div class="containe">
                    <div class="contactInfo">
                        <div class="boxs">
                            <div class="icons">
                              <i class="fas fa-map-marker-alt"></i>         
                            </div>
                            <div class="texts">
                                <h3>Address</h3>
                                <p>608 A allahapur <br>matiyara road <br>
                                Allahabad
                                </p>
                            </div>                          
                        </div>


                        <div class="boxs">
                            <div class="icons">
                                <i class="fas fa-envelope-square"></i>
                            </div>
                            <div class="texts">
                                <h3>Email</h3>
                                <p>Soumyakesarwani70@gmail.com
                                </p>
                            </div>                          
                        </div>


                        <div class="boxs">
                            <div class="icons">
                               <i class="fas fa-phone-square-alt"></i> 
                            </div>
                            <div class="texts">
                                <h3>Phone</h3>
                                <p>567-678-4563
                                </p>
                            </div>                          
                        </div>
                    </div>
        <?php
     if(isset($_POST['submits'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $sql="insert into contact(name,email,msg) values('{$name}','{$email}','{$msg}')";
    $results=mysqli_query($conn,$sql);
    if($results){
               echo "<script> alert('Hurray!message send!!!!');
                               window.location='transfermoney.php';
                     </script>";}}
                     ?>
                    <div class="contactForm">
                        <form action="" class="form" method="post">
                            <h2>Send Message</h2>
                            <div class="inputBox">
                                <input type="text" name="name" required>
                                <span>Full Name</span>

                            </div>
                            <div class="inputBox">
                                <input type="email" name="email" required>
                                <span>Email</span>
                                
                            </div>
                            <div class="inputBox">
                                <textarea name="msg" required></textarea>
                                <span>Type Your Message...</span>
                                
                            </div>
                            <div class="inputBox">
                                <input type="submit" name="submits" value="submit">
                                
                                
                            </div>
                        </form>
                    </div>
                </div>
        </section>



<?php
  include 'footer.php';
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></script>
   
  </body>
</html>

    
