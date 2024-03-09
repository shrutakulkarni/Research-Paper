window.addEventListener('scroll' ,function(){
    let mynav=document.querySelector('nav');
    if(window.pageYOffset>0){
      mynav.classList.add('sticky');
    }
    else{
      mynav.classList.remove('sticky')
    }
     })
   function themevis(){  
     let theme=document.getElementById("theme")
     if(theme.style.display==="none"){
     theme.style.display="block";
   }
   else{
   theme.style.display="none";
   }
}
function news(){
  let news=document.getElementById("news");
  let researches=document.getElementById("researches");
  let journals=document.getElementById("journals");
  let publish=document.getElementById("publish");
  news.style.display="block";
  researches.style.display="none";
  journals.style.display="none";
  publish.style.display="none";
}
function researches(){
  let news=document.getElementById("news");
  let researches=document.getElementById("researches");
  let journals=document.getElementById("journals");
  let publish=document.getElementById("publish");
  news.style.display="none";
  researches.style.display="block";
  journals.style.display="none";
  publish.style.display="none";
  
}
  function journals(){
    let news=document.getElementById("news");
    let researches=document.getElementById("researches");
    let journals=document.getElementById("journals");
    let publish=document.getElementById("publish");
    news.style.display="none";
    researches.style.display="none";
    journals.style.display="block";
    publish.style.display="none";
  }
  
  function publish(){
    let news=document.getElementById("news");
    let researches=document.getElementById("researches");
    let journals=document.getElementById("journals");
    let publish=document.getElementById("publish");
    news.style.display="none";
    researches.style.display="none";
    journals.style.display="none";
    publish.style.display="block";
  }