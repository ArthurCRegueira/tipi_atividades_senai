#include <iostream>
#include <stdlib.h>
#include <iomanip>

using namespace std;

int main(){
    int x,y;
    x = 3;
    y = 9;
    cout << "A soma de x e y é " << x+y << endl;
    cout << "A subtração entre x e y é " << x-y << endl;
    cout << "A multiplicação entre x e y é " << x*y << endl;
    long double z = (y/(x+1));
    cout << "A divisão entre x e y é "<< z <<endl;
}