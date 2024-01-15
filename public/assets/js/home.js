document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navigation-var");

    const onMenuClick = () => {
        const responsive_class_name = "responsive";
        navbar.classList.toggle(responsive_class_name);
    };

    navbar.addEventListener('click', onMenuClick);

    const inputClick = document.getElementById('input__modal');
    const modal = document.getElementById('modal__post');

    const openModal = () => {
        modal.style.display = 'block';
    };

    // Agregar el evento clic al input
    inputClick.addEventListener('click', openModal);

    // Cerrar el modal si se hace clic fuera de él
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    const cardOptions = document.getElementById('options__card');
    const menuOptionsCard = document.getElementById('card__options__open');

    cardOptions.addEventListener('click', () => {
        const isMenuVisible = menuOptionsCard.style.display === 'block';
        menuOptionsCard.style.display = isMenuVisible ? 'none' : 'block';
    });


    const deleteCardButton = document.getElementById('deleteBtn')
    const formDeleteCard = document.getElementById('deleteCards')

    deleteCardButton.addEventListener('click', () => {
            formDeleteCard.submit();
        
    })

    const buttonEditPost = document.getElementById('edit__modal')
    const selectedPostEdit = document.getElementById('modal__edit__post')

    buttonEditPost.addEventListener('click',()=>{
        selectedPostEdit.style.display = 'block'
    })

    window.addEventListener('click', (event) => {
        if (event.target === selectedPostEdit) {
            selectedPostEdit.style.display = 'none';
        }
    });


});






