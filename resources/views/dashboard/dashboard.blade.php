@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="row g-6">
    {{-- Logo Card --}}
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
      <div class="card h-100">
        <div class="d-flex align-items-end row">
          <div class="col-12">
            <div class="card-body text-nowrap">
              <h5 class="card-title text-primary mb-0">{{ __("Hello!") }} {{ explode(' ', trim($userData->name))[0] }} 🎉</h5>
              <div class="table-responsive text-nowrap">
              <table class="table mt-6">
                <tr>
                  <td colspan="2">{{ __('yourInfosHead2') }}</td>
                </tr>
                <tr>
                  <td>{{ __('name') }}</td>
                  <td>: <span>{{ $userData->name }}</span></td>
                </tr>
                <tr>
                  <td>{{ __('email') }}</td>
                  <td>: <span>{{ $userData->email }}</span></td>
                </tr>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- /Logo Card --}}
    {{-- Dil Seçimi --}}
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
      <div class="card h-100">
        <div class="card-body">
          <div class="row">
            <div class="col-2">
              <div class="badge p-2 bg-label-danger mb-3 rounded">
                <i class="icon-base ti tabler-language icon-28px"></i>
              </div>
            </div>
            <div class="col-10">
              <h5 class="card-title mb-1">{{ __('defaultLangs') }}</h5>
                <p class="text-heading mb-3 mt-1"></p>
                <div class="mt-6">
                  <label for="sourceLang" class="form-label">{{ __('chooseSourceLang') }}</label>
                  <select id="sourceLang" class="form-select form-select-lg">
                    <option>Dil Seçimi</option>
                    <option value="en" {{ $userData->source_lang == 'en' ? 'selected' : '' }}>English</option>
                    <option value="tr" {{ $userData->source_lang == 'tr' ? 'selected' : '' }}>Türkçe</option>
                    <option value="de" {{ $userData->source_lang == 'de' ? 'selected' : '' }}>Deutsch</option>
                    <option value="fr" {{ $userData->source_lang == 'fr' ? 'selected' : '' }}>Français</option>
                    <option value="es" {{ $userData->source_lang == 'es' ? 'selected' : '' }}>Español</option>
                    <option value="it" {{ $userData->source_lang == 'it' ? 'selected' : '' }}>Italiano</option>
                    <option value="ar" {{ $userData->source_lang == 'ar' ? 'selected' : '' }}>العربية</option>
                    <option value="ru" {{ $userData->source_lang == 'ru' ? 'selected' : '' }}>Русский</option>
                    <option value="zh" {{ $userData->source_lang == 'zh' ? 'selected' : '' }}>中文</option>
                    <option value="ja" {{ $userData->source_lang == 'ja' ? 'selected' : '' }}>日本語</option>
                  </select>
                  <label for="targetLang" class="form-label mt-3">{{ __('chooseTargetLang') }}</label>
                  <select id="targetLang" class="form-select form-select-lg">
                    <option>Dil Seçimi</option>
                    <option value="en" {{ $userData->target_lang == 'en' ? 'selected' : '' }}>English</option>
                    <option value="tr" {{ $userData->target_lang == 'tr' ? 'selected' : '' }}>Türkçe</option>
                    <option value="de" {{ $userData->target_lang == 'de' ? 'selected' : '' }}>Deutsch</option>
                    <option value="fr" {{ $userData->target_lang == 'fr' ? 'selected' : '' }}>Français</option>
                    <option value="es" {{ $userData->target_lang == 'es' ? 'selected' : '' }}>Español</option>
                    <option value="it" {{ $userData->target_lang == 'it' ? 'selected' : '' }}>Italiano</option>
                    <option value="ar" {{ $userData->target_lang == 'ar' ? 'selected' : '' }}>العربية</option>
                    <option value="ru" {{ $userData->target_lang == 'ru' ? 'selected' : '' }}>Русский</option>
                    <option value="zh" {{ $userData->target_lang == 'zh' ? 'selected' : '' }}>中文</option>
                    <option value="ja" {{ $userData->target_lang == 'ja' ? 'selected' : '' }}>日本語</option>
                  </select>
                  <button class="btn btn-primary btn-rounded mt-3">{{ __('save') }}</button>
                </div>
              </div>
            </div>
          </div>
          
          
      </div>
    </div>
    {{-- /Dil Seçimi --}}
    {{-- /Bilgiler --}}
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
      <div class="row g-6">
        {{-- Ses Kaydı --}}
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-2">
                  <div class="badge p-2 bg-label-danger mb-3 rounded">
                    <i class="icon-base ti tabler-wave-sine icon-28px"></i>
                  </div>
                </div>
                <div class="col-10">
                  <h5 class="card-title mb-1">{{ __('saveVoiceForClone') }}</h5>
                    <p class="text-heading mb-3 mt-1"></p>
                    <div class="mt-6">
                      <button id="startBtn" class="btn btn-xl rounded-pill btn-icon btn-primary waves-effect waves-light mt-3" style="width: 77px; height: 77px;">
                        <span class="icon-base ti tabler-microphone icon-22px"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              
              
          </div>
        </div>
        {{-- /Ses Kaydı --}}
        {{-- Ses Seçimi --}}
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-md mb-md-0 mb-5">
                  <div class="form-check custom-option custom-option-icon">
                    <label class="form-check-label custom-option-content" for="customRadioIcon1">
                      <span class="custom-option-body">
                        <i class="icon-base ti tabler-man"></i>
                        <span class="custom-option-title">Erkek Sesi</span>
                      </span>
                      <input name="customOptionRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon1" checked="">
                    </label>
                  </div>
                </div>
                <div class="col-md mb-md-0 mb-5">
                  <div class="form-check custom-option custom-option-icon">
                    <label class="form-check-label custom-option-content" for="customRadioIcon2">
                      <span class="custom-option-body">
                        <i class="icon-base ti tabler-woman"></i>
                        <span class="custom-option-title"> Kadın Sesi </span>
                      </span>
                      <input name="customOptionRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon2">
                    </label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-check custom-option custom-option-icon checked">
                    <label class="form-check-label custom-option-content" for="customRadioIcon3">
                      <span class="custom-option-body">
                        <i class="icon-base ti tabler-microphone"></i>
                        <span class="custom-option-title"> Kendi Sesiniz </span>
                      </span>
                      <input name="customOptionRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon3">
                    </label>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
        {{-- Ses Seçimi --}}



      </div>
    </div>
    {{-- /Others --}}
    

    
    
    
    

    


    
  </div> 

    
@endsection