<?php

$NOME = $_REQUEST['NOME'];
$IDADE = $_REQUEST['IDADE'];
$BEBIDA = $_REQUEST['BEBIDA'];
$ANO = new DateTime('NOW');
$DATA = new DateTime($IDADE);
$INTE = $ANO -> diff($DATA);

if (empty($IDADE)){

  $DADOS = array(
    "tipo" => 'error',
    "mensagem" => 'Existem(m) campos obrigatorios(s) nao preenchidos(s) .
  ');

}   else {
  
  

 if ($INTE->y <18){
  switch($BEBIDA){
    case '1' : $DADOS = array(
      "tipo" => 'coca.jpg' ,
      "mensagem" => 'Ola, '.$NOME.', sua bebida favorita é Coca cola nao pode beber bebida alcoolica '   
    );
break;
case '2' : $DADOS = array(
  "tipo" => 'cervj.jpg' ,
  "mensagem" => 'Ola, '.$NOME.', sua bebida favorita é Cerveja nao pode beber bebida alcoolica '   
);
break;
case '3' : $DADOS = array(
  "tipo" => 'grn.jpg' ,
  "mensagem" => 'Ola, '.$NOME.', sua bebida favorita é Guarana nao pode beber bebida alcoolica'   
);
break;

}
  }
else {
  switch($BEBIDA){
    case '1' : $DADOS = array(
      "tipo" => 'coca.jpg' ,
      "mensagem" => 'Ola, '.$NOME.', sua bebida favorita é Coca cola  pode beber bebida alcoolica '   
    );
break;
case '2' : $DADOS = array(
  "tipo" => 'cervj.jpg' ,
  "mensagem" => 'Ola, '.$NOME.', sua bebida favorita é Cerveja  pode beber bebida alcoolica '   
);
break;
case '3' : $DADOS = array(
  "tipo" => 'grn.jpg' ,
  "mensagem" => 'Ola, '.$NOME.', sua bebida favorita é Guarana  pode beber bebida alcoolica'   
);
break;

}
}
} 


echo json_encode($DADOS);