const shoes_banner = document.querySelector(".inside-shoes")
const shoes_link = document.querySelector(".shoes-link")
const header = document.querySelector(".header-nav")
const menuIcon = document.querySelector(".menu")
const menu = document.querySelector("#mobil")
const filter = document.querySelector("#filter")
const close = document.querySelector(".icon")
const b = document.querySelector("#mobil.active")
shoes_link.addEventListener('mouseover', () => {
 shoes_banner.classList.add("active")
})



shoes_link.addEventListener('mouseout', () => {
    shoes_banner.classList.remove("active")
})

shoes_banner.addEventListener('mouseout', () => {
    shoes_banner.classList.remove("active")
})


shoes_banner.addEventListener('mouseover', () => {
    shoes_banner.classList.add("active")
})




menuIcon.addEventListener('click', () => {
  
    menu.classList.add("active")
    if( menu.classList.contains("active") == true) {
        filter.classList.add("active")
    } else {
        return filter.classList.remove("active")
    }
    
  
})


close.addEventListener('click',  () => {
  
     menu.classList.remove("active")
     if( menu.classList.contains("active") == true) {
        return filter.classList.add("active")
    } else {
        return filter.classList.remove("active")
    }
    
    
    
})


