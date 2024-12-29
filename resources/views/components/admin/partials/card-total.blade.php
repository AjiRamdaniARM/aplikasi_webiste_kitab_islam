<div class="flex lg:flex-row 2xl:flex-row sm:flex-col md:flex-col flex-col gap-10">
    <div class="card-component bg-white lg:w-64 rounded-[24px] px-7 py-5 flex gap-3">
        <div class="icon">
            <img src="{{ asset('admin/img/Group 50.svg')}}" alt="icon">
        </div>
        <div class="component-content">
            <h1 class="text-[#848996] poppins-semibold">Total Kitabs</h1>
            <h2 class="text-black poppins-semibold text-2xl">{{$count_kitabs}} Data</h2>
        </div>
    </div>

    <div class="card-component bg-white lg:w-64 rounded-[24px] px-7 py-5 flex gap-3">
        <div class="icon">
            <img src="{{ asset('admin/img/Group 50.svg')}}" alt="icon">
        </div>
        <div class="component-content">
            <h1 class="text-[#848996] poppins-semibold">Total Count</h1>
            <h2 class="text-black poppins-semibold text-2xl">200 Data</h2>
        </div>
    </div>

</div>