document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('#faq-accordion button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-accordion-target');
            const target = document.querySelector(targetId);

            const expanded = button.getAttribute('aria-expanded') === 'true';

            button.setAttribute('aria-expanded', !expanded);
            target.classList.toggle('hidden');

            const svg = button.querySelector('svg');
            if(svg){
                svg.classList.toggle('rotate-180');
            }
        });
    });
});
