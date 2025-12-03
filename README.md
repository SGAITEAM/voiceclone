<p align="center">
   <img src="public/assets/img/logo-mail.png" alt="App Logo" width="200"/>
</p>

<h1 align="center">Breezavel</h1>

<p align="center">
  Laravel 11 + Breeze tabanlı, hızlı proje başlangıç kiti<br>
  <strong>Modern • Temiz • Hafif</strong>
</p>

---

## ⚡️ Hedef

**Breezavel**, Laravel 11 ve Breeze (Blade) temelli sade ama genişletilebilir bir başlangıç yapısıdır. Vuexy arayüz entegrasyonu ile gelir; Auth sistemi hazırdır. Prototip ya da MVP hazırlamak isteyen geliştiriciler için idealdir.

---

## 🚀 Özellikler

- ✅ Laravel 11 tabanlı modern altyapı
- ✅ Breeze ile gelen hazır Auth sistemi (login/register/email)
- ✅ Vuexy Starter Template (Blade) entegre
- ✅ Responsive & mobil uyumlu admin arayüzü
- ✅ Blade ile geliştirmeye uygun layout yapısı
- ✅ Sıfır JavaScript bağımlılığı (Vue yok, Vite yok)
- ✅ Kullanıcı oluşturmak için hazır seeder
- ✅ Hızlı açılış için dummy dashboard görünümü

---

## ⚙️ Kurulum

### Gereksinimler

- PHP >= 8.2
- Composer
- MySQL
- Node.js + Yarn (veya npm)

### Kurulum Adımları

```bash
git clone https://github.com/ascanipek/breezavel.git
cd breezavel

composer install
cp .env.example .env
php artisan key:generate

# Veritabanı ayarlarını .env içinde yapın
php artisan migrate --seed
