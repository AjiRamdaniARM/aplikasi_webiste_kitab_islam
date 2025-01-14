function postData() {
    return {
        rujukan: '', // Input form
        halaman: '', // Input form
        id_status: '', // Input form
        content_latin: '', // Quill editor content
        content_arab: '', 
        successMessagePost: null, // Pesan sukses
        isModalOpen: true, // Status modal
        isSubmitting: false, // Status loading
        quill: null,

        init() {
            this.resetForm(); // Inisialisasi/reset form
            if (!this.quill) {
                this.initializeQuill(); // Inisialisasi Quill editor hanya sekali
            }// Inisialisasi Quill editor
        },

        resetForm() {
            this.rujukan = ''; // Reset input
            this.halaman = ''; // Reset input
            this.id_status = ''; // Reset input
            this.content_latin = ''; // Reset Quill content
            this.content_arab = ''; // Reset Quill content
            this.successMessage = null; // Reset pesan sukses
            this.isModalOpen = true; // Modal terbuka
            this.isSubmitting = false; // Reset status loading

            if (this.quill) {
                this.quill.setText(''); // Reset editor Quill
            }
        },

        initializeQuill() {
            const quillTextarea = document.getElementById('editor');
            if (quillTextarea && !this.quill) {
                this.quill = new Quill('#editor', {
                    placeholder: 'Masukkan Arti...',
                    theme: 'snow'
                });

                // Sinkronkan konten editor dengan `content_latin`
                this.quill.on('text-change', () => {
                    this.content_latin = this.quill.root.innerHTML;
                });

                this.$watch('content_latin', (value) => {
                    quill.root.innerHTML = value;
                });
            }
        },

        async submitFormData() {
            this.isSubmitting = true; // Aktifkan loading
            try {
                // Ambil CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const response = await fetch(statusPostUrlData, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        rujukan: this.rujukan,
                        halaman: this.halaman,
                        id_status: this.id_status,
                        content_latin: this.content_latin,
                        content_arab: this.content_arab
                    })
                });

                if (!response.ok) {
                    const errorData = await response.json();
                    throw new Error(errorData.message || 'Gagal menyimpan data');
                }

                const result = await response.json();

                // Reset form dan tampilkan pesan sukses
                this.successMessage = result.message || 'Data berhasil disimpan';
                this.isModalOpen = false; // Tutup modal setelah submit sukses
                setTimeout(() => {
                    this.resetForm(); // Reset state setelah modal sukses
                }, 1000);
            } catch (error) {
                console.error('Error:', error.message);
                alert(`Terjadi kesalahan: ${error.message}`);
            } finally {
                this.isSubmitting = false; // Matikan loading
            }
        }
    };
}

