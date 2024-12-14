function globalState() {
    return {
        formData: {
            number: "",  
            password: "", 
        },
        showOTP: false,    
        showError: false,  

        isFormValid() {
            return (
                this.formData.number.length > 0 && this.formData.password.length > 0 &&
                this.formData.number.length >= 12 &&
                this.formData.number.length <= 13 &&
                this.formData.password.length >= 3 &&
                this.formData.password.length <= 100
            )
        },

        submitForm() {
            if (this.isFormValid()) {
                this.$refs.form.submit();
                console.log("Form Submitted", this.formData);
            } else {
                this.showError = true; 
                console.log("Form belum lengkap.");
            }
        },


        moveToOTP() {
            if (this.formData.number.length >= 12 && this.formData.number.length <= 13) {
                this.showLogin = 'showOTP';  // 
                console.log("Pindah ke OTP dengan nomor:", this.formData.number);
            } else {
                alert("Nomor telepon harus diisi dengan benar (12-13 digit).");
            }
        },

    };
}
