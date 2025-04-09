<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">My Tasks</h1>
            <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">New Task</a>
        </div>

        <div class="space-y-4">
            @foreach ($tasks as $task)
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">{{ $task->title }}</h3>
                    <p class="text-gray-600 mt-2">{{ $task->description }}</p>
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500">Edit</a>
                        <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>