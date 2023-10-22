<?= $this->extend('v_layout') ?>

<?= $this->section('content') ?>

<section>

    <h1><?= $judul ?></h1>

    <h4>Nama</h4>
    <ul type="disc">
        <li>Nama Depan : Gadis Tapana </li>
        <li>Nama Belakang : Bela</li>
    </ul>
    <br>
    <h4>Alamat</h4>
    <ul type="none">
        <li> Ciamis </li>
    </ul>

    <h4>Tempat Lahir</h4>
    <ul type="none">
        <li>Ciamis</li>
    </ul>
    <h4>Olah Raga Favorit</h4>
    <ul type="square">
        <li>Basket</li>
        <li>Voli</li>
    </ul>
</section>

<?= $this->endSection() ?>