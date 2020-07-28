#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>
//#include "conio.h"
int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    char opt, ope = 's';
    float n1, n2, resultado;
    do{
        printf("\nDigite um número: ");
        scanf("%f", &n1);
        printf("\nDigite outro número: ");
        scanf("%f", &n2);
        printf("\nDigite uma operação (+, -, *,  x para sair)");
        scanf("%c", &ope);
        printf("\n");
        if (ope == '+')
        {
            resultado =  n1+n2;
            printf("\nO resultado de %f %c %f é", n1, n2, resultado);
        }else
        {
            if (ope == '-')
            {
                resultado = n1-n2;
                printf("\nO resultado de %f %c %f é", n1, n2, resultado);
            }else
            {
                if (ope == '*');
                {
                    resultado = n1*n2;
                    printf("\nO resultado de %f %c %f é", n1, n2, resultado);
                }else
                {
                   if (ope == '/')
                   {
                       resultado = n1/n2;
                       printf("\nO resultado de %f %c %f é", n1, n2, resultado);
                   }else
                   {
                       printf("Entrada inválida");
                   }
                   
                    
                }
                
                
            }
            
            
        }
        
        printf("\nDeseja continuar? ");
    } while ((opt != 'n')||(ope!='x'));
    return 0;
}