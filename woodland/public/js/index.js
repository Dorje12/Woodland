const big_wrapper = document.querySelector(".big-wrapper");
const hamburger_menu = document.querySelector(".hamburger-menu");

hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });