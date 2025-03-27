<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Hadits | Puasa & Memaafkan</title>
    <link rel="stylesheet" href="hadist.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="overlay"></div>
    
    <header>
        <div class="container">
            <h1><i class="fas fa-mosque"></i> Kumpulan Hadits Mulia</h1>
            <p class="subtitle">Tentang Puasa dan Keutamaan Memaafkan</p>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="#puasa" class="active"><i class="fas fa-moon"></i> Hadits Puasa</a></li>
                <li><a href="#memaafkan"><i class="fas fa-hand-holding-heart"></i> Hadits Memaafkan</a></li>
                <li><a href="#tentang"><i class="fas fa-info-circle"></i> Tentang</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        <section id="puasa" class="hadith-section">
            <div class="section-header">
                <h2><i class="fas fa-moon"></i> Hadits-Hadits tentang Puasa</h2>
                <div class="arabic-title">أحاديث الصيام</div>
            </div>
            
            <?php
            $puasa_hadiths = [
                [
                    'arabic' => "الصِّيَامُ جُنَّةٌ، فَإِذَا كَانَ يَوْمُ صَوْمِ أَحَدِكُمْ فَلَا يَرْفُثْ وَلَا يَصْخَبْ، فَإِنْ سَابَّهُ أَحَدٌ أَوْ قَاتَلَهُ فَلْيَقُلْ إِنِّي امْرُؤٌ صَائِمٌ",
                    'translation' => "Rasulullah ﷺ bersabda: 'Puasa adalah perisai. Jika salah seorang dari kalian sedang berpuasa, janganlah berkata kotor dan berteriak-teriak. Jika ada orang yang mencaci atau memusuhinya, hendaklah ia mengatakan, 'Aku sedang berpuasa.'",
                    'source' => "HR. Bukhari & Muslim"
                ],
                [
                    'arabic' => "كُلُّ عَمَلِ ابْنِ آدَمَ يُضَاعَفُ الْحَسَنَةُ عَشْرُ أَمْثَالِهَا إِلَى سَبْعِمِائَةِ ضِعْفٍ قَالَ اللَّهُ عَزَّ وَجَلَّ إِلَّا الصَّوْمَ فَإِنَّهُ لِي وَأَنَا أَجْزِي بِهِ",
                    'translation' => "Setiap amalan anak Adam dilipatgandakan pahalanya; satu kebaikan dibalas sepuluh kali lipat hingga tujuh ratus kali lipat. Allah 'Azza wa Jalla berfirman: 'Kecuali puasa, karena puasa itu untuk-Ku dan Aku yang akan membalasnya.'",
                    'source' => "HR. Muslim"
                ],
                [
                    'arabic' => "مَنْ صَامَ يَوْمًا فِي سَبِيلِ اللَّهِ بَعَّدَ اللَّهُ وَجْهَهُ عَنِ النَّارِ سَبْعِينَ خَرِيفًا",
                    'translation' => "Barangsiapa berpuasa satu hari di jalan Allah, maka Allah akan menjauhkan wajahnya dari neraka sejauh tujuh puluh tahun perjalanan.",
                    'source' => "HR. Bukhari & Muslim"
                ]
            ];

            foreach ($puasa_hadiths as $hadith) {
                echo '<div class="hadith-card">
                    <div class="arabic-text">'.$hadith['arabic'].'</div>
                    <div class="translation">'.$hadith['translation'].'</div>
                    <div class="source">'.$hadith['source'].'</div>
                    <div class="decoration"><i class="fas fa-star-and-crescent"></i></div>
                </div>';
            }
            ?>
        </section>

        <section id="memaafkan" class="hadith-section">
            <div class="section-header">
                <h2><i class="fas fa-hand-holding-heart"></i> Hadits-Hadits tentang Memaafkan</h2>
                <div class="arabic-title">أحاديث العفو</div>
            </div>
            
            <?php
            $forgiveness_hadiths = [
                [
                    'arabic' => "مَا نَقَصَتْ صَدَقَةٌ مِنْ مَالٍ، وَمَا زَادَ اللَّهُ عَبْدًا بِعَفْوٍ إِلَّا عِزًّا",
                    'translation' => "Sedekah tidak akan mengurangi harta, dan tidaklah Allah menambahkan kepada seorang hamba sifat pemaaf kecuali kemuliaan.",
                    'source' => "HR. Muslim"
                ],
                [
                    'arabic' => "وَأَنْ تَعْفُوا أَقْرَبُ لِلتَّقْوَى وَلَا تَنْسَوُا الْفَضْلَ بَيْنَكُمْ",
                    'translation' => "Dan memaafkan itu lebih dekat kepada takwa. Dan janganlah kamu melupakan keutamaan di antara kamu.",
                    'source' => "QS. Al-Baqarah: 237"
                ],
                [
                    'arabic' => "مَنْ كَظَمَ غَيْظًا وَهُوَ قَادِرٌ عَلَى أَنْ يُنْفِذَهُ، دَعَاهُ اللَّهُ عَلَى رُءُوسِ الْخَلَائِقِ يَوْمَ الْقِيَامَةِ حَتَّى يُخَيِّرَهُ مِنَ الْحُورِ الْعِينِ مَا شَاءَ",
                    'translation' => "Barangsiapa menahan amarah padahal ia mampu meluapkannya, maka Allah akan memanggilnya di hadapan seluruh makhluk pada Hari Kiamat hingga memilihkan bidadari surga yang ia kehendaki.",
                    'source' => "HR. Abu Daud & Tirmidzi"
                ]
            ];

            foreach ($forgiveness_hadiths as $hadith) {
                echo '<div class="hadith-card">
                    <div class="arabic-text">'.$hadith['arabic'].'</div>
                    <div class="translation">'.$hadith['translation'].'</div>
                    <div class="source">'.$hadith['source'].'</div>
                    <div class="decoration"><i class="fas fa-dove"></i></div>
                </div>';
            }
            ?>
        </section>

        <section id="tentang" class="about-section">
            <h2><i class="fas fa-info-circle"></i> Tentang Website Ini</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Website ini dibuat sebagai media untuk mempelajari dan mengingat hadits-hadits Nabi Muhammad ﷺ tentang puasa dan keutamaan memaafkan.</p>
                    <p>Semoga dengan membaca hadits-hadits ini, kita dapat mengamalkannya dalam kehidupan sehari-hari dan meraih ridha Allah Subhanahu wa Ta'ala.</p>
                    <div class="quote">
                        <i class="fas fa-quote-left"></i>
                        <p>Barangsiapa menunjukkan kepada kebaikan, maka baginya pahala seperti pahala orang yang mengerjakannya</p>
                        <i class="fas fa-quote-right"></i>
                        <p class="quote-source">HR. Muslim</p>
                    </div>
                </div>
                <div class="about-image">
                    <img src="masjid.png" alt="Masjid">
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="#puasa">Hadits Puasa</a></li>
                        <li><a href="#memaafkan">Hadits Memaafkan</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Referensi</h3>
                    <ul>
                        <li>Shahih Bukhari</li>
                        <li>Shahih Muslim</li>
                        <li>Sunan Abu Daud</li>
                        <li>Sunan Tirmidzi</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> Kumpulan Hadits. Semua hak dilindungi.</p>
                <p class="tasbih">سبحانك اللهم وبحمدك أشهد أن لا إله إلا أنت أستغفرك وأتوب إليك</p>
            </div>
        </div>
    </footer>

    <button id="scrollTop" title="Kembali ke Atas"><i class="fas fa-arrow-up"></i></button>

    <script src="hadist.js"></script>
</body>
</html>