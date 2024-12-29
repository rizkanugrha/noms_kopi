function displayOrder() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const orderList = document.getElementById('order-list');
    const totalPayment = document.getElementById('total-payment');
    let total = 0;

    // Bersihkan elemen sebelumnya
    orderList.innerHTML = '';

    if (cart.length === 0) {
        orderList.innerHTML = '<p>Keranjang Anda kosong.</p>';
        totalPayment.innerText = 'Total: Rp. 0';
        return;
    }

    // Tampilkan item pesanan
    cart.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.className = 'order-item';
        itemDiv.innerHTML = `
    <span class="order-item-name">${item.name}</span>
    <span class="order-item-quantity">
        <button onclick="updateQuantity('${item.name}', -1)" style="margin-right: 5px;">-</button>
        ${item.quantity}
        <button onclick="updateQuantity('${item.name}', 1)" style="margin-left: 5px;">+</button>
    </span>
    <span class="order-item-price">Rp. ${(item.price * item.quantity).toLocaleString('id-ID')}</span>
`;
        orderList.appendChild(itemDiv);

        // Tambahkan harga ke total
        total += item.price * item.quantity;
    });

    // Tampilkan total pembayaran
    totalPayment.innerText = `Total: Rp. ${total.toLocaleString('id-ID')}`;
}


function updateQuantity(itemName, change) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const itemIndex = cart.findIndex(item => item.name === itemName);

    if (itemIndex > -1) {
        // Jika item ditemukan
        if (change === 1) {
            // Tambahkan jumlah item
            cart[itemIndex].quantity += 1;
        } else if (change === -1) {
            // Kurangi jumlah item
            if (cart[itemIndex].quantity > 1) {
                cart[itemIndex].quantity -= 1;
            } else {
                // Jika jumlah item 1, hapus dari keranjang
                cart.splice(itemIndex, 1);
            }
        }
    }

    // Simpan perubahan ke localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    displayOrder(); // Tampilkan ulang daftar pesanan
}

// BACK
function goBack() {
    if (window.history.length > 1) {
        window.history.back();
    } else {
        window.location.href = "index.html";
    }
}


function addToCart(item) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const existingItemIndex = cart.findIndex(cartItem => cartItem.name === item.name);

    if (existingItemIndex > -1) {
        // Jika item sudah ada, tambahkan jumlahnya
        cart[existingItemIndex].quantity += 1;
    } else {
        // Jika item belum ada, tambahkan ke keranjang dengan jumlah awal 1
        item.quantity = 1; // Set jumlah awal
        cart.push(item);
    }

    // Simpan kembali ke localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}


function checkout(method) {
    const customerName = document.getElementById('customer-name').value.trim();
    const tableNumber = document.getElementById('table-number').value.trim();
    const cart = JSON.parse(localStorage.getItem('cart')) || []; // Ambil data keranjang
    const totalPayment = cart.reduce((sum, item) => sum + parseInt(item.price, 10), 0); // Hitung total harga

    // Validasi input
    if (!customerName || !tableNumber) {
        alert('Harap isi nama pemesan dan nomor meja.');
        return;
    }

    // Konfirmasi metode pembayaran
    const paymentConfirmation = method === 'cash' ?
        `Anda memilih metode pembayaran Cash.\nNama Pemesan: ${customerName}\nNomor Meja: ${tableNumber}\nApakah Anda yakin?` :
        `Anda memilih metode pembayaran QRIS.\nNama Pemesan: ${customerName}\nNomor Meja: ${tableNumber}\nApakah Anda yakin?`;

    if (confirm(paymentConfirmation)) {
        // Buat form untuk mengirim data ke struk.php atau barcode.php
        const form = document.createElement('form');
        form.method = 'POST';

        // Tentukan action berdasarkan metode pembayaran
        form.action = method === 'cash' ? 'struk.php' : 'qr.php';

        // Tambahkan input data ke form
        form.innerHTML = `
    <input type="hidden" name="customer_name" value="${customerName}">
    <input type="hidden" name="table_number" value="${tableNumber}">
    <input type="hidden" name="order_details" value='${JSON.stringify(cart)}'>
    <input type="hidden" name="total_payment" value="${totalPayment}">
`;

        // Tambahkan form ke body dan kirim
        document.body.appendChild(form);
        form.submit();

        // Kosongkan keranjang setelah checkout
        localStorage.removeItem('cart');
    }
}


// Panggil saat halaman dimuat
window.onload = displayOrder;