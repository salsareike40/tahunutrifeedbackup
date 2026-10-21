
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pesan Produk | TahuNutrifeed</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header class="nav">
    <a class="brand" href="index.html">
        <span class="leaf">🌱</span> TahuNutrifeed
    </a>

    <nav>
        <a href="index.html">Beranda</a>
        <a href="produk.html">Produk</a>
        <a href="tentang.html">Tentang Kami</a>
        <a href="dampak.html">Dampak</a>
    </nav>
</header>

<main class="section form-section">
    <a href="produk.html">← Kembali ke produk</a>

    <h1>Pesan Produk</h1>
    <p>
        Isi data di bawah. WhatsApp akan terbuka untuk
        mengirim rincian pesanan kepada admin.
    </p>

    <div class="info-box">
        <b>Informasi:</b>
        Harga dan ketersediaan produk perlu dikonfirmasi
        langsung kepada admin.
    </div>

    <form id="orderForm" class="edit-form">

        <label>
            Pilih produk
            <select id="product" name="product" required>
                <option value="">-- Pilih produk --</option>
                <option value="Pakan Campuran Ampas Tahu">
                    Pakan Campuran Ampas Tahu
                </option>
                <option value="Ampas Tahu Kering">
                    Ampas Tahu Kering
                </option>
                <option value="Pelet Pakan Campuran Ampas Tahu">
                    Pelet Pakan Campuran Ampas Tahu
                </option>
            </select>
        </label>

        <label>
            Nama lengkap
            <input
                type="text"
                id="customerName"
                name="customer_name"
                required
            >
        </label>

        <label>
            Nomor WhatsApp
            <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Contoh: 081234567890"
                required
            >
        </label>

        <label>
            Alamat (opsional)
            <input
                type="text"
                id="address"
                name="address"
            >
        </label>

        <label>
            Jumlah (kg)
            <input
                type="number"
                id="quantity"
                name="quantity"
                min="1"
                step="1"
                required
            >
        </label>

        <label>
            Catatan (opsional)
            <textarea
                id="notes"
                name="notes"
                rows="3"
            ></textarea>
        </label>

        <button type="submit" class="btn">
            Kirim Pesanan &amp; Lanjut WhatsApp
        </button>

    </form>
</main>

<footer>
    <a class="brand" href="index.html">🌱 TahuNutrifeed</a>
    <p>UD. Tahu Yaya · Abian Tubuh, Sandubaya, Kota Mataram</p>
</footer>

<script>
document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const product = document.getElementById('product').value;
    const name = document.getElementById('customerName').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();
    const quantity = Number(document.getElementById('quantity').value);
    const notes = document.getElementById('notes').value.trim();

    if (!product || !name || !phone || !Number.isInteger(quantity) || quantity < 1) {
        alert('Mohon lengkapi data dan masukkan jumlah minimal 1 kg.');
        return;
    }

    const message =
`Halo TahuNutrifeed, saya ingin memesan produk.

Nama: ${name}
Nomor WhatsApp: ${phone}
Produk: ${product}
Jumlah: ${quantity} kg
Alamat: ${address || '-'}
Catatan: ${notes || '-'}

Mohon konfirmasi harga dan ketersediaan stok. Terima kasih.`;

    const adminWhatsApp = '6287765470125';
    const url = 'https://wa.me/' + adminWhatsApp + '?text=' + encodeURIComponent(message);

    window.open(url, '_blank');
});
</script>

</body>
</html>
