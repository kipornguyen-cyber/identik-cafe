@extends('layouts.app')
@section('title', 'Admin - Pesan Kontak')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Pesan Kontak</h1>
            <p class="text-gray-600 mt-2">{{ $messages->total() }} pesan diterima</p>
        </div>
        <a href="{{ route('home') }}" class="bg-gray-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-gray-600 transition-all duration-300">
            ← Kembali ke Website
        </a>
    </div>

    @if($messages->count() > 0)
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Subjek</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($messages as $message)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $message->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $message->email }}</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold
                                @if($message->status == 'pending') bg-yellow-100 text-yellow-800 @endif
                                @if($message->status == 'read') bg-blue-100 text-blue-800 @endif
                                @if($message->status == 'replied') bg-green-100 text-green-800 @endif">
                       {{ ucfirst($message->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $message->created_at->format('d M Y H:i') }}</td>
                        <td class="px-6 py-4 space-x-2">
                            <a href="{{ route('admin.contacts.show', $message) }}"
                               class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                <i class="fas fa-eye mr-1"></i> Lihat
                            </a>
                            <form action="{{ route('admin.contacts.destroy', $message) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Hapus pesan {{ $message->name }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition-colors">
                                    <i class="fas fa-trash mr-1"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-8">
        {{ $messages->links() }}
    </div>
    @else
    <div class="text-center py-20">
        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-inbox text-3xl text-gray-400"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Belum Ada Pesan</h3>
        <p class="text-gray-600 mb-8">Pesan kontak akan muncul di sini setelah pelanggan mengirimkan pesan.</p>
        <a href="{{ route('home') }}" class="bg-amber-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-amber-700">
            ← Kembali ke Website
        </a>
    </div>
    @endif
</div>
@endsection
