// dark Mode
const toggleTheme = document.getElementById('toggleTheme');
        const html = document.querySelector('html');

        toggleTheme.addEventListener('click', () => {
            html.classList.toggle('dark');
        });

// open_Modal
const openModalBtn = document.getElementById("openModal");
const closeModalBtns = [
  document.getElementById("closeModal"),
  document.getElementById("closeModalFooter"),
];
const modal = document.getElementById("myModal");
const body = document.body;
openModalBtn.addEventListener("click", () => {
  modal.classList.remove("hidden");
  body.classList.add("modal-open");
});
closeModalBtns.forEach((btn) =>
  btn.addEventListener("click", () => {
    modal.classList.add("hidden");
    body.classList.remove("modal-open");
  })
);

// Close modal when clicking outside the modal content
modal.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.classList.add("hidden");
    body.classList.remove("modal-open");
  }
});
document.querySelector(".player").addEventListener("click", displayModal);

function displayModal() {
  modal.classList.remove("hidden");
}