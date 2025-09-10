function toggleDropdown() {
  const dropdown = document.getElementById('profileDropdown');
  dropdown.classList.toggle('show');
}

// Close dropdown when clicking outside
document.addEventListener('click', function (e) {
  const dropdown = document.getElementById('profileDropdown');
  const trigger = document.querySelector('.profile-trigger');

  if (!dropdown.contains(e.target) && !trigger.contains(e.target)) {
    dropdown.classList.remove('show');
  }
});

//collapsible left-side sidebar
const toggleBtn = document.getElementById('toggleBtn');
const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('mainContent');

toggleBtn.addEventListener('click', () => {
  sidebar.classList.toggle('collapsed');
});

