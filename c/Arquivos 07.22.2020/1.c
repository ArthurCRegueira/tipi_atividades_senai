#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>
#include <string.h>
#include <conio.h> 
// By Arthur Candido Regueira de Miranda
int main(){
    setlocale(LC_ALL,"portuguse_Brasil");
    int input;
    float time, distance, acceleration;
    float result, velocit, iniVelocit, finVelocit;
    char userresponse;
        do
        {
            userresponse = "s";
            printf("\n\t\tCalculadora SuperTunada Física 1.0");
            printf("\n");
            printf("Digite uma operação: ");
            printf("\n");
            printf("\nVelocidade Média \t[1]");
            printf("\nAceleração Média \t[2]");
            printf("\nEquação Sorvete \t[3]");
            printf("\nEquação Sorvetão \t[4]");
            printf("\nEquação Torricelli \t[5]");
            printf("\nCálculo Trabalho \t[6]");
            printf("\nCálculo Energia \t[6]");
            printf("\nCálculo Atrito \t\t[7]");
            printf("\nSair \t\t\t[0]\n");
            printf("> ");
            scanf("%i", &input);
            system("clear");
            switch (input)
            {
            case 1:
                while (userresponse != 'n')
                {
                    printf("\t\t\nTu escolheu calcular a velocidade média\n\n");
                    printf("Digite o tempo em segundos: ");
                    scanf("%f", &time);
                    printf("\n \nDigite a distância percorida em metros: ");
                    scanf("%f", &distance);
                    result = distance/time;
                    printf("\nO resultado é %.2f m/s", velocit);
                    printf("\n Deseja continuar? (s/n) ");
                    scanf("%c", &userresponse);
                    if (userresponse != 'n')
                    {
                        system("clear");
                    }else
                    {
                        input = 0;
                    }    
                }
                break;
            case 2:

                while (userresponse != "n")
                {
                    printf("\t\t\n Tu escolheu calcular a aceleração média");
                    printf("\nDigite a velocidade: ");
                    scanf("%f", &velocit);
                    printf("\nDigite tempo em segundos: ");
                    scanf("%f", &time);
                    acceleration = velocit/time;
                    printf("O resulta é %.2f m/s²", acceleration);
                }
                
                break;
            default:
                break;
            }
        }while (input != 0);
        
        return 0;
        }