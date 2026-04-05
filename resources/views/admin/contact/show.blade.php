@extends('layouts.app')
@section('title', 'Detail Pesan - Admin')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-12">
    <div class="flex justify-between items-start mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Detail Pesan</h1>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold
                @if($contactMessage->status == 'pending') bg-yellow-100 text-yellow-800 @endif
                @if($contactMessage->status == 'read') bg-blue-100 text-blue-800 @endif
                @if($contactMessage->status == 'replied') bg-green-100 text-green-800 @endif">
                {{ ucfirst($contactMessage->status) }}
            </span>
        </div>
        <div class="space-x-3">
            <a href="{{ route('admin.contacts.index') }}"
               class="bg-gray-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-gray-600">
                ← Kembali
            </a>
        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
        <div class="p-8 border-b border-gray-200">
            <div class="flex flex-wrap items-start gap-6">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold text-gray-900 mb-1">{{ $contactMessage->name }}</h2>
                    <p class="text-lg text-gray-600 mb-4">{{ $contactMessage->email }}</p>
                    @if($contactMessage->subject)
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl text-sm font-semibold mb-4">
                        {{ $contactMessage->subject }}
                    </div>
                    @endif
                    <p class="text-sm text-gray-500">
                        <i class="fas fa-clock mr-2"></i>
                        {{ $contactMessage->created_at->format('d F Y, H:i') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="p-8">
            <div class="prose prose-lg max-w-none">
                <h3 class="text-xl font-bold text-gray-800 mb-4 mb-6">Pesan:</h3>
                <div class="bg-gray-50 p-6 rounded-2xl border-l-4 border-amber-400">
                    <p class="text-gray-800 leading-relaxed whitespace-pre-wrap">{{ $contactMessage->message }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 bg-white p-6 rounded-2xl shadow-lg">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h3>
        <div class="flex flex-wrap gap-3">
            <form action="{{ route('admin.contacts.destroy', $contactMessage) }}" method="POST" class="inline"
                  onsubmit="return confirm('Hapus pesan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-6 py-3 bg-red-600 text-white rounded-xl font-semibold hover:bg-red-700 transition-all duration-300">
                    <i class="fas fa-trash mr-2"></i>Hapus Pesan
                </button>
            </form>
            <a href="mailto:{{ $contactMessage->email }}?subject=Re: {{ $contactMessage->subject ?? 'Pesan Cafe Aroma' }}&body=Terima kasih atas pesan Anda..."
               class="px-6 py-3 bg-green-600 text-white rounded-xl font-semibold hover:bg-green-700 transition-all duration-300">
                <i class="fas fa-reply mr-2"></i>Balas Email
            </a>
        </div>
    </div>
</div>
@endsection
