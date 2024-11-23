// Ruta al archivo JSON
const jsonPath = "../database/database.json";

// Obtener elementos del DOM
const loginForm = document.getElementById("loginForm");
const message = document.getElementById("message");

// Cargar usuarios desde JSON
async function fetchUsers() {
  try {
    const response = await fetch(jsonPath);
    console.log(response);
    if (!response.ok) {
      throw new Error("Error al cargar la base de datos");
    }
    return await response.json();
  } catch (error) {
    console.error(error);
    message.style.color = "red";
    message.textContent = "Error loading user database.";
  }
}

// Validar credenciales
async function validateLogin(username, password) {
  const users = await fetchUsers();
  if (!users) return false;

  // Buscar usuario con credenciales válidas
  return users.find(
    (user) => user.username === username && user.password === password
  );
}

// Manejar inicio de sesión
loginForm.addEventListener("submit", async (event) => {
  event.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Validar login
  const user = await validateLogin(username, password);
  if (user) {
    message.style.color = "green";
    message.textContent = "Login successful! Redirecting...";
    // Guardar sesión en localStorage
    localStorage.setItem(
      "session",
      JSON.stringify({ username: user.username })
    );
    setTimeout(() => {
      window.location.href = "/index.html"; // Cambia la URL según tu necesidad
    }, 2000);
  } else {
    message.style.color = "red";
    message.textContent = "Invalid username or password.";
  }
});

// Comprobar sesión existente
function checkSession() {
  const session = localStorage.getItem("session");
  if (session) {
    const user = JSON.parse(session);
    message.style.color = "green";
    message.textContent = `Welcome back, ${user.username}!`;
    setTimeout(() => {
      window.location.href = "/index.html";
    }, 2000);
  }
}

// Ejecutar comprobación al cargar la página
checkSession();
