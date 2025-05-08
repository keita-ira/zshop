<?php include("includes/header.php"); ?>

<!-- Shop Section -->
<div class="py-20 bg-gray-100">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-semibold text-[#6B4F3B]">Our Products</h2>
        <p class="text-lg text-gray-600">Explore our wide range of products!</p>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        <!-- Product 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition">
            <img src="assets/product1.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-semibold text-[#6B4F3B]">Product 1</h3>
            <p class="text-gray-500">$19.99</p>
            <a href="product-detail.php?id=1" class="text-[#6B4F3B] mt-4 inline-block">View Product</a>
        </div>
        <!-- Product 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition">
            <img src="assets/product2.jpg" alt="Product 2" class="w-full h-48 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-semibold text-[#6B4F3B]">Product 2</h3>
            <p class="text-gray-500">$29.99</p>
            <a href="product-detail.php?id=2" class="text-[#6B4F3B] mt-4 inline-block">View Product</a>
        </div>
        <!-- Product 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition">
            <img src="assets/product3.jpg" alt="Product 3" class="w-full h-48 object-cover mb-4 rounded-lg">
            <h3 class="text-xl font-semibold text-[#6B4F3B]">Product 3</h3>
            <p class="text-gray-500">$39.99</p>
            <a href="product-detail.php?id=3" class="text-[#6B4F3B] mt-4 inline-block">View Product</a>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
