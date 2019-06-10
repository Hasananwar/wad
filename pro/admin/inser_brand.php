\<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost","root","","textboxdb");
if(isset($_POST['insert_pro']))
{
    print_r($_POST);
    $title=$_POST['pro_title'];
    $cat=$_POST['pro_cat'];
    $q="insert into products(pro_title, pro_cat) values('$title','$cat')";
    mysqli_query($con, $q);
}
/*echo
echo */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startup</title>
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Select New </span>
        brand </h1>
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <div class="row">


            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span>
                    Brand:</label>
            </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                    </div>
                    <select class="form-control" id="pro_brand" name="pro_brand">
                        <option>Select Brand</option>
                        <?php
                        $getBrandsQuery = "select * from brands";
                        $getBrandsResult = mysqli_query($con,$getBrandsQuery);
                        while($row = mysqli_fetch_assoc($getBrandsResult)){
                            $brand_id = $row['brand_id'];
                            $brand_title = $row['brand_title'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>


                <button type="submit" name="insert_pro" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>
                    Insert Now
                </button>
            </div>
    </form>
</div>

</body>
</html>