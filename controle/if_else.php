<div class="titulo">If Else</div>

<?php
if (true) {
  echo "Serei impresso?<br>";
}

if (true) {
  echo "Verdadeiro<br>";
} else {
  echo "Verdadeiro<br>";
}

if (false) {
} else {
  if (false) {
  } else {
    echo "AQUI<br>";
  }
}

if (false) {
  echo "Passo A<br>";
} else if (false) {
  echo "Passo B<br>";
} else if (true) {
  echo "Passo C<br>";
} else {
  echo "Último passo<br>";
}

echo "Fim<br>";
