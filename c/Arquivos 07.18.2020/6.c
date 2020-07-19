#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    /*
        scanf(%tipoDeDado%tipoDeDado, &variavel1 &variavel2)
    */
   int var;
   printf("Digite um número: ");
   scanf("%i", &var);
   printf("\n");
   printf("O valor digitado foi %i\n", var);

    return 0;
}