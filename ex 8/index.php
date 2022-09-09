<?php
  $notas = [5, 10, 4];
  $smTotal = 0;

  for($i = 0; $i < count($notas); $i++){
    $smTotal += $notas[$i];
  }

  $resultado = $smTotal / count($notas);

  if($resultado >= 6){
    echo "Aprovado, média final {$resultado}";
  }else{
    echo "Reprovado, média final {$resultado}";
  }

?>