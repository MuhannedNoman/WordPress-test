const menuIcon = document.getElementById("menu-icon");
const mobileMenu = document.getElementById("mobile-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

// Search Icon 
searchIcon.addEventListener('click', function(){
    if(searchBox.style.top == '72px'){
        searchBox.style.top = '24px'
        searchBox.style.pointerEvents = 'none'
    } else {
        searchBox.style.top = '72px'
        searchBox.style.pointerEvents = 'auto'
    }
})

menuIcon.addEventListener('click', function(){
    if(mobileMenu.style.opacity == "1"){
        mobileMenu.style.opacity = '0'
        mobileMenu.style.pointerEvents = 'none'
    } else {
        mobileMenu.style.opacity = '1'
        mobileMenu.style.pointerEvents = 'auto'
    }
})