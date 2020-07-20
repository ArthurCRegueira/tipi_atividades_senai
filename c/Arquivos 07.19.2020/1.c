// Arthur Candido Regueira de Miranda
// Escola SESI SENAI Carlos Gido Ferrário Lôbo
// 07.19.2020 - arthur.regueira@aol.com 
// CRIE UM ALGORITMO QUE SOME OS NÚMEROS DE UM VETOR
/*algoritmo "Mime�grafo"
// Fun��o :        Copiar vetor A para Vetor B   e soma
// Autor :        Arthur Candido Regueira de Miranda
// Data :         17/07/2020
var
      gabriel : vetor [1..5] de inteiro
      rafael  : vetor [1..5] de inteiro
      negoNey :                 inteiro
      soma    :                 inteiro
inicio
      Para negoNey de 1 ate 5 faca
           Escreval("Vetor 1")
           Escreva("Digite o valor da posição", negoNey,": ")
           Leia (gabriel[negoNey])
           LimpaTela
      FimPara
      LimpaTela
      Para negoNey de 1 ate 5 faca
           rafael[negoNey] <- gabriel[negoNey]
      FimPara
       Escreval("Vetor 1")
       Escreval("")
      Para negoNey de 1 ate 5 faca
           Escreval(gabriel[negoNey])
      FimPara
      Escreval("Vetor 2 ")
      Para negoNey de 1 ate 5 Faca
           Escreval(rafael[negoNey])
           soma <- (soma + (rafael[negoNey] + gabriel[negoNey]))
      FimPara
      Escreva(soma)
fimalgoritmo
*/
// Logo em C pq sim
#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>

int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    
    return 0;
}