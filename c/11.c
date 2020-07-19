// _Arthur_Candido _Regueira de_Miranda
// 07/19/2020
/*              Versão VisuALG
agoritmo "Calculadora"
    
 var 
    n1, n2, resultado   : Real
    opc, cotc            : Inteiro   
Inicio
  
    Enquanto (cotc <> 0)
      Escreval("00 para sair")
    Escreval("01 para somar")
    Escreval("02 para ")
    Escreval("03 para")
    Escreval("04 para")
        Escolha (opc)
            Caso 1
                resultado <- n1 + n2
                Escreval("O resultado da soma é ", resultado)
            Caso 2
                resultado <- n1-n2
                Escreval("O resultado da subtração é ", resultado)
            
        FimEscolha
    FimEnquanto
FimAlgoritmo



*/
#include <stdio.h>  // Biblioteca padrão do c
#include <stdlib.h> // Biblioteca padrão do c
#include <locale.h> // Biblioteca para não dar problemas com acentos
#include <ctype.h>  // Biblioteca para caracteres, nem sei pq chamei ela

int main()
{   
    float n1, n2, resultado;
    int opc;
    setlocale(LC_ALL,"portuguse_Brasil");
    while (opc != 0)
    {
        printf("Onde vamos?\n\n");
        printf("00 para sair\n");
        printf("01 para soma\n");
        printf("02 para subtração\n");
        printf("03 para divisão\n");
        printf("04 para multiplicação\n");
        printf(">> ");
        scanf ("%i", &opc);
        printf("\n\n");
        printf("\n Digite um número:");
        scanf("%f", &n1);
        printf("\n Digite um número:");
        scanf("%f", &n2);
        switch (opc)
        {
            case 1:
                resultado = n1+n2;
                printf("A soma é %f", resultado);
                break;
            case 2:
                resultado = n1-n2;
                printf("O resultado da subtração é %f", resultado);
                break;
            case 3:
                resultado = n1*n2;
                printf("O resultado da multiplicação é %f", resultado);
                break;
            case 4:
                resultado = n1/n2;
                printf("O resultado da divisão é %f", resultado);
            default:
                printf("\nEntrada inválida");
                
        }

    }
    return 0;
 }