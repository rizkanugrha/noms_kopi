<?= $this->extend('dashboard/layout/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2 class="order-title">Pesanan Anda</h2>

    <form action="<?= base_url('order/createOrder') ?>" method="POST">
        <div class="customer-info mb-4">
            <label for="customer-name" class="form-label">Nama Pemesan</label>
            <input type="text" name="nama_pelanggan" id="customer-name" class="form-control mb-3"
                placeholder="Masukkan nama pemesan" required>

            <label for="table-number" class="form-label">Nomor Meja</label>
            <input type="number" name="nomor_meja" id="table-number" class="form-control"
                placeholder="Masukkan nomor meja" required>
        </div>

        <div id="order-list" class="order-section">
            <h4>Order Details</h4>
            <ul id="order-items" class="list-group"></ul>
        </div>

        <div class="total-payment my-3" id="total-payment">Total: Rp. 0</div>

        <input type="hidden" name="order_details" id="order-details">
        <input type="hidden" name="total_pembayaran" id="total-payment-hidden">

        <div class="checkout-buttons">
            <button type="submit" name="metode_pembayaran" value="cash" id="btn-sudah-bayar"
                class="btn btn-primary">Bayar Cash</button>
            <button type="submit" name="metode_pembayaran" value="qris" class="btn btn-primary">Bayar QRIS</button>
        </div>

        <div class="back mt-3">
            <a href="<?= base_url('dashboard/index') ?>">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </form>
</div>

<script>
    function loadOrderList() {
        const orderList = JSON.parse(localStorage.getItem('cart')) || [];
        const orderItems = document.getElementById('order-items');
        const totalPaymentElem = document.getElementById('total-payment');
        const orderDetailsInput = document.getElementById('order-details');
        const totalPaymentHidden = document.getElementById('total-payment-hidden');

        orderItems.innerHTML = '';
        let totalPayment = 0;
        let orderDetails = [];

        orderList.forEach(item => {
            const price = parseInt(item.price) || 0;
            const quantity = parseInt(item.quantity) || 0;

            const listItem = document.createElement('li');
            listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
            listItem.innerHTML = `
                ${item.name} (x${quantity})
                <span>Rp. ${(price * quantity).toLocaleString('id-ID')}</span>
            `;

            orderItems.appendChild(listItem);
            totalPayment += price * quantity;

            orderDetails.push({
                id_menu: item.id_menu,
                jumlah: quantity,
                harga_total: price * quantity
            });
        });

        totalPaymentElem.innerText = `Total: Rp. ${totalPayment.toLocaleString('id-ID')}`;
        orderDetailsInput.value = JSON.stringify(orderDetails);
        totalPaymentHidden.value = totalPayment;
    }

    window.onload = loadOrderList;

    document.getElementById('btn-sudah-bayar').addEventListener('click', function () {
        // Hapus semua data dari localStorage
        localStorage.clear();
        console.log('LocalStorage telah dihapus setelah pembayaran selesai.');
    });
</script>

<?= $this->endSection() ?>