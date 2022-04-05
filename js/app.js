$(document).ready(function(){
    let slides = $('.slide');
    let arrSlides = Array.from(slides);
    let i = 0;
    
    arrSlides.map((slide,index)=>{
        if(index !== i){
            slide.style.display = "none";
        }
    })    
    setInterval(function(){
        i+=1;
        if(i>arrSlides.length-1){
            i=0;
        }
        arrSlides.map((slide,index)=>{
            if(index != i){
                slide.style.display = "none";
            }else{
                slide.style.display = "flex";
            }
        })
    },3000);
    
});