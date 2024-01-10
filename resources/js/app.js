import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons = document.querySelectorAll(".cancel-button");

buttons.forEach((button) => {
    button.addEventListener("click", (event)=> {

        event.preventDefault();

        const dataTitle = button.getAttribute("data-item-title");
        const deleteModal = document.getElementById("deleteModal");
        const bootstrapModal = new bootstrap.Modal(deleteModal);

        bootstrapModal.show();

        const title = deleteModal.querySelector("#modal-item-title");
        title.textContent = dataTitle;

        const buttonDelete = deleteModal.querySelector("button.btn-primary");

        buttonDelete.addEventListener('click', ()=>{
            button.parentElement.submit();
        })
    });


});
