document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();

    let name = document.querySelector("[name=name]").value;
    let email = document.querySelector("[name=email]").value;

    console.log(name, email);
});