#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>

int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    /*
        \n Quebra linha
        \t Tabulação
        \\ Barra invertida
        \" Aspa dupla
        \' Aspa simples
        \0 fim do texto
    */
   char letra;
   printf("\nDigite uma letra: ");
   scanf("%c", &letra);
    if ( letra >= 'a' )
    {
        printf( "\n A letra é  %c ",  toupper (letra) );
    }
    
    
    return 0;
}