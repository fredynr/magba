  document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("btn");
    if (btn) {
      btn.addEventListener("click", () => {
        console.log("soy un botón");
      });
    } else {
      console.warn("No se encontró el botón con id='btn'");
    }
  });
