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

  const contactSubmit = document.getElementById("submitContact");
  contactSubmit.addEventListener("submit", e => {
    e.preventDefault();
    let submitButton = document.getElementById("ContactButton");
    const url = "https://ag-ws-backend.herokuapp.com/user/contact";
    let data = {
      name: document.getElementById("a-name").value,
      email: document.getElementById("a-email").value,
      message: document.getElementById("a-message").value
    };
    submitButton.innerHTML = "Submitting...";
    submitButton.setAttribute("disabled", true);
    axios.post(url, data).then(res => {
      alert("Submitted Successfully");
      submitButton.innerHTML = "Send Message";
      submitButton.setAttribute("disabled", false);
      contactSubmit.reset();
    });
  });
})();

function toggleLight() {
  let linkContol = document.getElementById("link_control");
  let darktheme = window.location.origin + "/assets/styles/mainStyle.css";
  let lighttheme = window.location.origin + "/assets/styles/darkmain.css";
  if (linkContol.href === darktheme) {
    linkContol.setAttribute("href", lighttheme);
  } else {
    linkContol.setAttribute("href", darktheme);
  }
}
