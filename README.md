<p align="center">
   <img src="public/img/clone-voice-logo.png.png" alt="App Logo" width="200"/>
</p>

<h1 align="center">Breezavel</h1>

<p align="center">
  2204-A için hazırlanan ses klonlama ile çalışan bir dil çeviri uygulamasıdır<br>
  <strong>Modern • Temiz • Hafif</strong>
</p>

---

## ⚡️ Hedef

**CloneVoice**, ...

---

## 🚀 Özellikler

- ✅ ...

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
