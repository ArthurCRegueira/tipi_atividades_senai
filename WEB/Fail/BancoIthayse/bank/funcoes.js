
function Calcular(x,y, o){
    let n1, n2, op, result;
    switch (op){
        case 1:
            result = n1+ n2;
            break;
        case 2:
            result = n1-n2;
            break;
        case 3:
            result = n1*n2;
            break;
        case 4:
            result = n1/n2;
            break;
    }
    return result;
}

var nu1 = prompt("Digite um número");
var nu2 = prompt("Digite outro número")
var nu3 = prompt("Digite +, -, /, *")
var rest = calcula(nu1, nu2, ope);
document.write(rest);