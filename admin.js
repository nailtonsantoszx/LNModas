document.addEventListener('DOMContentLoaded', (event) => {
    document.body.classList.add('admin');
    
    // Event listener para o botão de adicionar imagem
    const addImageButtons = document.querySelectorAll('.add-image-btn');
    addImageButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productId = button.closest('.product-item').dataset.productId;
            const imagePath = prompt('Digite o caminho da imagem:');
            if (imagePath) {
                fetch('scripts/admin-actions.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `action=add-image&product_id=${productId}&image_path=${imagePath}`
                })
                .then(response => response.text())
                .then(data => {
                    if (data) {
                        alert(data);
                    }
                    location.reload();
                })
                .catch(error => console.error('Erro:', error));
            }
        });
    });
});
