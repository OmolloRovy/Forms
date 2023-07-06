function validation() {
    if (document.Formfill.username.value == "") {
        document.getElementById("result").innerHTML = "Enter username*";
        return false;
    } else if (document.Formfill.Email.value == "") {
        document.getElementById("result").innerHTML = "Enter your Email*";
        return false;
    } else if (document.Formfill.Password.value == "") {
        document.getElementById("result").innerHTML = "Enter your Password*";
        return false;
    } else if (document.Formfill.username.value.length < 6) {
        document.getElementById("result").innerHTML = "Atleast six lettters*";
        return false;
    } else if (document.Formfill.Password.value.length < 6) {
        document.getElementById("result").innerHTML = " Password must be > 6 digits *";
        return false;
    } else if (document.Formfill.cPassword.value == "") {
        document.getElementById("result").innerHTML = " Confirm Password*";
        return false;
    } else if (document.Formfill.Password.value !== document.Formfill.cPassword.value) {
        document.getElementById("result").innerHTML = " Password doesnt match*";
        return false;
    } else if (document.Formfill.Password.value == document.Formfill.cPassword.value) {
        popup.classList.add("open-slide")
        return false;
    }
}
var popup = document.getElementById('popup');

function CloseSlide() {
    popup.classList.remove("open-slide")
}
const form = document.getElementById("Registration_form");
form.reset();
