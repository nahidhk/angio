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


function userid() {
    const nid = document.getElementById("userid").value;
    fetch("/config/api/api.php")
      .then((response) => response.json())
      .then((data) => {
        let found = false;
        data.forEach((item) => {
          if (item.id === nid) {
            alert(
              `This Member Alredy joined \n join: ${item.joined} \n name: ${item.name} \n memberID: ${item.id}`
            );
          }
          if (item.id === nid) {
           
          }
        });
        if (!found) {
          console.log("error");
        }
      })
      .catch((error) => {
        console.log("Error:", error);
      });
  }
