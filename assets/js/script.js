 let nav = document.getElementById('nav')


function mostrarMenu() {
    if (nav.style.display == 'none') {
        nav.style.display = 'block'
    } else {
        nav.style.display = 'none'
    }
}

function mudouTamanho() {
    if (window.innerWidth > 650) {
        nav.style.display = 'block'
        
    } else {
        nav.style.display = 'none'
    }
}