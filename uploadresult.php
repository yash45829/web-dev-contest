<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: teacherslogin.php");
    exit;   
}

$teacher_name = $_SESSION['teacher_name'] ;
?>


<?php
$insert = false;
if(isset($_POST['first_name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);
    
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $faculty_no = $_POST['faculty_no'];
   $enroll_no = $_POST['enroll_no'];
   $paper1 = $_POST['paper1'];
   $paper2 = $_POST['paper2'];
   $paper3 = $_POST['paper3'];
   $paper4 = $_POST['paper4'];
   $paper5 = $_POST['paper5'];
   $sessional1 = $_POST['sessional1'];
   $sessional2 = $_POST['sessional2'];
   $sessional3 = $_POST['sessional3'];
   $sessional4 = $_POST['sessional4'];
   $sessional5 = $_POST['sessional5'];
   $final1 = $_POST['final1'];
   $final2 = $_POST['final2'];
   $final3 = $_POST['final3'];
   $final4 = $_POST['final4'];
   $final5 = $_POST['final5'];
    $sql = "INSERT INTO `student_result`.`result` (`first_name`, `last_name`, `enroll_no`, `faculty_no`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`, `sessional1`, `sessional2`, `sessional3`, `sessional4`, `sessional5`, `final1`, `final2`, `final3`, `final4`, `final5`) VALUES ('$first_name', '$last_name', '$enroll_no', '$faculty_no', '$paper1', '$paper2', '$paper3', '$paper4', '$paper5', '$sessional1', '$sessional2', '$sessional3', '$sessional4', '$sessional5', '$final1', '$final2', '$final3', '$final4', '$final5');";
    // echo $sql;
      // DELETE FROM result WHERE $first_name='yash';
    // Execute the query
    if($con->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!-- 
INSERT INTO `result` (`first_name`, `last_name`, `enroll_no`, `faculty_no`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`, `sessional1`, `sessional2`, `sessional3`, `sessional4`, `sessional5`, `final1`, `final2`, `final3`, `final4`, `final5`, `dt`) VALUES ('yash', 'kumar', 'gk6439', '21elb230', 'gdhdgh', 'gdhdgh', 'gdhdgh', 'gdhdgh', 'gdhdgh', '34', '33', '56', '32', '23', '32', '23', '23', '55', '24', ''); -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UploadResult</title>
    <!-- css  -->
    <link rel="stylesheet" href="./college.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="logo">
        
            <img
              src="./pngkey.com-boeing-logo-png-4853350.png"
              height="100px"
              alt="amulogo"
            />
            <div class="head"><h1>Aligarh Muslim University</h1><p>Student Result management System</p></div>
        </div>
        <nav>
          <ul>
            <li><a href="college.php">Home</a></li>
            <li>
              <div class="dropdown">
                <a href="">Students<i class="fa-solid fa-caret-down"></i></a>
                <div class="ondrop">
                  <ul>
                    <li><a href="./college.php">Resuts</a></li>
                    <li><a href="">Attendance</a></li>
                    <li><a href="">Resgistration</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown">
                <a href="">Teachers<i class="fa-solid fa-caret-down"></i></a>
                <div class="ondrop">
                  <ul>
                    <li><a href="">Manage Resuts</a></li>
                    <li><a href="">Manage Attendance</a></li>
                    <li><a href="">Verify Students</a></li>
                  </ul>
                </div>
              </div>
            </li>
        <div class="dropdown">
            <li>
              <a href=""> <?php echo "$teacher_name "?><i class="fa-solid fa-caret-down"></i></a>
              <div class="ondrop">
                  <ul>
                    <li><a href="./logout.php">Log Out</a></li>
                    
                  </ul>
                </div>
            </li>
        </div>
            <li><a href="">Admin</a></li>
          </ul>
        </nav>
      </header>

      <main>

        <form action="uploadresult.php" method="post" class="form">

          <table>
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Enrollment Number</td>
                    <td>Faculty Number</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="first_name" id="first_name"></td>
                    <td><input type="text" name="last_name" id="last_name"></td>
                    <td><input type="text" name="enroll_no" id="enroll_no"></td>
                    <td><input type="text" name="faculty_no" id="faculty_no"></td>
                   
                </tr>
            </tbody>

            <table>
                <thead>
                    <tr>
                        <td>Courses</td>
                        <td>Sessional marks</td>
                        <td>Final Marks</td>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="paper1" id=""></td>
                        <td><input type="number" name="sessional1" id=""></td>
                        <td><input type="number" name="final1" id=""></td>
                    
                       
                    </tr>
                    <tr>
                        <td><input type="text" name="paper2" id="paper2"></td>
                        <td><input type="number" name="sessional2" id="session2"></td>
                        <td><input type="number" name="final2" id="final2"></td>
                        
                        
                    </tr>   <tr>
                        <td><input type="text" name="paper3" id="paper3"></td>
                        <td><input type="number" name="sessional3" id="session3"></td>
                        <td><input type="number" name="final3" id="final3"></td>
                       
                        
                    </tr>   <tr>
                        <td><input type="text" name="paper4" id="paper4"></td>
                        <td><input type="number" name="sessional4" id="session4"></td>
                        <td><input type="number"  name="final4" id="final4"></td>
                        

                    </tr>  
                     <tr>
                        <td><input type="text" name="paper5" id="paper5"></td>
                        <td><input type="number" name="sessional5" id="session5"></td>
                        <td><input type="number" name="final5" id="final5"></td>
                      
                        
                    </tr>
                </tbody>
            </table>
            <button>
              Submit
            </button>
        </form>
      </main>
      <footer>
        &copy;&nbsp; Aligarh Muslim University,Aligarh ,2023,</footer>
</body>
</html>