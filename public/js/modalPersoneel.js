const modalPersoneel = document.querySelector(".modal-maak-personeel");
const modalPersoneelBtn = document.querySelector(".btn-maak-gebruiker");
const closePersoneel = document.querySelector(".close-personeel");

const modalEdit = document.querySelector(".modal-edit-personeel");
const modalEditBtn = document.querySelector(".btn-edit");
const modalEditClose = document.querySelector("close-edit");

const openModal = (modalName) => {
  modalName.style.display = "block";
};

const closeModal = (modalName) => {
  modalName.style.display = "none";
};

// Personeel
modalPersoneelBtn.addEventListener("click", () => {
  openModal(modalPersoneel);
});

closePersoneel.addEventListener("click", () => {
  closeModal(modalPersoneel);
});
