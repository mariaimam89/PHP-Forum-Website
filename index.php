

  <?php include 'partials/_dbconnect.php';?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Welcome to iDiscuss</title>
</head>

<body>


  <?php include 'partials/_header.php';?>
  
   <!-- carousel-->
 <!-- Slider starts here -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="partials/imgs/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="partials/imgs/4.jpg" class="d-block w-100" alt="...">
            </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  

   <!-- categories start from here-->
  
  <div class="container">
    <h2 class="text-center my-4">Browse iDiscuss Categories</h2>
    <div class="row my-4">

    <!-- using for loop to fetch categories from database -->
    <?php  
    $sql= "SELECT * FROM `categories`";
    $result= mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['category_id'];
      $title=$row['category_name'];
      $desc=$row['category_description'];
      echo '<div class="col-md-4 my-4">
      <div class="card" style="width: 18rem;">
        <img src="partials/imgs/t'.$id.'.jpg" height="200px" width="400px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$row['category_name'].'</h5>
          <p class="card-text">'.substr($desc,0,90).'...</p>
          <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threds</a>
        </div>
      </div>
    </div>';
    }

    ?>
      


    </div>
  </div>

  <?php include 'partials/footer.php';?>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


</body>

</html>