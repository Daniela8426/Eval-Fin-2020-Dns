let boton = document.getElementById("icono");
let enlaces = document.getElementById("enlaces");
let contador = 0;

boton.addEventListener("click",function(){
    if(contador == 0){
        enlaces.className = ('enlaces no');
        contador=1;
    }else{
        enlaces.classList.remove('dos');
        enlaces.className = ('enlaces si');
        contador = 0;
    }
})
