function validation() {
    if (document.Formfill.username.value == "") {
        document.getElementById("result").innerHTML = "Enter username*";
        return false;
    } else if (document.Formfill.username.value.length < 6 == "") {
        document.getElementById("result").innerHTML = "Atleast six lettters*";
        return false;
    }
}