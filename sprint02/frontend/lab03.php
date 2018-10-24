<!DOCTYPE html>

<html lang="en">
<head>
    <title id="title">This is replaced by the filename</title>

    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script type="text/javascript">
        var url = window.location.pathname; // gets the pathname of the file
        var str = url.substring(url.lastIndexOf('/')+1); // removes everything before the filename
        var filename = str.replace(/%20/g, " "); // if the filename has multiple words separated by spaces, browsers do not like that and replace each space with a %20. This
        // replace %20 with a space.
        document.getElementById("title").innerHTML = filename;

        document.write("<div class=\"main\">");
        var testarray = new Array();
        testarray[0] = "een";
        testarray[1] = "twee";
        testarray[2] = 3;
        testarray[3] = "vier";
        testarray[4] = 5;
        document.write("<h1><b>Lab 03</b></h1> <br>");
        document.write("<b>03</b> ⁃ " + testarray + "<br>");
        document.write("<b>04</b> ⁃ Datatype is: " + typeof testarray[4] + "<br>");
        testarray.splice(testarray.indexOf('4'));
        document.write("<b>06</b> ⁃ " + testarray + "<br>");
        testarray.unshift('nul');
        document.write("<b>08</b> ⁃ " + testarray + "<br>");
        delete testarray[0];
        document.write("<b>10</b> ⁃ Datatype [0] is: " + typeof testarray[0] + "<br>");
        testarray.splice(0,0);
        document.write("<b>12</b> ⁃ " + testarray + "<br>");
        testarray.splice(2,1);
        document.write("<b>14</b> ⁃ " + testarray + "<br>");
        var index = testarray.indexOf('2');
        if (index != -1){
        } else {
            testarray.splice(3,1);
        }
        document.write("<b>16</b> ⁃ " + testarray + "<br>");
    </script>


</head>
<body>



</div>



<?php include '../sidebar.php'; ?>
</body>

</html>