<div class="component-alert-container alert-{{ $type }}">
    <div class="px-2 py-3 bg-red-800 items-center text-red-100 leading-none lg:rounded-[16px] rounded-[16px] w-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">{{ $type }}</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
</div>