<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
           [
                "title" => "Fast X",
                "description" => "Dom Toretto dan keluarganya menjadi sasaran putra gembong narkoba Hernan Reyes yang pendendam.",
                "release_date" => "2023-05-17",
                "poster_url" =>"https://image.tmdb.org/t/p/w500/fiVW06jE7z9YnO4trhaMEdclSiC.jpg",
                "age_rating" => 15,
                "ticket_price" =>  53000
           ],
           [
                "title" => "John Wick: Chapter 4",
                "description"=>  "ohn Wick mengungkap jalan untuk mengalahkan The High Table. Tapi sebelum dia bisa mendapatkan kebebasannya, Wick harus berhadapan dengan musuh baru dengan aliansi kuat di seluruh dunia dan kekuatan yang mengubah teman lama menjadi musuh.",
                "release_date"=>  "2023-03-22",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg",
                "age_rating"=>  10,
                "ticket_price"=>  60000
            ],
           [
                "title"=>  "The Super Mario Bros. Movie",
                "description"=>  "Ketika sedang bekerja di bawah tanah untuk memperbaiki pipa air, Mario dan Luigi, yang merupakan tukang ledeng dari Brooklyn, tiba-tiba terhisap ke dalam pipa misterius dan masuk ke dunia yang sangat berbeda. Mereka berada di tempat yang ajaib dan aneh. Tapi sayangnya, mereka terpisah satu sama lain. Mario memulai petualangan besar untuk mencari dan menemukan Luigi.",
                "release_date"=>  "2023-04-05",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/qNBAXBIQlnOThrVvA6mA2B5ggV6.jpg",
                "age_rating"=>  14,
                "ticket_price"=>  49000
            ],
           [
                "title"=> "Avatar: The Way of Water",
                "description"=>  "Jake Sully tinggal bersama keluarga barunya di planet Pandora. Setelah ancaman kembali datang, Jake harus bekerja dengan Neytiri dan pasukan ras Na'vi untuk melindungi planet mereka.",
                "release_date"=> "2022-12-14",
                "poster_url" => "https://image.tmdb.org/t/p/w500/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  53000
            ],
           [
                "title"=>  "Guardians of the Galaxy Vol. 3",
                "description"=>  "Peter Quill masih trauma karena kehilangan Gamora. Ia perlu mengumpulkan timnya untuk melindungi alam semesta dan salah satu anggota mereka. Jika mereka gagal, Guardian akan berakhir.",
                "release_date"=>  "2023-05-03",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/nAbpLidFdbbi3efFQKMPQJkaZ1r.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  41000
            ],
           [
                "title"=>  "Ant-Man and the Wasp: Quantumania",
                "description"=>  "Scott Lang dan Hope van Dyne adalah pasangan pahlawan super. Mereka pergi bersama orang tua Hope, Janet van Dyne dan Hank Pym, serta anak perempuan Scott, Cassie Lang, untuk menjelajahi Alam Kuantum. Di sana, mereka bertemu dengan makhluk-makhluk aneh dan memulai petualangan yang tak terduga. Petualangan ini akan menguji batas-batas mereka.",
                "release_date"=>  "2023-02-15",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/g0OWGM7HoIt866Lu7yKohYO31NU.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  51000
            ],
           [
                "title"=>  "The Pope's Exorcist",
                "description"=>  "Pastor Gabriele Amorth, yang memimpin tim pengusir setan di Vatikan, menginvestigasi kasus kekerasan roh jahat yang menghantui seorang anak laki-laki. Dalam penyelidikannya, ia secara tak terduga menemukan rahasia tua yang disembunyikan oleh Vatikan selama berabad-abad.",
                "release_date"=>  "2023-04-05",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/gNPqcv1tAifbN7PRNgqpzY8sEJZ.jpg",
                "age_rating"=>  13,
                "ticket_price"=>  51000
            ],
           [
                "title"=>  "To Catch a Killer",
                "description"=>  "Baltimore. Malam tahun baru. Seorang petugas polisi yang berbakat tetapi bermasalah (Shailene Woodley) direkrut oleh kepala penyelidik FBI (Ben Mendelsohn) untuk membantu membuat profil dan melacak individu yang terganggu yang meneror kota.",
                "release_date"=>  "2023-04-06",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/mFp3l4lZg1NSEsyxKrdi0rNK8r1.jpg",
                "age_rating"=>  15,
                "ticket_price"=>  47000
            ],
           [
                "title"=>  "Transformers: Age of Extinction",
                "description"=>  "Lima tahun setelah Chicago dihancurkan, manusia berbalik melawan robot. Namun seorang ayah tunggal dan penemu membangkitkan robot yang dapat menyelamatkan dunia.",
                "release_date"=>  "2014-06-25",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/jyzrfx2WaeY60kYZpPYepSjGz4S.jpg",
                "age_rating"=>  11,
                "ticket_price"=>  54000
            ],
           [
                "title"=>  "Puss in Boots: The Last Wish",
                "description"=>  "Puss in Boots menemukan fakta bahwa kecintaannya pada petualangan telah merenggut nyawanya: dia telah menghabiskan delapan dari sembilan nyawanya. Puss kini memulai petualangan epik untuk menemukan harapan terakhir untuk memulihkan sembilan nyawanya.",
                "release_date"=> "2022-12-07",
                "poster_url"=> "https://image.tmdb.org/t/p/w500/kuf6dutpsT0vSVehic3EZIqkOBt.jpg",
                "age_rating"=>  11,
                "ticket_price"=> 51000
            ],
           [
                "title"=>  "Scream VI",
                "description"=>  "Setelah pembunuhan terbaru oleh Ghostface, keempat orang yang selamat pergi dari Woodsboro dan memulai hidup baru.",
                "release_date"=>  "2023-03-08",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/wDWwtvkRRlgTiUr6TyLSMX8FCuZ.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  36000
            ],
           [
                "title"=>  "Black Adam",
                "description"=>  "Hampir 5.000 tahun setelah dia dianugerahi kekuatan maha kuasa para dewa Mesirâ€”dan dipenjara dengan cepatâ€”Black Adam dibebaskan dari makam duniawinya, siap untuk melepaskan bentuk keadilannya yang unik di dunia modern.",
                "release_date"=>  "2022-10-19",
                "poster_url"=> "https://image.tmdb.org/t/p/w500/A5imhXiFF3AL9RRA4FBzNDFmfgW.jpg",
                "age_rating"=>  10,
                "ticket_price"=> 42000
            ],
           [
                "title"=>  "Dungeons & Dragons: Honor Among Thieves",
                "description"=> "Seorang pencuri menawan dan sekelompok petualang yang unik melakukan pencurian besar-besaran untuk mencuri relik yang hilang. Namun, segalanya menjadi kacau ketika mereka berjumpa dengan orang yang salah.",
                "release_date"=>  "2023-03-23",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/A7AoNT06aRAc4SV89Dwxj3EYAgC.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  38000
            ],
           [
                "title"=>  "Peter Pan & Wendy",
                "description"=>  "Wendy Darling adalah seorang gadis kecil yang takut pergi dari rumah masa kecilnya. Suatu hari, dia bertemu dengan Peter Pan, seorang anak laki-laki yang tidak mau tumbuh dewasa. Mereka bersama saudara-saudaranya dan peri kecil bernama Tinker Bell pergi ke dunia ajaib yang disebut Neverland. Di sana, mereka menghadapi Kapten Hook, seorang bajak laut jahat, dan mengalami petualangan seru yang akan mengubah hidup Wendy selamanya.",
                "release_date"=> "2023-04-20",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/9NXAlFEE7WDssbXSMgdacsUD58Y.jpg",
                "age_rating"=>  13,
                "ticket_price"=>  35000
            ],
           [
                "title"=>  "Spider-Man: No Way Home",
                "description"=>  "Peter Parker menghadapi masalah besar. Hal ini terjadi setelah identitasnya sebagai Spiderman terungkap. Dengan kepergian Tony Stark, Peter Parker pun harus meminta bantuan Doctor Strange agar semua orang bisa melupakan identitasnya sebagai manusia laba-laba.",
                "release_date"=>  "2021-12-15",
                "poster_url"=> "https://image.tmdb.org/t/p/w500/uJYYizSuA9Y3DCs0qS4qWvHfZg4.jpg",
                "age_rating"=>  15,
                "ticket_price"=>  56000
            ],
           [
                "title"=>  "Black Panther: Wakanda Forever",
                "description"=>  "Rakyat Wakanda kali ini akan berjuang untuk melindungi negerinya dari campur tangan kekuatan dunia setelah kematian sang Raja T'Challa.",
                "release_date"=>  "2022-11-09",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/sv1xJUazXeYqALzczSZ3O6nkH75.jpg",
                "age_rating"=>  13,
                "ticket_price"=>  39000
            ],
           [
                "title"=>  "Transformers: The Last Knight",
                "description"=>  "Di tengah ketidakhadiran Optimus Prime, umat manusia berperang melawanTransformers untuk mempertahankan eksistensinya. Cade Yeager membentuk kerjasama dengan Bumblebee, seorang bangsawan Inggris dan seorang professor dari Oxford untuk mempelajari mengapa Transformers selalu kembali ke planet bumi.",
                "release_date"=>  "2017-06-16",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/s5HQf2Gb3lIO2cRcFwNL9sn1o1o.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  52000
            ],
           [
                "title"=>  "Renfield",
                "description"=>  "Setelah bertahun-tahun sebagai hamba Dracula yang merasa jenuh dan lelah, Renfield menemukan harapan baru dalam hidupnya. Dia jatuh cinta pada Rebecca Quincy, seorang polisi lalu lintas yang energik dan sering marah. Kesempatan ini bisa menjadi penebusan baginya.",
                "release_date"=> "2023-04-07",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/2OaprROMZZeiWsydjGUIkXrv2Z3.jpg",
                "age_rating"=>  14,
                "ticket_price"=>  51000
            ],
           [
                "title"=> "Cocaine Bear",
                "description"=>  "Sekelompok polisi, penjahat, turis, dan remaja eksentrik berkumpul di hutan Georgia tempat beruang hitam besar mengamuk setelah menelan kokain secara tidak sengaja.",
                "release_date"=>  "2023-02-22",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/gOnmaxHo0412UVr1QM5Nekv1xPi.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  53000
            ],
           [
                "title"=>  "Prey",
                "description"=>  "Di Comanche Nation pada tahun 1717, seorang pejuang yang ganas dan sangat terampil bernama Naru mengetahui bahwa mangsa yang dia intai adalah alien yang sangat berkembang dengan persenjataan berteknologi maju.",
                "release_date"=>  "2022-08-02",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/ujr5pztc1oitbe7ViMUOilFaJ7s.jpg",
                "age_rating"=>  10,
                "ticket_price"=>  42000
            ],
           [
                "title"=>  "Fall",
                "description"=>  "Untuk sahabat Becky dan Hunter, hidup adalah tentang menaklukkan ketakutan dan mendorong batas. Tetapi setelah mereka mendaki 2.000 kaki ke puncak menara radio terpencil yang ditinggalkan, mereka menemukan diri mereka terdampar tanpa jalan turun. Sekarang keterampilan panjat ahli Becky dan Hunter akan diuji saat mereka mati-matian berjuang untuk bertahan hidup dari unsur-unsur, kurangnya persediaan, dan ketinggian yang menyebabkan vertigo.",
                "release_date"=>  "2022-08-11",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/v28T5F1IygM8vXWZIycfNEm3xcL.jpg",
                "age_rating"=>  11,
                "ticket_price"=>  39000
            ],
           [
                "title"=>  "Avatar",
                "description"=>  "Pada abad ke-22, seorang Marinir lumpuh dikirim ke Pandora bulan pada misi yang unik, tetapi menjadi terpecah antara mengikuti perintah dan melindungi peradaban alien.",
                "release_date"=>  "2009-12-15",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/kyeqWdyUXW608qlYkRqosgbbJyK.jpg",
                "age_rating"=> 13,
                "ticket_price"=>  37000
            ],
           [
                "title"=>  "Split",
                "description"=>  "Ketika ketiga gadis remaja sedang menunggu ayah mereka di dalam mobil, seorang pria misterius menculik dan membawa mereka ke dalam sebuah bunker. Sang penculik yang bernama Kevin (James McAvoy) adalah seorang pria dengan gangguan jiwa yang membuatnya memiliki 23 kepribadian yang berbeda, yang diantaranya adalah seorang wanita dan anak berumur 9 tahun yang bernama Hedwig.  Sebagai salah satu gadis yang diculik, Casey berusaha meloloskan diri dengan meyakinkan salah satu kepribadian Kevin untuk melepaskan mereka. Akan tetapi hal tersebut tidaklah mudah, terlebih setelah Hedwig memperingatkan mereka akan the Beast yang merupakan kepribadian Kevin yang paling berbahaya.",
                "release_date"=>  "2017-01-19",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/lli31lYTFpvxVBeFHWoe5PMfW5s.jpg",
                "age_rating"=>  10,
                "ticket_price"=>  45000
            ],
           [
                "title"=>  "Top Gun: Maverick",
                "description"=>  "Setelah lebih dari tiga puluh tahun mengabdi sebagai salah satu penerbang top Angkatan Laut, dan menghindari kenaikan pangkat yang akan menjatuhkannya, Pete \"Maverick\" Mitchell mendapati dirinya melatih satu detasemen lulusan TOP GUN untuk misi khusus yang tidak ada kehidupan. pilot pernah melihat.",
                "release_date"=>  "2022-05-24",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/jeGvNOVMs5QIU1VaoGvnd3gSv0G.jpg",
                "age_rating"=>  14,
                "ticket_price"=>  57000
            ],
           [
                "title"=>  "Thor: Love and Thunder",
                "description"=> "Thor: Love and Thunder\"menceritakan Thor (Chris Hemsworth) dalam sebuah perjalanan yang belum pernah ia jalani â€“ pencariankedamaian batin. Namun, masa pensiunnya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal (Christian Bale), yang ingin memusnahkan para dewa. Untuk mengatasi ancaman, Thor meminta bantuan Raja Valkyrie (Tessa Thompson), Korg (Taika Waititi), dan mantan kekasihnya Jane Foster (Natalie Portman), yang secara mengejutkan dan misterius berhasil menggunakan palu ajaibnya, Mjolnir, sebagai Mighty Thor. Bersama, mereka memulai petualangan kosmik yang mendebarkan untuk mengungkap misteri pembalasan Dewa Jagal dan menghentikannya sebelum terlambat.",
                "release_date"=> "2022-07-06",
                "poster_url"=> "https://image.tmdb.org/t/p/w500/pIkRyD18kl4FhoCNQuWxWu5cBLM.jpg",
                "age_rating"=> 12,
                "ticket_price"=>  35000
            ],
           [
                "title"=>  "Sonic the Hedgehog 2",
                "description"=>  "Alur cerita film Sonic the Hedgehog 2 bermula ketika Sonic menetap di Green Hills. Ia memutuskan menetap di sana agar bisa merasakan lebih banyak kebebasan. Ditambah lagi, Tom dan Maddie setuju untuk meninggalakannya di rumah ketika mereka pergi untuk berlibur. Namun sayangnya, tidak lama setelah mereka pergi Dr. Robotnik sang musuh bubuyutan si landak biru itu kembali ke bumi. Kali ini Dr. Robotnik datang dengan pasukan baru, Knuckles. Tujuan mereka datang kembali adalah untuk mencari Master Emerald yang memiliki kekuatan super. Kekuatan super itu bisa membangun dan menghancurkan peradaban di bumi. Atas hal ini, Sonic pun mencari strategi agar bisa menggagalkan rencara Dr. Robotnik. Strategi yang dilakukan oleh Sonic ialah bekerjasama dengan sahabatnya, Tails. Kemudian bersama dengan Tails, Sonic memulai perjalanan untuk menemukan Master Emerald. Semua itu dilakukan dengan cepat, sebelum Master Emerald jatuh ke tangan yang salah.",
                "release_date"=> "2022-04-08",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/6DrHO1jr3qVrViUO6s6kFiAGM7.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  45000
            ],
           [
                "title"=>  "Avengers: Infinity War",
                "description"=>  "Karena Avengers dan sekutunya terus melindungi dunia dari ancaman yang terlalu besar untuk ditangani oleh seorang pahlawan, bahaya baru telah muncul dari bayangan kosmik: Thanos. Seorang lalim penghujatan intergalaksi, tujuannya adalah untuk mengumpulkan semua enam Batu Infinity, artefak kekuatan yang tak terbayangkan, dan menggunakannya untuk menimbulkan kehendak memutar pada semua realitas. Segala sesuatu yang telah diperjuangkan oleh Avengers telah berkembang hingga saat ini - nasib Bumi dan keberadaannya sendiri tidak pernah lebih pasti.",
                "release_date"=>  "2018-04-25",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg",
                "age_rating"=>  10,
                "ticket_price"=>  46000
            ],
           [
                "title"=>  "The Whale",
                "description"=>  "Seorang guru bahasa Inggris yang tertutup dan gemuk mencoba untuk berhubungan kembali dengan putri remajanya yang terasing.",
                "release_date"=>  "2022-12-09",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/jQ0gylJMxWSL490sy0RrPj1Lj7e.jpg",
                "age_rating"=>  15,
                "ticket_price"=>  55000
            ],
           [
                "title"=>  "The Batman",
                "description"=>  "Ketika seorang pembunuh berantai sadis mulai membunuh tokoh-tokoh politik penting di Gotham, Batman terpaksa menyelidiki korupsi tersembunyi di kota itu dan mempertanyakan keterlibatan keluarganya.",
                "release_date"=>  "2022-03-01",
                "poster_url"=> "https://image.tmdb.org/t/p/w500/seyWFgGInaLqW7nOZvu0ZC95rtx.jpg",
                "age_rating"=>  13,
                "ticket_price" =>  53000
            ],
           [
                "title"=>  "Smile",
                "description"=>  "Setelah menyaksikan kejadian aneh dan traumatis yang melibatkan seorang pasien, Dr. Rose Cotter mulai mengalami kejadian menakutkan yang tidak dapat dia jelaskan. Saat teror luar biasa mulai mengambil alih hidupnya, Rose harus menghadapi masa lalunya yang bermasalah untuk bertahan hidup dan melarikan diri dari kenyataan barunya yang mengerikan.",
                "release_date"=>  "2022-09-23",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/67Myda9zANAnlS54rRjQF4dHNNG.jpg",
                "age_rating"=>  11,
                "ticket_price"=>  38000
            ],
           [
                "title"=>  "Encanto",
                "description"=>  "menceritakan tentang keluarga Madrigals, sebuah keluarga yang tinggal di rumah ajaib dan masing-masing anggota keluarga memiliki keajaibannya tersendiri. Pada jaman dahulu kala, Abuela bersama suami dan anak-anaknya melarikan diri dari kerusuhan di desa.",
                "release_date"=>  "2021-10-13",
                "poster_url"=>  "https://image.tmdb.org/t/p/w500/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg",
                "age_rating"=>  12,
                "ticket_price"=>  44000
            ]

        ];

        DB::table('films')->insert($data);
    }
}
