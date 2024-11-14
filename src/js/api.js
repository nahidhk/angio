
async function displayData(searchInput = "") {
 
    try {
      const response = await fetch("/config/api/api.php");
      const data = await response.json();
      const dataContainer = document.getElementById("app");
      if (!dataContainer) {
        throw new Error("Element with id 'app' not found.");
      }
  
      dataContainer.innerHTML = "";
  
      const filteredData = data.filter(
        (item) =>
          (item.id && item.id.toLowerCase().includes(searchInput.toLowerCase())) ||
          (item.name && item.name.toLowerCase().includes(searchInput.toLowerCase())) ||
          (item.phone_number && item.phone_number.toLowerCase().includes(searchInput.toLowerCase())) ||
          (item.nid_number && item.nid_number.toLowerCase().includes(searchInput.toLowerCase())) ||
          (item.joied && item.joied.toLowerCase().includes(searchInput.toLowerCase()))
      );
      
  
   
    
      filteredData.forEach((item) => {
        
        const itemElement = document.createElement("tr");
        itemElement.innerHTML = `
      <tr>
            <td style="font-size: 20pt;text-align: center;">${item.id}</td>
            <td style="text-align: center;"><center><div style="text-align: center;height: 100px;width: 100px;"><img style="height: 100%;width: 100%;" src="/src/php/photo/userimg/${item.user_img}"></div></center></td>
            <td style="font-size: medium;">${item.name} </td>
            <td style="font-size: medium;">${item.nid_number} </td>
            <td style="font-size: medium;">${item.phone_number} </td>
           <td>
            <div style="display: flex;">
                <button onclick="appdata('edit')" id="edit" class="apibtn"><i class="fa-solid fa-pencil"></i></button>
                <button class="apibtn"><i class="fa-regular fa-file-lines"></i></button>
                <button class="apibtn"><i class="fa-solid fa-print"></i></button>
            </div>
           </td>
        </tr>
              `;
  
        dataContainer.appendChild(itemElement);
      });
    } catch (error) {
      console.error("data error", error);
    }
  }
  

  function searchData() {
    const searchInput = document.querySelector("#search").value;
    displayData(searchInput);
    window.location.href ="#" + searchInput ;
  }
 
  

console.log("api js")
