const form = document.getElementById("myform");
const username = document.getElementById("username");
const email = document.getElementById("email");
const errroMess = document.getElementById("error-msg")

form.addEventListener('submit', function (e) {

    const value = username.value.trim();

    if (value === "" || value.length < 3) {
        e.preventDefault();

        errroMess.innerText = "name must > 3 characters";

    } else {
        errroMess.innerText = "";
        alert("Done");
    }
});