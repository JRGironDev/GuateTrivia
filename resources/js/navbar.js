document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const searchButton = document.getElementById("searchButton");

    searchButton.addEventListener("click", function () {
        const searchQuery = searchInput.value;
        // Aquí puedes realizar alguna acción con la búsqueda, como enviar una solicitud al servidor.
        console.log("Búsqueda realizada: " + searchQuery);
    });
});
