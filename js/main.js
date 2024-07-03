document.addEventListener('DOMContentLoaded', () => {
    // Filtros de Categoria
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            const categories = document.querySelectorAll('.product-category');
            categories.forEach(category => {
                if (filter === 'all' || category.id === `category-${filter}`) {
                    category.style.display = 'block';
                } else {
                    category.style.display = 'none';
                }
            });
        });
    });
});
