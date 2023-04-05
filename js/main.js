
        
        document.addEventListener("DOMContentLoaded",function(e){
const parrafos = document.querySelectorAll('.des');
let alturas = [];
let alturamaxima = 0;
const aplicarAlturas = (function aplicarAlturas(){

  parrafos.forEach(parrafo =>{

    if(alturamaxima == 0){
      alturas.push(parrafo.clientHeight);
    }else{
      parrafo.style.height = alturamaxima + "px";
    }

    

    });

    return aplicarAlturas;

})();

alturamaxima= Math.max.apply(Math,alturas);

aplicarAlturas();

        });