@extends('app')

@section('title', 'Profil Kami')

@section('content')
    <section class="bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="p-10">
                <div class="flex flex-col gap-6">
                    <div class="space-y-3">
                        <span class="inline-block rounded-full bg-green-100 text-green-700 px-4 py-1 text-sm font-semibold">Tentang Donasiku</span>
                        <h1 class="text-4xl font-bold text-gray-900">Profil Organisasi</h1>
                        <p class="text-gray-600 leading-relaxed">
                            Donasiku adalah platform donasi yang memudahkan masyarakat untuk berbagi kebaikan. Kami fokus pada transparansi, dampak sosial, dan kolaborasi untuk menjangkau lebih banyak yang membutuhkan.
                        </p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-6">
                            <p class="text-sm text-gray-500">Tahun Berdiri</p>
                            <p class="mt-3 text-3xl font-bold text-gray-900">2023</p>
                        </div>
                        <div class="rounded-3xl border border-gray-200 bg-gray-50 p-6">
                            <p class="text-sm text-gray-500">Proyek Selesai</p>
                            <p class="mt-3 text-3xl font-bold text-gray-900">128+</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900">Misi Kami</h2>
                            <p class="text-gray-600">Mempercepat bantuan ke masyarakat terdampak dengan proses donasi yang aman, cepat, dan mudah diakses.</p>
                        </div>

                        <div>
                            <h2 class="text-xl font-semibold text-gray-900">Nilai Kami</h2>
                            <p class="text-gray-600">Kepercayaan, empati, dan aksi nyata dalam setiap program kemanusiaan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden bg-gradient-to-br from-emerald-500 via-green-500 to-teal-500 p-10 text-white">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_top_right,_rgba(255,255,255,0.5),_transparent_40%)]"></div>
                <div class="relative flex flex-col h-full justify-between">
                    <div class="space-y-4">
                        <div class="inline-flex items-center gap-3 rounded-full bg-white/15 px-4 py-2 text-sm font-semibold text-white shadow-sm">
                            <span class="h-2.5 w-2.5 rounded-full bg-white shadow"></span>
                            Komunitas Aktif
                        </div>
                        <div class="rounded-3xl border border-white/20 bg-white/10 p-6">
                            <p class="text-sm uppercase tracking-[0.24em] text-white/75">Fokus Program</p>
                            <h3 class="mt-4 text-3xl font-bold">Pendidikan & Kesehatan</h3>
                            <p class="mt-3 text-sm leading-relaxed text-white/80">
                                Mendukung keluarga prasejahtera lewat beasiswa, layanan kesehatan gratis, dan bantuan sembako.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="rounded-3xl bg-white/10 p-6">
                            <p class="text-xs uppercase tracking-[0.24em] text-white/70">Relawan</p>
                            <p class="mt-3 text-3xl font-bold">254</p>
                        </div>
                        <div class="rounded-3xl bg-white/10 p-6">
                            <p class="text-xs uppercase tracking-[0.24em] text-white/70">Donatur</p>
                            <p class="mt-3 text-3xl font-bold">3.8K</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection