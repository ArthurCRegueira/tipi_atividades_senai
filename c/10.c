#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>
#include <conio.h>

int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    char opt, ope = 's';
    float n1, n2, resultado;
    do
    {
        printf("\nDigite um número: ");
        scanf("%f", &n1);
        printf("\nDigite outro número: ");
        scanf("%f", &n2);
        printf("Digite uma operação (+, -, *, )");

    } while (opt != 'n');
    return 0;
}