#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
int main(){
     setlocale(LC_ALL, "Portuguese_Brasil");
    int num1, num2;
    num1 = 15;
    num2 = 20;
    int soma = num1 + num2;
    printf("O rsultado da soma é  %i\n", soma);
    int sub = num2 - num1;
    printf("O resultado da subtração é %i\n", sub);
    int multi = num1 * num2;
    int div = num1/3;
    printf("O resultado da multipicação é %i\n", multi);
    printf("O resultado da divisão é %f\n", div);
    return 0;
}