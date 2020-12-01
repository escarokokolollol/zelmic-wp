function isScrolledIntoView(el) {
  var rect = el.getBoundingClientRect();
  var elemTop = rect.top;
  var elemBottom = rect.bottom;
  // Only completely visible elements return true:
  var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
  // Partially visible elements return true:
  //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
  return isVisible;
}

const blogPostsAnimation = () => {
  const posts = document.querySelectorAll(".posts");
  posts[0].classList.add("bigger");

  window.addEventListener("scroll", function(){
    posts.forEach((post) => {
      if(isScrolledIntoView(post)){
        post.classList.add("bigger");
      } else{
        post.classList.remove("bigger");
      }
    });
  });
}


document.addEventListener("DOMContentLoaded", blogPostsAnimation)


