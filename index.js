const popup1 = document.querySelector(".popup1");

const borrow = document.querySelector(".borrow");

popup1.style.display = "none";
borrow.addEventListener("click", (e) => {
  popup1.style.display = "flex";
});
