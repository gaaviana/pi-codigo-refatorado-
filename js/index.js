document.addEventListener('DOMContentLoaded', function() {
    const postCard = document.querySelectorAll(".post");
    const postModal = document.getElementById('postModal')
    const postModalFechar = document.querySelector('.fechar-modal')

    postCard.forEach(card => {
        card.addEventListener('click', function() {
            postModal.style.display = 'block';

            postModal.offsetHeight;
            postModal.classList.add('ativo')
            document.body.style.overflow = 'hidden'
        });
    });

    function fecharModal() {
        postModal.classList.remove('ativo');
        setTimeout(() => {
            postModal.style.display = 'none'
            document.body.style.overflow = 'auto'
        });
    }

    postModalFechar.addEventListener('click', fecharModal)

    window.addEventListener('click', function(event) {
        if (event.target === postModal) {
            fecharModal();
        }
    });
})