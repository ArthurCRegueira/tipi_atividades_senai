#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <ctype.h>
int ordenaMatriz(int **matriz, int lin, int col){

int i, j, menor, cont=0, indice;
int vetor[lin*col]; 

for(i=0;i<lin;i++){
    for(j=0;j<col;j++){
        vetor[cont]=matriz[i][j];
        cont++;
    }
}

for(i=0;i<(lin*col);i++){
    printf("%d ", vetor[cont]);
}
for(i=0;i<lin*col;i++){
    menor=vetor[i];
    for(j=0;j<lin*col;j++){
        if(vetor[j]<menor){
            menor=vetor[j];
            int aux = vetor[i];
            vetor[i] = menor;
            vetor[j] = aux;
        }
    }
}
for(i=0;i<lin;i++){
    for(j=0;j<col;j++){
        matriz[i][j]=vetor[cont];
        cont++;
    }
}

}
setlocale(LC_ALL,"portuguese_Brasil");
int main(int argc, char** argv) {
int lin, col, i;
int **matriz;

printf("Digite as dimensoes da matriz: ");
scanf("%d %d", &lin, &col);

alocaMatriz(&matriz, lin, col);
leMatriz(matriz, lin, col);
mostraMatriz(matriz, lin, col);
ordenaMatriz(matriz, lin, col);
printf("\n\nMatriz ordenada:\n\n");
mostraMatriz(matriz, lin, col);
desalocaMatriz(&*matriz, lin, col);

return 0;
}