function arr(){
    var i = [];
    for (let index = 0; index < 3; index++) {
        i[index] = parseFloat(prompt("Digite um número: ")) 
    }
    for (let index = 0; index < i.length; index++) {
        document.write(array[index]);
    }
     var ni = i.reverse();
    document.write(ni);
}