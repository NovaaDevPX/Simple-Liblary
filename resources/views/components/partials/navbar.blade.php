<header class="sticky top-0 z-50 bg-white shadow-sm">
  <div class="container flex justify-between px-4 py-5 mx-auto">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <a class="flex items-end gap-3">
        <div class="w-[35px] h-[35px]">
          <img src="{{ asset('assets/logos/book.png') }}" alt="" class="w-full h-full">
        </div>
        <div class="text-2xl font-bold text-accent">Liblary</div>
      </a>
    </div>

    <div class="">
      <a class="px-8 py-3 text-white rounded bg-accent hover:bg-accent-hover transition-3s"
        href="{{ route('books.create') }}">Add
        Book</a>
    </div>
  </div>
</header>
