<?php
    require 'funcao.php';

    loteria();
    function loteria(){
        echo "Digite M para apostar na MegaSena \n";
        echo "Digite Q para apostar na Quina \n";
        echo "Digite LM para apostar na LotoMania \n";
        echo "Digite LF para apostar na Lotofacil \n";
        echo "Digite N para sair \n";

        $jogo = trim(fgets(STDIN));
        
        switch ($jogo) {
            case 'M':
                sorteia(60, 6, 15);
                megasena();
                break;

            case 'Q':
                sorteia(80, 5, 15);
                quina();
                break;

            case 'LM':
                sorteia(100, 50, 50);
                lotomania();
                break;

            case 'LF':
                sorteia(25, 15, 18);
                lotofacil();
                break;

            case 'N':
                exit();
                break;
            
            default:
                echo "numero invalido";
                menu();
                break;
        }
    }
