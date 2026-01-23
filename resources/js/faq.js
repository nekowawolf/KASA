console.log('FAQ JS loaded');

document.addEventListener('DOMContentLoaded', () => {
    const faqButtons = document.querySelectorAll('#faq-accordion button');

    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = document.querySelector(button.dataset.accordionTarget);
            const isOpen = !target.classList.contains('hidden');

            document.querySelectorAll('#faq-accordion > div > div').forEach(div => div.classList.add('hidden'));
            document.querySelectorAll('#faq-accordion button').forEach(btn => btn.setAttribute('aria-expanded', 'false'));

            if (!isOpen) {
                target.classList.remove('hidden');
                button.setAttribute('aria-expanded', 'true');
            }

            console.log('Button clicked:', button.innerText.trim(), 'Currently open:', isOpen);
        });
    });

    console.log('FAQ event listeners attached successfully.');
});