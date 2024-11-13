
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
          item.id.toLowerCase().includes(searchInput.toLowerCase()) ||
          item.name.toLowerCase().includes(searchInput.toLowerCase()) ||
          item.phone.toLowerCase().includes(searchInput.toLowerCase()) ||
          item.product.toLowerCase().includes(searchInput.toLowerCase()) 
      );
  
   
    
      filteredData.forEach((item) => {
        
        const itemElement = document.createElement("tr");
        itemElement.innerHTML = `
            <td>${item.id}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
              `;
  
        dataContainer.appendChild(itemElement);
      });
    } catch (error) {
      console.error("data error", error);
    }
  }
  

  function searchData() {
    const searchInput1 = document.querySelector("#search").value;
    displayData(searchInput1);
    window.location.href ="#" + searchInput1 ;
  }
  function mydata(){
    document.querySelector("#search").value="";
    searchData()
  }
  displayData();
