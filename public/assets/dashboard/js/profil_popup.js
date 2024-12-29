const profileIcon = document.getElementById('profileIcon');
const profilePopup = document.getElementById('profilePopup');

// Toggle popup visibility
profileIcon.addEventListener('click', () => {
    const isVisible = profilePopup.style.display === 'block';
    profilePopup.style.display = isVisible ? 'none' : 'block';
});

// Close popup if clicked outside
document.addEventListener('click', (event) => {
    if (!profileIcon.contains(event.target) && !profilePopup.contains(event.target)) {
        profilePopup.style.display = 'none';
    }
});