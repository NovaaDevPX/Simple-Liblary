<x-guest-layout>
  <div class="min-h-screen bg-[#F9FAFB] py-12">
    <!-- Notifikasi -->
    @if (session('success'))
      <div id="toast-success"
        class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-green-700 bg-green-100 rounded-lg shadow-lg top-5 right-5 animate-slide-in">
        <svg class="w-5 h-5 mr-2 text-green-600" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 111.414-1.414L8.414 12.172l7.293-7.293a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="text-sm font-medium">{{ session('success') }}</span>
      </div>
    @endif

    @if ($errors->any())
      <div id="toast-error"
        class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-red-700 bg-red-100 rounded-lg shadow-lg top-5 right-5 animate-slide-in">
        <svg class="w-5 h-5 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.75-11.75a.75.75 0 011.5 0v4.5a.75.75 0 01-1.5 0v-4.5zm.75 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
            clip-rule="evenodd"></path>
        </svg>
        <div>
          <p class="text-sm font-medium">Terjadi kesalahan:</p>
          <ul class="mt-1 text-xs list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif

    <div class="px-6 mx-auto max-w-7xl">
      <!-- Heading -->
      <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold text-[#111827]">📚 Book Collection</h1>
        <p class="mt-3 text-lg text-gray-600">Discover books and authors from our library</p>
      </div>

      <!-- Books Grid -->
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse($books as $book)
          <div class="p-6 transition bg-white border border-gray-100 shadow-md rounded-2xl hover:shadow-lg">
            <!-- Title -->
            <h2 class="text-2xl font-semibold text-[#2563EB] mb-2">
              {{ $book->title }}
            </h2>
            <!-- Author -->
            <p class="text-[#111827] text-base mb-1">
              ✍️ <span class="font-medium">{{ $book->author }}</span>
            </p>
            <!-- Year -->
            @if ($book->year)
              <p class="text-sm text-gray-500">📅 Published: {{ $book->year }}</p>
            @endif

            <!-- Action Button -->
            <div class="mt-4">
              <a href="{{ route('books.show', $book->id) }}"
                class="px-4 py-2 bg-[#6180EF] text-white font-medium rounded-lg shadow hover:bg-[#1d4ed8] transition">
                View Details
              </a>
            </div>
          </div>
        @empty
          <div class="text-center col-span-full">
            <p class="text-gray-600">No books available yet.</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>

  <!-- Animasi -->
  <style>
    @keyframes slide-in {
      from {
        transform: translateX(100%);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slide-out {
      from {
        transform: translateX(0);
        opacity: 1;
      }

      to {
        transform: translateX(100%);
        opacity: 0;
      }
    }

    .animate-slide-in {
      animation: slide-in 0.4s ease-out;
    }

    .animate-slide-out {
      animation: slide-out 0.4s ease-in forwards;
    }
  </style>

  <!-- Alert + Auto-hide Toast -->
  <script>
    function confirmDelete(e) {
      e.preventDefault();
      if (confirm("Are you sure you want to delete this book? This action cannot be undone.")) {
        e.target.submit();
      }
    }

    setTimeout(() => {
      document.querySelectorAll('#toast-success, #toast-error').forEach(el => {
        el.classList.remove('animate-slide-in');
        el.classList.add('animate-slide-out');
        el.addEventListener('animationend', () => el.remove());
      });
    }, 4000);
  </script>
</x-guest-layout>
