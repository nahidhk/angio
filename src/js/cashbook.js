console.log("cashbook js");

async function nodeval(appp) {
    try {
        const response = await fetch(`/config/api/${appp}.php`);
        const data = await response.json(); 
        const dataContainer = document.getElementById(appp);
        dataContainer.innerHTML = ""; 

        data.forEach((item) => {
            const itemElement = document.createElement("option");
            itemElement.value = item.officecode;  
            itemElement.textContent = item.codename;  
            dataContainer.appendChild(itemElement); 
        });
    } catch (error) {
        console.error("data error", error);
    }
}

function useridckdt() {
  loadsess();
  nodeval('setoffice');
  const nid = document.getElementById("userid").value; 
  fetch("/config/api/api.php")
    .then((response) => response.json())
    .then((data) => {
      let found = false;
      let mydataout = ""; 
      data.forEach((item) => {
        if (item.id === nid) {
          found = true; 
          mydataout = `
            <div>
              <img height="100" width="100" src="/src/php/photo/userimg/${item.user_img}" alt="" srcset="">
            </div>
            <div>
              Name : <n>${item.name}</n><br>
              ID : <n>${item.id}</n><br>
              Phone : <n>${item.phone_number}</n>
            </div>
          `;
        }
      });

      if (found) {
        document.getElementById("showmydat").innerHTML='<i class="fa-solid fa-spinner fa-spin-pulse icon-size"></i>'
        function calloutside(){
          document.getElementById("showmydat").innerHTML = mydataout;
        }
        setTimeout(calloutside, 3000);
      } else {
        document.getElementById("showmydat").innerHTML = "No member found!";
      }
    })
    .catch((error) => {
      console.log("Error:", error);
      document.getElementById("showmydat").innerHTML = "An error occurred!";
    });
}

function loadsess() {
  const adminname = sessionStorage.getItem("admin") || "No Admin Found";
  document.getElementById("adminnameio").value = adminname;
}

