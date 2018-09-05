<?php
echo
'<div class="sidenav">


    <button class="dropdown-btn">HTML
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../HTML/oneven.php">weekdagen.html</a>
        <a href="../HTML/nlvlag.html">nlvlag.html</a>
    </div>
    
        <button class="dropdown-btn">PHP
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../PHP/weekdagen.php">weekdagen.php</a>
        <a href="../PHP/nlvlag.php">nlvlag.php</a>
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