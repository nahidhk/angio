function appdata(clickdata) {
  const id = sessionStorage.getItem('editid');
  localStorage.setItem("opendata", clickdata);
  document.getElementById(clickdata).classList = "active mybtn";
  const paths = {
    newuser: "./components/newuser.html",
    userlist: "./components/userlist.html",
    "status": "./components/status.php",
    edit: `./components/edit.php?id=${id}`,
    editbox: "./components/editbox.html",
    log: "./components/log.html",
    setting: "./components/setting.php",
    cashbook: "./components/cashbook.html",
    allcode: "./components/allcode.html",
    user: "./components/user.php",
  };
 
  const myfolder = document.getElementById("openphp");

  if (paths[clickdata]) {
    fetch(paths[clickdata])
      .then((response) => {
        if (!response.ok) throw new Error("No File ! you find the /components/<this is function file search the same folder menu.html page on the same file create the same same file > Poblem solved ");
        return response.text();
      })
      .then((html) => {
        myfolder.innerHTML = html;

      });
  } else {
    myfolder.innerHTML = `<br><br><h1 style=color:red><center>Error javascript <br>  function ${clickdata}(){<br>error code<br>[${clickdata}: "./components/${clickdata}.html]<br>}<br><br> add the <br> ${clickdata}: "./components/${clickdata}.html", <br> file =>  /src/js/components.js</center></h1>`;
  }
}

function autoclick() {
  var mybrn = localStorage.getItem("opendata");
  document.getElementById(mybrn).classList = "active mybtn";
  appdata(mybrn);

}
autoclick();

function calledit(idData) {
  const mic = `ldicon${idData}`;
  let element = document.getElementById(mic);
  element.classList.remove("fa-pencil", "fa-solid");
  element.classList.add("fa-solid", "fa-gear", "fa-spin");
  sessionStorage.setItem('editid', idData);
  setTimeout(function () {
    appdata('edit');
  }, 5000);
}

function openerx(){
  const aptbtn = document.getElementById("filterid").value;
  let element = document.getElementById("logappbtn");
  element.innerHTML="Loadding..."
  sessionStorage.setItem('editid', aptbtn);
  setTimeout(function () {
    appdata('edit');
  }, 5000);
 
}



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
    showsuser.style.display = "block";
    showsuser.src = URL.createObjectURL(suser.files[0]);
    suser.style.display = "none";
  }
  if (photoid === userimg.id) {
    showuserimg.style.display = "block";
    showuserimg.src = URL.createObjectURL(userimg.files[0]);
    userimg.style.display = "none";
  }
  if (photoid === nidfont.id) {
    snidf.style.display = "block";
    snidf.src = URL.createObjectURL(nidfont.files[0]);
    nidfont.style.display = "none";
  }
  if (photoid === nidback.id) {
    snidb.style.display = "block";
    snidb.src = URL.createObjectURL(nidback.files[0]);
    nidback.style.display = "none";
  }
  if (photoid === npic.id) {
    snpic.style.display = "block";
    snpic.src = URL.createObjectURL(npic.files[0]);
    npic.style.display = "none";
  }
  if (photoid === nsipic.id) {
    snspic.style.display = "block";
    snspic.src = URL.createObjectURL(nsipic.files[0]);
    nsipic.style.display = "none";
  }
}


function clicknp() {
  alert("ok")
  document.getElementById('npic').value = "ok vai";
}