@extends('app')

@section('content')

<form action="/campaigns" method="POST" class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-6">
    @csrf

    <div class="space-y-2">
        <h1 class="text-xl font-bold border-b-2 border-green-500 pb-2">Informasi Kampanye</h1>
        <input type="text" name="title" placeholder="Judul Kampanye" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
        <textarea name="description" placeholder="Deskripsi Lengkap" class="border p-2 w-full rounded h-32 focus:ring-2 focus:ring-green-400 outline-none" required></textarea>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="text-sm text-gray-600">Target Dana (Rp)</label>
            <input type="number" name="target_donation" placeholder="Contoh: 10000000" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
        </div>
        <div>
            <label class="text-sm text-gray-600">Dana Terkumpul (Rp)</label>
            <input type="number" name="collected_donation" placeholder="Contoh: 1000000" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
        </div>
    </div>

    <div>
        <label class="text-sm text-gray-600">Batas Waktu</label>
        <input type="date" name="deadline" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
    </div>

    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600 transition">Simpan Kampanye</button>
</form>

@endsection