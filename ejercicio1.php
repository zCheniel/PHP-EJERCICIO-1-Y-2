<?php
$datos = array(
    array("cedula" => "123456789", "nombre" => "Juan", "matematica" => 18, "fisica" => 15, "programacion" => 10),
    array("cedula" => "987654321", "nombre" => "Maria", "matematica" => 15, "fisica" => 15, "programacion" => 10),
    array("cedula" => "456789123", "nombre" => "Pedro", "matematica" => 10, "fisica" => 17, "programacion" => 20),
    array("cedula" => "321654987", "nombre" => "Ana", "matematica" => 9, "fisica" => 9, "programacion" => 20)
);

$promedio_matematica = 0;
$promedio_fisica = 0;
$promedio_programacion = 0;

$aprobados_matematica = 0;
$aprobados_fisica = 0;
$aprobados_programacion = 0;

$reprobados_matematica = 0;
$reprobados_fisica = 0;
$reprobados_programacion = 0;

$aprobados_todas = 0;
$aprobados_dos_materias = 0;

$maxima_matematica = 0;
$maxima_fisica = 0;
$maxima_programacion = 0;

foreach ($datos as $alumno) {
    $promedio_matematica += $alumno["matematica"];
    $promedio_fisica += $alumno["fisica"];
    $promedio_programacion += $alumno["programacion"];

    if ($alumno["matematica"] >= 10) {
        $aprobados_matematica++;
    } else {
        $reprobados_matematica++;
    }

    if ($alumno["fisica"] >= 10) {
        $aprobados_fisica++;
    } else {
        $reprobados_fisica++;
    }

    if ($alumno["programacion"] >= 10) {
        $aprobados_programacion++;
    } else {
        $reprobados_programacion++;
    }

    if ($alumno["matematica"] >= 10 && $alumno["fisica"] >= 10 && $alumno["programacion"] >= 10) {
        $aprobados_todas++;
    } elseif (($alumno["matematica"] >= 10 && $alumno["fisica"] >= 10) || ($alumno["matematica"] >= 10 && $alumno["programacion"] >= 10) || ($alumno["fisica"] >= 10 && $alumno["programacion"] >= 10)) {
        $aprobados_dos_materias++;
    }

    if ($alumno["matematica"] > $maxima_matematica) {
        $maxima_matematica = $alumno["matematica"];
    }

    if ($alumno["fisica"] > $maxima_fisica) {
        $maxima_fisica = $alumno["fisica"];
    }

    if ($alumno["programacion"] > $maxima_programacion) {
        $maxima_programacion = $alumno["programacion"];
    }
}

$promedio_matematica /= count($datos);
$promedio_fisica /= count($datos);
$promedio_programacion /= count($datos);

echo "Promedio de matemática: ".$promedio_matematica."\n";
echo "Promedio de física: ".$promedio_fisica."\n";
echo "Promedio de programación: ".$promedio_programacion."\n";

echo "\n";

echo "Número de alumnos aprobados en matemática: ".$aprobados_matematica."\n";
echo "Número de alumnos aprobados en física: ".$aprobados_fisica."\n";
echo "Número de alumnos aprobados en programación: ".$aprobados_programacion."\n";

echo "\n";

echo "Número de alumnos reprobados en matemática: ".$reprobados_matematica."\n";
echo "Número de alumnos reprobados en física: ".$reprobados_fisica."\n";
echo "Número de alumnos reprobados en programación: ".$reprobados_programacion."\n";

echo "\n";

echo "Número de alumnos que aprobaron todas las materias: ".$aprobados_todas."\n";
echo "Número de alumnos que aprobaron dos materias: ".$aprobados_dos_materias."\n";

echo "\n";

echo "Nota máxima en matemática: ".$maxima_matematica."\n";
echo "Nota máxima en física: ".$maxima_fisica."\n";
echo "Nota máxima en programación: ".$maxima_programacion."\n";
?>
