const toggle = document.getElementById("toggle");
const nav = document.querySelector("nav");
const logo = document.querySelector("nav .logo a");
const menu = document.querySelector("nav .checkbox i");
const links = document.querySelectorAll("ul li a");
const section = document.querySelector(".section");
const subtitle = document.querySelector(".subtitle");
const title = document.querySelector(".title");
const span = document.querySelector(".title span");
const description = document.querySelector(".description");
const buttons = document.querySelectorAll(".action__btns button");

toggle.addEventListener("click", function () {
    nav.classList.toggle("light-mode");
    logo.classList.toggle("light-mode");
    menu.classList.toggle("light-mode");
    links.forEach((link) => link.classList.toggle("light-mode"));
    section.classList.toggle("light-mode");
    subtitle.classList.toggle("light-mode");
    title.classList.toggle("light-mode");
    span.classList.toggle("light-mode");
    description.classList.toggle("light-mode");
    buttons.forEach((button) => button.classList.toggle("light-mode"));
  });


  document.addEventListener("DOMContentLoaded", function () {
    const aboutMeButton = document.querySelector(".about__me a");
    const portfolioButton = document.querySelector(".portfolio a");

    aboutMeButton.addEventListener("click", function (event) {
      event.preventDefault(); 

      const confirmation = confirm("Apakah Anda yakin ingin pergi ke halaman About Me?");

      if (confirmation) {
        // Jika pengguna mengonfirmasi, lanjutkan ke halaman "About Me"
        window.location.href = aboutMeButton.getAttribute("href");
      }
    });

    portfolioButton.addEventListener("click", function (event) {
      event.preventDefault(); // Mencegah aksi bawaan dari tautan

      const confirmation = confirm("Apakah Anda yakin ingin pergi ke halaman Portofolio?");

      if (confirmation) {
        // Jika pengguna mengonfirmasi, lanjutkan ke halaman "Portofolio"
        window.location.href = portfolioButton.getAttribute("href");
      }
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const skillsLink = document.getElementsByClassName("nav__content")[0].querySelectorAll("li")[2].querySelector("a");
    const contactLink = document.getElementsByClassName("nav__content")[0].querySelectorAll("li")[4].querySelector("a");

    skillsLink.addEventListener("click", function () {
      alert("Halaman ini belum tersedia");
    });

    contactLink.addEventListener("click", function () {
      alert("Halaman ini belum tersedia");
    });
  });

