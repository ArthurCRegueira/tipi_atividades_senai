function eUm(){
    var maior = prompt("Digite um número para comparar"); 
    for (let index = 0; index < 4; index++) {
        input = prompt("Digite um número para comparar: ")
        maior = input>maior? input : maior;
    }
    document.write("<p> O maior número foi <br/></p><p class='green'>", maior, "</p>");
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>");
}

function eDois(){
    var menor;
    var sexo;
    var maior;
    var cMulher=0;
    var cHomem =0;
    var altura =0;
    var medMulher =0;
    var altMulher=0;
    for (let index = 0; index < 3; index++){ 
        altura = parseInt(prompt("Informe a sua altura(sem ponto)"));
        sexo =prompt("Digite o sexo M/F");
        if(index==0){ 
            menor = altura;
            maior = altura; 
        }if(altura > maior){ 
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
    medMulher = altMulher/cMulher;
    document.write("A maior altura é: ", maior,"<br/>"); 
    document.write("A menor altura é: ", menor,"<br/>");
    document.write("A média das mulheres é: ", medMulher,"<br/>");
    document.write("O número de homens é: ", cHomem,"<br/>");
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>");
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
    document.write("Média dos pesos das mulheres: ", pesoMulher/totMulher, "kg<br/>");
    document.write("Média Idade dos Homens: ", idadeHomem/totHomem," anos<br/>");
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")

    }
}


function eSete(){
    document.write("A implementar");
}

function eOito(){
   var num1 = parseFloat(prompt("Digite um número"));
   var num2 = parseFloat(prompt("Digite outro númeroDigite outro número"));
   var esc = parseInt(prompt("Digite 1 para soma 2 para mult 3 para div"));
   var result = 0;
    switch(esc){
        case 1:
            result = num1 + num2;
            document.write("A soma é ", result, "<br/>");
            break;
        case 2:
            result = num1 * num2;
            document.write("A multiplicação é: ", result,"<br/>");
            break;
        case 3:
            result = num1 / num2;
            document.write("A divisão é: ", result,"<br/>");
            break;
    }
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")

}

function eNove(){
    var ipSal = parseFloat(prompt("Digite o salário atual do Funcionário: "));
    var r = 0;
    var nSal;
    if(ipSal < 1045){
        r = .20
    }else if( ipSal > 1045 ){
        r = .15
    }else if(2000 > ipSal < 3000){
        r = .10
    }else{
        r = .5
    }
    nSal = ipSal+(ipSal * r)
    document.write("O reajuste será de ", (r*100),"% ou R$ ",(ipSal * r), "<br/>");
    document.write("O novo salário do funcionário será: ", nSal,"<br/>");
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")

}

function eDez(){
    var num = [];
    for (let index = 0; index < 5; index++) {
        num[index] = parseFloat(prompt("Digite um número para Pow"))
    }
    for (let index = 0; index < 5; index++) {
        document.write(num[index],"² = ", Math.pow(num[index],2),"<br/>")
    }
    document.write("<button class='btn' onclick='document.location.reload(true);' value='Retornar'>Retornar</button>")
}