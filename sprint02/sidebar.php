<div class="sidenav">

    <a href="../rekenen/rekenen.php">Rekenen</a>

    <button class="dropdown-btn">PHP
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../php/alert.php">alert.php</a>
        <a href="../php/grolsch.php">grolsch.php</a>
        <a href="../php/celsius_fahrenheit_kelvin.php">celsius_fahrenheit_kelvin.php</a>
        <a href="../php/yahtzee.php">yahtzee.php</a>
        <a href="../php/fibonacci.php">fibonacci.php</a>
        <a href="../php/chech_bsn.php">check_bsn.php</a>
        <a href="../php/kaartspel2.php">kaartspel2.php</a>
        <a href="../php/onzegroep2.php">onzegroep2.php</a>
        <a href="../php/eredivisie2.php">eredivisie.php</a>
        <a href="../php/test_functions.php">test_functions.php</a>
        
    </div>
    
        <button class="dropdown-btn">Backend
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../Backend/lab04.php">Lab 04</a>
        <a href="../Backend/lab05formulier.php">Lab 05</a>
        <a href="../Backend/lab06.php">Lab 06</a>
        <a href="../Backend/lab07.php">Lab 07</a>
        <a href="../Backend/lab08.php">Lab 08</a>
        <a href="../Backend/lab09.php">Lab 09</a>
        <a href="../Backend/lab10.php">Lab 10</a>
        <a href="../Backend/lab11.php">Lab 11</a>
        <a href="../Backend/lab12.php">Lab 12</a>
        <a href="../Backend/lab13.php">Lab 13</a>
        
    </div>
    
                <button class="dropdown-btn">Frontend
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../frontend/lab01.php">Lab01 Frontend</a>
        <a href="../frontend/lab02.php">Lab02 Frontend</a>
        <a href="../frontend/lab02.php">Lab03 Frontend</a>
    
    </div>
    

        
            <button class="dropdown-btn">Javascript
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="../html/alert.php">alert</a>
        <a href="../html/write.php">write</a>
        <a href="../html/prompt.php">prompt</a>
        <a href="../html/inline.php">inline</a>
        <a href="../html/extern.php">extern</a>
        <a href="../html/voorwaardelijkeOperator.php">voorwaardelijkeOperator</a>
        <a href="../html/randomNumber.php">randomNumber</a>
        <a href="../html/typeof.php">typeof</a>
        <a href="../html/rekenen.php">rekenen</a>
        <a href="../html/weekdagen.php">weekdagen</a>
        <a href="../html/spreekwoord.php">spreekwoord</a>
        <a href="../html/lezen.php">lezen</a>
        <a href="../html/getallen.php">getallen</a>
        <a href="../html/yahtzee.php">yahtzee</a>
        

        
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
            </script>
