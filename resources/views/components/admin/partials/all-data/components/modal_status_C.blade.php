<div class="relative modal-status z-10" x-data="{ isModalOpen: true }" x-show="isModalOpen" x-cloak>
  <div class="fixed inset-0 bg-gray-500/75 transition-opacity ease-out duration-300" aria-hidden="true"></div>
  <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all w-full sm:my-8 sm:w-full sm:max-w-lg">
              @if ($isSubmitted)
                  <!-- Success Icon -->
                  <div class="flex items-center justify-center p-6">
                      <svg class="w-16 h-16 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                          <path fill-rule="evenodd" d="M2.25 12a9.75 9.75 0 1119.5 0 9.75 9.75 0 01-19.5 0zm15.6-3.6a.75.75 0 10-1.05-1.05L9.75 14.4 6.75 11.4a.75.75 0 00-1.05 1.05l3.5 3.5a.75.75 0 001.05 0l6.75-6.75z" clip-rule="evenodd"/>
                      </svg>
                  </div>
                  <div class="text-center py-4">
                      <p class="text-lg font-semibold text-gray-800">Status submitted successfully!</p>
                  </div>
              @else
                  <!-- Form Input -->
                  <form wire:submit.prevent="submit" class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                      <div class="sm:flex sm:items-start">
                          <div class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-orange-100 sm:mx-0 sm:size-10">
                              <svg class="size-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6m9-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                          </div>
                          <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                              <h3 class="text-base font-semibold text-gray-900">Form Input Status</h3>
                              <div class="mt-2">
                                  <p class="text-sm text-gray-500">Please fill out the form below to continue.</p>
                              </div>
                          </div>
                      </div>
                      <div class="mt-4">
                          <label for="name" class="block text-sm font-medium text-gray-700">Name Status</label>
                          <input type="text" wire:model="name" id="name" class="mt-3 block w-full rounded-[10px] border-2 border-gray-500 h-10 px-5 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm" required>
                          @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                      </div>
                  </form>
                  <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                      <button type="submit" wire:click="submit" class="inline-flex w-full justify-center rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 sm:ml-3 sm:w-auto">Submit</button>
                      <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" x-on:click="isModalOpen=false">Cancel</button>
                  </div>
              @endif
          </div>
      </div>
  </div>
</div>
