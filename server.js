const http = require("http");
const fs = require("fs");
const path = require("path");

const PORT = 3000;

// Función para manejar la escritura del archivo JSON
const saveUser = (user, callback) => {
  const filePath = path.join(__dirname, "/database/database.json");
  fs.readFile(filePath, "utf-8", (err, data) => {
    if (err) return callback(err);

    let users = [];
    if (data) {
      users = JSON.parse(data);
    }

    // Verificar si el usuario ya existe
    if (users.some((u) => u.username === user.username)) {
      return callback(new Error("El usuario ya existe"));
    }

    // Agregar nuevo usuario y guardar en el archivo
    users.push(user);
    fs.writeFile(filePath, JSON.stringify(users, null, 2), (err) => {
      if (err) return callback(err);
      callback(null);
    });
  });
};

// Crear servidor HTTP
const server = http.createServer((req, res) => {
  if (req.method === "POST" && req.url === "/register") {
    let body = "";
    req.on("data", (chunk) => {
      body += chunk;
    });

    req.on("end", () => {
      try {
        const { username, password } = JSON.parse(body);

        if (!username || !password) {
          res.writeHead(400, { "Content-Type": "application/json" });
          return res.end(JSON.stringify({ message: "Campos incompletos" }));
        }

        saveUser({ username, password }, (err) => {
          if (err) {
            res.writeHead(409, { "Content-Type": "application/json" });
            return res.end(JSON.stringify({ message: err.message }));
          }

          res.writeHead(201, { "Content-Type": "application/json" });
          res.end(JSON.stringify({ message: "Usuario registrado con éxito" }));
        });
      } catch (err) {
        res.writeHead(400, { "Content-Type": "application/json" });
        res.end(JSON.stringify({ message: "Error en los datos enviados" }));
      }
    });
  } else {
    res.writeHead(404, { "Content-Type": "application/json" });
    res.end(JSON.stringify({ message: "Ruta no encontrada" }));
  }
});

// Iniciar servidor
server.listen(PORT, () => {
  console.log(`Servidor corriendo en http://localhost:${PORT}`);
});
