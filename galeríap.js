var número = 1;
function adelante(){
    número++;
    if(número > 5)
        número = 1;
        var foto = document.getElementById("foto");
        foto.src = "foto" + número + ".png";
}
function atrás(){
    número--;
    if(número < 1)
        número = 5;
        var foto = document.getElementById("foto");
        foto.src = "foto" + número + ".png";
}