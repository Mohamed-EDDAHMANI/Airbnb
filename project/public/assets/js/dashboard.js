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

document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll(".sidebar-menu a");
    sidebarLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const url = this.getAttribute("href");
            const contentarea = document.getElementById("content-area");
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    contentarea.innerHTML = data;
                    sidebarLinks.forEach(link => link.classList.remove("active"));
                    this.classList.add("active");
                })
                .catch(error => console.error("Error loading section:", error));
        });
    });
});