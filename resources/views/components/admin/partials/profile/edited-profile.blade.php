<x-admin.layout.admin >
    <main>
        <div class="flex items-center justify-center">
            <div class="mx-auto w-full p-10 rounded-[24px] bg-white">
                <form class="component-form" method="POST" action="{{ route('profile.edit.admin', ['username' => $username ]) }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Foto Profil -->
                    <div class="mb-5 text-center">
                        <label for="profile_image" class="mb-3 block text-base poppins-semibold text-[#07074D]">
                            Profile Picture
                        </label>
                        <div class="relative">
                            <input type="file" name="profile_image" id="profile_image" accept="image/*" class="hidden" onchange="previewImage(event)" />
                            <label for="profile_image" class="cursor-pointer">
                                <img id="profile_image_preview" 
                                src="{{ Auth::check() && Auth::user()->profile ? asset('admin/profile/' . Auth::user()->profile) : asset('admin/profile/default.jpg') }}" 
                                alt="Profile Picture" 
                                class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E67E4D]" />                           
                            </label>                                                     
                        </div>
                    </div>
    
                    <div class="mb-5">
                        <label for="name" class="mb-3 block text-base poppins-semibold text-[#07074D]">
                            Username
                        </label>
                        <input type="text" name="name" id="name" value="{{$username}}" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base poppins-semibold text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="phone" class="mb-3 block text-base poppins-semibold text-[#07074D]">
                            Phone Number
                        </label>
                        <input type="text" value="{{Auth::user()->number_telephone}}" required name="phone" id="phone" placeholder="Enter your phone number"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base poppins-semibold text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base poppins-semibold text-[#07074D]">
                            Email Address
                        </label>
                        <input type="email" name="email" value="{{Auth::user()->email}}" required id="email" placeholder="Enter your email"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base poppins-semibold text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 ">
                            <div class="mb-5">
                                <label for="password" class="mb-3 block text-base poppins-semibold text-[#07074D]">
                                    New Password
                                </label>
                                <input type="password" name="password" id="password" placeholder="New Password"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base poppins-semibold text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            
                            <div class="mb-5">
                                <label for="password_confirmation" class="mb-3 block text-base poppins-semibold text-[#07074D]">
                                    Confirm New Password
                                </label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base poppins-semibold text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            
                        </div>
                    </div>
                    <div>
                        <button
                            class="hover:shadow-form w-full rounded-md bg-[#B61F2D] hover:bg-[#840F1AFF] transition-all py-3 px-8 text-center text-base font-semibold text-white poppins-semibold outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <!-- JavaScript untuk Preview Gambar -->
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            
            reader.onload = function() {
                const preview = document.getElementById('profile_image_preview');
                preview.src = reader.result;
            }
            
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    
</x-admin.layout.admin>