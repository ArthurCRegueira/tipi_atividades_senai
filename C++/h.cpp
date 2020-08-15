#include <iostream>
#include <stdlib.h>
#include <iomanip>

using namespace std;

int main(){
    cout << "Seja bem-vindo a a calculadora" << endl;
    cout << endl;
    float n1, n2 = 0.0;
    cout << "Digite o valor de n1: ";
    cin >> n1;
    cout  << endl;
    cout << "Digite o valor de n2: ";
    cin >> n2;
    cout  << endl;
    cout << "a soma  deles é " << n1+n2 << endl;
    cout << "a subtração deles é " << n1-n2 << endl;
    cout << "a multiplicação deles é " << n1*n2  << endl;
    cout << "a divisão deles é " << n1/n2 << endl;
    system("break");
}