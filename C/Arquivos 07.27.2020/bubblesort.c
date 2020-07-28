/* 
    Arthur Candido Regueira de Miranda
    Bubble Sort
    2020.07.27
*/
#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <locale.h>

const int notaCorte = 6;
float xerox[10][10] = {0};
float notas[10][10] = {0};
int linha, coluna, result, media;
/*
void veriApro(){
    if (media > notaCorte)
    {
        result = 1;
    }else if (media = notaCorte)
    {
        result = 2;
    } else
    {
        result = 0;
    }
    return;
}
*/
float trocaNota(a, b){
    float temp = a; 
    a = b; 
    b = temp; 
}

void bubbleSort(){ 
    if (n < 1)return; 
    for (linha =0; linha < 10; linha++){
     for (coluna = 0; coluna < 10; coluna++){
         if (notas[linha][coluna] > notas[linha-1][coluna-1]){ 
             trocaNota(&notas[linha][coluna], notas[linha-1][coluna-1]);
             } 
    }
    } 
     bubbleSort(notas[linha][coluna], notas[linha-1][coluna-1]); 
} 

int main(){ 
    void bubbleSort();
    float trocaNota();
    for (linha =0; linha <10; linha++){
        for(coluna =0; coluna <10;linha ++){
            printf("Digite uma nota: ");
            scanf("%f",&notas[linha][coluna]);
            system("clear");
        }
    }

     bubbleSort(notas[linha][coluna], notas[linha-1][coluna-1]);

     for(linha=0; linha < 10 ;linha++){
        for(coluna = 0; coluna <10; coluna++){
            printf("%f ",notas[linha][coluna]);
        }
    }
     return 0;
 }