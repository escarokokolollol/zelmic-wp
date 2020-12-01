const adjustHeaderOnScroll = (e) =>{
  const header = document.querySelector("#masthead");
  if(window.scrollY > 170){
    header.classList.add("smaller");
  }
  else if(window.scrollY < 170){
    header.classList.remove("smaller");
  }
}


window.addEventListener('scroll', adjustHeaderOnScroll);