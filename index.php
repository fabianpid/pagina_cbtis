<?php
include("conect.php"); // Asegúrate de que este sea el nombre del archivo

$query = "SELECT * FROM programas";
// MUCHO OJO AQUÍ: Si en conect.php usaste $conexion, aquí debe ser $conexion
$resultado = mysqli_query($conexion, $query); 

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portal de Apoyo Estudiantil - CBTis 165</title>
    <link rel="stylesheet" href="estilazo.css"> </head>
<body>

    <header>
        <img src="logocbtiano.jpg" alt="Logotipo CBTis 165" width="100">
        <h1>Programas de Formación Integral "Leona Vicario"</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#academico">Apoyo Académico</a></li>
            <li><a href="#salud">Bienestar y Salud</a></li>
            <li><a href="#desarrollo">Desarrollo Integral</a></li>
            <li><a href="#emprendimiento">Emprendimiento y Clubes</a></li>
        </ul>
    </nav>

    <main>
        <section id="contenido-programas">
            <h2>Catálogo de Programas Estudiantiles</h2>
            <p>Consulta la información de los programas activos (SINATA, ECALE, PRONAFOLE, etc.)</p>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Programa</th>
                        <th>Descripción</th>
                        <th>Área de Impacto</th>
                        <th>Requisitos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Punto 3: Ciclo while para generar las filas dinámicamente
                    if ($resultado) {
                        while ($row = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['descripcion'] . "</td>";
                            echo "<td>" . $row['area_impacto'] . "</td>";
                            echo "<td>" . $row['requisitos'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </section>

        <hr>

        <section id="academico">
            <h3>Apoyo Académico</h3>
            <p>Enfoque en <strong>SINATA</strong> (Tutorías) y <strong>PRONAFOLE</strong> (Fomento a la lectura).</p>
        </section>

        <section id="salud">
            <h3>Bienestar y Salud</h3>
            <p>Servicios de <strong>FOMALASA</strong>, Consultorio Médico y Consultorio Sexual-Mente Responsable.</p>
        </section>

        <section id="desarrollo">
            <h3>Desarrollo Integral</h3>
            <p>Actividades de <strong>ECALE</strong> (Cine) y <strong>AMA DGETI</strong> (Medio Ambiente).</p>
        </section>

        <section id="emprendimiento">
            <h3>Emprendimiento y Talento</h3>
            <p>Espacio para <strong>MEEMS</strong> y diversos <strong>Clubes</strong> (Deportivos, Culturales y de Ciencias).</p>
        </section>
    </main>

    <footer>
        <p><strong>Contacto:2288162077</strong> carretera antigua xalapa - coatepec km 8.5,consolopa,coatepec,veracruz | Tel: 228 816 2077</p>
        <p>Desarrollado por: <strong>Fabián emir pineda hernandez</strong> &copy; 2026</p>
        <div class="redes">
            <a href="#">whatsapp:2281196948</a> | <a href="#">Instagram:pinedaa_hz</a>
        </div>
    </footer>

</body>
</html>