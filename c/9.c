#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>

int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    double n1, n2, n3, n4, media = 0;
    printf("\t\t Calculador de médias\t\t\n\n");
    printf("Digite nota 1: ");
    scanf("%f", n1);
    printf("\n");
    printf("Digite nota 2: ");
    scanf("%f", n2);
    printf("\n");
    printf("Digite nota 1: ");
    scanf("%f", n3);
    printf("\n");
    printf("Digite nota 1: ");
    scanf("%f", n4);
    printf("\n");
    media = (n1+n2+n3+n4)/4;
    if (media >=1){
        system("color 9");
        printf("Aluno aprovado!");
    }else{
        system(" \ncolor 12");
        printf(" \nAluno Reprovado!");
    }
    return 0;
}