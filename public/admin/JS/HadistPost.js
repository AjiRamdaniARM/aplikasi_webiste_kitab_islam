function postHadist() {
    return {
        hadist: '', // Quill editor content
        successMessagePost: null, // Pesan sukses
        isModalOpen: true, // Status modal
        isSubmitting: false, // Status loading
        quill2: null,

        init() {
            this.resetForm(); // Inisialisasi/reset form
            if (!this.quill2) {
                this.initializeQuill(); // Inisialisasi Quill editor hanya sekali
            }// Inisialisasi Quill editor
        },

        resetForm() {
            this.hadist = ''; // Reset Quill content
            this.successMessage = null; // Reset pesan sukses
            this.isModalOpen = true; // Modal terbuka
            this.isSubmitting = false; // Reset status loading

            if (this.quill2) {
                this.quill2.setText(''); // Reset editor Quill
            }
        },

        initializeQuill() {
            const quillTextarea = document.getElementById('editor-hadis');
            if (quillTextarea && !this.quill2) {
                this.quill2 = new Quill('#editor-hadis', {
                    placeholder: 'Masukkan Arti...',
                    theme: 'snow'
                });

                // Sinkronkan konten editor dengan `content_latin`
                this.quill2.on('text-change', () => {
                    this.hadist = this.quill2.root.innerHTML;
                });

                this.$watch('hadist', (value) => {
                    quill2.root.innerHTML = value;
                });
            }
        },

        async submitFormDataHadist() {
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
                        hadist: this.hadist,
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
