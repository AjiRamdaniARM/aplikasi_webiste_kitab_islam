function statusForm() {
    return {
        name_status: '', // Input form
        successMessage: null, // Pesan sukses
        isModalOpen: true, // Status modal
        isSubmitting: false, // Status loading
        init() {
            this.resetForm(); // Inisialisasi/reset form
        },
        resetForm() {
            this.name_status = ''; // Reset input
            this.successMessage = null; // Reset pesan sukses
            this.isModalOpen = true; // Modal terbuka
            this.isSubmitting = false; // Reset status loading
        },
        async submitForm() {
            this.isSubmitting = true; // Aktifkan loading
            try {
                // Pastikan CSRF token tersedia dari meta tag di layout utama
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const response = await fetch(statusPostUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ name_status: this.name_status })
                });

                if (!response.ok) {
                    const errorData = await response.json(); // Ambil pesan error dari server
                    throw new Error(errorData.message || 'Gagal menyimpan data');
                }

                const result = await response.json();

                // Reset form dan tampilkan pesan sukses
                this.successMessage = result.message || 'Data berhasil disimpan';
                this.isModalOpen = false; // Tutup modal setelah submit sukses
                
                // Tampilkan pesan sukses selama 3 detik
                setTimeout(() => {
                    this.resetForm(); // Reset state setelah modal sukses
                }, 3000);
            } catch (error) {
                console.error('Error:', error.message);
                alert(`Terjadi kesalahan: ${error.message}`);
            } finally {
                this.isSubmitting = false; // Matikan loading
            }
        }
    };
}
