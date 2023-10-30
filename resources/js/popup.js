const selectButton = document.getElementById('selectButton');
const cancelButton = document.getElementById('cancelButton');
const imageContainer = document.getElementById("image-container");
const prevButton = document.getElementById("prevBtn");
const nextButton = document.getElementById("nextBtn");

const imagePaths = [
    ["images/desconocido.png", "Ninguno"],
    ["images/ninio3.jpg", "Niño 1"],
    ["images/niño2.jpg", "Niño 2"],
    ["images/niño3.jpg", "Niño 3"],
    ["images/niño4.jpg", "Niño 4"],
    ["images/niño5.jpg", "Niño 5"]
];

let currentIndex = 0;

function showImage(index) {
    if (index >= 0 && index < imagePaths.length) {
        const imagePath = imagePaths[index][0];
        const imageElement = document.createElement("img");
        imageElement.src = imagePath;
        imageElement.className = "image";

        // Elimina las imágenes anteriores
        while (imageContainer.firstChild) {
            imageContainer.removeChild(imageContainer.firstChild);
        }
        imageContainer.appendChild(imageElement);
        currentIndex = index;

        // Actualiza el nombre de la imagen en selectButton y en la función updateImage
        const currentImageName = imagePaths[currentIndex][1];
        imageName.textContent = `Nombre de la imagen: ${currentImageName}`;
    }
}

prevButton.addEventListener("click", () => {
    showImage(currentIndex - 1);
    updateImage();
});

nextButton.addEventListener("click", () => {
    showImage(currentIndex + 1);
    updateImage();
});

// Mostrar la primera imagen al cargar la página
showImage(currentIndex);

selectButton.addEventListener('click', () => {
    const currentImageName = imagePaths[currentIndex][1];
    console.log('imagen seleccionada: '+currentImageName);
    alert('imagen seleccionada: '+currentImageName);
    //console.log(imageName.textContent);
    document.getElementById("popup").style.display = "none";
});

function updateImage() {
    const currentImage = imagePaths[currentIndex][1];
    const currentImageName = imagePaths[currentIndex][1];
    imageName.textContent = `${currentImageName}`;
    //console.log(currentImageName);
}

updateImage();

// código para el popup
document.getElementById("mostrarPopup").addEventListener("click", function() {
    document.getElementById("popup").style.display = "block";
});

document.getElementById("cancelButton").addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
});


