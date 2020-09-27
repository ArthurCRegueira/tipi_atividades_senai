fn main() {
    let mut s = String::from("Hello World");
    let word = first_word(&s);
    println!("A primeira palara é {}", word);
    s.clear();
}
fn first_word(s: &str) -> &str {
    let bytes = s.as_bytes();
    for (i, &item) in bytes.iter().enumerate(){
        if item == b' '{
            return &s[0..i];
        }
    }
    &[..];
}
