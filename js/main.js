document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCategories = document.querySelectorAll('.product-category');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            productCategories.forEach(category => {
                const categoryType = category.getAttribute('id').replace('category-', '');

                if (filter === 'all' || categoryType === filter) {
                    category.style.display = 'block';
                } else {
                    category.style.display = 'none';
                }
            });
        });
    });

    // Aplica o filtro inicial para mostrar todos os produtos
    document.querySelector('.filter-btn[data-filter="all"]').click();
});
