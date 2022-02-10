  <?php
  include 'navbar.php';
  ?>
 



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Our Services</title>
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
        background:url(./images/bank.jpg),#222 ;

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






 .about-box-main{
     padding: 70px 0px;
}
 

 .service-block-inner {
     padding: 40px 20px;
     position: relative;
     margin-bottom: 30px;
}




.service-block-inner::before {
     content: "";
     width: 100%;
     height: 5px;
     border-radius: 0px;
     background: #000000;
     position: absolute;
     top: 0;
     left: 0;
     transition: all 0.5s ease 0s;
}
 .service-block-inner::after {
     content: "";
     width: 100%;
     height: 0;
     border-radius: 0px;
     background:#C0392B;
     position: absolute;
     top: 0;
     left: 0;
   z-index: -1;
     transition: all 0.5s ease 0s;
}
 .service-block-inner h3 {
    top:10px;
     font-size: 24px;
     text-transform: uppercase;
     font-weight: 600;

}
 .service-block-inner p {
     margin: 0px;
     font-size: 16px;
     font-weight: 300;
     padding-bottom: 0px;
}
 .service-block-inner:hover::after {
     height: 100%;
}

.service-block-inner:hover h3{
  color: #ffffff;
  transition: all 0.5s ease 0s;
}

.service-block-inner:hover p{
  color: #ffffff;
  transition: all 0.5s ease 0s;
}


</style>

  </head>

  <body>
 


<!-- Start About Page  -->
<section class="contact">
            
                <div class="content">
                    <h2>Our Services</h2>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
                <div class="container" style="margin-top:100px;">
                    <div class="row"style="margin-top:50px;">
                        <div class="col-2">
                            <div class="card" style="width: 12rem; text-align: center; justify-content: center;align-items: center;background: #000;color: #fff ;" >
                                  <img src="./images/i5.jpg" class="card-img-top"  style="border-radius: 50%;height: 80px;width: 80px;margin-top: 30px;">
                                  <div class="card-body">
                                    <h5 class="card-title">Money Calculations</h5>
                                    <p class="card-text" style="font-size: 10px;margin-bottom: 10px;">Some quick example text to build on the card title .</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card" style="width: 12rem; text-align: center; justify-content: center;align-items: center;background: #000;color: #fff ;" >
                                  <img src="./images/i1.png" class="card-img-top"  style="border-radius: 50%;height: 80px;width: 80px;margin-top: 30px;">
                                  <div class="card-body">
                                    <h5 class="card-title">Quick and Easy</h5>
                                    <p class="card-text" style="font-size: 10px;margin-bottom: 10px;">Some quick example text to build on the card title .</p>
                                    
                                </div>
                            </div>
                        </div>
                         <div class="col-2">
                            <div class="card" style="width: 12rem; text-align: center; justify-content: center;align-items: center;background: #000;color: #fff ;" >
                                  <img src="./images/i4.jpg" class="card-img-top"  style="border-radius: 50%;height: 80px;width: 80px;margin-top: 30px;">
                                  <div class="card-body">
                                    <h5 class="card-title">Personal Security</h5>
                                    <p class="card-text" style="font-size: 10px;margin-bottom: 10px;">Some quick example text to build on the card title .</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card" style="width: 12rem; text-align: center; justify-content: center;align-items: center;background: #000;color: #fff ;" >
                                  <img src="./images/i2.png" class="card-img-top"  style="border-radius: 50%;height: 80px;width: 80px;margin-top: 30px;">
                                  <div class="card-body">
                                    <h5 class="card-title">Credit/Debit Card</h5>
                                    <p class="card-text" style="font-size: 10px;margin-bottom: 10px;">Some quick example text to build on the card title .</p>
                                    
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-2">
                            <div class="card" style="width: 12rem; text-align: center; justify-content: center;align-items: center;background: #000;color: #fff ;" >
                                  <img src="./images/i6.jpg" class="card-img-top"  style="border-radius: 50%;height: 90px;width: 90px;margin-top: 30px;">
                                  <div class="card-body">
                                    <h5 class="card-title">Growth Buisness</h5>
                                    <p class="card-text" style="font-size: 10px;margin-bottom: 10px;">Some quick example text to build on the card title .</p>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-2">
                            <div class="card" style="width: 12rem; text-align: center; justify-content: center;align-items: center;background: #000;color: #fff ;" >
                                  <img src="./images/i1.png" class="card-img-top"  style="border-radius: 50%;height: 80px;width: 80px;margin-top: 30px;">
                                  <div class="card-body">
                                    <h5 class="card-title">Quick and Easy</h5>
                                    <p class="card-text" style="font-size: 10px;margin-bottom: 10px;">Some quick example text to build on the card title .</p>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                        
                    
</section>
    <div class="about-box-main">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">

                        <h3>We are Trusted</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscingididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>


           </div></div>

<?php
  include 'footer.php';
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>







