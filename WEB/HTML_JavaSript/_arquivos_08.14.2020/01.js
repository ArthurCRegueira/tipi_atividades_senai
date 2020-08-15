function profile(name, ida, lastName){
    joinha = (name+" "+lastName)
    return joinha;
}
var joinha;
var name = prompt("Digite seu nome: ");
var ida = prompt("Digite sua idade: ");
var lastName = prompt("Digite seu último nome:");
profile(name, ida, lastName);
document.write(joinha)
