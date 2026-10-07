<style>
    /* ============================================
       REEMPLAZO DE AMARILLO POR AZUL #bcd1e6
       ============================================ */

    /* ========== FUENTES (sin cambios) ========== */
    @font-face {
        font-family: MyriadPro;
        src: url(../fonts/MyriadPro-Regular.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: MyriadProb;
        src: url(../fonts/MyriadProBold.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: MyriadPro;
        src: url(../fonts/MyriadPro.ttf);
        font-weight: normal;
    }
    @font-face {
        font-family: Narrow;
        src: url(../fonts/Narrow.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Verdana;
        src: url(../fonts/verdana.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Verdanab;
        src: url(../fonts/verdanab.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Verdanabi;
        src: url(../fonts/verdanabi.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Verdanai;
        src: url(../fonts/verdanai.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Verdanal;
        src: url(../fonts/verdanal.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moriston;
        src: url(../fonts/Moriston.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moristonl;
        src: url(../fonts/Moristonl.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moristonb;
        src: url(../fonts/Moristonbd.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: elmessiri;
        src: url(../fonts/elmessiri.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Raleway;
        src: url(../fonts/Raleway.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Ralewaym;
        src: url(../fonts/Ralewaym.ttf);
        font-weight: normal;
        font-style: normal;
    }

    /* ========== BASE ========== */
    body {
        color: #797979;
        background: #f5f8fc;
        font-family: verdana;
        padding: 0px !important;
        margin: 0px !important;
        font-size: 13px;
        line-height: 2.8rem;
    }

    a, a:hover, a:focus, button, input, textarea, select {
        text-decoration: none;
        outline: none;
        resize: none;
        outline: none !important;
        outline-width: 0 !important;
        box-shadow: none !important;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }

    .loader {
        position: relative;
        text-align: center;
        width: 75%;
        height: 75%;
        z-index: 9999;
        background: url('../imagine/carga6.gif') 100% 100% no-repeat transparent;
    }
    .load {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('../imagine/carga6.gif') 50% 50% no-repeat #ffffff;
    }

    /* ========== BOTONES AZULES ========== */
    .btn-theme:hover,
    .btn-theme:focus,
    .btn-theme:active,
    .btn-theme.active,
    .open .dropdown-toggle.btn-theme {
        color: #1a3a5a;
        background-color: #bcd1e6;
        border-color: #8aacc9;
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #797979;
    }

    .centered { text-align: center; }
    .goleft { text-align: left; }
    .goright { text-align: right; }
    .no-padding { padding: 0 !important; }
    .no-margin { margin: 0 !important; }

    .label-theme {
        background-color: #bcd1e6;
    }
    .bg-theme {
        background-color: #bcd1e6;
    }
    .top-menu {
        margin-top: 1.5em;
    }
    ul.top-menu > li > .logout {
        color: #2f323a;
        font-family: verdana;
        font-size: 22px;
        border-radius: 0 !important;
        -webkit-border-radius: 4px;
        border: 1px solid #bcd1e6 !important;
        padding: 6px;
        padding-top: 2px !important;
        padding-bottom: 2px !important;
        background: #bcd1e6;
        transition: all 0.5s ease;
        margin-right: -4px;
    }

    ul.top-menu > li > .logout {
        color: #2f323a;
        font-family: verdana;
        font-size: 22px;
        border-radius: 0 !important;
        -webkit-border-radius: 4px;
        border: 1px solid #ebf9b9 !important;
        padding: 6px;
        padding-top: 2px !important;
        padding-bottom: 2px !important;
        background: #e0f5d6;
        transition: all 0.5s ease;
        margin-right: -4px;
    }
    .mail-info, .mail-info:hover {
        margin: -3px 6px 0 0;
        font-size: 11px;
    }

    #main-content {
        margin-left: 210px;
    }

    .header, .footer {
        min-height: 60px;
        padding: 0 15px;
    }
    .header {
        position: fixed;
        left: 0;
        right: 0;
        z-index: 1002;
    }
    .black-bg {
        background: #22242a;
        border-bottom: 1px solid #393d46;
        z-index: 3 !important;
    }

    .wrapper {
        display: inline-block;
        margin-top: 60px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        padding-top: 0px;
        width: 100%;
    }

    a.logo {
        font-family: narrow;
        font-size: 20px;
        letter-spacing: 1px;
        color: #f2f2f2;
        float: left;
        margin-top: 15px;
    }
    a.logo b {
        font-weight: 900;
    }
    a.logo:hover, a.logo:focus {
        text-decoration: none;
        outline: none;
    }
    a.logo span {
        color: #6a8fbf;
    }

    .notify-row {
        float: left;
        margin-left: 92px;
        color: #ffffff;
        font-family: verdana;
        font-size: 20px;
        display: block !important;
        margin-top: 0.7em;
    }

    ul.top-menu > li > a {
        color: #666666;
        font-size: 16px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        border: 1px solid #666666 !important;
        padding: 2px 6px;
        margin-right: 15px;
    }
    ul.top-menu > li > a:hover,
    ul.top-menu > li > a:focus {
        border: 1px solid #b6b6b6 !important;
        background-color: transparent !important;
        border-color: #b6b6b6 !important;
        text-decoration: none;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        color: #b6b6b6 !important;
    }


    .contact-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin: 15px 0;
    }
    .contact-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin: 15px 0;
    }

    #copyrights {
        background: #222222;
        padding: 20px 0;
        text-align: center;
    }
    #copyrights p {
        margin-bottom: 5px;
        color: #fff;
    }
    #copyrights a {
        color: #fff;
    }

    #piezas {
        font-family: verdana;
        font-size: 14px;
        padding: 0.4em;
        background: #22242a;
    }

    .toggle-custom {
        position: absolute !important;
        top: 0;
        right: 0;
        background: #ffffff !important;
    }
    .toggle-custom[aria-expanded='true'] .glyphicon-plus:before {
        content: "\2212";
    }

    #td {
        font-size: 13px;
        padding: 4px;
    }

    table {
        table-layout: fixed;
    }

    .titulo {
        background: #e8eff7 !important;
        font-family: verdanab;
        color: #000000 !important;
        font-size: 13px;
        line-height: 2.8rem;
        opacity: 0.7 !important;
    }
    .titulo2 {
        background: #f2f2f2 !important;
        font-family: verdanab;
        color: #000000 !important;
        font-size: 13px;
        line-height: 2.8rem;
        opacity: 0.7 !important;
    }

    .N {
        color: #000000;
        font-size: 13px;
    }

    .enlace:link, .enlace:visited {
        font-size: 13px;
        color: #333333 !important;
        font-family: verdanab;
        transition: font-family 1s, opacity 0.6s linear;
    }
    .enlace:hover, .enlaces:active {
        color: #000000;
        transition: font-family 1s, opacity 0.6s linear;
    }

    .glyphicon-plus {
        color: #333333;
        font-size: 16px;
    }

    .fa-paperclip {
        font-size: 24px !important;
    }
    .fa-cloud-upload {
        background: transparent !important;
        color: #333333;
        border: 0;
        margin: 0 !important;
        padding: 0 !important;
        font-size: 24px !important;
        padding-top: 1em;
        text-decoration: none !important;
    }

    .controles {
        min-height: 30px;
        max-width: 50px;
        margin-top: 10px;
    }
    .controles-inner,
    .controles-inner:after,
    .controles-inner:before {
        background-color: #333333;
        position: absolute;
        width: 20px;
        height: 2px;
        border-radius: 5px;
        content: '';
        transition-timing-function: ease;
        transition-duration: .2s;
        transition-property: opacity, -webkit-transform;
        transition-property: transform, opacity;
        transition-property: transform, opacity, -webkit-transform;
    }
    .controles-inner:before {
        top: 6px;
    }
    .controles-inner:after {
        top: 12px;
    }
    .controles.open .controles-inner {
        -webkit-transform: translate3d(0, 6px, 0) rotate(45deg);
        transform: translate3d(0, 6px, 0) rotate(45deg);
    }
    .controles.open .controles-inner:after {
        -webkit-transform: translate3d(0, -12px, 0) rotate(-90deg);
        transform: translate3d(0, -12px, 0) rotate(-90deg);
    }
    .controles.open .controles-inner:before {
        -webkit-transform: translate3d(0, -12px, 0) rotate(90deg);
        transform: translate3d(0, -12px, 0) rotate(90deg);
        opacity: 0;
    }

    .fullscreen-modal .modal-dialog {
        margin: 0;
        margin-right: auto;
        margin-left: auto;
        width: 97%;
        height: 97%;
        text-align: center;
    }

    .container-fluid {
        right: 0;
        bottom: 0 !important;
    }

    .etiqueta {
        font-size: 13px;
        font-family: verdanab;
        display: none;
    }
    .etiqueta2 {
        font-size: 13px !important;
        font-family: verdanab;
    }

    #nav-accordion {
        margin-top: 4.8em !important;
        margin-left: -0.5em !important;
        padding: 0.2em;
        opacity: 0.9;
        background: -webkit-linear-gradient(to right, #4f5463, #6a8fbf);
        background: linear-gradient(to right, #4f5463, #17181c);
    }

    .gradiente {
        background: -webkit-linear-gradient(to right, #e8eff7, #d5e4f0);
        background: linear-gradient(to right, #e8eff7, #d5e4f0);
    }

    .nav {
        text-align: left;
    }

    .fa-angle-up {
        font-size: 50px;
        color: #000000;
        opacity: 0.5;
        text-align: center;
    }

    nav {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        text-align: center;
    }

    .lista th {
        background: -webkit-linear-gradient(to top, #4f5463, #6a8fbf);
        background: linear-gradient(to top, #4f5463, #17181c);
        color: #ffffff;
        font-family: Verdanab;
        font-size: 14px;
        width: 100%;
        text-align: center;
        padding: 0.6em !important;
        border: 1px solid #71788e !important;
    }
    .lista td {
        background: transparent;
        color: #333333;
        margin-top: 2em;
        border: 1px solid #71788e !important;
        height: 5em;
    }

    #borderout {
        background: transparent !important;
        border: 0 !important;
    }
    #borderout2 {
        background: transparent !important;
        border: 0 !important;
        width: 20% !important;
    }

    .eliminar-obs-seg,
    .delete,
    .delete2 {
        width: 7em;
        height: 36px;
        font-family: verdanab;
        background: #ffffff;
        color: #666666;
        border: 1px solid #71788e;
        font-size: 14px;
        border-radius: 0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .eliminar-obs-seg:hover,
    .delete:hover,
    .delete2:hover {
        color: #ff8080;
        background: #ffffff;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }

    .nuevo {
        width: 10em;
        height: 36px;
        padding: 0 !important;
        margin: 0 !important;
        font-family: Moristonb;
        background: transparent;
        color: #666666;
        border: 1px solid #6a8fbf;
        font-size: 14px;
        border-radius: 0 !important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo:hover, .submit:hover {
        color: #1a3a5a;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }

    #tdbd {
        padding: 1em;
        color: #000000;
        padding-right: 0;
        text-align: left !important;
        font-family: Moristonb;
        color: #666666;
    }

    #btn2 {
        width: 36px;
        height: 36px;
        color: #666666;
        border: 1px solid #71788e;
        background: #eaeaea;
        font-size: 18px;
        border-radius: 0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #btn2:hover, .submit:hover {
        border: 1px solid #000000;
        font-size: 18px;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }

    #search,
    #search2 {
        height: 36px;
        width: 16.5em;
        padding-top: 1px;
        border: 1px solid #71788e !important;
        background: transparent !important;
        border-bottom-color: #ccc;
        transition: 0.4s;
        margin: 0 !important;
        border-radius: 0;
        padding: 4px;
        padding-left: 40px;
        font-family: verdana !important;
    }
    #search:focus,
    #search2:focus {
        padding-top: 1px;
        transition: 0.4s;
        padding: 4px;
        padding-left: 40px;
        border: 2px solid #6a8fbf;
        background: #f1f2f4;
    }
    #search ~ .focus-border {
        position: absolute;
        height: 36px;
        right: 0;
        width: 0;
        transition: 0.5s;
        margin-right: 2px;
    }
    #search:focus ~ .focus-border {
        float: left !important;
        margin-right: -0.4px;
        width: 14em;
        transition: 0.4s;
        border: 2px solid #6a8fbf;
    }

    .col-22 {
        width: 229px;
        position: relative;
    }

    #label {
        position: absolute;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;
        font-size: 18px;
    }

    #titulo_empresa {
        font-size: 24px;
        font-family: verdanab;
        color: #666666;
        text-align: center;
    }
    #captura {
        font-size: 28px;
        font-family: verdanab;
        color: #666666;
        text-align: center;
    }
    #nregistro {
        float: left;
        margin-top: 1em;
    }
    .table {
        background:transparent!important;
        table-layout: fixed;
        border:0;
        color: #000000;
        width: auto !important;
        border-collapse: collapse;
        font-family:Verdana;
        overflow: hidden;
    }
    /* Encabezados principales - degradado VERTICAL en verde */
    .table th {
        color: #ffffff !important;
        text-align: center;
        padding: 0.6em !important;
        border: 1px solid #d4d4d4 !important;
        font-family:Verdanab;
        font-size: 13px;
        letter-spacing: 0.3px;
    }
    /* Celdas de datos */
    .table td {
        color: #1e2a41;
        padding: 10px 8px;
        border:0;
        vertical-align: middle;
        text-align: left;
        font-size: 12px;
    }
    @media (max-width: 768px) {
        .table {
            font-size: 10px;
        }
        .table thead th,
        .table td {
            padding: 6px 4px;
        }
    }

    /* ================================================================
       TABLA .table1 - ENCABEZADOS AZULES
       ================================================================ */
    .table1 {
        table-layout: fixed;
        border: hidden !important;
        color: #000000;
        width: auto !important;
        border-collapse: collapse;
        font-family: Verdana;
        border-radius: 12px 12px 0 0 !important;
        overflow: hidden;
    }
    .table1 th {
        background: linear-gradient(to bottom, #bcd1e6, #8aacc9) !important;
        color: #1a2a4a !important;
        text-align: center;
        padding: 0.6em !important;
        border: 1px solid #d4d4d4 !important;
        font-family: Verdanab;
        font-size: 13px;
        letter-spacing: 0.3px;
    }
    .table1 thead tr:first-child th:first-child {
        border-top-left-radius: 12px !important;
    }
    .table1 thead tr:first-child th:last-child {
        border-top-right-radius: 12px !important;
    }
    .table1 thead td {
        background: #d5e4f0 !important;
        color: #000000 !important;
        font-weight: bold;
        text-align: center;
        padding: 0.4em 2px !important;
        border: 1px solid #d4d4d4 !important;
        font-size: 10px;
        font-family: verdanab;
    }
    .table1 tr[style*="background:#2f74b5"] td {
        background: linear-gradient(to bottom, #bcd1e6, #8aacc9) !important;
        color: #1a2a4a !important;
        font-weight: 700;
        font-size: 14px;
        padding: 0.6em 12px !important;
        border: 1px solid #d4d4d4 !important;
        letter-spacing: 0.5px;
    }
    .table1 td {
        text-align: left;
        padding: 1em;
        border: 1px solid #d4d4d4 !important;
        vertical-align: middle !important;
        background-color: #fdfdfd;
    }
    .table1 tbody td:nth-child(1),
    .table1 tbody tr:nth-child(even) td:nth-child(1),
    .table1 tbody td:nth-child(1) * {
        background-color: transparent !important;
        background: transparent !important;
    }
    .table1 tbody td:nth-child(2),
    .table1 tbody tr:nth-child(even) td:nth-child(2),
    .table1 tbody td:nth-child(2) * {
        background-color: transparent !important;
        background: transparent !important;
    }
    .table1 tbody tr:nth-child(even) td:not(:nth-child(1)):not(:nth-child(2)) {
        background-color: #f0f5fa;
    }
    .table1 .glyphicon-plus {
        color: #1a2a4a !important;
        background: rgba(188, 209, 230, 0.4);
        padding: 4px 8px;
        border-radius: 20px;
        font-size: 14px;
        transition: 0.2s;
    }
    .table1 span[id^="porcentaje_"] {
        background: rgba(188, 209, 230, 0.5);
        padding: 2px 10px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 13px;
        margin-left: 10px;
    }
    .table1 td:nth-last-child(-n+3) {
        text-align: center;
        font-weight: 600;
        background-color: #e8eff7;
    }
    .table1 .fa,
    .table1 .fas,
    .table1 .far,
    .table1 .fab,
    .table1 .glyphicon {
        background: transparent !important;
        background-color: transparent !important;
    }
    .table1 button,
    .table1 .btn,
    .table1 .X1 {
        background: transparent !important;
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }


    /* ================================================================
       TABLA .table1 - ENCABEZADOS AZULES OSCUROS
       ================================================================ */
    .table1 {
        table-layout: fixed;
        border: hidden !important;
        color: #000000;
        width: auto !important;
        border-collapse: collapse;
        font-family: Verdana;
        border-radius: 12px 12px 0 0 !important;
        overflow: hidden;
    }
    .table1 th {
        background: linear-gradient(to bottom, #8aacc9, #6a8fbf) !important;
        color: #1a2a4a !important;
        text-align: center;
        padding: 0.6em !important;
        border: 1px solid #d4d4d4 !important;
        font-family: Verdanab;
        font-size: 13px;
        letter-spacing: 0.3px;
    }
    .table1 thead tr:first-child th:first-child {
        border-top-left-radius: 12px !important;
    }
    .table1 thead tr:first-child th:last-child {
        border-top-right-radius: 12px !important;
    }
    .table1 thead td {
        background: #c9dcec !important;
        color: #000000 !important;
        font-weight: bold;
        text-align: center;
        padding: 0.4em 2px !important;
        border: 1px solid #d4d4d4 !important;
        font-size: 10px;
        font-family: verdanab;
    }
    .table1 tr[style*="background:#2f74b5"] td {
        background: linear-gradient(to bottom, #8aacc9, #6a8fbf) !important;
        color: #1a2a4a !important;
        font-weight: 700;
        font-size: 14px;
        padding: 0.6em 12px !important;
        border: 1px solid #d4d4d4 !important;
        letter-spacing: 0.5px;
    }
    .table1 td {
        text-align: left;
        padding: 1em;
        border: 1px solid #d4d4d4 !important;
        vertical-align: middle !important;
        background-color: #fdfdfd;
    }
    .table1 tbody td:nth-child(1),
    .table1 tbody tr:nth-child(even) td:nth-child(1),
    .table1 tbody td:nth-child(1) * {
        background-color: transparent !important;
        background: transparent !important;
    }
    .table1 tbody td:nth-child(2),
    .table1 tbody tr:nth-child(even) td:nth-child(2),
    .table1 tbody td:nth-child(2) * {
        background-color: transparent !important;
        background: transparent !important;
    }
    .table1 tbody tr:nth-child(even) td:not(:nth-child(1)):not(:nth-child(2)) {
        background-color: #e8eff7;
    }
    .table1 .glyphicon-plus {
        color: #1a2a4a !important;
        background: rgba(106, 143, 191, 0.3);
        padding: 4px 8px;
        border-radius: 20px;
        font-size: 14px;
        transition: 0.2s;
    }
    .table1 span[id^="porcentaje_"] {
        background: rgba(106, 143, 191, 0.3);
        padding: 2px 10px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 13px;
        margin-left: 10px;
    }
    .table1 td:nth-last-child(-n+3) {
        text-align: center;
        font-weight: 600;
        background-color: #e8eff7;
    }
    .table1 .fa,
    .table1 .fas,
    .table1 .far,
    .table1 .fab,
    .table1 .glyphicon {
        background: transparent !important;
        background-color: transparent !important;
    }
    .table1 button,
    .table1 .btn,
    .table1 .X1 {
        background: transparent !important;
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }

    /* ================================================================
       TABLA .table2 - ENCABEZADOS AZULES OSCUROS
       ================================================================ */
    .table2 {
        table-layout: fixed;
        border: hidden !important;
        color: #000000;
        width: auto !important;
        border-collapse: collapse;
        font-family: Verdana;
        border-radius: 12px 12px 0 0 !important;
        overflow: hidden;
    }
    .table2 th {
        background: linear-gradient(to bottom, #8aacc9, #6a8fbf) !important;
        color: #1a2a4a !important;
        text-align: center;
        padding: 0.6em !important;
        border: 1px solid #d4d4d4 !important;
        font-family: Verdanab;
        font-size: 13px;
        letter-spacing: 0.3px;
    }
    .table2 thead th {
        background: linear-gradient(to bottom, #8aacc9, #6a8fbf);
        color: #1a2a4a;
        font-weight: 600;
        text-align: center;
        padding: 10px 6px;
        border: 1px solid #5a7faf;
        font-size: 11px;
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }
    .table2 thead td {
        background: linear-gradient(to bottom, #c9dcec, #b8d0e4);
        color: #1a2a4a;
        font-family:verdanab;
        text-align: center;
        padding: 6px 2px;
        border: 1px solid #8aacc9;
        font-size: 10px;
    }
    .table2 tr[style*="background:#2f74b5"] td {
        background: linear-gradient(to bottom, #8aacc9, #6a8fbf);
        color: #ffffff !important;
        font-size: 14px;
        padding: 10px 12px;
        border: 1px solid #5a7faf;
        letter-spacing: 0.5px;
    }
    .table2 td {
        background-color: #fdfdfd;
        color: #1e2a41;
        padding: 10px 8px;
        border: 1px solid #b8d0e4;
        vertical-align: middle;
        text-align: left;
        font-size: 12px;
    }
    .table2 tbody tr:nth-child(even) td {
        background-color: #e8eff7;
    }
    .table2 .glyphicon-plus {
        color: #ffffff !important;
        background: rgba(255, 255, 255, 0.2);
        padding: 4px 8px;
        border-radius: 20px;
        font-size: 14px;
        transition: 0.2s;
    }
    .table2 .glyphicon-plus:hover {
        background: rgba(255, 255, 255, 0.4);
        transform: scale(1.1);
    }
    .table2 span[id^="porcentaje_"] {
        background: rgba(255, 255, 255, 0.2);
        padding: 2px 10px;
        border-radius: 30px;
        font-size: 13px;
        margin-left: 10px;
    }
    .table2 td:nth-last-child(-n+3) {
        text-align: center;
        background-color: #e8eff7;
    }
    @media (max-width: 768px) {
        .table2 {
            font-size: 10px;
        }
        .table2 th,
        .table2 td {
            padding: 6px 4px;
        }
        .table2 tr[style*="background:#2f74b5"] td {
            font-size: 12px;
        }
    }
    .definicion td {
        text-align: center !important;
    }

    .task-item {
        font-size: 13px !important;
        font-family: verdanab;
        color: #333333;
        background: transparent;
        margin: 0;
        border: 0;
        transition: font-size 0.6s linear;
    }
    .task-item:hover, .submit:hover {
        font-size: 13px;
        transition: font-size 0.6s linear;
    }

    #boton_mediciones,
    #boton_grupo,
    #boton_controles,
    #boton_controles2,
    #boton_R_recursos,
    #boton_R_formacion,
    #boton_recursos,
    #boton_recursos_formacion,
    #boton_elementos,
    #boton_indicadores,
    #boton_V,
    #boton_A,
    #boton_H,
    #boton_I,
    #boton_P,
    #boton_edit_P,
    #boton_admin,
    #boton {
        transform-style: preserve-3d;
        border-radius: 0;
        background: #000000;
        color: #ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top: 2em;
    }
    #boton_mediciones:hover,
    #boton_grupo:hover,
    #boton_controles:hover,
    #boton_controles2:hover,
    #boton_R_recursos:hover,
    #boton_R_formacion:hover,
    #boton_recursos:hover,
    #boton_recursos_formacion:hover,
    #boton_elementos:hover,
    #boton_indicadores:hover,
    #boton_edit_V:hover,
    #boton_edit_A:hover,
    #boton_edit_H:hover,
    #boton_edit_I:hover,
    #boton_edit_P:hover,
    #boton_admin:hover,
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%) !important;
        background: #d5e4f0 !important;
        color: #000000 !important;
        transition: background 0.6s, opacity 0.6s linear;
    }

    #tasks2 td,
    #tasks td {
        font-family: verdana;
        font-size: 14px;
        padding: 0.8em;
    }

    /* ========== HEXÁGONOS ========== */
    #container {
        width: 700px;
        height: 100%;
        position: relative;
        left: 50%;
        margin-left: -350px;
    }
    .hex {
        width: 150px;
        height: 86px;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        -webkit-background-size: auto 173px;
        -moz-background-size: auto 173px;
        -ms-background-size: auto 173px;
        -o-background-size: auto 173px;
        position: relative;
        float: left;
        margin: 25px 5px;
        text-align: center;
        zoom: 1;
    }
    .hex.hex-gap {
        margin-left: 86px;
    }
    .hex .corner-1,
    .hex .corner-2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: inherit;
        z-index: -2;
        overflow: hidden;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .hex .corner-1 {
        z-index: -1;
        -webkit-transform: rotate(60deg);
        -moz-transform: rotate(60deg);
        -ms-transform: rotate(60deg);
        -o-transform: rotate(60deg);
        transform: rotate(60deg);
    }
    .hex .corner-2 {
        -webkit-transform: rotate(-60deg);
        -moz-transform: rotate(-60deg);
        -ms-transform: rotate(-60deg);
        -o-transform: rotate(-60deg);
        transform: rotate(-60deg);
    }
    .hex .corner-1:before,
    .hex .corner-2:before {
        width: 173px;
        height: 173px;
        content: '';
        position: absolute;
        background: inherit;
        top: 0;
        left: 0;
        z-index: 1;
        background: inherit;
        background-repeat: no-repeat;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .hex .corner-1:before {
        -webkit-transform: rotate(-60deg) translate(-87px, 0px);
        -moz-transform: rotate(-60deg) translate(-87px, 0px);
        -ms-transform: rotate(-60deg) translate(-87px, 0px);
        -o-transform: rotate(-60deg) translate(-87px, 0px);
        transform: rotate(-60deg) translate(-87px, 0px);
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        transform-origin: 0 0;
    }
    .hex .corner-2:before {
        -webkit-transform: rotate(60deg) translate(-48px, -11px);
        -moz-transform: rotate(60deg) translate(-48px, -11px);
        -ms-transform: rotate(60deg) translate(-48px, -11px);
        -o-transform: rotate(60deg) translate(-48px, -11px);
        transform: rotate(60deg) translate(-48px, -11px);
        bottom: 0;
    }
    .hex .inner {
        color: #000000;
    }
    .hex h4 {
        font-family: verdana;
        margin: 0;
    }
    .hex hr {
        border: 0;
        border-top: 1px solid #eee;
        width: 60%;
    }
    .hex p {
        font-size: 16px;
        font-family: 'Kotta One', serif;
        width: 80%;
        margin: 0 auto;
    }

    .es {
        margin-top: 3.6em !important;
        margin-left: 2em !important;
        color: #ffffff !important;
    }

    #fixed {
        position: fixed;
        z-index: -1 !important;
        margin: 0 !important;
        padding: 0 !important;
        height: 100%;
    }
    #fixed img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    /* ========== RESPONSIVE ========== */
    @media screen and (max-width: 600px) {
        #container {
            width: 540px !important;
            height: auto !important;
            left: 0% !important;
            margin-left: 0px !important;
        }
        .hex-gap6 {
            margin-left: 86px !important;
        }
        .hex-gap8 {
            margin-left: 6px !important;
        }
    }

    @media screen and (max-width: 480px) {
        #container {
            width: 400px !important;
            height: auto !important;
            left: 0% !important;
            margin-left: 0px !important;
        }
        .hex-gap4 {
            margin-left: 86px !important;
        }
        .hex-gap6 {
            margin-left: 0px !important;
        }
        .hex-gap7 {
            margin-left: 86px !important;
        }
        .hex-gap8 {
            margin-left: 6px !important;
        }
        .hex-gap10 {
            margin-left: 86px !important;
        }
        .collapse {
            margin-top: 0 !important;
        }
        .fullscreen-modal .modal-dialog {
            width: 100% !important;
        }
        .etiqueta {
            display: inline !important;
        }
        #costumModal1 .modal-lg,
        #costumModal2 .modal-lg,
        #costumModal3 .modal-lg,
        #costumModal5 .modal-m,
        #costumModal6 .modal-m,
        #costumModal7 .modal-m,
        #costumModal8 .modal-m,
        #costumModal9 .modal-m,
        #costumModal10 .modal-m,
        #costumModal11 .modal-lg,
        #costumModal12 .modal-title,
        #costumModal13 .modal-m {
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }
    }

    .title {
        font-family: verdanab;
        margin-bottom: 2em;
    }
    #boton_planificacion,
    #boton_implementacion,
    #boton_hacer,
    #boton_verificacion,
    #boton_auditoria {
        width: 270px;
        height: 35px;
        transform-style: preserve-3d;
        border: 0 !important;
        border-radius: 0;
        background: #000000 !important;
        color: #ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top: 2em;
    }
    #boton_planificacion:hover,
    #boton_implementacion:hover,
    #boton_hacer:hover,
    #boton_verificacion:hover,
    #boton_auditoria:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%) !important;
        border: 1px solid #6a8fbf !important;
        background: #d5e4f0 !important;
        color: #000000 !important;
        transition: background 0.6s, opacity 0.6s linear;
    }

    #td {
        font-family: verdana !important;
        text-align: left;
        font-size: 12px;
    }

    .fraction {
        display: inline-block;
        vertical-align: middle;
        margin: 0 0.2em 0.4ex;
    }
    .fraction > span {
        display: block;
        padding-top: 0.15em;
    }
    .fup1 {
        margin-bottom: -0.2em !important;
    }
    .fraction span.fdn {
        border-top: thin solid black;
    }
    .fraction span.bar {
        display: none;
    }

    #textarea button {
        border: 0;
        background: transparent;
        font-family: verdanab;
        font-size: 16px;
        text-align: center;
        height: 2em !important;
        vertical-align: middle;
    }

    #porcentaje1,
    #Total_E,
    #Total_P {
        background: transparent;
        font-family: verdanab;
        font-size: 16px !important;
        text-align: center;
        width: 1.8em !important;
        color: #b43f18;
    }

    [data-title]:hover:after {
        opacity: 1;
        transition: all 0.1s ease 0.5s;
        visibility: visible;
    }
    [data-title]:after {
        content: attr(data-title);
        width: 7em !important;
        background-color: #ffffff;
        color: #333333;
        font-size: 14px;
        font-family: verdanab;
        position: absolute;
        padding: 6px;
        top: -3em;
        right: -6em !important;
        text-align: center;
        box-shadow: 1px 1px 3px #222222;
        opacity: 0;
        border: 1px solid #333333;
        z-index: 99999;
        visibility: hidden;
        border-radius: 0;
    }
    [data-title] {
        position: relative;
    }

    .registro textarea {
        font-size: 14px;
        color: #006699;
        text-align: left !important;
        background: transparent !important;
        border: none;
        border-radius: 0 !important;
        padding: 1em;
    }
    .registro2 {
        padding: 0 !important;
        text-align: center !important;
    }

    .clientes textarea {
        font-size: 14px;
        color: #006699;
        text-align: left !important;
        background: transparent !important;
        margin: 0 !important;
        border: 1px solid #71788e !important;
        border-radius: 0 !important;
        padding: 1em;
    }
    .clientes select,
    .clientes input {
        width: 270px;
        height: 35px;
        font-family: verdana;
        padding-left: 15px;
        background: transparent;
        border-radius: 0px;
        border: 1px solid #71788e !important;
    }

    .registro button {
        border: 0;
        background: transparent;
        font-family: verdanab;
        font-size: 16px !important;
        text-align: center;
        width: 2em !important;
        height: 2em !important;
        vertical-align: middle;
    }

    input[type="file"].inputfile {
        width: 0.1px;
        height: 0.1px;
        color: #000000 !important;
        overflow: hidden;
        z-index: -1;
    }
    .inputfile-8 + label {
        color: #333333;
        font-family: verdana;
        letter-spacing: 0.5px;
        border: 0;
        font-family: verdanab !important;
    }
    .inputfile-8 + label span {
        padding: 4px;
        margin: 0 !important;
        font-size: 13px;
    }

    @media screen and (max-width: 50em) {
        .inputfile-8 + label strong {
            display: block;
        }
    }

    #foto_empleado {
        width: 25em;
        text-align: left;
        object-fit: scale-down;
    }

    #borderout2 {
        font-family: Verdanab !important;
        text-align: left;
        padding: 10px;
    }

    .tablabdm td {
        font-size: 13px;
        width: 50%;
        border: 1px solid #333333 !important;
        font-family: Verdana;
        padding: 4px;
    }

    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        font-size: 15px;
        padding-left: 10px;
    }
    #registro input {
        width: 100%;
        height: 35px;
        font-family: verdana;
        font-size: 15px;
        padding-left: 15px;
        background: #ffffff;
        border-radius: 0px;
        border: 0;
        border-bottom: 2px solid #71788e !important;
    }
    #registro select {
        width: 100%;
        height: 35px;
        font-family: verdana;
        font-size: 15px;
        padding-left: 15px;
        background: transparent;
        border-radius: 0px;
        border: 0 !important;
        border-bottom: 2px solid #71788e !important;
    }

    #documental td {
        background: transparent;
        color: #333333;
        padding: 3px !important;
    }

    input[type="radio"] {
        display: inline-block;
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 0px;
        height: 0px;
        background: url(imagen_checkbox.png) left top no-repeat;
        cursor: pointer;
        float: right !important;
    }
    .radio label {
        display: inline-block;
        position: relative;
        float: center !important;
        margin: -2em !important;
    }

    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 24px;
        height: 24px;
        background-color: transparent;
        border: 1px solid #71788e;
        text-align: center;
        margin-top: -1.6em;
        margin-left: 2.2em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        font-size: 26px !important;
        color: #6a8fbf;
        margin-left: 29px;
        margin-top: -24px;
    }
    #check4::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 24px;
        height: 24px;
        background-color: transparent;
        border: 1px solid #006699;
        text-align: center;
        margin-top: -1.6em;
        margin-left: 2.2em;
    }
    #check4::after {
        display: inline-block;
        position: absolute;
        font-size: 26px !important;
        color: #006699;
        margin-left: 30px;
        margin-top: -24px;
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
    }

    .table_ges_2 td {
        height: 3em !important;
    }

    .contenedor {
        margin: 2rem auto;
        border: 0;
        width: 100%;
        max-width: 200em;
        background: transparent;
        overflow-y: hidden;
        overflow-x: auto;
        box-sizing: border-box;
        padding: 0 1rem;
        z-index: -1 !important;
    }
    .contenedor::-webkit-scrollbar {
        -webkit-appearance: none;
    }
    .contenedor::-webkit-scrollbar:vertical {
        width: 10px;
    }
    .contenedor::-webkit-scrollbar-button:increment,
    .contenedor::-webkit-scrollbar-button {
        display: none;
    }
    .contenedor::-webkit-scrollbar:horizontal {
        height: 10px;
    }
    .contenedor::-webkit-scrollbar-thumb {
        background-color: #797979;
        border-radius: 20px;
        border: 2px solid #f1f2f3;
    }
    .contenedor::-webkit-scrollbar-track {
        border-radius: 10px;
    }

    .task-delete3, .submit,
    .task-editar3, .submit {
        width: 36px;
        height: 36px;
        font-family: Moristonb;
        color: #666666;
        background: transparent;
        border: 1px solid #71788e;
        font-size: 18px;
        border-radius: 0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .task-delete3:hover, .submit:hover,
    .task-editar3:hover, .submit:hover {
        color: #6a8fbf;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }

    .nuevo2 {
        width: 12em;
        height: 36px;
        padding: 0 !important;
        margin: 0 !important;
        font-family: Moristonb;
        background: transparent;
        color: #666666;
        border: 1px solid #6a8fbf;
        font-size: 14px;
        border-radius: 0 !important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }

    #search,
    #search2 {
        height: 36px;
        width: 16.5em;
        padding-top: 1px;
        border: 1px solid #71788e !important;
        background: transparent !important;
        border-bottom-color: #ccc;
        transition: 0.4s;
        margin: 0 !important;
        border-radius: 0;
        padding: 4px;
        padding-left: 40px;
        font-family: verdana !important;
    }
    #search:focus,
    #search2:focus {
        padding-top: 1px;
        transition: 0.4s;
        padding: 4px;
        padding-left: 40px;
        border: 2px solid #6a8fbf;
        background: #f1f2f4;
    }

    #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 21px;
        height: 21px;
        background-color: transparent;
        border: 1px solid #71788e;
        text-align: center;
        margin-top: -1.6em;
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        font-size: 24px !important;
        color: #6a8fbf;
        margin-top: -27px;
    }

    .certificada {
        height: 36px;
        padding: 0 !important;
        margin: 0 !important;
        background: transparent;
        color: #666666;
        border: 1px solid #71788e;
        font-family: verdanabi;
        font-size: 12px;
        border-radius: 0 !important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }

    ::-webkit-input-placeholder {
        color: #666666 !important;
        font-family: Moriston;
        letter-spacing: 0.5px;
    }
    :-moz-placeholder {
        color: #666666 !important;
        font-family: Moriston;
        letter-spacing: 0.5px;
    }
    ::-moz-placeholder {
        color: #666666 !important;
        font-family: Moriston;
        letter-spacing: 0.5px;
    }
    :-ms-input-placeholder {
        color: #666666 !important;
        font-family: Moriston;
        letter-spacing: 0.5px;
    }

    #popup6 {
        position: absolute;
        text-align: center;
        line-height: 2.8rem;
        opacity: 1;
        background-color: transparent;
        border: 0;
        border-radius: 0;
        top: 0;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 9999 !important;
        box-shadow: 1px 1px 3px #222222;
    }
    #popup7 {
        position: fixed;
        text-align: center;
        line-height: 2.8rem;
        opacity: 1;
        background-color: transparent;
        border: 0;
        border-radius: 0;
        top: 0;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 1;
        width: 80%;
        height: 80%;
    }

    .note {
        overflow-y: auto;
        overflow-x: hidden;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .note::-webkit-scrollbar {
        display: none;
    }

    /* ================================================================
       NUEVO DISEÑO - PALETA AZUL #bcd1e6
       ================================================================ */

    #container2 {
        min-height: 100vh;
        padding: 25px 30px;
    }

    /* ========== CABECERA AZUL ========== */
    .header-auditivo {
        background: white;
        padding: 25px 35px;
        border-radius: 16px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        margin-bottom: 25px;
        border-left: 5px solid #6a8fbf;
    }
    .header-auditivo .titulo-principal {
        font-family: 'Inter', sans-serif;
        font-size: 28px;
        font-weight: 800;
        color: #1a2a2a;
        letter-spacing: 1px;
        margin: 0;
    }
    .header-auditivo .titulo-principal .icono-header {
        color: #6a8fbf;
        margin-right: 10px;
    }
    .header-auditivo .subtitulo {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #666;
        letter-spacing: 1px;
        margin: 5px 0 0 0;
    }
    .header-auditivo .info-empresa {
        font-size: 13px;
        color: #888;
        margin-top: 10px;
        padding-top: 10px;
        border-top: 1px solid #f0f0f0;
    }
    .header-auditivo .info-empresa span {
        margin-right: 20px;
    }
    /* ========== PANEL PRINCIPAL ========== */
    .panel-lateral {
        display: flex;
        gap: 25px;
        min-height: 600px;
        margin-top:2em;
    }
    /* ==========================================
       CARPETAS CON SUBMENÚS - AZUL
       ========================================== */
    .nav-columna {
        flex: 0 0 280px;
        max-width: 280px;
        background: rgba(255, 255, 255, 0.50) !important;
        border-radius: 16px;
        padding: 15px 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        height: fit-content;
        max-height: 80vh;
        overflow-y: auto;
        position: sticky;
        top: 20px;
    }
    .nav-columna::-webkit-scrollbar {
        width: 4px;
    }
    .nav-columna::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .nav-columna::-webkit-scrollbar-thumb {
        background: #6a8fbf;
        border-radius: 10px;
    }
    .nav-columna .nav-titulo {
        font-size: 12px;
        font-family: verdanab;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #000000;
        padding: 8px 14px 12px 14px;
        font-weight: 700;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 8px;
    }
    .nav-columna .nav-titulo i {
        margin-right: 8px;
        color: #6a8fbf;
    }
    .nav-columna ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .nav-columna ul li {
        margin: 2px 0;
    }

    /* ==========================================
       BOTÓN PRINCIPAL DE CARPETA - AZUL
       ========================================== */
    .nav-columna .btn-carpeta {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        padding: 12px 16px;
        background: transparent;
        border: none;
        border-radius: 12px;
        text-align: left;
        font-size: 12px;
        font-family: Verdanab;
        font-weight: 500;
        color: #4a5568;
        cursor: pointer;
        transition: all 0.25s ease;
        position: relative;
    }
    .nav-columna .btn-carpeta .icono {
        font-size: 14px;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: #f7f9fc;
        color: #718096;
        transition: all 0.25s ease;
        flex-shrink: 0;
    }
    .nav-columna .btn-carpeta .texto {
        flex: 1;
        font-family: Verdanab;
        color: #000000;
        font-size: 13px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .nav-columna .btn-carpeta .badge {
        background: #eef2f7;
        color: #4a5568;
        font-size: 10px;
        font-weight: 700;
        padding: 2px 10px;
        border-radius: 12px;
        transition: all 0.25s ease;
    }
    .nav-columna .btn-carpeta .toggle-icon {
        color: #c0c8d4;
        font-size: 12px;
        transition: all 0.3s ease;
        margin-left: 4px;
    }
    .nav-columna .btn-carpeta .toggle-icon.rotated {
        transform: rotate(90deg);
    }
    .nav-columna .btn-carpeta.activo {
        background: #bcd1e6;
        color: #1a2a4a;
        box-shadow: 0 2px 12px rgba(106, 143, 191, 0.25);
    }
    .nav-columna .btn-carpeta.activo .icono {
        background: rgba(106, 143, 191, 0.15);
        color: #1a3a5a;
    }
    .nav-columna .btn-carpeta.activo .badge {
        background: rgba(106, 143, 191, 0.2);
        color: #1a3a5a;
    }
    .nav-columna .btn-carpeta.activo .toggle-icon {
        color: rgba(26, 42, 74, 0.7);
    }
    .nav-columna .btn-carpeta:hover:not(.activo) {
        background: #f7f9fc;
    }
    .nav-columna .btn-carpeta:hover:not(.activo) .icono {
        background: #bcd1e6;
        color: #6a8fbf;
    }

    /* ==========================================
       SUBMENÚS DESPLEGABLES - AZUL
       ========================================== */
    .nav-columna .submenu {
        display: none;
        padding-left: 20px;
        margin: 2px 0 4px 0;
        border-left: 2px solid #eef2f7;
        margin-left: 20px;
    }
    .nav-columna .submenu.abierto {
        display: block;
        animation: slideDown 0.3s ease;
    }
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .nav-columna .submenu .btn-subcarpeta {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 100%;
        padding: 10px 14px;
        background: transparent;
        border: none;
        border-radius: 10px;
        text-align: left;
        font-size: 13px;
        font-family: Verdanab;
        color: #000000;
        cursor: pointer;
        transition: all 0.2s ease;
        position: relative;
    }
    .nav-columna .submenu .btn-subcarpeta:hover {
        background: #f7f9fc;
        color: #6a8fbf;
    }
    .nav-columna .submenu .btn-subcarpeta.activo {
        background: #e8eff7;
        color: #1a3a5a;
        font-weight: 600;
    }
    .nav-columna .submenu .btn-subcarpeta .sub-icono {
        font-size: 14px;
        color: #a0b0c0;
        width: 24px;
        text-align: center;
    }
    .nav-columna .submenu .btn-subcarpeta .sub-badge {
        background: #eef2f7;
        color: #6b7a8a;
        font-size: 9px;
        font-weight: 600;
        padding: 1px 8px;
        border-radius: 10px;
        margin-left: auto;
    }
    .nav-columna .submenu .btn-subcarpeta.activo .sub-badge {
        background: #bcd1e6;
        color: #1a3a5a;
    }

    /* ==========================================
       CONTENIDO - COLUMNA DERECHA
       ========================================== */
    .contenido-columna {
        flex: 1;
        background: transparent;
        border: 0;
        padding: 0;
        min-height: 500px;
    }
    .contenido-columna::-webkit-scrollbar {
        width: 6px;
    }
    .contenido-columna::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .contenido-columna::-webkit-scrollbar-thumb {
        background: #6a8fbf;
        border-radius: 10px;
    }

    /* ==========================================
       PANELES DE CONTENIDO
       ========================================== */
    .panel-contenido {
        display: none;
        animation: fadeIn 0.3s ease;
    }
    .panel-contenido.activo {
        display: block;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .panel-contenido .seccion-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 18px;
        border-bottom: 2px solid #f0f2f5;
        margin-bottom: 20px;
    }
    .panel-contenido .seccion-header h3 {
        font-family: Verdanab;
        font-size: 22px;
        font-weight: 700;
        color: #1a2a2a;
        margin: 0;
    }
    .panel-contenido .seccion-header .acciones {
        display: flex;
        gap: 10px;
    }
    .panel-contenido .seccion-header .btn-accion {
        padding: 6px 14px;
        border: none;
        border-radius: 8px;
        background: #f0f2f5;
        color: #555;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .panel-contenido .seccion-header .btn-accion:hover {
        background: #bcd1e6;
        color: #1a2a4a;
    }

    /* ==========================================
       MÓDULOS - AZULES
       ========================================== */
    .modulo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 15px;
        margin-top: 15px;
    }
    .modulo-card {
        background: #f5f8fc;
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        border: 1px solid #e8eff7;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .modulo-card:hover {
        background: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transform: translateY(-3px);
    }
    .modulo-card .modulo-icono {
        font-size: 32px;
        color: #6a8fbf;
        margin-bottom: 10px;
    }
    .modulo-card .modulo-titulo {
        font-size: 13px;
        font-weight: 600;
        color: #1a2a2a;
    }
    .modulo-card .modulo-subtitulo {
        font-size: 11px;
        color: #888;
        margin-top: 5px;
    }

    /* ==========================================
       ESTADÍSTICAS - AZULES
       ========================================== */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 15px;
        margin: 20px 0;
    }
    .stat-card {
        background: #f5f8fc;
        padding: 18px 20px;
        border-radius: 12px;
        border: 1px solid #e8eff7;
    }
    .stat-card .stat-numero {
        font-size: 28px;
        font-weight: 800;
        color: #6a8fbf;
    }
    .stat-card .stat-label {
        font-size: 12px;
        color: #888;
        margin-top: 4px;
    }

    /* ==========================================
       TABLA - AZUL
       ========================================== */
    .table-auditivo {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        margin-top: 15px;
    }
    .table-auditivo thead th {
        background: #f5f8fc;
        padding: 10px 12px;
        font-weight: 600;
        color: #333;
        border-bottom: 2px solid #e8eff7;
        text-align: left;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #888;
    }
    .table-auditivo tbody td {
        padding: 10px 12px;
        border-bottom: 1px solid #f0f2f5;
        color: #444;
    }
    .table-auditivo tbody tr:hover {
        background: #f5f8fc;
    }
    .table-auditivo .badge-status {
        display: inline-block;
        padding: 3px 12px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
    }
    .badge-status.activo {
        background: #bcd1e6;
        color: #1a3a5a;
    }
    .badge-status.pendiente {
        background: #f5e6cc;
        color: #7a5a1a;
    }

    /* ==========================================
       RESPONSIVE
       ========================================== */
    @media (max-width: 992px) {
        #container2 {
            padding: 15px;
        }
        .panel-lateral {
            flex-direction: column;
        }
        .nav-columna {
            flex: 1 1 100%;
            max-width: 100%;
            max-height: 250px;
            position: relative;
            top: 0;
            padding: 10px;
        }
        .contenido-columna {
            max-height: 600px;
            padding: 20px;
        }
        .modulo-grid {
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        }
        .stats-grid {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        }
    }

    @media (max-width: 480px) {
        .header-auditivo {
            padding: 15px 20px;
        }
        .header-auditivo .titulo-principal {
            font-size: 20px;
        }
        .header-auditivo .info-empresa span {
            display: block;
            margin: 3px 0;
        }
        .contenido-columna {
            padding: 15px;
        }
    }

    .bg-light { background: #f5f8fc; padding: 20px; border-radius: 12px; }
    .mt-15 { margin-top: 15px; }
    .mb-15 { margin-bottom: 15px; }
    .color-primary { color: #6a8fbf; }
    .fw-bold { font-weight: 700; }
    .text-center { text-align: center; }

    #container2 {
        position: relative !important;
    }
    .nav-columna {
        background: rgba(255, 255, 255, 0.50) !important;
    }

    /* ================================================================
       BORDER RADIUS PARA TODOS LOS MODALES
       ================================================================ */
    .modal .modal-content {
        border-radius: 16px !important;
        overflow: hidden !important;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15) !important;
    }
    .modal.fullscreen-modal .modal-content {
        border-radius: 16px !important;
        overflow: hidden !important;
    }
    .modal .modal-dialog {
        border-radius: 16px !important;
        overflow: hidden !important;
    }
    .modal .modal-dialog .modal-content {
        border-radius: 16px !important;
    }
    .modal .modal-header {
        border-radius: 16px 16px 0 0 !important;
        padding: 10px 15px !important;
        background: #f5f8fc !important;
        border-bottom: 1px solid #e8eff7 !important;
    }
    .modal .modal-body {
        padding: 25px 30px !important;
    }
    .modal .modal-footer {
        border-radius: 0 0 16px 16px !important;
        padding: 10px 15px !important;
        background: #f5f8fc !important;
        border-top: 1px solid #e8eff7 !important;
    }
    .modal .modal-header .close {
        padding: 8px !important;
        border-radius: 50% !important;
        transition: all 0.3s ease !important;
        opacity: 0.7 !important;
    }
    .modal .modal-header .close:hover {
        opacity: 1 !important;
        background: rgba(0,0,0,0.05) !important;
        transform: rotate(90deg) !important;
    }
    .modal-dialog.modal-m .modal-content {
        border-radius: 16px !important;
    }
    .modal-dialog.modal-lg .modal-content {
        border-radius: 16px !important;
    }
    .modal-dialog.modal-sm .modal-content {
        border-radius: 16px !important;
    }
    .modal-dialog.modal-title .modal-content {
        border-radius: 16px !important;
    }
    .fullscreen-modal .modal-content {
        border-radius: 16px !important;
    }
    .modal-content[style*="background-color:#ffffff"] {
        border-radius: 16px !important;
    }
    .modal .clientes textarea,
    .modal .clientes input,
    .modal #registro textarea,
    .modal #registro input {
        border-radius: 8px !important;
    }
    .modal .btn,
    .modal .nuevo,
    .modal .delete {
        border-radius: 8px !important;
    }
    .modal .table,
    .modal .tablabdm,
    .modal .table_ges_2 {
        border-radius: 8px !important;
        overflow: hidden !important;
    }
    .modal[data-easein] .modal-content {
        border-radius: 16px !important;
    }
    [id^="costumModal"] .modal-content {
        border-radius: 16px !important;
    }
    [id^="costumModal"] .modal-header {
        border-radius: 16px 16px 0 0 !important;
    }
    [id^="costumModal"] .modal-footer {
        border-radius: 0 0 16px 16px !important;
    }
    [id$="_modal"] .modal-content {
        border-radius: 16px !important;
    }
    [id$="_modal"] .modal-header {
        border-radius: 16px 16px 0 0 !important;
    }
    [id$="_modal"] .modal-footer {
        border-radius: 0 0 16px 16px !important;
    }
    #editar_controles .modal-content {
        border-radius: 16px !important;
    }
    #adjuntar_controles .modal-content {
        border-radius: 16px !important;
    }
    #popup6,
    #popup7 {
        border-radius: 16px !important;
    }
    #popup6 .modal-body,
    #popup7 .modal-body {
        border-radius: 16px !important;
    }
    .modal .modal-body::-webkit-scrollbar {
        width: 6px;
    }
    .modal .modal-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .modal .modal-body::-webkit-scrollbar-thumb {
        background: #6a8fbf;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .modal .modal-content {
            border-radius: 12px !important;
        }
        .modal .modal-header {
            border-radius: 12px 12px 0 0 !important;
            padding: 15px 20px !important;
        }
        .modal .modal-body {
            padding: 20px !important;
        }
        .modal .modal-footer {
            border-radius: 0 0 12px 12px !important;
            padding: 12px 20px !important;
        }
    }
    /* === SELECT POPUP - COMPACTO === */
    .select-popup-wrapper {
        position: relative;
        display: inline-block;
        width: auto;
        min-width: 200px;
    }
    /* === SELECT OCULTO (trigger) - AHORA SOLO OCUPA EL ÁREA DEL BOTÓN === */
    .select-popup-wrapper .select-trigger {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;  /* ← Cambiado de 16em a 100% */
        cursor: pointer;
        z-index: 2;
        top: 0;
        left: 0;
    }
    /* === DISPLAY DEL SELECT (compacto) === */
    .select-popup-wrapper .select-display {
        padding: 0.4rem 2.2rem 0.4rem 0.7rem;
        font-size: 14px;
        color: #ffffff;
        background: transparent;
        border: 2px solid #6a8fbf;
        border-radius: 16px;
        cursor: pointer;
        font-family: Verdanab;
        text-align: left;
        position: relative;
        transition: all 0.3s ease;
        box-sizing: border-box;
        pointer-events: none;
        white-space: nowrap;
        overflow: hidden;
        min-width: 120px;
        line-height: 1.4;
    }
    /* Hover del display */
    .select-popup-wrapper .select-trigger:hover + .select-display {
        border-color: #6a8fbf;
        background: rgba(106, 143, 191, 0.1);
    }
    /* Focus del display */
    .select-popup-wrapper .select-trigger:focus + .select-display {
        border-color: #bcd1e6;
        box-shadow: 0 0 0 3px rgba(188, 209, 230, 0.4);
    }
    /* Flecha del select */
    .select-popup-wrapper .select-display::after {
        content: "▼";
        position: absolute;
        right: 0.6rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.6rem;
        color: #ffffff;
    }
    /* Animación de la flecha al abrir */
    .select-popup-wrapper .select-trigger:focus + .select-display::after {
        transform: translateY(-50%) rotate(180deg);
    }
    /* === POPUP/MENÚ DESPLEGABLE === */
    .select-popup-wrapper .popup-menu {
        font-family: Verdanab !important;
        font-size: 13px !important;
        position: absolute;
        top: calc(100% + 6px);
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.95);
        border: 2px solid #bcd1e6;
        border-radius: 10px;
        padding: 0.4rem 0;
        max-height: 350px;
        overflow-y: auto;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-8px) scale(0.95);
        transition: all 0.25s ease;
        min-width: 120%;
    }
    /* Al abrir el popup (se mantiene igual) */
    .select-popup-wrapper .select-trigger:focus ~ .popup-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0) scale(1);
    }
    /* === OPCIONES DEL POPUP CON ICONOS === */
    .select-popup-wrapper .popup-menu label {
        display: flex;
        align-items: center;
        padding: 0.5rem 0.8rem;
        font-family: Verdanab;
        font-size: 14px;
        color: #1a2639;
        cursor: pointer;
        transition: all 0.2s ease;
        border-left: 3px solid transparent;
    }
    .select-popup-wrapper .popup-menu label:hover {
        background: #eef4ff;
        border-left-color: #6a8fbf;
    }
    .select-popup-wrapper .popup-menu label:active {
        background: #dce6f5;
    }
    /* === ICONOS EN LAS OPCIONES === */
    .select-popup-wrapper .popup-menu label .icon {
        font-size: 16px;
        width: 20px;
        text-align: center;
        flex-shrink: 0;
    }
    /* === OPCIÓN SELECCIONADA === */
    .select-popup-wrapper .popup-menu input[type="radio"]:checked + label {
        background: #bcd1e6;
        color: #1a2a4a;
        font-weight: 600;
        border-left-color: #6a8fbf;
    }
    .select-popup-wrapper .popup-menu input[type="radio"]:checked + label:hover {
        background: #8aacc9;
        color: #ffffff;
    }
    .select-popup-wrapper .popup-menu input[type="radio"]:checked + label .icon {
        color: #1a2a4a;
    }
    .select-popup-wrapper .popup-menu input[type="radio"]:checked + label:hover .icon {
        color: #ffffff;
    }
    /* === OCULTAR RADIOS === */
    .select-popup-wrapper .popup-menu input[type="radio"] {
        display: none;
    }
    /* === SCROLL PERSONALIZADO === */
    .select-popup-wrapper .popup-menu::-webkit-scrollbar {
        width: 5px;
    }
    .select-popup-wrapper .popup-menu::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 8px;
    }
    .select-popup-wrapper .popup-menu::-webkit-scrollbar-thumb {
        background: #bcd1e6;
        border-radius: 8px;
    }
    .select-popup-wrapper .popup-menu::-webkit-scrollbar-thumb:hover {
        background: #6a8fbf;
    }
    /* Navbar de ejemplo */
    .navbar-custom {
        background: white;
        padding: 15px 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 1050;
    }
    .navbar-custom .brand {
        font-size: 14px;
        color: #333;
    }
    /* Overlay para fondo oscuro */
    .sidebar-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index: 1040;
        justify-content: flex-start;
        align-items: flex-start;
        padding-top: 80px;
    }
    .sidebar-overlay.active {
        display: flex;
    }
    /* Cuadro central - más arriba */
    .sidebar-central {
        background: white;
        width: 400px;
        max-width: 90%;
        max-height: 70vh;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        overflow-y: auto;
        position: relative;
        margin: 0 auto;
        animation: slideDown 0.3s ease-out;
        border: 1px solid rgba(255,255,255,0.3);
    }
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    /* Botón cerrar (X) */
    .btn-close-central {
        position: absolute;
        top: 12px;
        right: 15px;
        background: transparent;
        border: none;
        font-size: 14px;
        cursor: pointer;
        color: #666;
        transition: 0.3s;
        line-height: 1;
    }
    .btn-close-central:hover {
        color: #000;
        transform: rotate(90deg);
    }
    /* Estilos del menú */
    .sidebar-menu-central {
        list-style: none;
        padding: 0;
        margin: 10px 0 0 0;
    }
    .sidebar-menu-central li {
        margin-bottom: 6px;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 6px;
    }
    .sidebar-menu-central li:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    .sidebar-menu-central a,
    .btn-form-central {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333;
        padding: 8px 12px;
        border-radius: 6px;
        transition: 0.2s;
        font-size: 14px;
        gap: 12px;
    }
    .sidebar-menu-central a:hover,
    .btn-form-central:hover {
        background: #bcd1e6;
        color: #000000;
    }
    .sidebar-menu-central .fa,
    .btn-form-central .fa {
        width: 24px;
        text-align: center;
        font-size: 14px;
    }
    .sidebar-menu-central span {
        flex: 1;
    }
    /* Botón para abrir (hamburguesa) - Ajustado según tu código */
    .sidebar-toggle-box {
        width: 2em;
        height: 2em;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 12px;
        cursor: pointer;
        background: transparent;
        border: 0px solid #ddd;
        transition: 0.3s;
        backdrop-filter: blur(5px);
        float: left;
        padding-right: 15px;
        margin-top: 16px;
    }
    .sidebar-toggle-box:hover {
        transform: scale(1);
    }
    .sidebar-toggle-box .fa-bars {
        font-size: 22px;
        color: #ffffff;
    }
    /* Estilo para el botón del formulario */
    .btn-form-central {
        background: transparent;
        border: 0;
        width: 100%;
        text-align: left;
        padding: 8px 12px;
        font-size: 14px;
        color: #333;
        cursor: pointer;
        border-radius: 6px;
        transition: 0.2s;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .btn-form-central:hover {
        background: #bcd1e6;
        color: #000000;
    }
    /* Ajuste para el botón de filtro con modal */
    .btn-filtro {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333;
        padding: 8px 12px;
        border-radius: 6px;
        transition: 0.2s;
        font-size: 14px;
        gap: 12px;
    }
    .btn-filtro:hover {
        background: #f0f4ff;
        color: #0066cc;
    }
    .btn-filtro .fa {
        width: 24px;
        text-align: center;
        font-size: 18px;
    }
    .btn-filtro span {
        flex: 1;
    }

    /* Estilo para el título del menú */
    .menu-title {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        padding-bottom: 15px;
        border-bottom: 2px solid #e8ecf1;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .menu-title .fa {
        color: #0066cc;
    }

    /* Contenedor principal */
    .main-content {
        padding: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* ========== COLORES DE ICONOS ========== */

    /* Icono de filtro - gris */
    .icon-filtro {
        color: #6c757d !important;
    }

    /* Iconos de PDF - rojo característico de Adobe */
    .icon-pdf {
        color: #dc3545 !important;
    }

    /* Icono de Excel - verde */
    .icon-excel {
        color: #28a745 !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .sidebar-overlay {
            padding-top: 70px;
        }
        .sidebar-central {
            width: 95%;
            max-height: 80vh;
            padding: 20px;
        }
        .navbar-custom {
            padding: 12px 20px;
        }
        .main-content {
            padding: 20px;
        }
    }
    @media screen and (max-width: 800px) {
        /* Forzar que la tabla mantenga su estructura */
        .table2,
        .table2 thead,
        .table2 tbody,
        .table2 tr,
        .table2 th,
        .table2 td {
            display: table !important;
        }

        .table2 thead {
            display: table-header-group !important;
        }

        .table2 tbody {
            display: table-row-group !important;
        }

        .table2 tr {
            display: table-row !important;
        }

        .table2 th,
        .table2 td {
            display: table-cell !important;
        }

        /* Anular display:block de otras reglas */
        .table2 tbody td {
            display: table-cell !important;
            text-align: left !important;
            width: auto !important;
            height: auto !important;
            margin-top: 0 !important;
        }
        .modal .modal-content {
            border-radius: 12px !important;
        }
        .modal .modal-header {
            border-radius: 12px 12px 0 0 !important;
            padding: 15px 20px !important;
        }
        .modal .modal-body {
            padding: 20px !important;
            max-height: 60vh;
        }
        .modal .modal-footer {
            border-radius: 0 0 12px 12px !important;
            padding: 12px 20px !important;
        }
        .nav-columna {
            flex: 1 1 100% !important;
            max-width: 100% !important;
            max-height: none !important; /* Elimina la altura máxima */
            height: auto !important; /* Altura automática según contenido */
            position: relative !important; /* Quita el sticky */
            top: 0 !important;
            padding: 12px 8px !important;
            border-radius: 12px !important;
            margin-bottom: 15px !important;
            overflow-y: visible !important; /* Muestra todo el contenido */
        }
        .contenido-columna {
            min-height: 500px;
            max-height: 120vh;
        }
        #selectedDisplay {
            width:11.5em!important;
            margin-left:4.5em!important;
        }
        .top-menu {
            margin-top: -2.61em!important;
        }
        #panel_consolidados {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        .tablaintra th,
        .table_consolidados th,
        .table th,
        .lista th {
            display: none !important;
        }
        .lista td {
            height: auto !important;
        }
        .tablaintra td,
        .table_consolidados td {
            display: block !important;
            font-size: 14px;
            width: 100% !important;
            height: auto !important;
            padding: 8px !important;
            text-align: center !important;
        }
        .table_consolidados {
            width: 100% !important;
        }
        .subt2 {
            display: block !important;
            font-family: verdana;
            color: #333333;
        }
        #tdbd {
            padding: 0 !important;
            font-size: 14px !important;
        }
        tbody #borderout {
            display: inline !important;
            text-align: center;
        }
        #buscar td {
            display: inline !important;
        }
        #btn2 {
            margin-top: 0 !important;
        }
        #nregistro {
            text-align: center !important;
            width: 100% !important;
        }
        .task-delete, .submit,
        .task-delete2, .submit,
        .task-download, .submit {
            margin-top: 6px !important;
            margin-bottom: 18px !important;
        }
        .formxlsx {
            margin-right: 0 !important;
        }
        .tableIA {
            width: 100% !important;
        }
        .cuadroseleccion {
            margin-right: 0 !important;
        }
        .liker {
            font-size: 11px !important;
        }
        #check1::before,
        #check11::before {
            width: 22px !important;
            height: 22px !important;
        }
        .title {
            margin-bottom: 0.8em !important;
        }
        .notify-row {
            margin-top: -1.5em;
        }
        .tablabdm td {
            width: 100% !important;
            min-height: 3em !important;
            height: auto !important;
            text-align: center !important;
        }
        .lista td {
            text-align: center !important;
        }
        .etiquetas td {
            display: inline !important;
        }
    }
    #notasModalOverlay {
        padding: 60px 8px 20px !important;
        align-items: flex-start !important;
    }
    .notas-modal-box {
        width: 100% !important;
        max-width: 100% !important;
        max-height: 82vh !important;
        border-radius: 14px !important;
    }
    .notas-modal-head {
        padding: 14px 16px !important;
    }
    .notas-modal-head h3 {
        font-size: 16px !important;
    }
    .notas-modal-x {
        font-size: 26px !important;
        padding: 6px 10px !important;
    }
    .notas-modal-box > div:last-child {
        padding: 16px !important;
        min-height: 100px !important;
    }

    /* Fondo oscuro tipo header */
    .header-demo {
        background: #22242a;
        padding: 15px 25px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    /* ===== Botón circular de notas ===== */
    .btn-notas {
        position: relative;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #2f323a;
        border: 1px solid #3d4048;
        color: #77eee6;           /* ← antes #fff5cc */
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.25s ease;
        text-decoration: none;
    }

    .btn-notas:hover {
        background: #3d4048;
        color: #a8f5f0;           /* ← azul claro al hover */
        transform: scale(1.05);
    }

    .btn-notas i {
        font-size: 16px;
    }

    /* ===== Campana con número dentro ===== */
    .badge-campana {
        position: absolute;
        top: -4px;
        right: -4px;
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulso 1.8s infinite;
        border-radius: 50%;
    }

    /* La campana es la forma principal */
    .badge-campana .fa-bell {
        left: 12px !important;
        position: absolute;
        inset: 0;
        font-size: 25px;
        color: #77eee6;           /* ← antes #e74c3c */
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        text-shadow: 0 0 3px rgba(0, 0, 0, 0.6);
    }

    /* El número dentro de la campana */
    .badge-campana .numero {
        left: 7px !important;
        position: relative;
        z-index: 2;
        color: #22242a;           /* ← texto oscuro para contraste sobre azul */
        font-size: 10px;
        font-family: verdanab;
        transform: translateY(-1px);
    }

    /* ===== Animación de pulso ===== */
    @keyframes pulso {
        0%   { box-shadow: 0 0 0 0 rgba(119, 238, 230, 0.7); }   /* ← #77eee6 */
        70%  { box-shadow: 0 0 0 6px rgba(119, 238, 230, 0); }    /* ← #77eee6 */
        100% { box-shadow: 0 0 0 0 rgba(119, 238, 230, 0); }      /* ← #77eee6 */
    }

    /* ===== Tooltip ===== */
    .btn-notas .tooltip {
        position: absolute;
        bottom: -32px;
        right: 0;
        background: #000;
        color: #77eee6;           /* ← antes #fff */
        font-size: 11px;
        padding: 4px 8px;
        border-radius: 4px;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s;
    }
    .btn-notas:hover .tooltip {
        opacity: 1;
    }

    @keyframes notasSlideDown {
        from { opacity: 0; transform: translateY(-25px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ===== Pantallas muy pequeñas ===== */
    @media (max-width: 360px) {
        #notasModalOverlay {
            padding: 50px 6px 16px !important;
        }
        .notas-modal-box {
            border-radius: 12px !important;
        }
        .notas-modal-head h3 {
            font-size: 15px !important;
        }
    }
</style>