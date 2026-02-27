<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Blogs;
use App\Models\BlogsTranslate;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [

            [
                'title' => 'Tamirci ararken nelere dikkat etmeliyiz?',
                'desc' => 'Doğru tamirciyi bulmak için dikkat edilmesi gereken önemli kriterleri ve güvenilir ustayı seçmenin yollarını öğrenin.',
                'content' => '
Evde oluşan arızalar günlük hayatı ciddi şekilde etkileyebilir. Bu nedenle doğru tamirciyi bulmak oldukça önemlidir. Tamirci ararken ilk dikkat edilmesi gereken konu deneyimdir. Daha önce benzer işler yapmış ustalar genellikle sorunu daha hızlı çözer.

İkinci önemli konu ise kullanıcı yorumlarıdır. İnternet üzerinden yapılan gerçek kullanıcı değerlendirmeleri, ustanın güvenilirliği hakkında önemli ipuçları verir. Ayrıca fiyat teklifini işe başlamadan önce almak da sürpriz maliyetlerin önüne geçer.

Sigortalı ve garantili hizmet sunan ustalar her zaman daha güvenlidir. İş sonrası destek sunulup sunulmadığını mutlaka sormalısınız.

MyWerker gibi platformlar sayesinde bulunduğunuz bölgedeki güvenilir tamircilere kolayca ulaşabilir, yorumları inceleyerek doğru tercihi yapabilirsiniz.
',
                'keywords' => 'tamirci bulma, güvenilir tamirci, usta seçimi, ev tamiri'
            ],

            [
                'title' => 'Elektrik tamirini evde nasıl yaparız?',
                'desc' => 'Basit elektrik arızalarını evde güvenli şekilde çözmek için bilmeniz gereken temel bilgiler.',
                'content' => '
Elektrik arızaları dikkatli olunması gereken konuların başında gelir. Küçük sorunları evde çözmek mümkün olsa da güvenlik her zaman öncelikli olmalıdır.

İşe başlamadan önce mutlaka sigortayı kapatmalısınız. Elektrik akımı tamamen kesilmeden yapılan işlemler ciddi kazalara neden olabilir.

Kablo gevşemeleri, priz sorunları veya anahtar arızaları genellikle basit müdahalelerle çözülebilir. Ancak yanık kokusu, kıvılcım veya sürekli sigorta atması gibi durumlarda profesyonel destek alınmalıdır.

MyWerker üzerinden alanında uzman elektrik ustalarına ulaşarak güvenli bir şekilde sorununuzu çözebilirsiniz.
',
                'keywords' => 'elektrik tamiri, evde elektrik tamiri, elektrik güvenliği'
            ],

            [
                'title' => 'MyWerker ile tamirci bulma',
                'desc' => 'MyWerker platformu sayesinde hızlı ve güvenilir tamirci bulmanın en kolay yolu.',
                'content' => '
Günümüzde güvenilir tamirci bulmak zaman alıcı olabilir. MyWerker, kullanıcıları profesyonel ustalarla buluşturan modern bir hizmet platformudur.

Platform üzerinden ihtiyacınıza uygun kategoriyi seçerek bulunduğunuz konumdaki ustaları listeleyebilirsiniz. Kullanıcı yorumları ve puanlama sistemi sayesinde karar vermek çok daha kolay hale gelir.

Fiyat tekliflerini karşılaştırabilir ve bütçenize en uygun hizmeti seçebilirsiniz. Böylece hem zamandan tasarruf eder hem de kaliteli hizmet alırsınız.

MyWerker, ev tamiri süreçlerini dijitalleştirerek kullanıcı deneyimini kolaylaştırmayı hedefler.
',
                'keywords' => 'MyWerker, tamirci bulma uygulaması, online usta bul'
            ],

            [
                'title' => 'Priz değişimi nasıl yapılır?',
                'desc' => 'Evde priz değişimini güvenli şekilde yapmak için adım adım rehber.',
                'content' => '
Bozulan veya gevşeyen prizler hem tehlikeli hem de kullanışsızdır. Priz değişimi yapmadan önce elektrik sigortasını kapatmanız gerekir.

Eski priz dikkatlice sökülmeli ve kabloların bağlantı yerleri not edilmelidir. Faz ve nötr kablolar doğru şekilde bağlanmalıdır.

Yeni priz monte edildikten sonra vidalar sağlam şekilde sıkılmalı ve priz duvara düzgün yerleştirilmelidir.

Eğer elektrik bilginiz yeterli değilse güvenlik açısından profesyonel destek almak her zaman daha doğru bir seçim olacaktır.
',
                'keywords' => 'priz değişimi, elektrik priz montajı'
            ],

            [
                'title' => 'Ampul değişimi nasıl yapılır?',
                'desc' => 'Ampul değiştirirken dikkat edilmesi gereken güvenlik adımları.',
                'content' => '
Ampul değiştirmek basit bir işlem gibi görünse de bazı güvenlik kurallarına dikkat edilmelidir. Öncelikle ışık anahtarı kapatılmalı ve mümkünse sigorta indirilmelidir.

Sıcak ampullere dokunmaktan kaçının. Ampulün soğumasını beklemek yanıkları önler. Yeni ampul seçerken duy tipinin doğru olduğundan emin olun.

LED ampuller enerji tasarrufu sağladığı için günümüzde en çok tercih edilen seçenekler arasındadır.
',
                'keywords' => 'ampul değişimi, led ampul takma'
            ],

            [
                'title' => 'Tamirci bulacağım zaman ne yapabiliriz?',
                'desc' => 'Doğru ustayı bulmak için uygulanabilecek pratik yöntemler.',
                'content' => '
Tamirci ararken çevreden öneri almak iyi bir başlangıç olabilir. Ancak dijital platformlar artık çok daha güvenilir sonuçlar sunmaktadır.

Ustanın daha önce yaptığı işleri incelemek, yorumları okumak ve fiyat karşılaştırması yapmak doğru karar vermenize yardımcı olur.

MyWerker gibi platformlar sayesinde farklı ustaları tek ekranda karşılaştırabilirsiniz.
',
                'keywords' => 'usta bulma yöntemleri, tamirci arama'
            ],

            [
                'title' => 'Kombi servisinde nelere dikkat etmeliyiz?',
                'desc' => 'Kombi bakımı ve servis seçiminde dikkat edilmesi gereken önemli noktalar.',
                'content' => '
Kombi bakımı hem güvenlik hem de enerji tasarrufu açısından büyük önem taşır. Yetkili veya deneyimli servislerle çalışmak gerekir.

Bakım sırasında filtre temizliği, gaz ayarı ve genel kontrol işlemleri yapılmalıdır. Düzenli bakım yapılan kombiler daha az yakıt tüketir.

Servis sonrası yapılan işlemlerin detaylı şekilde açıklanması profesyonelliğin göstergesidir.
',
                'keywords' => 'kombi servisi, kombi bakımı'
            ],

            [
                'title' => 'Evde küçük tamirat rehberi',
                'desc' => 'Evde kolayca yapabileceğiniz küçük tamirat önerileri.',
                'content' => '
Kapı gıcırtıları, gevşeyen vidalar veya küçük çatlaklar basit araçlarla çözülebilir. Temel bir tamir çantası her evde bulunmalıdır.

Ancak elektrik ve gaz bağlantıları gibi riskli konularda mutlaka uzman desteği alınmalıdır.
',
                'keywords' => 'ev tamiratı, küçük tamir işleri'
            ],

            [
                'title' => 'Su tesisatı sorunları nasıl çözülür?',
                'desc' => 'Evde sık karşılaşılan tesisat problemleri ve çözüm yöntemleri.',
                'content' => '
Musluk damlatması veya düşük su basıncı en yaygın tesisat sorunları arasındadır. Conta değişimi çoğu zaman sorunu çözer.

Büyük kaçaklarda su vanası kapatılmalı ve tesisatçı çağrılmalıdır.
',
                'keywords' => 'tesisat tamiri, su kaçağı çözümü'
            ],

            [
                'title' => 'Acil tamirci nasıl bulunur?',
                'desc' => 'Acil durumlarda hızlı tamirci bulmanın yolları.',
                'content' => '
Gece oluşan arızalar veya ani su kaçakları hızlı müdahale gerektirir. Bu gibi durumlarda konuma göre hizmet veren platformlar büyük avantaj sağlar.

MyWerker üzerinden yakınınızdaki müsait ustaları saniyeler içinde bulabilirsiniz.
',
                'keywords' => 'acil tamirci, hızlı usta bul'
            ],

        ];

        foreach ($blogs as $item) {

            $blog = Blogs::create([
                'image' => 'blogs/default.jpg',
                'status' => 1,
            ]);

            BlogsTranslate::create([
                'blog_id' => $blog->id,
                'lang' => 'tr',
                'title' => $item['title'],
                'desc' => $item['desc'],
                'content' => $item['content'],
                'keywords' => $item['keywords'],
            ]);
        }
    }
}