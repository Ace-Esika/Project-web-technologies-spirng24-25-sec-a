function filterMenu() {
  const filterValue = document.getElementById("filter").value;
  const forms = document.querySelectorAll(".menu-grid form");

  forms.forEach(form => {
    const item = form.querySelector(".food-item");
    const tag = item.getAttribute("data-tag");

    if (filterValue === "all" || tag === filterValue) {
      form.style.display = "block";
    } else {
      form.style.display = "none";
    }
  });
}
