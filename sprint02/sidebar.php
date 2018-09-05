<?php
echo
'<div class="sidenav">

    <a href="../rekenen/rekenen.php">Rekenen</a>

    <button class="dropdown-btn">PHP
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../php/thisisme.php">thisisme.php</a>
        <a href="../php/quotes.php">quotes.php</a>
        <a href="../php/compare.php">compare.php</a>
        <a href="../php/operators.php">operators.php</a>
        <a href="../php/moreoperators.php">moreoperators.php</a>
        <a href="../php/dobbel1.php">dobbel1.php</a>
        <a href="../php/onzegroep.php">onzegroep.php</a>
        <a href="../php/eredivisie1.php">eredivisie1.php</a>
        <a href="../php/kaartspel1.php">kaartspel1.php</a>
    </div>
    
        <button class="dropdown-btn">Backend
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../Backend/lab01.php">Lab 01</a>
        <a href="../Backend/lab02.php">Lab 02</a>
        <a href="../Backend/lab03.php">Lab 03</a>
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