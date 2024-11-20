const images = document.querySelectorAll('img'); // Cambié 'image' a 'img' para seleccionar correctamente las imágenes

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function(event) {
        const textElement = event.target.nextElementSibling;
        
        if (textElement.classList.contains('hidden')) {
            textElement.classList.remove('hidden');
            textElement.classList.add('show');
        } else {
            textElement.classList.remove('show');
            textElement.classList.add('hidden');
        }
    });
}

function index() {
    window.location = "index.html";
}