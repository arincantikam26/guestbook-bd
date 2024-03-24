function scrollToElement(element) {
    document.querySelector(element).scrollIntoView({
        behavior: 'smooth',
        block: 'start',
        inline: 'nearest',
    });
}