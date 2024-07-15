<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script>
        const hamBurger = document.querySelector(".text-xl");

        hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("hidden");
            document.querySelector("#sidebar").classList.toggle("flex");
        });
    </script>