#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    float n1, n2, n3, n4, media = 0;
    printf("\t\t Calculador de médias\t\t\n\n");
    printf("Digite nota 1: ");
    scanf("%f", &n1);
    printf("\n");
    printf("Digite nota 2: ");
    scanf("%f", &n2);
    printf("\n");
    printf("Digite nota 1: ");
    scanf("%f", &n3);
    printf("\n");
    printf("Digite nota 1: ");
    scanf("%f", &n4);
    printf("\n");
    media = (n1+n2+n3+n4)/4;
    system("clear");
    printf("A média foi %f", media);
    printf(" portanto ");
    if(media >=6){
        printf(" o aluno foi aprovado!\n");
    }else{
        printf("o aluno foi reprovado!\n");
    }
    return 0;
}