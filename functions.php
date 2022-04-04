<?php

function myAndRow($x, $y){
  $res=(int)($x && $y);
  echo
  '<tr>
  <td>' . $x . '</td>
  <td>' . $y . '</td>
  <td>' . $res . '</td>
  </tr>';
}

function myOrRow($x, $y){
  $res=(int)($x || $y);
  echo
  '<tr>
  <td>' . $x . '</td>
  <td>' . $y . '</td>
  <td>' . $res . '</td>
  </tr>';
}
function myXorRow($x, $y){
  $res=(int)($x xor $y);
  echo
  '<tr>
  <td>' . $x . '</td>
  <td>' . $y . '</td>
  <td>' . $res . '</td>
  </tr>';
}
function myTable($a){
  echo 
  '<table>
  <tr>
    <th>a</th>
    <th>b</th>
    <th>a ' . $a .' b</th>
  </tr>';
  switch($a){
    case 'and':
      myAndRow(0,0);
      myAndRow(0,1);
      myAndRow(1,0);
      myAndRow(1,1);
      break;
    case 'or':
      myOrRow(0,0);
      myOrRow(0,1);
      myOrRow(1,0);
      myOrRow(1,1);
      break;
    case 'xor':
      myXorRow(0,0);
      myXorRow(0,1);
      myXorRow(1,0);
      myXorRow(1,1);
      break;
  };
  echo '</table>';
}