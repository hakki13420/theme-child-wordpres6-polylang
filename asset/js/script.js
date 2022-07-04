const navLinks = document.querySelectorAll('.nav-link')
navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
        navLinks.forEach(item => { 
            item.parentNode.classList.remove("active")    
        })
        e.target.parentNode.classList.add("active")

        //==============================
        const cible = document.querySelector('.tab-content #' + e.target.id)        
        const cibles = document.querySelectorAll('.tab-item')        
        cibles.forEach(item => { 
            item.classList.remove("active")    
        })
        cible.classList.add('active')
    })
})