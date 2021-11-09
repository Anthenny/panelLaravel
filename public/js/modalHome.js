const modalReserveren = document.querySelector(".modal-reserveren");
const modalReserveerBtn = document.querySelector(".btn-reserveren");
const modalReserverenClose = document.querySelector(".close-reserveren");

const openModal = (modalName) => {
  modalName.style.display = "block";
};

const closeModal = (modalName) => {
  modalName.style.display = "none";
};

modalReserveerBtn.addEventListener("click", () => {
  openModal(modalReserveren);
});

modalReserverenClose.addEventListener("click", () => {
  closeModal(modalReserveren);
});
