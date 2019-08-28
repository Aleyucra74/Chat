<?php
    include 'Espectador.php';
    include 'DB.php';

    class Usuario extends Espectador{
     
        
        public function __construct(){
            $this->logado = false;
            $this->nivel = 2;
        }
    

        public function enviarMensagem($msg){
            // Criando conexão com o banco
            $db = new DB();

            //construindo str de consulta
            $sql = "INSERT INTO mensagens(id_usuario,hora,texto) VALUE (:id_usuario,NOW(),:texto)";

            //preparo da consulta
            $insert = $db->prepare($sql);
            //executa a consulta
            $insert->execute([
                ':id_usuario' => $this->id,
                ':texto' => $msg
            ]);
        }
    }





$u = new Usuario();
$u->logar('usuario@teste.com','teste');
$u->enviarMensagem('Aff');