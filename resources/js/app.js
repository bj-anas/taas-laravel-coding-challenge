require("./bootstrap");

// hamberger menu

document.getElementById("toggle-button").onclick = function () {
  document.getElementById("navbar-links").classList.toggle("hidden");
};

// main menu links

document.getElementById("menu-button").onclick = function () {
  document.getElementById("menu-links").classList.toggle("hidden");
};
