console.log("Haloo aku console");
document.getElementById("judul").innerHTML = "Ini Navbar - Dari Script JS!";
document.querySelector(".coba h3").style.color = "blue";

// Toggle dark mode untuk body
const btn = document.getElementById("toggleBtn");
const body = document.body;

btn.addEventListener("click", () => {
  body.classList.toggle("dark");
});

// Toggle dark mode untuk semua card
const cards = document.querySelectorAll(".card");

btn.addEventListener("click", () => {
  cards.forEach((card) => {
    card.classList.toggle("dark");
  });
});

const gambar = ["img/img1.png", "img/img2.png", "img/img3.png"];
let index = 0;

function gantiGambar() {
  index = (index + 1) % gambar.length;
  document.getElementById("gambar").src = gambar[index];
}

function bounce() {
  const judul = document.getElementById("bounce");
  judul.classList.add("animate");
  setTimeout(() => judul.classList.remove("animate"), 500);
}

setInterval(bounce, 1000);

const texts = [
  "Hello, I'm learning JavaScript!",
  "I love front-end development!",
  "Typing effects are so cool!",
];

const typingElement = document.getElementById("typing");
let textIndex = 0;
let charIndex = 0;
let isDeleting = false;

function type() {
  const currentText = texts[textIndex];
  if (isDeleting) {
    typingElement.textContent = currentText.substring(0, charIndex - 1);
    charIndex--;
  } else {
    typingElement.textContent = currentText.substring(0, charIndex + 1);
    charIndex++;
  }

  let typingSpeed = isDeleting ? 60 : 100;

  if (!isDeleting && charIndex === currentText.length) {
    typingSpeed = 1200;
    isDeleting = true;
  } else if (isDeleting && charIndex === 0) {
    isDeleting = false;
    textIndex = (textIndex + 1) % texts.length;
    typingSpeed = 500;
  }

  setTimeout(type, typingSpeed);
}

type();
