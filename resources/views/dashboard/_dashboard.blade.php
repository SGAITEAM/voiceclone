@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="row g-6">
    {{-- Logo Card --}}
    <div class="col-xl-4 col-lg-4 col-md-3">
      <div class="card h-100">
        <div class="d-flex align-items-end row">
          <div class="col-7">
            <div class="card-body text-nowrap">
              <h5 class="card-title mb-0">Merhaba 🎉</h5>
              <h4 class="text-primary mb-1">{{ $userData->name }}</h4>
              <p class="mb-2">&nbsp;</p>
              <a href="javascript:;" class="btn btn-primary waves-effect waves-light"><i class="icon-base ti tabler-photo-edit icon-lg"></i> Logo Güncelle</a>
            </div>
          </div>
          <div class="col-5 text-center text-sm-left">
            <div class="card-body">
                <img class="img-fluid rounded user-profile user-profile-img" src="{{ $userData->logo }}" height="" alt="view sales">
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- /Logo Card --}}
    {{-- Statistics --}}
    <div class="col-xl-8 col-lg-8 col-md-12">
      <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
          <h5 class="card-title mb-0">Mutfak</h5>
          <small class="text-body-secondary">Son 24 Saate Ait Verilerdir</small>
        </div>
        <div class="card-body d-flex align-items-end">
          <div class="w-100">
            <div class="row gy-3">
              <div class="d-flex justify-content-between flex-wrap gap-4 me-12">
                <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                  <div class="avatar avatar-lg">
                    <div class="avatar-initial bg-label-secondary rounded">
                      <div class="text-secondary">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chef-hat">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M12 3c1.918 0 3.52 1.35 3.91 3.151a4 4 0 0 1 2.09 7.723l0 7.126h-12v-7.126a4 4 0 1 1 2.092 -7.723a4 4 0 0 1 3.908 -3.151z" />
                          <path d="M6.161 17.009l11.839 -.009" />
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="content-right">
                    <p class="mb-0 fw-medium">Ürünler</p>
                    <h4 class="text-secondary mb-0">{{ $countProd }}</h4>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-4">
                  <div class="avatar avatar-lg">
                    <div class="avatar-initial bg-label-secondary rounded">
                      <div class="text-secondary">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-color-swatch">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M19 3h-4a2 2 0 0 0 -2 2v12a4 4 0 0 0 8 0v-12a2 2 0 0 0 -2 -2" />
                          <path d="M13 7.35l-2 -2a2 2 0 0 0 -2.828 0l-2.828 2.828a2 2 0 0 0 0 2.828l9 9" />
                          <path d="M7.3 13h-2.3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h12" />
                          <path d="M17 17l0 .01" />
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="content-right">
                    <p class="mb-0 fw-medium">Kategori</p>
                    <h4 class="text-secondary mb-0">{{ $countCat }}</h4>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-4">
                  <div class="avatar avatar-lg">
                    <div class="avatar-initial bg-label-secondary rounded">
                      <div class="text-secondary">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="38"  height="38"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-coffee"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" /><path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" /><path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                          <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z" />
                          <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="content-right">
                    <p class="mb-0 fw-medium">Sipariş</p>
                    <h4 class="text-secondary mb-0">17</h4>
                    <script>// TODO: Düzenlenecek</script>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-4">
                  <div class="avatar avatar-lg">
                    <div class="avatar-initial bg-label-secondary rounded">
                      <div class="text-secondary">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-wallet">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                          <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="content-right">
                    <p class="mb-0 fw-medium">Gelir</p>
                    <h4 class="text-secondary mb-0">10.000 ₺</h4>
                    <script>// TODO: Düzenlenecek</script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    {{-- /Statistics --}}
    {{-- Bilgiler --}}
    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-3 col-sm-12">
      {{-- <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12"> --}}
        <div class="card mb-6">
          <div class="card-body">
            <p class="card-text text-uppercase text-body-secondary small mb-0">Bilgileriniz</p>
            <ul class="list-unstyled my-3 py-1">
              <li class="d-flex align-items-center mb-4"><i class="icon-base ti tabler-user icon-lg"></i><span class="fw-medium mx-2">İsim:</span> <span>{{ $userData->name }}</span></li>
              <li class="d-flex align-items-center mb-4"><i class="icon-base ti tabler-flag icon-lg"></i><span class="fw-medium mx-2">Marka:</span> <span>{{ $userData->brand ?? 'Marka' }}</span></li>
              <li class="d-flex align-items-center mb-2"><i class="icon-base ti tabler-language icon-lg"></i><span class="fw-medium mx-2">Dil:</span> <span>{{ $userData->lang ?? 'tr' }}</span></li>
              <li class="d-flex align-items-center mb-2"><i class="icon-base ti tabler-calendar icon-lg"></i><span class="fw-medium mx-2">Üyelik Tarihi:</span> <span>{{ $userData->date->format('d.m.Y') ?? 'date...' }}</span></li>
              <li class="d-flex align-items-center mb-2"><i class="icon-base ti tabler-calendar-repeat icon-lg"></i><span class="fw-medium mx-2">Yenileme Tarihi:</span> <span>{{ $userData->expire->format('d.m.Y') ?? 'expire date...' }}</span></li>

            </ul>
            <p class="card-text text-uppercase text-body-secondary small mb-0">İletişim</p>
            <ul class="list-unstyled my-3 py-1">
              <li class="d-flex align-items-center mb-4">
                <i class="icon-base ti tabler-phone-call icon-lg"></i><span class="fw-medium mx-2">Telefon:</span>
                <span>{{ $userData->phone }}</span>
              </li>
              <li class="d-flex align-items-center mb-4">
                <i class="icon-base ti tabler-mail icon-lg"></i><span class="fw-medium mx-2">Email:</span>
                <span>{{ $userData->email }}</span>
              </li>
            </ul>
            <p class="card-text text-uppercase text-body-secondary small mb-0">Abonelik</p>
            <ul class="list-unstyled mb-0 mt-3 pt-1">
              <li class="d-flex align-items-center mb-4"><i class="icon-base ti tabler-qrcode icon-lg"></i><span class="fw-medium mx-2">QR Menü:</span> <span class="{{ $userData->paid ? 'text-primary' : 'text-secondary' }}">{{ $userData->paid ?  __("premium") : __("freeTrail") }} (Kalan: {{ $userData->diff }} Gün)</span></li>
              <li class="d-flex align-items-center mb-4"><i class="icon-base ti tabler-device-mobile-star icon-lg"></i><span class="fw-medium mx-2">Garson Sipariş:</span> <span class="{{ $userData->is_order ? 'text-primary' : 'text-secondary' }}">{{ $userData->is_order ?  __("Aktif") : __("Aktif Değil") }}</span></li>
              <li class="d-flex align-items-center mb-4"><i class="icon-base ti tabler-paper-bag icon-lg"></i><span class="fw-medium mx-2">Paket Sipariş:</span> <span class="{{ $userData->can_order ? 'text-primary' : 'text-secondary' }}">{{ $userData->can_order ?  __("Aktif") : __("Aktif Değil") }}</span></li>
            </ul>
            <div class="d-grid gap-2 col-lg-6 mx-auto mb-2">
              <button type="button" class="btn rounded-pill btn-outline-primary waves-effect btn-sm">
                <span class="icon-xs icon-base ti tabler-star me-2"></span>Abonelik Yükselt
              </button>
            </div>
          </div>
        </div>
      {{-- </div> --}}
    </div>
    {{-- /Bilgiler --}}
    {{-- Others --}}
    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-3 col-sm-12">
      <div class="row g-6">
        <div class="col-3 col-xs-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="badge p-2 bg-label-danger mb-3 rounded">
                <i class="icon-base ti tabler-qrcode icon-28px"></i>
              </div>
              <h5 class="card-title mb-1">QR Kod</h5>
              <p class="card-subtitle">Menü QR Kodunuz</p>
              <p class="text-heading mb-3 mt-1"></p>
              <div class="mt-6">
                <a href="#" class="btn btn-sm btn-primary waves-effect waves-light rounded-pill">Görüntüle / İndir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 col-xs-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="badge p-2 bg-label-danger mb-3 rounded">
                <i class="icon-base ti tabler-layout-sidebar-inactive icon-28px"></i>
              </div>
              <h5 class="card-title mb-1">Menü</h5>
              <p class="card-subtitle">Web Görünümü</p>
              <p class="text-heading mb-3 mt-1"></p>
              <div class="mt-6">
                <a href="#" class="btn btn-sm btn-primary waves-effect waves-light rounded-pill">Menüye Git</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-xs-12">
          <div class="card">
            <div class="card-body d-flex justify-content-between">
              <div class="d-flex flex-column">
                <div class="card-title mb-auto">
                  <h5 class="mb-2 text-nowrap">Gelir</h5>
                  <p class="mb-0">Haftalık Rapor</p>
                </div>
                <div class="chart-statistics">
                  <h3 class="card-title mb-1">40,673 ₺</h3>
                  <span class="badge bg-label-success">% +15.2</span>
                </div>
              </div>
              <div id="revenueGrowth" style="min-height: 162px;"></div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
              <div class="card-title m-0">
                <h5 class="mb-1">Hızlı Erişim</h5>
                {{-- <p class="card-subtitle">Önemli Özelliklere Hızlı Erişim Sağlayabilirsiniz</p> --}}
              </div>
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs widget-nav-tabs gap-4 mx-1 d-flex flex-nowrap align-items-center justify-content-center" role="tablist">
                <li class="nav-item" role="presentation">
                  <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id" aria-controls="navs-orders-id" aria-selected="true">
                    <div class="badge bg-label-secondary rounded p-2">
                      <i class="icon-base ti tabler-world-bolt icon-md"></i>
                    </div>
                    <h6 class="tab-widget-title mb-0 mt-2">Çoklu Dil</h6>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id" aria-controls="navs-sales-id" aria-selected="false" tabindex="-1">
                    <div class="badge bg-label-secondary rounded p-2">
                      <i class="icon-base ti tabler-heart-discount icon-md"></i>
                    </div>
                    <h6 class="tab-widget-title mb-0 mt-2">Kampanyalar</h6>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id" aria-controls="navs-profit-id" aria-selected="false" tabindex="-1">
                    <div class="badge bg-label-secondary rounded p-2">
                      <i class="icon-base ti tabler-chef-hat icon-md"></i>
                    </div>
                    <h6 class="tab-widget-title mb-0 mt-2">Ürünler</h6>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id" aria-controls="navs-income-id" aria-selected="false" tabindex="-1">
                    <div class="badge bg-label-secondary rounded p-2">
                      <i class="icon-base ti tabler-color-swatch icon-md"></i>
                    </div>
                    <h6 class="tab-widget-title mb-0 mt-2">Kategoriler</h6>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id" aria-controls="navs-income-id" aria-selected="false" tabindex="-1">
                    <div class="badge bg-label-secondary rounded p-2">
                      <i class="icon-base ti tabler-bubble-text icon-md"></i>
                    </div>
                    <h6 class="tab-widget-title mb-0 mt-2">Yorumlar</h6>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id" aria-controls="navs-income-id" aria-selected="false" tabindex="-1">
                    <div class="badge bg-label-secondary rounded p-2">
                      <i class="icon-base ti tabler-folders icon-md"></i>
                    </div>
                    <h6 class="tab-widget-title mb-0 mt-2">Çoklu Menü</h6>
                  </a>
                </li>
                
              </ul>
              
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card p-0">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0">
              <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                <span class="card-title lh-lg px-md-12 h4 text-heading">
                  Kullanım <span class="text-primary text-nowrap">Videoları</span>
                </span>
                  <a href="#" class="btn btn-text-secondary waves-effect">
                    Dilerseniz video eğitim içeriklerimizden yararlanarak uygulamayı daha iyi anlayabilir ve kullanabilirsiniz.
                  </a>
              </div>
              <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
                <img src="../../assets/img/illustrations/pencil-rocket.png" alt="pencil rocket" height="100" class="scaleX-n1-rtl">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- /Others --}}
    

    
    
    
    

    


    
  </div> 

    
@endsection