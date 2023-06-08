<?php
$empleados = array(
    array("nombre" => "Juan Perez", "edad" => 30, "estado_civil" => "casado", "sexo" => "masculino", "sueldo" => 3000),
    array("nombre" => "Maria Gomez", "edad" => 25, "estado_civil" => "soltera", "sexo" => "femenino", "sueldo" => 2000),
    array("nombre" => "Pedro Rodriguez", "edad" => 40, "estado_civil" => "casado", "sexo" => "masculino", "sueldo" => 3500),
    array("nombre" => "Ana Fernandez", "edad" => 35, "estado_civil" => "viuda", "sexo" => "femenino", "sueldo" => 1500),
    array("nombre" => "Carlos Lopez", "edad" => 45, "estado_civil" => "soltero", "sexo" => "masculino", "sueldo" => 4000)
);

$total_femenino = 0;
$hombres_casados_2500 = 0;
$mujeres_viudas_1000 = 0;
$edad_promedio_hombres = 0;
$total_hombres = 0;

foreach ($empleados as $empleado) {
    if ($empleado["sexo"] == "femenino") {
        $total_femenino++;
    }

    if ($empleado["sexo"] == "masculino") {
        $total_hombres++;
        $edad_promedio_hombres += $empleado["edad"];
    }

    if ($empleado["sexo"] == "masculino" && $empleado["estado_civil"] == "casado" && $empleado["sueldo"] > 2500) {
        $hombres_casados_2500++;
    }

    if ($empleado["sexo"] == "femenino" && $empleado["estado_civil"] == "viuda" && $empleado["sueldo"] > 1000) {
        $mujeres_viudas_1000++;
    }
}

$edad_promedio_hombres /= $total_hombres;

echo "Total de empleados del sexo femenino: ".$total_femenino."\n";
echo "\n";
echo "Total de hombres casados que ganan más de 2500$: ".$hombres_casados_2500."\n";
echo "\n";
echo "Total de mujeres viudas que ganan más de 1000$: ".$mujeres_viudas_1000."\n";
echo "\n";
echo "Edad promedio de los hombres: ".$edad_promedio_hombres."\n";
?>
