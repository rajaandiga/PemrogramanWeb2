<?= $this->extend('layout'); ?>

<?= $this->section('main') ?>

<div class="container">
    <h3>review dam Sumbit Order</h3>
    <hr />
    <table>
        <tr>
            <td>Mushoku Tensei Season 1</td>
            <td>@1</td>
            <td>Rp60,000</td>
        </tr>
    </table>
    <h3>Total</h3>
    <hr />
    <span>Rp60,000</span>
    <h3>Alamat Pengiriman</h3>
    <hr />
    <p>Jl Simp. Sungai Duren</p>
    <h3>Metode Bayar</h3>
    <hr />
    <p>Transfer Bank</p>
    <p>No Rekening: Raja Habib, BCA, 11003344</p>
    <div class="mt-5">
        <form action="<?= base_url('submit') ?>" method="POST">
            <button class="btn btn-success">Submit Orders
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>