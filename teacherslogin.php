
<?php

$login1 = false;
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


    $teacher_name = $_POST["teacher_name"];
    $college_id = $_POST["college_id"]; 
    
     
    $sql1 = "Select * from teacher_login where teacher_name='$teacher_name' AND college_id='$college_id'";
    $output1 = mysqli_query($conn, $sql1);
    $num1 = mysqli_num_rows($output1);
    if ($num1 == 1){
        $login1 = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['teacher_name'] = $teacher_name;
        $_SESSION['college_id'] = $college_id;
        header("location: uploadresult.php");
        echo "hello log in ";
        // echo " $output ";

      // $row = mysqli_fetch_assoc($output) ;
      //     echo "id: " . $row["enroll_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!-- INSERT INTO `teacher_login` (`sr`, `teacher_name`, `college_id`, `date`) VALUES ('1', 'rajesh kumar', '6723647', CURRENT_TIMESTAMP); -->
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
    <title>Teacher's Login</title>
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
                  <li><a href="./college.php">Resuts</a></li>
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
                  <li><a href="">Manage Resuts</a></li>
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
    <main>
      <div class="left">
        <!-- <p>Students Results 2022-23</p> -->
        <form action="teacherslogin.php" method="post">
            <p>Teacher's Login</p>
          <label for="teacher_name" id="teacher_name" name="teacher_name">

            Name
          </label>
          <input type="text" id="teacher_name" name="teacher_name" 
          placeholder="Enter your Registered Name"/> <br />
          <label
            for="college_id"
            id="college_id"
            name="college_id"
          >
            College Id

          </label>
          
          <input type="text" id="college_id" name="college_id"
          placeholder="Enter your College Id" />
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
