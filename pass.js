let pass = document.querySelector("#pass");
let pass2 = document.querySelector("#pass2");
let form = document.querySelector("#register");

form.addEventListener("submit", function(e) {
    if (pass.value !== pass2.value) {
        document.querySelector("#error_pass").textContent = "Not same password !";
        e.preventDefault();
    }
    if (pass.value.length < 6) {
        document.querySelector("#error_pass").textContent = "Password to short !";
        e.preventDefault();
    }
    for (let child of this.children) {
        if (child.value === "") {
            child.style.border = "2px solid red";
            document.querySelector("#error_pass").textContent = "We have to fill all input !";
            e.preventDefault();
        } else {
            child.style.border = "";
        }
    }

});