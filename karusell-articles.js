const buttons = document.querySelectorAll("[data-karusell-button]")
let newIndex = 0
buttons.forEach(button => {
    button.addEventListener("click", () => {
        const offset = button.dataset.karusellButton === "next" ? 1 : -1
        const slides = button
            .closest("[data-karusell-articles]")
            .querySelector('[data-slides]')

        const activeSlide = slides.querySelector("[data-active]")
        newIndex = [...slides.children].indexOf(activeSlide) + offset
        if (newIndex < 0) newIndex = slides.children.length - 1
        if (newIndex >= slides.children.length) newIndex = 0

        slides.children[newIndex].dataset.active = true
        delete activeSlide.dataset.active
    })
})