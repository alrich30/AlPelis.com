/*(function() {
  
    let header = document.querySelector('header');
    let breakpoint = 102;
    let windowPos;
    let isFixed = false;
  
    function updatePos(){
      windowPos = window.scrollY;
    }
  
    function onScroll() {
  
      updatePos();
  
      if (windowPos >= breakpoint && !isFixed){
        header.classList.add('header-fixed');
        isFixed = true;
      } else if (windowPos < breakpoint && isFixed){
        header.classList.remove('header-fixed');
        isFixed = false;
      }
    }
    
    document.addEventListener('scroll' , onScroll);
  })()*/