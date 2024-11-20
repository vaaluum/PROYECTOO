<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta - Página de Información</title>
    <link rel="stylesheet" href="styles/consulta.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Garamond:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .horarios {
            margin-top: 20px;
            display: none;
            font-size: 1rem;
            color: #333;
        }
        .horarios table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .horarios th, .horarios td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        .no-disponible {
            background-color: #ffcccc;
            color: red;
            font-weight: bold;
        }
        .disponible button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        .disponible button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Encabezado principal -->
    <header>
        <h1>Consulta Información</h1>
    </header>

    <!-- Sección principal con formulario de consulta -->
    <main>
        <section class="consulta-section">
            <div class="consulta-form-container">
                <h2>Formulario de Consulta</h2>
                <form action="../" method="post">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="apellido">apellido:</label>
                    <input type="text" id="apellido" apellido="apellido" required>

                    <label for="correo">correo:</label>
                    <input type="email" id="correo" name="correo" required>

                    <label for="mascota">mascota:</label>
                    <input id="text" name="mascota" required></input>

                    <label for="edad">edad:</label>
                    <input id="number" name="edad" required></input>

                    <label for="descripción">descripción:</label>
                    <textarea id="text" name="descripción" required></textarea>



                    <!-- Menú desplegable para elegir profesional -->
                    <div class="dropdown">
                        <button type="button">Elegir Profesionales</button>
                        <div class="dropdown-content">
                            <?php
                            include("modelo/profesional.php");
                            echo mostrarprofesional();
                            ?>
                        </div>
                    </div>

                    <!-- Contenedores de horarios que se mostrarán al seleccionar un profesional -->
                    <div id="profesional1" class="horarios">
                        <h3>Horarios de Profesional 1</h3>
                        <table>
                            <tr>
                                <th>Horario</th>
                                <th>Disponibilidad</th>
                            </tr>
                            <tr>
                                <td>10:00 - 11:00</td>
                                <td class="no-disponible">No disponible</td>
                            </tr>
                            <tr>
                                <td>11:00 - 12:00</td>
                                <td class="disponible"><button type="button">Reservar</button></td>
                            </tr>
                            <tr>
                                <td>12:00 - 13:00</td>
                                <td class="disponible"><button type="button">Reservar</button></td>
                            </tr>
                            <tr>
                                <td>13:00 - 14:00</td>
                                <td class="no-disponible">No disponible</td>
                            </tr>
                        </table>
                    </div>
                    <div id="profesional2" class="horarios">
                        <h3>Horarios de Profesional 2</h3>
                        <table>
                            <tr>
                                <th>Horario</th>
                                <th>Disponibilidad</th>
                            </tr>
                            <tr>
                                <td>12:00 - 13:00</td>
                                <td class="disponible"><button type="button">Reservar</button></td>
                            </tr>
                            <tr>
                                <td>13:00 - 14:00</td>
                                <td class="disponible"><button type="button">Reservar</button></td>
                            </tr>
                            <tr>
                                <td>14:00 - 15:00</td>
                                <td class="no-disponible">No disponible</td>
                            </tr>
                            <tr>
                                <td>15:00 - 16:00</td>
                                <td class="no-disponible">No disponible</td>
                            </tr>
                        </table>
                    </div>
                    <div id="profesional3" class="horarios">
                        <h3>Horarios de Profesional 3</h3>
                        <table>
                            <tr>
                                <th>Horario</th>
                                <th>Disponibilidad</th>
                            </tr>
                            <tr>0
                                <td>15:00 - 16:00</td>
                                <td class="disponible"><button type="button">Reservar</button></td>
                            </tr>
                            <tr>
                                <td>16:00 - 17:00</td>
                                <td class="no-disponible">No disponible</td>
                            </tr>
                            <tr>
                                <td>17:00 - 18:00</td>
                                <td class="disponible"><button type="button">Reservar</button></td>
                            </tr>
                            <tr>
                                <td>18:00 - 19:00</td>
                                <td class="no-disponible">No disponible</td>
                            </tr>
                        </table>
                        <br>
                    </div>

                    <button type="submit" class="zoom">Enviar Consulta</button>
                </form>
            </div>
        </section>
    </main>

    <footer style="background-color: bisque; padding: 20px; text-align: center;">
        <p>&copy; 2024 Veterinaria Germon. Todos los derechos reservados.</p>
        <div style="margin: 10px 0;">
            <a href="https://www.facebook.com/tu-veterinaria" target="_blank" aria-label="Facebook" style="margin: 0 10px;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="width: 30px; height: 30px;">
            </a>
            <a href="https://www.instagram.com/tu-veterinaria" target="_blank" aria-label="Instagram" style="margin: 0 10px;">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" style="width: 30px; height: 30px;">
            </a>
            <a href="https://www.youtube.com/tu-veterinaria" target="_blank" aria-label="YouTube" style="margin: 0 10px;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733646.png" alt="YouTube" style="width: 30px; height: 30px;">
            </a>
            <a href="https://twitter.com/tu-veterinaria" target="_blank" aria-label="Twitter" style="margin: 0 10px;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" style="width: 30px; height: 30px;">
            </a>
        </div>
        <p>Teléfono: (123) 456-7890 | Correo: info@veterinaria-germon.com</p>
    </footer>

    <script src="js/horario.js"></script>

</body>
</html>
