use std::io;
fn main(){
	println!("Adivinhe o número!");
	println!("Por favor digite um número");
	let mut guess = String::new();
	io::stdin()
		.read_line(&mut guess)
		.expect("Falaha ao ler a linha");
	println!("Voce acetou! {}", guess);
}
