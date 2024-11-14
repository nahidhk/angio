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



function nomini(){
    const nominiid = document.getElementById("nominee_id").value;
    const nn = document.getElementById("nominee_name");
    const nf = document.getElementById("nominee_father_name");
    const nm = document.getElementById("nominee_mother_name");
    const np = document.getElementById("nominee_mobile");
    fetch('/config/api/api.php')
    .then(response => response.json()) 
    .then(data => {
        let found = false;
        data.forEach(item => {
            if (item.nid_number === nominiid) {
                console.log("ok");
                nn.value= item.name;
                nf.value= item.father_name;
                nm.value= item.mother_name;
                np.value= item.	phone_number;
            }
              
            
        });
        if (!found) {
            console.log("error");
           
        }
    })
    .catch(error => {
        console.log('Error:', error);
    });
}

function nid(){
    const nid = document.getElementById("nid_number").value;
    const a = document.getElementById("member_name");
    const b = document.getElementById("father_name");
    const c = document.getElementById("mother_name"); 
    const d = document.getElementById("mobile_number");
    fetch('/config/api/api.php')
    .then(response => response.json()) 
    .then(data => {
        let found = false;
        data.forEach(item => {
            if (item.nid_number === nid) {
                alert(`This Member Alredy joined \n join: ${item.joined} \n name: ${item.name} \n memberID: ${item.id}`)   
            } 
            if (item.nominee_id_number === nid) {
               a.value=item.nominee_name;
               b.value=item.nominee_father_name;
               c.value=item.nominee_mother_name;
               d.value=item.nominee_phone_number;

            } 
        });
        if (!found) {
            console.log("error");
           
        }
    })
    .catch(error => {
        console.log('Error:', error);
    });
}
