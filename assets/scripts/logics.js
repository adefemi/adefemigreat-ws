(() => {
  // logics for nav-drawal toggling

  let toggleBotton = document.getElementById("nav-drawer");
  let toggleBotton2 = document.getElementById("overlay_toggle");

  let drawal = document.getElementById("drawal");
  const drawalOpenClass = "drawal-open";

  toggleBotton2.addEventListener("click", () => {
    if (drawal.classList.contains(drawalOpenClass)) {
      drawal.classList.remove(drawalOpenClass);
    }
  });

  toggleBotton.addEventListener("click", () => {
    if (drawal.classList.contains(drawalOpenClass)) {
      drawal.classList.remove(drawalOpenClass);
    } else {
      drawal.classList.add(drawalOpenClass);
    }
  });
})();
