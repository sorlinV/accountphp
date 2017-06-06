let pass = document.querySelector("#pass");
let pass2 = document.querySelector("#pass2");
let form = document.querySelector("#register");

form.addEventListener("submit", function(e) {
    for (let child of this.children) {
        if (child.value === "") {
            child.style.border = "1px solid red";
            e.preventDefault();
        } else {
            child.style.border = "";
        }
    }
    if (pass.value === pass2.value) {
        //incomining
    } else {
        document.querySelector("#error_pass").textContent = "Not same password !";
        e.preventDefault();
    }
});