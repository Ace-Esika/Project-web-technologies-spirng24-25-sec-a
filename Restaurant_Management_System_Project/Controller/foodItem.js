function filterMenu() {
    const filterValue = document.getElementById("filter").value;
    const items = document.querySelectorAll(".food-item");

    items.forEach(item => {
      const tag = item.getAttribute("data-tag");
      if (filterValue === "all" || tag === filterValue) {
        item.style.display = "block";
      } 
      else {
        item.style.display = "none";
      }
    });
  }