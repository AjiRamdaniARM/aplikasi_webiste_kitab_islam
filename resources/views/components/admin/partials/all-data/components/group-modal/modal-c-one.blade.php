<div id="modalComponent1" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 max-h-[90vh] overflow-hidden">
      <!-- Modal Header -->
      <div class="flex justify-between items-center px-4 py-2 border-b">
        <h2 class="text-xl font-semibold text-gray-800">Deskripsi dengan Scroll</h2>
        <button
          class="text-gray-400 hover:text-red-500"
          onclick="toggleModalComponent1()">
          ✕
        </button>
      </div>
      <!-- Modal Content -->
      <div class="p-4 overflow-y-auto max-h-[60vh] scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
        <p class="text-gray-700 leading-relaxed">
          @if (!empty($contentKitab->latinArabs) && !empty($contentKitab->latinArabs->content_latin))
            {!! $contentKitab->latinArabs->content_latin !!}
          @else
            <h1>Data Tidak Ada</h1>
          @endif      
        </p>
      </div>
      <!-- Modal Footer -->
      <div class="flex justify-end p-4 border-t">
        <button
          class="bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded hover:bg-gray-300"
          onclick="toggleModalComponent1()">
          Close
        </button>
      </div>
    </div>
  </div>
