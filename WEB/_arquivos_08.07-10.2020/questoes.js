function eUm(){
    var maior = prompt("Digite um número para comparar");
    for (let index = 0; index < 4; index++) {
        input = prompt("Digite um número para comparar: ")
        maior = input>maior? input : maior;
    }
    document.write("<p> O maior número foi <br/></p><p class='green'>", maior, "</p>");
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")
}

function eDois(){
    var menor;
    var sexo;
    var maior;
    var cMulher;
    var cHomem;
    var altura;
    var medMulher;
    var altMulher;
    for (let index = 1; index < 3; index++){
        altura = parseInt(prompt("Informe a sua altura(sem ponto)"));
        sexo =prompt("Digite o sexo M/F");
        if(index=1){
            menor = altura;
            maior = altura;
        } if(altura > maior){
            maior = altura;
        }if(menor > altura){
            menor = altura;
        }if(sexo == "f" || sexo == "F"){
            cMulher++;
            altMulher+=altura;
        } else {
            cHomem++;
        }
    }
    mediMulher = altMulher/cMulher;
    document.write("A maior altura é: ", maior); 
    document.write("A menor altura é: ", menor);
    document.write("A média das mulheres é: ", medMulher);
    document.write("O número de homens é: ", cHomem);
}

function eTres(){
    var A =parseInt(prompt("Digite um Número"));
    var B =parseInt(prompt("Digite um Número"));
    if(A === B){
        C = (A + B);
        document.write("<p>Os valores são iguais, a soma é</P><p id='green'> ", C,"</p>");
    } else {
        C = (A*B);
        document.write("<p>Os valores são diferentes, e a multiplicação é</P><p id='red'> ", C,"</p>");
    }
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")

}

function eQuatro(){
    var idade = 0;
    var totBom = 0; 
    var totOtm = 0;
    var idOtm = 0; 
    var totReg = 0;
    var total = 0;
    var resposta = 0;
    var medIdOtm = 0;
    var porBom = 0;
    for (let index = 0; index <15; index++) {
        idade = parseInt(prompt("Digite a idade: "));
        resposta = parseInt(prompt("Digite 3 para Ótimo, 2 para Bom e 1 para Regular"));
        total++;
        switch (resposta) {
            case 1:
                totReg++;
                break;
            case 2:
                totBom++;
                break;
            case 3:
                idOtm += idade;
                totOtm++;
                break;
        }
    }
    medIdOtm = (idOtm / totOtm);
    porBom = (totBom*100)/total;
    document.write("<p class='red'>", totReg, "</p><p> Pessoas responderam Regular</p>");
    document.write("<p>A média da idade das pessoas que responderam ótimo é:  <p class='green'>", medIdOtm,"</p>");
    document.write("<p>A porcentagem das pessoas que responderam bom é:  <p class='green'>", porBom,"%</p>");
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")
    }

function eCinco(){
    var parPor = 0;
    var inputCIn = parseFloat(prompt("Digite o valor a ser parcelado"));
    var res = parseInt(prompt("Digit o número de parcelas (3 ou 5)")) ;
    switch (res) {
        case 3:
            parPor = inputCIn*.10;
            break;
        case 5:
            parPor = inputCIn*.20;
            break;
        default:
            alert("Entrada inválida, recarregando");
            document.location.reload(true);
            break;
    }
    document.write("Preço a pagar acrescido de R$: ",parPor," <br/>Total R$ ", inputCIn+parPor)
    document.write("<br/><button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")
    }

function eSeis() {
    for (let index = 0; index < 10; index++) {
        var totMulher = 0;
        var totHomem = 0;
        var pesoMulher = 0;
        var idadeHomem =0;
        var sexo = prompt("Digite o sexo da pessoa n° (M/F) ", index);
        var idade = prompt("Digite a idade da pessoa n° ", index);
        var peso = prompt("Digite o peso da pessoa n°", index);
        if (sexo == "F" || sexo =="f") {
            totMulher++;
            pesoMulher+=peso
        }else{
            totHomem++;
            idadeHomem+=idade;
        }
    document.write("Total de homens: ", totHomem);
    document.write("Total de mulheres: ", totMulher);
    document.write("Média dos pesos das mulheres: ", pesoMulher/totMulher, "kg");
    document.write("Média Idade dos Homens: ", idadeHomem/totHomem," anos");
    }
}