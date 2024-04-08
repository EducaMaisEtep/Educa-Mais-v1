var outroArray = ['A3F8R6',
'P9K2D7',
'H6G5T9',
'B4N7S2',
'M1L8J6',
'Q5W3E9',
'T3R7Y1',
'E5O4L6'];
console.log(outroArray)

function verificar(){
    var codigo = document.getElementById('codigo').value;
    console.log(codigo)

    if (outroArray == codigo){
        window.location.href = '../index.html';
    }else{
        alert('o codigo inserido nao é o mesmo que lhe foi dado, tente novamente')
    }
}