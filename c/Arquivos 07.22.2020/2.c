// Questão 15
#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>
#include <string.h>

int numeros[10][10];
int auxiliar[10][10];
int input, i, j, l, m;


int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    for (i = 0; i < 9; i++)
    {
        for (j = 0; j < 9; j++)
        {
            printf("\nDigite um número ");
            //scanf("%i", &numeros[i][j]);
            numeros[i][j] = rand()%100;
        }
        
    }
    for ( i = 0; i < 9; i++)
    {
        for ( j = 0; i < 9; i++)
        {
            if (numeros[i][j]<numeros[i+1][j+1])
            {
                auxiliar[i][j] = numeros[i+1][j+1];
                numeros[i+1][j+1] = numeros[i][j];
                numeros[i][j] = auxiliar[i][j];
            }
            
        }
        
    }
    for ( i = 0; i < 9; i++)
    {
        for ( j = 0; j < 9; j++)
        {
            printf("\n%i ", numeros[i][j]);
        }
        
    }
    
    return 0;
}