<?php

    session_start();
    if(!isset($_SESSION['LOGIN']) || $_SESSION['LOGIN'] != true)
    {
        header("location: login.php");
        exit;
    }
    $username = $_SESSION['username'];  
    include '_db_Connect.php';
    $sql = "SELECT * FROM resume WHERE username='$username'";
    $result1 = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result1);
    // mysqli_close($con);
    $row = mysqli_fetch_array($result1);
    
    
    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
    //   $sql = "SELECT * FROM resume WHERE username='$username'";
    //   $result = mysqli_query($con, $sql);
    //   $num = mysqli_num_rows($result);
    //   mysqli_close($con);
    //   $row = mysqli_fetch_array($result);
    //   $fname = $row['fname'];
    //   $lname = $row['lname'];
    //   $gender = $row['gender'];
    //   $mobile = $row['mobile'];
    //   $altmobile = $row['altmobile'];
    //   $birthdate = $row['birthdate'];


      if(isset($_POST['language1']))
      {
        $language1 = $_POST['language1'];
        // echo "abhi";
        // echo $fname;
        // echo $username;
        $q="Update RESUME set language1='$language1' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['lanlevel1']))
      {
        $lanlevel1 = $_POST['lanlevel1'];
        $q="Update RESUME set lanlevel1='$lanlevel1' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['language2']))
      {
        $language2 = $_POST['language2'];
        $q="Update RESUME set language2='$language2' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['lanlevel2']))
      {
        $lanlevel2 = $_POST['lanlevel2'];
        $q="Update RESUME set lanlevel2='$lanlevel2' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['tech1']))
      {
        $tech1 = $_POST['tech1'];
        $q="Update RESUME set tech1='$tech1' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['techlevel1']))
      {
        $techlevel1 = $_POST['techlevel1'];
        $q="Update RESUME set techlevel1='$techlevel1' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['tech2']))
      {
        $tech2 = $_POST['tech2'];
        $q="Update RESUME set tech2='$tech2' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['techlevel2']))
      {
        $techlevel2 = $_POST['techlevel2'];
        $q="Update RESUME set techlevel2='$techlevel2' where username='$username';";
        $result = mysqli_query($con, $q);
      }
      if(isset($_POST['description']) || $_POST['description']!="")
      {
        $description = $_POST['description'];
        $q="Update RESUME set description='$description' where username='$username';";
        $result = mysqli_query($con, $q);
      }

      

    //   if($result){
        header("location: tech_skills.php");
    //   }
    }
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="mx-3 my-3">
    <h4 style="display: inline; font-size: larger;">Technical Skills</h4>
    <a href="tech_skills.php" class="mx-2"><b>cancle</b></a>
  </div>
    <form action="techedit.php" method="POST" class="form-floating">
        <div class="mx-4">
            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <label for="" class="form-label"><b>Programming Language:</b></label>
                    <select class="form-select" id="inputZip" name="language1" placeholder="<?php echo $row['uni']; ?>" >
                        <option >C language</option>
                        <option>C++</option>
                        <option>Pyhton</option>
                        <option>JAVA</option>
                        <option>R</option>
                        <option>C#</option>
                        <option>.net</option>
                        <option>perl</option>
                    </select>
                </div>
                <div class="col-md-4 col-12">
                    <label for="" class="form-label"><b>Level</b></label>
                    <select class="form-select" id="" name="lanlevel1" placeholder="<?php echo $row['uni']; ?>" >
                        <option>Basic</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <label for="" class="form-label"><b>Other language</b></label>
                    <select class="form-select" id="inputZip" name="language2" placeholder="<?php echo $row['uni']; ?>" >
                        <option>C language</option>
                        <option>C++</option>
                        <option>Pyhton</option>
                        <option>JAVA</option>
                        <option>R</option>
                        <option>C#</option>
                        <option>.net</option>
                        <option>perl</option>
                    </select>
                </div>
                <div class="col-md-4 col-12">
                    <label for="" class="form-label"><b>Level</b></label>
                    <select class="form-select" id="" name="lanlevel2" placeholder="<?php echo $row['uni']; ?>" >
                        <option>Basic</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <label for="" class="form-label"><b>Technology which you know:</b></label>
                    <select class="form-select" id="inputZip" name="tech1" placeholder="<?php echo $row['uni']; ?>" >
                        <option>PHP-MySQL</option>
                        <option>Spring</option>
                        <option>Flutter</option>
                        <option>Django</option>
                        <option>ML</option>
                        <option>AI</option>
                        <option>Node JS</option>
                    </select>
                </div>
                <div class="col-md-4 col-12">
                    <label for="" class="form-label"><b>Level</b></label>
                    <select class="form-select" id="" name="techlevel1" placeholder="<?php echo $row['uni']; ?>" >
                        <option>Basic</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <label for="" class="form-label"><b>Other Technology:</b></label>
                    <select class="form-select" id="inputZip" name="tech2" placeholder="<?php echo $row['uni']; ?>" >
                        <option>PHP-MySQL</option>
                        <option>Spring</option>
                        <option>Flutter</option>
                        <option>Django</option>
                        <option>ML</option>
                        <option>AI</option>
                        <option>Node JS</option>
                    </select>
                </div>
                <div class="col-md-4 col-12">
                    <label for="" class="form-label"><b>Level</b></label>
                    <select class="form-select" id="" name="techlevel2" placeholder="<?php echo $row['uni']; ?>" >
                        <option>Basic</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label for="" class="form-label"><b>Other Skills:</b></label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Data Structure"
                            name="ds">
                        <label class="form-check-label" for="inlineCheckbox1">Data Structure</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Algorithm" name="algo">
                        <label class="form-check-label" for="inlineCheckbox2">Algorithm</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Design Skills"
                            name="design">
                        <label class="form-check-label" for="inlineCheckbox3">Design Skills</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Logical Thinking"
                            name="logic">
                        <label class="form-check-label" for="inlineCheckbox3">Logical Thinking</label>
                    </div>
                </div>
            </div>
            <div class="row mt-3">

                <div class="col-12">
                    <label for="" class="form-label"><b>Add something extra whatever you want:</b></label><br>
                    <textarea name="description" id="add" cols="50" rows="2" class="form-control" placeholder="<?php echo $row['description'];?>"></textarea>
                </div>
            </div>
            <button type="submit" style="width: 100%;" class="btn btn-primary my-2">Save</button>
        </div>
    </form>

  <!-- <div class="mx-3 mt-5">
    Please fill up entire details, otherwise details will not be updated
  </div> -->




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>

</body>

</html>