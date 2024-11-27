<div class="mb-4">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ ucfirst($name) }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 {{ $class }}">
</div>
