<?php 

    Class Dormir{
        var $dormindo = false;
        var $tempoDeSonoTotal = 7;
        var $tempodeSonoAtual = 0;
        var $local = "Cama";
        var $posicao = "De lado";
        var $roncar = false;
        var $sonhando = true;
        var $coberto = true;
        var $corbetor = "Tilo";
        var $travesseiro = "Macio";

        function dormir(){
            $this->dormindo = true;
        }

        function acordar(){
            $this->dormindo = false;
         }
         
        function cobrir(){
            $this->coberto = true;
            echo "<p>Estou com frio. Vou pegar o cobertor</p>";
        }

        function descobrir(){
            $this->coberto = false;
            echo "<p>Estou com calor. Vou tirar o cobertor</p>";
        }

        function sonhar(){
            $this->sonhando = true;
            echo "<p>Estou Sonhando</p>";
        }

        function mudarPosicao( $posicao ){
            $this->posicao = $posicao;
            printf("<p>Dormindo de %s</p>", $posicao);
        }

        function ondeVouDormir( $local ){
            $this->local = $local;
            printf("<p>Vou dormir lá no(a) %s</p>", $local);
        }
    }