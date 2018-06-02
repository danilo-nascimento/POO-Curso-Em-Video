<?php 

    Class Chave{
        var $tipo = 'automóvel';
        var $alarme = true;
        var $cor = 'preta';
        var $chaveiro = true;
        var $emUso = false;
        var $guardada = true;

        function usar(){
            $this->emUso = true;
            $this->guardada = false;
        }

        function guardar(){
            $this->emUso = false;
            $this->guardada = true;
        }

        function ligarAlarme(){
            $this->emUso = true;
        }

        function adicionarChaveiro(){
            $this->chaveiro = true;
        }

        function removerChaveiro(){
            $this->chaveiro = false;
        }
    }