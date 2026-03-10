console.log("hello world");

let myButton = document.getElementById("myBtn");
let myInput = document.getElementById("myInput");

function addParagraph(){
    const p = document.createElement('p');
    p.innerHTML = myInput.value;
    document.body.appendChild(p);
}

myButton.addEventListener('click', addParagraph);
myInput.addEventListener('keyup', function(e){
    console.log(e.key);
    if(e.key === 'Enter'){
        addParagraph();
    }
});