function appdata(clickdata) {
  localStorage.setItem("opendata",clickdata);
  document.getElementById(clickdata).classList="active mybtn";
  const paths = {
    newuser: "./components/newuser.html",
    userlist: "./components/userlist.html",
    "status": "./components/status.html",
    edit:"./components/edit.php"
  };

  const myfolder = document.getElementById("openphp");

  if (paths[clickdata]) {
    fetch(paths[clickdata])
      .then((response) => {
        if (!response.ok) throw new Error("Network response was not ok");
        return response.text();
      })
      .then((html) => {
        myfolder.innerHTML = html;
       
      });
  } else {
    myfolder.innerHTML = `<br><br><h1 style=color:red><center>Error Your Function Code : ${clickdata}</center></h1>`;
  }
}

function autoclick(){
  var mybrn = localStorage.getItem("opendata");
  document.getElementById(mybrn).classList="active mybtn";
  appdata(mybrn);
  
}
autoclick();




function upphoto(photoid) {
  const userimg = document.getElementById("userimg");
  const showuserimg = document.getElementById("suserimg");
  const suser = document.getElementById("suser");
  const showsuser = document.getElementById("simg");
  const nidfont = document.getElementById("nidfont");
  const snidf = document.getElementById("snidf");
  const nidback = document.getElementById("nidback");
  const snidb = document.getElementById("snidb");
  const npic = document.getElementById("npic");
  const snpic = document.getElementById("snpic");
  const nsipic = document.getElementById("nspic");
  const snspic = document.getElementById("snspic");
  if (photoid === suser.id) {
    showsuser.style.display="block";
    showsuser.src = URL.createObjectURL(suser.files[0]);
    suser.style.display = "none";
  }
  if (photoid === userimg.id) {
    showuserimg.style.display="block";
    showuserimg.src = URL.createObjectURL(userimg.files[0]);
    userimg.style.display = "none";
  }
  if (photoid === nidfont.id) {
    snidf.style.display="block";
    snidf.src = URL.createObjectURL(nidfont.files[0]);
    nidfont.style.display = "none";
  }
  if (photoid === nidback.id) {
    snidb.style.display="block";
    snidb.src = URL.createObjectURL(nidback.files[0]);
    nidback.style.display = "none";
  }
  if (photoid === npic.id) {
    snpic.style.display="block";
    snpic.src = URL.createObjectURL(npic.files[0]);
    npic.style.display = "none";
  }
  if (photoid === nsipic.id) {
    snspic.style.display="block";
    snspic.src = URL.createObjectURL(nsipic.files[0]);
    nsipic.style.display = "none";
  }
}


function clicknp(){
  alert("ok")
  document.getElementById('npic').value="ok vai";
}