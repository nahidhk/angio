// check the server login
function logintheapp(){
    const login = sessionStorage.getItem("login")
    if (login == "true") {
        
    } else {
        window.location="/login"
    }
};logintheapp();

// open the account info 
function account() {
    const acc = document.getElementById("account");
    if (acc.classList.contains("vcc")) {
        acc.classList.remove("vcc");
        acc.classList.add("account");
    } else {
        acc.classList.remove("account");
        acc.classList.add("vcc");
    }
}


