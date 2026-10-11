@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <h1 class="text-3xl font-bold text-slate-900 mb-6">Daftar Post</h1>

    @if ($posts->isEmpty())
        <x-alert type="info">Belum ada post. Klik tombol "Tambah Post" untuk mulai.</x-alert>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <x-card :title="$post->title">
                    <p class="text-sm text-slate-500 mb-2">
                        {{ $post->created_at->format('d M Y, H:i') }}
                    </p>
                    <p class="text-slate-700 mb-4">
                        {{ Str::limit($post->body, 120) }}
                    </p>
                    <div class="flex gap-2">
                        <a href="{{ route('posts.show', $post) }}"
                           class="text-sm text-blue-600 hover:underline">Lihat</a>
                        <a href="{{ route('posts.edit', $post) }}"
                           class="text-sm text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST"
                              onsubmit="return confirm('Yakin hapus post ini?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-red-600 hover:underline">
                                Hapus
                            </button>
                        </form>
                    </div>
                </x-card>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    @endif
@endsection