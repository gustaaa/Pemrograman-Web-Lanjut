<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefixController extends Controller
{
    public function gunung(){
        return "Gunung adalah sebuah bentuk tanah yang menonjol di atas wilayah sekitarnya. Gunung adalah bagian dari permukaan bumi yang menjulang lebih tinggi dibandingkan dengan daerah sekitarnya. 
        <br>Sebuah gunung biasanya lebih tinggi dan curam dari sebuah bukit, tetapi ada kesamaaan, dan penggunaan sering tergantung dari adat lokal.";
    }
    public function pantai(){
        return "Pantai merupakan sebuah bentuk geografis yang terdiri dari pasir, dan terdapat di daerah pesisir laut. Daerah pantai menjadi batas antara daratan dan perairan laut. 
        <br>Panjang garis pantai ini diukur mengeliling seluruh pantai yang merupakan daerah teritorial suatu negara.";
    }
    public function airterjun(){
        return "Air terjun bisa dikatakan sebagai aliran sungai yang jatuh dari titik tertinggi. 
        <br>Air terjun berasal dari air yang mengalir deras ke bawah dari ketinggian melalui formasi bebatuan pada badan sungai.";
    }

    public function jawatimur(){
        return "Jawa Timur adalah sebuah provinsi di bagian timur Pulau Jawa, Indonesia. 
        <br>Ibu kota Jawa Timur ialah kota Surabaya. 
        <br>Luas wilayahnya yakni 47.803,49 km², dengan jumlah penduduk sebanyak 40.665.696 jiwa dan kepadatan penduduk 851 jiwa/km².";
    }
    public function jawatengah(){
        return "Jawa Tengah adalah sebuah provinsi Indonesia yang terletak di bagian tengah Pulau Jawa. 
        <br>Ibu kotanya adalah Semarang. Provinsi ini berbatasan dengan Provinsi Jawa Barat di sebelah barat, 
        <br>Samudra Hindia dan Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di sebelah utara";
    }
    public function jawabarat(){
        return "Jawa Barat adalah sebuah provinsi di Indonesia, ibu kotanya berada di kota Bandung. 
        <br>Pada tahun 2020 penduduk provinsi Jawa Barat berjumlah 48.274.162 jiwa, dengan kepadatan 1.365 jiwa/km².";
    }
    
    public function news(){
        return 'Indeks berita terkini dan terbaru hari ini dari peristiwa, kecelakaan, kriminal, hukum, berita unik, Politik, dan liputan khusus di Indonesia
        <br><br><a href = "/virus-corona">Berita Terbaru Kasus Covid 19 di Indonesia</a>';
    }
    public function corona(){
        return "Seputar Kasus Virus Corona yang terjadi di Indonesia dan negara lain. 
        <br>Termasuk gejala, ciri ciri & pencegahan virus COVID-19 yang berasal dari Wuhan China";
    }
}
