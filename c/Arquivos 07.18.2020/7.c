#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    int num1, num2, soma, sub, multi;
    float div;
    printf("Entre com um número: ");
    scanf("%i", &num1);
    printf("Entre com outro número: ");
     scanf("%i", &num2);
     printf("\n");
    soma    =   num1 + num2;
    sub     =   num1 - num2;
    multi   =   num1*num2;
    div     =   num1/num2;
    printf(" A soma deles é: %i\n", soma);
    printf(" A subtração deles é: %i\n",sub);
    printf(" A multiplicação deles é: %i\n", multi);
    printf(" A divisão deles é: %f\n", div);

    return 0;
}