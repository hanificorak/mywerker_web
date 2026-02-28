<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Yeni İletişim Mesajı</title>
</head>

<body style="font-family: Arial, sans-serif; color: #111827; line-height: 1.6;">
    <h2 style="margin-bottom: 16px;">Yeni İletişim Formu Mesajı</h2>

    <p><strong>Ad Soyad:</strong> {{ $contact->name }}</p>
    <p><strong>E-posta:</strong> {{ $contact->email }}</p>
    <p><strong>Telefon:</strong> {{ $contact->phone ?: '-' }}</p>

    <p><strong>Mesaj:</strong></p>
    <p style="white-space: pre-line;">{{ $contact->message }}</p>

    <hr style="margin: 20px 0; border: 0; border-top: 1px solid #e5e7eb;">
    <p style="font-size: 12px; color: #6b7280; margin: 0;">Bu mesaj MyWerker iletişim formundan gönderildi.</p>
</body>

</html>
