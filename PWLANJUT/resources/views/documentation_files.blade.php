@extends('app')

@section('title', 'Documentation')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">

    <h2 class="text-xl font-bold text-gray-800 mb-4">Upload Dokumen Baru</h2>
    <form action="/documentations" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Dokumen/Gambar</label>
            <input type="text" name="title" class="mt-1 block w-full rounded border-gray-300 p-2 border shadow-sm" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Pilih File (PDF, DOCX, PNG, JPG. Maks. 5MB)</label>
            <input type="file" 
                   name="attachment" 
                   accept=".pdf,.docx,.png,.jpg,.jpeg" 
                   class="file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 mt-1 block w-full text-sm text-gray-500 cursor-pointer" 
                   required>
        </div>
        
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-medium">
            Upload File
        </button>
    </form>

    <hr class="my-8 border-gray-200">

    <div>
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Daftar Keseluruhan File & Gambar</h3>
        
        <div class="overflow-x-auto bg-white rounded-lg border border-gray-200 shadow-sm">
            <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 font-medium">No</th>
                        <th class="px-6 py-3 font-medium">Nama Dokumen</th>
                        <th class="px-6 py-3 font-medium">Ekstensi</th>
                        <th class="px-6 py-3 font-medium">Preview / Pratinjau</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-600">
                    {{-- Menggunakan $files sesuai compact('files') dari Controller --}}
                    @forelse($files as $key => $file)
                        <tr>
                            <td class="px-6 py-4">{{ $key + 1 }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $file->title }}</td>
                            <td class="px-6 py-4 uppercase"><span class="bg-gray-100 px-2 py-1 rounded text-xs">{{ $file->file_type }}</span></td>
                            <td class="px-6 py-4">
                                {{-- Cek jenis file berdasarkan kolom file_type dari database kamu --}}
                                @if(in_array(strtolower($file->file_type), ['png', 'jpg', 'jpeg']))
                                    <div class="relative group w-20 h-20 overflow-hidden rounded border border-gray-200">
                                        <img src="{{ asset('storage/' . $file->file_path) }}" alt="{{ $file->title }}" class="w-full h-full object-cover">
                                        <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white text-xs">
                                            Lihat Full
                                        </a>
                                    </div>
                                @else
                                    <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center gap-1">
                                        @if($file->file_type == 'pdf')
                                            📄 Buka PDF
                                        @else
                                            📥 Download DOCX
                                        @endif
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-gray-400 italic">
                                Belum ada dokumen atau gambar yang masuk ke database.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection