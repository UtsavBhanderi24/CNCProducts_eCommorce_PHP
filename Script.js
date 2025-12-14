document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('forgotPasswordForm');
    const resultMessage = document.getElementById('resultMessage');

    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        const username = form.username.value;
        const email = form.email.value;

        const response = await fetch('reset_password.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `username=${encodeURIComponent(username)}&email=${encodeURIComponent(email)}`,
        });

        const data = await response.text();
        resultMessage.textContent = data;
    });
});

// Search Items


const searchInput = document.getElementById('search-input');
const searchDropdown = document.getElementById('search-dropdown');

searchInput.addEventListener('input', updateDropdown);

// Simulated data - replace with your actual data and search logic
const projectItems = [
    { name: 'Home Page', link: 'Index.php' },
    { name: 'Automotive Components', link: 'Automotive-Components.php' },
    { name: 'Brass Forged Components', link: 'Brass-Forged-Components.php' },
    { name: 'Categories', link: 'Categories.php' },
    { name: 'CNC-Components', link: 'CNC-Components.php' },
    { name: 'Copper Parts', link: 'Copper-Parts.php' },
    { name: 'Milling Parts', link: 'Milling-Parts.php' },
    { name: 'VMC Components', link: 'VMC-Components.php' },
    { name: 'Another Item', link: 'Index.php' },
    
];

function updateDropdown() {
    const searchText = searchInput.value.trim().toLowerCase();
    searchDropdown.innerHTML = '';

    if (searchText.length === 0) {
        searchDropdown.style.display = 'none';
        return;
    }

    const matchingItems = projectItems.filter(item =>
        item.name.toLowerCase().includes(searchText)
    );

    if (matchingItems.length > 0) {
        matchingItems.forEach(item => {
            const dropdownItem = document.createElement('div');
            dropdownItem.className = 'dropdown-item';
            const link = document.createElement('a');
            link.href = item.link;
            link.textContent = item.name;
            dropdownItem.appendChild(link);
            searchDropdown.appendChild(dropdownItem);
        });
        searchDropdown.style.display = 'block';
    } else {
        searchDropdown.style.display = 'none';
    }
}

// Close the dropdown when clicking outside of it
window.addEventListener('click', (event) => {
    if (!searchInput.contains(event.target) && !searchDropdown.contains(event.target)) {
        searchDropdown.style.display ='none';
    }
});


