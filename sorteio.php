<?php
// Matriz com todos os participantes
$participantes = array($participantes);
// Definindo o número de participantes
$numParticipantes = sizeof($participantes);
// Informações adicionais
$chances = round(1 / $numParticipantes);
echo "- Temos no total <b>".$numParticipantes."</b> participantes; <br />";

// Sorteando
# Primeiro ganhador
$sorteado[1] = $participantes[rand(0,$numParticipantes - 1)];
# Segundo ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[2] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[2] == $sorteado[1]) {
        --$i;
    }
}
# Terceiro ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[3] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[3] == $sorteado[1] || $sorteado[3] == $sorteado[2]) {
        --$i;
    }
}

# Quarto ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[4] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[4] == $sorteado[1] || $sorteado[4] == $sorteado[2]) {
        --$i;
    }
}

# Quinto ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[5] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[5] == $sorteado[1] || $sorteado[5] == $sorteado[2]) {
        --$i;
    }
}

# Sexto ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[6] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[6] == $sorteado[1] || $sorteado[6] == $sorteado[2]) {
        --$i;
    }
}

# Setimo ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[7] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[7] == $sorteado[1] || $sorteado[7] == $sorteado[2]) {
        --$i;
    }
}

# Oitavo ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[8] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[8] == $sorteado[1] || $sorteado[8] == $sorteado[2]) {
        --$i;
    }
}

# Nono ganhador
for ($i = 1; $i < 2; $i++) {
    $sorteado[9] = $participantes[rand(0,$numParticipantes - 1)];
    // Caso o ganhador já tenha saido, sorteia novamente.
    if ($sorteado[9] == $sorteado[1] || $sorteado[9] == $sorteado[2]) {
        --$i;
    }
}
// Exibindo ganhadores
echo "<b>Primeiro Grupo:</b> <br />";
echo "<b> - 

" . $sorteado[1] . $sorteado[2] . $sorteado[3] . $sorteado[4]. "<br />";

echo "<b>Segundo Grupo:</b> <br />";
echo "<b> " . $sorteado[5] . $sorteado[6] . $sorteado[7] . $sorteado[7]. "<br />";

echo "<b>Terceiro Grupo:</b> <br />";
echo "<b> " . $sorteado[5] . $sorteado[6] . $sorteado[7] . $sorteado[7]. "<br />";

echo "<b>Quarto Grupo:</b> <br />";
echo "<b>" . $sorteado[5] . $sorteado[6] . $sorteado[7] . $sorteado[7]. "<br />";
// echo "<b>Grupos:</b> <br />";
// echo "<b>1°</b> - " . $sorteado[1] . "<br />";
// echo "<b>2°</b> - " . $sorteado[2] . "<br />";
// echo "<b>3°</b> - " . $sorteado[3] . "<br />";
// echo "<b>4°</b> - " . $sorteado[4] . "<br />";
// echo "<b>5°</b> - " . $sorteado[5] . "<br />";
// echo "<b>6°</b> - " . $sorteado[6] . "<br />";
// echo "<b>7°</b> - " . $sorteado[7] . "<br />";
?>
