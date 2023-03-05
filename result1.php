<?php
//  error_reporting (E_ALL ^ E_NOTICE);
  ?> 
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: college.php");
    exit;
}



include './connect.php';



$login = false;
$showError = false;
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     // include './connect.php';
    
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "student_result";

// $conn = mysqli_connect($server, $username, $password, $database);
// if (!$conn){
//     echo "success";
// // }
// // else{
//     die("Error". mysqli_connect_error());
// }

// import_request_variables("P","enroll_no");
// import_request_variables("P","faculty_no");
// import_request_variables("p","row");
// extract($_GET, EXTR_PREFIX_ALL, 'p');
// extract($_POST, EXTR_PREFIX_ALL, 'p');
// extract($_POST, EXTR_PREFIX_ALL, 'enroll_no');

// echo "$enroll_no";
// echo "$"



 
 $enroll_no = $_SESSION['enroll_no'] ;
 $faculty_no =    $_SESSION['faculty_no'] ;
    
      


    $sql = "Select * from result where enroll_no='$enroll_no' AND faculty_no='$faculty_no'";
    $output = mysqli_query($conn, $sql);
    // $num = mysqli_num_rows($output);
    // if ($num == 1){
    //     $login = true;
    //     session_start();
    //     $_SESSION['loggedin'] = true;
    //     $_SESSION['enroll_no'] = $enroll_no;
        // header("location: result1.php");
        // echo "hello log in ";
        // echo " $output ";

      $row = mysqli_fetch_assoc($output) ;
          // echo "id: " . $row["enroll_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"].$row["paper1"]. $row["paper2"]. "<br>";
    // } 
    // else{
    //     $showError = "Invalid Credentials";
    // }

    



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css  -->
  <link rel="stylesheet" href="result1.css">
    
    <link rel="stylesheet" href="./college.css" />
    
   
    
    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="preconnect"
      href="https://fonts.       gstatic.com"
      crossorigin
    />
    <link
      href="https://fonts.googleapis.com/       css2?family=Poppins:wght@400;500;600;700;       800;900&family=Work+Sans:wght@400;500;600;       800;900&display=swap"
      rel="stylesheet"
    />
    <title>AMU-Result</title>
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
              <a href="">Students</a>
              <div class="ondrop">
                <ul>
                  <li><a href="">Resuts</a></li>
                  <li><a href="">Attendance</a></li>
                  <li><a href="">Resgistration</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a href="">Teachers</a>
              <div class="ondrop">
                <ul>
                  <li><a href="teacherslogin.php">Manage Resuts</a></li>
                  <li><a href="">Manage Attendance</a></li>
                  <li><a href="">Verify Students</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="teacherslogin.php">Teacher's Login</a></li>
          <li><a href="">Admin</a></li>
        </ul>
      </nav>
    </header>
     <section>
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
                    <td><?php echo   $row["first_name"] ?></td>
                    <td> <?php echo   $row["last_name"] ?> </td>
                    <td> <?php echo   $row["enroll_no"] ?> </td>
                    <td> <?php echo  $row["faculty_no"] ?> </td>
                   
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <td>Course</td>
                    <td>Sessional Marks</td>
                    <td>Final Marks</td>
                    <td>Total Marks</td>
                    <td>Grade</td>
                </tr>
            </thead>
            <tbody>

            <!-- $row = mysqli_fetch_assoc($output) ; -->
          <!-- echo "id: " . $row["enroll_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>"; -->
                <?php 
                // $sessional1 = 2 ;
                // $final1 = 56;
                // $num = $sessional1 + $final1;
                ?>
                <tr>
                    <td><?php echo  $row["paper1" ]?></td>
                    <td>  <?php  echo $row["sessional1"] ?> </td>
                    <td> <?php  echo $row["final1"] ?></td>
                    <td> <?php  echo $row["sessional1"] + $row["final1"]  ?></td>
                    <td> <?php  ?></td>
                </tr>
                <tr>
                    <td> <?php echo $row["paper2"]?></td>
                    <td> <?php echo $row["sessional2"]?> </td>
                    <td> <?php echo $row["final2"]?></td>
                    <td> <?php echo $row["sessional2"] + $row["final2"] ?></td>
                    <td> <?php  ?></td>
                </tr> <tr>
                    <td><?php   echo $row["paper3"] ?></td>
                    <td> <?php  echo $row["sessional3"] ?> </td>
                    <td> <?php  echo $row["final3"] ?></td>
                    <td> <?php  echo $row["sessional3"] + $row["final3"] ?></td>
                    <td> <?php  ?></td>
                </tr> <tr>
                    <td> <?php  echo $row["paper4"] ?></td>
                    <td> <?php  echo $row["sessional4"] ?> </td>
                    <td> <?php  echo $row["final4" ]?></td>
                    <td> <?php  echo $row["sessional4"] + $row["final4"]  ?></td>
                    <td> <?php  ?></td>
                </tr> <tr>
                    <td> <?php  echo $row["paper5" ]?></td>
                    <td> <?php  echo $row["sessional5"] ?> </td>
                    <td> <?php  echo $row["final5" ]?></td>
                    <td> <?php  echo $row["sessional5"] + $row["final5"]  ?></td>
                    <td> <?php  ?></td>
                </tr>
            </tbody>
        </table>

        <button>
         <a href="./logout.php">Dismiss</a>
        </button>
     </section>

    <main>
      <!-- <div class="left">
        <p>Students Results 2022-23</p>
        <form action="result.html" method="post">
            <p>Students Result 2022-23</p>
          <label for="faculty_Number" id="faculty_Number" name="faculty_Number">

            Faculty Number
          </label>
          <input type="text" id="faculty_Number" name="faculty_Number" 
          placeholder="Enter your Faculty Number"/> <br />
          <label
            for="enrollment_Number"
            id="enrollment_Number"
            name="enrollment_Number"
          >
            Enrollment Number 

          </label>
          
          <input type="text" id="enrollment_Number" name="enrollment_Number"
          placeholder="Enter your Enrollment Number" />
          <button>Result</button>
        </form>
      </div> -->
      <div class="right">
        <h2>Recent Updates</h2>
        <!-- <marquee behavior="" direction="" >Resuts</marquee> -->
        <ul>
          <li><a href="">Resuts</a></li>
          <li><a href="">Attendance</a></li>
          <li><a href="">Resgistration</a></li>
        </ul>
      </div>
    </main>
    <div class="admin">
      <div class="left1"><img src="./pngkey.com-boeing-logo-png-4853350.png" alt="" /></div>
      <div class="right1">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ea
          error nobis, nisi quaerat temporibus deserunt vel suscipit, ratione
        </p>
      </div>
    </div>
    <div class="contact">
      <div class="left2">
        <p>
          Zakir Husain College of Engineering and Technology, AMU Campus, <br>
          University Road, Aligarh
        </p>
      </div>
      <div class="right2">
        <p>
          <!-- icon -->
          3853610428
        </p>
        <p>
          <!-- icon  -->
          result@amu.ac.in
        </p>
      </div>
    </div>
    <footer>
        &copy;&nbsp; Aligarh Muslim University,Aligarh ,2023,</footer>
  </body>
</html>
