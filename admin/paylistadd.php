<?php
include('conn.php');
if (isset($_POST['add_image'])) {
    $p_name = $_POST['p_name'];
    $p_img = $_FILES['p_image']['name'];
    $p_image_temp_name = $_FILES['p_image']['tmp_name'];
    $p_img_folder = 'paylist/' . $p_img;

    $insert_query = mysqli_query($conn, "insert into 
    paylist(Name,Image) values('$p_name','$p_img')");
    if ($insert_query) {
        move_uploaded_file($p_image_temp_name, $p_img_folder);
        echo "
        <script>
        alert('PRODUCT ADDED SUCCESSFULLY');
       
        </script>
        ";
    } else {
        echo "PRODUCTS ADDED FAILED...!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        input.btn.btn-success:hover {
            border-color: #ED441D;
            background-color: #ED441D;
        }

        input.btn.btn-success {
            background-color: #753fdc;
            border-color: #753fdc;
        }

        h1.text-center:hover {
            color: #ED441D;
        }
    </style>
</head>

<body>
    <br><br>
    <div class="container ">
        <div class="row">
            <div class="col-12 mr-4">
                <h1 class="text-center">ADD Image</h1>
                <br><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="p_name"> PRODUCT NAME</label>
                    <input type="text" class="form-control" name="p_name"><br><br>



                    <label for="p_name"> PRODUCT IMAGE</label>
                    <input type="file" class="form-control" name="p_image"><br><br>
                    <input type="submit" value="Add image" name="add_image" class="btn btn-success">



                </form>
            </div>
        </div>
    </div>
</body>

</html>