  <?php
  include 'navbar.php';
  ?>
  <?php
  include 'slider.php';
  ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>bank management system</title>
    <style type="text/css">
      .card{
    position: relative;
    width: 320px;
    height:420px;
    background:#122936;
    border-radius:20px;
    overflow: hidden;
  }
  .card::before{
    content:'';
    position: absolute;
    top: -50%;
    width:100%;
    height:100%;
    background:#C0392B;
    transform:skewY(345deg);
    transition: 0.5s;
  }
  .card:hover::before{
    top:-70%;
    transform:skewY(390deg);
    
  }
  .card::after{
    content:'philips';
    position: absolute;
    bottom: 0;
    left:0;
    font-weight:600;
    font-size: 8em;
    color:rgba(0,0,0,0.1);
  }
.card .imgBx{
  position:relative;
  width:100%;
  display: flex;
  padding-top:20px;
    z-index: 1;
  justify-content: center;
}
.card .imgBx img{
  max-width:80%;
  transition:0.5s;
}
.card:hover .imgBx img{
  max-width: 40%;

}
.card .contentBx
{
  position: relative;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  z-index: 1;
}
.card .contentBx
{
  font-size: 10px;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.card .contentBx h1{
  font-weight:300;
  font-size: 30px;
}
.price{
  font-size:10px;
  color: #fff;
  text-transform: lowercase;
  font-weight:500px;
  letter-spacing: 1px;
}
.buy{
  top:200px;
  opacity: 0;
  position: relative;
  padding:10px 30px;
  margin-top:15px;
  color: #fff;
  text-decoration: none;
  background:#C0392B;
  border-radius:30px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.card:hover .contentBx .buy{
top: 0;
opacity: 1;

}
.buy:hover{
  background:#fff;
  color:#C0392B ;
}
.contact{
        font-family: 'Supermercado One', cursive;
        position: relative ;
        min-height: 100vh;
        padding: 50px 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background:url(./images/mainwork.jpeg) ;
        background-repeat: no-repeat;
          background-size: cover;
          text-align: center;

    }
   
    
    </style>
  </head>

  <body>
 
<div class="container-fluid contact" style="margin-top: 0px;">
  <div class="row">
    <h2 style=" font-size: 36px;
        font-weight: 500;
        color: #000;">Main Work</h2>
    <p style=" font-weight: 300;
        color: #000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
  </div>
  <!-- Activity section -->
            <div class="row  text-center" style="margin-top:50px;">
                  <div class="col-4">
                    <div class="card">
                          <div class="imgBx">
                              <img src="./images/image1.png" height=100% width=100%>
                          </div>  

                          <div class="contentBx">
                            <h1>CREATE USER</h1>
                            <h2 class="price" >Lorem ipsum dolor sit amet rtiop</h2>
                            <a href="createuser.php" class="buy">Create Now</a>
                          </div>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="card">
                          <div class="imgBx">
                              <img src="./images/image2.png" height=100% width=100%>
                          </div>  
                          <div class="contentBx">
                            <h1>TRANSFER MONEY</h1>
                            <h2 class="price" >Lorem ipsum dolor sit amet rtiop</h2>
                            <a href="transfermoney.php" class="buy">Transfer Now</a>
                          </div>
                          
                    </div>
                  </div>


                  <div class="col-4">
                    <div class="card">
                          <div class="imgBx">
                              <img src="./images/images3.png" height=100% width=100%>
                          </div>  
                          <div class="contentBx">
                            <h1>TRNSACTION HISTORY</h1>
                            <h2 class="price" >Lorem ipsum dolor sit amet rtiop</h2>
                            <a href="transactionhistory.php" class="buy">View Now</a>
                          </div>
                          
                    </div>
                  </div>

                  
                 
            </div>
      </div>
 </div>
 <?php
  include 'footer.php';
  ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>