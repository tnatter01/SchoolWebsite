<?php
echo
'<div class="sidenav">

    <a href="../rekenen/rekenen.php">Rekenen</a>

    <button class="dropdown-btn">Database
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../sql/groep8.php">groep8.sql</a>
        <a href="../sql/grolsch.php">grolsch.sql</a>
        <a href="../sql/customer.php">customer.sql</a>
        <a href="../sql/bestelling.php">bestelling.sql</a>
    </div>
    
        <button class="dropdown-btn">Backend
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../Backend/lab01.php">Lab 01</a>
        <a href="../Backend/lab02.php">Lab 02</a>
        <a href="../Backend/lab03.php">Lab 03</a>
        <a href="../Backend/lab04.php">Lab 04</a>
        <a href="../Backend/lab05formulier.php">Lab 05</a>
        <a href="../Backend/lab06.php">Lab 06</a>
        <a href="../Backend/lab14.php">Lab 14</a>
        <a href="../Backend/lab16.php">Lab 16</a>
        <a href="../Backend/lab17.php">Lab 17</a>
    </div>
            <button class="dropdown-btn">PHP
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../php/myage.php">myage.php</a>
        <a href="../php/datediff.php">datediff.php</a>
        <a href="../php/login.php">Login pagina</a>
    </div>
    
                <button class="dropdown-btn">Algoritme
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../alg/fiche1.php">Fiche 1</a>
        <a href="../alg/fiche2.php">Fiche 2</a>
        <a href="../alg/fiche3.php">Fiche 3</a>
    </div>
    
            <button class="dropdown-btn">Frontend
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../Frontend/lab04.php">Lab 04</a>
        <a href="../Frontend/lab05formulier.php">Lab 05</a>
        <a href="../Frontend/lab06.php">Lab 06</a>
        <a href="../Frontend/lab07.php">Lab 07</a>
        <a href="../Frontend/lab08.php">Lab 08</a>
        <a href="../Frontend/lab09.php">Lab 09</a>
        <a href="../Frontend/lab10.php">Lab 10</a>
    </div>
    
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            } else {
            dropdownContent.style.display = "block";
            }
            });
            }
            </script>';
?>