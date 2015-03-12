<?php 
function buscaRequerimento($idre, $where)
{
  $cadreq = $conn->Execute('SELECT * FROM CADREQ WHERE NIDCADREQ = ' . $con->qstr($idreq) . $where);
  return $cadreq;

}
