window.addEventListener("scroll",function(){
    if(this.scrollY >= seccion.offsetTop - document.documentElement.clientHeight &&
        this.scrollY + document.documentElement.clientHeight <= seccion.offsetHeigh + seccion.offsetTop){
            video.play();
        }
        else{
            video.pause();
        }
        
}, false);