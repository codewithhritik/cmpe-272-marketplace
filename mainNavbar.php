<!-- Navbar -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="./main.php" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-500 text-lg">Online Market Place</span>
                    </a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3 ">
                <a href="./login.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Login</a>
                <a href="./signup.php" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <!-- <li class="active"><a href="gym/index.php" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Gym</a></li>
            <li><a href="Knight/index.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Playpal</a></li> -->
            <li><a href="login.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Login</a></li>
            <li><a href="signup.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Sign Up</a></li>
        </ul>
    </div>
</nav>

<!-- Script for the mobile menu -->
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>