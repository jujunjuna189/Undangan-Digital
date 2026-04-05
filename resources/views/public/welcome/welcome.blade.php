@extends('components.public.layouts.app', ['nav_bar' => true])

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen lg:min-h-[90vh] flex items-center overflow-hidden bg-[#FAF9F6]">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b md:bg-gradient-to-r from-[#FAF9F6] via-[#FAF9F6]/80 md:via-transparent to-transparent z-10"></div>
        <img src="{{ asset('assets/image/hero.png') }}" alt="Luxury Wedding Invitation" class="absolute right-0 top-0 h-full w-full object-cover grayscale-[0.2] contrast-[1.1] opacity-50 md:opacity-100">
    </div>

    <div class="container mx-auto px-6 lg:px-20 relative z-20">
        <div class="max-w-2xl animate-fadeIn text-center md:text-left pt-20 md:pt-0">
            <span class="inline-block px-4 py-2 rounded-full bg-rose-50 text-rose-500 text-[10px] md:text-xs font-bold uppercase tracking-[0.3em] mb-6">Est. 2026 • Premium Digital Invitation</span>
            <h1 class="font-playfair text-4xl md:text-6xl lg:text-8xl font-bold mb-6 md:mb-8 text-gray-900 leading-[1.2] md:leading-[1.1]">
                Momen Indah, <br class="hidden md:block">
                <span class="italic text-rose-500 text-3xl md:text-5xl lg:text-7xl">Abadi Selamanya.</span>
            </h1>
            <p class="text-base md:text-lg lg:text-xl mb-10 text-gray-600 leading-relaxed max-w-lg mx-auto md:mx-0">
                Hadirkan kemewahan di hari bahagia Anda dengan undangan digital yang dirancang khusus dengan estetika tingkat tinggi.
            </p>
            <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4 md:gap-6">
                <a href="#template" class="px-10 md:px-12 py-4 md:py-5 rounded-full bg-gray-900 text-white font-bold text-xs md:text-sm uppercase tracking-widest hover:bg-rose-500 transition-all duration-500 shadow-2xl shadow-gray-400">
                    Mulai Sekarang
                </a>
                <a href="#harga" class="px-10 md:px-12 py-4 md:py-5 rounded-full bg-white/80 backdrop-blur-md border border-gray-100 text-gray-900 font-bold text-xs md:text-sm uppercase tracking-widest hover:bg-gray-50 transition-all duration-500">
                    Lihat Paket
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Stats / Social Proof -->
    <div class="absolute bottom-10 left-0 right-0 z-20">
        <div class="container mx-auto px-6 md:px-20">
            <div class="flex flex-wrap md:flex-nowrap gap-8 md:gap-20 justify-center md:justify-start lg:justify-start">
                <div class="text-center md:text-left">
                    <p class="text-2xl md:text-3xl font-playfair font-bold text-gray-900">500+</p>
                    <p class="text-[9px] md:text-xs uppercase tracking-widest text-gray-400 font-bold">Pasangan Bahagia</p>
                </div>
                <div class="text-center md:text-left">
                    <p class="text-2xl md:text-3xl font-playfair font-bold text-gray-900">24/7</p>
                    <p class="text-[9px] md:text-xs uppercase tracking-widest text-gray-400 font-bold">Layanan Dukungan</p>
                </div>
                <div class="text-center md:text-left">
                    <p class="text-2xl md:text-3xl font-playfair font-bold text-gray-900">4.9</p>
                    <p class="text-[9px] md:text-xs uppercase tracking-widest text-gray-400 font-bold">Rating Pelanggan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section - Boutique Style -->
<section class="py-32 bg-white relative">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="text-center lg:text-left">
                <span class="text-rose-500 font-bold uppercase tracking-[0.4em] text-[10px] mb-4 block">Artisanal Craftsmanship</span>
                <h2 class="font-playfair text-3xl md:text-5xl font-bold mb-8 text-gray-900 leading-tight">
                    Setiap Detail Adalah <br class="hidden md:block"> Prioritas Kami
                </h2>
                <div class="space-y-8 md:space-y-12 mt-10 md:mt-16">
                    <div class="flex flex-col md:flex-row items-center md:items-start md:gap-8 group">
                        <div class="w-16 h-16 shrink-0 rounded-2xl bg-slate-50 flex items-center justify-center text-3xl group-hover:bg-rose-50 group-hover:text-rose-500 transition-all duration-500 mb-4 md:mb-0">✨</div>
                        <div class="text-center md:text-left">
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Desain Eksklusif</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Template yang tidak akan Anda temukan di tempat lain. Dirancang khusus untuk kesan mewah secara instan.</p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-center md:items-start md:gap-8 group">
                        <div class="w-16 h-16 shrink-0 rounded-2xl bg-slate-50 flex items-center justify-center text-3xl group-hover:bg-rose-50 group-hover:text-rose-500 transition-all duration-500 mb-4 md:mb-0">📱</div>
                        <div class="text-center md:text-left">
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Teknologi Terdepan</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Integrasi Google Maps, RSVP otomatis, dan Buku Tamu Digital yang sangat intuitif untuk semua pengunjung.</p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-center md:items-start md:gap-8 group">
                        <div class="w-16 h-16 shrink-0 rounded-2xl bg-slate-50 flex items-center justify-center text-3xl group-hover:bg-rose-50 group-hover:text-rose-500 transition-all duration-500 mb-4 md:mb-0">🌿</div>
                        <div class="text-center md:text-left">
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Eko-Kemewahan</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Rayakan hari spesial Anda sambil tetap peduli pada alam. Tanpa kertas, tanpa limbah, penuh makna.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-[4/5] bg-gray-100 rounded-[3rem] overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/image/detail.png') }}" alt="Exquisite Details" class="w-full h-full object-cover hover:scale-110 transition duration-1000">
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-3xl shadow-2xl max-w-xs animate-bounce-slow">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-500">✓</div>
                        <p class="font-bold text-gray-900">Detail Sempurna</p>
                    </div>
                    <p class="text-sm text-gray-500 italic">"Kami sangat memperhatikan setiap pixel untuk hasil yang elegan."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Template Showcase section (Dynamic from DB) -->
<section id="template" class="py-32 bg-[#FAF9F6]">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center mb-16 md:mb-24">
            <span class="text-rose-500 font-bold uppercase tracking-[0.4em] text-[10px] mb-4 block">Our Designs</span>
            <h2 class="font-playfair text-3xl md:text-5xl font-bold text-gray-900 mb-6">Pilihan Template Favorit</h2>
            <p class="text-gray-500 text-sm md:text-base max-w-lg mx-auto">Tentukan tema yang paling sesuai dengan kepribadian Anda dan pasangan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($templates as $template)
            <div class="group bg-white p-4 rounded-[2.5rem] border border-gray-100 hover:shadow-2xl transition-all duration-700">
                <div class="aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-50 relative mb-6">
                    @if($template->preview_image)
                        <img src="{{ asset($template->preview_image) }}" alt="{{ $template->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-4xl opacity-20">🎨</div>
                    @endif
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-500 flex items-center justify-center">
                        <a href="/{{ $template->slug }}" target="_blank" class="px-8 py-3 bg-white text-gray-900 rounded-full font-bold text-xs uppercase tracking-widest opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">Preview</a>
                    </div>
                </div>
                <div class="px-2">
                    <h3 class="font-bold text-gray-900 text-lg group-hover:text-rose-500 transition">{{ $template->name }}</h3>
                    <p class="text-sm text-gray-400 mt-1 uppercase tracking-widest font-bold">Premium Design</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pricing Section (Dynamic from DB) -->
<section id="harga" class="py-32 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center mb-16 md:mb-24">
            <span class="text-rose-500 font-bold uppercase tracking-[0.4em] text-[10px] mb-4 block">Fair Pricing</span>
            <h2 class="font-playfair text-3xl md:text-5xl font-bold text-gray-900 mb-6">Pilih Paket Layanan</h2>
            <p class="text-gray-500 text-sm md:text-base max-w-lg mx-auto">Dirancang untuk memenuhi kebutuhan setiap pasangan di berbagai skala acara.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 items-center max-w-6xl mx-auto">
            @foreach($packages as $package)
            <div class="{{ $loop->index == 1 ? 'p-10 md:p-12 rounded-[2.5rem] md:rounded-[3.5rem] bg-gray-900 text-white shadow-2xl md:scale-110 relative overflow-hidden group' : 'p-8 md:p-10 rounded-[2.5rem] md:rounded-[3rem] border border-gray-100 bg-[#FAF9F6] transition-all duration-500 hover:shadow-2xl group' }}">
                @if($loop->index == 1)
                    <div class="absolute top-0 right-0 p-8 h-full flex flex-col justify-end pointer-events-none opacity-10">
                        <p class="text-7xl md:text-9xl font-black italic">TOP</p>
                    </div>
                @endif
                <div class="relative z-10">
                    <p class="text-4xl mb-8">{{ $loop->index == 0 ? '🌸' : ($loop->index == 1 ? '💎' : '👑') }}</p>
                    <h3 class="font-playfair text-2xl font-bold mb-2 {{ $loop->index == 1 ? 'text-white' : 'text-gray-900' }}">{{ $package->name }}</h3>
                    <div class="flex items-baseline gap-2 mb-8">
                        <span class="text-4xl font-bold {{ $loop->index == 1 ? 'text-white' : 'text-gray-900' }}">{{ number_format($package->price / 1000, 0) }}K</span>
                        <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">/ Project</span>
                    </div>
                    <ul class="space-y-4 mb-10">
                        @if($package->features)
                            @foreach($package->features as $feature)
                            <li class="flex items-center text-sm gap-3 {{ $loop->parent->index == 1 ? 'text-gray-100' : 'text-gray-600' }}">
                                <span class="{{ $loop->parent->index == 1 ? 'text-rose-400' : 'text-emerald-500' }} font-bold">✓</span> {{ $feature }}
                            </li>
                            @endforeach
                        @endif
                    </ul>
                    <button onclick="openOrderModal('{{ $package->name }}')" class="w-full py-5 rounded-2xl border-2 font-bold text-xs uppercase tracking-widest transition-all duration-500 {{ $loop->index == 1 ? 'bg-rose-500 border-rose-500 text-white hover:bg-rose-600' : 'border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white' }}">
                        {{ $loop->index == 1 ? 'Ambil Paket Ini' : 'Pilih Paket' }}
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="bg-rose-50 rounded-[2.5rem] md:rounded-[4rem] p-10 md:p-24 text-center overflow-hidden relative">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-rose-100 rounded-full blur-3xl opacity-50"></div>
            <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-rose-100 rounded-full blur-3xl opacity-50"></div>
            
            <div class="relative z-10">
                <h2 class="font-playfair text-3xl md:text-6xl font-bold text-gray-900 mb-8 max-w-3xl mx-auto leading-tight">
                    Siap Memulai Perjalanan <br class="hidden md:block"> Indah Bersama Kami?
                </h2>
                <div class="flex flex-col sm:flex-row justify-center gap-4 md:gap-6">
                    <a href="#" class="px-10 md:px-12 py-4 md:py-5 rounded-full bg-gray-900 text-white font-bold text-xs md:text-sm uppercase tracking-widest hover:bg-rose-500 transition-all duration-500 shadow-2xl shadow-gray-400">
                        Konsultasi Gratis
                    </a>
                    <a href="https://wa.me/yournumber" class="px-10 md:px-12 py-4 md:py-5 rounded-full bg-white text-rose-500 font-bold text-xs md:text-sm uppercase tracking-widest hover:bg-rose-50 transition-all duration-500 border border-rose-100">
                        WhatsApp Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Order Request Modal -->
<div id="orderModal" class="fixed inset-0 z-[100] hidden overflow-y-auto px-6 py-10">
    <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-md transition-opacity" onclick="closeOrderModal()"></div>
    
    <div class="relative w-full max-w-xl mx-auto bg-white rounded-[3rem] shadow-2xl overflow-hidden transform transition-all">
        <div class="p-8 md:p-12">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <span class="text-rose-500 font-bold uppercase tracking-[0.4em] text-[10px] mb-2 block">Request Order</span>
                    <h3 class="font-playfair text-3xl font-bold text-gray-900">Form Pemesanan</h3>
                </div>
                <button onclick="closeOrderModal()" class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:text-rose-500 transition">✕</button>
            </div>

            <form action="{{ route('order.request') }}" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="package_name" id="modal_package_name">
                
                <div class="space-y-2">
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest pl-4">Paket Dipilih</label>
                    <div id="display_package_name" class="w-full bg-rose-50 text-rose-600 font-bold rounded-2xl px-6 py-4 border border-rose-100 italic"></div>
                </div>

                <div class="space-y-2">
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest pl-4">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Masukkan nama Anda" class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest pl-4">No. WhatsApp</label>
                        <input type="text" name="phone" placeholder="Contoh: 0812345..." class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all" required>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest pl-4">Email (Opsional)</label>
                        <input type="email" name="email" placeholder="email@contoh.com" class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest pl-4">Catatan Tambahan</label>
                    <textarea name="notes" rows="3" placeholder="Tuliskan pesan atau permintaan khusus..." class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:ring-2 focus:ring-rose-500 focus:outline-none transition-all"></textarea>
                </div>

                <button type="submit" class="w-full bg-gray-900 text-white py-5 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-rose-500 transition-all duration-500 shadow-xl shadow-gray-200">
                    Kirim Pesanan Sekarang
                </button>
            </form>
        </div>
    </div>
</div>

@if(session('success'))
<script>
    window.addEventListener('load', () => {
        Swal.fire({
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'Oke Dimengerti',
            confirmButtonColor: '#f43f5e',
            customClass: {
                popup: 'rounded-[3rem]',
                confirmButton: 'rounded-2xl px-8 py-4 font-bold uppercase tracking-widest text-xs'
            }
        });
    });
</script>
@endif

@endsection

@push('styles')
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
        animation: fadeInUp 1.2s ease-out forwards;
    }
    .animate-bounce-slow {
        animation: bounce 6s infinite ease-in-out;
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
</style>

@push('scripts')
<script>
    function openOrderModal(packageName) {
        document.getElementById('modal_package_name').value = packageName;
        document.getElementById('display_package_name').innerText = packageName;
        document.getElementById('orderModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeOrderModal() {
        document.getElementById('orderModal').classList.add('hidden');
        document.body.style.overflow = '';
    }
</script>
@endpush