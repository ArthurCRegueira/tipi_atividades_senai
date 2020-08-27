#include <iostream>
#include <iomanip>
#include <locale.h>
using namespace std;

int main(){
    setlocale(LC_ALL,"portuguese");
    double nota1, nota2, nota3, nota4;
    cout << "Digite a sua primeira nota: ";
    cin >> nota1;
    cout << "Digite a sua segunda nota: ";
    cin >> nota2;
    cout << "Digite a sua terceira nota: ";
    cin >> nota3;
    cout << "Digite a sua quarta nota: ";
    cin >> nota4;
    double soma = nota1+nota2+nota3+nota4;
    double media = soma/4;
    
    if(media > 7){
        cout << "Parabéns, você foi aprovado porque sua média foi: " << media << endl;
    }else
    {
        cout << "Ops, você foi reprovado pois sua média foi: "<< media
         <<  "Sai desse pc e vá estuar" << endl;
        system ("poweroff");
    }
    return 0;
}