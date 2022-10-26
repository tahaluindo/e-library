<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailBuku;

class IsiDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailBuku::insert([
            [
                'id' => 001,
                'id_genre' => 102,
                'foto_buku' => 'Tia.jpg',
                'nama_buku' => 'Tia',
                'penulis_buku' => 'kembangmanggis',
                'jumlah_halaman' => '427',
                'deskripsi' => 'Tia, seorang gadis SMA kelas dua, menatap kehidupan dengan penuh ironi. Kedewasaan adalah penghapusan sekian banyak kenikmatan hidup, begitu selalu pendapatnya. Namun tentu saja dia tidak dapat menahan perputaran dunia. Hukum alam berlaku pada setiap manusia, termasuk Tia, yang sejak awal tegas-tegas menolaknya. Di saat dia tengah memasuki arti kedewasaan itu sendiri, Tia sama sekali tidak menyadarinya. Alam telah menjeratnya dengan amat halus, mengantar gadis itu ke dunia barunya tanpa penolakan lagi. Tia kini telah siap menyongsong fajar dengan mata dan hati terbuka. Dia berhasil menembus pintu kedewasaan itu lewat uluran tangan gaib yang menolongnya. Apa lagi kalau bukan tangan-tangan gaib cinta?'
            ],
            [
                'id' => 002,
                'id_genre' => 103,
                'foto_buku' => 'kisah-tanah-jawa.jpg',
                'nama_buku' => 'Kisah Tanah Jawa',
                'penulis_buku' => '@kisahtanahjawa',
                'jumlah_halaman' => '250',
                'deskripsi' => 'Tanah Jawa menyimpan banyak kisah misteri yang takkan habis diceritakan dalam semalam. Sosok misterius, ritual mistis, dan tempat angker, selalu membuat kita penasaran. Buku Kisah Tanah Jawa mengajak pembaca membuka selubung mitos dan mistis yang selama ini hanya menjadi ksak-kusuk di masyarakat'
            ],
            [
                'id' => 003,
                'id_genre' => 104,
                'foto_buku' => 'Hyderabad.jpg',
                'nama_buku' => 'Hyderabad',
                'penulis_buku' => 'Irvan Karquza',
                'jumlah_halaman' => '172',
                'deskripsi' => 'Pedih, terpaksa aku berpamit dari rumah. Menuju tempat baru yang masih tereka dalam imajinasi. Salah satu hal yang mendasar bagiku merantau adalah, enam orang anak Ibu, tidak satu pun yang kuliah. Bukan tanpa alasan. Karena Penghasilan Ayah yang rendah, pendidikan yang tak sampai, serta relasi yang terbatas. Membuatku ingin mengubah keadaan keluarga ini.
                Ibuku tidak banyak bicara, tapi ku tahu dia banyak menangis dalam doa.  Setiap aku berdoa aku juga membayangkan wajahnya, air mataku tumpah. Aku katakan “Aku akan membanggakanmu Ibu.”
                Entah berapa lama lagi aku akan pulang ke kampung halaman. Ibu memberiku uang yang di pinjamnya dari tetangga.
                “Bismillahi tawakkaltu Allallahi Walahaula Walaquata Ilabillah”.
                “ Aku berangkat Bu.” Aku melihat senyum itu tersungging di bibirnya.'
            ],
            [
                'id' => 004,
                'id_genre' => 104,
                'foto_buku' => 'Mindset.jpg',
                'nama_buku' => 'Mindset',
                'penulis_buku' => 'Irvan Karquza',
                'jumlah_halaman' => '172',
                'deskripsi' => 'Paparan tentang kesuksesan dalam buku ini sangat mendasar dan langka.
                Lazimnya, buku-buku tentang kesuksesan lebih menawarkan sisi-sisi
                praktis. Tetapi, buku ini justru mengajak Anda menggarap inti masalah
                kesuksesan: pikiran. Tak hanya itu, buku ini mengontraskan dengan apik
                tokoh-tokoh duniadi bidang musik, sastra, sains, olahraga, dan bisnis
                yang berpola pikir tetap (fixed mindset) dan berpola pikir berkembang
                (growth mindset). Ternyata, tokoh yang berpola pikir berkembang lebih
                mampu mempertahankan kesuksesan dan kegembiraan hidup.
                '
            ],
        ]);
    }
}
