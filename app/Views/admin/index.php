<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2 class="mb-4">Manajemen Order</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Order</th>
                <th>Nama Pelanggan</th>
                <th>Nomor Meja</th>
                <th>Status Order</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= esc($order['id_order']) ?></td>
                    <td><?= esc($order['nama_pelanggan']) ?></td>
                    <td><?= esc($order['nomor_meja']) ?></td>
                    <td><?= esc($order['status_order']) ?></td>
                    <td>
                        <form action="<?= base_url('admin/update-status/' . $order['id_order']) ?>" method="post"
                            class="d-inline">
                            <?= csrf_field() ?>
                            <select name="status" class="form-select d-inline" style="width: auto;">
                                <option value="pending" <?= $order['status_order'] === 'pending' ? 'selected' : '' ?>>Pending
                                </option>
                                <option value="completed" <?= $order['status_order'] === 'completed' ? 'selected' : '' ?>>
                                    Completed</option>
                                <option value="canceled" <?= $order['status_order'] === 'canceled' ? 'selected' : '' ?>>
                                    Canceled</option>
                            </select>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>