@extends('app')

@section('title', 'Kontak Kami')

@section('content')
    <section class="bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="grid gap-8 md:grid-cols-2">
            <div class="bg-gradient-to-br from-green-500 via-emerald-500 to-teal-500 p-10 text-white">
                <h1 class="text-4xl font-bold mb-4">Kontak Kami</h1>
                <p class="max-w-xl text-gray-100 leading-relaxed mb-8">
                    Butuh bantuan atau ingin berkolaborasi? Tim Donasiku siap membantu. Hubungi kami melalui salah satu saluran di bawah ini.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="rounded-full bg-white/15 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 4H8m8-8H8m-2 8h.01M6 6h.01" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold">Alamat</h2>
                            <p class="text-sm text-gray-100/90">Jl. Sepakat 2, Kota Pontianak</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="rounded-full bg-white/15 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 01-8 0m8 0a4 4 0 01-8 0m8 0V4m0 8v8m-8-8V4m0 8v8" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold">Telepon</h2>
                            <p class="text-sm text-gray-100/90">(0561) 1234 5678</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="rounded-full bg-white/15 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 4H8m8-8H8m-2 8h.01M6 6h.01" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold">Email</h2>
                            <p class="text-sm text-gray-100/90">halo@donasiku.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-8 md:p-12">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Kirim Pesan</h2>
                    <p class="text-gray-600">Isi formulir berikut dan kami akan menghubungi Anda secepatnya.</p>
                </div>

                <form class="space-y-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input id="name" type="text" placeholder="Masukkan nama Anda" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 focus:border-green-400 focus:outline-none focus:ring-2 focus:ring-green-100" />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input id="email" type="email" placeholder="contoh@gmail.com" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 focus:border-green-400 focus:outline-none focus:ring-2 focus:ring-green-100" />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                        <textarea id="message" rows="5" placeholder="Tulis pesan Anda di sini..." class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 focus:border-green-400 focus:outline-none focus:ring-2 focus:ring-green-100"></textarea>
                    </div>

                    <button type="submit" class="w-full rounded-2xl bg-green-600 px-6 py-3 text-white font-semibold shadow-sm transition hover:bg-green-500">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
