let editaModal = document.getElementById("exampleModalCenteredScrollable");

editaModal.addEventListener("shown.bs.modal", event => {
    let boton = event.relatedTarget;
    let id = boton.getAttribute("data-bs-id");

    let inputId = editaModal.querySelector(".modal-body #id_product");
    let inputName = editaModal.querySelector(".modal-body #name");
    let inputDescription = editaModal.querySelector(".modal-body #description");
    let image = editaModal.querySelector(".modal-body #img");
    let inputCategory = editaModal.querySelector(".modal-body #category");

    let url = "getProducto.php";
    let formData = new FormData();
    formData.append('id_product', id);

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data => {
            
          inputId.value = data.id_product
          inputName.value = data.name
          inputDescription.value = data.description
          image.src = data.image
          inputCategory.value = data.id_category

    }).catch(err => console.log(err))
})