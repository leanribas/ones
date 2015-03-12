<?php 
function buscaRequerimento($idre)
{
  $cadreq = $conn->Execute('SELECT * FROM CADREQ WHERE NIDCADREQ = ' . $con->qstr($idreq));
  return $cadreq;

}
