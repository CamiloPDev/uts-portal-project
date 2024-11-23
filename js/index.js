// Obtener elementos del DOM
const logoutButton = document.getElementById("logoutButton");
const loginLink = document.getElementById("loginLink");

// redirigir a la página de inicio de sesión si no hay sesión activa
function redirectCheckSession() {
  const session = localStorage.getItem("session");
  if (!session) {
    alert("No has iniciado sesión. Redirigiendo al inicio de sesión...");
    window.location.href = "/pages/login.html"; // Cambia la URL según tu necesidad
  }
}

// Verificar sesión activa
function checkSession() {
  const session = localStorage.getItem("session");
  if (session) {
    // Mostrar botón de cierre de sesión y ocultar enlace de login
    logoutButton.style.display = "block";
    loginLink.style.display = "none";
  } else {
    // Mostrar enlace de login y ocultar botón de cierre de sesión
    logoutButton.style.display = "none";
    loginLink.style.display = "block";
  }
}

// Manejar cierre de sesión
logoutButton.addEventListener("click", () => {
  // Eliminar datos de la sesión
  localStorage.removeItem("session");
  alert("Sesión cerrada.");
  // Actualizar visibilidad de los botones
  checkSession();
  // Redirigir a la página de inicio de sesión
  window.location.href = "/pages/login.html"; // Cambia la URL según tu necesidad
});

// Ejecutar verificación de sesión al cargar la página
checkSession();
redirectCheckSession();

// Verificar si hay sesión activa
// function checkSession() {
//   const session = localStorage.getItem("session");
//   if (!session) {
//     alert("You are not logged in. Redirecting to login...");
//     window.location.href = "/pages/login.html"; // Cambia la URL al login
//   }
// }

// Cerrar sesión
// function logout() {
//   localStorage.removeItem("session");
//   alert("Logged out successfully!");
//   window.location.href = "index.html"; // Cambia la URL al login
// }

// Ejecutar comprobación al cargar la página
// checkSession();
