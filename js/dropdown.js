console.log($('.dropdown'));


$(".dropdown").each(function(index, value) {
    const btn = this.querySelector('.dropdown__btn');
    const list = this.querySelector('.dropdown__list');
    const items = this.querySelectorAll('.dropdown__item');
    const input = this.querySelector('.dropdown__input');

    // отслеживание клика по кнопке
    btn.addEventListener("click", function() {
        list.classList.toggle("dropdown__list--visible");
    });

    // выбор элемента
    items.forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.stopPropagation();
            btn.innerText = this.innerText;
            btn.focus();
            if (input) {
                input.value = this.dataset.value;
            }
            list.classList.remove("dropdown__list--visible");
        })
    })

    // клик снаружи. закрытие
    document.addEventListener('click', function(e) {
            if (e.target !== btn) {
                list.classList.remove("dropdown__list--visible");
            }
        })
        // закрытие по нажатию
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Tab' || e.key === 'Escape') {
            list.classList.remove("dropdown__list--visible");
        }
    })
});