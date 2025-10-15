<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiziTrack</title>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const container = document.getElementById('form-container');

            document.getElementById('add-form').addEventListener('click', function() {
                const newForm = document.createElement('div');
                newForm.classList.add('mb-4', 'form-item');

                newForm.innerHTML = `
                    <label>Makanan</label>
                    <input type="text" name="makanan[]" required>
                    <label>Total</label>
                    <input type="number" name="total[]" required>
                    <button type="button" class="remove-btn">Hapus</button>
                    <hr>
                `;

                container.appendChild(newForm);

                // Tambahkan event untuk tombol hapus
                newForm.querySelector('.remove-btn').addEventListener('click', function() {
                    newForm.remove();
                });
            });
        });
    </script>
</head>
<body>
    <div>
        <h2>Survey Makanan</h2>

        {{-- Tampilkan pesan error atau sukses --}}
        @if(session('error'))
            <div style="color:red">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div style="color:green">{{ session('success') }}</div>
        @endif

        <form action="{{ route('surveyMakanan.post') }}" method="POST">
            @csrf

            <div>
                <label for="sekolah">Sekolah</label>
                <input type="text" id="sekolah" name="sekolah" required>
            </div>

            <div id="form-container">
                <div class="mb-4 form-item">
                    <label>Makanan</label>
                    <input type="text" name="makanan[]" required>
                    <label>Total</label>
                    <input type="number" name="total[]" required>
                    <hr>
                </div>
            </div>

            <button type="button" id="add-form">Tambah Makanan</button>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
