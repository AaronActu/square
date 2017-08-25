<?php

  const $version = 1.0;
  const $char = "*" //Change the charactere you want to draw.

  // On simplifie
  $hauteur = 5;
  $largeur = 6;

  if ($increment==1 XOR $increment==2)
  {
          // echo "Entrez la hauteur du rectangle : ";
          //<input>
          
          // echo "Entrez la largeur du rectangle : ";
          //<input>

          for ($increment=0; $increment < $hauteur; $increment++)
          {
                  for ($increment2=0; $increment2 < $largeur ; $increment2++)
                  echo $char;
                  echo "<br/>";
          }
  }
?>
