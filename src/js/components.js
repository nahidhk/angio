function appdata(clickdata) {
  const paths = {
    1: "./components/newuser.html",
    2: "./components/userlist.php",
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
    showsuser.src = URL.createObjectURL(suser.files[0]);
    suser.style.display = "none";
  }
  if (photoid === userimg.id) {
    showuserimg.src = URL.createObjectURL(userimg.files[0]);
    userimg.style.display = "none";
  }
  if (photoid === nidfont.id) {
    snidf.src = URL.createObjectURL(nidfont.files[0]);
    nidfont.style.display = "none";
  }
  if (photoid === nidback.id) {
    snidb.src = URL.createObjectURL(nidback.files[0]);
    nidback.style.display = "none";
  }
  if (photoid === npic.id) {
    snpic.src = URL.createObjectURL(npic.files[0]);
    npic.style.display = "none";
  }
  if (photoid === nsipic.id) {
    snspic.src = URL.createObjectURL(nsipic.files[0]);
    nsipic.style.display = "none";
  }
}
