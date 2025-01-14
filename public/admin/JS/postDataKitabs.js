function createKitabs() {
    return {
        name_kitabs: '', // Input form
        successMessage: null, // Pesan sukses
        isModalOpenCreate: true, // Status modal
        isSubmitting: false, // Status loading
        init() {
            this.resetForm(); // Inisialisasi/reset form
        },
        resetForm() {
            this.name_kitabs = ''; // Reset input
            this.successMessage = null; // Reset pesan sukses
            this.isModalOpenCreate = true; // Modal terbuka
            this.isSubmitting = false; // Reset status loading
        },
        async submitKitabs() {
            this.isSubmitting = true; // Aktifkan loading
            try {
                // Pastikan CSRF token tersedia dari meta tag di layout utama
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const response = await fetch(statusPostUrlKitabs, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ name_kitabs: this.name_kitabs })
                });

                if (!response.ok) {
                    const errorData = await response.json(); // Ambil pesan error dari server
                    throw new Error(errorData.message || 'Gagal menyimpan data');
                }

                const result = await response.json();

                // Reset form dan tampilkan pesan sukses
                this.successMessage = result.message || 'Data berhasil disimpan';
                this.isModalOpenCreate = false; // Tutup modal setelah submit sukses
                
                // Tampilkan pesan sukses selama 3 detik
                setTimeout(() => {
                    this.resetForm(); // Reset state setelah modal sukses
                    window.location.reload(true); // Refresh halaman
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
