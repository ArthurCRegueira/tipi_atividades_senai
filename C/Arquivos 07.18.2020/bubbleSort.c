#include <stdio.h>
#include <stdlib.h>
//#include <conio.h>
#include <locale.h>

int tam, i, v[10];
int a, b, temp;
int main(){
    tam = 10;
    scanf("%i", &tam);
    for (i = 0; i < tam; i++)
    {
        scanf("%i", &v[i]);
        if (v[i]> v[i+1]){
            temp = v[i];
            v[i] = v[i+1];
            v[i+1] = v[i];
            for (i = 0; i < tam; i++){
                if (v[i]> v[i+1]){
                temp = v[i];
                v[i] = v[i+1];
                v[i+1] = v[i];
            }   
    }

    }
    for ( i = 0; i < 10; i++)
    {
        printf("%d", v[i]);
    }
    
    
    return 0;
}}