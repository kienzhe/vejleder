 <?php
include("includes/dbcon.php");
$loginId = $_SESSION['idUser'];
$counselor = "select first_name, last_name from counselor where login_id = '$loginId' ";
$resultCouns = $dbCon->query($counselor);
$row = mysqli_fetch_array($resultCouns, MYSQLI_ASSOC);
$_SESSION['first_name'] = $row['first_name'];
?>
 <nav>
     <div id="navwrapper">
        <ul id="navbar">
            <li class="navbar_link"><a href="registration.php">Registration</a></li>
            <li class="navbar_link"><a href="dashboard.php">Dashboard</a></li>
            <li class="navbar_link"><a href="admin.php">Admin</a></li>
        </ul>
        
        <ul id="userprofil">
            <?php
            if(isset($_SESSION["user"])){
                ?>
                
                <li class="profil"><?php print_r($_SESSION['first_name']) ?></li>
                <li class="profil2"><a href="doCodes/doLogout.php">Logud</a></li>
                <!--<li class="profil"><a href="doCodes/doLogout.php">Logud</a></li>-->
                <?php
            }
            ?>
        </ul>
    </div>
    </nav>
