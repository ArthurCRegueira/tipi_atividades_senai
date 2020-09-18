#include <stdio.h>

int main() {
    int cartaRet;
    printf("Seja bem vindo ao calculador da 14ª questão\n\n");
    printf("Copyright (c) 2020 Arthur Candido Regueira de Miranda");
    printf("Qual o o número de cartas a serem retiradas?");
    scanf("&i", cartaRet);
    printf("\n");
    printf("Temos 52 cartas e iremos tirar &i do baralho", cartaRet);
    
    return 0;
}
