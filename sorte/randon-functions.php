<?php


/*
 * Funcao para devolver um TRUE ou FALSE baseado na chance fornecida, de 0 a 100
 * Exemplo: "chance(25)" retornaria verdadeiro com 25% de provabilidade
 * return       boolean
 */
function chance($chance){
    if(rand (1,100) <= $chance){
        return TRUE;
    } else {
        return false;
    }
}