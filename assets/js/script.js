function toggleMenu() {
  const menu = document.querySelector(".menu");
  const hamburger = document.querySelector(".hamburger");

  menu.classList.toggle("active");
  hamburger.classList.toggle("active");
}

// var img1 = document.getElementById("img1");
// var img2 = document.getElementById("img2");
// var over = document.getElementById("over");
// img1.addEventListener("click", () => {
//   over.style.display = "block";
// });

document.querySelectorAll(".gallery img").forEach((image) => {
  image.onclick = () => {
    document.querySelector(".popup-image").style.display = "block";
    document.querySelector(".popup-image img").src = image.getAttribute("src");
  };
});

document.querySelector(".popup-image span").onclick = () => {
  document.querySelector(".popup-image").style.display = "none";
};
