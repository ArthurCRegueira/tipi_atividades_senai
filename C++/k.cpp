#include <iomanip>
#include <locale.h>
#include <iostream>
using namespace std;

int main(){
    char resp = 's';
    int numtab;
    while (resp != 'n'){
        cout << "Digite um número para tabuar: ";
        cin >> numtab;
        for(int i = 0; i <= 10 ; i++)
        {
            cout << numtab << " X " << i <<  " = " << numtab * i << endl;
        }
        cout << "Deseja continuar? (s/n): ";
        cin >> resp;
    }
}