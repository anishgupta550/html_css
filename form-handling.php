<?php
$name = ''; 
$email = ''; 
$password = ''; 
$city = '';
$gender = '';
$hob = [];
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    // $city = $_GET['city'];
    // $gender = $_GET['gender'];
    if(isset($_GET['city'])){
        $city = $_GET['city'];
    }
    if(isset($_GET['gender'])){
        $gender = $_GET['gender'];
    }
    // $hob = $_GET['hob'];
    if(isset($_GET['hob'])){
        $hob = $_GET['hob'];
    }
    
    
}

echo $name."<br>";
echo $email."<br>";
echo $password."<br>";
echo $city."<br>";
echo $gender."<br>";
// echo $hob."<br>";
print_r($hob);

?>                          


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<form action="" method="get" class="form w-50 m-auto border p-5 mt-5">
<div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="name">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">email</label>
        <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="email" name="email">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">password</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="passwo8rd">
    </div>
    <div class="mb-3">
        <select name="city" id="" class="form-select">
            <option value="" selected disabled>choose city</option>
     
            <?php
            $cities = ['delhi','mumbai','pune','banglore','odissha'];
            foreach($cities as $count){
                if($city == $count){
                    $check = "selected";
                }else{
                    $check = '';
                }
            ?>
            <option value="<?php echo $count ?>" <?php echo $check ?>><?php echo $count ?></option>
            
            <?php  }?>
        </select>
    </div>
    
    <div class="mb-3">
        <label>Gender :</label>
        <br>
        <?php
        if($gender == "Male"){
            echo '<input type="radio" name="gender" id="male" value="Male" checked>
            <label for="male">Male</label>';
        }else{
            echo '<input type="radio" name="gender" id="male" value="Male">
            <label for="male">Male</label>';
        }


        if($gender == "Female"){
            echo '<input type="radio" name="gender" id="female" value="Female" checked>
            <label for="female">Female</label>';
        }
        else{
            echo '<input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label>';
        }

        if($gender == "Other"){
            echo '<input type="radio" name="gender" id="other" value="Other" checked>
            <label for="other">Other</label>';
        }else{
            echo '<input type="radio" name="gender" id="other" value="Other">
            <label for="other">Other</label>';
        }


        ?>
    </div>
    <div class="mb-3">
        <label>Hobbies : </label>
        <br> 
        <?php
        if(in_array("Reading",$hob)){
            echo '<input type="checkbox" name="hob[]" value="Reading" id="reading" checked>
            <label for="reading">Reading</label>';
        }else{
            echo '<input type="checkbox" name="hob[]" value="Reading" id="reading">
            <label for="reading">Reading</label>';
        }
        if(in_array("Writing",$hob)){
            echo '<input type="checkbox" name="hob[]" value="Writing" id="writing" checked>
            <label for="writing">Writing</label>';
        }else{
            echo '<input type="checkbox" name="hob[]" value="Writing" id="writing">
            <label for="writing">Writing</label>';
        }
        if(in_array("Singing",$hob)){
            echo '<input type="checkbox" name="hob[]" value="Singing" id="signing" checked>
            <label for="signing">Singing</label>';
        }else{
            echo '<input type="checkbox" name="hob[]" value="Singing" id="signing">
            <label for="signing">Singing</label>';
        }
        if(in_array("Playing",$hob)){
            echo '<input type="checkbox" name="hob[]" value="Playing" id="playing" checked>
            <label for="playing">Playing</label>';
        }else{
            echo '<input type="checkbox" name="hob[]" value="Playing" id="playing">
            <label for="playing">Playing</label>';
        }
        ?>

    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-info" id="formGroupExampleInput2" value ="submit" name="submit">
    </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>