<?php

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './connect.php';
    
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


    $enroll_no = $_POST["enroll_no"];
    $faculty_no = $_POST["faculty_no"]; 
    
     
    $sql = "Select * from result where enroll_no='$enroll_no' AND faculty_no='$faculty_no'";
    $output = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($output);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['enroll_no'] = $enroll_no;
        $_SESSION['faculty_no'] = $faculty_no;
        header("location: result1.php");
        // echo "hello log in ";
        // echo " $output ";

      $row = mysqli_fetch_assoc($output) ;
      //     echo "id: " . $row["enroll_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css  -->
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

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>AMU-srms</title>
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
              <a href="">Students <i class="fa-solid fa-caret-down"></i></a>
              <div class="ondrop">
                <ul>
                  <li><a href=""> Resuts</a></li>
                  <li><a href=""> Attendance</a></li>
                  <li><a href=""> Resgistration</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a href="">Teachers<i class="fa-solid fa-caret-down"></i></a>
              <div class="ondrop">
                <ul>
                  <li><a href="./uploadresult.php">Manage Resuts</a></li>
                  <li><a href="">Manage Attendance</a></li>
                  <li><a href="">Verify Students</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="./teacherslogin.php">Teacher's Login</a></li>
          <li><a href="#">Admin</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="left">
        <!-- <p>Students Results 2022-23</p> -->
        <form action="college.php" method="post">
            <p>Students Result 2022-23</p>
          <label for="faculty_no" id="faculty_no" name="faculty_no">

            Faculty Number
          </label>
          <input type="text" id="faculty_no" name="faculty_no" 
          placeholder="Enter your Faculty Number"/> <br />
          <label
            for="enroll_no"
            id="enroll_no"
            name="enroll_no"
          >
            Enrollment Number 

          </label>
          
          <input type="text" id="enroll_no" name="enroll_no"
          placeholder="Enter your Enrollment Number" />
          <button>Result</button>
        </form>

        
      </div>
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
          Phone: 3853610428
        </p>
        <p>
          <!-- icon  -->
          Email: result@amu.ac.in
        </p>
      </div>
    </div>
    <footer>
        &copy;&nbsp; Aligarh Muslim University,Aligarh ,2023,</footer>
  </body>
</html>
