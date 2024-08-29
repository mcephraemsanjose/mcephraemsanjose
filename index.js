document.addEventListener("DOMContentLoaded", function() {
    const profiles = document.querySelectorAll('.profile img');
    profiles.forEach(img => {
        img.addEventListener('mouseover', function() {
            this.style.width = "120px";
        });
        img.addEventListener('mouseout', function() {
            this.style.width = "100px";
        });
    });
});
