<div class="w-screen h-screen flex items-center justify-center">
    <div id="profile" class="flex items-center justify-center bg-white rounded p-5">
        <form wire:submit.prevent="submit">
            {{ $this->form }}
        
            <button type="submit" class="w-full bg-blue-500 mt-3 py-2 rounded text-white">
                Submit
            </button>
        </form>
    </div>
    <!-- Pin to top right corner -->
    <div class="absolute top-0 right-0 h-12 w-18 p-4" style="position: fixed;">
        <button class="js-change-theme focus:outline-none">🌙</button>
      </div>
</div>
