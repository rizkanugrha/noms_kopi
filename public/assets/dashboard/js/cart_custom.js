function addToCart(id_menu, name, price) {
    // Ambil data keranjang dari localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Cari apakah item sudah ada di keranjang
    const itemIndex = cart.findIndex(item => item.id_menu === id_menu);

    if (itemIndex > -1) {
        // Jika item sudah ada, tambahkan jumlahnya
        cart[itemIndex].quantity = parseInt(cart[itemIndex].quantity) + 1;
    } else {
        // Jika item belum ada, tambahkan ke keranjang
        cart.push({
            id_menu: id_menu,
            name: name,
            price: price,
            quantity: 1 // Pastikan quantity diinisialisasi dengan angka
        });
    }

    // Simpan kembali ke localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Perbarui jumlah item di UI
    updateCartCount();
}


function updateCartCount() {
    // Ambil data dari localStorage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Pastikan setiap item memiliki properti quantity yang valid
    const cartCount = cart.reduce((total, item) => {
        // Periksa apakah properti quantity valid
        if (!item.quantity || isNaN(item.quantity)) {
            item.quantity = 0; // Defaultkan ke 0 jika tidak valid
        }
        return total + item.quantity;
    }, 0);

    // Tampilkan jumlah item di elemen cart-count
    document.getElementById('cart-count').innerText = cartCount;
}

