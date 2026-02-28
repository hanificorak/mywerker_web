@extends('layouts.app')

@section('content')

{{-- Google Fonts --}}

<style>
  
    :root {
        --accent: #E8621A;
        --accent-light: #F97316;
        --surface: #FAFAF8;
        --border: #E4E2DD;
        --text: #1A1917;
        --muted: #6B6860;
    }

    .input-field {
        width: 100%;
        background: #FAFAF8;
        border: 1.5px solid var(--border);
        border-radius: 8px;
        padding: 12px 16px;
        font-size: 14px;
        
        color: var(--text);
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        box-sizing: border-box;
    }

    .input-field::placeholder { color: #B0ADA7; }

    .input-field:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(232,98,26,0.1);
        background: #fff;
    }

    textarea.input-field {
        resize: vertical;
        min-height: 140px;
        line-height: 1.7;
    }

    .info-card {
        border: 1.5px solid var(--border);
        border-radius: 12px;
        padding: 20px 22px;
        background: #fff;
        display: flex;
        align-items: center;
        gap: 16px;
        transition: border-color 0.2s, box-shadow 0.2s;
        text-decoration: none;
    }

    .info-card:hover {
        border-color: var(--accent);
        box-shadow: 0 4px 20px rgba(232,98,26,0.07);
    }

    .icon-wrap {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: #FFF3EC;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        color: var(--accent);
    }

    .submit-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--accent);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 13px 28px;
        font-size: 14px;
        font-weight: 600;
        
        cursor: pointer;
        letter-spacing: 0.01em;
        transition: background 0.2s, box-shadow 0.2s, transform 0.15s;
    }

    .submit-btn:hover {
        background: #D0561A;
        box-shadow: 0 6px 20px rgba(232,98,26,0.32);
        transform: translateY(-1px);
    }

    .submit-btn:active { transform: translateY(0); }

    .error-msg {
        font-size: 12px;
        color: #DC2626;
        margin-top: 5px;
    }

    .success-alert {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #F0FDF4;
        border: 1px solid #BBF7D0;
        border-radius: 8px;
        padding: 13px 16px;
        font-size: 14px;
        color: #15803D;
        margin-bottom: 28px;
    }

    /* Subtle grid background on hero */
    .hero-bg {
        background-color: #1A1917;
        background-image:
            linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
        background-size: 48px 48px;
    }
</style>

<div style="background: var(--surface); min-height: 100vh;">


    {{-- ── BODY ── --}}
    <div style="max-width:1100px; margin:0 auto; padding:64px 40px 100px;">
        <div style="display:grid; grid-template-columns:340px 1fr; gap:48px; align-items:start;">

            {{-- ─── LEFT: Contact Info ─── --}}
            <div>
                <p style="font-size:11px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:var(--muted); margin:0 0 20px;">Doğrudan ulaşın</p>

                <div style="display:flex; flex-direction:column; gap:10px;">

                    {{-- Company --}}
                    <div class="info-card">
                        <div class="icon-wrap">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3H8a2 2 0 0 0-2 2v2h12V5a2 2 0 0 0-2-2z"/></svg>
                        </div>
                        <div>
                            <p style="font-size:11px; font-weight:600; letter-spacing:0.08em; text-transform:uppercase; color:var(--muted); margin:0 0 3px;">Şirket</p>
                            <span style="font-size:15px; font-weight:500; color:var(--text);">Nubify Software</span>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <a href="tel:+905426711046" class="info-card">
                        <div class="icon-wrap">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.36 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.28 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
                        </div>
                        <div>
                            <p style="font-size:11px; font-weight:600; letter-spacing:0.08em; text-transform:uppercase; color:var(--muted); margin:0 0 3px;">Telefon</p>
                            <span style="font-size:15px; font-weight:500; color:var(--text);">+90 542 671 10 46</span>
                        </div>
                    </a>

                    {{-- Email --}}
                    <a href="mailto:hanificorak@outlook.com" class="info-card">
                        <div class="icon-wrap">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <p style="font-size:11px; font-weight:600; letter-spacing:0.08em; text-transform:uppercase; color:var(--muted); margin:0 0 3px;">E-posta</p>
                            <span style="font-size:14px; font-weight:500; color:var(--text);">hanificorak@outlook.com</span>
                        </div>
                    </a>

                </div>

                {{-- Divider note --}}
                <div style="margin-top:40px; padding-top:32px; border-top:1px solid var(--border);">
                    <p style="font-size:13px; color:var(--muted); line-height:1.75; margin:0;">
                        Mesai saatleri içinde gönderilen mesajlara <strong style="color:var(--text); font-weight:500;">24 saat</strong> içinde yanıt veriyoruz.
                    </p>
                </div>
            </div>

            {{-- ─── RIGHT: Form ─── --}}
            <div style="background:#fff; border:1.5px solid var(--border); border-radius:16px; padding:48px 52px;">

                <div style="margin-bottom:36px;">
                    <h2 class="font-display" style="font-size:28px; font-weight:400; color:var(--text); margin:0 0 8px;">Mesaj Gönderin</h2>
                    <p style="font-size:14px; color:var(--muted); margin:0; line-height:1.6;">Ad soyad, e-posta ve mesaj alanları zorunludur.</p>
                </div>

                @if (session('status'))
                    <div class="success-alert">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    {{-- Ad Soyad --}}
                    <div style="margin-bottom:22px;">
                        <label style="display:block; font-size:13px; font-weight:500; color:#374151; margin-bottom:7px;">
                            Ad Soyad <span style="color:#EF4444;">*</span>
                        </label>
                        <input
                            class="input-field"
                            id="name" name="name" type="text"
                            value="{{ old('name') }}"
                            placeholder="Adınızı ve soyadınızı girin"
                        />
                        @error('name') <div class="error-msg">{{ $message }}</div> @enderror
                    </div>

                    {{-- E-posta & Telefon --}}
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:22px;">
                        <div>
                            <label style="display:block; font-size:13px; font-weight:500; color:#374151; margin-bottom:7px;">
                                E-posta <span style="color:#EF4444;">*</span>
                            </label>
                            <input
                                class="input-field"
                                id="email" name="email" type="email"
                                value="{{ old('email') }}"
                                placeholder="ornek@firma.com"
                            />
                            @error('email') <div class="error-msg">{{ $message }}</div> @enderror
                        </div>
                        <div>
                            <label style="display:block; font-size:13px; font-weight:500; color:#374151; margin-bottom:7px;">
                                Telefon <span style="font-size:12px; font-weight:400; color:var(--muted);">(isteğe bağlı)</span>
                            </label>
                            <input
                                class="input-field"
                                id="phone" name="phone" type="text"
                                value="{{ old('phone') }}"
                                placeholder="+90 5xx xxx xx xx"
                            />
                            @error('phone') <div class="error-msg">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    {{-- Mesaj --}}
                    <div style="margin-bottom:28px;">
                        <label style="display:block; font-size:13px; font-weight:500; color:#374151; margin-bottom:7px;">
                            Mesaj <span style="color:#EF4444;">*</span>
                        </label>
                        <textarea
                            class="input-field"
                            id="message" name="message"
                            placeholder="Talebinizi ve projenizi detaylı şekilde açıklayın..."
                        >{{ old('message') }}</textarea>
                        @error('message') <div class="error-msg">{{ $message }}</div> @enderror
                    </div>

                    {{-- Submit --}}
                    <div style="display:flex; align-items:center; gap:16px;">
                        <button type="submit" class="submit-btn">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-7 20-4-9-9-4 20-7z"/></svg>
                            Mesajı Gönder
                        </button>
                        <span style="font-size:12px; color:var(--muted);">Verileriniz güvende tutulur.</span>
                    </div>

                </form>
            </div>

        </div>
    </div>

</div>

<style>
    @media (max-width: 900px) {
        div[style*="grid-template-columns:340px"] {
            grid-template-columns: 1fr !important;
        }
    }
    @media (max-width: 540px) {
        div[style*="grid-template-columns:1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
        div[style*="padding:48px 52px"] {
            padding: 28px 24px !important;
        }
    }
</style>

@endsection