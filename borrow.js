const btn = document.querySelector(".btn");

const popup = document.querySelector(".popup");
popup.style.display = "none";
btn.addEventListener("click", (e) => {
  console.log(popup);
  popup.style.display = "flex";
});
