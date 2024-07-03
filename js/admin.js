document.addEventListener('DOMContentLoaded', () => {
    // Adiciona eventos aos botões de adicionar imagem
    const addImageBtns = document.querySelectorAll('.add-image-btn');
    addImageBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const productId = btn.getAttribute('data-product-id');
            // Faz uma requisição para abrir o formulário de upload de imagem
            fetch('upload-image.php', {
                method: 'POST',
                body: new URLSearchParams({ productId })
            })
            .then(response => response.text())
            .then(html => {
                document.body.insertAdjacentHTML('beforeend', html);
            });
        });
    });

    // Adiciona evento ao botão de adicionar produto
    const addProductBtn = document.getElementById('add-product-btn');
    if (addProductBtn) {
        addProductBtn.addEventListener('click', () => {
            // Faz uma requisição para abrir o formulário de adicionar produto
            fetch('add-product.php')
                .then(response => response.text())
                .then(html => {
                    document.body.insertAdjacentHTML('beforeend', html);
                });
        });
    }
});
