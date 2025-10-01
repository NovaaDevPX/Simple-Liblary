<x-guest-layout>
  <div class="relative min-h-screen py-12 bg-bg">
    <!-- Notifikasi -->
    @if (session('success'))
      <div id="toast-success"
        class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-green-700 bg-green-100 rounded-lg shadow-lg top-5 right-5 animate-slide-in transition-3s">
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
        class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-red-700 bg-red-100 rounded-lg shadow-lg top-5 right-5 animate-slide-in transition-3s">
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

    <div class="max-w-2xl p-8 mx-auto bg-white border border-gray-100 shadow-lg rounded-2xl">
      <!-- Heading -->
      <h1 class="mb-6 text-3xl font-bold text-accent">Add New Book</h1>

      <!-- Form -->
      <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
        @csrf
        @method('POST')

        <!-- Title -->
        <div>
          <label for="title" class="block mb-1 text-sm font-medium text-text">Title</label>
          <input type="text" name="title" id="title"
            class="w-full border border-gray-200 outline-none rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-3s"
            placeholder="Enter book title" required>
        </div>

        <!-- Author -->
        <div>
          <label for="author" class="block mb-1 text-sm font-medium text-text">Author</label>
          <input type="text" name="author" id="author"
            class="w-full border border-gray-200 outline-none rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-3s"
            placeholder="Enter author name" required>
        </div>

        <!-- Year -->
        <div>
          <label for="year" class="block mb-1 text-sm font-medium text-text">Year</label>
          <input type="number" name="year" id="year"
            class="w-full border border-gray-200 outline-none rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-3s"
            placeholder="e.g. 2025">
        </div>

        <!-- Buttons -->
        <div class="flex items-center justify-end gap-3">
          <a href="{{ route('index') }}"
            class="px-4 py-2 bg-gray-200 rounded-lg text-text hover:bg-gray-300 transition-3s">
            Cancel
          </a>
          <button type="submit"
            class="px-5 py-2 font-medium text-white rounded-lg shadow bg-accent hover:bg-accent-hover transition-3s">
            Save Book
          </button>
        </div>
      </form>
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

  <!-- Auto-hide dengan animasi keluar -->
  <script>
    setTimeout(() => {
      document.querySelectorAll('#toast-success, #toast-error').forEach(el => {
        el.classList.remove('animate-slide-in');
        el.classList.add('animate-slide-out');
        el.addEventListener('animationend', () => el.remove());
      });
    }, 4000);
  </script>
</x-guest-layout>
