  document.addEventListener("DOMContentLoaded", () => {
    fetch("navbar/nav.html")
      .then(res => res.text())
      .then(data => {
        document.getElementById("navbar-container").innerHTML = data;

        const bell = document.getElementById("notification");
        const dropdown = bell.querySelector(".dropdown");

        if (bell && dropdown) {
          bell.addEventListener("click", function (e) {
            e.stopPropagation(); 
            if (dropdown.style.display === "block") {
              dropdown.style.display = "none";
            } else {
              dropdown.style.display = "block";
            }
          });

          
          document.body.addEventListener("click", function () {
            dropdown.style.display = "none";
          });
        }
      });
  });
