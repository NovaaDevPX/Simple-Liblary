<x-guest-layout>
  <div class="relative min-h-screen py-12 bg-bg">
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

    <div class="max-w-2xl p-8 mx-auto bg-white border border-gray-100 shadow-lg rounded-2xl">
      <!-- Heading -->
      <h1 class="mb-6 text-3xl font-bold text-accent">Book Detail</h1>

      <!-- Detail -->
      <div class="space-y-4">
        <!-- Title -->
        <div>
          <h2 class="text-sm font-medium text-gray-500">Title</h2>
          <p class="text-lg font-semibold text-text">{{ $book->title }}</p>
        </div>

        <!-- Author -->
        <div>
          <h2 class="text-sm font-medium text-gray-500">Author</h2>
          <p class="text-lg font-semibold text-text">{{ $book->author }}</p>
        </div>

        <!-- Year -->
        <div>
          <h2 class="text-sm font-medium text-gray-500">Year</h2>
          <p class="text-lg font-semibold text-text">{{ $book->year ?? '-' }}</p>
        </div>
      </div>

      <!-- Buttons -->
      <div class="flex items-center justify-end gap-3 mt-8">
        <a href="{{ route('index') }}"
          class="px-4 py-2 bg-gray-200 rounded-lg text-text hover:bg-gray-300 transition-3s">
          Back
        </a>
        <a href="{{ route('books.edit', $book->id) }}"
          class="px-5 py-2 font-medium text-white rounded-lg shadow bg-accent hover:bg-accent-hover transition-3s">
          Edit Book
        </a>
        <!-- Delete -->
        <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirmDelete(event)"
          class="inline">
          @csrf
          @method('DELETE')
          <button type="submit"
            class="px-5 py-2 font-medium text-white bg-red-500 rounded-lg shadow hover:bg-red-600 transition-3s">
            Delete
          </button>
        </form>
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
