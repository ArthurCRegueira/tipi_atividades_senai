#include<stdio.h>
#include<stdlib.h>
int a, b;
int v, n;
 void swap(){ 
      int temp = a; 
    a = b; 
    b = temp; 
 } 
void bubbleSort(){ 
    if (n < 1)return; 
     for (int i=0; i<n; i++) 
         if (v[i] > v[i+1])  // Função interessante
             swap(&v[i], &v[i+1]);  
     bubbleSort(v, n-1); 
} 
 
int main(){ 
     int tam,i,*v;
     scanf("%d",&tam);
     v=(int*)malloc(tam*sizeof(int));
     for(i=0;i<tam;i++)scanf("%d",&v[i]);
     bubbleSort(v,tam-1);
     for(i=0;i<tam;i++)printf("%d ",v[i]);
     return 0;
 }