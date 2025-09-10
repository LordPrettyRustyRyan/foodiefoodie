let currentIndex = 0;
const images = document.querySelectorAll(".carousel-img");
const totalImages = images.length;

document.querySelector(".next-btn").addEventListener("click", nextSlide);
document.querySelector(".prev-btn").addEventListener("click", prevSlide);

function showSlide(index) {
    images.forEach(img => img.classList.remove("active"));
    images[index].classList.add("active");
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalImages;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showSlide(currentIndex);
}

// Auto slide every 4 seconds
setInterval(nextSlide, 4000);




/*
const recipeData = {
    title: "Vegetarian Cheese Salad",
    prepTime: "15 mins",
    cookTime: "30 mins",
    totalTime: "45 mins",
    yields: "8 Servings",
    instructions: [
        "Lorem ipsum dolor sit amet, consectetur ec varius dui. Suspendisse potenti ec varius dui. Suspendisse potenti ec varius dui. Suspendisse potentiscing elit.",
        "Vestibulum nec varius dui. Suspendisse potenti.",
        "Vestibulum ac pellentesque tortor.",
    ],
    ingredients: [
        "4 Tbsp (57 gr) butter",
        "2 large eggs",
        "2 yogurt containers granulated sugar",
        "1 vanilla or plain yogurt, 170g container",
        "2 yogurt containers unbleached white flour",
        "1.5 yogurt containers milk",
    ]
};
*/
// Populate Recipe Data
document.getElementById("recipe-title").textContent = recipeData.title;
document.getElementById("prep-time").textContent = recipeData.prepTime;
document.getElementById("cook-time").textContent = recipeData.cookTime;
document.getElementById("total-time").textContent = recipeData.totalTime;
document.getElementById("yields").textContent = recipeData.yields;

// Populate Instructions
const instructionsList = document.getElementById("instructions-list");
recipeData.instructions.forEach((step, index) => {
    const stepEl = document.createElement("p");
    stepEl.innerHTML = `<strong>${index + 1}. </strong> ${step}`;
    instructionsList.appendChild(stepEl);
});

// Populate Ingredients
const ingredientsList = document.getElementById("ingredients-list");
recipeData.ingredients.forEach((ingredient) => {
    const li = document.createElement("li");
    li.textContent = ingredient;
    ingredientsList.appendChild(li);
});







        const totalPages = 69;
        let currentPage = 1;

        function generatePagination() {
            const pagesContainer = document.getElementById("pages");
            pagesContainer.innerHTML = "";
            let pages = [];

            if (totalPages <= 10) {
                for (let i = 1; i <= totalPages; i++) pages.push(i);
            } else {
                pages.push(1); // Always show first page

                if (currentPage > 5) {
                    pages.push("...");
                }

                if (currentPage <= 5) {
                    for (let i = 2; i <= 6; i++) pages.push(i);
                } else if (currentPage >= totalPages - 4) {
                    for (let i = totalPages - 5; i < totalPages; i++) pages.push(i);
                } else {
                    for (let i = currentPage - 3; i <= currentPage + 3; i++) pages.push(i);
                }

                if (currentPage < totalPages - 4) {
                    pages.push("...");
                }

                pages.push(totalPages);
            }

            pages.forEach(num => {
                const pageBtn = document.createElement("button");
                pageBtn.classList.add("page");

                if (num === "...") {
                    pageBtn.innerText = "...";
                    pageBtn.disabled = true;
                } else {
                    pageBtn.innerText = num;
                    pageBtn.onclick = () => changePage(num);
                    if (num === currentPage) {
                        pageBtn.classList.add("active");
                    }
                }

                pagesContainer.appendChild(pageBtn);
            });

            document.getElementById("prev").disabled = currentPage === 1;
            document.getElementById("next").disabled = currentPage === totalPages;
        }

        function changePage(page) {
            if (page >= 1 && page <= totalPages) {
                currentPage = page;
                generatePagination();
            }
        }

        document.getElementById("prev").addEventListener("click", () => changePage(currentPage - 1));
        document.getElementById("next").addEventListener("click", () => changePage(currentPage + 1));

        generatePagination();