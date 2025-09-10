<script>
    const form = document.querySelector("form");
    const modal = document.getElementById("confirmationModal");
    const confirmBtn = document.getElementById("confirmDelete");
    const cancelBtn = document.getElementById("cancelDelete");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // prevent default form submission
        modal.style.display = "flex"; // show modal
    });

    confirmBtn.addEventListener("click", function () {
        modal.style.display = "none";
        form.submit(); // proceed to submit
    });

    cancelBtn.addEventListener("click", function () {
        modal.style.display = "none"; // just hide modal
    });
</script>
