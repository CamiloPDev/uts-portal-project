document
  .getElementById("registerForm")
  .addEventListener("submit", async function (event) {
    event.preventDefault();

    // Obtener los valores de los campos
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    const messageElement = document.createElement("p");
    document.querySelector(".container").appendChild(messageElement);

    // Verificar si las contraseñas coinciden
    if (password !== confirmPassword) {
      messageElement.textContent = "Las contraseñas no coinciden.";
      messageElement.style.color = "red";
      return;
    }

    // Verificar si el campo de usuario está vacío
    if (!username || !password) {
      messageElement.textContent = "Por favor, llena todos los campos.";
      messageElement.style.color = "red";
      return;
    }

    try {
      // Enviar los datos al servidor
      const response = await fetch("http://localhost:3000/register", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ username, password }),
        mode: "no-cors",
      });
      // guardar en el local storage
      localStorage.setItem("session", JSON.stringify({ username: username }));
      window.location.href = "/index.html";
    } catch (error) {
      messageElement.textContent = "Error al conectar con el servidor.";
      messageElement.style.color = "red";
    }
  });
