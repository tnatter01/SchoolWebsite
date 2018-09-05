function myFunction() {
    var code = prompt("Please enter your code", "Uw Code");
    if (code != null) {
        document.getElementById("demo").innerHTML =
            "Uw ingevoerde code is " + code + "";
    }
}
