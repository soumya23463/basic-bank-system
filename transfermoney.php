  <?php
  include 'navbar.php';
  ?>
<?php
    include 'config.php';?>

<?php
  
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<style type="text/css">
   .bbb{

     background: url('./images/user.jpg') no-repeat center;
  background-size: cover;
  margin-top: 0px;

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

<link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">

    <title>Transfer Money</title>
    
  </head>

  <body>
     <div class="bbb" >
   <div class="container" style="font-family: 'Supermercado One', cursive;">
        <h2 class="text-center pt-4" style="color : fff;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div style="background: rgba(0, 0, 0, 0.8);">
                    <table class="table-responsive-sm table  table-sm  table-bordered" style="border-color:#fff;" >
                        <thead >
                            <tr style="color : #000; background: #fff;">
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : #fff;"class="justify-center text-center">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td class="py-2"><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : crimson;color: #fff;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
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