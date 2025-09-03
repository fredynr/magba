const modalSierra = document.getElementById("modal-sierra");
const openBtnSierra = document.getElementById("btn-sierra");
// const closeBtnSierra = document.querySelector(".btn-close");
const btnCloseSierra = document.getElementById("btn-close-sierra")

openBtnSierra.addEventListener("click", () => {
  modalSierra.classList.remove("hidde-modal")
  modalSierra.classList.add("show-modal")
});

btnCloseSierra.addEventListener("click", () => {
  modalSierra.classList.remove("show-modal")
  modalSierra.classList.add("hidde-modal")
});

window.addEventListener("click", (e) => {
  if (e.target === modalSierra) {
    modalSierra.classList.remove("show-modal")
    modalSierra.classList.add("hidde-modal")
  }
});

// EASY
const modalEasy = document.getElementById("modal-easy");
const openBtnEasy = document.getElementById("btn-easy");
const closeBtnEasy = document.getElementById("btn-close-easy");

openBtnEasy.addEventListener("click", () => {
  modalEasy.classList.remove("hidde-modal")
  modalEasy.classList.add("show-modal")
});

closeBtnEasy.addEventListener("click", () => {
  modalEasy.classList.remove("show-modal")
  modalEasy.classList.add("hidde-modal")
});

window.addEventListener("click", (e) => {
  if (e.target === modalEasy) {
    modalEasy.classList.remove("show-modal")
    modalEasy.classList.add("hidde-modal")
  }
});
