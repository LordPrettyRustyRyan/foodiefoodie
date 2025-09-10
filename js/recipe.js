        const scrollWrapper = document.querySelector(".scroll-wrapper");


        function scrollLeft() {
            scrollWrapper.scrollBy({ right: -300, behavior: "smooth" });
        }

        function scrollRight() {
            scrollWrapper.scrollBy({ left: +300, behavior: "smooth" });
        }

        function selectCategory(button) {
            document.querySelectorAll(".category-btn").forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");
        }





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