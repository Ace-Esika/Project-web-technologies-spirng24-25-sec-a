document.addEventListener("DOMContentLoaded", () => {
    fetch("home_nav.html")
      .then(res => res.text())
      .then(data => {
        document.getElementById("navbar-container").innerHTML = data;

        const bell = document.getElementById("notification");
        const dropdown = bell.querySelector(".dropdown");

        if (bell && dropdown) {
          bell.addEventListener("click", function (e) {
            e.stopPropagation(); // prevent the click from bubbling to the body
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
          });

          
          document.body.addEventListener("click", function () {
            dropdown.style.display = "none";
          });
        }
      }).catch(err => {
        console.error("Failed to load home_nav.html:", err);
      });
  });
