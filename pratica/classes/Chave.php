<?php 

    Class Chave{
        var $tipo = 'automóvel';
        var $alarme = false;
        var $cor = 'preta';
        var $chaveiro = true;
        var $emUso = false;
        var $guardada = true;

        function usar(){
            $this->emUso = true;
            $this->guardada = false;
            echo "<p>Usando chave...</p>";
        }

        function guardar(){
            $this->emUso = false;
            $this->guardada = true;
            echo "<p>Guardando chave...</p>";
        }

        function ligarAlarme(){
            $this->emUso = true;
            echo "<p>Alarme Ligado</p>";
        }

        function adicionarChaveiro(){
            $this->chaveiro = true;
        }

        function removerChaveiro(){
            $this->chaveiro = false;
        }
    }