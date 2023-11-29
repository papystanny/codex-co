document.addEventListener('DOMContentLoaded', function() {
    const circle = document.querySelector('.circle');
    let size = 100;

    setInterval(() => {
        size += 10;
        circle.style.width = size + 'px';
        circle.style.height = size + 'px';
    }, 1000);
});