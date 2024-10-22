<html lang="en" data-bs-theme="light"><head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Pricing example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/pricing/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  <style>._button_10caf_25{border-radius:8px;border:unset;cursor:pointer;transition:.3s}._button_10caf_25:disabled{opacity:.3;cursor:not-allowed}._button_default_10caf_35{background:transparent;color:#43434e}._button_default_10caf_35:hover{background:#f3f4f7}._button_default_10caf_35:active{background:#8e8e8e}._button_default_10caf_35 ._svg_10caf_45 *{fill:#43434e}._button_primary_10caf_48{background:#007eff;color:#fff}._button_primary_10caf_48:hover{background:#3398ff}._button_primary_10caf_48:active{background:#66b2ff}._button_primary_10caf_48 ._svg_10caf_45 *{fill:#fff}._button_link_10caf_61{background:transparent;color:#007eff}._button_link_10caf_61:hover{color:#3398ff}._button_link_10caf_61:active{color:#66b2ff}._button_link_10caf_61 ._svg_10caf_45 *{fill:#007eff}._button_link_10caf_61 ._svg_10caf_45 *:hover{fill:#3398ff}._button_link_10caf_61 ._svg_10caf_45 *:active{fill:#66b2ff}._button_large_10caf_80{padding:12px 16px}._button_large_10caf_80 *{font-size:16px}._button_medium_10caf_86{padding:8px 16px}._button_medium_10caf_86 *{font-size:16px}._button_small_10caf_92{padding:4px;min-height:24px}._button_small_10caf_92 *{font-size:12px}._flexBox_9xdww_14{flex-flow:unset}._gap_extraTiny_9xdww_18{gap:2px}._gap_tiny_9xdww_22{gap:4px}._gap_extraSmall_9xdww_26{gap:6px}._gap_small_9xdww_30{gap:8px}._gap_medium_9xdww_34{gap:16px}._gap_normal_9xdww_38{gap:24px}._gap_large_9xdww_42{gap:32px}._gap_xLarge_9xdww_46{gap:48px}._gap_xxLarge_9xdww_50{gap:56px}._gap_extraLarge_9xdww_54{gap:64px}._column_9xdww_58{flex-direction:column!important}._flexWrap_9xdww_62{flex-wrap:wrap}._popover_12uvb_1{position:fixed;padding:8px 10px;z-index:2147483647;background:#31363de6;border-radius:4px;color:#fff;font-size:14px}._buttons_12uvb_11{position:fixed;top:0;right:0;padding:8px;z-index:2147483647}._popup_hcu7e_1{position:fixed;z-index:2147483649;background:#ffffffe6;border-radius:4px;color:#000;font-size:14px;line-height:1.286;width:350px;-webkit-backdrop-filter:blur(2px);backdrop-filter:blur(2px);box-shadow:0 0 7px -5px #000}._popup_hcu7e_1:before{border-color:rgba(255,255,255,.9) transparent;border-width:0 7px 7px 7px;left:7px;top:-7px;border-style:solid;content:".";display:block;height:0;position:absolute;text-indent:-30000px;width:0}._color_hcu7e_27{width:20px;height:20px;cursor:pointer;flex-shrink:0}._styleContainer_hcu7e_34{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}._extraTiny_dg7lc_14{padding:2px}._extraTinyVR_dg7lc_18{padding-top:2px;padding-bottom:2px}._extraTinyHR_dg7lc_23{padding-left:2px;padding-right:2px}._extraTinyTop_dg7lc_28{padding-top:2px}._extraTinyRight_dg7lc_32{padding-right:2px}._extraTinyBottom_dg7lc_36{padding-bottom:2px}._extraTinyLeft_dg7lc_40{padding-left:2px}._tiny_dg7lc_44{padding:4px}._tinyVR_dg7lc_48{padding-top:4px;padding-bottom:4px}._tinyHR_dg7lc_53{padding-left:4px;padding-right:4px}._tinyTop_dg7lc_58{padding-top:4px}._tinyRight_dg7lc_62{padding-right:4px}._tinyBottom_dg7lc_66{padding-bottom:4px}._tinyLeft_dg7lc_70{padding-left:4px}._extraSmall_dg7lc_74{padding:6px}._extraSmallVR_dg7lc_78{padding-top:6px;padding-bottom:6px}._extraSmallHR_dg7lc_83{padding-left:6px;padding-right:6px}._extraSmallTop_dg7lc_88{padding-top:6px}._extraSmallRight_dg7lc_92{padding-right:6px}._extraSmallBottom_dg7lc_96{padding-bottom:6px}._extraSmallLeft_dg7lc_100{padding-left:6px}._small_dg7lc_104{padding:8px}._smallVR_dg7lc_108{padding-top:8px;padding-bottom:8px}._smallHR_dg7lc_113{padding-left:8px;padding-right:8px}._smallTop_dg7lc_118{padding-top:8px}._smallRight_dg7lc_122{padding-right:8px}._smallBottom_dg7lc_126{padding-bottom:8px}._smallLeft_dg7lc_130{padding-left:8px}._medium_dg7lc_134{padding:16px}._mediumVR_dg7lc_138{padding-top:16px;padding-bottom:16px}._mediumHR_dg7lc_143{padding-left:16px;padding-right:16px}._mediumTop_dg7lc_148{padding-top:16px}._mediumRight_dg7lc_152{padding-right:16px}._mediumBottom_dg7lc_156{padding-bottom:16px}._mediumLeft_dg7lc_160{padding-left:16px}._normal_dg7lc_164{padding:24px}._normalVR_dg7lc_168{padding-top:24px;padding-bottom:24px}._normalHR_dg7lc_173{padding-left:24px;padding-right:24px}._normalTop_dg7lc_178{padding-top:24px}._normalRight_dg7lc_182{padding-right:24px}._normalBottom_dg7lc_186{padding-bottom:24px}._normalLeft_dg7lc_190{padding-left:24px}._large_dg7lc_194{padding:32px}._largeVR_dg7lc_198{padding-top:32px;padding-bottom:32px}._largeHR_dg7lc_203{padding-left:32px;padding-right:32px}._largeTop_dg7lc_208{padding-top:32px}._largeRight_dg7lc_212{padding-right:32px}._largeBottom_dg7lc_216{padding-bottom:32px}._largeLeft_dg7lc_220{padding-left:32px}._xLarge_dg7lc_224{padding:48px}._xLargeVR_dg7lc_228{padding-top:48px;padding-bottom:48px}._xLargeHR_dg7lc_233{padding-left:48px;padding-right:48px}._xLargeTop_dg7lc_238{padding-top:48px}._xLargeRight_dg7lc_242{padding-right:48px}._xLargeBottom_dg7lc_246{padding-bottom:48px}._xLargeLeft_dg7lc_250{padding-left:48px}._xxLarge_dg7lc_254{padding:56px}._xxLargeVR_dg7lc_258{padding-top:56px;padding-bottom:56px}._xxLargeHR_dg7lc_263{padding-left:56px;padding-right:56px}._xxLargeTop_dg7lc_268{padding-top:56px}._xxLargeRight_dg7lc_272{padding-right:56px}._xxLargeBottom_dg7lc_276{padding-bottom:56px}._xxLargeLeft_dg7lc_280{padding-left:56px}._extraLarge_dg7lc_284{padding:64px}._extraLargeVR_dg7lc_288{padding-top:64px;padding-bottom:64px}._extraLargeHR_dg7lc_293{padding-left:64px;padding-right:64px}._extraLargeTop_dg7lc_298{padding-top:64px}._extraLargeRight_dg7lc_302{padding-right:64px}._extraLargeBottom_dg7lc_306{padding-bottom:64px}._extraLargeLeft_dg7lc_310{padding-left:64px}._size_tiny_ldink_23,._size_tiny_ldink_23 *{font-size:12px}._size_small_ldink_27,._size_small_ldink_27 *{font-size:16px}._size_medium_ldink_31,._size_medium_ldink_31 *{font-size:18px}._size_large_ldink_35,._size_large_ldink_35 *{font-size:32px}._weight_thin_ldink_39,._weight_thin_ldink_39 *{font-weight:100}._weight_extraLight_ldink_43,._weight_extraLight_ldink_43 *{font-weight:200}._weight_light_ldink_47,._weight_light_ldink_47 *{font-weight:300}._weight_normal_ldink_51,._weight_normal_ldink_51 *{font-weight:400}._weight_medium_ldink_55,._weight_medium_ldink_55 *{font-weight:500}._weight_semiBold_ldink_59,._weight_semiBold_ldink_59 *{font-weight:600}._weight_bold_ldink_63,._weight_bold_ldink_63 *{font-weight:700}._weight_extraBold_ldink_67,._weight_extraBold_ldink_67 *{font-weight:800}._lineHeight_ldink_71{line-height:100%}._secondary_ldink_75{color:#8e8e8e}._modal_ib2ay_25{position:fixed;top:0;left:0;width:100%;height:100%;display:flex;justify-content:center;align-items:center;z-index:2147483649}._modal_ib2ay_25 ._background_ib2ay_36{position:absolute;top:0;left:0;width:100%;height:100%;transition:.3s;opacity:0;overflow:auto;background-color:color-mix(in srgb,#000000 60%,white 0%);-webkit-backdrop-filter:blur(2px);backdrop-filter:blur(2px)}._modal_ib2ay_25 ._window_ib2ay_48{min-width:280px;max-width:560px;background:#fff;border-radius:6px;padding:16px;z-index:1;position:relative;opacity:0;transform:scale(.01);transition:.3s;display:flex;flex-direction:column;box-shadow:0 2px 6px 2px #00000026,0 1px 2px #0000004d;overflow:auto}._modal_ib2ay_25 ._window_ib2ay_48 ._loading_ib2ay_64{position:absolute;width:100%;height:100%;top:0;left:0;background:#000000b3}._modal_ib2ay_25 ._window_ib2ay_48 ._loading_ib2ay_64 img{width:100px}._modal_visible_ib2ay_76 ._background_ib2ay_36{opacity:1}._modal_visible_ib2ay_76 ._window_ib2ay_48{opacity:1;transform:scale(1)}._modal_hidden_ib2ay_83 ._background_ib2ay_36{opacity:0}._modal_hidden_ib2ay_83 ._window_ib2ay_48{opacity:0;transform:scale(.01)}._modal_hiddenDone_ib2ay_90 ._background_ib2ay_36{opacity:0}._modal_hiddenDone_ib2ay_90 ._window_ib2ay_48{opacity:0;transform:scale(.01)}._color_13dyv_1{padding:0 8px;border-radius:8px;width:100%;box-shadow:0 0 7px -5px #000;font-weight:800;flex-shrink:0}
</style></head>
  <body cz-shortcut-listen="true">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#sun-fill"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
  </symbol>
</svg>

<div class="container ">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Pricing example</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Features</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Enterprise</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Support</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="#">Pricing</a>
      </nav>
    </div>
    @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
                <a
                    href="{{  route('dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>

@yield('content')

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-body-secondary">© 2017–2024</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    

<div class="simple-copy-toast-container" data-color="black"><div class="toast"><div class="toast-item">copied!!</div></div></div></body><div></div></html>