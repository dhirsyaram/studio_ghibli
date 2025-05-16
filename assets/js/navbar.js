// aktifkan nav item berdasarkan URL path
function highlightActiveNav() {
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll(".nav-link");

  navLinks.forEach((link) => {
    const linkPath = new URL(link.href).pathname;

    if (linkPath === currentPath) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });

  // ikon logo aktif kalau halaman Home
  const logo = document.querySelector(".navbar-icon");
  if (currentPath.endsWith("index.php")) {
    logo.classList.add("active");
  } else {
    logo.classList.remove("active");
  }
}

highlightActiveNav();
