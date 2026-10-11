@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')
    <h1 class="text-3xl font-bold text-slate-900 mb-6">Tambah Post</h1>

    <x-card>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block font-semibold mb-2">Judul</label>
                <input type="text" name="title" id="title"
                       value="{{ old('title') }}"
                       class="w-full border rounded-lg px-4 py-2 @error('title') border-red-500 @enderror">
                @error('title')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body" class="block font-semibold mb-2">Isi Post</label>
                <textarea name="body" id="body" rows="6"
                          class="w-full border rounded-lg px-4 py-2 @error('body') border-red-500 @enderror">{{ old('body') }}</textarea>
                @error('body')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">
                    Simpan
                </button>
                <a href="{{ route('posts.index') }}"
                   class="bg-slate-200 text-slate-700 px-6 py-2 rounded-lg hover:bg-slate-300">
                    Batal
                </a>
            </div>
        </form>
    </x-card>
@endsection