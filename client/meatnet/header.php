<?php

session_start();
?>
<div class="w3-display-container">
    <div class="w3-bar w3-theme-l1 w3-large w3-display-top" id="mySidebar2" >
            <button class="w3-button w3-blue w3-xlarge w3-hide-large" onclick="w3_open()">☰</button>
            <a href="index.php" class="w3-bar-item w3-button w3-hover-gray w3-hide-small"style=" width:auto" ><h6> Home</h6></a>
            <a href="meat.php" class="w3-bar-item w3-button w3-hover-gray w3-hide-small"style="width:auto"><h6>View Meat</h6></a>
            <a href="agent.php" class="w3-bar-item w3-button w3-hover-gray w3-hide-small"style="width:auto"><h6>View Agents</h6></a>
            <?php
            if (isset($_SESSION['type']))
            {
            echo '<a href="addmeat.php" class="w3-bar-item w3-button w3-hover-gray w3-hide-small"style="width:auto"><h6>Add Meat</h6></a>';
            echo '<a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-border w3-border-blue w3-round-large w3-right w3-small w3-hide-small"style="width:8%;margin: 10px 10px" >logout</a>';
            echo '<a href="profile.php" class="w3-bar-item w3-button w3-hover-gray w3-hide-small w3-right"style="width:auto"><h6>Profile</h6></a>';
            } 
            else 
            echo '<a href="login.php" class="w3-bar-item w3-button w3-hover-blue w3-border w3-border-blue w3-round-large w3-right w3-small w3-hide-small"style="width:8%;margin: 10px 10px" >Login/sign up</a> ';
            ?>
    </div> 
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large w3-hover-gray w3-text-red">Close &times;</button>
        <a href="index.php" class="w3-bar-item w3-button w3-hover-blue " ><h6> Home</h6></a>
            <a href="meat.php" class="w3-bar-item w3-button w3-hover-blue "><h6>View Meat</h6></a>
            <a href="agent.php" class="w3-bar-item w3-button w3-hover-blue "><h6>View Agents</h6></a>
            <?php
            if (isset($_SESSION['type']))
                {
                    echo '<a href="addmeat.php" class="w3-bar-item w3-button w3-hover-blue "><h6>Add Meat</h6></a>';
                    echo '<a href="profile.php" class="w3-bar-item w3-button w3-hover-blue w3-hide-large"style="width:auto"><h6>Profile</h6></a>';
                    echo '<a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-border w3-border-blue w3-round-large w3-small "><h6>logout</h6></a>';
                    
                } 
            else
                    echo '<a href="login.php" class="w3-bar-item w3-button w3-hover-blue w3-border w3-border-blue w3-round-large w3-small "><h6>Login/sign up</h6></a>' 
            ?>
    </div>
<script>
function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("mySidebar2").style.display = "none";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("mySidebar2").style.display = "block";
}
</script>