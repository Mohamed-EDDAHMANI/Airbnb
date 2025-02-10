const navLinks = document.querySelectorAll('.sidebar-menu a');
const sections = document.querySelectorAll('.section');

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navLinks.forEach(l => l.classList.remove('active'));
        sections.forEach(s => s.classList.remove('active'));
        link.classList.add('active');
        const sectionId = link.getAttribute('data-section');
        document.getElementById(sectionId).classList.add('active');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.querySelector('.welcome-modal');
    const closeBtn = document.querySelector('.modal-close');
    const startBtn = document.querySelector('.welcome-button');

    setTimeout(() => {
        modal.classList.add('active');
    }, 500);

    function closeModal() {
        modal.classList.remove('active');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    closeBtn.addEventListener('click', closeModal);
    startBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
});