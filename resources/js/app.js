require('./bootstrap');
import 'bootstrap';

const overlay = document.querySelector('.overlay');
if (overlay) {
    const form = overlay.querySelector('.form');

    document.querySelectorAll('.btn_delete').forEach(button => {
        button.addEventListener('click', function () {
            overlay.classList.remove('d-none');
            form.action = form.dataset.base + '/' + this.dataset.id;
        });
    });


    document.getElementById('btn-no').addEventListener('click', function () {
        form.action = '';
        overlay.classList.add('d-none');
    })

    document.querySelector('.overlay').addEventListener('click', function () {
        form.action = '';
        overlay.classList.add('d-none');
    })
}