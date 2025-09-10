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

//blogrecipe
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

//upload images
const uploadArea = document.getElementById('uploadArea');
const fileInput = document.getElementById('fileInput');
const previewContainer = document.getElementById('previewContainer');

let imageFiles = [];

uploadArea.addEventListener('click', () => fileInput.click());

uploadArea.addEventListener('dragover', (e) => {
  e.preventDefault();
  uploadArea.style.background = '#eee';
});

uploadArea.addEventListener('dragleave', () => {
  uploadArea.style.background = '#f9f9f9';
});

uploadArea.addEventListener('drop', (e) => {
  e.preventDefault();
  uploadArea.style.background = '#f9f9f9';
  handleFiles(e.dataTransfer.files);
});

fileInput.addEventListener('change', () => handleFiles(fileInput.files));

function handleFiles(files) {
  const newFiles = Array.from(files).slice(0, 1 - imageFiles.length);

  newFiles.forEach(file => {
    if (!file.type.startsWith('image/')) return;

    imageFiles.push(file);

    const reader = new FileReader();
    reader.onload = () => {
      const box = document.createElement('div');
      box.className = 'preview-box';

      const img = document.createElement('img');
      img.src = reader.result;

      const removeBtn = document.createElement('button');
      removeBtn.className = 'remove-btn';
      removeBtn.textContent = '×';

      removeBtn.addEventListener('click', () => {
        imageFiles = imageFiles.filter(f => f !== file);
        previewContainer.removeChild(box);
      });

      box.appendChild(img);
      box.appendChild(removeBtn);
      previewContainer.appendChild(box);
    };
    reader.readAsDataURL(file);
  });
}

// To send to server (example):
// let formData = new FormData();
// imageFiles.forEach((img, i) => formData.append(`image${i}`, img));
// fetch('/upload', { method: 'POST', body: formData });