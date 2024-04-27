<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>FlyBox - Rastreador</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<style>
    @charset "UTF-8";
@charset "UTF-8";
:root {
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #d63384;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-black: #000;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-gray-100: #f8f9fa;
    --bs-gray-200: #e9ecef;
    --bs-gray-300: #dee2e6;
    --bs-gray-400: #ced4da;
    --bs-gray-500: #adb5bd;
    --bs-gray-600: #6c757d;
    --bs-gray-700: #495057;
    --bs-gray-800: #343a40;
    --bs-gray-900: #212529;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;
    --bs-primary-rgb: 13, 110, 253;
    --bs-secondary-rgb: 108, 117, 125;
    --bs-success-rgb: 25, 135, 84;
    --bs-info-rgb: 13, 202, 240;
    --bs-warning-rgb: 255, 193, 7;
    --bs-danger-rgb: 220, 53, 69;
    --bs-light-rgb: 248, 249, 250;
    --bs-dark-rgb: 33, 37, 41;
    --bs-white-rgb: 255, 255, 255;
    --bs-black-rgb: 0, 0, 0;
    --bs-body-color-rgb: 33, 37, 41;
    --bs-body-bg-rgb: 255, 255, 255;
    --bs-font-sans-serif: system-ui, -apple-system, 'Segoe UI', Roboto,
        'Helvetica Neue', 'Noto Sans', 'Liberation Sans', Arial, sans-serif,
        'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol',
        'Noto Color Emoji';
    --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
        'Liberation Mono', 'Courier New', monospace;
    --bs-gradient: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.15),
        rgba(255, 255, 255, 0)
    );
    --bs-body-font-family: var(--bs-font-sans-serif);
    --bs-body-font-size: 1rem;
    --bs-body-font-weight: 400;
    --bs-body-line-height: 1.5;
    --bs-body-color: #212529;
    --bs-body-bg: #fff;
    --bs-border-width: 1px;
    --bs-border-style: solid;
    --bs-border-color: #dee2e6;
    --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
    --bs-border-radius: 0.375rem;
    --bs-border-radius-sm: 0.25rem;
    --bs-border-radius-lg: 0.5rem;
    --bs-border-radius-xl: 1rem;
    --bs-border-radius-2xl: 2rem;
    --bs-border-radius-pill: 50rem;
    --bs-link-color: #0d6efd;
    --bs-link-hover-color: #0a58ca;
    --bs-code-color: #d63384;
    --bs-highlight-bg: #fff3cd;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
    :root {
        scroll-behavior: smooth;
    }
}

.nav-link.active {
    background-color: #0b5ed7; /* Cambia "yourColor" por el color que desees */
    color: #0040ad; /* Cambia "#fff" por el color del texto que desees */
}

#tabla-precios {
 display:inline-block;
 width:100%;
 margin-top:50px
}

/*Columnas*/

.precio-col {
 display:inline-block;
 background-color:#f3f3f3;
 width:100%;
 max-width:500px;
 border-radius:10px;
 margin-bottom:50px;
 box-shadow: 0px 2px 5px #ddd
}

@media screen and (min-width:768px) {
 .precio-col {
 width:32%;
 float:left;
 margin-right:2%
 }
 
 .precio-col:last-child {
 margin-right:0
 }
}

/*Headers*/

.precio-col-header {
 background-color:#333;
 padding:20px;
 border-top-left-radius:10px;
 border-top-right-radius:10px
}

.precio-col:nth-child(2) .precio-col-header {
 background-color:#3876b0
}

.precio-col-header h3 {
 color:#f3f3f3;
 text-align:center;
 font-size:30px;
 font-weight:600;
 margin-bottom:0
}

.precio-col-header p {
 text-align:center;
 color:#f3f3f3;
 font-size:14px;
 margin-bottom:0
}

/*Características*/

.precio-col-features {
 padding: 0 20px 20px 20px
}

.precio-col-features p {
 padding:20px 0;
 margin:0;
 text-align:center;
 border-top:1px solid #ddd
}

.precio-col-features p:first-child,
.precio-col-features p:last-child {
 border-top:none
}

/*Comprar*/

.precio-col-comprar {
 padding:10px;
 max-width:250px;
 text-align:center;
 background-color:#3876b0;
 margin: 0 auto 20px;
 border-radius:10px;
 border: 2px solid #3876b0;
 transition: all 0.3s
}

.precio-col-comprar a {
 color:#f3f3f3;
 padding:10px;
 font-size:20px;
 text-transform:uppercase;
 transition: all 0.3s
}

.precio-col-comprar:hover {
 background-color:#f3f3f3;
 transition: all 0.3s
}

.precio-col-comprar:hover a {
 color:#dd9933;
 transition: all 0.3s
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.content-wrapper {
    display: flex;
    justify-content: space-between;
}

.left-content {
    flex: 1;
}

.right-content {
    flex: 1;
    margin-left: 20px;
}

.form-wrapper {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
}

.form-wrapper h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-style {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.input-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
}

.btn-submit {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.btn-submit:hover {
    background-color: #0056b3;
}


.container {
    max-width: 1200px;
    margin: 0 auto;
}

.content-wrapper {
    display: flex;
    justify-content: space-between;
}

.left-content {
    flex: 1;
}

.right-content {
    flex: 1;
    margin-left: 20px;
}

.form-wrapper {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
}

.form-wrapper h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-style {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.input-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
}

.btn-submit {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.btn-submit:hover {
    background-color: #0056b3;
}


body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
    margin: 1rem 0;
    color: inherit;
    border: 0;
    border-top: 1px solid;
    opacity: 0.25;
}

h6,
.h6,
h5,
.h5,
h4,
.h4,
h3,
.h3,
h2,
.h2,
h1,
.h1 {
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1,
.h1 {
    font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
    h1,
    .h1 {
        font-size: 2.5rem;
    }
}

h2,
.h2 {
    font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
    h2,
    .h2 {
        font-size: 2rem;
    }
}

h3,
.h3 {
    font-size: calc(1.3rem + 0.6vw);
}
@media (min-width: 1200px) {
    h3,
    .h3 {
        font-size: 1.75rem;
    }
}

h4,
.h4 {
    font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
    h4,
    .h4 {
        font-size: 1.5rem;
    }
}

h5,
.h5 {
    font-size: 1.25rem;
}

h6,
.h6 {
    font-size: 1rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title] {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul {
    padding-left: 2rem;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: 0.5rem;
    margin-left: 0;
}

blockquote {
    margin: 0 0 1rem;
}

b,
strong {
    font-weight: bolder;
}

small,
.small {
    font-size: 0.875em;
}

mark,
.mark {
    padding: 0.1875em;
    background-color: var(--bs-highlight-bg);
}

sub,
sup {
    position: relative;
    font-size: 0.75em;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}

a {
    color: var(--bs-link-color);
    text-decoration: underline;
}
a:hover {
    color: var(--bs-link-hover-color);
}

a:not([href]):not([class]),
a:not([href]):not([class]):hover {
    color: inherit;
    text-decoration: none;
}

pre,
code,
kbd,
samp {
    font-family: var(--bs-font-monospace);
    font-size: 1em;
}

pre {
    display: block;
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    font-size: 0.875em;
}
pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}

code {
    font-size: 0.875em;
    color: var(--bs-code-color);
    word-wrap: break-word;
}
a > code {
    color: inherit;
}

kbd {
    padding: 0.1875rem 0.375rem;
    font-size: 0.875em;
    color: var(--bs-body-bg);
    background-color: var(--bs-body-color);
    border-radius: 0.25rem;
}
kbd kbd {
    padding: 0;
    font-size: 1em;
}

figure {
    margin: 0 0 1rem;
}

img,
svg {
    vertical-align: middle;
}

table {
    caption-side: bottom;
    border-collapse: collapse;
}

caption {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    color: #6c757d;
    text-align: left;
}

th {
    text-align: inherit;
    text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
}

label {
    display: inline-block;
}

button {
    border-radius: 0;
}

button:focus:not(:focus-visible) {
    outline: 0;
}

input,
button,
select,
optgroup,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
select {
    text-transform: none;
}

[role='button'] {
    cursor: pointer;
}

select {
    word-wrap: normal;
}
select:disabled {
    opacity: 1;
}

[list]:not([type='date']):not([type='datetime-local']):not([type='month']):not(
        [type='week']
    ):not([type='time'])::-webkit-calendar-picker-indicator {
    display: none !important;
}

button,
[type='button'],
[type='reset'],
[type='submit'] {
    -webkit-appearance: button;
}
button:not(:disabled),
[type='button']:not(:disabled),
[type='reset']:not(:disabled),
[type='submit']:not(:disabled) {
    cursor: pointer;
}

::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

textarea {
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    float: left;
    width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: calc(1.275rem + 0.3vw);
    line-height: inherit;
}
@media (min-width: 1200px) {
    legend {
        font-size: 1.5rem;
    }
}
legend + * {
    clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
    padding: 0;
}

::-webkit-inner-spin-button {
    height: auto;
}

[type='search'] {
    outline-offset: -2px;
    -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
    padding: 0;
}

::file-selector-button {
    font: inherit;
    -webkit-appearance: button;
}

output {
    display: inline-block;
}

iframe {
    border: 0;
}

summary {
    display: list-item;
    cursor: pointer;
}

progress {
    vertical-align: baseline;
}

[hidden] {
    display: none !important;
}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
}

.display-1 {
    font-size: calc(1.625rem + 4.5vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-1 {
        font-size: 5rem;
    }
}

.display-2 {
    font-size: calc(1.575rem + 3.9vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-2 {
        font-size: 4.5rem;
    }
}

.display-3 {
    font-size: calc(1.525rem + 3.3vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-3 {
        font-size: 4rem;
    }
}

.display-4 {
    font-size: calc(1.475rem + 2.7vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-4 {
        font-size: 3.5rem;
    }
}

.display-5 {
    font-size: calc(1.425rem + 2.1vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-5 {
        font-size: 3rem;
    }
}

.display-6 {
    font-size: calc(1.375rem + 1.5vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-6 {
        font-size: 2.5rem;
    }
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
}
.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}

.initialism {
    font-size: 0.875em;
    text-transform: uppercase;
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem;
}
.blockquote > :last-child {
    margin-bottom: 0;
}

.blockquote-footer {
    margin-top: -1rem;
    margin-bottom: 1rem;
    font-size: 0.875em;
    color: #6c757d;
}
.blockquote-footer::before {
    content: '— ';
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid var(--bs-border-color);
    border-radius: 0.375rem;
    max-width: 100%;
    height: auto;
}

.figure {
    display: inline-block;
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}

.figure-caption {
    font-size: 0.875em;
    color: #6c757d;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .container-sm,
    .container {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .container-md,
    .container-sm,
    .container {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .container-lg,
    .container-md,
    .container-sm,
    .container {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .container-xl,
    .container-lg,
    .container-md,
    .container-sm,
    .container {
        max-width: 1140px;
    }
}
@media (min-width: 1400px) {
    .container-xxl,
    .container-xl,
    .container-lg,
    .container-md,
    .container-sm,
    .container {
        max-width: 1320px;
    }
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-0.5 * var(--bs-gutter-x));
    margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
    margin-top: var(--bs-gutter-y);
}

.col {
    flex: 1 0 0%;
}

.row-cols-auto > * {
    flex: 0 0 auto;
    width: auto;
}

.row-cols-1 > * {
    flex: 0 0 auto;
    width: 100%;
}

.row-cols-2 > * {
    flex: 0 0 auto;
    width: 50%;
}

.row-cols-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
}

.row-cols-4 > * {
    flex: 0 0 auto;
    width: 25%;
}

.row-cols-5 > * {
    flex: 0 0 auto;
    width: 20%;
}

.row-cols-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
}

.col-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
}

.col-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
}

.col-3 {
    flex: 0 0 auto;
    width: 25%;
}

.col-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
}

.col-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
}

.col-6 {
    flex: 0 0 auto;
    width: 50%;
}

.col-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
}

.col-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
}

.col-9 {
    flex: 0 0 auto;
    width: 75%;
}

.col-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
}

.col-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
}

.col-12 {
    flex: 0 0 auto;
    width: 100%;
}

.offset-1 {
    margin-left: 8.33333333%;
}

.offset-2 {
    margin-left: 16.66666667%;
}

.offset-3 {
    margin-left: 25%;
}

.offset-4 {
    margin-left: 33.33333333%;
}

.offset-5 {
    margin-left: 41.66666667%;
}

.offset-6 {
    margin-left: 50%;
}

.offset-7 {
    margin-left: 58.33333333%;
}

.offset-8 {
    margin-left: 66.66666667%;
}

.offset-9 {
    margin-left: 75%;
}

.offset-10 {
    margin-left: 83.33333333%;
}

.offset-11 {
    margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
    --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
    --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
    --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
    --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
    --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
    --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
    --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
    --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
    --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
    --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
    --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
    --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
    .col-sm {
        flex: 1 0 0%;
    }
    .row-cols-sm-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-sm-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-sm-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-sm-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-sm-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-sm-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-sm-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-sm-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-sm-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-sm-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-sm-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-sm-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-sm-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-sm-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-sm-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-sm-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-sm-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-sm-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-sm-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-sm-0 {
        margin-left: 0;
    }
    .offset-sm-1 {
        margin-left: 8.33333333%;
    }
    .offset-sm-2 {
        margin-left: 16.66666667%;
    }
    .offset-sm-3 {
        margin-left: 25%;
    }
    .offset-sm-4 {
        margin-left: 33.33333333%;
    }
    .offset-sm-5 {
        margin-left: 41.66666667%;
    }
    .offset-sm-6 {
        margin-left: 50%;
    }
    .offset-sm-7 {
        margin-left: 58.33333333%;
    }
    .offset-sm-8 {
        margin-left: 66.66666667%;
    }
    .offset-sm-9 {
        margin-left: 75%;
    }
    .offset-sm-10 {
        margin-left: 83.33333333%;
    }
    .offset-sm-11 {
        margin-left: 91.66666667%;
    }
    .g-sm-0,
    .gx-sm-0 {
        --bs-gutter-x: 0;
    }
    .g-sm-0,
    .gy-sm-0 {
        --bs-gutter-y: 0;
    }
    .g-sm-1,
    .gx-sm-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-sm-1,
    .gy-sm-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-sm-2,
    .gx-sm-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-sm-2,
    .gy-sm-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-sm-3,
    .gx-sm-3 {
        --bs-gutter-x: 1rem;
    }
    .g-sm-3,
    .gy-sm-3 {
        --bs-gutter-y: 1rem;
    }
    .g-sm-4,
    .gx-sm-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-sm-4,
    .gy-sm-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-sm-5,
    .gx-sm-5 {
        --bs-gutter-x: 3rem;
    }
    .g-sm-5,
    .gy-sm-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 768px) {
    .col-md {
        flex: 1 0 0%;
    }
    .row-cols-md-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-md-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-md-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-md-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-md-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-md-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-md-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-md-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-md-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-md-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-md-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-md-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-md-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-md-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-md-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-md-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-md-0 {
        margin-left: 0;
    }
    .offset-md-1 {
        margin-left: 8.33333333%;
    }
    .offset-md-2 {
        margin-left: 16.66666667%;
    }
    .offset-md-3 {
        margin-left: 25%;
    }
    .offset-md-4 {
        margin-left: 33.33333333%;
    }
    .offset-md-5 {
        margin-left: 41.66666667%;
    }
    .offset-md-6 {
        margin-left: 50%;
    }
    .offset-md-7 {
        margin-left: 58.33333333%;
    }
    .offset-md-8 {
        margin-left: 66.66666667%;
    }
    .offset-md-9 {
        margin-left: 75%;
    }
    .offset-md-10 {
        margin-left: 83.33333333%;
    }
    .offset-md-11 {
        margin-left: 91.66666667%;
    }
    .g-md-0,
    .gx-md-0 {
        --bs-gutter-x: 0;
    }
    .g-md-0,
    .gy-md-0 {
        --bs-gutter-y: 0;
    }
    .g-md-1,
    .gx-md-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-md-1,
    .gy-md-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-md-2,
    .gx-md-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-md-2,
    .gy-md-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-md-3,
    .gx-md-3 {
        --bs-gutter-x: 1rem;
    }
    .g-md-3,
    .gy-md-3 {
        --bs-gutter-y: 1rem;
    }
    .g-md-4,
    .gx-md-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-md-4,
    .gy-md-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-md-5,
    .gx-md-5 {
        --bs-gutter-x: 3rem;
    }
    .g-md-5,
    .gy-md-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 992px) {
    .col-lg {
        flex: 1 0 0%;
    }
    .row-cols-lg-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-lg-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-lg-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-lg-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-lg-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-lg-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-lg-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-lg-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-lg-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-lg-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-lg-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-lg-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-lg-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-lg-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-lg-0 {
        margin-left: 0;
    }
    .offset-lg-1 {
        margin-left: 8.33333333%;
    }
    .offset-lg-2 {
        margin-left: 16.66666667%;
    }
    .offset-lg-3 {
        margin-left: 25%;
    }
    .offset-lg-4 {
        margin-left: 33.33333333%;
    }
    .offset-lg-5 {
        margin-left: 41.66666667%;
    }
    .offset-lg-6 {
        margin-left: 50%;
    }
    .offset-lg-7 {
        margin-left: 58.33333333%;
    }
    .offset-lg-8 {
        margin-left: 66.66666667%;
    }
    .offset-lg-9 {
        margin-left: 75%;
    }
    .offset-lg-10 {
        margin-left: 83.33333333%;
    }
    .offset-lg-11 {
        margin-left: 91.66666667%;
    }
    .g-lg-0,
    .gx-lg-0 {
        --bs-gutter-x: 0;
    }
    .g-lg-0,
    .gy-lg-0 {
        --bs-gutter-y: 0;
    }
    .g-lg-1,
    .gx-lg-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-lg-1,
    .gy-lg-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-lg-2,
    .gx-lg-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-lg-2,
    .gy-lg-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-lg-3,
    .gx-lg-3 {
        --bs-gutter-x: 1rem;
    }
    .g-lg-3,
    .gy-lg-3 {
        --bs-gutter-y: 1rem;
    }
    .g-lg-4,
    .gx-lg-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-lg-4,
    .gy-lg-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-lg-5,
    .gx-lg-5 {
        --bs-gutter-x: 3rem;
    }
    .g-lg-5,
    .gy-lg-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 1200px) {
    .col-xl {
        flex: 1 0 0%;
    }
    .row-cols-xl-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-xl-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-xl-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-xl-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-xl-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-xl-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-xl-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-xl-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-xl-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-xl-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-xl-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-xl-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-xl-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-xl-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-xl-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-xl-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-xl-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-xl-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-xl-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-xl-0 {
        margin-left: 0;
    }
    .offset-xl-1 {
        margin-left: 8.33333333%;
    }
    .offset-xl-2 {
        margin-left: 16.66666667%;
    }
    .offset-xl-3 {
        margin-left: 25%;
    }
    .offset-xl-4 {
        margin-left: 33.33333333%;
    }
    .offset-xl-5 {
        margin-left: 41.66666667%;
    }
    .offset-xl-6 {
        margin-left: 50%;
    }
    .offset-xl-7 {
        margin-left: 58.33333333%;
    }
    .offset-xl-8 {
        margin-left: 66.66666667%;
    }
    .offset-xl-9 {
        margin-left: 75%;
    }
    .offset-xl-10 {
        margin-left: 83.33333333%;
    }
    .offset-xl-11 {
        margin-left: 91.66666667%;
    }
    .g-xl-0,
    .gx-xl-0 {
        --bs-gutter-x: 0;
    }
    .g-xl-0,
    .gy-xl-0 {
        --bs-gutter-y: 0;
    }
    .g-xl-1,
    .gx-xl-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-xl-1,
    .gy-xl-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-xl-2,
    .gx-xl-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-xl-2,
    .gy-xl-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-xl-3,
    .gx-xl-3 {
        --bs-gutter-x: 1rem;
    }
    .g-xl-3,
    .gy-xl-3 {
        --bs-gutter-y: 1rem;
    }
    .g-xl-4,
    .gx-xl-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-xl-4,
    .gy-xl-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-xl-5,
    .gx-xl-5 {
        --bs-gutter-x: 3rem;
    }
    .g-xl-5,
    .gy-xl-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 1400px) {
    .col-xxl {
        flex: 1 0 0%;
    }
    .row-cols-xxl-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-xxl-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-xxl-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-xxl-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-xxl-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-xxl-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-xxl-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-xxl-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-xxl-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-xxl-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-xxl-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-xxl-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-xxl-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-xxl-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-xxl-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-xxl-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-xxl-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-xxl-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-xxl-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-xxl-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-xxl-0 {
        margin-left: 0;
    }
    .offset-xxl-1 {
        margin-left: 8.33333333%;
    }
    .offset-xxl-2 {
        margin-left: 16.66666667%;
    }
    .offset-xxl-3 {
        margin-left: 25%;
    }
    .offset-xxl-4 {
        margin-left: 33.33333333%;
    }
    .offset-xxl-5 {
        margin-left: 41.66666667%;
    }
    .offset-xxl-6 {
        margin-left: 50%;
    }
    .offset-xxl-7 {
        margin-left: 58.33333333%;
    }
    .offset-xxl-8 {
        margin-left: 66.66666667%;
    }
    .offset-xxl-9 {
        margin-left: 75%;
    }
    .offset-xxl-10 {
        margin-left: 83.33333333%;
    }
    .offset-xxl-11 {
        margin-left: 91.66666667%;
    }
    .g-xxl-0,
    .gx-xxl-0 {
        --bs-gutter-x: 0;
    }
    .g-xxl-0,
    .gy-xxl-0 {
        --bs-gutter-y: 0;
    }
    .g-xxl-1,
    .gx-xxl-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-xxl-1,
    .gy-xxl-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-xxl-2,
    .gx-xxl-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-xxl-2,
    .gy-xxl-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-xxl-3,
    .gx-xxl-3 {
        --bs-gutter-x: 1rem;
    }
    .g-xxl-3,
    .gy-xxl-3 {
        --bs-gutter-y: 1rem;
    }
    .g-xxl-4,
    .gx-xxl-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-xxl-4,
    .gy-xxl-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-xxl-5,
    .gx-xxl-5 {
        --bs-gutter-x: 3rem;
    }
    .g-xxl-5,
    .gy-xxl-5 {
        --bs-gutter-y: 3rem;
    }
}
.table {
    --bs-table-color: var(--bs-body-color);
    --bs-table-bg: transparent;
    --bs-table-border-color: var(--bs-border-color);
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: var(--bs-body-color);
    --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
    --bs-table-active-color: var(--bs-body-color);
    --bs-table-active-bg: rgba(0, 0, 0, 0.1);
    --bs-table-hover-color: var(--bs-body-color);
    --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
    width: 100%;
    margin-bottom: 1rem;
    color: var(--bs-table-color);
    vertical-align: top;
    border-color: var(--bs-table-border-color);
}
.table > :not(caption) > * > * {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody {
    vertical-align: inherit;
}
.table > thead {
    vertical-align: bottom;
}

.table-group-divider {
    border-top: 2px solid currentcolor;
}

.caption-top {
    caption-side: top;
}

.table-sm > :not(caption) > * > * {
    padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > * {
    border-width: 1px 0;
}
.table-bordered > :not(caption) > * > * {
    border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
    border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
    border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
    --bs-table-accent-bg: var(--bs-table-striped-bg);
    color: var(--bs-table-striped-color);
}

.table-striped-columns > :not(caption) > tr > :nth-child(even) {
    --bs-table-accent-bg: var(--bs-table-striped-bg);
    color: var(--bs-table-striped-color);
}

.table-active {
    --bs-table-accent-bg: var(--bs-table-active-bg);
    color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > * {
    --bs-table-accent-bg: var(--bs-table-hover-bg);
    color: var(--bs-table-hover-color);
}

.table-primary {
    --bs-table-color: #000;
    --bs-table-bg: #cfe2ff;
    --bs-table-border-color: #bacbe6;
    --bs-table-striped-bg: #c5d7f2;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #bacbe6;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #bfd1ec;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-secondary {
    --bs-table-color: #000;
    --bs-table-bg: #e2e3e5;
    --bs-table-border-color: #cbccce;
    --bs-table-striped-bg: #d7d8da;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #cbccce;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #d1d2d4;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-success {
    --bs-table-color: #000;
    --bs-table-bg: #d1e7dd;
    --bs-table-border-color: #bcd0c7;
    --bs-table-striped-bg: #c7dbd2;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #bcd0c7;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #c1d6cc;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-info {
    --bs-table-color: #000;
    --bs-table-bg: #cff4fc;
    --bs-table-border-color: #badce3;
    --bs-table-striped-bg: #c5e8ef;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #badce3;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #bfe2e9;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-warning {
    --bs-table-color: #000;
    --bs-table-bg: #fff3cd;
    --bs-table-border-color: #e6dbb9;
    --bs-table-striped-bg: #f2e7c3;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #e6dbb9;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #ece1be;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-danger {
    --bs-table-color: #000;
    --bs-table-bg: #f8d7da;
    --bs-table-border-color: #dfc2c4;
    --bs-table-striped-bg: #eccccf;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #dfc2c4;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #e5c7ca;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-light {
    --bs-table-color: #000;
    --bs-table-bg: #f8f9fa;
    --bs-table-border-color: #dfe0e1;
    --bs-table-striped-bg: #ecedee;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #dfe0e1;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #e5e6e7;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-dark {
    --bs-table-color: #fff;
    --bs-table-bg: #212529;
    --bs-table-border-color: #373b3e;
    --bs-table-striped-bg: #2c3034;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 767.98px) {
    .table-responsive-md {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 991.98px) {
    .table-responsive-lg {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 1199.98px) {
    .table-responsive-xl {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 1399.98px) {
    .table-responsive-xxl {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
.form-label {
    margin-bottom: 0.5rem;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.25rem;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
}

.form-text {
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #6c757d;
}

.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}
.form-control[type='file'] {
    overflow: hidden;
}
.form-control[type='file']:not(:disabled):not([readonly]) {
    cursor: pointer;
}
.form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-control::-webkit-date-and-time-value {
    height: 1.5em;
}
.form-control::-moz-placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control::placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control:disabled {
    background-color: #e9ecef;
    opacity: 1;
}
.form-control::file-selector-button {
    padding: 0.375rem 0.75rem;
    margin: -0.375rem -0.75rem;
    -webkit-margin-end: 0.75rem;
    margin-inline-end: 0.75rem;
    color: #212529;
    background-color: #e9ecef;
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: 1px;
    border-radius: 0;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-control::file-selector-button {
        transition: none;
    }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
    background-color: #dde0e3;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding: 0.375rem 0;
    margin-bottom: 0;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}
.form-control-plaintext:focus {
    outline: 0;
}
.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    min-height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 0.25rem;
}
.form-control-sm::file-selector-button {
    padding: 0.25rem 0.5rem;
    margin: -0.25rem -0.5rem;
    -webkit-margin-end: 0.5rem;
    margin-inline-end: 0.5rem;
}

.form-control-lg {
    min-height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    border-radius: 0.5rem;
}
.form-control-lg::file-selector-button {
    padding: 0.5rem 1rem;
    margin: -0.5rem -1rem;
    -webkit-margin-end: 1rem;
    margin-inline-end: 1rem;
}

textarea.form-control {
    min-height: calc(1.5em + 0.75rem + 2px);
}
textarea.form-control-sm {
    min-height: calc(1.5em + 0.5rem + 2px);
}
textarea.form-control-lg {
    min-height: calc(1.5em + 1rem + 2px);
}

.form-control-color {
    width: 3rem;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem;
}
.form-control-color:not(:disabled):not([readonly]) {
    cursor: pointer;
}
.form-control-color::-moz-color-swatch {
    border: 0 !important;
    border-radius: 0.375rem;
}
.form-control-color::-webkit-color-swatch {
    border-radius: 0.375rem;
}
.form-control-color.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
}
.form-control-color.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
}

.form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .form-select {
        transition: none;
    }
}
.form-select:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-select[multiple],
.form-select[size]:not([size='1']) {
    padding-right: 0.75rem;
    background-image: none;
}
.form-select:disabled {
    background-color: #e9ecef;
}
.form-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #212529;
}

.form-select-sm {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem;
    border-radius: 0.25rem;
}

.form-select-lg {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1rem;
    font-size: 1.25rem;
    border-radius: 0.5rem;
}

.form-check {
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5em;
    margin-bottom: 0.125rem;
}
.form-check .form-check-input {
    float: left;
    margin-left: -1.5em;
}

.form-check-reverse {
    padding-right: 1.5em;
    padding-left: 0;
    text-align: right;
}
.form-check-reverse .form-check-input {
    float: right;
    margin-right: -1.5em;
    margin-left: 0;
}

.form-check-input {
    width: 1em;
    height: 1em;
    margin-top: 0.25em;
    vertical-align: top;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1px solid rgba(0, 0, 0, 0.25);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}
.form-check-input[type='checkbox'] {
    border-radius: 0.25em;
}
.form-check-input[type='radio'] {
    border-radius: 50%;
}
.form-check-input:active {
    filter: brightness(90%);
}
.form-check-input:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-check-input:checked {
    background-color: #0d6efd;
    border-color: #0d6efd;
}
.form-check-input:checked[type='checkbox'] {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type='radio'] {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type='checkbox']:indeterminate {
    background-color: #0d6efd;
    border-color: #0d6efd;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
    pointer-events: none;
    filter: none;
    opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label,
.form-check-input:disabled ~ .form-check-label {
    cursor: default;
    opacity: 0.5;
}

.form-switch {
    padding-left: 2.5em;
}
.form-switch .form-check-input {
    width: 2em;
    margin-left: -2.5em;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
    background-position: left center;
    border-radius: 2em;
    transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-switch .form-check-input {
        transition: none;
    }
}
.form-switch .form-check-input:focus {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
    background-position: right center;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
    padding-right: 2.5em;
    padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
    margin-right: -2.5em;
    margin-left: 0;
}

.form-check-inline {
    display: inline-block;
    margin-right: 1rem;
}

.btn-check {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}
.btn-check[disabled] + .btn,
.btn-check:disabled + .btn {
    pointer-events: none;
    filter: none;
    opacity: 0.65;
}

.form-range {
    width: 100%;
    height: 1.5rem;
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.form-range:focus {
    outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-range::-moz-focus-outer {
    border: 0;
}
.form-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #0d6efd;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .form-range::-webkit-slider-thumb {
        -webkit-transition: none;
        transition: none;
    }
}
.form-range::-webkit-slider-thumb:active {
    background-color: #b6d4fe;
}
.form-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}
.form-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #0d6efd;
    border: 0;
    border-radius: 1rem;
    -moz-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .form-range::-moz-range-thumb {
        -moz-transition: none;
        transition: none;
    }
}
.form-range::-moz-range-thumb:active {
    background-color: #b6d4fe;
}
.form-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}
.form-range:disabled {
    pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd;
}
.form-range:disabled::-moz-range-thumb {
    background-color: #adb5bd;
}

.form-floating {
    position: relative;
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
}
.form-floating > label {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 1rem 0.75rem;
    overflow: hidden;
    text-align: start;
    text-overflow: ellipsis;
    white-space: nowrap;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-floating > label {
        transition: none;
    }
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext {
    padding: 1rem 0.75rem;
}
.form-floating > .form-control::-moz-placeholder,
.form-floating > .form-control-plaintext::-moz-placeholder {
    color: transparent;
}
.form-floating > .form-control::placeholder,
.form-floating > .form-control-plaintext::placeholder {
    color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown),
.form-floating > .form-control-plaintext:not(:-moz-placeholder-shown) {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus,
.form-floating > .form-control:not(:placeholder-shown),
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown) {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill,
.form-floating > .form-control-plaintext:-webkit-autofill {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-select {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-select ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
    border-width: 1px 0;
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}
.input-group > .form-control,
.input-group > .form-select,
.input-group > .form-floating {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus,
.input-group > .form-floating:focus-within {
    z-index: 5;
}
.input-group .btn {
    position: relative;
    z-index: 2;
}
.input-group .btn:focus {
    z-index: 5;
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
}

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    border-radius: 0.5rem;
}

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 0.25rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
    padding-right: 3rem;
}

.input-group:not(.has-validation)
    > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(
        .form-floating
    ),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3),
.input-group:not(.has-validation)
    > .form-floating:not(:last-child)
    > .form-control,
.input-group:not(.has-validation)
    > .form-floating:not(:last-child)
    > .form-select {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group.has-validation
    > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu):not(
        .form-floating
    ),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4),
.input-group.has-validation
    > .form-floating:nth-last-child(n + 3)
    > .form-control,
.input-group.has-validation
    > .form-floating:nth-last-child(n + 3)
    > .form-select {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group
    > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(
        .valid-feedback
    ):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: -1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group > .form-floating:not(:first-child) > .form-control,
.input-group > .form-floating:not(:first-child) > .form-select {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #198754;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    color: #fff;
    background-color: rgba(25, 135, 84, 0.9);
    border-radius: 0.375rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .form-control:valid,
.form-control.is-valid {
    border-color: #198754;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:valid:focus,
.form-control.is-valid:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right
        calc(0.375em + 0.1875rem);
}

.was-validated .form-select:valid,
.form-select.is-valid {
    border-color: #198754;
}
.was-validated .form-select:valid:not([multiple]):not([size]),
.was-validated .form-select:valid:not([multiple])[size='1'],
.form-select.is-valid:not([multiple]):not([size]),
.form-select.is-valid:not([multiple])[size='1'] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"),
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-select:valid:focus,
.form-select.is-valid:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated .form-control-color:valid,
.form-control-color.is-valid {
    width: calc(3rem + calc(1.5em + 0.75rem));
}

.was-validated .form-check-input:valid,
.form-check-input.is-valid {
    border-color: #198754;
}
.was-validated .form-check-input:valid:checked,
.form-check-input.is-valid:checked {
    background-color: #198754;
}
.was-validated .form-check-input:valid:focus,
.form-check-input.is-valid:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label,
.form-check-input.is-valid ~ .form-check-label {
    color: #198754;
}

.form-check-inline .form-check-input ~ .valid-feedback {
    margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):valid,
.input-group > .form-control:not(:focus).is-valid,
.was-validated .input-group > .form-select:not(:focus):valid,
.input-group > .form-select:not(:focus).is-valid,
.was-validated .input-group > .form-floating:not(:focus-within):valid,
.input-group > .form-floating:not(:focus-within).is-valid {
    z-index: 3;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #dc3545;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    color: #fff;
    background-color: rgba(220, 53, 69, 0.9);
    border-radius: 0.375rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .form-control:invalid,
.form-control.is-invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right
        calc(0.375em + 0.1875rem);
}

.was-validated .form-select:invalid,
.form-select.is-invalid {
    border-color: #dc3545;
}
.was-validated .form-select:invalid:not([multiple]):not([size]),
.was-validated .form-select:invalid:not([multiple])[size='1'],
.form-select.is-invalid:not([multiple]):not([size]),
.form-select.is-invalid:not([multiple])[size='1'] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"),
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-select:invalid:focus,
.form-select.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-control-color:invalid,
.form-control-color.is-invalid {
    width: calc(3rem + calc(1.5em + 0.75rem));
}

.was-validated .form-check-input:invalid,
.form-check-input.is-invalid {
    border-color: #dc3545;
}
.was-validated .form-check-input:invalid:checked,
.form-check-input.is-invalid:checked {
    background-color: #dc3545;
}
.was-validated .form-check-input:invalid:focus,
.form-check-input.is-invalid:focus {
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label,
.form-check-input.is-invalid ~ .form-check-label {
    color: #dc3545;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
    margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):invalid,
.input-group > .form-control:not(:focus).is-invalid,
.was-validated .input-group > .form-select:not(:focus):invalid,
.input-group > .form-select:not(:focus).is-invalid,
.was-validated .input-group > .form-floating:not(:focus-within):invalid,
.input-group > .form-floating:not(:focus-within).is-invalid {
    z-index: 4;
}

.btn {
    --bs-btn-padding-x: 0.75rem;
    --bs-btn-padding-y: 0.375rem;
    --bs-btn-font-family: ;
    --bs-btn-font-size: 1rem;
    --bs-btn-font-weight: 400;
    --bs-btn-line-height: 1.5;
    --bs-btn-color: #212529;
    --bs-btn-bg: transparent;
    --bs-btn-border-width: 1px;
    --bs-btn-border-color: transparent;
    --bs-btn-border-radius: 0.375rem;
    --bs-btn-hover-border-color: transparent;
    --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),
        0 1px 1px rgba(0, 0, 0, 0.075);
    --bs-btn-disabled-opacity: 0.65;
    --bs-btn-focus-box-shadow: 0 0 0 0.25rem
        rgba(var(--bs-btn-focus-shadow-rgb), 0.5);
    display: inline-block;
    padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
    font-family: var(--bs-btn-font-family);
    font-size: var(--bs-btn-font-size);
    font-weight: var(--bs-btn-font-weight);
    line-height: var(--bs-btn-line-height);
    color: var(--bs-btn-color);
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
    border-radius: var(--bs-btn-border-radius);
    background-color: var(--bs-btn-bg);
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}
.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);
}
.btn-check + .btn:hover {
    color: var(--bs-btn-color);
    background-color: var(--bs-btn-bg);
    border-color: var(--bs-btn-border-color);
}
.btn:focus-visible {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);
    outline: 0;
    box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:focus-visible + .btn {
    border-color: var(--bs-btn-hover-border-color);
    outline: 0;
    box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:checked + .btn,
:not(.btn-check) + .btn:active,
.btn:first-child:active,
.btn.active,
.btn.show {
    color: var(--bs-btn-active-color);
    background-color: var(--bs-btn-active-bg);
    border-color: var(--bs-btn-active-border-color);
}
.btn-check:checked + .btn:focus-visible,
:not(.btn-check) + .btn:active:focus-visible,
.btn:first-child:active:focus-visible,
.btn.active:focus-visible,
.btn.show:focus-visible {
    box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn:disabled,
.btn.disabled,
fieldset:disabled .btn {
    color: var(--bs-btn-disabled-color);
    pointer-events: none;
    background-color: var(--bs-btn-disabled-bg);
    border-color: var(--bs-btn-disabled-border-color);
    opacity: var(--bs-btn-disabled-opacity);
}

.btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #0d6efd;
    --bs-btn-border-color: #0d6efd;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0b5ed7;
    --bs-btn-hover-border-color: #0a58ca;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #0a53be;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0d6efd;
    --bs-btn-disabled-border-color: #0d6efd;
}

.btn-secondary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #6c757d;
    --bs-btn-border-color: #6c757d;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #5c636a;
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130, 138, 145;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
}

.btn-success {
    --bs-btn-color: #fff;
    --bs-btn-bg: #198754;
    --bs-btn-border-color: #198754;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #157347;
    --bs-btn-hover-border-color: #146c43;
    --bs-btn-focus-shadow-rgb: 60, 153, 110;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #146c43;
    --bs-btn-active-border-color: #13653f;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #198754;
    --bs-btn-disabled-border-color: #198754;
}

.btn-info {
    --bs-btn-color: #000;
    --bs-btn-bg: #0dcaf0;
    --bs-btn-border-color: #0dcaf0;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #31d2f2;
    --bs-btn-hover-border-color: #25cff2;
    --bs-btn-focus-shadow-rgb: 11, 172, 204;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #3dd5f3;
    --bs-btn-active-border-color: #25cff2;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #000;
    --bs-btn-disabled-bg: #0dcaf0;
    --bs-btn-disabled-border-color: #0dcaf0;
}

.btn-warning {
    --bs-btn-color: #000;
    --bs-btn-bg: #ffc107;
    --bs-btn-border-color: #ffc107;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #ffca2c;
    --bs-btn-hover-border-color: #ffc720;
    --bs-btn-focus-shadow-rgb: 217, 164, 6;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #ffcd39;
    --bs-btn-active-border-color: #ffc720;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #000;
    --bs-btn-disabled-bg: #ffc107;
    --bs-btn-disabled-border-color: #ffc107;
}

.btn-danger {
    --bs-btn-color: #fff;
    --bs-btn-bg: #dc3545;
    --bs-btn-border-color: #dc3545;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #bb2d3b;
    --bs-btn-hover-border-color: #b02a37;
    --bs-btn-focus-shadow-rgb: 225, 83, 97;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #b02a37;
    --bs-btn-active-border-color: #a52834;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #dc3545;
    --bs-btn-disabled-border-color: #dc3545;
}

.btn-light {
    --bs-btn-color: #000;
    --bs-btn-bg: #f8f9fa;
    --bs-btn-border-color: #f8f9fa;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #d3d4d5;
    --bs-btn-hover-border-color: #c6c7c8;
    --bs-btn-focus-shadow-rgb: 211, 212, 213;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #c6c7c8;
    --bs-btn-active-border-color: #babbbc;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #000;
    --bs-btn-disabled-bg: #f8f9fa;
    --bs-btn-disabled-border-color: #f8f9fa;
}

.btn-dark {
    --bs-btn-color: #fff;
    --bs-btn-bg: #212529;
    --bs-btn-border-color: #212529;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #424649;
    --bs-btn-hover-border-color: #373b3e;
    --bs-btn-focus-shadow-rgb: 66, 70, 73;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #4d5154;
    --bs-btn-active-border-color: #373b3e;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #212529;
    --bs-btn-disabled-border-color: #212529;
}

.btn-outline-primary {
    --bs-btn-color: #0d6efd;
    --bs-btn-border-color: #0d6efd;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0d6efd;
    --bs-btn-hover-border-color: #0d6efd;
    --bs-btn-focus-shadow-rgb: 13, 110, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0d6efd;
    --bs-btn-active-border-color: #0d6efd;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #0d6efd;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #0d6efd;
    --bs-gradient: none;
}

.btn-outline-secondary {
    --bs-btn-color: #6c757d;
    --bs-btn-border-color: #6c757d;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #6c757d;
    --bs-btn-hover-border-color: #6c757d;
    --bs-btn-focus-shadow-rgb: 108, 117, 125;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #6c757d;
    --bs-btn-active-border-color: #6c757d;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #6c757d;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #6c757d;
    --bs-gradient: none;
}

.btn-outline-success {
    --bs-btn-color: #198754;
    --bs-btn-border-color: #198754;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #198754;
    --bs-btn-hover-border-color: #198754;
    --bs-btn-focus-shadow-rgb: 25, 135, 84;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #198754;
    --bs-btn-active-border-color: #198754;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #198754;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #198754;
    --bs-gradient: none;
}

.btn-outline-info {
    --bs-btn-color: #0dcaf0;
    --bs-btn-border-color: #0dcaf0;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #0dcaf0;
    --bs-btn-hover-border-color: #0dcaf0;
    --bs-btn-focus-shadow-rgb: 13, 202, 240;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #0dcaf0;
    --bs-btn-active-border-color: #0dcaf0;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #0dcaf0;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #0dcaf0;
    --bs-gradient: none;
}

.btn-outline-warning {
    --bs-btn-color: #ffc107;
    --bs-btn-border-color: #ffc107;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #ffc107;
    --bs-btn-hover-border-color: #ffc107;
    --bs-btn-focus-shadow-rgb: 255, 193, 7;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #ffc107;
    --bs-btn-active-border-color: #ffc107;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #ffc107;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #ffc107;
    --bs-gradient: none;
}

.btn-outline-danger {
    --bs-btn-color: #dc3545;
    --bs-btn-border-color: #dc3545;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #dc3545;
    --bs-btn-hover-border-color: #dc3545;
    --bs-btn-focus-shadow-rgb: 220, 53, 69;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #dc3545;
    --bs-btn-active-border-color: #dc3545;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #dc3545;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #dc3545;
    --bs-gradient: none;
}

.btn-outline-light {
    --bs-btn-color: #f8f9fa;
    --bs-btn-border-color: #f8f9fa;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #f8f9fa;
    --bs-btn-hover-border-color: #f8f9fa;
    --bs-btn-focus-shadow-rgb: 248, 249, 250;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #f8f9fa;
    --bs-btn-active-border-color: #f8f9fa;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #f8f9fa;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #f8f9fa;
    --bs-gradient: none;
}

.btn-outline-dark {
    --bs-btn-color: #212529;
    --bs-btn-border-color: #212529;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #212529;
    --bs-btn-hover-border-color: #212529;
    --bs-btn-focus-shadow-rgb: 33, 37, 41;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #212529;
    --bs-btn-active-border-color: #212529;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #212529;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #212529;
    --bs-gradient: none;
}

.btn-link {
    --bs-btn-font-weight: 400;
    --bs-btn-color: var(--bs-link-color);
    --bs-btn-bg: transparent;
    --bs-btn-border-color: transparent;
    --bs-btn-hover-color: var(--bs-link-hover-color);
    --bs-btn-hover-border-color: transparent;
    --bs-btn-active-color: var(--bs-link-hover-color);
    --bs-btn-active-border-color: transparent;
    --bs-btn-disabled-color: #6c757d;
    --bs-btn-disabled-border-color: transparent;
    --bs-btn-box-shadow: none;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    text-decoration: underline;
}
.btn-link:focus-visible {
    color: var(--bs-btn-color);
}
.btn-link:hover {
    color: var(--bs-btn-hover-color);
}

.btn-lg,
.btn-group-lg > .btn {
    --bs-btn-padding-y: 0.5rem;
    --bs-btn-padding-x: 1rem;
    --bs-btn-font-size: 1.25rem;
    --bs-btn-border-radius: 0.5rem;
}

.btn-sm,
.btn-group-sm > .btn {
    --bs-btn-padding-y: 0.25rem;
    --bs-btn-padding-x: 0.5rem;
    --bs-btn-font-size: 0.875rem;
    --bs-btn-border-radius: 0.25rem;
}

.fade {
    transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}
.fade:not(.show) {
    opacity: 0;
}

.collapse:not(.show) {
    display: none;
}

.collapsing {
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}
.collapsing.collapse-horizontal {
    width: 0;
    height: auto;
    transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
    .collapsing.collapse-horizontal {
        transition: none;
    }
}

.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
    position: relative;
}

.dropdown-toggle {
    white-space: nowrap;
}
.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    --bs-dropdown-zindex: 1000;
    --bs-dropdown-min-width: 10rem;
    --bs-dropdown-padding-x: 0;
    --bs-dropdown-padding-y: 0.5rem;
    --bs-dropdown-spacer: 0.125rem;
    --bs-dropdown-font-size: 1rem;
    --bs-dropdown-color: #212529;
    --bs-dropdown-bg: #fff;
    --bs-dropdown-border-color: var(--bs-border-color-translucent);
    --bs-dropdown-border-radius: 0.375rem;
    --bs-dropdown-border-width: 1px;
    --bs-dropdown-inner-border-radius: calc(0.375rem - 1px);
    --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
    --bs-dropdown-divider-margin-y: 0.5rem;
    --bs-dropdown-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    --bs-dropdown-link-color: #212529;
    --bs-dropdown-link-hover-color: #1e2125;
    --bs-dropdown-link-hover-bg: #e9ecef;
    --bs-dropdown-link-active-color: #fff;
    --bs-dropdown-link-active-bg: #0d6efd;
    --bs-dropdown-link-disabled-color: #adb5bd;
    --bs-dropdown-item-padding-x: 1rem;
    --bs-dropdown-item-padding-y: 0.25rem;
    --bs-dropdown-header-color: #6c757d;
    --bs-dropdown-header-padding-x: 1rem;
    --bs-dropdown-header-padding-y: 0.5rem;
    position: absolute;
    z-index: var(--bs-dropdown-zindex);
    display: none;
    min-width: var(--bs-dropdown-min-width);
    padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
    margin: 0;
    font-size: var(--bs-dropdown-font-size);
    color: var(--bs-dropdown-color);
    text-align: left;
    list-style: none;
    background-color: var(--bs-dropdown-bg);
    background-clip: padding-box;
    border: var(--bs-dropdown-border-width) solid
        var(--bs-dropdown-border-color);
    border-radius: var(--bs-dropdown-border-radius);
}
.dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: var(--bs-dropdown-spacer);
}

.dropdown-menu-start {
    --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
    right: auto;
    left: 0;
}

.dropdown-menu-end {
    --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-start {
        --bs-position: start;
    }
    .dropdown-menu-sm-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-sm-end {
        --bs-position: end;
    }
    .dropdown-menu-sm-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 768px) {
    .dropdown-menu-md-start {
        --bs-position: start;
    }
    .dropdown-menu-md-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-md-end {
        --bs-position: end;
    }
    .dropdown-menu-md-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 992px) {
    .dropdown-menu-lg-start {
        --bs-position: start;
    }
    .dropdown-menu-lg-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-lg-end {
        --bs-position: end;
    }
    .dropdown-menu-lg-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 1200px) {
    .dropdown-menu-xl-start {
        --bs-position: start;
    }
    .dropdown-menu-xl-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-xl-end {
        --bs-position: end;
    }
    .dropdown-menu-xl-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 1400px) {
    .dropdown-menu-xxl-start {
        --bs-position: start;
    }
    .dropdown-menu-xxl-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-xxl-end {
        --bs-position: end;
    }
    .dropdown-menu-xxl-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
.dropup .dropdown-menu[data-bs-popper] {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: var(--bs-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: var(--bs-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropend .dropdown-toggle::after {
    vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: var(--bs-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
}
.dropstart .dropdown-toggle::after {
    display: none;
}
.dropstart .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropstart .dropdown-toggle::before {
    vertical-align: 0;
}

.dropdown-divider {
    height: 0;
    margin: var(--bs-dropdown-divider-margin-y) 0;
    overflow: hidden;
    border-top: 1px solid var(--bs-dropdown-divider-bg);
    opacity: 1;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    clear: both;
    font-weight: 400;
    color: var(--bs-dropdown-link-color);
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
.dropdown-item:hover,
.dropdown-item:focus {
    color: var(--bs-dropdown-link-hover-color);
    background-color: var(--bs-dropdown-link-hover-bg);
}
.dropdown-item.active,
.dropdown-item:active {
    color: var(--bs-dropdown-link-active-color);
    text-decoration: none;
    background-color: var(--bs-dropdown-link-active-bg);
}
.dropdown-item.disabled,
.dropdown-item:disabled {
    color: var(--bs-dropdown-link-disabled-color);
    pointer-events: none;
    background-color: transparent;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: var(--bs-dropdown-header-padding-y)
        var(--bs-dropdown-header-padding-x);
    margin-bottom: 0;
    font-size: 0.875rem;
    color: var(--bs-dropdown-header-color);
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    color: var(--bs-dropdown-link-color);
}

.dropdown-menu-dark {
    --bs-dropdown-color: #dee2e6;
    --bs-dropdown-bg: #343a40;
    --bs-dropdown-border-color: var(--bs-border-color-translucent);
    --bs-dropdown-box-shadow: ;
    --bs-dropdown-link-color: #dee2e6;
    --bs-dropdown-link-hover-color: #fff;
    --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
    --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
    --bs-dropdown-link-active-color: #fff;
    --bs-dropdown-link-active-bg: #0d6efd;
    --bs-dropdown-link-disabled-color: #adb5bd;
    --bs-dropdown-header-color: #adb5bd;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
    position: relative;
    flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
    z-index: 1;
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.btn-toolbar .input-group {
    width: auto;
}

.btn-group {
    border-radius: 0.375rem;
}
.btn-group > :not(.btn-check:first-child) + .btn,
.btn-group > .btn-group:not(:first-child) {
    margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn.dropdown-toggle-split:first-child,
.btn-group > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n + 3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem;
}
.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropend .dropdown-toggle-split::after {
    margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm + .dropdown-toggle-split,
.btn-group-sm > .btn + .dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split,
.btn-group-lg > .btn + .dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
    width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav {
    --bs-nav-link-padding-x: 1rem;
    --bs-nav-link-padding-y: 0.5rem;
    --bs-nav-link-font-weight: ;
    --bs-nav-link-color: var(--bs-link-color);
    --bs-nav-link-hover-color: var(--bs-link-hover-color);
    --bs-nav-link-disabled-color: #6c757d;
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-link {
    display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: var(--bs-nav-link-font-weight);
    color: var(--bs-nav-link-color);
    text-decoration: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .nav-link {
        transition: none;
    }
}
.nav-link:hover,
.nav-link:focus {
    color: var(--bs-nav-link-hover-color);
}
.nav-link.disabled {
    color: var(--bs-nav-link-disabled-color);
    pointer-events: none;
    cursor: default;
}

.nav-tabs {
    --bs-nav-tabs-border-width: 1px;
    --bs-nav-tabs-border-color: #dee2e6;
    --bs-nav-tabs-border-radius: 0.375rem;
    --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
    --bs-nav-tabs-link-active-color: #495057;
    --bs-nav-tabs-link-active-bg: #fff;
    --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
    border-bottom: var(--bs-nav-tabs-border-width) solid
        var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-link {
    margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
    background: none;
    border: var(--bs-nav-tabs-border-width) solid transparent;
    border-top-left-radius: var(--bs-nav-tabs-border-radius);
    border-top-right-radius: var(--bs-nav-tabs-border-radius);
}
.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
    isolation: isolate;
    border-color: var(--bs-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.disabled,
.nav-tabs .nav-link:disabled {
    color: var(--bs-nav-link-disabled-color);
    background-color: transparent;
    border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
    color: var(--bs-nav-tabs-link-active-color);
    background-color: var(--bs-nav-tabs-link-active-bg);
    border-color: var(--bs-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu {
    margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav-pills {
    --bs-nav-pills-border-radius: 0.375rem;
    --bs-nav-pills-link-active-color: #fff;
    --bs-nav-pills-link-active-bg: #0d6efd;
}
.nav-pills .nav-link {
    background: none;
    border: 0;
    border-radius: var(--bs-nav-pills-border-radius);
}
.nav-pills .nav-link:disabled {
    color: var(--bs-nav-link-disabled-color);
    background-color: transparent;
    border-color: transparent;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: var(--bs-nav-pills-link-active-bg);
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
    width: 100%;
}

.tab-content > .tab-pane {
    display: none;
}
.tab-content > .active {
    display: block;
}

.navbar {
    --bs-navbar-padding-x: 0;
    --bs-navbar-padding-y: 0.5rem;
    --bs-navbar-color: rgba(0, 0, 0, 0.55);
    --bs-navbar-hover-color: rgba(0, 0, 0, 0.7);
    --bs-navbar-disabled-color: rgba(0, 0, 0, 0.3);
    --bs-navbar-active-color: rgba(0, 0, 0, 0.9);
    --bs-navbar-brand-padding-y: 0.3125rem;
    --bs-navbar-brand-margin-end: 1rem;
    --bs-navbar-brand-font-size: 1.25rem;
    --bs-navbar-brand-color: rgba(0, 0, 0, 0.9);
    --bs-navbar-brand-hover-color: rgba(0, 0, 0, 0.9);
    --bs-navbar-nav-link-padding-x: 0.5rem;
    --bs-navbar-toggler-padding-y: 0.25rem;
    --bs-navbar-toggler-padding-x: 0.75rem;
    --bs-navbar-toggler-font-size: 1.25rem;
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    --bs-navbar-toggler-border-color: rgba(0, 0, 0, 0.1);
    --bs-navbar-toggler-border-radius: 0.375rem;
    --bs-navbar-toggler-focus-width: 0.25rem;
    --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
}
.navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: var(--bs-navbar-brand-margin-end);
    font-size: var(--bs-navbar-brand-font-size);
    color: var(--bs-navbar-brand-color);
    text-decoration: none;
    white-space: nowrap;
}
.navbar-brand:hover,
.navbar-brand:focus {
    color: var(--bs-navbar-brand-hover-color);
}

.navbar-nav {
    --bs-nav-link-padding-x: 0;
    --bs-nav-link-padding-y: 0.5rem;
    --bs-nav-link-font-weight: ;
    --bs-nav-link-color: var(--bs-navbar-color);
    --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
    --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.navbar-nav .show > .nav-link,
.navbar-nav .nav-link.active {
    color: var(--bs-navbar-active-color);
}
.navbar-nav .dropdown-menu {
    position: static;
}

.navbar-text {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    color: var(--bs-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
    color: var(--bs-navbar-active-color);
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbar-toggler {
    padding: var(--bs-navbar-toggler-padding-y)
        var(--bs-navbar-toggler-padding-x);
    font-size: var(--bs-navbar-toggler-font-size);
    line-height: 1;
    color: var(--bs-navbar-color);
    background-color: transparent;
    border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
    border-radius: var(--bs-navbar-toggler-border-radius);
    transition: var(--bs-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
    .navbar-toggler {
        transition: none;
    }
}
.navbar-toggler:hover {
    text-decoration: none;
}
.navbar-toggler:focus {
    text-decoration: none;
    outline: 0;
    box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-image: var(--bs-navbar-toggler-icon-bg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
}

.navbar-nav-scroll {
    max-height: var(--bs-scroll-height, 75vh);
    overflow-y: auto;
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-sm .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-sm .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
    .navbar-expand-sm .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-sm .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-sm .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-md .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-md .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-md .navbar-toggler {
        display: none;
    }
    .navbar-expand-md .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-md .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-md .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-lg .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
    .navbar-expand-lg .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-lg .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-lg .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-xl .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-xl .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
    .navbar-expand-xl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-xl .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-xl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 1400px) {
    .navbar-expand-xxl {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-xxl .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-xxl .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-xxl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-xxl .navbar-toggler {
        display: none;
    }
    .navbar-expand-xxl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-xxl .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-xxl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
.navbar-expand {
    flex-wrap: nowrap;
    justify-content: flex-start;
}
.navbar-expand .navbar-nav {
    flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
    overflow: visible;
}
.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
}
.navbar-expand .navbar-toggler {
    display: none;
}
.navbar-expand .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
    display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
}

.navbar-dark {
    --bs-navbar-color: rgba(255, 255, 255, 0.55);
    --bs-navbar-hover-color: rgba(255, 255, 255, 0.75);
    --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
    --bs-navbar-active-color: #fff;
    --bs-navbar-brand-color: #fff;
    --bs-navbar-brand-hover-color: #fff;
    --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.card {
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-border-width: 1px;
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: 0.375rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(0.375rem - 1px);
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(0, 0, 0, 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
}
.card > hr {
    margin-right: 0;
    margin-left: 0;
}
.card > .list-group {
    border-top: inherit;
    border-bottom: inherit;
}
.card > .list-group:first-child {
    border-top-width: 0;
    border-top-left-radius: var(--bs-card-inner-border-radius);
    border-top-right-radius: var(--bs-card-inner-border-radius);
}
.card > .list-group:last-child {
    border-bottom-width: 0;
    border-bottom-right-radius: var(--bs-card-inner-border-radius);
    border-bottom-left-radius: var(--bs-card-inner-border-radius);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
    border-top: 0;
}

.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
    color: var(--bs-card-color);
}

.card-title {
    margin-bottom: var(--bs-card-title-spacer-y);
}

.card-subtitle {
    margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link + .card-link {
    margin-left: var(--bs-card-spacer-x);
}

.card-header {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    margin-bottom: 0;
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius)
        var(--bs-card-inner-border-radius) 0 0;
}

.card-footer {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-footer:last-child {
    border-radius: 0 0 var(--bs-card-inner-border-radius)
        var(--bs-card-inner-border-radius);
}

.card-header-tabs {
    margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
    margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
    margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
    border-bottom: 0;
}
.card-header-tabs .nav-link.active {
    background-color: var(--bs-card-bg);
    border-bottom-color: var(--bs-card-bg);
}

.card-header-pills {
    margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
    margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: var(--bs-card-img-overlay-padding);
    border-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
    width: 100%;
}

.card-img,
.card-img-top {
    border-top-left-radius: var(--bs-card-inner-border-radius);
    border-top-right-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-bottom {
    border-bottom-right-radius: var(--bs-card-inner-border-radius);
    border-bottom-left-radius: var(--bs-card-inner-border-radius);
}

.card-group > .card {
    margin-bottom: var(--bs-card-group-margin);
}
@media (min-width: 576px) {
    .card-group {
        display: flex;
        flex-flow: row wrap;
    }
    .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }
    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }
    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-top,
    .card-group > .card:not(:last-child) .card-header {
        border-top-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-bottom,
    .card-group > .card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-top,
    .card-group > .card:not(:first-child) .card-header {
        border-top-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-bottom,
    .card-group > .card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
    }
}

.accordion {
    --bs-accordion-color: #212529;
    --bs-accordion-bg: #fff;
    --bs-accordion-transition: color 0.15s ease-in-out,
        background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
    --bs-accordion-border-color: var(--bs-border-color);
    --bs-accordion-border-width: 1px;
    --bs-accordion-border-radius: 0.375rem;
    --bs-accordion-inner-border-radius: calc(0.375rem - 1px);
    --bs-accordion-btn-padding-x: 1.25rem;
    --bs-accordion-btn-padding-y: 1rem;
    --bs-accordion-btn-color: #212529;
    --bs-accordion-btn-bg: var(--bs-accordion-bg);
    --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    --bs-accordion-btn-icon-width: 1.25rem;
    --bs-accordion-btn-icon-transform: rotate(-180deg);
    --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
    --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    --bs-accordion-btn-focus-border-color: #86b7fe;
    --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    --bs-accordion-body-padding-x: 1.25rem;
    --bs-accordion-body-padding-y: 1rem;
    --bs-accordion-active-color: #0c63e4;
    --bs-accordion-active-bg: #e7f1ff;
}

.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
    font-size: 1rem;
    color: var(--bs-accordion-btn-color);
    text-align: left;
    background-color: var(--bs-accordion-btn-bg);
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: var(--bs-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
    .accordion-button {
        transition: none;
    }
}
.accordion-button:not(.collapsed) {
    color: var(--bs-accordion-active-color);
    background-color: var(--bs-accordion-active-bg);
    box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0
        var(--bs-accordion-border-color);
}
.accordion-button:not(.collapsed)::after {
    background-image: var(--bs-accordion-btn-active-icon);
    transform: var(--bs-accordion-btn-icon-transform);
}
.accordion-button::after {
    flex-shrink: 0;
    width: var(--bs-accordion-btn-icon-width);
    height: var(--bs-accordion-btn-icon-width);
    margin-left: auto;
    content: '';
    background-image: var(--bs-accordion-btn-icon);
    background-repeat: no-repeat;
    background-size: var(--bs-accordion-btn-icon-width);
    transition: var(--bs-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
    .accordion-button::after {
        transition: none;
    }
}
.accordion-button:hover {
    z-index: 2;
}
.accordion-button:focus {
    z-index: 3;
    border-color: var(--bs-accordion-btn-focus-border-color);
    outline: 0;
    box-shadow: var(--bs-accordion-btn-focus-box-shadow);
}

.accordion-header {
    margin-bottom: 0;
}

.accordion-item {
    color: var(--bs-accordion-color);
    background-color: var(--bs-accordion-bg);
    border: var(--bs-accordion-border-width) solid
        var(--bs-accordion-border-color);
}
.accordion-item:first-of-type {
    border-top-left-radius: var(--bs-accordion-border-radius);
    border-top-right-radius: var(--bs-accordion-border-radius);
}
.accordion-item:first-of-type .accordion-button {
    border-top-left-radius: var(--bs-accordion-inner-border-radius);
    border-top-right-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:not(:first-of-type) {
    border-top: 0;
}
.accordion-item:last-of-type {
    border-bottom-right-radius: var(--bs-accordion-border-radius);
    border-bottom-left-radius: var(--bs-accordion-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
    border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
    border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:last-of-type .accordion-collapse {
    border-bottom-right-radius: var(--bs-accordion-border-radius);
    border-bottom-left-radius: var(--bs-accordion-border-radius);
}

.accordion-body {
    padding: var(--bs-accordion-body-padding-y)
        var(--bs-accordion-body-padding-x);
}

.accordion-flush .accordion-collapse {
    border-width: 0;
}
.accordion-flush .accordion-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
    border-top: 0;
}
.accordion-flush .accordion-item:last-child {
    border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button,
.accordion-flush .accordion-item .accordion-button.collapsed {
    border-radius: 0;
}

.breadcrumb {
    --bs-breadcrumb-padding-x: 0;
    --bs-breadcrumb-padding-y: 0;
    --bs-breadcrumb-margin-bottom: 1rem;
    --bs-breadcrumb-bg: ;
    --bs-breadcrumb-border-radius: ;
    --bs-breadcrumb-divider-color: #6c757d;
    --bs-breadcrumb-item-padding-x: 0.5rem;
    --bs-breadcrumb-item-active-color: #6c757d;
    display: flex;
    flex-wrap: wrap;
    padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
    margin-bottom: var(--bs-breadcrumb-margin-bottom);
    font-size: var(--bs-breadcrumb-font-size);
    list-style: none;
    background-color: var(--bs-breadcrumb-bg);
    border-radius: var(--bs-breadcrumb-border-radius);
}

.breadcrumb-item + .breadcrumb-item {
    padding-left: var(--bs-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item::before {
    float: left;
    padding-right: var(--bs-breadcrumb-item-padding-x);
    color: var(--bs-breadcrumb-divider-color);
    content: var(--bs-breadcrumb-divider, '/')
        /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
    color: var(--bs-breadcrumb-item-active-color);
}

.pagination {
    --bs-pagination-padding-x: 0.75rem;
    --bs-pagination-padding-y: 0.375rem;
    --bs-pagination-font-size: 1rem;
    --bs-pagination-color: var(--bs-link-color);
    --bs-pagination-bg: #fff;
    --bs-pagination-border-width: 1px;
    --bs-pagination-border-color: #dee2e6;
    --bs-pagination-border-radius: 0.375rem;
    --bs-pagination-hover-color: var(--bs-link-hover-color);
    --bs-pagination-hover-bg: #e9ecef;
    --bs-pagination-hover-border-color: #dee2e6;
    --bs-pagination-focus-color: var(--bs-link-hover-color);
    --bs-pagination-focus-bg: #e9ecef;
    --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    --bs-pagination-active-color: #fff;
    --bs-pagination-active-bg: #0d6efd;
    --bs-pagination-active-border-color: #0d6efd;
    --bs-pagination-disabled-color: #6c757d;
    --bs-pagination-disabled-bg: #fff;
    --bs-pagination-disabled-border-color: #dee2e6;
    display: flex;
    padding-left: 0;
    list-style: none;
}

.page-link {
    position: relative;
    display: block;
    padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
    font-size: var(--bs-pagination-font-size);
    color: var(--bs-pagination-color);
    text-decoration: none;
    background-color: var(--bs-pagination-bg);
    border: var(--bs-pagination-border-width) solid
        var(--bs-pagination-border-color);
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .page-link {
        transition: none;
    }
}
.page-link:hover {
    z-index: 2;
    color: var(--bs-pagination-hover-color);
    background-color: var(--bs-pagination-hover-bg);
    border-color: var(--bs-pagination-hover-border-color);
}
.page-link:focus {
    z-index: 3;
    color: var(--bs-pagination-focus-color);
    background-color: var(--bs-pagination-focus-bg);
    outline: 0;
    box-shadow: var(--bs-pagination-focus-box-shadow);
}
.page-link.active,
.active > .page-link {
    z-index: 3;
    color: var(--bs-pagination-active-color);
    background-color: var(--bs-pagination-active-bg);
    border-color: var(--bs-pagination-active-border-color);
}
.page-link.disabled,
.disabled > .page-link {
    color: var(--bs-pagination-disabled-color);
    pointer-events: none;
    background-color: var(--bs-pagination-disabled-bg);
    border-color: var(--bs-pagination-disabled-border-color);
}

.page-item:not(:first-child) .page-link {
    margin-left: -1px;
}
.page-item:first-child .page-link {
    border-top-left-radius: var(--bs-pagination-border-radius);
    border-bottom-left-radius: var(--bs-pagination-border-radius);
}
.page-item:last-child .page-link {
    border-top-right-radius: var(--bs-pagination-border-radius);
    border-bottom-right-radius: var(--bs-pagination-border-radius);
}

.pagination-lg {
    --bs-pagination-padding-x: 1.5rem;
    --bs-pagination-padding-y: 0.75rem;
    --bs-pagination-font-size: 1.25rem;
    --bs-pagination-border-radius: 0.5rem;
}

.pagination-sm {
    --bs-pagination-padding-x: 0.5rem;
    --bs-pagination-padding-y: 0.25rem;
    --bs-pagination-font-size: 0.875rem;
    --bs-pagination-border-radius: 0.25rem;
}

.badge {
    --bs-badge-padding-x: 0.65em;
    --bs-badge-padding-y: 0.35em;
    --bs-badge-font-size: 0.75em;
    --bs-badge-font-weight: 700;
    --bs-badge-color: #fff;
    --bs-badge-border-radius: 0.375rem;
    display: inline-block;
    padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
    font-size: var(--bs-badge-font-size);
    font-weight: var(--bs-badge-font-weight);
    line-height: 1;
    color: var(--bs-badge-color);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: var(--bs-badge-border-radius);
}
.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

.alert {
    --bs-alert-bg: transparent;
    --bs-alert-padding-x: 1rem;
    --bs-alert-padding-y: 1rem;
    --bs-alert-margin-bottom: 1rem;
    --bs-alert-color: inherit;
    --bs-alert-border-color: transparent;
    --bs-alert-border: 1px solid var(--bs-alert-border-color);
    --bs-alert-border-radius: 0.375rem;
    position: relative;
    padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
    margin-bottom: var(--bs-alert-margin-bottom);
    color: var(--bs-alert-color);
    background-color: var(--bs-alert-bg);
    border: var(--bs-alert-border);
    border-radius: var(--bs-alert-border-radius);
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 3rem;
}
.alert-dismissible .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: 1.25rem 1rem;
}

.alert-primary {
    --bs-alert-color: #084298;
    --bs-alert-bg: #cfe2ff;
    --bs-alert-border-color: #b6d4fe;
}
.alert-primary .alert-link {
    color: #06357a;
}

.alert-secondary {
    --bs-alert-color: #41464b;
    --bs-alert-bg: #e2e3e5;
    --bs-alert-border-color: #d3d6d8;
}
.alert-secondary .alert-link {
    color: #34383c;
}

.alert-success {
    --bs-alert-color: #0f5132;
    --bs-alert-bg: #d1e7dd;
    --bs-alert-border-color: #badbcc;
}
.alert-success .alert-link {
    color: #0c4128;
}

.alert-info {
    --bs-alert-color: #055160;
    --bs-alert-bg: #cff4fc;
    --bs-alert-border-color: #b6effb;
}
.alert-info .alert-link {
    color: #04414d;
}

.alert-warning {
    --bs-alert-color: #664d03;
    --bs-alert-bg: #fff3cd;
    --bs-alert-border-color: #ffecb5;
}
.alert-warning .alert-link {
    color: #523e02;
}

.alert-danger {
    --bs-alert-color: #842029;
    --bs-alert-bg: #f8d7da;
    --bs-alert-border-color: #f5c2c7;
}
.alert-danger .alert-link {
    color: #6a1a21;
}

.alert-light {
    --bs-alert-color: #636464;
    --bs-alert-bg: #fefefe;
    --bs-alert-border-color: #fdfdfe;
}
.alert-light .alert-link {
    color: #4f5050;
}

.alert-dark {
    --bs-alert-color: #141619;
    --bs-alert-bg: #d3d3d4;
    --bs-alert-border-color: #bcbebf;
}
.alert-dark .alert-link {
    color: #101214;
}

@keyframes progress-bar-stripes {
    0% {
        background-position-x: 1rem;
    }
}
.progress {
    --bs-progress-height: 1rem;
    --bs-progress-font-size: 0.75rem;
    --bs-progress-bg: #e9ecef;
    --bs-progress-border-radius: 0.375rem;
    --bs-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
    --bs-progress-bar-color: #fff;
    --bs-progress-bar-bg: #0d6efd;
    --bs-progress-bar-transition: width 0.6s ease;
    display: flex;
    height: var(--bs-progress-height);
    overflow: hidden;
    font-size: var(--bs-progress-font-size);
    background-color: var(--bs-progress-bg);
    border-radius: var(--bs-progress-border-radius);
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: var(--bs-progress-bar-color);
    text-align: center;
    white-space: nowrap;
    background-color: var(--bs-progress-bar-bg);
    transition: var(--bs-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(
        45deg,
        rgba(255, 255, 255, 0.15) 25%,
        transparent 25%,
        transparent 50%,
        rgba(255, 255, 255, 0.15) 50%,
        rgba(255, 255, 255, 0.15) 75%,
        transparent 75%,
        transparent
    );
    background-size: var(--bs-progress-height) var(--bs-progress-height);
}

.progress-bar-animated {
    animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        animation: none;
    }
}

.list-group {
    --bs-list-group-color: #212529;
    --bs-list-group-bg: #fff;
    --bs-list-group-border-color: rgba(0, 0, 0, 0.125);
    --bs-list-group-border-width: 1px;
    --bs-list-group-border-radius: 0.375rem;
    --bs-list-group-item-padding-x: 1rem;
    --bs-list-group-item-padding-y: 0.5rem;
    --bs-list-group-action-color: #495057;
    --bs-list-group-action-hover-color: #495057;
    --bs-list-group-action-hover-bg: #f8f9fa;
    --bs-list-group-action-active-color: #212529;
    --bs-list-group-action-active-bg: #e9ecef;
    --bs-list-group-disabled-color: #6c757d;
    --bs-list-group-disabled-bg: #fff;
    --bs-list-group-active-color: #fff;
    --bs-list-group-active-bg: #0d6efd;
    --bs-list-group-active-border-color: #0d6efd;
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: var(--bs-list-group-border-radius);
}

.list-group-numbered {
    list-style-type: none;
    counter-reset: section;
}
.list-group-numbered > .list-group-item::before {
    content: counters(section, '.') '. ';
    counter-increment: section;
}

.list-group-item-action {
    width: 100%;
    color: var(--bs-list-group-action-color);
    text-align: inherit;
}
.list-group-item-action:hover,
.list-group-item-action:focus {
    z-index: 1;
    color: var(--bs-list-group-action-hover-color);
    text-decoration: none;
    background-color: var(--bs-list-group-action-hover-bg);
}
.list-group-item-action:active {
    color: var(--bs-list-group-action-active-color);
    background-color: var(--bs-list-group-action-active-bg);
}

.list-group-item {
    position: relative;
    display: block;
    padding: var(--bs-list-group-item-padding-y)
        var(--bs-list-group-item-padding-x);
    color: var(--bs-list-group-color);
    text-decoration: none;
    background-color: var(--bs-list-group-bg);
    border: var(--bs-list-group-border-width) solid
        var(--bs-list-group-border-color);
}
.list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit;
}
.list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit;
}
.list-group-item.disabled,
.list-group-item:disabled {
    color: var(--bs-list-group-disabled-color);
    pointer-events: none;
    background-color: var(--bs-list-group-disabled-bg);
}
.list-group-item.active {
    z-index: 2;
    color: var(--bs-list-group-active-color);
    background-color: var(--bs-list-group-active-bg);
    border-color: var(--bs-list-group-active-border-color);
}
.list-group-item + .list-group-item {
    border-top-width: 0;
}
.list-group-item + .list-group-item.active {
    margin-top: calc(-1 * var(--bs-list-group-border-width));
    border-top-width: var(--bs-list-group-border-width);
}

.list-group-horizontal {
    flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
    margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row;
    }
    .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-sm > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-sm > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row;
    }
    .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-md > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-md > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-md > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row;
    }
    .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-lg > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-lg > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row;
    }
    .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xl > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xl > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 1400px) {
    .list-group-horizontal-xxl {
        flex-direction: row;
    }
    .list-group-horizontal-xxl > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xxl > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xxl > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
.list-group-flush {
    border-radius: 0;
}
.list-group-flush > .list-group-item {
    border-width: 0 0 var(--bs-list-group-border-width);
}
.list-group-flush > .list-group-item:last-child {
    border-bottom-width: 0;
}

.list-group-item-primary {
    color: #084298;
    background-color: #cfe2ff;
}
.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
    color: #084298;
    background-color: #bacbe6;
}
.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #084298;
    border-color: #084298;
}

.list-group-item-secondary {
    color: #41464b;
    background-color: #e2e3e5;
}
.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
    color: #41464b;
    background-color: #cbccce;
}
.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #41464b;
    border-color: #41464b;
}

.list-group-item-success {
    color: #0f5132;
    background-color: #d1e7dd;
}
.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
    color: #0f5132;
    background-color: #bcd0c7;
}
.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #0f5132;
    border-color: #0f5132;
}

.list-group-item-info {
    color: #055160;
    background-color: #cff4fc;
}
.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
    color: #055160;
    background-color: #badce3;
}
.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #055160;
    border-color: #055160;
}

.list-group-item-warning {
    color: #664d03;
    background-color: #fff3cd;
}
.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
    color: #664d03;
    background-color: #e6dbb9;
}
.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #664d03;
    border-color: #664d03;
}

.list-group-item-danger {
    color: #842029;
    background-color: #f8d7da;
}
.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
    color: #842029;
    background-color: #dfc2c4;
}
.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #842029;
    border-color: #842029;
}

.list-group-item-light {
    color: #636464;
    background-color: #fefefe;
}
.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
    color: #636464;
    background-color: #e5e5e5;
}
.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #636464;
    border-color: #636464;
}

.list-group-item-dark {
    color: #141619;
    background-color: #d3d3d4;
}
.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
    color: #141619;
    background-color: #bebebf;
}
.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #141619;
    border-color: #141619;
}

.btn-close {
    box-sizing: content-box;
    width: 1em;
    height: 1em;
    padding: 0.25em 0.25em;
    color: #000;
    background: transparent
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e")
        center/1em auto no-repeat;
    border: 0;
    border-radius: 0.375rem;
    opacity: 0.5;
}
.btn-close:hover {
    color: #000;
    text-decoration: none;
    opacity: 0.75;
}
.btn-close:focus {
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    opacity: 1;
}
.btn-close:disabled,
.btn-close.disabled {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    opacity: 0.25;
}

.btn-close-white {
    filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
    --bs-toast-zindex: 1090;
    --bs-toast-padding-x: 0.75rem;
    --bs-toast-padding-y: 0.5rem;
    --bs-toast-spacing: 1.5rem;
    --bs-toast-max-width: 350px;
    --bs-toast-font-size: 0.875rem;
    --bs-toast-color: ;
    --bs-toast-bg: rgba(255, 255, 255, 0.85);
    --bs-toast-border-width: 1px;
    --bs-toast-border-color: var(--bs-border-color-translucent);
    --bs-toast-border-radius: 0.375rem;
    --bs-toast-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    --bs-toast-header-color: #6c757d;
    --bs-toast-header-bg: rgba(255, 255, 255, 0.85);
    --bs-toast-header-border-color: rgba(0, 0, 0, 0.05);
    width: var(--bs-toast-max-width);
    max-width: 100%;
    font-size: var(--bs-toast-font-size);
    color: var(--bs-toast-color);
    pointer-events: auto;
    background-color: var(--bs-toast-bg);
    background-clip: padding-box;
    border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
    box-shadow: var(--bs-toast-box-shadow);
    border-radius: var(--bs-toast-border-radius);
}
.toast.showing {
    opacity: 0;
}
.toast:not(.show) {
    display: none;
}

.toast-container {
    --bs-toast-zindex: 1090;
    position: absolute;
    z-index: var(--bs-toast-zindex);
    width: -moz-max-content;
    width: max-content;
    max-width: 100%;
    pointer-events: none;
}
.toast-container > :not(:last-child) {
    margin-bottom: var(--bs-toast-spacing);
}

.toast-header {
    display: flex;
    align-items: center;
    padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
    color: var(--bs-toast-header-color);
    background-color: var(--bs-toast-header-bg);
    background-clip: padding-box;
    border-bottom: var(--bs-toast-border-width) solid
        var(--bs-toast-header-border-color);
    border-top-left-radius: calc(
        var(--bs-toast-border-radius) - var(--bs-toast-border-width)
    );
    border-top-right-radius: calc(
        var(--bs-toast-border-radius) - var(--bs-toast-border-width)
    );
}
.toast-header .btn-close {
    margin-right: calc(-0.5 * var(--bs-toast-padding-x));
    margin-left: var(--bs-toast-padding-x);
}

.toast-body {
    padding: var(--bs-toast-padding-x);
    word-wrap: break-word;
}

.modal {
    --bs-modal-zindex: 1055;
    --bs-modal-width: 500px;
    --bs-modal-padding: 1rem;
    --bs-modal-margin: 0.5rem;
    --bs-modal-color: ;
    --bs-modal-bg: #fff;
    --bs-modal-border-color: var(--bs-border-color-translucent);
    --bs-modal-border-width: 1px;
    --bs-modal-border-radius: 0.5rem;
    --bs-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    --bs-modal-inner-border-radius: calc(0.5rem - 1px);
    --bs-modal-header-padding-x: 1rem;
    --bs-modal-header-padding-y: 1rem;
    --bs-modal-header-padding: 1rem 1rem;
    --bs-modal-header-border-color: var(--bs-border-color);
    --bs-modal-header-border-width: 1px;
    --bs-modal-title-line-height: 1.5;
    --bs-modal-footer-gap: 0.5rem;
    --bs-modal-footer-bg: ;
    --bs-modal-footer-border-color: var(--bs-border-color);
    --bs-modal-footer-border-width: 1px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-modal-zindex);
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: var(--bs-modal-margin);
    pointer-events: none;
}
.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}
.modal.show .modal-dialog {
    transform: none;
}
.modal.modal-static .modal-dialog {
    transform: scale(1.02);
}

.modal-dialog-scrollable {
    height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - var(--bs-modal-margin) * 2);
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background-color: var(--bs-modal-bg);
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    outline: 0;
}

.modal-backdrop {
    --bs-backdrop-zindex: 1050;
    --bs-backdrop-bg: #000;
    --bs-backdrop-opacity: 0.5;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-backdrop-zindex);
    width: 100vw;
    height: 100vh;
    background-color: var(--bs-backdrop-bg);
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop.show {
    opacity: var(--bs-backdrop-opacity);
}

.modal-header {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-modal-header-padding);
    border-bottom: var(--bs-modal-header-border-width) solid
        var(--bs-modal-header-border-color);
    border-top-left-radius: var(--bs-modal-inner-border-radius);
    border-top-right-radius: var(--bs-modal-inner-border-radius);
}
.modal-header .btn-close {
    padding: calc(var(--bs-modal-header-padding-y) * 0.5)
        calc(var(--bs-modal-header-padding-x) * 0.5);
    margin: calc(-0.5 * var(--bs-modal-header-padding-y))
        calc(-0.5 * var(--bs-modal-header-padding-x))
        calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: var(--bs-modal-title-line-height);
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: var(--bs-modal-padding);
}

.modal-footer {
    display: flex;
    flex-shrink: 0;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
    background-color: var(--bs-modal-footer-bg);
    border-top: var(--bs-modal-footer-border-width) solid
        var(--bs-modal-footer-border-color);
    border-bottom-right-radius: var(--bs-modal-inner-border-radius);
    border-bottom-left-radius: var(--bs-modal-inner-border-radius);
}
.modal-footer > * {
    margin: calc(var(--bs-modal-footer-gap) * 0.5);
}

@media (min-width: 576px) {
    .modal {
        --bs-modal-margin: 1.75rem;
        --bs-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    .modal-dialog {
        max-width: var(--bs-modal-width);
        margin-right: auto;
        margin-left: auto;
    }
    .modal-sm {
        --bs-modal-width: 300px;
    }
}
@media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        --bs-modal-width: 800px;
    }
}
@media (min-width: 1200px) {
    .modal-xl {
        --bs-modal-width: 1140px;
    }
}
.modal-fullscreen {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
}
.modal-fullscreen .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
}
.modal-fullscreen .modal-header,
.modal-fullscreen .modal-footer {
    border-radius: 0;
}
.modal-fullscreen .modal-body {
    overflow-y: auto;
}

@media (max-width: 575.98px) {
    .modal-fullscreen-sm-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-sm-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-sm-down .modal-header,
    .modal-fullscreen-sm-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-sm-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 767.98px) {
    .modal-fullscreen-md-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-md-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-md-down .modal-header,
    .modal-fullscreen-md-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-md-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 991.98px) {
    .modal-fullscreen-lg-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-lg-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-lg-down .modal-header,
    .modal-fullscreen-lg-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-lg-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 1199.98px) {
    .modal-fullscreen-xl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-xl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-xl-down .modal-header,
    .modal-fullscreen-xl-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-xl-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 1399.98px) {
    .modal-fullscreen-xxl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-xxl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-xxl-down .modal-header,
    .modal-fullscreen-xxl-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-xxl-down .modal-body {
        overflow-y: auto;
    }
}
.tooltip {
    --bs-tooltip-zindex: 1080;
    --bs-tooltip-max-width: 200px;
    --bs-tooltip-padding-x: 0.5rem;
    --bs-tooltip-padding-y: 0.25rem;
    --bs-tooltip-margin: ;
    --bs-tooltip-font-size: 0.875rem;
    --bs-tooltip-color: #fff;
    --bs-tooltip-bg: #000;
    --bs-tooltip-border-radius: 0.375rem;
    --bs-tooltip-opacity: 0.9;
    --bs-tooltip-arrow-width: 0.8rem;
    --bs-tooltip-arrow-height: 0.4rem;
    z-index: var(--bs-tooltip-zindex);
    display: block;
    padding: var(--bs-tooltip-arrow-height);
    margin: var(--bs-tooltip-margin);
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    white-space: normal;
    word-spacing: normal;
    line-break: auto;
    font-size: var(--bs-tooltip-font-size);
    word-wrap: break-word;
    opacity: 0;
}
.tooltip.show {
    opacity: var(--bs-tooltip-opacity);
}
.tooltip .tooltip-arrow {
    display: block;
    width: var(--bs-tooltip-arrow-width);
    height: var(--bs-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
    position: absolute;
    content: '';
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='top'] .tooltip-arrow {
    bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='top'] .tooltip-arrow::before {
    top: -1px;
    border-width: var(--bs-tooltip-arrow-height)
        calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
    border-top-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='right'] .tooltip-arrow {
    left: 0;
    width: var(--bs-tooltip-arrow-height);
    height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='right'] .tooltip-arrow::before {
    right: -1px;
    border-width: calc(var(--bs-tooltip-arrow-width) * 0.5)
        var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5)
        0;
    border-right-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='bottom'] .tooltip-arrow {
    top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='bottom'] .tooltip-arrow::before {
    bottom: -1px;
    border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5)
        var(--bs-tooltip-arrow-height);
    border-bottom-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='left'] .tooltip-arrow {
    right: 0;
    width: var(--bs-tooltip-arrow-height);
    height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='left'] .tooltip-arrow::before {
    left: -1px;
    border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0
        calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
    border-left-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.tooltip-inner {
    max-width: var(--bs-tooltip-max-width);
    padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
    color: var(--bs-tooltip-color);
    text-align: center;
    background-color: var(--bs-tooltip-bg);
    border-radius: var(--bs-tooltip-border-radius);
}

.popover {
    --bs-popover-zindex: 1070;
    --bs-popover-max-width: 276px;
    --bs-popover-font-size: 0.875rem;
    --bs-popover-bg: #fff;
    --bs-popover-border-width: 1px;
    --bs-popover-border-color: var(--bs-border-color-translucent);
    --bs-popover-border-radius: 0.5rem;
    --bs-popover-inner-border-radius: calc(0.5rem - 1px);
    --bs-popover-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    --bs-popover-header-padding-x: 1rem;
    --bs-popover-header-padding-y: 0.5rem;
    --bs-popover-header-font-size: 1rem;
    --bs-popover-header-color: ;
    --bs-popover-header-bg: #f0f0f0;
    --bs-popover-body-padding-x: 1rem;
    --bs-popover-body-padding-y: 1rem;
    --bs-popover-body-color: #212529;
    --bs-popover-arrow-width: 1rem;
    --bs-popover-arrow-height: 0.5rem;
    --bs-popover-arrow-border: var(--bs-popover-border-color);
    z-index: var(--bs-popover-zindex);
    display: block;
    max-width: var(--bs-popover-max-width);
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    white-space: normal;
    word-spacing: normal;
    line-break: auto;
    font-size: var(--bs-popover-font-size);
    word-wrap: break-word;
    background-color: var(--bs-popover-bg);
    background-clip: padding-box;
    border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
    border-radius: var(--bs-popover-border-radius);
}
.popover .popover-arrow {
    display: block;
    width: var(--bs-popover-arrow-width);
    height: var(--bs-popover-arrow-height);
}
.popover .popover-arrow::before,
.popover .popover-arrow::after {
    position: absolute;
    display: block;
    content: '';
    border-color: transparent;
    border-style: solid;
    border-width: 0;
}

.bs-popover-top > .popover-arrow,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow {
    bottom: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
}
.bs-popover-top > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::before,
.bs-popover-top > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::after {
    border-width: var(--bs-popover-arrow-height)
        calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::before {
    bottom: 0;
    border-top-color: var(--bs-popover-arrow-border);
}
.bs-popover-top > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::after {
    bottom: var(--bs-popover-border-width);
    border-top-color: var(--bs-popover-bg);
}

/* rtl:begin:ignore */
.bs-popover-end > .popover-arrow,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow {
    left: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
    width: var(--bs-popover-arrow-height);
    height: var(--bs-popover-arrow-width);
}
.bs-popover-end > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::before,
.bs-popover-end > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::after {
    border-width: calc(var(--bs-popover-arrow-width) * 0.5)
        var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5)
        0;
}
.bs-popover-end > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::before {
    left: 0;
    border-right-color: var(--bs-popover-arrow-border);
}
.bs-popover-end > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::after {
    left: var(--bs-popover-border-width);
    border-right-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.bs-popover-bottom > .popover-arrow,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow {
    top: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
}
.bs-popover-bottom > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::before,
.bs-popover-bottom > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::after {
    border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5)
        var(--bs-popover-arrow-height);
}
.bs-popover-bottom > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::before {
    top: 0;
    border-bottom-color: var(--bs-popover-arrow-border);
}
.bs-popover-bottom > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::after {
    top: var(--bs-popover-border-width);
    border-bottom-color: var(--bs-popover-bg);
}
.bs-popover-bottom .popover-header::before,
.bs-popover-auto[data-popper-placement^='bottom'] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: var(--bs-popover-arrow-width);
    margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
    content: '';
    border-bottom: var(--bs-popover-border-width) solid
        var(--bs-popover-header-bg);
}

/* rtl:begin:ignore */
.bs-popover-start > .popover-arrow,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow {
    right: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
    width: var(--bs-popover-arrow-height);
    height: var(--bs-popover-arrow-width);
}
.bs-popover-start > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::before,
.bs-popover-start > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::after {
    border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0
        calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-start > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::before {
    right: 0;
    border-left-color: var(--bs-popover-arrow-border);
}
.bs-popover-start > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::after {
    right: var(--bs-popover-border-width);
    border-left-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.popover-header {
    padding: var(--bs-popover-header-padding-y)
        var(--bs-popover-header-padding-x);
    margin-bottom: 0;
    font-size: var(--bs-popover-header-font-size);
    color: var(--bs-popover-header-color);
    background-color: var(--bs-popover-header-bg);
    border-bottom: var(--bs-popover-border-width) solid
        var(--bs-popover-border-color);
    border-top-left-radius: var(--bs-popover-inner-border-radius);
    border-top-right-radius: var(--bs-popover-inner-border-radius);
}
.popover-header:empty {
    display: none;
}

.popover-body {
    padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
    color: var(--bs-popover-body-color);
}

.carousel {
    position: relative;
}

.carousel.pointer-event {
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.carousel-inner::after {
    display: block;
    clear: both;
    content: '';
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
    transform: translateX(-100%);
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
    z-index: 1;
    opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-start,
    .carousel-fade .active.carousel-item-end {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: none;
    border: 0;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}
.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: center;
    padding: 0;
    margin-right: 15%;
    margin-bottom: 1rem;
    margin-left: 15%;
    list-style: none;
}
.carousel-indicators [data-bs-target] {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    padding: 0;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-indicators [data-bs-target] {
        transition: none;
    }
}
.carousel-indicators .active {
    opacity: 1;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 1.25rem;
    left: 15%;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    color: #fff;
    text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
    filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
    background-color: #000;
}
.carousel-dark .carousel-caption {
    color: #000;
}

.spinner-grow,
.spinner-border {
    display: inline-block;
    width: var(--bs-spinner-width);
    height: var(--bs-spinner-height);
    vertical-align: var(--bs-spinner-vertical-align);
    border-radius: 50%;
    animation: var(--bs-spinner-animation-speed) linear infinite
        var(--bs-spinner-animation-name);
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg) /* rtl:ignore */;
    }
}
.spinner-border {
    --bs-spinner-width: 2rem;
    --bs-spinner-height: 2rem;
    --bs-spinner-vertical-align: -0.125em;
    --bs-spinner-border-width: 0.25em;
    --bs-spinner-animation-speed: 0.75s;
    --bs-spinner-animation-name: spinner-border;
    border: var(--bs-spinner-border-width) solid currentcolor;
    border-right-color: transparent;
}

.spinner-border-sm {
    --bs-spinner-width: 1rem;
    --bs-spinner-height: 1rem;
    --bs-spinner-border-width: 0.2em;
}

@keyframes spinner-grow {
    0% {
        transform: scale(0);
    }
    50% {
        opacity: 1;
        transform: none;
    }
}
.spinner-grow {
    --bs-spinner-width: 2rem;
    --bs-spinner-height: 2rem;
    --bs-spinner-vertical-align: -0.125em;
    --bs-spinner-animation-speed: 0.75s;
    --bs-spinner-animation-name: spinner-grow;
    background-color: currentcolor;
    opacity: 0;
}

.spinner-grow-sm {
    --bs-spinner-width: 1rem;
    --bs-spinner-height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
        --bs-spinner-animation-speed: 1.5s;
    }
}
.offcanvas,
.offcanvas-xxl,
.offcanvas-xl,
.offcanvas-lg,
.offcanvas-md,
.offcanvas-sm {
    --bs-offcanvas-zindex: 1045;
    --bs-offcanvas-width: 400px;
    --bs-offcanvas-height: 30vh;
    --bs-offcanvas-padding-x: 1rem;
    --bs-offcanvas-padding-y: 1rem;
    --bs-offcanvas-color: ;
    --bs-offcanvas-bg: #fff;
    --bs-offcanvas-border-width: 1px;
    --bs-offcanvas-border-color: var(--bs-border-color-translucent);
    --bs-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

@media (max-width: 575.98px) {
    .offcanvas-sm {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-sm {
        transition: none;
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.showing,
    .offcanvas-sm.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.showing,
    .offcanvas-sm.hiding,
    .offcanvas-sm.show {
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .offcanvas-sm {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-sm .offcanvas-header {
        display: none;
    }
    .offcanvas-sm .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 767.98px) {
    .offcanvas-md {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-md {
        transition: none;
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.showing,
    .offcanvas-md.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.showing,
    .offcanvas-md.hiding,
    .offcanvas-md.show {
        visibility: visible;
    }
}
@media (min-width: 768px) {
    .offcanvas-md {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-md .offcanvas-header {
        display: none;
    }
    .offcanvas-md .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 991.98px) {
    .offcanvas-lg {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-lg {
        transition: none;
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.showing,
    .offcanvas-lg.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.showing,
    .offcanvas-lg.hiding,
    .offcanvas-lg.show {
        visibility: visible;
    }
}
@media (min-width: 992px) {
    .offcanvas-lg {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-lg .offcanvas-header {
        display: none;
    }
    .offcanvas-lg .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 1199.98px) {
    .offcanvas-xl {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-xl {
        transition: none;
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.showing,
    .offcanvas-xl.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.showing,
    .offcanvas-xl.hiding,
    .offcanvas-xl.show {
        visibility: visible;
    }
}
@media (min-width: 1200px) {
    .offcanvas-xl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-xl .offcanvas-header {
        display: none;
    }
    .offcanvas-xl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 1399.98px) {
    .offcanvas-xxl {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-xxl {
        transition: none;
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.showing,
    .offcanvas-xxl.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.showing,
    .offcanvas-xxl.hiding,
    .offcanvas-xxl.show {
        visibility: visible;
    }
}
@media (min-width: 1400px) {
    .offcanvas-xxl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-xxl .offcanvas-header {
        display: none;
    }
    .offcanvas-xxl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

.offcanvas {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .offcanvas {
        transition: none;
    }
}
.offcanvas.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
}
.offcanvas.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateX(100%);
}
.offcanvas.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
}
.offcanvas.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateY(100%);
}
.offcanvas.showing,
.offcanvas.show:not(.hiding) {
    transform: none;
}
.offcanvas.showing,
.offcanvas.hiding,
.offcanvas.show {
    visibility: visible;
}

.offcanvas-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}
.offcanvas-backdrop.fade {
    opacity: 0;
}
.offcanvas-backdrop.show {
    opacity: 0.5;
}

.offcanvas-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
}
.offcanvas-header .btn-close {
    padding: calc(var(--bs-offcanvas-padding-y) * 0.5)
        calc(var(--bs-offcanvas-padding-x) * 0.5);
    margin-top: calc(-0.5 * var(--bs-offcanvas-padding-y));
    margin-right: calc(-0.5 * var(--bs-offcanvas-padding-x));
    margin-bottom: calc(-0.5 * var(--bs-offcanvas-padding-y));
}

.offcanvas-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.offcanvas-body {
    flex-grow: 1;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
    overflow-y: auto;
}

.placeholder {
    display: inline-block;
    min-height: 1em;
    vertical-align: middle;
    cursor: wait;
    background-color: currentcolor;
    opacity: 0.5;
}
.placeholder.btn::before {
    display: inline-block;
    content: '';
}

.placeholder-xs {
    min-height: 0.6em;
}

.placeholder-sm {
    min-height: 0.8em;
}

.placeholder-lg {
    min-height: 1.2em;
}

.placeholder-glow .placeholder {
    animation: placeholder-glow 2s ease-in-out infinite;
}

@keyframes placeholder-glow {
    50% {
        opacity: 0.2;
    }
}
.placeholder-wave {
    -webkit-mask-image: linear-gradient(
        130deg,
        #000 55%,
        rgba(0, 0, 0, 0.8) 75%,
        #000 95%
    );
    mask-image: linear-gradient(
        130deg,
        #000 55%,
        rgba(0, 0, 0, 0.8) 75%,
        #000 95%
    );
    -webkit-mask-size: 200% 100%;
    mask-size: 200% 100%;
    animation: placeholder-wave 2s linear infinite;
}

@keyframes placeholder-wave {
    100% {
        -webkit-mask-position: -200% 0%;
        mask-position: -200% 0%;
    }
}
.clearfix::after {
    display: block;
    clear: both;
    content: '';
}

.text-bg-primary {
    color: #fff !important;
    background-color: RGBA(13, 110, 253, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-secondary {
    color: #fff !important;
    background-color: RGBA(108, 117, 125, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-success {
    color: #fff !important;
    background-color: RGBA(25, 135, 84, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-info {
    color: #000 !important;
    background-color: RGBA(13, 202, 240, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-warning {
    color: #000 !important;
    background-color: RGBA(255, 193, 7, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-danger {
    color: #fff !important;
    background-color: RGBA(220, 53, 69, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-light {
    color: #000 !important;
    background-color: RGBA(248, 249, 250, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-dark {
    color: #fff !important;
    background-color: RGBA(33, 37, 41, var(--bs-bg-opacity, 1)) !important;
}

.link-primary {
    color: #0d6efd !important;
}
.link-primary:hover,
.link-primary:focus {
    color: #0a58ca !important;
}

.link-secondary {
    color: #6c757d !important;
}
.link-secondary:hover,
.link-secondary:focus {
    color: #565e64 !important;
}

.link-success {
    color: #198754 !important;
}
.link-success:hover,
.link-success:focus {
    color: #146c43 !important;
}

.link-info {
    color: #0dcaf0 !important;
}
.link-info:hover,
.link-info:focus {
    color: #3dd5f3 !important;
}

.link-warning {
    color: #ffc107 !important;
}
.link-warning:hover,
.link-warning:focus {
    color: #ffcd39 !important;
}

.link-danger {
    color: #dc3545 !important;
}
.link-danger:hover,
.link-danger:focus {
    color: #b02a37 !important;
}

.link-light {
    color: #f8f9fa !important;
}
.link-light:hover,
.link-light:focus {
    color: #f9fafb !important;
}

.link-dark {
    color: #212529 !important;
}
.link-dark:hover,
.link-dark:focus {
    color: #1a1e21 !important;
}

.ratio {
    position: relative;
    width: 100%;
}
.ratio::before {
    display: block;
    padding-top: var(--bs-aspect-ratio);
    content: '';
}
.ratio > * {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.ratio-1x1 {
    --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
    --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
    --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
    --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
}

.sticky-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
}

@media (min-width: 576px) {
    .sticky-sm-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-sm-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 768px) {
    .sticky-md-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-md-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 992px) {
    .sticky-lg-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-lg-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 1200px) {
    .sticky-xl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-xl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 1400px) {
    .sticky-xxl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-xxl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
.hstack {
    display: flex;
    flex-direction: row;
    align-items: center;
    align-self: stretch;
}

.vstack {
    display: flex;
    flex: 1 1 auto;
    flex-direction: column;
    align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border: 0 !important;
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    content: '';
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.vr {
    display: inline-block;
    align-self: stretch;
    width: 1px;
    min-height: 1em;
    background-color: currentcolor;
    opacity: 0.25;
}

.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.float-start {
    float: left !important;
}

.float-end {
    float: right !important;
}

.float-none {
    float: none !important;
}

.opacity-0 {
    opacity: 0 !important;
}

.opacity-25 {
    opacity: 0.25 !important;
}

.opacity-50 {
    opacity: 0.5 !important;
}

.opacity-75 {
    opacity: 0.75 !important;
}

.opacity-100 {
    opacity: 1 !important;
}

.overflow-auto {
    overflow: auto !important;
}

.overflow-hidden {
    overflow: hidden !important;
}

.overflow-visible {
    overflow: visible !important;
}

.overflow-scroll {
    overflow: scroll !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-grid {
    display: grid !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: flex !important;
}

.d-inline-flex {
    display: inline-flex !important;
}

.d-none {
    display: none !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: sticky !important;
}

.top-0 {
    top: 0 !important;
}

.top-50 {
    top: 50% !important;
}

.top-100 {
    top: 100% !important;
}

.bottom-0 {
    bottom: 0 !important;
}

.bottom-50 {
    bottom: 50% !important;
}

.bottom-100 {
    bottom: 100% !important;
}

.start-0 {
    left: 0 !important;
}

.start-50 {
    left: 50% !important;
}

.start-100 {
    left: 100% !important;
}

.end-0 {
    right: 0 !important;
}

.end-50 {
    right: 50% !important;
}

.end-100 {
    right: 100% !important;
}

.translate-middle {
    transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
    transform: translateX(-50%) !important;
}

.translate-middle-y {
    transform: translateY(-50%) !important;
}

.border {
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-0 {
    border: 0 !important;
}

.border-top {
    border-top: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-end {
    border-right: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-end-0 {
    border-right: 0 !important;
}

.border-bottom {
    border-bottom: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-start {
    border-left: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-start-0 {
    border-left: 0 !important;
}

.border-primary {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-primary-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-secondary {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-secondary-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-success {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-success-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-info {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}

.border-warning {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-warning-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-danger {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-danger-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-light {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-light-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-dark {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}

.border-white {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-white-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-1 {
    --bs-border-width: 1px;
}

.border-2 {
    --bs-border-width: 2px;
}

.border-3 {
    --bs-border-width: 3px;
}

.border-4 {
    --bs-border-width: 4px;
}

.border-5 {
    --bs-border-width: 5px;
}

.border-opacity-10 {
    --bs-border-opacity: 0.1;
}

.border-opacity-25 {
    --bs-border-opacity: 0.25;
}

.border-opacity-50 {
    --bs-border-opacity: 0.5;
}

.border-opacity-75 {
    --bs-border-opacity: 0.75;
}

.border-opacity-100 {
    --bs-border-opacity: 1;
}

.w-25 {
    width: 25% !important;
}

.w-50 {
    width: 50% !important;
}

.w-75 {
    width: 75% !important;
}

.w-100 {
    width: 100% !important;
}

.w-auto {
    width: auto !important;
}

.mw-100 {
    max-width: 100% !important;
}

.vw-100 {
    width: 100vw !important;
}

.min-vw-100 {
    min-width: 100vw !important;
}

.h-25 {
    height: 25% !important;
}

.h-50 {
    height: 50% !important;
}

.h-75 {
    height: 75% !important;
}

.h-100 {
    height: 100% !important;
}

.h-auto {
    height: auto !important;
}

.mh-100 {
    max-height: 100% !important;
}

.vh-100 {
    height: 100vh !important;
}

.min-vh-100 {
    min-height: 100vh !important;
}

.flex-fill {
    flex: 1 1 auto !important;
}

.flex-row {
    flex-direction: row !important;
}

.flex-column {
    flex-direction: column !important;
}

.flex-row-reverse {
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    flex-direction: column-reverse !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.flex-grow-1 {
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    flex-shrink: 1 !important;
}

.flex-wrap {
    flex-wrap: wrap !important;
}

.flex-nowrap {
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}

.justify-content-start {
    justify-content: flex-start !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.justify-content-around {
    justify-content: space-around !important;
}

.justify-content-evenly {
    justify-content: space-evenly !important;
}

.align-items-start {
    align-items: flex-start !important;
}

.align-items-end {
    align-items: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

.align-items-baseline {
    align-items: baseline !important;
}

.align-items-stretch {
    align-items: stretch !important;
}

.align-content-start {
    align-content: flex-start !important;
}

.align-content-end {
    align-content: flex-end !important;
}

.align-content-center {
    align-content: center !important;
}

.align-content-between {
    align-content: space-between !important;
}

.align-content-around {
    align-content: space-around !important;
}

.align-content-stretch {
    align-content: stretch !important;
}

.align-self-auto {
    align-self: auto !important;
}

.align-self-start {
    align-self: flex-start !important;
}

.align-self-end {
    align-self: flex-end !important;
}

.align-self-center {
    align-self: center !important;
}

.align-self-baseline {
    align-self: baseline !important;
}

.align-self-stretch {
    align-self: stretch !important;
}

.order-first {
    order: -1 !important;
}

.order-0 {
    order: 0 !important;
}

.order-1 {
    order: 1 !important;
}

.order-2 {
    order: 2 !important;
}

.order-3 {
    order: 3 !important;
}

.order-4 {
    order: 4 !important;
}

.order-5 {
    order: 5 !important;
}

.order-last {
    order: 6 !important;
}

.m-0 {
    margin: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.m-3 {
    margin: 1rem !important;
}

.m-4 {
    margin: 1.5rem !important;
}

.m-5 {
    margin: 3rem !important;
}

.m-auto {
    margin: auto !important;
}

.mx-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
}

.mx-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
}

.mx-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
}

.mx-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
}

.mx-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
}

.mx-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
}

.mx-auto {
    margin-right: auto !important;
    margin-left: auto !important;
}

.my-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}

.my-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
}

.my-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
}

.my-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
}

.my-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
}

.my-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
}

.my-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
}

.mt-0 {
    margin-top: 0 !important;
}

.mt-1 {
    margin-top: 0.25rem !important;
}

.mt-2 {
    margin-top: 0.5rem !important;
}

.mt-3 {
    margin-top: 1rem !important;
}

.mt-4 {
    margin-top: 1.5rem !important;
}

.mt-5 {
    margin-top: 3rem !important;
}

.mt-auto {
    margin-top: auto !important;
}

.me-0 {
    margin-right: 0 !important;
}

.me-1 {
    margin-right: 0.25rem !important;
}

.me-2 {
    margin-right: 0.5rem !important;
}

.me-3 {
    margin-right: 1rem !important;
}

.me-4 {
    margin-right: 1.5rem !important;
}

.me-5 {
    margin-right: 3rem !important;
}

.me-auto {
    margin-right: auto !important;
}

.mb-0 {
    margin-bottom: 0 !important;
}

.mb-1 {
    margin-bottom: 0.25rem !important;
}

.mb-2 {
    margin-bottom: 0.5rem !important;
}

.mb-3 {
    margin-bottom: 1rem !important;
}

.mb-4 {
    margin-bottom: 1.5rem !important;
}

.mb-5 {
    margin-bottom: 3rem !important;
}

.mb-auto {
    margin-bottom: auto !important;
}

.ms-0 {
    margin-left: 0 !important;
}

.ms-1 {
    margin-left: 0.25rem !important;
}

.ms-2 {
    margin-left: 0.5rem !important;
}

.ms-3 {
    margin-left: 1rem !important;
}

.ms-4 {
    margin-left: 1.5rem !important;
}

.ms-5 {
    margin-left: 3rem !important;
}

.ms-auto {
    margin-left: auto !important;
}

.p-0 {
    padding: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.p-3 {
    padding: 1rem !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.p-5 {
    padding: 3rem !important;
}

.px-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
}

.px-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
}

.px-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
}

.px-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
}

.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}

.px-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
}

.py-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}

.py-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
}

.py-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
}

.py-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
}

.py-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
}

.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}

.pt-0 {
    padding-top: 0 !important;
}

.pt-1 {
    padding-top: 0.25rem !important;
}

.pt-2 {
    padding-top: 0.5rem !important;
}

.pt-3 {
    padding-top: 1rem !important;
}

.pt-4 {
    padding-top: 1.5rem !important;
}

.pt-5 {
    padding-top: 3rem !important;
}

.pe-0 {
    padding-right: 0 !important;
}

.pe-1 {
    padding-right: 0.25rem !important;
}

.pe-2 {
    padding-right: 0.5rem !important;
}

.pe-3 {
    padding-right: 1rem !important;
}

.pe-4 {
    padding-right: 1.5rem !important;
}

.pe-5 {
    padding-right: 3rem !important;
}

.pb-0 {
    padding-bottom: 0 !important;
}

.pb-1 {
    padding-bottom: 0.25rem !important;
}

.pb-2 {
    padding-bottom: 0.5rem !important;
}

.pb-3 {
    padding-bottom: 1rem !important;
}

.pb-4 {
    padding-bottom: 1.5rem !important;
}

.pb-5 {
    padding-bottom: 3rem !important;
}

.ps-0 {
    padding-left: 0 !important;
}

.ps-1 {
    padding-left: 0.25rem !important;
}

.ps-2 {
    padding-left: 0.5rem !important;
}

.ps-3 {
    padding-left: 1rem !important;
}

.ps-4 {
    padding-left: 1.5rem !important;
}

.ps-5 {
    padding-left: 3rem !important;
}

.gap-0 {
    gap: 0 !important;
}

.gap-1 {
    gap: 0.25rem !important;
}

.gap-2 {
    gap: 0.5rem !important;
}

.gap-3 {
    gap: 1rem !important;
}

.gap-4 {
    gap: 1.5rem !important;
}

.gap-5 {
    gap: 3rem !important;
}

.font-monospace {
    font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
    font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
    font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
    font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
    font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
    font-size: 1.25rem !important;
}

.fs-6 {
    font-size: 1rem !important;
}

.fst-italic {
    font-style: italic !important;
}

.fst-normal {
    font-style: normal !important;
}

.fw-light {
    font-weight: 300 !important;
}

.fw-lighter {
    font-weight: lighter !important;
}

.fw-normal {
    font-weight: 400 !important;
}

.fw-bold {
    font-weight: 700 !important;
}

.fw-semibold {
    font-weight: 600 !important;
}

.fw-bolder {
    font-weight: bolder !important;
}

.lh-1 {
    line-height: 1 !important;
}

.lh-sm {
    line-height: 1.25 !important;
}

.lh-base {
    line-height: 1.5 !important;
}

.lh-lg {
    line-height: 2 !important;
}

.text-start {
    text-align: left !important;
}

.text-end {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-decoration-underline {
    text-decoration: underline !important;
}

.text-decoration-line-through {
    text-decoration: line-through !important;
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.text-wrap {
    white-space: normal !important;
}

.text-nowrap {
    white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
    word-wrap: break-word !important;
    word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted {
    --bs-text-opacity: 1;
    color: #6c757d !important;
}

.text-black-50 {
    --bs-text-opacity: 1;
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    --bs-text-opacity: 1;
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
    --bs-text-opacity: 1;
    color: inherit !important;
}

.text-opacity-25 {
    --bs-text-opacity: 0.25;
}

.text-opacity-50 {
    --bs-text-opacity: 0.5;
}

.text-opacity-75 {
    --bs-text-opacity: 0.75;
}

.text-opacity-100 {
    --bs-text-opacity: 1;
}

.bg-primary {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-primary-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-secondary {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-secondary-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-success {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-success-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-info {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-warning-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-danger {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-danger-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-light {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-light-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-dark {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-black-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-white {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-white-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-body {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-body-bg-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-transparent {
    --bs-bg-opacity: 1;
    background-color: transparent !important;
}

.bg-opacity-10 {
    --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
    --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
    --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
    --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
    --bs-bg-opacity: 1;
}

.bg-gradient {
    background-image: var(--bs-gradient) !important;
}

.user-select-all {
    -webkit-user-select: all !important;
    -moz-user-select: all !important;
    user-select: all !important;
}

.user-select-auto {
    -webkit-user-select: auto !important;
    -moz-user-select: auto !important;
    user-select: auto !important;
}

.user-select-none {
    -webkit-user-select: none !important;
    -moz-user-select: none !important;
    user-select: none !important;
}

.pe-none {
    pointer-events: none !important;
}

.pe-auto {
    pointer-events: auto !important;
}

.rounded {
    border-radius: var(--bs-border-radius) !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.rounded-1 {
    border-radius: var(--bs-border-radius-sm) !important;
}

.rounded-2 {
    border-radius: var(--bs-border-radius) !important;
}

.rounded-3 {
    border-radius: var(--bs-border-radius-lg) !important;
}

.rounded-4 {
    border-radius: var(--bs-border-radius-xl) !important;
}

.rounded-5 {
    border-radius: var(--bs-border-radius-2xl) !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-pill {
    border-radius: var(--bs-border-radius-pill) !important;
}

.rounded-top {
    border-top-left-radius: var(--bs-border-radius) !important;
    border-top-right-radius: var(--bs-border-radius) !important;
}

.rounded-end {
    border-top-right-radius: var(--bs-border-radius) !important;
    border-bottom-right-radius: var(--bs-border-radius) !important;
}

.rounded-bottom {
    border-bottom-right-radius: var(--bs-border-radius) !important;
    border-bottom-left-radius: var(--bs-border-radius) !important;
}

.rounded-start {
    border-bottom-left-radius: var(--bs-border-radius) !important;
    border-top-left-radius: var(--bs-border-radius) !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

@media (min-width: 576px) {
    .float-sm-start {
        float: left !important;
    }
    .float-sm-end {
        float: right !important;
    }
    .float-sm-none {
        float: none !important;
    }
    .d-sm-inline {
        display: inline !important;
    }
    .d-sm-inline-block {
        display: inline-block !important;
    }
    .d-sm-block {
        display: block !important;
    }
    .d-sm-grid {
        display: grid !important;
    }
    .d-sm-table {
        display: table !important;
    }
    .d-sm-table-row {
        display: table-row !important;
    }
    .d-sm-table-cell {
        display: table-cell !important;
    }
    .d-sm-flex {
        display: flex !important;
    }
    .d-sm-inline-flex {
        display: inline-flex !important;
    }
    .d-sm-none {
        display: none !important;
    }
    .flex-sm-fill {
        flex: 1 1 auto !important;
    }
    .flex-sm-row {
        flex-direction: row !important;
    }
    .flex-sm-column {
        flex-direction: column !important;
    }
    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }
    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-sm-start {
        justify-content: flex-start !important;
    }
    .justify-content-sm-end {
        justify-content: flex-end !important;
    }
    .justify-content-sm-center {
        justify-content: center !important;
    }
    .justify-content-sm-between {
        justify-content: space-between !important;
    }
    .justify-content-sm-around {
        justify-content: space-around !important;
    }
    .justify-content-sm-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-sm-start {
        align-items: flex-start !important;
    }
    .align-items-sm-end {
        align-items: flex-end !important;
    }
    .align-items-sm-center {
        align-items: center !important;
    }
    .align-items-sm-baseline {
        align-items: baseline !important;
    }
    .align-items-sm-stretch {
        align-items: stretch !important;
    }
    .align-content-sm-start {
        align-content: flex-start !important;
    }
    .align-content-sm-end {
        align-content: flex-end !important;
    }
    .align-content-sm-center {
        align-content: center !important;
    }
    .align-content-sm-between {
        align-content: space-between !important;
    }
    .align-content-sm-around {
        align-content: space-around !important;
    }
    .align-content-sm-stretch {
        align-content: stretch !important;
    }
    .align-self-sm-auto {
        align-self: auto !important;
    }
    .align-self-sm-start {
        align-self: flex-start !important;
    }
    .align-self-sm-end {
        align-self: flex-end !important;
    }
    .align-self-sm-center {
        align-self: center !important;
    }
    .align-self-sm-baseline {
        align-self: baseline !important;
    }
    .align-self-sm-stretch {
        align-self: stretch !important;
    }
    .order-sm-first {
        order: -1 !important;
    }
    .order-sm-0 {
        order: 0 !important;
    }
    .order-sm-1 {
        order: 1 !important;
    }
    .order-sm-2 {
        order: 2 !important;
    }
    .order-sm-3 {
        order: 3 !important;
    }
    .order-sm-4 {
        order: 4 !important;
    }
    .order-sm-5 {
        order: 5 !important;
    }
    .order-sm-last {
        order: 6 !important;
    }
    .m-sm-0 {
        margin: 0 !important;
    }
    .m-sm-1 {
        margin: 0.25rem !important;
    }
    .m-sm-2 {
        margin: 0.5rem !important;
    }
    .m-sm-3 {
        margin: 1rem !important;
    }
    .m-sm-4 {
        margin: 1.5rem !important;
    }
    .m-sm-5 {
        margin: 3rem !important;
    }
    .m-sm-auto {
        margin: auto !important;
    }
    .mx-sm-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-sm-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-sm-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-sm-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-sm-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-sm-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-sm-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-sm-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-sm-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-sm-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-sm-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-sm-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-sm-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-sm-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-sm-0 {
        margin-top: 0 !important;
    }
    .mt-sm-1 {
        margin-top: 0.25rem !important;
    }
    .mt-sm-2 {
        margin-top: 0.5rem !important;
    }
    .mt-sm-3 {
        margin-top: 1rem !important;
    }
    .mt-sm-4 {
        margin-top: 1.5rem !important;
    }
    .mt-sm-5 {
        margin-top: 3rem !important;
    }
    .mt-sm-auto {
        margin-top: auto !important;
    }
    .me-sm-0 {
        margin-right: 0 !important;
    }
    .me-sm-1 {
        margin-right: 0.25rem !important;
    }
    .me-sm-2 {
        margin-right: 0.5rem !important;
    }
    .me-sm-3 {
        margin-right: 1rem !important;
    }
    .me-sm-4 {
        margin-right: 1.5rem !important;
    }
    .me-sm-5 {
        margin-right: 3rem !important;
    }
    .me-sm-auto {
        margin-right: auto !important;
    }
    .mb-sm-0 {
        margin-bottom: 0 !important;
    }
    .mb-sm-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-sm-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-sm-3 {
        margin-bottom: 1rem !important;
    }
    .mb-sm-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-sm-5 {
        margin-bottom: 3rem !important;
    }
    .mb-sm-auto {
        margin-bottom: auto !important;
    }
    .ms-sm-0 {
        margin-left: 0 !important;
    }
    .ms-sm-1 {
        margin-left: 0.25rem !important;
    }
    .ms-sm-2 {
        margin-left: 0.5rem !important;
    }
    .ms-sm-3 {
        margin-left: 1rem !important;
    }
    .ms-sm-4 {
        margin-left: 1.5rem !important;
    }
    .ms-sm-5 {
        margin-left: 3rem !important;
    }
    .ms-sm-auto {
        margin-left: auto !important;
    }
    .p-sm-0 {
        padding: 0 !important;
    }
    .p-sm-1 {
        padding: 0.25rem !important;
    }
    .p-sm-2 {
        padding: 0.5rem !important;
    }
    .p-sm-3 {
        padding: 1rem !important;
    }
    .p-sm-4 {
        padding: 1.5rem !important;
    }
    .p-sm-5 {
        padding: 3rem !important;
    }
    .px-sm-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-sm-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-sm-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-sm-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-sm-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-sm-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-sm-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-sm-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-sm-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-sm-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-sm-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-sm-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-sm-0 {
        padding-top: 0 !important;
    }
    .pt-sm-1 {
        padding-top: 0.25rem !important;
    }
    .pt-sm-2 {
        padding-top: 0.5rem !important;
    }
    .pt-sm-3 {
        padding-top: 1rem !important;
    }
    .pt-sm-4 {
        padding-top: 1.5rem !important;
    }
    .pt-sm-5 {
        padding-top: 3rem !important;
    }
    .pe-sm-0 {
        padding-right: 0 !important;
    }
    .pe-sm-1 {
        padding-right: 0.25rem !important;
    }
    .pe-sm-2 {
        padding-right: 0.5rem !important;
    }
    .pe-sm-3 {
        padding-right: 1rem !important;
    }
    .pe-sm-4 {
        padding-right: 1.5rem !important;
    }
    .pe-sm-5 {
        padding-right: 3rem !important;
    }
    .pb-sm-0 {
        padding-bottom: 0 !important;
    }
    .pb-sm-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-sm-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-sm-3 {
        padding-bottom: 1rem !important;
    }
    .pb-sm-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-sm-5 {
        padding-bottom: 3rem !important;
    }
    .ps-sm-0 {
        padding-left: 0 !important;
    }
    .ps-sm-1 {
        padding-left: 0.25rem !important;
    }
    .ps-sm-2 {
        padding-left: 0.5rem !important;
    }
    .ps-sm-3 {
        padding-left: 1rem !important;
    }
    .ps-sm-4 {
        padding-left: 1.5rem !important;
    }
    .ps-sm-5 {
        padding-left: 3rem !important;
    }
    .gap-sm-0 {
        gap: 0 !important;
    }
    .gap-sm-1 {
        gap: 0.25rem !important;
    }
    .gap-sm-2 {
        gap: 0.5rem !important;
    }
    .gap-sm-3 {
        gap: 1rem !important;
    }
    .gap-sm-4 {
        gap: 1.5rem !important;
    }
    .gap-sm-5 {
        gap: 3rem !important;
    }
    .text-sm-start {
        text-align: left !important;
    }
    .text-sm-end {
        text-align: right !important;
    }
    .text-sm-center {
        text-align: center !important;
    }
}
@media (min-width: 768px) {
    .float-md-start {
        float: left !important;
    }
    .float-md-end {
        float: right !important;
    }
    .float-md-none {
        float: none !important;
    }
    .d-md-inline {
        display: inline !important;
    }
    .d-md-inline-block {
        display: inline-block !important;
    }
    .d-md-block {
        display: block !important;
    }
    .d-md-grid {
        display: grid !important;
    }
    .d-md-table {
        display: table !important;
    }
    .d-md-table-row {
        display: table-row !important;
    }
    .d-md-table-cell {
        display: table-cell !important;
    }
    .d-md-flex {
        display: flex !important;
    }
    .d-md-inline-flex {
        display: inline-flex !important;
    }
    .d-md-none {
        display: none !important;
    }
    .flex-md-fill {
        flex: 1 1 auto !important;
    }
    .flex-md-row {
        flex-direction: row !important;
    }
    .flex-md-column {
        flex-direction: column !important;
    }
    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-md-wrap {
        flex-wrap: wrap !important;
    }
    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-md-start {
        justify-content: flex-start !important;
    }
    .justify-content-md-end {
        justify-content: flex-end !important;
    }
    .justify-content-md-center {
        justify-content: center !important;
    }
    .justify-content-md-between {
        justify-content: space-between !important;
    }
    .justify-content-md-around {
        justify-content: space-around !important;
    }
    .justify-content-md-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-md-start {
        align-items: flex-start !important;
    }
    .align-items-md-end {
        align-items: flex-end !important;
    }
    .align-items-md-center {
        align-items: center !important;
    }
    .align-items-md-baseline {
        align-items: baseline !important;
    }
    .align-items-md-stretch {
        align-items: stretch !important;
    }
    .align-content-md-start {
        align-content: flex-start !important;
    }
    .align-content-md-end {
        align-content: flex-end !important;
    }
    .align-content-md-center {
        align-content: center !important;
    }
    .align-content-md-between {
        align-content: space-between !important;
    }
    .align-content-md-around {
        align-content: space-around !important;
    }
    .align-content-md-stretch {
        align-content: stretch !important;
    }
    .align-self-md-auto {
        align-self: auto !important;
    }
    .align-self-md-start {
        align-self: flex-start !important;
    }
    .align-self-md-end {
        align-self: flex-end !important;
    }
    .align-self-md-center {
        align-self: center !important;
    }
    .align-self-md-baseline {
        align-self: baseline !important;
    }
    .align-self-md-stretch {
        align-self: stretch !important;
    }
    .order-md-first {
        order: -1 !important;
    }
    .order-md-0 {
        order: 0 !important;
    }
    .order-md-1 {
        order: 1 !important;
    }
    .order-md-2 {
        order: 2 !important;
    }
    .order-md-3 {
        order: 3 !important;
    }
    .order-md-4 {
        order: 4 !important;
    }
    .order-md-5 {
        order: 5 !important;
    }
    .order-md-last {
        order: 6 !important;
    }
    .m-md-0 {
        margin: 0 !important;
    }
    .m-md-1 {
        margin: 0.25rem !important;
    }
    .m-md-2 {
        margin: 0.5rem !important;
    }
    .m-md-3 {
        margin: 1rem !important;
    }
    .m-md-4 {
        margin: 1.5rem !important;
    }
    .m-md-5 {
        margin: 3rem !important;
    }
    .m-md-auto {
        margin: auto !important;
    }
    .mx-md-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-md-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-md-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-md-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-md-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-md-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-md-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-md-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-md-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-md-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-md-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-md-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-md-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-md-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-md-0 {
        margin-top: 0 !important;
    }
    .mt-md-1 {
        margin-top: 0.25rem !important;
    }
    .mt-md-2 {
        margin-top: 0.5rem !important;
    }
    .mt-md-3 {
        margin-top: 1rem !important;
    }
    .mt-md-4 {
        margin-top: 1.5rem !important;
    }
    .mt-md-5 {
        margin-top: 3rem !important;
    }
    .mt-md-auto {
        margin-top: auto !important;
    }
    .me-md-0 {
        margin-right: 0 !important;
    }
    .me-md-1 {
        margin-right: 0.25rem !important;
    }
    .me-md-2 {
        margin-right: 0.5rem !important;
    }
    .me-md-3 {
        margin-right: 1rem !important;
    }
    .me-md-4 {
        margin-right: 1.5rem !important;
    }
    .me-md-5 {
        margin-right: 3rem !important;
    }
    .me-md-auto {
        margin-right: auto !important;
    }
    .mb-md-0 {
        margin-bottom: 0 !important;
    }
    .mb-md-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-md-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-md-3 {
        margin-bottom: 1rem !important;
    }
    .mb-md-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-md-5 {
        margin-bottom: 3rem !important;
    }
    .mb-md-auto {
        margin-bottom: auto !important;
    }
    .ms-md-0 {
        margin-left: 0 !important;
    }
    .ms-md-1 {
        margin-left: 0.25rem !important;
    }
    .ms-md-2 {
        margin-left: 0.5rem !important;
    }
    .ms-md-3 {
        margin-left: 1rem !important;
    }
    .ms-md-4 {
        margin-left: 1.5rem !important;
    }
    .ms-md-5 {
        margin-left: 3rem !important;
    }
    .ms-md-auto {
        margin-left: auto !important;
    }
    .p-md-0 {
        padding: 0 !important;
    }
    .p-md-1 {
        padding: 0.25rem !important;
    }
    .p-md-2 {
        padding: 0.5rem !important;
    }
    .p-md-3 {
        padding: 1rem !important;
    }
    .p-md-4 {
        padding: 1.5rem !important;
    }
    .p-md-5 {
        padding: 3rem !important;
    }
    .px-md-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-md-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-md-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-md-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-md-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-md-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-md-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-md-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-md-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-md-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-md-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-md-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-md-0 {
        padding-top: 0 !important;
    }
    .pt-md-1 {
        padding-top: 0.25rem !important;
    }
    .pt-md-2 {
        padding-top: 0.5rem !important;
    }
    .pt-md-3 {
        padding-top: 1rem !important;
    }
    .pt-md-4 {
        padding-top: 1.5rem !important;
    }
    .pt-md-5 {
        padding-top: 3rem !important;
    }
    .pe-md-0 {
        padding-right: 0 !important;
    }
    .pe-md-1 {
        padding-right: 0.25rem !important;
    }
    .pe-md-2 {
        padding-right: 0.5rem !important;
    }
    .pe-md-3 {
        padding-right: 1rem !important;
    }
    .pe-md-4 {
        padding-right: 1.5rem !important;
    }
    .pe-md-5 {
        padding-right: 3rem !important;
    }
    .pb-md-0 {
        padding-bottom: 0 !important;
    }
    .pb-md-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-md-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-md-3 {
        padding-bottom: 1rem !important;
    }
    .pb-md-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-md-5 {
        padding-bottom: 3rem !important;
    }
    .ps-md-0 {
        padding-left: 0 !important;
    }
    .ps-md-1 {
        padding-left: 0.25rem !important;
    }
    .ps-md-2 {
        padding-left: 0.5rem !important;
    }
    .ps-md-3 {
        padding-left: 1rem !important;
    }
    .ps-md-4 {
        padding-left: 1.5rem !important;
    }
    .ps-md-5 {
        padding-left: 3rem !important;
    }
    .gap-md-0 {
        gap: 0 !important;
    }
    .gap-md-1 {
        gap: 0.25rem !important;
    }
    .gap-md-2 {
        gap: 0.5rem !important;
    }
    .gap-md-3 {
        gap: 1rem !important;
    }
    .gap-md-4 {
        gap: 1.5rem !important;
    }
    .gap-md-5 {
        gap: 3rem !important;
    }
    .text-md-start {
        text-align: left !important;
    }
    .text-md-end {
        text-align: right !important;
    }
    .text-md-center {
        text-align: center !important;
    }
}
@media (min-width: 992px) {
    .float-lg-start {
        float: left !important;
    }
    .float-lg-end {
        float: right !important;
    }
    .float-lg-none {
        float: none !important;
    }
    .d-lg-inline {
        display: inline !important;
    }
    .d-lg-inline-block {
        display: inline-block !important;
    }
    .d-lg-block {
        display: block !important;
    }
    .d-lg-grid {
        display: grid !important;
    }
    .d-lg-table {
        display: table !important;
    }
    .d-lg-table-row {
        display: table-row !important;
    }
    .d-lg-table-cell {
        display: table-cell !important;
    }
    .d-lg-flex {
        display: flex !important;
    }
    .d-lg-inline-flex {
        display: inline-flex !important;
    }
    .d-lg-none {
        display: none !important;
    }
    .flex-lg-fill {
        flex: 1 1 auto !important;
    }
    .flex-lg-row {
        flex-direction: row !important;
    }
    .flex-lg-column {
        flex-direction: column !important;
    }
    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }
    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-lg-start {
        justify-content: flex-start !important;
    }
    .justify-content-lg-end {
        justify-content: flex-end !important;
    }
    .justify-content-lg-center {
        justify-content: center !important;
    }
    .justify-content-lg-between {
        justify-content: space-between !important;
    }
    .justify-content-lg-around {
        justify-content: space-around !important;
    }
    .justify-content-lg-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-lg-start {
        align-items: flex-start !important;
    }
    .align-items-lg-end {
        align-items: flex-end !important;
    }
    .align-items-lg-center {
        align-items: center !important;
    }
    .align-items-lg-baseline {
        align-items: baseline !important;
    }
    .align-items-lg-stretch {
        align-items: stretch !important;
    }
    .align-content-lg-start {
        align-content: flex-start !important;
    }
    .align-content-lg-end {
        align-content: flex-end !important;
    }
    .align-content-lg-center {
        align-content: center !important;
    }
    .align-content-lg-between {
        align-content: space-between !important;
    }
    .align-content-lg-around {
        align-content: space-around !important;
    }
    .align-content-lg-stretch {
        align-content: stretch !important;
    }
    .align-self-lg-auto {
        align-self: auto !important;
    }
    .align-self-lg-start {
        align-self: flex-start !important;
    }
    .align-self-lg-end {
        align-self: flex-end !important;
    }
    .align-self-lg-center {
        align-self: center !important;
    }
    .align-self-lg-baseline {
        align-self: baseline !important;
    }
    .align-self-lg-stretch {
        align-self: stretch !important;
    }
    .order-lg-first {
        order: -1 !important;
    }
    .order-lg-0 {
        order: 0 !important;
    }
    .order-lg-1 {
        order: 1 !important;
    }
    .order-lg-2 {
        order: 2 !important;
    }
    .order-lg-3 {
        order: 3 !important;
    }
    .order-lg-4 {
        order: 4 !important;
    }
    .order-lg-5 {
        order: 5 !important;
    }
    .order-lg-last {
        order: 6 !important;
    }
    .m-lg-0 {
        margin: 0 !important;
    }
    .m-lg-1 {
        margin: 0.25rem !important;
    }
    .m-lg-2 {
        margin: 0.5rem !important;
    }
    .m-lg-3 {
        margin: 1rem !important;
    }
    .m-lg-4 {
        margin: 1.5rem !important;
    }
    .m-lg-5 {
        margin: 3rem !important;
    }
    .m-lg-auto {
        margin: auto !important;
    }
    .mx-lg-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-lg-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-lg-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-lg-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-lg-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-lg-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-lg-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-lg-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-lg-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-lg-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-lg-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-lg-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-lg-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-lg-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-lg-0 {
        margin-top: 0 !important;
    }
    .mt-lg-1 {
        margin-top: 0.25rem !important;
    }
    .mt-lg-2 {
        margin-top: 0.5rem !important;
    }
    .mt-lg-3 {
        margin-top: 1rem !important;
    }
    .mt-lg-4 {
        margin-top: 1.5rem !important;
    }
    .mt-lg-5 {
        margin-top: 3rem !important;
    }
    .mt-lg-auto {
        margin-top: auto !important;
    }
    .me-lg-0 {
        margin-right: 0 !important;
    }
    .me-lg-1 {
        margin-right: 0.25rem !important;
    }
    .me-lg-2 {
        margin-right: 0.5rem !important;
    }
    .me-lg-3 {
        margin-right: 1rem !important;
    }
    .me-lg-4 {
        margin-right: 1.5rem !important;
    }
    .me-lg-5 {
        margin-right: 3rem !important;
    }
    .me-lg-auto {
        margin-right: auto !important;
    }
    .mb-lg-0 {
        margin-bottom: 0 !important;
    }
    .mb-lg-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-lg-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-lg-3 {
        margin-bottom: 1rem !important;
    }
    .mb-lg-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-lg-5 {
        margin-bottom: 3rem !important;
    }
    .mb-lg-auto {
        margin-bottom: auto !important;
    }
    .ms-lg-0 {
        margin-left: 0 !important;
    }
    .ms-lg-1 {
        margin-left: 0.25rem !important;
    }
    .ms-lg-2 {
        margin-left: 0.5rem !important;
    }
    .ms-lg-3 {
        margin-left: 1rem !important;
    }
    .ms-lg-4 {
        margin-left: 1.5rem !important;
    }
    .ms-lg-5 {
        margin-left: 3rem !important;
    }
    .ms-lg-auto {
        margin-left: auto !important;
    }
    .p-lg-0 {
        padding: 0 !important;
    }
    .p-lg-1 {
        padding: 0.25rem !important;
    }
    .p-lg-2 {
        padding: 0.5rem !important;
    }
    .p-lg-3 {
        padding: 1rem !important;
    }
    .p-lg-4 {
        padding: 1.5rem !important;
    }
    .p-lg-5 {
        padding: 3rem !important;
    }
    .px-lg-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-lg-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-lg-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-lg-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-lg-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-lg-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-lg-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-lg-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-lg-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-lg-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-lg-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-lg-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-lg-0 {
        padding-top: 0 !important;
    }
    .pt-lg-1 {
        padding-top: 0.25rem !important;
    }
    .pt-lg-2 {
        padding-top: 0.5rem !important;
    }
    .pt-lg-3 {
        padding-top: 1rem !important;
    }
    .pt-lg-4 {
        padding-top: 1.5rem !important;
    }
    .pt-lg-5 {
        padding-top: 3rem !important;
    }
    .pe-lg-0 {
        padding-right: 0 !important;
    }
    .pe-lg-1 {
        padding-right: 0.25rem !important;
    }
    .pe-lg-2 {
        padding-right: 0.5rem !important;
    }
    .pe-lg-3 {
        padding-right: 1rem !important;
    }
    .pe-lg-4 {
        padding-right: 1.5rem !important;
    }
    .pe-lg-5 {
        padding-right: 3rem !important;
    }
    .pb-lg-0 {
        padding-bottom: 0 !important;
    }
    .pb-lg-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-lg-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-lg-3 {
        padding-bottom: 1rem !important;
    }
    .pb-lg-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-lg-5 {
        padding-bottom: 3rem !important;
    }
    .ps-lg-0 {
        padding-left: 0 !important;
    }
    .ps-lg-1 {
        padding-left: 0.25rem !important;
    }
    .ps-lg-2 {
        padding-left: 0.5rem !important;
    }
    .ps-lg-3 {
        padding-left: 1rem !important;
    }
    .ps-lg-4 {
        padding-left: 1.5rem !important;
    }
    .ps-lg-5 {
        padding-left: 3rem !important;
    }
    .gap-lg-0 {
        gap: 0 !important;
    }
    .gap-lg-1 {
        gap: 0.25rem !important;
    }
    .gap-lg-2 {
        gap: 0.5rem !important;
    }
    .gap-lg-3 {
        gap: 1rem !important;
    }
    .gap-lg-4 {
        gap: 1.5rem !important;
    }
    .gap-lg-5 {
        gap: 3rem !important;
    }
    .text-lg-start {
        text-align: left !important;
    }
    .text-lg-end {
        text-align: right !important;
    }
    .text-lg-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .float-xl-start {
        float: left !important;
    }
    .float-xl-end {
        float: right !important;
    }
    .float-xl-none {
        float: none !important;
    }
    .d-xl-inline {
        display: inline !important;
    }
    .d-xl-inline-block {
        display: inline-block !important;
    }
    .d-xl-block {
        display: block !important;
    }
    .d-xl-grid {
        display: grid !important;
    }
    .d-xl-table {
        display: table !important;
    }
    .d-xl-table-row {
        display: table-row !important;
    }
    .d-xl-table-cell {
        display: table-cell !important;
    }
    .d-xl-flex {
        display: flex !important;
    }
    .d-xl-inline-flex {
        display: inline-flex !important;
    }
    .d-xl-none {
        display: none !important;
    }
    .flex-xl-fill {
        flex: 1 1 auto !important;
    }
    .flex-xl-row {
        flex-direction: row !important;
    }
    .flex-xl-column {
        flex-direction: column !important;
    }
    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }
    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-xl-start {
        justify-content: flex-start !important;
    }
    .justify-content-xl-end {
        justify-content: flex-end !important;
    }
    .justify-content-xl-center {
        justify-content: center !important;
    }
    .justify-content-xl-between {
        justify-content: space-between !important;
    }
    .justify-content-xl-around {
        justify-content: space-around !important;
    }
    .justify-content-xl-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-xl-start {
        align-items: flex-start !important;
    }
    .align-items-xl-end {
        align-items: flex-end !important;
    }
    .align-items-xl-center {
        align-items: center !important;
    }
    .align-items-xl-baseline {
        align-items: baseline !important;
    }
    .align-items-xl-stretch {
        align-items: stretch !important;
    }
    .align-content-xl-start {
        align-content: flex-start !important;
    }
    .align-content-xl-end {
        align-content: flex-end !important;
    }
    .align-content-xl-center {
        align-content: center !important;
    }
    .align-content-xl-between {
        align-content: space-between !important;
    }
    .align-content-xl-around {
        align-content: space-around !important;
    }
    .align-content-xl-stretch {
        align-content: stretch !important;
    }
    .align-self-xl-auto {
        align-self: auto !important;
    }
    .align-self-xl-start {
        align-self: flex-start !important;
    }
    .align-self-xl-end {
        align-self: flex-end !important;
    }
    .align-self-xl-center {
        align-self: center !important;
    }
    .align-self-xl-baseline {
        align-self: baseline !important;
    }
    .align-self-xl-stretch {
        align-self: stretch !important;
    }
    .order-xl-first {
        order: -1 !important;
    }
    .order-xl-0 {
        order: 0 !important;
    }
    .order-xl-1 {
        order: 1 !important;
    }
    .order-xl-2 {
        order: 2 !important;
    }
    .order-xl-3 {
        order: 3 !important;
    }
    .order-xl-4 {
        order: 4 !important;
    }
    .order-xl-5 {
        order: 5 !important;
    }
    .order-xl-last {
        order: 6 !important;
    }
    .m-xl-0 {
        margin: 0 !important;
    }
    .m-xl-1 {
        margin: 0.25rem !important;
    }
    .m-xl-2 {
        margin: 0.5rem !important;
    }
    .m-xl-3 {
        margin: 1rem !important;
    }
    .m-xl-4 {
        margin: 1.5rem !important;
    }
    .m-xl-5 {
        margin: 3rem !important;
    }
    .m-xl-auto {
        margin: auto !important;
    }
    .mx-xl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-xl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-xl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-xl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-xl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-xl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-xl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-xl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-xl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-xl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-xl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-xl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-xl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-xl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-xl-0 {
        margin-top: 0 !important;
    }
    .mt-xl-1 {
        margin-top: 0.25rem !important;
    }
    .mt-xl-2 {
        margin-top: 0.5rem !important;
    }
    .mt-xl-3 {
        margin-top: 1rem !important;
    }
    .mt-xl-4 {
        margin-top: 1.5rem !important;
    }
    .mt-xl-5 {
        margin-top: 3rem !important;
    }
    .mt-xl-auto {
        margin-top: auto !important;
    }
    .me-xl-0 {
        margin-right: 0 !important;
    }
    .me-xl-1 {
        margin-right: 0.25rem !important;
    }
    .me-xl-2 {
        margin-right: 0.5rem !important;
    }
    .me-xl-3 {
        margin-right: 1rem !important;
    }
    .me-xl-4 {
        margin-right: 1.5rem !important;
    }
    .me-xl-5 {
        margin-right: 3rem !important;
    }
    .me-xl-auto {
        margin-right: auto !important;
    }
    .mb-xl-0 {
        margin-bottom: 0 !important;
    }
    .mb-xl-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-xl-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-xl-3 {
        margin-bottom: 1rem !important;
    }
    .mb-xl-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-xl-5 {
        margin-bottom: 3rem !important;
    }
    .mb-xl-auto {
        margin-bottom: auto !important;
    }
    .ms-xl-0 {
        margin-left: 0 !important;
    }
    .ms-xl-1 {
        margin-left: 0.25rem !important;
    }
    .ms-xl-2 {
        margin-left: 0.5rem !important;
    }
    .ms-xl-3 {
        margin-left: 1rem !important;
    }
    .ms-xl-4 {
        margin-left: 1.5rem !important;
    }
    .ms-xl-5 {
        margin-left: 3rem !important;
    }
    .ms-xl-auto {
        margin-left: auto !important;
    }
    .p-xl-0 {
        padding: 0 !important;
    }
    .p-xl-1 {
        padding: 0.25rem !important;
    }
    .p-xl-2 {
        padding: 0.5rem !important;
    }
    .p-xl-3 {
        padding: 1rem !important;
    }
    .p-xl-4 {
        padding: 1.5rem !important;
    }
    .p-xl-5 {
        padding: 3rem !important;
    }
    .px-xl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-xl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-xl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-xl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-xl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-xl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-xl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-xl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-xl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-xl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-xl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-xl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-xl-0 {
        padding-top: 0 !important;
    }
    .pt-xl-1 {
        padding-top: 0.25rem !important;
    }
    .pt-xl-2 {
        padding-top: 0.5rem !important;
    }
    .pt-xl-3 {
        padding-top: 1rem !important;
    }
    .pt-xl-4 {
        padding-top: 1.5rem !important;
    }
    .pt-xl-5 {
        padding-top: 3rem !important;
    }
    .pe-xl-0 {
        padding-right: 0 !important;
    }
    .pe-xl-1 {
        padding-right: 0.25rem !important;
    }
    .pe-xl-2 {
        padding-right: 0.5rem !important;
    }
    .pe-xl-3 {
        padding-right: 1rem !important;
    }
    .pe-xl-4 {
        padding-right: 1.5rem !important;
    }
    .pe-xl-5 {
        padding-right: 3rem !important;
    }
    .pb-xl-0 {
        padding-bottom: 0 !important;
    }
    .pb-xl-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-xl-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-xl-3 {
        padding-bottom: 1rem !important;
    }
    .pb-xl-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-xl-5 {
        padding-bottom: 3rem !important;
    }
    .ps-xl-0 {
        padding-left: 0 !important;
    }
    .ps-xl-1 {
        padding-left: 0.25rem !important;
    }
    .ps-xl-2 {
        padding-left: 0.5rem !important;
    }
    .ps-xl-3 {
        padding-left: 1rem !important;
    }
    .ps-xl-4 {
        padding-left: 1.5rem !important;
    }
    .ps-xl-5 {
        padding-left: 3rem !important;
    }
    .gap-xl-0 {
        gap: 0 !important;
    }
    .gap-xl-1 {
        gap: 0.25rem !important;
    }
    .gap-xl-2 {
        gap: 0.5rem !important;
    }
    .gap-xl-3 {
        gap: 1rem !important;
    }
    .gap-xl-4 {
        gap: 1.5rem !important;
    }
    .gap-xl-5 {
        gap: 3rem !important;
    }
    .text-xl-start {
        text-align: left !important;
    }
    .text-xl-end {
        text-align: right !important;
    }
    .text-xl-center {
        text-align: center !important;
    }
}
@media (min-width: 1400px) {
    .float-xxl-start {
        float: left !important;
    }
    .float-xxl-end {
        float: right !important;
    }
    .float-xxl-none {
        float: none !important;
    }
    .d-xxl-inline {
        display: inline !important;
    }
    .d-xxl-inline-block {
        display: inline-block !important;
    }
    .d-xxl-block {
        display: block !important;
    }
    .d-xxl-grid {
        display: grid !important;
    }
    .d-xxl-table {
        display: table !important;
    }
    .d-xxl-table-row {
        display: table-row !important;
    }
    .d-xxl-table-cell {
        display: table-cell !important;
    }
    .d-xxl-flex {
        display: flex !important;
    }
    .d-xxl-inline-flex {
        display: inline-flex !important;
    }
    .d-xxl-none {
        display: none !important;
    }
    .flex-xxl-fill {
        flex: 1 1 auto !important;
    }
    .flex-xxl-row {
        flex-direction: row !important;
    }
    .flex-xxl-column {
        flex-direction: column !important;
    }
    .flex-xxl-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-xxl-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-xxl-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-xxl-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-xxl-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-xxl-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-xxl-wrap {
        flex-wrap: wrap !important;
    }
    .flex-xxl-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-xxl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-xxl-start {
        justify-content: flex-start !important;
    }
    .justify-content-xxl-end {
        justify-content: flex-end !important;
    }
    .justify-content-xxl-center {
        justify-content: center !important;
    }
    .justify-content-xxl-between {
        justify-content: space-between !important;
    }
    .justify-content-xxl-around {
        justify-content: space-around !important;
    }
    .justify-content-xxl-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-xxl-start {
        align-items: flex-start !important;
    }
    .align-items-xxl-end {
        align-items: flex-end !important;
    }
    .align-items-xxl-center {
        align-items: center !important;
    }
    .align-items-xxl-baseline {
        align-items: baseline !important;
    }
    .align-items-xxl-stretch {
        align-items: stretch !important;
    }
    .align-content-xxl-start {
        align-content: flex-start !important;
    }
    .align-content-xxl-end {
        align-content: flex-end !important;
    }
    .align-content-xxl-center {
        align-content: center !important;
    }
    .align-content-xxl-between {
        align-content: space-between !important;
    }
    .align-content-xxl-around {
        align-content: space-around !important;
    }
    .align-content-xxl-stretch {
        align-content: stretch !important;
    }
    .align-self-xxl-auto {
        align-self: auto !important;
    }
    .align-self-xxl-start {
        align-self: flex-start !important;
    }
    .align-self-xxl-end {
        align-self: flex-end !important;
    }
    .align-self-xxl-center {
        align-self: center !important;
    }
    .align-self-xxl-baseline {
        align-self: baseline !important;
    }
    .align-self-xxl-stretch {
        align-self: stretch !important;
    }
    .order-xxl-first {
        order: -1 !important;
    }
    .order-xxl-0 {
        order: 0 !important;
    }
    .order-xxl-1 {
        order: 1 !important;
    }
    .order-xxl-2 {
        order: 2 !important;
    }
    .order-xxl-3 {
        order: 3 !important;
    }
    .order-xxl-4 {
        order: 4 !important;
    }
    .order-xxl-5 {
        order: 5 !important;
    }
    .order-xxl-last {
        order: 6 !important;
    }
    .m-xxl-0 {
        margin: 0 !important;
    }
    .m-xxl-1 {
        margin: 0.25rem !important;
    }
    .m-xxl-2 {
        margin: 0.5rem !important;
    }
    .m-xxl-3 {
        margin: 1rem !important;
    }
    .m-xxl-4 {
        margin: 1.5rem !important;
    }
    .m-xxl-5 {
        margin: 3rem !important;
    }
    .m-xxl-auto {
        margin: auto !important;
    }
    .mx-xxl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-xxl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-xxl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-xxl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-xxl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-xxl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-xxl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-xxl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-xxl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-xxl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-xxl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-xxl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-xxl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-xxl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-xxl-0 {
        margin-top: 0 !important;
    }
    .mt-xxl-1 {
        margin-top: 0.25rem !important;
    }
    .mt-xxl-2 {
        margin-top: 0.5rem !important;
    }
    .mt-xxl-3 {
        margin-top: 1rem !important;
    }
    .mt-xxl-4 {
        margin-top: 1.5rem !important;
    }
    .mt-xxl-5 {
        margin-top: 3rem !important;
    }
    .mt-xxl-auto {
        margin-top: auto !important;
    }
    .me-xxl-0 {
        margin-right: 0 !important;
    }
    .me-xxl-1 {
        margin-right: 0.25rem !important;
    }
    .me-xxl-2 {
        margin-right: 0.5rem !important;
    }
    .me-xxl-3 {
        margin-right: 1rem !important;
    }
    .me-xxl-4 {
        margin-right: 1.5rem !important;
    }
    .me-xxl-5 {
        margin-right: 3rem !important;
    }
    .me-xxl-auto {
        margin-right: auto !important;
    }
    .mb-xxl-0 {
        margin-bottom: 0 !important;
    }
    .mb-xxl-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-xxl-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-xxl-3 {
        margin-bottom: 1rem !important;
    }
    .mb-xxl-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-xxl-5 {
        margin-bottom: 3rem !important;
    }
    .mb-xxl-auto {
        margin-bottom: auto !important;
    }
    .ms-xxl-0 {
        margin-left: 0 !important;
    }
    .ms-xxl-1 {
        margin-left: 0.25rem !important;
    }
    .ms-xxl-2 {
        margin-left: 0.5rem !important;
    }
    .ms-xxl-3 {
        margin-left: 1rem !important;
    }
    .ms-xxl-4 {
        margin-left: 1.5rem !important;
    }
    .ms-xxl-5 {
        margin-left: 3rem !important;
    }
    .ms-xxl-auto {
        margin-left: auto !important;
    }
    .p-xxl-0 {
        padding: 0 !important;
    }
    .p-xxl-1 {
        padding: 0.25rem !important;
    }
    .p-xxl-2 {
        padding: 0.5rem !important;
    }
    .p-xxl-3 {
        padding: 1rem !important;
    }
    .p-xxl-4 {
        padding: 1.5rem !important;
    }
    .p-xxl-5 {
        padding: 3rem !important;
    }
    .px-xxl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-xxl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-xxl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-xxl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-xxl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-xxl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-xxl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-xxl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-xxl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-xxl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-xxl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-xxl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-xxl-0 {
        padding-top: 0 !important;
    }
    .pt-xxl-1 {
        padding-top: 0.25rem !important;
    }
    .pt-xxl-2 {
        padding-top: 0.5rem !important;
    }
    .pt-xxl-3 {
        padding-top: 1rem !important;
    }
    .pt-xxl-4 {
        padding-top: 1.5rem !important;
    }
    .pt-xxl-5 {
        padding-top: 3rem !important;
    }
    .pe-xxl-0 {
        padding-right: 0 !important;
    }
    .pe-xxl-1 {
        padding-right: 0.25rem !important;
    }
    .pe-xxl-2 {
        padding-right: 0.5rem !important;
    }
    .pe-xxl-3 {
        padding-right: 1rem !important;
    }
    .pe-xxl-4 {
        padding-right: 1.5rem !important;
    }
    .pe-xxl-5 {
        padding-right: 3rem !important;
    }
    .pb-xxl-0 {
        padding-bottom: 0 !important;
    }
    .pb-xxl-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-xxl-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-xxl-3 {
        padding-bottom: 1rem !important;
    }
    .pb-xxl-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-xxl-5 {
        padding-bottom: 3rem !important;
    }
    .ps-xxl-0 {
        padding-left: 0 !important;
    }
    .ps-xxl-1 {
        padding-left: 0.25rem !important;
    }
    .ps-xxl-2 {
        padding-left: 0.5rem !important;
    }
    .ps-xxl-3 {
        padding-left: 1rem !important;
    }
    .ps-xxl-4 {
        padding-left: 1.5rem !important;
    }
    .ps-xxl-5 {
        padding-left: 3rem !important;
    }
    .gap-xxl-0 {
        gap: 0 !important;
    }
    .gap-xxl-1 {
        gap: 0.25rem !important;
    }
    .gap-xxl-2 {
        gap: 0.5rem !important;
    }
    .gap-xxl-3 {
        gap: 1rem !important;
    }
    .gap-xxl-4 {
        gap: 1.5rem !important;
    }
    .gap-xxl-5 {
        gap: 3rem !important;
    }
    .text-xxl-start {
        text-align: left !important;
    }
    .text-xxl-end {
        text-align: right !important;
    }
    .text-xxl-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .fs-1 {
        font-size: 2.5rem !important;
    }
    .fs-2 {
        font-size: 2rem !important;
    }
    .fs-3 {
        font-size: 1.75rem !important;
    }
    .fs-4 {
        font-size: 1.5rem !important;
    }
}
@media print {
    .d-print-inline {
        display: inline !important;
    }
    .d-print-inline-block {
        display: inline-block !important;
    }
    .d-print-block {
        display: block !important;
    }
    .d-print-grid {
        display: grid !important;
    }
    .d-print-table {
        display: table !important;
    }
    .d-print-table-row {
        display: table-row !important;
    }
    .d-print-table-cell {
        display: table-cell !important;
    }
    .d-print-flex {
        display: flex !important;
    }
    .d-print-inline-flex {
        display: inline-flex !important;
    }
    .d-print-none {
        display: none !important;
    }
}
:root {
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #d63384;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-black: #000;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-gray-100: #f8f9fa;
    --bs-gray-200: #e9ecef;
    --bs-gray-300: #dee2e6;
    --bs-gray-400: #ced4da;
    --bs-gray-500: #adb5bd;
    --bs-gray-600: #6c757d;
    --bs-gray-700: #495057;
    --bs-gray-800: #343a40;
    --bs-gray-900: #212529;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;
    --bs-primary-rgb: 13, 110, 253;
    --bs-secondary-rgb: 108, 117, 125;
    --bs-success-rgb: 25, 135, 84;
    --bs-info-rgb: 13, 202, 240;
    --bs-warning-rgb: 255, 193, 7;
    --bs-danger-rgb: 220, 53, 69;
    --bs-light-rgb: 248, 249, 250;
    --bs-dark-rgb: 33, 37, 41;
    --bs-white-rgb: 255, 255, 255;
    --bs-black-rgb: 0, 0, 0;
    --bs-body-color-rgb: 33, 37, 41;
    --bs-body-bg-rgb: 255, 255, 255;
    --bs-font-sans-serif: system-ui, -apple-system, 'Segoe UI', Roboto,
        'Helvetica Neue', 'Noto Sans', 'Liberation Sans', Arial, sans-serif,
        'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol',
        'Noto Color Emoji';
    --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
        'Liberation Mono', 'Courier New', monospace;
    --bs-gradient: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.15),
        rgba(255, 255, 255, 0)
    );
    --bs-body-font-family: var(--bs-font-sans-serif);
    --bs-body-font-size: 1rem;
    --bs-body-font-weight: 400;
    --bs-body-line-height: 1.5;
    --bs-body-color: #212529;
    --bs-body-bg: #fff;
    --bs-border-width: 1px;
    --bs-border-style: solid;
    --bs-border-color: #dee2e6;
    --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
    --bs-border-radius: 0.375rem;
    --bs-border-radius-sm: 0.25rem;
    --bs-border-radius-lg: 0.5rem;
    --bs-border-radius-xl: 1rem;
    --bs-border-radius-2xl: 2rem;
    --bs-border-radius-pill: 50rem;
    --bs-link-color: #0d6efd;
    --bs-link-hover-color: #0a58ca;
    --bs-code-color: #d63384;
    --bs-highlight-bg: #fff3cd;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
    :root {
        scroll-behavior: smooth;
    }
}

body {
    background-image: url('img/Fondo_Flybox.png');
    background-size: cover;
    background-repeat: repeat;
}

hr {
    margin: 1rem 0;
    color: inherit;
    border: 0;
    border-top: 1px solid;
    opacity: 0.25;
}

h6,
.h6,
h5,
.h5,
h4,
.h4,
h3,
.h3,
h2,
.h2,
h1,
.h1 {
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1,
.h1 {
    font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
    h1,
    .h1 {
        font-size: 2.5rem;
    }
}

h2,
.h2 {
    font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
    h2,
    .h2 {
        font-size: 2rem;
    }
}
h3,
.h3 {
    font-size: calc(1.3rem + 0.6vw);
}
@media (min-width: 1200px) {
    h3,
    .h3 {
        font-size: 1.75rem;
    }
}

h4,
.h4 {
    font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
    h4,
    .h4 {
        font-size: 1.5rem;
    }
}

h5,
.h5 {
    font-size: 1.25rem;
}

h6,
.h6 {
    font-size: 1rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title] {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul {
    padding-left: 2rem;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: 0.5rem;
    margin-left: 0;
}

blockquote {
    margin: 0 0 1rem;
}

b,
strong {
    font-weight: bolder;
}

small,
.small {
    font-size: 0.875em;
}

mark,
.mark {
    padding: 0.1875em;
    background-color: var(--bs-highlight-bg);
}

sub,
sup {
    position: relative;
    font-size: 0.75em;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}

a {
    color: var(--bs-link-color);
    text-decoration: underline;
}
a:hover {
    color: var(--bs-link-hover-color);
}

a:not([href]):not([class]),
a:not([href]):not([class]):hover {
    color: inherit;
    text-decoration: none;
}

pre,
code,
kbd,
samp {
    font-family: var(--bs-font-monospace);
    font-size: 1em;
}

pre {
    display: block;
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    font-size: 0.875em;
}
pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}

code {
    font-size: 0.875em;
    color: var(--bs-code-color);
    word-wrap: break-word;
}
a > code {
    color: inherit;
}

kbd {
    padding: 0.1875rem 0.375rem;
    font-size: 0.875em;
    color: var(--bs-body-bg);
    background-color: var(--bs-body-color);
    border-radius: 0.25rem;
}
kbd kbd {
    padding: 0;
    font-size: 1em;
}

figure {
    margin: 0 0 1rem;
}

img,
svg {
    vertical-align: middle;
}

table {
    caption-side: bottom;
    border-collapse: collapse;
}

caption {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    color: #6c757d;
    text-align: left;
}

th {
    text-align: inherit;
    text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
}

label {
    display: inline-block;
}

button {
    border-radius: 0;
}

button:focus:not(:focus-visible) {
    outline: 0;
}

input,
button,
select,
optgroup,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
select {
    text-transform: none;
}

[role='button'] {
    cursor: pointer;
}

select {
    word-wrap: normal;
}
select:disabled {
    opacity: 1;
}

[list]:not([type='date']):not([type='datetime-local']):not([type='month']):not(
        [type='week']
    ):not([type='time'])::-webkit-calendar-picker-indicator {
    display: none !important;
}

button:not(:disabled),
[type='button']:not(:disabled),
[type='reset']:not(:disabled),
[type='submit']:not(:disabled) {
    cursor: pointer;
}

::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

textarea {
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    float: left;
    width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: calc(1.275rem + 0.3vw);
    line-height: inherit;
}
@media (min-width: 1200px) {
    legend {
        font-size: 1.5rem;
    }
}
legend + * {
    clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
    padding: 0;
}

::-webkit-inner-spin-button {
    height: auto;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
    padding: 0;
}

output {
    display: inline-block;
}

iframe {
    border: 0;
}

summary {
    display: list-item;
    cursor: pointer;
}

progress {
    vertical-align: baseline;
}

[hidden] {
    display: none !important;
}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
}

.display-1 {
    font-size: calc(1.625rem + 4.5vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-1 {
        font-size: 5rem;
    }
}

.display-2 {
    font-size: calc(1.575rem + 3.9vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-2 {
        font-size: 4.5rem;
    }
}

.display-3 {
    font-size: calc(1.525rem + 3.3vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-3 {
        font-size: 4rem;
    }
}

.display-4 {
    font-size: calc(1.475rem + 2.7vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-4 {
        font-size: 3.5rem;
    }
}

.display-5 {
    font-size: calc(1.425rem + 2.1vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-5 {
        font-size: 3rem;
    }
}

.display-6 {
    font-size: calc(1.375rem + 1.5vw);
    font-weight: 300;
    line-height: 1.2;
}
@media (min-width: 1200px) {
    .display-6 {
        font-size: 2.5rem;
    }
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
}
.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}

.initialism {
    font-size: 0.875em;
    text-transform: uppercase;
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem;
}
.blockquote > :last-child {
    margin-bottom: 0;
}

.blockquote-footer {
    margin-top: -1rem;
    margin-bottom: 1rem;
    font-size: 0.875em;
    color: #6c757d;
}
.blockquote-footer::before {
    content: '— ';
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid var(--bs-border-color);
    border-radius: 0.375rem;
    max-width: 100%;
    height: auto;
}

.figure {
    display: inline-block;
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}

.figure-caption {
    font-size: 0.875em;
    color: #6c757d;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .container-sm,
    .container {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .container-md,
    .container-sm,
    .container {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .container-lg,
    .container-md,
    .container-sm,
    .container {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .container-xl,
    .container-lg,
    .container-md,
    .container-sm,
    .container {
        max-width: 1140px;
    }
}
@media (min-width: 1400px) {
    .container-xxl,
    .container-xl,
    .container-lg,
    .container-md,
    .container-sm,
    .container {
        max-width: 1320px;
    }
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-0.5 * var(--bs-gutter-x));
    margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
    margin-top: var(--bs-gutter-y);
}

.col {
    flex: 1 0 0%;
}

.row-cols-auto > * {
    flex: 0 0 auto;
    width: auto;
}

.row-cols-1 > * {
    flex: 0 0 auto;
    width: 100%;
}

.row-cols-2 > * {
    flex: 0 0 auto;
    width: 50%;
}

.row-cols-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
}

.row-cols-4 > * {
    flex: 0 0 auto;
    width: 25%;
}

.row-cols-5 > * {
    flex: 0 0 auto;
    width: 20%;
}

.row-cols-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
}

.col-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
}

.col-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
}

.col-3 {
    flex: 0 0 auto;
    width: 25%;
}

.col-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
}

.col-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
}

.col-6 {
    flex: 0 0 auto;
    width: 50%;
}

.col-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
}

.col-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
}

.col-9 {
    flex: 0 0 auto;
    width: 75%;
}

.col-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
}

.col-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
}

.col-12 {
    flex: 0 0 auto;
    width: 100%;
}

.offset-1 {
    margin-left: 8.33333333%;
}

.offset-2 {
    margin-left: 16.66666667%;
}

.offset-3 {
    margin-left: 25%;
}

.offset-4 {
    margin-left: 33.33333333%;
}

.offset-5 {
    margin-left: 41.66666667%;
}

.offset-6 {
    margin-left: 50%;
}

.offset-7 {
    margin-left: 58.33333333%;
}

.offset-8 {
    margin-left: 66.66666667%;
}

.offset-9 {
    margin-left: 75%;
}

.offset-10 {
    margin-left: 83.33333333%;
}

.offset-11 {
    margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
    --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
    --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
    --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
    --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
    --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
    --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
    --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
    --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
    --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
    --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
    --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
    --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
    .col-sm {
        flex: 1 0 0%;
    }
    .row-cols-sm-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-sm-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-sm-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-sm-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-sm-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-sm-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-sm-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-sm-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-sm-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-sm-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-sm-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-sm-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-sm-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-sm-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-sm-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-sm-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-sm-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-sm-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-sm-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-sm-0 {
        margin-left: 0;
    }
    .offset-sm-1 {
        margin-left: 8.33333333%;
    }
    .offset-sm-2 {
        margin-left: 16.66666667%;
    }
    .offset-sm-3 {
        margin-left: 25%;
    }
    .offset-sm-4 {
        margin-left: 33.33333333%;
    }
    .offset-sm-5 {
        margin-left: 41.66666667%;
    }
    .offset-sm-6 {
        margin-left: 50%;
    }
    .offset-sm-7 {
        margin-left: 58.33333333%;
    }
    .offset-sm-8 {
        margin-left: 66.66666667%;
    }
    .offset-sm-9 {
        margin-left: 75%;
    }
    .offset-sm-10 {
        margin-left: 83.33333333%;
    }
    .offset-sm-11 {
        margin-left: 91.66666667%;
    }
    .g-sm-0,
    .gx-sm-0 {
        --bs-gutter-x: 0;
    }
    .g-sm-0,
    .gy-sm-0 {
        --bs-gutter-y: 0;
    }
    .g-sm-1,
    .gx-sm-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-sm-1,
    .gy-sm-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-sm-2,
    .gx-sm-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-sm-2,
    .gy-sm-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-sm-3,
    .gx-sm-3 {
        --bs-gutter-x: 1rem;
    }
    .g-sm-3,
    .gy-sm-3 {
        --bs-gutter-y: 1rem;
    }
    .g-sm-4,
    .gx-sm-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-sm-4,
    .gy-sm-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-sm-5,
    .gx-sm-5 {
        --bs-gutter-x: 3rem;
    }
    .g-sm-5,
    .gy-sm-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 768px) {
    .col-md {
        flex: 1 0 0%;
    }
    .row-cols-md-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-md-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-md-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-md-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-md-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-md-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-md-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-md-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-md-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-md-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-md-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-md-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-md-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-md-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-md-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-md-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-md-0 {
        margin-left: 0;
    }
    .offset-md-1 {
        margin-left: 8.33333333%;
    }
    .offset-md-2 {
        margin-left: 16.66666667%;
    }
    .offset-md-3 {
        margin-left: 25%;
    }
    .offset-md-4 {
        margin-left: 33.33333333%;
    }
    .offset-md-5 {
        margin-left: 41.66666667%;
    }
    .offset-md-6 {
        margin-left: 50%;
    }
    .offset-md-7 {
        margin-left: 58.33333333%;
    }
    .offset-md-8 {
        margin-left: 66.66666667%;
    }
    .offset-md-9 {
        margin-left: 75%;
    }
    .offset-md-10 {
        margin-left: 83.33333333%;
    }
    .offset-md-11 {
        margin-left: 91.66666667%;
    }
    .g-md-0,
    .gx-md-0 {
        --bs-gutter-x: 0;
    }
    .g-md-0,
    .gy-md-0 {
        --bs-gutter-y: 0;
    }
    .g-md-1,
    .gx-md-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-md-1,
    .gy-md-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-md-2,
    .gx-md-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-md-2,
    .gy-md-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-md-3,
    .gx-md-3 {
        --bs-gutter-x: 1rem;
    }
    .g-md-3,
    .gy-md-3 {
        --bs-gutter-y: 1rem;
    }
    .g-md-4,
    .gx-md-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-md-4,
    .gy-md-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-md-5,
    .gx-md-5 {
        --bs-gutter-x: 3rem;
    }
    .g-md-5,
    .gy-md-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 992px) {
    .col-lg {
        flex: 1 0 0%;
    }
    .row-cols-lg-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-lg-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-lg-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-lg-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-lg-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-lg-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-lg-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-lg-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-lg-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-lg-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-lg-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-lg-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-lg-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-lg-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-lg-0 {
        margin-left: 0;
    }
    .offset-lg-1 {
        margin-left: 8.33333333%;
    }
    .offset-lg-2 {
        margin-left: 16.66666667%;
    }
    .offset-lg-3 {
        margin-left: 25%;
    }
    .offset-lg-4 {
        margin-left: 33.33333333%;
    }
    .offset-lg-5 {
        margin-left: 41.66666667%;
    }
    .offset-lg-6 {
        margin-left: 50%;
    }
    .offset-lg-7 {
        margin-left: 58.33333333%;
    }
    .offset-lg-8 {
        margin-left: 66.66666667%;
    }
    .offset-lg-9 {
        margin-left: 75%;
    }
    .offset-lg-10 {
        margin-left: 83.33333333%;
    }
    .offset-lg-11 {
        margin-left: 91.66666667%;
    }
    .g-lg-0,
    .gx-lg-0 {
        --bs-gutter-x: 0;
    }
    .g-lg-0,
    .gy-lg-0 {
        --bs-gutter-y: 0;
    }
    .g-lg-1,
    .gx-lg-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-lg-1,
    .gy-lg-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-lg-2,
    .gx-lg-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-lg-2,
    .gy-lg-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-lg-3,
    .gx-lg-3 {
        --bs-gutter-x: 1rem;
    }
    .g-lg-3,
    .gy-lg-3 {
        --bs-gutter-y: 1rem;
    }
    .g-lg-4,
    .gx-lg-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-lg-4,
    .gy-lg-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-lg-5,
    .gx-lg-5 {
        --bs-gutter-x: 3rem;
    }
    .g-lg-5,
    .gy-lg-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 1200px) {
    .col-xl {
        flex: 1 0 0%;
    }
    .row-cols-xl-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-xl-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-xl-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-xl-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-xl-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-xl-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-xl-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-xl-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-xl-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-xl-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-xl-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-xl-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-xl-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-xl-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-xl-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-xl-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-xl-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-xl-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-xl-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-xl-0 {
        margin-left: 0;
    }
    .offset-xl-1 {
        margin-left: 8.33333333%;
    }
    .offset-xl-2 {
        margin-left: 16.66666667%;
    }
    .offset-xl-3 {
        margin-left: 25%;
    }
    .offset-xl-4 {
        margin-left: 33.33333333%;
    }
    .offset-xl-5 {
        margin-left: 41.66666667%;
    }
    .offset-xl-6 {
        margin-left: 50%;
    }
    .offset-xl-7 {
        margin-left: 58.33333333%;
    }
    .offset-xl-8 {
        margin-left: 66.66666667%;
    }
    .offset-xl-9 {
        margin-left: 75%;
    }
    .offset-xl-10 {
        margin-left: 83.33333333%;
    }
    .offset-xl-11 {
        margin-left: 91.66666667%;
    }
    .g-xl-0,
    .gx-xl-0 {
        --bs-gutter-x: 0;
    }
    .g-xl-0,
    .gy-xl-0 {
        --bs-gutter-y: 0;
    }
    .g-xl-1,
    .gx-xl-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-xl-1,
    .gy-xl-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-xl-2,
    .gx-xl-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-xl-2,
    .gy-xl-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-xl-3,
    .gx-xl-3 {
        --bs-gutter-x: 1rem;
    }
    .g-xl-3,
    .gy-xl-3 {
        --bs-gutter-y: 1rem;
    }
    .g-xl-4,
    .gx-xl-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-xl-4,
    .gy-xl-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-xl-5,
    .gx-xl-5 {
        --bs-gutter-x: 3rem;
    }
    .g-xl-5,
    .gy-xl-5 {
        --bs-gutter-y: 3rem;
    }
}
@media (min-width: 1400px) {
    .col-xxl {
        flex: 1 0 0%;
    }
    .row-cols-xxl-auto > * {
        flex: 0 0 auto;
        width: auto;
    }
    .row-cols-xxl-1 > * {
        flex: 0 0 auto;
        width: 100%;
    }
    .row-cols-xxl-2 > * {
        flex: 0 0 auto;
        width: 50%;
    }
    .row-cols-xxl-3 > * {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }
    .row-cols-xxl-4 > * {
        flex: 0 0 auto;
        width: 25%;
    }
    .row-cols-xxl-5 > * {
        flex: 0 0 auto;
        width: 20%;
    }
    .row-cols-xxl-6 > * {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }
    .col-xxl-auto {
        flex: 0 0 auto;
        width: auto;
    }
    .col-xxl-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }
    .col-xxl-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }
    .col-xxl-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-xxl-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
    .col-xxl-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
    .col-xxl-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-xxl-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }
    .col-xxl-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }
    .col-xxl-9 {
        flex: 0 0 auto;
        width: 75%;
    }
    .col-xxl-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }
    .col-xxl-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }
    .col-xxl-12 {
        flex: 0 0 auto;
        width: 100%;
    }
    .offset-xxl-0 {
        margin-left: 0;
    }
    .offset-xxl-1 {
        margin-left: 8.33333333%;
    }
    .offset-xxl-2 {
        margin-left: 16.66666667%;
    }
    .offset-xxl-3 {
        margin-left: 25%;
    }
    .offset-xxl-4 {
        margin-left: 33.33333333%;
    }
    .offset-xxl-5 {
        margin-left: 41.66666667%;
    }
    .offset-xxl-6 {
        margin-left: 50%;
    }
    .offset-xxl-7 {
        margin-left: 58.33333333%;
    }
    .offset-xxl-8 {
        margin-left: 66.66666667%;
    }
    .offset-xxl-9 {
        margin-left: 75%;
    }
    .offset-xxl-10 {
        margin-left: 83.33333333%;
    }
    .offset-xxl-11 {
        margin-left: 91.66666667%;
    }
    .g-xxl-0,
    .gx-xxl-0 {
        --bs-gutter-x: 0;
    }
    .g-xxl-0,
    .gy-xxl-0 {
        --bs-gutter-y: 0;
    }
    .g-xxl-1,
    .gx-xxl-1 {
        --bs-gutter-x: 0.25rem;
    }
    .g-xxl-1,
    .gy-xxl-1 {
        --bs-gutter-y: 0.25rem;
    }
    .g-xxl-2,
    .gx-xxl-2 {
        --bs-gutter-x: 0.5rem;
    }
    .g-xxl-2,
    .gy-xxl-2 {
        --bs-gutter-y: 0.5rem;
    }
    .g-xxl-3,
    .gx-xxl-3 {
        --bs-gutter-x: 1rem;
    }
    .g-xxl-3,
    .gy-xxl-3 {
        --bs-gutter-y: 1rem;
    }
    .g-xxl-4,
    .gx-xxl-4 {
        --bs-gutter-x: 1.5rem;
    }
    .g-xxl-4,
    .gy-xxl-4 {
        --bs-gutter-y: 1.5rem;
    }
    .g-xxl-5,
    .gx-xxl-5 {
        --bs-gutter-x: 3rem;
    }
    .g-xxl-5,
    .gy-xxl-5 {
        --bs-gutter-y: 3rem;
    }
}
.table,
.datatable-table {
    --bs-table-color: var(--bs-body-color);
    --bs-table-bg: transparent;
    --bs-table-border-color: var(--bs-border-color);
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: var(--bs-body-color);
    --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
    --bs-table-active-color: var(--bs-body-color);
    --bs-table-active-bg: rgba(0, 0, 0, 0.1);
    --bs-table-hover-color: var(--bs-body-color);
    --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
    width: 100%;
    margin-bottom: 1rem;
    color: var(--bs-table-color);
    vertical-align: top;
    border-color: var(--bs-table-border-color);
}
.table > :not(caption) > * > *,
.datatable-table > :not(caption) > * > * {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody,
.datatable-table > tbody {
    vertical-align: inherit;
}
.table > thead,
.datatable-table > thead {
    vertical-align: bottom;
}

.table-group-divider {
    border-top: 2px solid currentcolor;
}

.caption-top {
    caption-side: top;
}

.table-sm > :not(caption) > * > * {
    padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > *,
.datatable-table > :not(caption) > * {
    border-width: 1px 0;
}
.table-bordered > :not(caption) > * > *,
.datatable-table > :not(caption) > * > * {
    border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
    border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
    border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
    --bs-table-accent-bg: var(--bs-table-striped-bg);
    color: var(--bs-table-striped-color);
}

.table-striped-columns > :not(caption) > tr > :nth-child(even) {
    --bs-table-accent-bg: var(--bs-table-striped-bg);
    color: var(--bs-table-striped-color);
}

.table-active {
    --bs-table-accent-bg: var(--bs-table-active-bg);
    color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > *,
.datatable-table > tbody > tr:hover > * {
    --bs-table-accent-bg: var(--bs-table-hover-bg);
    color: var(--bs-table-hover-color);
}

.table-primary {
    --bs-table-color: #000;
    --bs-table-bg: #cfe2ff;
    --bs-table-border-color: #bacbe6;
    --bs-table-striped-bg: #c5d7f2;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #bacbe6;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #bfd1ec;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-secondary {
    --bs-table-color: #000;
    --bs-table-bg: #e2e3e5;
    --bs-table-border-color: #cbccce;
    --bs-table-striped-bg: #d7d8da;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #cbccce;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #d1d2d4;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-success {
    --bs-table-color: #000;
    --bs-table-bg: #d1e7dd;
    --bs-table-border-color: #bcd0c7;
    --bs-table-striped-bg: #c7dbd2;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #bcd0c7;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #c1d6cc;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-info {
    --bs-table-color: #000;
    --bs-table-bg: #cff4fc;
    --bs-table-border-color: #badce3;
    --bs-table-striped-bg: #c5e8ef;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #badce3;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #bfe2e9;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-warning {
    --bs-table-color: #000;
    --bs-table-bg: #fff3cd;
    --bs-table-border-color: #e6dbb9;
    --bs-table-striped-bg: #f2e7c3;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #e6dbb9;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #ece1be;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-danger {
    --bs-table-color: #000;
    --bs-table-bg: #f8d7da;
    --bs-table-border-color: #dfc2c4;
    --bs-table-striped-bg: #eccccf;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #dfc2c4;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #e5c7ca;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-light {
    --bs-table-color: #000;
    --bs-table-bg: #f8f9fa;
    --bs-table-border-color: #dfe0e1;
    --bs-table-striped-bg: #ecedee;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #dfe0e1;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #e5e6e7;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-dark {
    --bs-table-color: #fff;
    --bs-table-bg: #212529;
    --bs-table-border-color: #373b3e;
    --bs-table-striped-bg: #2c3034;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}

.table-responsive,
.datatable-wrapper .datatable-container {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 767.98px) {
    .table-responsive-md {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 991.98px) {
    .table-responsive-lg {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 1199.98px) {
    .table-responsive-xl {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
@media (max-width: 1399.98px) {
    .table-responsive-xxl {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
}
.form-label {
    margin-bottom: 0.5rem;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.25rem;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
}

.form-text {
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #6c757d;
}

.form-control,
.datatable-input {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-control,
    .datatable-input {
        transition: none;
    }
}
.form-control[type='file'],
[type='file'].datatable-input {
    overflow: hidden;
}
.form-control[type='file']:not(:disabled):not([readonly]),
[type='file'].datatable-input:not(:disabled):not([readonly]) {
    cursor: pointer;
}
.form-control:focus,
.datatable-input:focus {
    color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-control::-webkit-date-and-time-value,
.datatable-input::-webkit-date-and-time-value {
    height: 1.5em;
}
.form-control::-moz-placeholder,
.datatable-input::-moz-placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control::placeholder,
.datatable-input::placeholder {
    color: #6c757d;
    opacity: 1;
}
.form-control:disabled,
.datatable-input:disabled {
    background-color: #e9ecef;
    opacity: 1;
}
.form-control::file-selector-button,
.datatable-input::file-selector-button {
    padding: 0.375rem 0.75rem;
    margin: -0.375rem -0.75rem;
    -webkit-margin-end: 0.75rem;
    margin-inline-end: 0.75rem;
    color: #212529;
    background-color: #e9ecef;
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: 1px;
    border-radius: 0;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-control::file-selector-button,
    .datatable-input::file-selector-button {
        transition: none;
    }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button,
.datatable-input:hover:not(:disabled):not([readonly])::file-selector-button {
    background-color: #dde0e3;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding: 0.375rem 0;
    margin-bottom: 0;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}
.form-control-plaintext:focus {
    outline: 0;
}
.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    min-height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 0.25rem;
}
.form-control-sm::file-selector-button {
    padding: 0.25rem 0.5rem;
    margin: -0.25rem -0.5rem;
    -webkit-margin-end: 0.5rem;
    margin-inline-end: 0.5rem;
}

.form-control-lg {
    min-height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    border-radius: 0.5rem;
}
.form-control-lg::file-selector-button {
    padding: 0.5rem 1rem;
    margin: -0.5rem -1rem;
    -webkit-margin-end: 1rem;
    margin-inline-end: 1rem;
}

textarea.form-control,
textarea.datatable-input {
    min-height: calc(1.5em + 0.75rem + 2px);
}
textarea.form-control-sm {
    min-height: calc(1.5em + 0.5rem + 2px);
}
textarea.form-control-lg {
    min-height: calc(1.5em + 1rem + 2px);
}

.form-control-color {
    width: 3rem;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem;
}
.form-control-color:not(:disabled):not([readonly]) {
    cursor: pointer;
}
.form-control-color::-moz-color-swatch {
    border: 0 !important;
    border-radius: 0.375rem;
}
.form-control-color::-webkit-color-swatch {
    border-radius: 0.375rem;
}
.form-control-color.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
}
.form-control-color.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
}

.form-select,
.datatable-selector {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .form-select,
    .datatable-selector {
        transition: none;
    }
}
.form-select:focus,
.datatable-selector:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-select[multiple],
[multiple].datatable-selector,
.form-select[size]:not([size='1']),
[size].datatable-selector:not([size='1']) {
    padding-right: 0.75rem;
    background-image: none;
}
.form-select:disabled,
.datatable-selector:disabled {
    background-color: #e9ecef;
}
.form-select:-moz-focusring,
.datatable-selector:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #212529;
}

.form-select-sm {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem;
    border-radius: 0.25rem;
}

.form-select-lg {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1rem;
    font-size: 1.25rem;
    border-radius: 0.5rem;
}

.form-check {
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5em;
    margin-bottom: 0.125rem;
}
.form-check .form-check-input {
    float: left;
    margin-left: -1.5em;
}

.form-check-reverse {
    padding-right: 1.5em;
    padding-left: 0;
    text-align: right;
}
.form-check-reverse .form-check-input {
    float: right;
    margin-right: -1.5em;
    margin-left: 0;
}

.form-check-input {
    width: 1em;
    height: 1em;
    margin-top: 0.25em;
    vertical-align: top;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1px solid rgba(0, 0, 0, 0.25);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}
.form-check-input[type='checkbox'] {
    border-radius: 0.25em;
}
.form-check-input[type='radio'] {
    border-radius: 50%;
}
.form-check-input:active {
    filter: brightness(90%);
}
.form-check-input:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-check-input:checked {
    background-color: #0d6efd;
    border-color: #0d6efd;
}
.form-check-input:checked[type='checkbox'] {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type='radio'] {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type='checkbox']:indeterminate {
    background-color: #0d6efd;
    border-color: #0d6efd;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
    pointer-events: none;
    filter: none;
    opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label,
.form-check-input:disabled ~ .form-check-label {
    cursor: default;
    opacity: 0.5;
}

.form-switch {
    padding-left: 2.5em;
}
.form-switch .form-check-input {
    width: 2em;
    margin-left: -2.5em;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
    background-position: left center;
    border-radius: 2em;
    transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-switch .form-check-input {
        transition: none;
    }
}
.form-switch .form-check-input:focus {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
    background-position: right center;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
    padding-right: 2.5em;
    padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
    margin-right: -2.5em;
    margin-left: 0;
}

.form-check-inline {
    display: inline-block;
    margin-right: 1rem;
}

.btn-check {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}
.btn-check[disabled] + .btn,
.btn-check:disabled + .btn {
    pointer-events: none;
    filter: none;
    opacity: 0.65;
}

.form-range {
    width: 100%;
    height: 1.5rem;
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.form-range:focus {
    outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
.form-range::-moz-focus-outer {
    border: 0;
}
.form-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #0d6efd;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .form-range::-webkit-slider-thumb {
        -webkit-transition: none;
        transition: none;
    }
}
.form-range::-webkit-slider-thumb:active {
    background-color: #b6d4fe;
}
.form-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}
.form-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #0d6efd;
    border: 0;
    border-radius: 1rem;
    -moz-transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .form-range::-moz-range-thumb {
        -moz-transition: none;
        transition: none;
    }
}
.form-range::-moz-range-thumb:active {
    background-color: #b6d4fe;
}
.form-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}
.form-range:disabled {
    pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd;
}
.form-range:disabled::-moz-range-thumb {
    background-color: #adb5bd;
}

.form-floating {
    position: relative;
}
.form-floating > .form-control,
.form-floating > .datatable-input,
.form-floating > .form-control-plaintext,
.form-floating > .form-select,
.form-floating > .datatable-selector {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
}
.form-floating > label {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 1rem 0.75rem;
    overflow: hidden;
    text-align: start;
    text-overflow: ellipsis;
    white-space: nowrap;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-floating > label {
        transition: none;
    }
}
.form-floating > .form-control,
.form-floating > .datatable-input,
.form-floating > .form-control-plaintext {
    padding: 1rem 0.75rem;
}
.form-floating > .form-control::-moz-placeholder,
.form-floating > .datatable-input::-moz-placeholder,
.form-floating > .form-control-plaintext::-moz-placeholder {
    color: transparent;
}
.form-floating > .form-control::placeholder,
.form-floating > .datatable-input::placeholder,
.form-floating > .form-control-plaintext::placeholder {
    color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown),
.form-floating > .datatable-input:not(:-moz-placeholder-shown),
.form-floating > .form-control-plaintext:not(:-moz-placeholder-shown) {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus,
.form-floating > .datatable-input:focus,
.form-floating > .form-control:not(:placeholder-shown),
.form-floating > .datatable-input:not(:placeholder-shown),
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown) {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill,
.form-floating > .datatable-input:-webkit-autofill,
.form-floating > .form-control-plaintext:-webkit-autofill {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-select,
.form-floating > .datatable-selector {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label,
.form-floating > .datatable-input:not(:-moz-placeholder-shown) ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .datatable-input:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .datatable-input:not(:placeholder-shown) ~ label,
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-select ~ label,
.form-floating > .datatable-selector ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label,
.form-floating > .datatable-input:-webkit-autofill ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
    border-width: 1px 0;
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}
.input-group > .form-control,
.input-group > .datatable-input,
.input-group > .form-select,
.input-group > .datatable-selector,
.input-group > .form-floating {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .datatable-input:focus,
.input-group > .form-select:focus,
.input-group > .datatable-selector:focus,
.input-group > .form-floating:focus-within {
    z-index: 5;
}
.input-group .btn {
    position: relative;
    z-index: 2;
}
.input-group .btn:focus {
    z-index: 5;
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
}

.input-group-lg > .form-control,
.input-group-lg > .datatable-input,
.input-group-lg > .form-select,
.input-group-lg > .datatable-selector,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    border-radius: 0.5rem;
}

.input-group-sm > .form-control,
.input-group-sm > .datatable-input,
.input-group-sm > .form-select,
.input-group-sm > .datatable-selector,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 0.25rem;
}

.input-group-lg > .form-select,
.input-group-lg > .datatable-selector,
.input-group-sm > .form-select,
.input-group-sm > .datatable-selector {
    padding-right: 3rem;
}

.input-group:not(.has-validation)
    > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(
        .form-floating
    ),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3),
.input-group:not(.has-validation)
    > .form-floating:not(:last-child)
    > .form-control,
.input-group:not(.has-validation)
    > .form-floating:not(:last-child)
    > .datatable-input,
.input-group:not(.has-validation)
    > .form-floating:not(:last-child)
    > .form-select,
.input-group:not(.has-validation)
    > .form-floating:not(:last-child)
    > .datatable-selector {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group.has-validation
    > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu):not(
        .form-floating
    ),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4),
.input-group.has-validation
    > .form-floating:nth-last-child(n + 3)
    > .form-control,
.input-group.has-validation
    > .form-floating:nth-last-child(n + 3)
    > .datatable-input,
.input-group.has-validation
    > .form-floating:nth-last-child(n + 3)
    > .form-select,
.input-group.has-validation
    > .form-floating:nth-last-child(n + 3)
    > .datatable-selector {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group
    > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(
        .valid-feedback
    ):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: -1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group > .form-floating:not(:first-child) > .form-control,
.input-group > .form-floating:not(:first-child) > .datatable-input,
.input-group > .form-floating:not(:first-child) > .form-select,
.input-group > .form-floating:not(:first-child) > .datatable-selector {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #198754;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    color: #fff;
    background-color: rgba(25, 135, 84, 0.9);
    border-radius: 0.375rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
    display: block;
}

.was-validated .form-control:valid,
.was-validated .datatable-input:valid,
.form-control.is-valid,
.is-valid.datatable-input {
    border-color: #198754;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:valid:focus,
.was-validated .datatable-input:valid:focus,
.form-control.is-valid:focus,
.is-valid.datatable-input:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:valid,
.was-validated textarea.datatable-input:valid,
textarea.form-control.is-valid,
textarea.is-valid.datatable-input {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right
        calc(0.375em + 0.1875rem);
}

.was-validated .form-select:valid,
.was-validated .datatable-selector:valid,
.form-select.is-valid,
.is-valid.datatable-selector {
    border-color: #198754;
}
.was-validated .form-select:valid:not([multiple]):not([size]),
.was-validated .datatable-selector:valid:not([multiple]):not([size]),
.was-validated .form-select:valid:not([multiple])[size='1'],
.was-validated .datatable-selector:valid:not([multiple])[size='1'],
.form-select.is-valid:not([multiple]):not([size]),
.is-valid.datatable-selector:not([multiple]):not([size]),
.form-select.is-valid:not([multiple])[size='1'],
.is-valid.datatable-selector:not([multiple])[size='1'] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"),
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-select:valid:focus,
.was-validated .datatable-selector:valid:focus,
.form-select.is-valid:focus,
.is-valid.datatable-selector:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated .form-control-color:valid,
.form-control-color.is-valid {
    width: calc(3rem + calc(1.5em + 0.75rem));
}

.was-validated .form-check-input:valid,
.form-check-input.is-valid {
    border-color: #198754;
}
.was-validated .form-check-input:valid:checked,
.form-check-input.is-valid:checked {
    background-color: #198754;
}
.was-validated .form-check-input:valid:focus,
.form-check-input.is-valid:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label,
.form-check-input.is-valid ~ .form-check-label {
    color: #198754;
}

.form-check-inline .form-check-input ~ .valid-feedback {
    margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):valid,
.was-validated .input-group > .datatable-input:not(:focus):valid,
.input-group > .form-control:not(:focus).is-valid,
.input-group > .datatable-input:not(:focus).is-valid,
.was-validated .input-group > .form-select:not(:focus):valid,
.was-validated .input-group > .datatable-selector:not(:focus):valid,
.input-group > .form-select:not(:focus).is-valid,
.input-group > .datatable-selector:not(:focus).is-valid,
.was-validated .input-group > .form-floating:not(:focus-within):valid,
.input-group > .form-floating:not(:focus-within).is-valid {
    z-index: 3;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #dc3545;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    color: #fff;
    background-color: rgba(220, 53, 69, 0.9);
    border-radius: 0.375rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
    display: block;
}

.was-validated .form-control:invalid,
.was-validated .datatable-input:invalid,
.form-control.is-invalid,
.is-invalid.datatable-input {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:invalid:focus,
.was-validated .datatable-input:invalid:focus,
.form-control.is-invalid:focus,
.is-invalid.datatable-input:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid,
.was-validated textarea.datatable-input:invalid,
textarea.form-control.is-invalid,
textarea.is-invalid.datatable-input {
    padding-right: calc(1.5em + 0.75rem);
    background-position: top calc(0.375em + 0.1875rem) right
        calc(0.375em + 0.1875rem);
}

.was-validated .form-select:invalid,
.was-validated .datatable-selector:invalid,
.form-select.is-invalid,
.is-invalid.datatable-selector {
    border-color: #dc3545;
}
.was-validated .form-select:invalid:not([multiple]):not([size]),
.was-validated .datatable-selector:invalid:not([multiple]):not([size]),
.was-validated .form-select:invalid:not([multiple])[size='1'],
.was-validated .datatable-selector:invalid:not([multiple])[size='1'],
.form-select.is-invalid:not([multiple]):not([size]),
.is-invalid.datatable-selector:not([multiple]):not([size]),
.form-select.is-invalid:not([multiple])[size='1'],
.is-invalid.datatable-selector:not([multiple])[size='1'] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"),
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-select:invalid:focus,
.was-validated .datatable-selector:invalid:focus,
.form-select.is-invalid:focus,
.is-invalid.datatable-selector:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-control-color:invalid,
.form-control-color.is-invalid {
    width: calc(3rem + calc(1.5em + 0.75rem));
}

.was-validated .form-check-input:invalid,
.form-check-input.is-invalid {
    border-color: #dc3545;
}
.was-validated .form-check-input:invalid:checked,
.form-check-input.is-invalid:checked {
    background-color: #dc3545;
}
.was-validated .form-check-input:invalid:focus,
.form-check-input.is-invalid:focus {
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label,
.form-check-input.is-invalid ~ .form-check-label {
    color: #dc3545;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
    margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):invalid,
.was-validated .input-group > .datatable-input:not(:focus):invalid,
.input-group > .form-control:not(:focus).is-invalid,
.input-group > .datatable-input:not(:focus).is-invalid,
.was-validated .input-group > .form-select:not(:focus):invalid,
.was-validated .input-group > .datatable-selector:not(:focus):invalid,
.input-group > .form-select:not(:focus).is-invalid,
.input-group > .datatable-selector:not(:focus).is-invalid,
.was-validated .input-group > .form-floating:not(:focus-within):invalid,
.input-group > .form-floating:not(:focus-within).is-invalid {
    z-index: 4;
}

.btn {
    --bs-btn-padding-x: 0.75rem;
    --bs-btn-padding-y: 0.375rem;
    --bs-btn-font-family: ;
    --bs-btn-font-size: 1rem;
    --bs-btn-font-weight: 400;
    --bs-btn-line-height: 1.5;
    --bs-btn-color: #212529;
    --bs-btn-bg: transparent;
    --bs-btn-border-width: 1px;
    --bs-btn-border-color: transparent;
    --bs-btn-border-radius: 0.375rem;
    --bs-btn-hover-border-color: transparent;
    --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),
        0 1px 1px rgba(0, 0, 0, 0.075);
    --bs-btn-disabled-opacity: 0.65;
    --bs-btn-focus-box-shadow: 0 0 0 0.25rem
        rgba(var(--bs-btn-focus-shadow-rgb), 0.5);
    display: inline-block;
    padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
    font-family: var(--bs-btn-font-family);
    font-size: var(--bs-btn-font-size);
    font-weight: var(--bs-btn-font-weight);
    line-height: var(--bs-btn-line-height);
    color: var(--bs-btn-color);
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
    border-radius: var(--bs-btn-border-radius);
    background-color: var(--bs-btn-bg);
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}
.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);
}
.btn-check + .btn:hover {
    color: var(--bs-btn-color);
    background-color: var(--bs-btn-bg);
    border-color: var(--bs-btn-border-color);
}
.btn:focus-visible {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);
    outline: 0;
    box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:focus-visible + .btn {
    border-color: var(--bs-btn-hover-border-color);
    outline: 0;
    box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:checked + .btn,
:not(.btn-check) + .btn:active,
.btn:first-child:active,
.btn.active,
.btn.show {
    color: var(--bs-btn-active-color);
    background-color: var(--bs-btn-active-bg);
    border-color: var(--bs-btn-active-border-color);
}
.btn-check:checked + .btn:focus-visible,
:not(.btn-check) + .btn:active:focus-visible,
.btn:first-child:active:focus-visible,
.btn.active:focus-visible,
.btn.show:focus-visible {
    box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn:disabled,
.btn.disabled,
fieldset:disabled .btn {
    color: var(--bs-btn-disabled-color);
    pointer-events: none;
    background-color: var(--bs-btn-disabled-bg);
    border-color: var(--bs-btn-disabled-border-color);
    opacity: var(--bs-btn-disabled-opacity);
}

.btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #0d6efd;
    --bs-btn-border-color: #0d6efd;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0b5ed7;
    --bs-btn-hover-border-color: #0a58ca;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #0a53be;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0d6efd;
    --bs-btn-disabled-border-color: #0d6efd;
}

.btn-secondary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #6c757d;
    --bs-btn-border-color: #6c757d;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #5c636a;
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130, 138, 145;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
}

.btn-success {
    --bs-btn-color: #fff;
    --bs-btn-bg: #198754;
    --bs-btn-border-color: #198754;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #157347;
    --bs-btn-hover-border-color: #146c43;
    --bs-btn-focus-shadow-rgb: 60, 153, 110;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #146c43;
    --bs-btn-active-border-color: #13653f;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #198754;
    --bs-btn-disabled-border-color: #198754;
}

.btn-info {
    --bs-btn-color: #000;
    --bs-btn-bg: #0dcaf0;
    --bs-btn-border-color: #0dcaf0;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #31d2f2;
    --bs-btn-hover-border-color: #25cff2;
    --bs-btn-focus-shadow-rgb: 11, 172, 204;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #3dd5f3;
    --bs-btn-active-border-color: #25cff2;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #000;
    --bs-btn-disabled-bg: #0dcaf0;
    --bs-btn-disabled-border-color: #0dcaf0;
}

.btn-warning {
    --bs-btn-color: #000;
    --bs-btn-bg: #ffc107;
    --bs-btn-border-color: #ffc107;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #ffca2c;
    --bs-btn-hover-border-color: #ffc720;
    --bs-btn-focus-shadow-rgb: 217, 164, 6;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #ffcd39;
    --bs-btn-active-border-color: #ffc720;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #000;
    --bs-btn-disabled-bg: #ffc107;
    --bs-btn-disabled-border-color: #ffc107;
}

.btn-danger {
    --bs-btn-color: #fff;
    --bs-btn-bg: #dc3545;
    --bs-btn-border-color: #dc3545;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #bb2d3b;
    --bs-btn-hover-border-color: #b02a37;
    --bs-btn-focus-shadow-rgb: 225, 83, 97;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #b02a37;
    --bs-btn-active-border-color: #a52834;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #dc3545;
    --bs-btn-disabled-border-color: #dc3545;
}

.btn-light {
    --bs-btn-color: #000;
    --bs-btn-bg: #f8f9fa;
    --bs-btn-border-color: #f8f9fa;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #d3d4d5;
    --bs-btn-hover-border-color: #c6c7c8;
    --bs-btn-focus-shadow-rgb: 211, 212, 213;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #c6c7c8;
    --bs-btn-active-border-color: #babbbc;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #000;
    --bs-btn-disabled-bg: #f8f9fa;
    --bs-btn-disabled-border-color: #f8f9fa;
}

.btn-dark {
    --bs-btn-color: #fff;
    --bs-btn-bg: #212529;
    --bs-btn-border-color: #212529;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #424649;
    --bs-btn-hover-border-color: #373b3e;
    --bs-btn-focus-shadow-rgb: 66, 70, 73;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #4d5154;
    --bs-btn-active-border-color: #373b3e;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #212529;
    --bs-btn-disabled-border-color: #212529;
}

.btn-outline-primary {
    --bs-btn-color: #0d6efd;
    --bs-btn-border-color: #0d6efd;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0d6efd;
    --bs-btn-hover-border-color: #0d6efd;
    --bs-btn-focus-shadow-rgb: 13, 110, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0d6efd;
    --bs-btn-active-border-color: #0d6efd;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #0d6efd;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #0d6efd;
    --bs-gradient: none;
}

.btn-outline-secondary {
    --bs-btn-color: #6c757d;
    --bs-btn-border-color: #6c757d;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #6c757d;
    --bs-btn-hover-border-color: #6c757d;
    --bs-btn-focus-shadow-rgb: 108, 117, 125;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #6c757d;
    --bs-btn-active-border-color: #6c757d;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #6c757d;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #6c757d;
    --bs-gradient: none;
}

.btn-outline-success {
    --bs-btn-color: #198754;
    --bs-btn-border-color: #198754;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #198754;
    --bs-btn-hover-border-color: #198754;
    --bs-btn-focus-shadow-rgb: 25, 135, 84;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #198754;
    --bs-btn-active-border-color: #198754;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #198754;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #198754;
    --bs-gradient: none;
}

.btn-outline-info {
    --bs-btn-color: #0dcaf0;
    --bs-btn-border-color: #0dcaf0;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #0dcaf0;
    --bs-btn-hover-border-color: #0dcaf0;
    --bs-btn-focus-shadow-rgb: 13, 202, 240;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #0dcaf0;
    --bs-btn-active-border-color: #0dcaf0;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #0dcaf0;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #0dcaf0;
    --bs-gradient: none;
}

.btn-outline-warning {
    --bs-btn-color: #ffc107;
    --bs-btn-border-color: #ffc107;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #ffc107;
    --bs-btn-hover-border-color: #ffc107;
    --bs-btn-focus-shadow-rgb: 255, 193, 7;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #ffc107;
    --bs-btn-active-border-color: #ffc107;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #ffc107;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #ffc107;
    --bs-gradient: none;
}

.btn-outline-danger {
    --bs-btn-color: #dc3545;
    --bs-btn-border-color: #dc3545;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #dc3545;
    --bs-btn-hover-border-color: #dc3545;
    --bs-btn-focus-shadow-rgb: 220, 53, 69;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #dc3545;
    --bs-btn-active-border-color: #dc3545;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #dc3545;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #dc3545;
    --bs-gradient: none;
}

.btn-outline-light {
    --bs-btn-color: #f8f9fa;
    --bs-btn-border-color: #f8f9fa;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #f8f9fa;
    --bs-btn-hover-border-color: #f8f9fa;
    --bs-btn-focus-shadow-rgb: 248, 249, 250;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #f8f9fa;
    --bs-btn-active-border-color: #f8f9fa;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #f8f9fa;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #f8f9fa;
    --bs-gradient: none;
}

.btn-outline-dark {
    --bs-btn-color: #212529;
    --bs-btn-border-color: #212529;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #212529;
    --bs-btn-hover-border-color: #212529;
    --bs-btn-focus-shadow-rgb: 33, 37, 41;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #212529;
    --bs-btn-active-border-color: #212529;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #212529;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #212529;
    --bs-gradient: none;
}

.btn-link {
    --bs-btn-font-weight: 400;
    --bs-btn-color: var(--bs-link-color);
    --bs-btn-bg: transparent;
    --bs-btn-border-color: transparent;
    --bs-btn-hover-color: var(--bs-link-hover-color);
    --bs-btn-hover-border-color: transparent;
    --bs-btn-active-color: var(--bs-link-hover-color);
    --bs-btn-active-border-color: transparent;
    --bs-btn-disabled-color: #6c757d;
    --bs-btn-disabled-border-color: transparent;
    --bs-btn-box-shadow: none;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    text-decoration: underline;
}
.btn-link:focus-visible {
    color: var(--bs-btn-color);
}
.btn-link:hover {
    color: var(--bs-btn-hover-color);
}

.btn-lg,
.btn-group-lg > .btn {
    --bs-btn-padding-y: 0.5rem;
    --bs-btn-padding-x: 1rem;
    --bs-btn-font-size: 1.25rem;
    --bs-btn-border-radius: 0.5rem;
}

.btn-sm,
.btn-group-sm > .btn {
    --bs-btn-padding-y: 0.25rem;
    --bs-btn-padding-x: 0.5rem;
    --bs-btn-font-size: 0.875rem;
    --bs-btn-border-radius: 0.25rem;
}

.fade {
    transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}
.fade:not(.show) {
    opacity: 0;
}

.collapse:not(.show) {
    display: none;
}

.collapsing {
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}
.collapsing.collapse-horizontal {
    width: 0;
    height: auto;
    transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
    .collapsing.collapse-horizontal {
        transition: none;
    }
}

.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
    position: relative;
}

.dropdown-toggle {
    white-space: nowrap;
}
.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    --bs-dropdown-zindex: 1000;
    --bs-dropdown-min-width: 10rem;
    --bs-dropdown-padding-x: 0;
    --bs-dropdown-padding-y: 0.5rem;
    --bs-dropdown-spacer: 0.125rem;
    --bs-dropdown-font-size: 1rem;
    --bs-dropdown-color: #212529;
    --bs-dropdown-bg: #fff;
    --bs-dropdown-border-color: var(--bs-border-color-translucent);
    --bs-dropdown-border-radius: 0.375rem;
    --bs-dropdown-border-width: 1px;
    --bs-dropdown-inner-border-radius: calc(0.375rem - 1px);
    --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
    --bs-dropdown-divider-margin-y: 0.5rem;
    --bs-dropdown-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    --bs-dropdown-link-color: #212529;
    --bs-dropdown-link-hover-color: #1e2125;
    --bs-dropdown-link-hover-bg: #e9ecef;
    --bs-dropdown-link-active-color: #fff;
    --bs-dropdown-link-active-bg: #0d6efd;
    --bs-dropdown-link-disabled-color: #adb5bd;
    --bs-dropdown-item-padding-x: 1rem;
    --bs-dropdown-item-padding-y: 0.25rem;
    --bs-dropdown-header-color: #6c757d;
    --bs-dropdown-header-padding-x: 1rem;
    --bs-dropdown-header-padding-y: 0.5rem;
    position: absolute;
    z-index: var(--bs-dropdown-zindex);
    display: none;
    min-width: var(--bs-dropdown-min-width);
    padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
    margin: 0;
    font-size: var(--bs-dropdown-font-size);
    color: var(--bs-dropdown-color);
    text-align: left;
    list-style: none;
    background-color: var(--bs-dropdown-bg);
    background-clip: padding-box;
    border: var(--bs-dropdown-border-width) solid
        var(--bs-dropdown-border-color);
    border-radius: var(--bs-dropdown-border-radius);
}
.dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: var(--bs-dropdown-spacer);
}

.dropdown-menu-start {
    --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
    right: auto;
    left: 0;
}

.dropdown-menu-end {
    --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-start {
        --bs-position: start;
    }
    .dropdown-menu-sm-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-sm-end {
        --bs-position: end;
    }
    .dropdown-menu-sm-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 768px) {
    .dropdown-menu-md-start {
        --bs-position: start;
    }
    .dropdown-menu-md-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-md-end {
        --bs-position: end;
    }
    .dropdown-menu-md-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 992px) {
    .dropdown-menu-lg-start {
        --bs-position: start;
    }
    .dropdown-menu-lg-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-lg-end {
        --bs-position: end;
    }
    .dropdown-menu-lg-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 1200px) {
    .dropdown-menu-xl-start {
        --bs-position: start;
    }
    .dropdown-menu-xl-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-xl-end {
        --bs-position: end;
    }
    .dropdown-menu-xl-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
@media (min-width: 1400px) {
    .dropdown-menu-xxl-start {
        --bs-position: start;
    }
    .dropdown-menu-xxl-start[data-bs-popper] {
        right: auto;
        left: 0;
    }
    .dropdown-menu-xxl-end {
        --bs-position: end;
    }
    .dropdown-menu-xxl-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}
.dropup .dropdown-menu[data-bs-popper] {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: var(--bs-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: var(--bs-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropend .dropdown-toggle::after {
    vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: var(--bs-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: '';
}
.dropstart .dropdown-toggle::after {
    display: none;
}
.dropstart .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: '';
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropstart .dropdown-toggle::before {
    vertical-align: 0;
}

.dropdown-divider {
    height: 0;
    margin: var(--bs-dropdown-divider-margin-y) 0;
    overflow: hidden;
    border-top: 1px solid var(--bs-dropdown-divider-bg);
    opacity: 1;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    clear: both;
    font-weight: 400;
    color: var(--bs-dropdown-link-color);
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
.dropdown-item:hover,
.dropdown-item:focus {
    color: var(--bs-dropdown-link-hover-color);
    background-color: var(--bs-dropdown-link-hover-bg);
}
.dropdown-item.active,
.dropdown-item:active {
    color: var(--bs-dropdown-link-active-color);
    text-decoration: none;
    background-color: var(--bs-dropdown-link-active-bg);
}
.dropdown-item.disabled,
.dropdown-item:disabled {
    color: var(--bs-dropdown-link-disabled-color);
    pointer-events: none;
    background-color: transparent;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: var(--bs-dropdown-header-padding-y)
        var(--bs-dropdown-header-padding-x);
    margin-bottom: 0;
    font-size: 0.875rem;
    color: var(--bs-dropdown-header-color);
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    color: var(--bs-dropdown-link-color);
}

.dropdown-menu-dark {
    --bs-dropdown-color: #dee2e6;
    --bs-dropdown-bg: #343a40;
    --bs-dropdown-border-color: var(--bs-border-color-translucent);
    --bs-dropdown-box-shadow: ;
    --bs-dropdown-link-color: #dee2e6;
    --bs-dropdown-link-hover-color: #fff;
    --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
    --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
    --bs-dropdown-link-active-color: #fff;
    --bs-dropdown-link-active-bg: #0d6efd;
    --bs-dropdown-link-disabled-color: #adb5bd;
    --bs-dropdown-header-color: #adb5bd;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
    position: relative;
    flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
    z-index: 1;
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.btn-toolbar .input-group {
    width: auto;
}

.btn-group {
    border-radius: 0.375rem;
}
.btn-group > :not(.btn-check:first-child) + .btn,
.btn-group > .btn-group:not(:first-child) {
    margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn.dropdown-toggle-split:first-child,
.btn-group > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n + 3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem;
}
.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropend .dropdown-toggle-split::after {
    margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm + .dropdown-toggle-split,
.btn-group-sm > .btn + .dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split,
.btn-group-lg > .btn + .dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
    width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav {
    --bs-nav-link-padding-x: 1rem;
    --bs-nav-link-padding-y: 0.5rem;
    --bs-nav-link-font-weight: ;
    --bs-nav-link-color: var(--bs-link-color);
    --bs-nav-link-hover-color: var(--bs-link-hover-color);
    --bs-nav-link-disabled-color: #6c757d;
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-link {
    display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: var(--bs-nav-link-font-weight);
    color: var(--bs-nav-link-color);
    text-decoration: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .nav-link {
        transition: none;
    }
}
.nav-link:hover,
.nav-link:focus {
    color: var(--bs-nav-link-hover-color);
}
.nav-link.disabled {
    color: var(--bs-nav-link-disabled-color);
    pointer-events: none;
    cursor: default;
}

.nav-tabs {
    --bs-nav-tabs-border-width: 1px;
    --bs-nav-tabs-border-color: #dee2e6;
    --bs-nav-tabs-border-radius: 0.375rem;
    --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
    --bs-nav-tabs-link-active-color: #495057;
    --bs-nav-tabs-link-active-bg: #fff;
    --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
    border-bottom: var(--bs-nav-tabs-border-width) solid
        var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-link {
    margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
    background: none;
    border: var(--bs-nav-tabs-border-width) solid transparent;
    border-top-left-radius: var(--bs-nav-tabs-border-radius);
    border-top-right-radius: var(--bs-nav-tabs-border-radius);
}
.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
    isolation: isolate;
    border-color: var(--bs-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.disabled,
.nav-tabs .nav-link:disabled {
    color: var(--bs-nav-link-disabled-color);
    background-color: transparent;
    border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
    color: var(--bs-nav-tabs-link-active-color);
    background-color: var(--bs-nav-tabs-link-active-bg);
    border-color: var(--bs-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu {
    margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav-pills {
    --bs-nav-pills-border-radius: 0.375rem;
    --bs-nav-pills-link-active-color: #fff;
    --bs-nav-pills-link-active-bg: #0d6efd;
}
.nav-pills .nav-link {
    background: none;
    border: 0;
    border-radius: var(--bs-nav-pills-border-radius);
}
.nav-pills .nav-link:disabled {
    color: var(--bs-nav-link-disabled-color);
    background-color: transparent;
    border-color: transparent;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: var(--bs-nav-pills-link-active-bg);
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
    width: 100%;
}

.tab-content > .tab-pane {
    display: none;
}
.tab-content > .active {
    display: block;
}

.navbar {
    --bs-navbar-padding-x: 0;
    --bs-navbar-padding-y: 0.5rem;
    --bs-navbar-color: rgba(0, 0, 0, 0.55);
    --bs-navbar-hover-color: rgba(0, 0, 0, 0.7);
    --bs-navbar-disabled-color: rgba(0, 0, 0, 0.3);
    --bs-navbar-active-color: rgba(0, 0, 0, 0.9);
    --bs-navbar-brand-padding-y: 0.3125rem;
    --bs-navbar-brand-margin-end: 1rem;
    --bs-navbar-brand-font-size: 1.25rem;
    --bs-navbar-brand-color: rgba(0, 0, 0, 0.9);
    --bs-navbar-brand-hover-color: rgba(0, 0, 0, 0.9);
    --bs-navbar-nav-link-padding-x: 0.5rem;
    --bs-navbar-toggler-padding-y: 0.25rem;
    --bs-navbar-toggler-padding-x: 0.75rem;
    --bs-navbar-toggler-font-size: 1.25rem;
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    --bs-navbar-toggler-border-color: rgba(0, 0, 0, 0.1);
    --bs-navbar-toggler-border-radius: 0.375rem;
    --bs-navbar-toggler-focus-width: 0.25rem;
    --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
}
.navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: var(--bs-navbar-brand-margin-end);
    font-size: var(--bs-navbar-brand-font-size);
    color: var(--bs-navbar-brand-color);
    text-decoration: none;
    white-space: nowrap;
}
.navbar-brand:hover,
.navbar-brand:focus {
    color: var(--bs-navbar-brand-hover-color);
}

.navbar-nav {
    --bs-nav-link-padding-x: 0;
    --bs-nav-link-padding-y: 0.5rem;
    --bs-nav-link-font-weight: ;
    --bs-nav-link-color: var(--bs-navbar-color);
    --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
    --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.navbar-nav .show > .nav-link,
.navbar-nav .nav-link.active {
    color: var(--bs-navbar-active-color);
}
.navbar-nav .dropdown-menu {
    position: static;
}

.navbar-text {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    color: var(--bs-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
    color: var(--bs-navbar-active-color);
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbar-toggler {
    padding: var(--bs-navbar-toggler-padding-y)
        var(--bs-navbar-toggler-padding-x);
    font-size: var(--bs-navbar-toggler-font-size);
    line-height: 1;
    color: var(--bs-navbar-color);
    background-color: transparent;
    border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
    border-radius: var(--bs-navbar-toggler-border-radius);
    transition: var(--bs-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
    .navbar-toggler {
        transition: none;
    }
}
.navbar-toggler:hover {
    text-decoration: none;
}
.navbar-toggler:focus {
    text-decoration: none;
    outline: 0;
    box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-image: var(--bs-navbar-toggler-icon-bg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
}

.navbar-nav-scroll {
    max-height: var(--bs-scroll-height, 75vh);
    overflow-y: auto;
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-sm .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-sm .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
    .navbar-expand-sm .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-sm .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-sm .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-md .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-md .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-md .navbar-toggler {
        display: none;
    }
    .navbar-expand-md .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-md .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-md .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-lg .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
    .navbar-expand-lg .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-lg .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-lg .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-xl .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-xl .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
    .navbar-expand-xl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-xl .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-xl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
@media (min-width: 1400px) {
    .navbar-expand-xxl {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-xxl .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    .navbar-expand-xxl .navbar-nav-scroll {
        overflow: visible;
    }
    .navbar-expand-xxl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-xxl .navbar-toggler {
        display: none;
    }
    .navbar-expand-xxl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
    }
    .navbar-expand-xxl .offcanvas .offcanvas-header {
        display: none;
    }
    .navbar-expand-xxl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
    }
}
.navbar-expand {
    flex-wrap: nowrap;
    justify-content: flex-start;
}
.navbar-expand .navbar-nav {
    flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
    overflow: visible;
}
.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
}
.navbar-expand .navbar-toggler {
    display: none;
}
.navbar-expand .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
    display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
}

.navbar-dark {
    --bs-navbar-color: rgba(255, 255, 255, 0.55);
    --bs-navbar-hover-color: rgba(255, 255, 255, 0.75);
    --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
    --bs-navbar-active-color: #fff;
    --bs-navbar-brand-color: #fff;
    --bs-navbar-brand-hover-color: #fff;
    --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.card {
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-border-width: 1px;
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: 0.375rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(0.375rem - 1px);
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(0, 0, 0, 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
}
.card > hr {
    margin-right: 0;
    margin-left: 0;
}
.card > .list-group {
    border-top: inherit;
    border-bottom: inherit;
}
.card > .list-group:first-child {
    border-top-width: 0;
    border-top-left-radius: var(--bs-card-inner-border-radius);
    border-top-right-radius: var(--bs-card-inner-border-radius);
}
.card > .list-group:last-child {
    border-bottom-width: 0;
    border-bottom-right-radius: var(--bs-card-inner-border-radius);
    border-bottom-left-radius: var(--bs-card-inner-border-radius);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
    border-top: 0;
}

.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
    color: var(--bs-card-color);
}

.card-title {
    margin-bottom: var(--bs-card-title-spacer-y);
}

.card-subtitle {
    margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link + .card-link {
    margin-left: var(--bs-card-spacer-x);
}

.card-header {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    margin-bottom: 0;
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius)
        var(--bs-card-inner-border-radius) 0 0;
}

.card-footer {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-footer:last-child {
    border-radius: 0 0 var(--bs-card-inner-border-radius)
        var(--bs-card-inner-border-radius);
}

.card-header-tabs {
    margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
    margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
    margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
    border-bottom: 0;
}
.card-header-tabs .nav-link.active {
    background-color: var(--bs-card-bg);
    border-bottom-color: var(--bs-card-bg);
}

.card-header-pills {
    margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
    margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: var(--bs-card-img-overlay-padding);
    border-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
    width: 100%;
}

.card-img,
.card-img-top {
    border-top-left-radius: var(--bs-card-inner-border-radius);
    border-top-right-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-bottom {
    border-bottom-right-radius: var(--bs-card-inner-border-radius);
    border-bottom-left-radius: var(--bs-card-inner-border-radius);
}

.card-group > .card {
    margin-bottom: var(--bs-card-group-margin);
}
@media (min-width: 576px) {
    .card-group {
        display: flex;
        flex-flow: row wrap;
    }
    .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }
    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }
    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-top,
    .card-group > .card:not(:last-child) .card-header {
        border-top-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-img-bottom,
    .card-group > .card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-top,
    .card-group > .card:not(:first-child) .card-header {
        border-top-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-img-bottom,
    .card-group > .card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
    }
}

.accordion {
    --bs-accordion-color: #212529;
    --bs-accordion-bg: #fff;
    --bs-accordion-transition: color 0.15s ease-in-out,
        background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
    --bs-accordion-border-color: var(--bs-border-color);
    --bs-accordion-border-width: 1px;
    --bs-accordion-border-radius: 0.375rem;
    --bs-accordion-inner-border-radius: calc(0.375rem - 1px);
    --bs-accordion-btn-padding-x: 1.25rem;
    --bs-accordion-btn-padding-y: 1rem;
    --bs-accordion-btn-color: #212529;
    --bs-accordion-btn-bg: var(--bs-accordion-bg);
    --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    --bs-accordion-btn-icon-width: 1.25rem;
    --bs-accordion-btn-icon-transform: rotate(-180deg);
    --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
    --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    --bs-accordion-btn-focus-border-color: #86b7fe;
    --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    --bs-accordion-body-padding-x: 1.25rem;
    --bs-accordion-body-padding-y: 1rem;
    --bs-accordion-active-color: #0c63e4;
    --bs-accordion-active-bg: #e7f1ff;
}

.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
    font-size: 1rem;
    color: var(--bs-accordion-btn-color);
    text-align: left;
    background-color: var(--bs-accordion-btn-bg);
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: var(--bs-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
    .accordion-button {
        transition: none;
    }
}
.accordion-button:not(.collapsed) {
    color: var(--bs-accordion-active-color);
    background-color: var(--bs-accordion-active-bg);
    box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0
        var(--bs-accordion-border-color);
}
.accordion-button:not(.collapsed)::after {
    background-image: var(--bs-accordion-btn-active-icon);
    transform: var(--bs-accordion-btn-icon-transform);
}
.accordion-button::after {
    flex-shrink: 0;
    width: var(--bs-accordion-btn-icon-width);
    height: var(--bs-accordion-btn-icon-width);
    margin-left: auto;
    content: '';
    background-image: var(--bs-accordion-btn-icon);
    background-repeat: no-repeat;
    background-size: var(--bs-accordion-btn-icon-width);
    transition: var(--bs-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
    .accordion-button::after {
        transition: none;
    }
}
.accordion-button:hover {
    z-index: 2;
}
.accordion-button:focus {
    z-index: 3;
    border-color: var(--bs-accordion-btn-focus-border-color);
    outline: 0;
    box-shadow: var(--bs-accordion-btn-focus-box-shadow);
}

.accordion-header {
    margin-bottom: 0;
}

.accordion-item {
    color: var(--bs-accordion-color);
    background-color: var(--bs-accordion-bg);
    border: var(--bs-accordion-border-width) solid
        var(--bs-accordion-border-color);
}
.accordion-item:first-of-type {
    border-top-left-radius: var(--bs-accordion-border-radius);
    border-top-right-radius: var(--bs-accordion-border-radius);
}
.accordion-item:first-of-type .accordion-button {
    border-top-left-radius: var(--bs-accordion-inner-border-radius);
    border-top-right-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:not(:first-of-type) {
    border-top: 0;
}
.accordion-item:last-of-type {
    border-bottom-right-radius: var(--bs-accordion-border-radius);
    border-bottom-left-radius: var(--bs-accordion-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
    border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
    border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:last-of-type .accordion-collapse {
    border-bottom-right-radius: var(--bs-accordion-border-radius);
    border-bottom-left-radius: var(--bs-accordion-border-radius);
}

.accordion-body {
    padding: var(--bs-accordion-body-padding-y)
        var(--bs-accordion-body-padding-x);
}

.accordion-flush .accordion-collapse {
    border-width: 0;
}
.accordion-flush .accordion-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
    border-top: 0;
}
.accordion-flush .accordion-item:last-child {
    border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button,
.accordion-flush .accordion-item .accordion-button.collapsed {
    border-radius: 0;
}

.breadcrumb {
    --bs-breadcrumb-padding-x: 0;
    --bs-breadcrumb-padding-y: 0;
    --bs-breadcrumb-margin-bottom: 1rem;
    --bs-breadcrumb-bg: ;
    --bs-breadcrumb-border-radius: ;
    --bs-breadcrumb-divider-color: #6c757d;
    --bs-breadcrumb-item-padding-x: 0.5rem;
    --bs-breadcrumb-item-active-color: #6c757d;
    display: flex;
    flex-wrap: wrap;
    padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
    margin-bottom: var(--bs-breadcrumb-margin-bottom);
    font-size: var(--bs-breadcrumb-font-size);
    list-style: none;
    background-color: var(--bs-breadcrumb-bg);
    border-radius: var(--bs-breadcrumb-border-radius);
}

.breadcrumb-item + .breadcrumb-item {
    padding-left: var(--bs-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item::before {
    float: left;
    padding-right: var(--bs-breadcrumb-item-padding-x);
    color: var(--bs-breadcrumb-divider-color);
    content: var(--bs-breadcrumb-divider, '/')
        /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
    color: var(--bs-breadcrumb-item-active-color);
}

.pagination,
.datatable-pagination ul {
    --bs-pagination-padding-x: 0.75rem;
    --bs-pagination-padding-y: 0.375rem;
    --bs-pagination-font-size: 1rem;
    --bs-pagination-color: var(--bs-link-color);
    --bs-pagination-bg: #fff;
    --bs-pagination-border-width: 1px;
    --bs-pagination-border-color: #dee2e6;
    --bs-pagination-border-radius: 0.375rem;
    --bs-pagination-hover-color: var(--bs-link-hover-color);
    --bs-pagination-hover-bg: #e9ecef;
    --bs-pagination-hover-border-color: #dee2e6;
    --bs-pagination-focus-color: var(--bs-link-hover-color);
    --bs-pagination-focus-bg: #e9ecef;
    --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    --bs-pagination-active-color: #fff;
    --bs-pagination-active-bg: #0d6efd;
    --bs-pagination-active-border-color: #0d6efd;
    --bs-pagination-disabled-color: #6c757d;
    --bs-pagination-disabled-bg: #fff;
    --bs-pagination-disabled-border-color: #dee2e6;
    display: flex;
    padding-left: 0;
    list-style: none;
}

.page-link,
.datatable-pagination a {
    position: relative;
    display: block;
    padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
    font-size: var(--bs-pagination-font-size);
    color: var(--bs-pagination-color);
    text-decoration: none;
    background-color: var(--bs-pagination-bg);
    border: var(--bs-pagination-border-width) solid
        var(--bs-pagination-border-color);
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .page-link,
    .datatable-pagination a {
        transition: none;
    }
}
.page-link:hover,
.datatable-pagination a:hover {
    z-index: 2;
    color: var(--bs-pagination-hover-color);
    background-color: var(--bs-pagination-hover-bg);
    border-color: var(--bs-pagination-hover-border-color);
}
.page-link:focus,
.datatable-pagination a:focus {
    z-index: 3;
    color: var(--bs-pagination-focus-color);
    background-color: var(--bs-pagination-focus-bg);
    outline: 0;
    box-shadow: var(--bs-pagination-focus-box-shadow);
}
.page-link.active,
.datatable-pagination a.active,
.active > .page-link,
.datatable-pagination .active > a {
    z-index: 3;
    color: var(--bs-pagination-active-color);
    background-color: var(--bs-pagination-active-bg);
    border-color: var(--bs-pagination-active-border-color);
}
.page-link.disabled,
.datatable-pagination a.disabled,
.disabled > .page-link,
.datatable-pagination .disabled > a {
    color: var(--bs-pagination-disabled-color);
    pointer-events: none;
    background-color: var(--bs-pagination-disabled-bg);
    border-color: var(--bs-pagination-disabled-border-color);
}

.page-item:not(:first-child) .page-link,
.page-item:not(:first-child) .datatable-pagination a,
.datatable-pagination .page-item:not(:first-child) a,
.datatable-pagination li:not(:first-child) .page-link,
.datatable-pagination li:not(:first-child) a {
    margin-left: -1px;
}
.page-item:first-child .page-link,
.page-item:first-child .datatable-pagination a,
.datatable-pagination .page-item:first-child a,
.datatable-pagination li:first-child .page-link,
.datatable-pagination li:first-child a {
    border-top-left-radius: var(--bs-pagination-border-radius);
    border-bottom-left-radius: var(--bs-pagination-border-radius);
}
.page-item:last-child .page-link,
.page-item:last-child .datatable-pagination a,
.datatable-pagination .page-item:last-child a,
.datatable-pagination li:last-child .page-link,
.datatable-pagination li:last-child a {
    border-top-right-radius: var(--bs-pagination-border-radius);
    border-bottom-right-radius: var(--bs-pagination-border-radius);
}

.pagination-lg {
    --bs-pagination-padding-x: 1.5rem;
    --bs-pagination-padding-y: 0.75rem;
    --bs-pagination-font-size: 1.25rem;
    --bs-pagination-border-radius: 0.5rem;
}

.pagination-sm {
    --bs-pagination-padding-x: 0.5rem;
    --bs-pagination-padding-y: 0.25rem;
    --bs-pagination-font-size: 0.875rem;
    --bs-pagination-border-radius: 0.25rem;
}

.badge {
    --bs-badge-padding-x: 0.65em;
    --bs-badge-padding-y: 0.35em;
    --bs-badge-font-size: 0.75em;
    --bs-badge-font-weight: 700;
    --bs-badge-color: #fff;
    --bs-badge-border-radius: 0.375rem;
    display: inline-block;
    padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
    font-size: var(--bs-badge-font-size);
    font-weight: var(--bs-badge-font-weight);
    line-height: 1;
    color: var(--bs-badge-color);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: var(--bs-badge-border-radius);
}
.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

.alert {
    --bs-alert-bg: transparent;
    --bs-alert-padding-x: 1rem;
    --bs-alert-padding-y: 1rem;
    --bs-alert-margin-bottom: 1rem;
    --bs-alert-color: inherit;
    --bs-alert-border-color: transparent;
    --bs-alert-border: 1px solid var(--bs-alert-border-color);
    --bs-alert-border-radius: 0.375rem;
    position: relative;
    padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
    margin-bottom: var(--bs-alert-margin-bottom);
    color: var(--bs-alert-color);
    background-color: var(--bs-alert-bg);
    border: var(--bs-alert-border);
    border-radius: var(--bs-alert-border-radius);
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 3rem;
}
.alert-dismissible .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: 1.25rem 1rem;
}

.alert-primary {
    --bs-alert-color: #084298;
    --bs-alert-bg: #cfe2ff;
    --bs-alert-border-color: #b6d4fe;
}
.alert-primary .alert-link {
    color: #06357a;
}

.alert-secondary {
    --bs-alert-color: #41464b;
    --bs-alert-bg: #e2e3e5;
    --bs-alert-border-color: #d3d6d8;
}
.alert-secondary .alert-link {
    color: #34383c;
}

.alert-success {
    --bs-alert-color: #0f5132;
    --bs-alert-bg: #d1e7dd;
    --bs-alert-border-color: #badbcc;
}
.alert-success .alert-link {
    color: #0c4128;
}

.alert-info {
    --bs-alert-color: #055160;
    --bs-alert-bg: #cff4fc;
    --bs-alert-border-color: #b6effb;
}
.alert-info .alert-link {
    color: #04414d;
}

.alert-warning {
    --bs-alert-color: #664d03;
    --bs-alert-bg: #fff3cd;
    --bs-alert-border-color: #ffecb5;
}
.alert-warning .alert-link {
    color: #523e02;
}

.alert-danger {
    --bs-alert-color: #842029;
    --bs-alert-bg: #f8d7da;
    --bs-alert-border-color: #f5c2c7;
}
.alert-danger .alert-link {
    color: #6a1a21;
}

.alert-light {
    --bs-alert-color: #636464;
    --bs-alert-bg: #fefefe;
    --bs-alert-border-color: #fdfdfe;
}
.alert-light .alert-link {
    color: #4f5050;
}

.alert-dark {
    --bs-alert-color: #141619;
    --bs-alert-bg: #d3d3d4;
    --bs-alert-border-color: #bcbebf;
}
.alert-dark .alert-link {
    color: #101214;
}

@keyframes progress-bar-stripes {
    0% {
        background-position-x: 1rem;
    }
}
.progress {
    --bs-progress-height: 1rem;
    --bs-progress-font-size: 0.75rem;
    --bs-progress-bg: #e9ecef;
    --bs-progress-border-radius: 0.375rem;
    --bs-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
    --bs-progress-bar-color: #fff;
    --bs-progress-bar-bg: #0d6efd;
    --bs-progress-bar-transition: width 0.6s ease;
    display: flex;
    height: var(--bs-progress-height);
    overflow: hidden;
    font-size: var(--bs-progress-font-size);
    background-color: var(--bs-progress-bg);
    border-radius: var(--bs-progress-border-radius);
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: var(--bs-progress-bar-color);
    text-align: center;
    white-space: nowrap;
    background-color: var(--bs-progress-bar-bg);
    transition: var(--bs-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(
        45deg,
        rgba(255, 255, 255, 0.15) 25%,
        transparent 25%,
        transparent 50%,
        rgba(255, 255, 255, 0.15) 50%,
        rgba(255, 255, 255, 0.15) 75%,
        transparent 75%,
        transparent
    );
    background-size: var(--bs-progress-height) var(--bs-progress-height);
}

.progress-bar-animated {
    animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        animation: none;
    }
}

.list-group {
    --bs-list-group-color: #212529;
    --bs-list-group-bg: #fff;
    --bs-list-group-border-color: rgba(0, 0, 0, 0.125);
    --bs-list-group-border-width: 1px;
    --bs-list-group-border-radius: 0.375rem;
    --bs-list-group-item-padding-x: 1rem;
    --bs-list-group-item-padding-y: 0.5rem;
    --bs-list-group-action-color: #495057;
    --bs-list-group-action-hover-color: #495057;
    --bs-list-group-action-hover-bg: #f8f9fa;
    --bs-list-group-action-active-color: #212529;
    --bs-list-group-action-active-bg: #e9ecef;
    --bs-list-group-disabled-color: #6c757d;
    --bs-list-group-disabled-bg: #fff;
    --bs-list-group-active-color: #fff;
    --bs-list-group-active-bg: #0d6efd;
    --bs-list-group-active-border-color: #0d6efd;
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: var(--bs-list-group-border-radius);
}

.list-group-numbered {
    list-style-type: none;
    counter-reset: section;
}
.list-group-numbered > .list-group-item::before {
    content: counters(section, '.') '. ';
    counter-increment: section;
}

.list-group-item-action {
    width: 100%;
    color: var(--bs-list-group-action-color);
    text-align: inherit;
}
.list-group-item-action:hover,
.list-group-item-action:focus {
    z-index: 1;
    color: var(--bs-list-group-action-hover-color);
    text-decoration: none;
    background-color: var(--bs-list-group-action-hover-bg);
}
.list-group-item-action:active {
    color: var(--bs-list-group-action-active-color);
    background-color: var(--bs-list-group-action-active-bg);
}

.list-group-item {
    position: relative;
    display: block;
    padding: var(--bs-list-group-item-padding-y)
        var(--bs-list-group-item-padding-x);
    color: var(--bs-list-group-color);
    text-decoration: none;
    background-color: var(--bs-list-group-bg);
    border: var(--bs-list-group-border-width) solid
        var(--bs-list-group-border-color);
}
.list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit;
}
.list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit;
}
.list-group-item.disabled,
.list-group-item:disabled {
    color: var(--bs-list-group-disabled-color);
    pointer-events: none;
    background-color: var(--bs-list-group-disabled-bg);
}
.list-group-item.active {
    z-index: 2;
    color: var(--bs-list-group-active-color);
    background-color: var(--bs-list-group-active-bg);
    border-color: var(--bs-list-group-active-border-color);
}
.list-group-item + .list-group-item {
    border-top-width: 0;
}
.list-group-item + .list-group-item.active {
    margin-top: calc(-1 * var(--bs-list-group-border-width));
    border-top-width: var(--bs-list-group-border-width);
}

.list-group-horizontal {
    flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
    margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row;
    }
    .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-sm > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-sm > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row;
    }
    .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-md > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-md > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-md > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row;
    }
    .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-lg > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-lg > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row;
    }
    .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xl > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xl > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
@media (min-width: 1400px) {
    .list-group-horizontal-xxl {
        flex-direction: row;
    }
    .list-group-horizontal-xxl > .list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
    }
    .list-group-horizontal-xxl > .list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xxl > .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
    }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
    }
}
.list-group-flush {
    border-radius: 0;
}
.list-group-flush > .list-group-item {
    border-width: 0 0 var(--bs-list-group-border-width);
}
.list-group-flush > .list-group-item:last-child {
    border-bottom-width: 0;
}

.list-group-item-primary {
    color: #084298;
    background-color: #cfe2ff;
}
.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
    color: #084298;
    background-color: #bacbe6;
}
.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #084298;
    border-color: #084298;
}

.list-group-item-secondary {
    color: #41464b;
    background-color: #e2e3e5;
}
.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
    color: #41464b;
    background-color: #cbccce;
}
.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #41464b;
    border-color: #41464b;
}

.list-group-item-success {
    color: #0f5132;
    background-color: #d1e7dd;
}
.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
    color: #0f5132;
    background-color: #bcd0c7;
}
.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #0f5132;
    border-color: #0f5132;
}

.list-group-item-info {
    color: #055160;
    background-color: #cff4fc;
}
.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
    color: #055160;
    background-color: #badce3;
}
.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #055160;
    border-color: #055160;
}

.list-group-item-warning {
    color: #664d03;
    background-color: #fff3cd;
}
.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
    color: #664d03;
    background-color: #e6dbb9;
}
.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #664d03;
    border-color: #664d03;
}

.list-group-item-danger {
    color: #842029;
    background-color: #f8d7da;
}
.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
    color: #842029;
    background-color: #dfc2c4;
}
.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #842029;
    border-color: #842029;
}

.list-group-item-light {
    color: #636464;
    background-color: #fefefe;
}
.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
    color: #636464;
    background-color: #e5e5e5;
}
.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #636464;
    border-color: #636464;
}

.list-group-item-dark {
    color: #141619;
    background-color: #d3d3d4;
}
.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
    color: #141619;
    background-color: #bebebf;
}
.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #141619;
    border-color: #141619;
}

.btn-close {
    box-sizing: content-box;
    width: 1em;
    height: 1em;
    padding: 0.25em 0.25em;
    color: #000;
    background: transparent
        url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e")
        center/1em auto no-repeat;
    border: 0;
    border-radius: 0.375rem;
    opacity: 0.5;
}
.btn-close:hover {
    color: #000;
    text-decoration: none;
    opacity: 0.75;
}
.btn-close:focus {
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    opacity: 1;
}
.btn-close:disabled,
.btn-close.disabled {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    opacity: 0.25;
}

.btn-close-white {
    filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
    --bs-toast-zindex: 1090;
    --bs-toast-padding-x: 0.75rem;
    --bs-toast-padding-y: 0.5rem;
    --bs-toast-spacing: 1.5rem;
    --bs-toast-max-width: 350px;
    --bs-toast-font-size: 0.875rem;
    --bs-toast-color: ;
    --bs-toast-bg: rgba(255, 255, 255, 0.85);
    --bs-toast-border-width: 1px;
    --bs-toast-border-color: var(--bs-border-color-translucent);
    --bs-toast-border-radius: 0.375rem;
    --bs-toast-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    --bs-toast-header-color: #6c757d;
    --bs-toast-header-bg: rgba(255, 255, 255, 0.85);
    --bs-toast-header-border-color: rgba(0, 0, 0, 0.05);
    width: var(--bs-toast-max-width);
    max-width: 100%;
    font-size: var(--bs-toast-font-size);
    color: var(--bs-toast-color);
    pointer-events: auto;
    background-color: var(--bs-toast-bg);
    background-clip: padding-box;
    border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
    box-shadow: var(--bs-toast-box-shadow);
    border-radius: var(--bs-toast-border-radius);
}
.toast.showing {
    opacity: 0;
}
.toast:not(.show) {
    display: none;
}

.toast-container {
    --bs-toast-zindex: 1090;
    position: absolute;
    z-index: var(--bs-toast-zindex);
    width: -moz-max-content;
    width: max-content;
    max-width: 100%;
    pointer-events: none;
}
.toast-container > :not(:last-child) {
    margin-bottom: var(--bs-toast-spacing);
}

.toast-header {
    display: flex;
    align-items: center;
    padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
    color: var(--bs-toast-header-color);
    background-color: var(--bs-toast-header-bg);
    background-clip: padding-box;
    border-bottom: var(--bs-toast-border-width) solid
        var(--bs-toast-header-border-color);
    border-top-left-radius: calc(
        var(--bs-toast-border-radius) - var(--bs-toast-border-width)
    );
    border-top-right-radius: calc(
        var(--bs-toast-border-radius) - var(--bs-toast-border-width)
    );
}
.toast-header .btn-close {
    margin-right: calc(-0.5 * var(--bs-toast-padding-x));
    margin-left: var(--bs-toast-padding-x);
}

.toast-body {
    padding: var(--bs-toast-padding-x);
    word-wrap: break-word;
}

.modal {
    --bs-modal-zindex: 1055;
    --bs-modal-width: 500px;
    --bs-modal-padding: 1rem;
    --bs-modal-margin: 0.5rem;
    --bs-modal-color: ;
    --bs-modal-bg: #fff;
    --bs-modal-border-color: var(--bs-border-color-translucent);
    --bs-modal-border-width: 1px;
    --bs-modal-border-radius: 0.5rem;
    --bs-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    --bs-modal-inner-border-radius: calc(0.5rem - 1px);
    --bs-modal-header-padding-x: 1rem;
    --bs-modal-header-padding-y: 1rem;
    --bs-modal-header-padding: 1rem 1rem;
    --bs-modal-header-border-color: var(--bs-border-color);
    --bs-modal-header-border-width: 1px;
    --bs-modal-title-line-height: 1.5;
    --bs-modal-footer-gap: 0.5rem;
    --bs-modal-footer-bg: ;
    --bs-modal-footer-border-color: var(--bs-border-color);
    --bs-modal-footer-border-width: 1px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-modal-zindex);
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: var(--bs-modal-margin);
    pointer-events: none;
}
.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}
.modal.show .modal-dialog {
    transform: none;
}
.modal.modal-static .modal-dialog {
    transform: scale(1.02);
}

.modal-dialog-scrollable {
    height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - var(--bs-modal-margin) * 2);
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background-color: var(--bs-modal-bg);
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    outline: 0;
}

.modal-backdrop {
    --bs-backdrop-zindex: 1050;
    --bs-backdrop-bg: #000;
    --bs-backdrop-opacity: 0.5;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-backdrop-zindex);
    width: 100vw;
    height: 100vh;
    background-color: var(--bs-backdrop-bg);
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop.show {
    opacity: var(--bs-backdrop-opacity);
}

.modal-header {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-modal-header-padding);
    border-bottom: var(--bs-modal-header-border-width) solid
        var(--bs-modal-header-border-color);
    border-top-left-radius: var(--bs-modal-inner-border-radius);
    border-top-right-radius: var(--bs-modal-inner-border-radius);
}
.modal-header .btn-close {
    padding: calc(var(--bs-modal-header-padding-y) * 0.5)
        calc(var(--bs-modal-header-padding-x) * 0.5);
    margin: calc(-0.5 * var(--bs-modal-header-padding-y))
        calc(-0.5 * var(--bs-modal-header-padding-x))
        calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: var(--bs-modal-title-line-height);
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: var(--bs-modal-padding);
}

.modal-footer {
    display: flex;
    flex-shrink: 0;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
    background-color: var(--bs-modal-footer-bg);
    border-top: var(--bs-modal-footer-border-width) solid
        var(--bs-modal-footer-border-color);
    border-bottom-right-radius: var(--bs-modal-inner-border-radius);
    border-bottom-left-radius: var(--bs-modal-inner-border-radius);
}
.modal-footer > * {
    margin: calc(var(--bs-modal-footer-gap) * 0.5);
}

@media (min-width: 576px) {
    .modal {
        --bs-modal-margin: 1.75rem;
        --bs-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    .modal-dialog {
        max-width: var(--bs-modal-width);
        margin-right: auto;
        margin-left: auto;
    }
    .modal-sm {
        --bs-modal-width: 300px;
    }
}
@media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        --bs-modal-width: 800px;
    }
}
@media (min-width: 1200px) {
    .modal-xl {
        --bs-modal-width: 1140px;
    }
}
.modal-fullscreen {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
}
.modal-fullscreen .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
}
.modal-fullscreen .modal-header,
.modal-fullscreen .modal-footer {
    border-radius: 0;
}
.modal-fullscreen .modal-body {
    overflow-y: auto;
}

@media (max-width: 575.98px) {
    .modal-fullscreen-sm-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-sm-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-sm-down .modal-header,
    .modal-fullscreen-sm-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-sm-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 767.98px) {
    .modal-fullscreen-md-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-md-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-md-down .modal-header,
    .modal-fullscreen-md-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-md-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 991.98px) {
    .modal-fullscreen-lg-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-lg-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-lg-down .modal-header,
    .modal-fullscreen-lg-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-lg-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 1199.98px) {
    .modal-fullscreen-xl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-xl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-xl-down .modal-header,
    .modal-fullscreen-xl-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-xl-down .modal-body {
        overflow-y: auto;
    }
}
@media (max-width: 1399.98px) {
    .modal-fullscreen-xxl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-xxl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
    .modal-fullscreen-xxl-down .modal-header,
    .modal-fullscreen-xxl-down .modal-footer {
        border-radius: 0;
    }
    .modal-fullscreen-xxl-down .modal-body {
        overflow-y: auto;
    }
}
.tooltip {
    --bs-tooltip-zindex: 1080;
    --bs-tooltip-max-width: 200px;
    --bs-tooltip-padding-x: 0.5rem;
    --bs-tooltip-padding-y: 0.25rem;
    --bs-tooltip-margin: ;
    --bs-tooltip-font-size: 0.875rem;
    --bs-tooltip-color: #fff;
    --bs-tooltip-bg: #000;
    --bs-tooltip-border-radius: 0.375rem;
    --bs-tooltip-opacity: 0.9;
    --bs-tooltip-arrow-width: 0.8rem;
    --bs-tooltip-arrow-height: 0.4rem;
    z-index: var(--bs-tooltip-zindex);
    display: block;
    padding: var(--bs-tooltip-arrow-height);
    margin: var(--bs-tooltip-margin);
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    white-space: normal;
    word-spacing: normal;
    line-break: auto;
    font-size: var(--bs-tooltip-font-size);
    word-wrap: break-word;
    opacity: 0;
}
.tooltip.show {
    opacity: var(--bs-tooltip-opacity);
}
.tooltip .tooltip-arrow {
    display: block;
    width: var(--bs-tooltip-arrow-width);
    height: var(--bs-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
    position: absolute;
    content: '';
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='top'] .tooltip-arrow {
    bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='top'] .tooltip-arrow::before {
    top: -1px;
    border-width: var(--bs-tooltip-arrow-height)
        calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
    border-top-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='right'] .tooltip-arrow {
    left: 0;
    width: var(--bs-tooltip-arrow-height);
    height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='right'] .tooltip-arrow::before {
    right: -1px;
    border-width: calc(var(--bs-tooltip-arrow-width) * 0.5)
        var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5)
        0;
    border-right-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='bottom'] .tooltip-arrow {
    top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='bottom'] .tooltip-arrow::before {
    bottom: -1px;
    border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5)
        var(--bs-tooltip-arrow-height);
    border-bottom-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^='left'] .tooltip-arrow {
    right: 0;
    width: var(--bs-tooltip-arrow-height);
    height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^='left'] .tooltip-arrow::before {
    left: -1px;
    border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0
        calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
    border-left-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.tooltip-inner {
    max-width: var(--bs-tooltip-max-width);
    padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
    color: var(--bs-tooltip-color);
    text-align: center;
    background-color: var(--bs-tooltip-bg);
    border-radius: var(--bs-tooltip-border-radius);
}

.popover {
    --bs-popover-zindex: 1070;
    --bs-popover-max-width: 276px;
    --bs-popover-font-size: 0.875rem;
    --bs-popover-bg: #fff;
    --bs-popover-border-width: 1px;
    --bs-popover-border-color: var(--bs-border-color-translucent);
    --bs-popover-border-radius: 0.5rem;
    --bs-popover-inner-border-radius: calc(0.5rem - 1px);
    --bs-popover-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    --bs-popover-header-padding-x: 1rem;
    --bs-popover-header-padding-y: 0.5rem;
    --bs-popover-header-font-size: 1rem;
    --bs-popover-header-color: ;
    --bs-popover-header-bg: #f0f0f0;
    --bs-popover-body-padding-x: 1rem;
    --bs-popover-body-padding-y: 1rem;
    --bs-popover-body-color: #212529;
    --bs-popover-arrow-width: 1rem;
    --bs-popover-arrow-height: 0.5rem;
    --bs-popover-arrow-border: var(--bs-popover-border-color);
    z-index: var(--bs-popover-zindex);
    display: block;
    max-width: var(--bs-popover-max-width);
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    white-space: normal;
    word-spacing: normal;
    line-break: auto;
    font-size: var(--bs-popover-font-size);
    word-wrap: break-word;
    background-color: var(--bs-popover-bg);
    background-clip: padding-box;
    border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
    border-radius: var(--bs-popover-border-radius);
}
.popover .popover-arrow {
    display: block;
    width: var(--bs-popover-arrow-width);
    height: var(--bs-popover-arrow-height);
}
.popover .popover-arrow::before,
.popover .popover-arrow::after {
    position: absolute;
    display: block;
    content: '';
    border-color: transparent;
    border-style: solid;
    border-width: 0;
}

.bs-popover-top > .popover-arrow,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow {
    bottom: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
}
.bs-popover-top > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::before,
.bs-popover-top > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::after {
    border-width: var(--bs-popover-arrow-height)
        calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::before {
    bottom: 0;
    border-top-color: var(--bs-popover-arrow-border);
}
.bs-popover-top > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='top'] > .popover-arrow::after {
    bottom: var(--bs-popover-border-width);
    border-top-color: var(--bs-popover-bg);
}

/* rtl:begin:ignore */
.bs-popover-end > .popover-arrow,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow {
    left: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
    width: var(--bs-popover-arrow-height);
    height: var(--bs-popover-arrow-width);
}
.bs-popover-end > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::before,
.bs-popover-end > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::after {
    border-width: calc(var(--bs-popover-arrow-width) * 0.5)
        var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5)
        0;
}
.bs-popover-end > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::before {
    left: 0;
    border-right-color: var(--bs-popover-arrow-border);
}
.bs-popover-end > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='right'] > .popover-arrow::after {
    left: var(--bs-popover-border-width);
    border-right-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.bs-popover-bottom > .popover-arrow,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow {
    top: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
}
.bs-popover-bottom > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::before,
.bs-popover-bottom > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::after {
    border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5)
        var(--bs-popover-arrow-height);
}
.bs-popover-bottom > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::before {
    top: 0;
    border-bottom-color: var(--bs-popover-arrow-border);
}
.bs-popover-bottom > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='bottom'] > .popover-arrow::after {
    top: var(--bs-popover-border-width);
    border-bottom-color: var(--bs-popover-bg);
}
.bs-popover-bottom .popover-header::before,
.bs-popover-auto[data-popper-placement^='bottom'] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: var(--bs-popover-arrow-width);
    margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
    content: '';
    border-bottom: var(--bs-popover-border-width) solid
        var(--bs-popover-header-bg);
}

/* rtl:begin:ignore */
.bs-popover-start > .popover-arrow,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow {
    right: calc(
        -1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width)
    );
    width: var(--bs-popover-arrow-height);
    height: var(--bs-popover-arrow-width);
}
.bs-popover-start > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::before,
.bs-popover-start > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::after {
    border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0
        calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-start > .popover-arrow::before,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::before {
    right: 0;
    border-left-color: var(--bs-popover-arrow-border);
}
.bs-popover-start > .popover-arrow::after,
.bs-popover-auto[data-popper-placement^='left'] > .popover-arrow::after {
    right: var(--bs-popover-border-width);
    border-left-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.popover-header {
    padding: var(--bs-popover-header-padding-y)
        var(--bs-popover-header-padding-x);
    margin-bottom: 0;
    font-size: var(--bs-popover-header-font-size);
    color: var(--bs-popover-header-color);
    background-color: var(--bs-popover-header-bg);
    border-bottom: var(--bs-popover-border-width) solid
        var(--bs-popover-border-color);
    border-top-left-radius: var(--bs-popover-inner-border-radius);
    border-top-right-radius: var(--bs-popover-inner-border-radius);
}
.popover-header:empty {
    display: none;
}

.popover-body {
    padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
    color: var(--bs-popover-body-color);
}

.carousel {
    position: relative;
}

.carousel.pointer-event {
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.carousel-inner::after {
    display: block;
    clear: both;
    content: '';
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
    transform: translateX(-100%);
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
    z-index: 1;
    opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-start,
    .carousel-fade .active.carousel-item-end {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: none;
    border: 0;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}
.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: center;
    padding: 0;
    margin-right: 15%;
    margin-bottom: 1rem;
    margin-left: 15%;
    list-style: none;
}
.carousel-indicators [data-bs-target] {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    padding: 0;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-indicators [data-bs-target] {
        transition: none;
    }
}
.carousel-indicators .active {
    opacity: 1;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 1.25rem;
    left: 15%;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    color: #fff;
    text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
    filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
    background-color: #000;
}
.carousel-dark .carousel-caption {
    color: #000;
}

.spinner-grow,
.spinner-border {
    display: inline-block;
    width: var(--bs-spinner-width);
    height: var(--bs-spinner-height);
    vertical-align: var(--bs-spinner-vertical-align);
    border-radius: 50%;
    animation: var(--bs-spinner-animation-speed) linear infinite
        var(--bs-spinner-animation-name);
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg) /* rtl:ignore */;
    }
}
.spinner-border {
    --bs-spinner-width: 2rem;
    --bs-spinner-height: 2rem;
    --bs-spinner-vertical-align: -0.125em;
    --bs-spinner-border-width: 0.25em;
    --bs-spinner-animation-speed: 0.75s;
    --bs-spinner-animation-name: spinner-border;
    border: var(--bs-spinner-border-width) solid currentcolor;
    border-right-color: transparent;
}

.spinner-border-sm {
    --bs-spinner-width: 1rem;
    --bs-spinner-height: 1rem;
    --bs-spinner-border-width: 0.2em;
}

@keyframes spinner-grow {
    0% {
        transform: scale(0);
    }
    50% {
        opacity: 1;
        transform: none;
    }
}
.spinner-grow {
    --bs-spinner-width: 2rem;
    --bs-spinner-height: 2rem;
    --bs-spinner-vertical-align: -0.125em;
    --bs-spinner-animation-speed: 0.75s;
    --bs-spinner-animation-name: spinner-grow;
    background-color: currentcolor;
    opacity: 0;
}

.spinner-grow-sm {
    --bs-spinner-width: 1rem;
    --bs-spinner-height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
        --bs-spinner-animation-speed: 1.5s;
    }
}
.offcanvas,
.offcanvas-xxl,
.offcanvas-xl,
.offcanvas-lg,
.offcanvas-md,
.offcanvas-sm {
    --bs-offcanvas-zindex: 1045;
    --bs-offcanvas-width: 400px;
    --bs-offcanvas-height: 30vh;
    --bs-offcanvas-padding-x: 1rem;
    --bs-offcanvas-padding-y: 1rem;
    --bs-offcanvas-color: ;
    --bs-offcanvas-bg: #fff;
    --bs-offcanvas-border-width: 1px;
    --bs-offcanvas-border-color: var(--bs-border-color-translucent);
    --bs-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

@media (max-width: 575.98px) {
    .offcanvas-sm {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-sm {
        transition: none;
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.showing,
    .offcanvas-sm.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 575.98px) {
    .offcanvas-sm.showing,
    .offcanvas-sm.hiding,
    .offcanvas-sm.show {
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .offcanvas-sm {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-sm .offcanvas-header {
        display: none;
    }
    .offcanvas-sm .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 767.98px) {
    .offcanvas-md {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-md {
        transition: none;
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.showing,
    .offcanvas-md.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 767.98px) {
    .offcanvas-md.showing,
    .offcanvas-md.hiding,
    .offcanvas-md.show {
        visibility: visible;
    }
}
@media (min-width: 768px) {
    .offcanvas-md {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-md .offcanvas-header {
        display: none;
    }
    .offcanvas-md .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 991.98px) {
    .offcanvas-lg {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-lg {
        transition: none;
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.showing,
    .offcanvas-lg.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 991.98px) {
    .offcanvas-lg.showing,
    .offcanvas-lg.hiding,
    .offcanvas-lg.show {
        visibility: visible;
    }
}
@media (min-width: 992px) {
    .offcanvas-lg {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-lg .offcanvas-header {
        display: none;
    }
    .offcanvas-lg .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 1199.98px) {
    .offcanvas-xl {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-xl {
        transition: none;
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.showing,
    .offcanvas-xl.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 1199.98px) {
    .offcanvas-xl.showing,
    .offcanvas-xl.hiding,
    .offcanvas-xl.show {
        visibility: visible;
    }
}
@media (min-width: 1200px) {
    .offcanvas-xl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-xl .offcanvas-header {
        display: none;
    }
    .offcanvas-xl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

@media (max-width: 1399.98px) {
    .offcanvas-xxl {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
    }
}
@media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
    .offcanvas-xxl {
        transition: none;
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateX(100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid
            var(--bs-offcanvas-border-color);
        transform: translateY(100%);
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.showing,
    .offcanvas-xxl.show:not(.hiding) {
        transform: none;
    }
}
@media (max-width: 1399.98px) {
    .offcanvas-xxl.showing,
    .offcanvas-xxl.hiding,
    .offcanvas-xxl.show {
        visibility: visible;
    }
}
@media (min-width: 1400px) {
    .offcanvas-xxl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
    }
    .offcanvas-xxl .offcanvas-header {
        display: none;
    }
    .offcanvas-xxl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
    }
}

.offcanvas {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .offcanvas {
        transition: none;
    }
}
.offcanvas.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
}
.offcanvas.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateX(100%);
}
.offcanvas.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
}
.offcanvas.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid
        var(--bs-offcanvas-border-color);
    transform: translateY(100%);
}
.offcanvas.showing,
.offcanvas.show:not(.hiding) {
    transform: none;
}
.offcanvas.showing,
.offcanvas.hiding,
.offcanvas.show {
    visibility: visible;
}

.offcanvas-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}
.offcanvas-backdrop.fade {
    opacity: 0;
}
.offcanvas-backdrop.show {
    opacity: 0.5;
}

.offcanvas-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
}
.offcanvas-header .btn-close {
    padding: calc(var(--bs-offcanvas-padding-y) * 0.5)
        calc(var(--bs-offcanvas-padding-x) * 0.5);
    margin-top: calc(-0.5 * var(--bs-offcanvas-padding-y));
    margin-right: calc(-0.5 * var(--bs-offcanvas-padding-x));
    margin-bottom: calc(-0.5 * var(--bs-offcanvas-padding-y));
}

.offcanvas-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.offcanvas-body {
    flex-grow: 1;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
    overflow-y: auto;
}

.placeholder {
    display: inline-block;
    min-height: 1em;
    vertical-align: middle;
    cursor: wait;
    background-color: currentcolor;
    opacity: 0.5;
}
.placeholder.btn::before {
    display: inline-block;
    content: '';
}

.placeholder-xs {
    min-height: 0.6em;
}

.placeholder-sm {
    min-height: 0.8em;
}

.placeholder-lg {
    min-height: 1.2em;
}

.placeholder-glow .placeholder {
    animation: placeholder-glow 2s ease-in-out infinite;
}

@keyframes placeholder-glow {
    50% {
        opacity: 0.2;
    }
}
.placeholder-wave {
    -webkit-mask-image: linear-gradient(
        130deg,
        #000 55%,
        rgba(0, 0, 0, 0.8) 75%,
        #000 95%
    );
    mask-image: linear-gradient(
        130deg,
        #000 55%,
        rgba(0, 0, 0, 0.8) 75%,
        #000 95%
    );
    -webkit-mask-size: 200% 100%;
    mask-size: 200% 100%;
    animation: placeholder-wave 2s linear infinite;
}

@keyframes placeholder-wave {
    100% {
        -webkit-mask-position: -200% 0%;
        mask-position: -200% 0%;
    }
}
.clearfix::after {
    display: block;
    clear: both;
    content: '';
}

.text-bg-primary {
    color: #fff !important;
    background-color: RGBA(13, 110, 253, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-secondary {
    color: #fff !important;
    background-color: RGBA(108, 117, 125, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-success {
    color: #fff !important;
    background-color: RGBA(25, 135, 84, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-info {
    color: #000 !important;
    background-color: RGBA(13, 202, 240, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-warning {
    color: #000 !important;
    background-color: RGBA(255, 193, 7, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-danger {
    color: #fff !important;
    background-color: RGBA(220, 53, 69, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-light {
    color: #000 !important;
    background-color: RGBA(248, 249, 250, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-dark {
    color: #fff !important;
    background-color: RGBA(33, 37, 41, var(--bs-bg-opacity, 1)) !important;
}

.link-primary {
    color: #0d6efd !important;
}
.link-primary:hover,
.link-primary:focus {
    color: #0a58ca !important;
}

.link-secondary {
    color: #6c757d !important;
}
.link-secondary:hover,
.link-secondary:focus {
    color: #565e64 !important;
}

.link-success {
    color: #198754 !important;
}
.link-success:hover,
.link-success:focus {
    color: #146c43 !important;
}

.link-info {
    color: #0dcaf0 !important;
}
.link-info:hover,
.link-info:focus {
    color: #3dd5f3 !important;
}

.link-warning {
    color: #ffc107 !important;
}
.link-warning:hover,
.link-warning:focus {
    color: #ffcd39 !important;
}

.link-danger {
    color: #dc3545 !important;
}
.link-danger:hover,
.link-danger:focus {
    color: #b02a37 !important;
}

.link-light {
    color: #f8f9fa !important;
}
.link-light:hover,
.link-light:focus {
    color: #f9fafb !important;
}

.link-dark {
    color: #212529 !important;
}
.link-dark:hover,
.link-dark:focus {
    color: #1a1e21 !important;
}

.ratio {
    position: relative;
    width: 100%;
}
.ratio::before {
    display: block;
    padding-top: var(--bs-aspect-ratio);
    content: '';
}
.ratio > * {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.ratio-1x1 {
    --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
    --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
    --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
    --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top,
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav,
.sb-nav-fixed .sb-topnav {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
}

.sticky-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
}

@media (min-width: 576px) {
    .sticky-sm-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-sm-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 768px) {
    .sticky-md-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-md-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 992px) {
    .sticky-lg-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-lg-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 1200px) {
    .sticky-xl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-xl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
@media (min-width: 1400px) {
    .sticky-xxl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .sticky-xxl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
    }
}
.hstack {
    display: flex;
    flex-direction: row;
    align-items: center;
    align-self: stretch;
}

.vstack {
    display: flex;
    flex: 1 1 auto;
    flex-direction: column;
    align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border: 0 !important;
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    content: '';
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.vr {
    display: inline-block;
    align-self: stretch;
    width: 1px;
    min-height: 1em;
    background-color: currentcolor;
    opacity: 0.25;
}

.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.float-start {
    float: left !important;
}

.float-end {
    float: right !important;
}

.float-none {
    float: none !important;
}

.opacity-0 {
    opacity: 0 !important;
}

.opacity-25 {
    opacity: 0.25 !important;
}

.opacity-50 {
    opacity: 0.5 !important;
}

.opacity-75 {
    opacity: 0.75 !important;
}

.opacity-100 {
    opacity: 1 !important;
}

.overflow-auto {
    overflow: auto !important;
}

.overflow-hidden {
    overflow: hidden !important;
}

.overflow-visible {
    overflow: visible !important;
}

.overflow-scroll {
    overflow: scroll !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-grid {
    display: grid !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: flex !important;
}

.d-inline-flex {
    display: inline-flex !important;
}

.d-none {
    display: none !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: sticky !important;
}

.top-0 {
    top: 0 !important;
}

.top-50 {
    top: 50% !important;
}

.top-100 {
    top: 100% !important;
}

.bottom-0 {
    bottom: 0 !important;
}

.bottom-50 {
    bottom: 50% !important;
}

.bottom-100 {
    bottom: 100% !important;
}

.start-0 {
    left: 0 !important;
}

.start-50 {
    left: 50% !important;
}

.start-100 {
    left: 100% !important;
}

.end-0 {
    right: 0 !important;
}

.end-50 {
    right: 50% !important;
}

.end-100 {
    right: 100% !important;
}

.translate-middle {
    transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
    transform: translateX(-50%) !important;
}

.translate-middle-y {
    transform: translateY(-50%) !important;
}

.border {
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-0 {
    border: 0 !important;
}

.border-top {
    border-top: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-end {
    border-right: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-end-0 {
    border-right: 0 !important;
}

.border-bottom {
    border-bottom: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-start {
    border-left: var(--bs-border-width) var(--bs-border-style)
        var(--bs-border-color) !important;
}

.border-start-0 {
    border-left: 0 !important;
}

.border-primary {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-primary-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-secondary {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-secondary-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-success {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-success-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-info {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}

.border-warning {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-warning-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-danger {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-danger-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-light {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-light-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-dark {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}

.border-white {
    --bs-border-opacity: 1;
    border-color: rgba(
        var(--bs-white-rgb),
        var(--bs-border-opacity)
    ) !important;
}

.border-1 {
    --bs-border-width: 1px;
}

.border-2 {
    --bs-border-width: 2px;
}

.border-3 {
    --bs-border-width: 3px;
}

.border-4 {
    --bs-border-width: 4px;
}

.border-5 {
    --bs-border-width: 5px;
}

.border-opacity-10 {
    --bs-border-opacity: 0.1;
}

.border-opacity-25 {
    --bs-border-opacity: 0.25;
}

.border-opacity-50 {
    --bs-border-opacity: 0.5;
}

.border-opacity-75 {
    --bs-border-opacity: 0.75;
}

.border-opacity-100 {
    --bs-border-opacity: 1;
}

.w-25 {
    width: 25% !important;
}

.w-50 {
    width: 50% !important;
}

.w-75 {
    width: 75% !important;
}

.w-100 {
    width: 100% !important;
}

.w-auto {
    width: auto !important;
}

.mw-100 {
    max-width: 100% !important;
}

.vw-100 {
    width: 100vw !important;
}

.min-vw-100 {
    min-width: 100vw !important;
}

.h-25 {
    height: 25% !important;
}

.h-50 {
    height: 50% !important;
}

.h-75 {
    height: 75% !important;
}

.h-100 {
    height: 100% !important;
}

.h-auto {
    height: auto !important;
}

.mh-100 {
    max-height: 100% !important;
}

.vh-100 {
    height: 100vh !important;
}

.min-vh-100 {
    min-height: 100vh !important;
}

.flex-fill {
    flex: 1 1 auto !important;
}

.flex-row {
    flex-direction: row !important;
}

.flex-column {
    flex-direction: column !important;
}

.flex-row-reverse {
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    flex-direction: column-reverse !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.flex-grow-1 {
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    flex-shrink: 1 !important;
}

.flex-wrap {
    flex-wrap: wrap !important;
}

.flex-nowrap {
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}

.justify-content-start {
    justify-content: flex-start !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.justify-content-around {
    justify-content: space-around !important;
}

.justify-content-evenly {
    justify-content: space-evenly !important;
}

.align-items-start {
    align-items: flex-start !important;
}

.align-items-end {
    align-items: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

.align-items-baseline {
    align-items: baseline !important;
}

.align-items-stretch {
    align-items: stretch !important;
}

.align-content-start {
    align-content: flex-start !important;
}

.align-content-end {
    align-content: flex-end !important;
}

.align-content-center {
    align-content: center !important;
}

.align-content-between {
    align-content: space-between !important;
}

.align-content-around {
    align-content: space-around !important;
}

.align-content-stretch {
    align-content: stretch !important;
}

.align-self-auto {
    align-self: auto !important;
}

.align-self-start {
    align-self: flex-start !important;
}

.align-self-end {
    align-self: flex-end !important;
}

.align-self-center {
    align-self: center !important;
}

.align-self-baseline {
    align-self: baseline !important;
}

.align-self-stretch {
    align-self: stretch !important;
}

.order-first {
    order: -1 !important;
}

.order-0 {
    order: 0 !important;
}

.order-1 {
    order: 1 !important;
}

.order-2 {
    order: 2 !important;
}

.order-3 {
    order: 3 !important;
}

.order-4 {
    order: 4 !important;
}

.order-5 {
    order: 5 !important;
}

.order-last {
    order: 6 !important;
}

.m-0 {
    margin: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.m-3 {
    margin: 1rem !important;
}

.m-4 {
    margin: 1.5rem !important;
}

.m-5 {
    margin: 3rem !important;
}

.m-auto {
    margin: auto !important;
}

.mx-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
}

.mx-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
}

.mx-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
}

.mx-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
}

.mx-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
}

.mx-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
}

.mx-auto {
    margin-right: auto !important;
    margin-left: auto !important;
}

.my-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}

.my-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
}

.my-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
}

.my-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
}

.my-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
}

.my-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
}

.my-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
}

.mt-0 {
    margin-top: 0 !important;
}

.mt-1 {
    margin-top: 0.25rem !important;
}

.mt-2 {
    margin-top: 0.5rem !important;
}

.mt-3 {
    margin-top: 1rem !important;
}

.mt-4 {
    margin-top: 1.5rem !important;
}

.mt-5 {
    margin-top: 3rem !important;
}

.mt-auto {
    margin-top: auto !important;
}

.me-0 {
    margin-right: 0 !important;
}

.me-1 {
    margin-right: 0.25rem !important;
}

.me-2 {
    margin-right: 0.5rem !important;
}

.me-3 {
    margin-right: 1rem !important;
}

.me-4 {
    margin-right: 1.5rem !important;
}

.me-5 {
    margin-right: 3rem !important;
}

.me-auto {
    margin-right: auto !important;
}

.mb-0 {
    margin-bottom: 0 !important;
}

.mb-1 {
    margin-bottom: 0.25rem !important;
}

.mb-2 {
    margin-bottom: 0.5rem !important;
}

.mb-3 {
    margin-bottom: 1rem !important;
}

.mb-4 {
    margin-bottom: 1.5rem !important;
}

.mb-5 {
    margin-bottom: 3rem !important;
}

.mb-auto {
    margin-bottom: auto !important;
}

.ms-0 {
    margin-left: 0 !important;
}

.ms-1 {
    margin-left: 0.25rem !important;
}

.ms-2 {
    margin-left: 0.5rem !important;
}

.ms-3 {
    margin-left: 1rem !important;
}

.ms-4 {
    margin-left: 1.5rem !important;
}

.ms-5 {
    margin-left: 3rem !important;
}

.ms-auto {
    margin-left: auto !important;
}

.p-0 {
    padding: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.p-3 {
    padding: 1rem !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.p-5 {
    padding: 3rem !important;
}

.px-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
}

.px-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
}

.px-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
}

.px-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
}

.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}

.px-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
}

.py-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}

.py-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
}

.py-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
}

.py-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
}

.py-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
}

.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}

.pt-0 {
    padding-top: 0 !important;
}

.pt-1 {
    padding-top: 0.25rem !important;
}

.pt-2 {
    padding-top: 0.5rem !important;
}

.pt-3 {
    padding-top: 1rem !important;
}

.pt-4 {
    padding-top: 1.5rem !important;
}

.pt-5 {
    padding-top: 3rem !important;
}

.pe-0 {
    padding-right: 0 !important;
}

.pe-1 {
    padding-right: 0.25rem !important;
}

.pe-2 {
    padding-right: 0.5rem !important;
}

.pe-3 {
    padding-right: 1rem !important;
}

.pe-4 {
    padding-right: 1.5rem !important;
}

.pe-5 {
    padding-right: 3rem !important;
}

.pb-0 {
    padding-bottom: 0 !important;
}

.pb-1 {
    padding-bottom: 0.25rem !important;
}

.pb-2 {
    padding-bottom: 0.5rem !important;
}

.pb-3 {
    padding-bottom: 1rem !important;
}

.pb-4 {
    padding-bottom: 1.5rem !important;
}

.pb-5 {
    padding-bottom: 3rem !important;
}

.ps-0 {
    padding-left: 0 !important;
}

.ps-1 {
    padding-left: 0.25rem !important;
}

.ps-2 {
    padding-left: 0.5rem !important;
}

.ps-3 {
    padding-left: 1rem !important;
}

.ps-4 {
    padding-left: 1.5rem !important;
}

.ps-5 {
    padding-left: 3rem !important;
}

.gap-0 {
    gap: 0 !important;
}

.gap-1 {
    gap: 0.25rem !important;
}

.gap-2 {
    gap: 0.5rem !important;
}

.gap-3 {
    gap: 1rem !important;
}

.gap-4 {
    gap: 1.5rem !important;
}

.gap-5 {
    gap: 3rem !important;
}

.font-monospace {
    font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
    font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
    font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
    font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
    font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
    font-size: 1.25rem !important;
}

.fs-6 {
    font-size: 1rem !important;
}

.fst-italic {
    font-style: italic !important;
}

.fst-normal {
    font-style: normal !important;
}

.fw-light {
    font-weight: 300 !important;
}

.fw-lighter {
    font-weight: lighter !important;
}

.fw-normal {
    font-weight: 400 !important;
}

.fw-bold {
    font-weight: 700 !important;
}

.fw-semibold {
    font-weight: 600 !important;
}

.fw-bolder {
    font-weight: bolder !important;
}

.lh-1 {
    line-height: 1 !important;
}

.lh-sm {
    line-height: 1.25 !important;
}

.lh-base {
    line-height: 1.5 !important;
}

.lh-lg {
    line-height: 2 !important;
}

.text-start {
    text-align: left !important;
}

.text-end {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-decoration-underline {
    text-decoration: underline !important;
}

.text-decoration-line-through {
    text-decoration: line-through !important;
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.text-wrap {
    white-space: normal !important;
}

.text-nowrap {
    white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
    word-wrap: break-word !important;
    word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted {
    --bs-text-opacity: 1;
    color: #6c757d !important;
}

.text-black-50 {
    --bs-text-opacity: 1;
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    --bs-text-opacity: 1;
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
    --bs-text-opacity: 1;
    color: inherit !important;
}

.text-opacity-25 {
    --bs-text-opacity: 0.25;
}

.text-opacity-50 {
    --bs-text-opacity: 0.5;
}

.text-opacity-75 {
    --bs-text-opacity: 0.75;
}

.text-opacity-100 {
    --bs-text-opacity: 1;
}

.bg-primary {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-primary-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-secondary {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-secondary-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-success {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-success-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-info {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-warning-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-danger {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-danger-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-light {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-light-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-dark {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-black-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-white {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-white-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-body {
    --bs-bg-opacity: 1;
    background-color: rgba(
        var(--bs-body-bg-rgb),
        var(--bs-bg-opacity)
    ) !important;
}

.bg-transparent {
    --bs-bg-opacity: 1;
    background-color: transparent !important;
}

.bg-opacity-10 {
    --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
    --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
    --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
    --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
    --bs-bg-opacity: 1;
}

.bg-gradient {
    background-image: var(--bs-gradient) !important;
}

.user-select-all {
    -webkit-user-select: all !important;
    -moz-user-select: all !important;
    user-select: all !important;
}

.user-select-auto {
    -webkit-user-select: auto !important;
    -moz-user-select: auto !important;
    user-select: auto !important;
}

.user-select-none {
    -webkit-user-select: none !important;
    -moz-user-select: none !important;
    user-select: none !important;
}

.pe-none {
    pointer-events: none !important;
}

.pe-auto {
    pointer-events: auto !important;
}

.rounded {
    border-radius: var(--bs-border-radius) !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.rounded-1 {
    border-radius: var(--bs-border-radius-sm) !important;
}

.rounded-2 {
    border-radius: var(--bs-border-radius) !important;
}

.rounded-3 {
    border-radius: var(--bs-border-radius-lg) !important;
}

.rounded-4 {
    border-radius: var(--bs-border-radius-xl) !important;
}

.rounded-5 {
    border-radius: var(--bs-border-radius-2xl) !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-pill {
    border-radius: var(--bs-border-radius-pill) !important;
}

.rounded-top {
    border-top-left-radius: var(--bs-border-radius) !important;
    border-top-right-radius: var(--bs-border-radius) !important;
}

.rounded-end {
    border-top-right-radius: var(--bs-border-radius) !important;
    border-bottom-right-radius: var(--bs-border-radius) !important;
}

.rounded-bottom {
    border-bottom-right-radius: var(--bs-border-radius) !important;
    border-bottom-left-radius: var(--bs-border-radius) !important;
}

.rounded-start {
    border-bottom-left-radius: var(--bs-border-radius) !important;
    border-top-left-radius: var(--bs-border-radius) !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

@media (min-width: 576px) {
    .float-sm-start {
        float: left !important;
    }
    .float-sm-end {
        float: right !important;
    }
    .float-sm-none {
        float: none !important;
    }
    .d-sm-inline {
        display: inline !important;
    }
    .d-sm-inline-block {
        display: inline-block !important;
    }
    .d-sm-block {
        display: block !important;
    }
    .d-sm-grid {
        display: grid !important;
    }
    .d-sm-table {
        display: table !important;
    }
    .d-sm-table-row {
        display: table-row !important;
    }
    .d-sm-table-cell {
        display: table-cell !important;
    }
    .d-sm-flex {
        display: flex !important;
    }
    .d-sm-inline-flex {
        display: inline-flex !important;
    }
    .d-sm-none {
        display: none !important;
    }
    .flex-sm-fill {
        flex: 1 1 auto !important;
    }
    .flex-sm-row {
        flex-direction: row !important;
    }
    .flex-sm-column {
        flex-direction: column !important;
    }
    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }
    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-sm-start {
        justify-content: flex-start !important;
    }
    .justify-content-sm-end {
        justify-content: flex-end !important;
    }
    .justify-content-sm-center {
        justify-content: center !important;
    }
    .justify-content-sm-between {
        justify-content: space-between !important;
    }
    .justify-content-sm-around {
        justify-content: space-around !important;
    }
    .justify-content-sm-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-sm-start {
        align-items: flex-start !important;
    }
    .align-items-sm-end {
        align-items: flex-end !important;
    }
    .align-items-sm-center {
        align-items: center !important;
    }
    .align-items-sm-baseline {
        align-items: baseline !important;
    }
    .align-items-sm-stretch {
        align-items: stretch !important;
    }
    .align-content-sm-start {
        align-content: flex-start !important;
    }
    .align-content-sm-end {
        align-content: flex-end !important;
    }
    .align-content-sm-center {
        align-content: center !important;
    }
    .align-content-sm-between {
        align-content: space-between !important;
    }
    .align-content-sm-around {
        align-content: space-around !important;
    }
    .align-content-sm-stretch {
        align-content: stretch !important;
    }
    .align-self-sm-auto {
        align-self: auto !important;
    }
    .align-self-sm-start {
        align-self: flex-start !important;
    }
    .align-self-sm-end {
        align-self: flex-end !important;
    }
    .align-self-sm-center {
        align-self: center !important;
    }
    .align-self-sm-baseline {
        align-self: baseline !important;
    }
    .align-self-sm-stretch {
        align-self: stretch !important;
    }
    .order-sm-first {
        order: -1 !important;
    }
    .order-sm-0 {
        order: 0 !important;
    }
    .order-sm-1 {
        order: 1 !important;
    }
    .order-sm-2 {
        order: 2 !important;
    }
    .order-sm-3 {
        order: 3 !important;
    }
    .order-sm-4 {
        order: 4 !important;
    }
    .order-sm-5 {
        order: 5 !important;
    }
    .order-sm-last {
        order: 6 !important;
    }
    .m-sm-0 {
        margin: 0 !important;
    }
    .m-sm-1 {
        margin: 0.25rem !important;
    }
    .m-sm-2 {
        margin: 0.5rem !important;
    }
    .m-sm-3 {
        margin: 1rem !important;
    }
    .m-sm-4 {
        margin: 1.5rem !important;
    }
    .m-sm-5 {
        margin: 3rem !important;
    }
    .m-sm-auto {
        margin: auto !important;
    }
    .mx-sm-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-sm-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-sm-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-sm-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-sm-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-sm-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-sm-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-sm-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-sm-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-sm-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-sm-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-sm-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-sm-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-sm-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-sm-0 {
        margin-top: 0 !important;
    }
    .mt-sm-1 {
        margin-top: 0.25rem !important;
    }
    .mt-sm-2 {
        margin-top: 0.5rem !important;
    }
    .mt-sm-3 {
        margin-top: 1rem !important;
    }
    .mt-sm-4 {
        margin-top: 1.5rem !important;
    }
    .mt-sm-5 {
        margin-top: 3rem !important;
    }
    .mt-sm-auto {
        margin-top: auto !important;
    }
    .me-sm-0 {
        margin-right: 0 !important;
    }
    .me-sm-1 {
        margin-right: 0.25rem !important;
    }
    .me-sm-2 {
        margin-right: 0.5rem !important;
    }
    .me-sm-3 {
        margin-right: 1rem !important;
    }
    .me-sm-4 {
        margin-right: 1.5rem !important;
    }
    .me-sm-5 {
        margin-right: 3rem !important;
    }
    .me-sm-auto {
        margin-right: auto !important;
    }
    .mb-sm-0 {
        margin-bottom: 0 !important;
    }
    .mb-sm-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-sm-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-sm-3 {
        margin-bottom: 1rem !important;
    }
    .mb-sm-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-sm-5 {
        margin-bottom: 3rem !important;
    }
    .mb-sm-auto {
        margin-bottom: auto !important;
    }
    .ms-sm-0 {
        margin-left: 0 !important;
    }
    .ms-sm-1 {
        margin-left: 0.25rem !important;
    }
    .ms-sm-2 {
        margin-left: 0.5rem !important;
    }
    .ms-sm-3 {
        margin-left: 1rem !important;
    }
    .ms-sm-4 {
        margin-left: 1.5rem !important;
    }
    .ms-sm-5 {
        margin-left: 3rem !important;
    }
    .ms-sm-auto {
        margin-left: auto !important;
    }
    .p-sm-0 {
        padding: 0 !important;
    }
    .p-sm-1 {
        padding: 0.25rem !important;
    }
    .p-sm-2 {
        padding: 0.5rem !important;
    }
    .p-sm-3 {
        padding: 1rem !important;
    }
    .p-sm-4 {
        padding: 1.5rem !important;
    }
    .p-sm-5 {
        padding: 3rem !important;
    }
    .px-sm-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-sm-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-sm-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-sm-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-sm-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-sm-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-sm-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-sm-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-sm-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-sm-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-sm-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-sm-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-sm-0 {
        padding-top: 0 !important;
    }
    .pt-sm-1 {
        padding-top: 0.25rem !important;
    }
    .pt-sm-2 {
        padding-top: 0.5rem !important;
    }
    .pt-sm-3 {
        padding-top: 1rem !important;
    }
    .pt-sm-4 {
        padding-top: 1.5rem !important;
    }
    .pt-sm-5 {
        padding-top: 3rem !important;
    }
    .pe-sm-0 {
        padding-right: 0 !important;
    }
    .pe-sm-1 {
        padding-right: 0.25rem !important;
    }
    .pe-sm-2 {
        padding-right: 0.5rem !important;
    }
    .pe-sm-3 {
        padding-right: 1rem !important;
    }
    .pe-sm-4 {
        padding-right: 1.5rem !important;
    }
    .pe-sm-5 {
        padding-right: 3rem !important;
    }
    .pb-sm-0 {
        padding-bottom: 0 !important;
    }
    .pb-sm-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-sm-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-sm-3 {
        padding-bottom: 1rem !important;
    }
    .pb-sm-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-sm-5 {
        padding-bottom: 3rem !important;
    }
    .ps-sm-0 {
        padding-left: 0 !important;
    }
    .ps-sm-1 {
        padding-left: 0.25rem !important;
    }
    .ps-sm-2 {
        padding-left: 0.5rem !important;
    }
    .ps-sm-3 {
        padding-left: 1rem !important;
    }
    .ps-sm-4 {
        padding-left: 1.5rem !important;
    }
    .ps-sm-5 {
        padding-left: 3rem !important;
    }
    .gap-sm-0 {
        gap: 0 !important;
    }
    .gap-sm-1 {
        gap: 0.25rem !important;
    }
    .gap-sm-2 {
        gap: 0.5rem !important;
    }
    .gap-sm-3 {
        gap: 1rem !important;
    }
    .gap-sm-4 {
        gap: 1.5rem !important;
    }
    .gap-sm-5 {
        gap: 3rem !important;
    }
    .text-sm-start {
        text-align: left !important;
    }
    .text-sm-end {
        text-align: right !important;
    }
    .text-sm-center {
        text-align: center !important;
    }
}
@media (min-width: 768px) {
    .float-md-start {
        float: left !important;
    }
    .float-md-end {
        float: right !important;
    }
    .float-md-none {
        float: none !important;
    }
    .d-md-inline {
        display: inline !important;
    }
    .d-md-inline-block {
        display: inline-block !important;
    }
    .d-md-block {
        display: block !important;
    }
    .d-md-grid {
        display: grid !important;
    }
    .d-md-table {
        display: table !important;
    }
    .d-md-table-row {
        display: table-row !important;
    }
    .d-md-table-cell {
        display: table-cell !important;
    }
    .d-md-flex {
        display: flex !important;
    }
    .d-md-inline-flex {
        display: inline-flex !important;
    }
    .d-md-none {
        display: none !important;
    }
    .flex-md-fill {
        flex: 1 1 auto !important;
    }
    .flex-md-row {
        flex-direction: row !important;
    }
    .flex-md-column {
        flex-direction: column !important;
    }
    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-md-wrap {
        flex-wrap: wrap !important;
    }
    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-md-start {
        justify-content: flex-start !important;
    }
    .justify-content-md-end {
        justify-content: flex-end !important;
    }
    .justify-content-md-center {
        justify-content: center !important;
    }
    .justify-content-md-between {
        justify-content: space-between !important;
    }
    .justify-content-md-around {
        justify-content: space-around !important;
    }
    .justify-content-md-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-md-start {
        align-items: flex-start !important;
    }
    .align-items-md-end {
        align-items: flex-end !important;
    }
    .align-items-md-center {
        align-items: center !important;
    }
    .align-items-md-baseline {
        align-items: baseline !important;
    }
    .align-items-md-stretch {
        align-items: stretch !important;
    }
    .align-content-md-start {
        align-content: flex-start !important;
    }
    .align-content-md-end {
        align-content: flex-end !important;
    }
    .align-content-md-center {
        align-content: center !important;
    }
    .align-content-md-between {
        align-content: space-between !important;
    }
    .align-content-md-around {
        align-content: space-around !important;
    }
    .align-content-md-stretch {
        align-content: stretch !important;
    }
    .align-self-md-auto {
        align-self: auto !important;
    }
    .align-self-md-start {
        align-self: flex-start !important;
    }
    .align-self-md-end {
        align-self: flex-end !important;
    }
    .align-self-md-center {
        align-self: center !important;
    }
    .align-self-md-baseline {
        align-self: baseline !important;
    }
    .align-self-md-stretch {
        align-self: stretch !important;
    }
    .order-md-first {
        order: -1 !important;
    }
    .order-md-0 {
        order: 0 !important;
    }
    .order-md-1 {
        order: 1 !important;
    }
    .order-md-2 {
        order: 2 !important;
    }
    .order-md-3 {
        order: 3 !important;
    }
    .order-md-4 {
        order: 4 !important;
    }
    .order-md-5 {
        order: 5 !important;
    }
    .order-md-last {
        order: 6 !important;
    }
    .m-md-0 {
        margin: 0 !important;
    }
    .m-md-1 {
        margin: 0.25rem !important;
    }
    .m-md-2 {
        margin: 0.5rem !important;
    }
    .m-md-3 {
        margin: 1rem !important;
    }
    .m-md-4 {
        margin: 1.5rem !important;
    }
    .m-md-5 {
        margin: 3rem !important;
    }
    .m-md-auto {
        margin: auto !important;
    }
    .mx-md-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-md-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-md-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-md-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-md-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-md-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-md-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-md-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-md-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-md-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-md-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-md-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-md-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-md-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-md-0 {
        margin-top: 0 !important;
    }
    .mt-md-1 {
        margin-top: 0.25rem !important;
    }
    .mt-md-2 {
        margin-top: 0.5rem !important;
    }
    .mt-md-3 {
        margin-top: 1rem !important;
    }
    .mt-md-4 {
        margin-top: 1.5rem !important;
    }
    .mt-md-5 {
        margin-top: 3rem !important;
    }
    .mt-md-auto {
        margin-top: auto !important;
    }
    .me-md-0 {
        margin-right: 0 !important;
    }
    .me-md-1 {
        margin-right: 0.25rem !important;
    }
    .me-md-2 {
        margin-right: 0.5rem !important;
    }
    .me-md-3 {
        margin-right: 1rem !important;
    }
    .me-md-4 {
        margin-right: 1.5rem !important;
    }
    .me-md-5 {
        margin-right: 3rem !important;
    }
    .me-md-auto {
        margin-right: auto !important;
    }
    .mb-md-0 {
        margin-bottom: 0 !important;
    }
    .mb-md-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-md-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-md-3 {
        margin-bottom: 1rem !important;
    }
    .mb-md-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-md-5 {
        margin-bottom: 3rem !important;
    }
    .mb-md-auto {
        margin-bottom: auto !important;
    }
    .ms-md-0 {
        margin-left: 0 !important;
    }
    .ms-md-1 {
        margin-left: 0.25rem !important;
    }
    .ms-md-2 {
        margin-left: 0.5rem !important;
    }
    .ms-md-3 {
        margin-left: 1rem !important;
    }
    .ms-md-4 {
        margin-left: 1.5rem !important;
    }
    .ms-md-5 {
        margin-left: 3rem !important;
    }
    .ms-md-auto {
        margin-left: auto !important;
    }
    .p-md-0 {
        padding: 0 !important;
    }
    .p-md-1 {
        padding: 0.25rem !important;
    }
    .p-md-2 {
        padding: 0.5rem !important;
    }
    .p-md-3 {
        padding: 1rem !important;
    }
    .p-md-4 {
        padding: 1.5rem !important;
    }
    .p-md-5 {
        padding: 3rem !important;
    }
    .px-md-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-md-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-md-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-md-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-md-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-md-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-md-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-md-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-md-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-md-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-md-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-md-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-md-0 {
        padding-top: 0 !important;
    }
    .pt-md-1 {
        padding-top: 0.25rem !important;
    }
    .pt-md-2 {
        padding-top: 0.5rem !important;
    }
    .pt-md-3 {
        padding-top: 1rem !important;
    }
    .pt-md-4 {
        padding-top: 1.5rem !important;
    }
    .pt-md-5 {
        padding-top: 3rem !important;
    }
    .pe-md-0 {
        padding-right: 0 !important;
    }
    .pe-md-1 {
        padding-right: 0.25rem !important;
    }
    .pe-md-2 {
        padding-right: 0.5rem !important;
    }
    .pe-md-3 {
        padding-right: 1rem !important;
    }
    .pe-md-4 {
        padding-right: 1.5rem !important;
    }
    .pe-md-5 {
        padding-right: 3rem !important;
    }
    .pb-md-0 {
        padding-bottom: 0 !important;
    }
    .pb-md-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-md-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-md-3 {
        padding-bottom: 1rem !important;
    }
    .pb-md-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-md-5 {
        padding-bottom: 3rem !important;
    }
    .ps-md-0 {
        padding-left: 0 !important;
    }
    .ps-md-1 {
        padding-left: 0.25rem !important;
    }
    .ps-md-2 {
        padding-left: 0.5rem !important;
    }
    .ps-md-3 {
        padding-left: 1rem !important;
    }
    .ps-md-4 {
        padding-left: 1.5rem !important;
    }
    .ps-md-5 {
        padding-left: 3rem !important;
    }
    .gap-md-0 {
        gap: 0 !important;
    }
    .gap-md-1 {
        gap: 0.25rem !important;
    }
    .gap-md-2 {
        gap: 0.5rem !important;
    }
    .gap-md-3 {
        gap: 1rem !important;
    }
    .gap-md-4 {
        gap: 1.5rem !important;
    }
    .gap-md-5 {
        gap: 3rem !important;
    }
    .text-md-start {
        text-align: left !important;
    }
    .text-md-end {
        text-align: right !important;
    }
    .text-md-center {
        text-align: center !important;
    }
}
@media (min-width: 992px) {
    .float-lg-start {
        float: left !important;
    }
    .float-lg-end {
        float: right !important;
    }
    .float-lg-none {
        float: none !important;
    }
    .d-lg-inline {
        display: inline !important;
    }
    .d-lg-inline-block {
        display: inline-block !important;
    }
    .d-lg-block {
        display: block !important;
    }
    .d-lg-grid {
        display: grid !important;
    }
    .d-lg-table {
        display: table !important;
    }
    .d-lg-table-row {
        display: table-row !important;
    }
    .d-lg-table-cell {
        display: table-cell !important;
    }
    .d-lg-flex {
        display: flex !important;
    }
    .d-lg-inline-flex {
        display: inline-flex !important;
    }
    .d-lg-none {
        display: none !important;
    }
    .flex-lg-fill {
        flex: 1 1 auto !important;
    }
    .flex-lg-row {
        flex-direction: row !important;
    }
    .flex-lg-column {
        flex-direction: column !important;
    }
    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }
    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-lg-start {
        justify-content: flex-start !important;
    }
    .justify-content-lg-end {
        justify-content: flex-end !important;
    }
    .justify-content-lg-center {
        justify-content: center !important;
    }
    .justify-content-lg-between {
        justify-content: space-between !important;
    }
    .justify-content-lg-around {
        justify-content: space-around !important;
    }
    .justify-content-lg-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-lg-start {
        align-items: flex-start !important;
    }
    .align-items-lg-end {
        align-items: flex-end !important;
    }
    .align-items-lg-center {
        align-items: center !important;
    }
    .align-items-lg-baseline {
        align-items: baseline !important;
    }
    .align-items-lg-stretch {
        align-items: stretch !important;
    }
    .align-content-lg-start {
        align-content: flex-start !important;
    }
    .align-content-lg-end {
        align-content: flex-end !important;
    }
    .align-content-lg-center {
        align-content: center !important;
    }
    .align-content-lg-between {
        align-content: space-between !important;
    }
    .align-content-lg-around {
        align-content: space-around !important;
    }
    .align-content-lg-stretch {
        align-content: stretch !important;
    }
    .align-self-lg-auto {
        align-self: auto !important;
    }
    .align-self-lg-start {
        align-self: flex-start !important;
    }
    .align-self-lg-end {
        align-self: flex-end !important;
    }
    .align-self-lg-center {
        align-self: center !important;
    }
    .align-self-lg-baseline {
        align-self: baseline !important;
    }
    .align-self-lg-stretch {
        align-self: stretch !important;
    }
    .order-lg-first {
        order: -1 !important;
    }
    .order-lg-0 {
        order: 0 !important;
    }
    .order-lg-1 {
        order: 1 !important;
    }
    .order-lg-2 {
        order: 2 !important;
    }
    .order-lg-3 {
        order: 3 !important;
    }
    .order-lg-4 {
        order: 4 !important;
    }
    .order-lg-5 {
        order: 5 !important;
    }
    .order-lg-last {
        order: 6 !important;
    }
    .m-lg-0 {
        margin: 0 !important;
    }
    .m-lg-1 {
        margin: 0.25rem !important;
    }
    .m-lg-2 {
        margin: 0.5rem !important;
    }
    .m-lg-3 {
        margin: 1rem !important;
    }
    .m-lg-4 {
        margin: 1.5rem !important;
    }
    .m-lg-5 {
        margin: 3rem !important;
    }
    .m-lg-auto {
        margin: auto !important;
    }
    .mx-lg-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-lg-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-lg-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-lg-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-lg-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-lg-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-lg-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-lg-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-lg-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-lg-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-lg-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-lg-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-lg-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-lg-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-lg-0 {
        margin-top: 0 !important;
    }
    .mt-lg-1 {
        margin-top: 0.25rem !important;
    }
    .mt-lg-2 {
        margin-top: 0.5rem !important;
    }
    .mt-lg-3 {
        margin-top: 1rem !important;
    }
    .mt-lg-4 {
        margin-top: 1.5rem !important;
    }
    .mt-lg-5 {
        margin-top: 3rem !important;
    }
    .mt-lg-auto {
        margin-top: auto !important;
    }
    .me-lg-0 {
        margin-right: 0 !important;
    }
    .me-lg-1 {
        margin-right: 0.25rem !important;
    }
    .me-lg-2 {
        margin-right: 0.5rem !important;
    }
    .me-lg-3 {
        margin-right: 1rem !important;
    }
    .me-lg-4 {
        margin-right: 1.5rem !important;
    }
    .me-lg-5 {
        margin-right: 3rem !important;
    }
    .me-lg-auto {
        margin-right: auto !important;
    }
    .mb-lg-0 {
        margin-bottom: 0 !important;
    }
    .mb-lg-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-lg-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-lg-3 {
        margin-bottom: 1rem !important;
    }
    .mb-lg-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-lg-5 {
        margin-bottom: 3rem !important;
    }
    .mb-lg-auto {
        margin-bottom: auto !important;
    }
    .ms-lg-0 {
        margin-left: 0 !important;
    }
    .ms-lg-1 {
        margin-left: 0.25rem !important;
    }
    .ms-lg-2 {
        margin-left: 0.5rem !important;
    }
    .ms-lg-3 {
        margin-left: 1rem !important;
    }
    .ms-lg-4 {
        margin-left: 1.5rem !important;
    }
    .ms-lg-5 {
        margin-left: 3rem !important;
    }
    .ms-lg-auto {
        margin-left: auto !important;
    }
    .p-lg-0 {
        padding: 0 !important;
    }
    .p-lg-1 {
        padding: 0.25rem !important;
    }
    .p-lg-2 {
        padding: 0.5rem !important;
    }
    .p-lg-3 {
        padding: 1rem !important;
    }
    .p-lg-4 {
        padding: 1.5rem !important;
    }
    .p-lg-5 {
        padding: 3rem !important;
    }
    .px-lg-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-lg-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-lg-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-lg-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-lg-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-lg-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-lg-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-lg-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-lg-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-lg-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-lg-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-lg-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-lg-0 {
        padding-top: 0 !important;
    }
    .pt-lg-1 {
        padding-top: 0.25rem !important;
    }
    .pt-lg-2 {
        padding-top: 0.5rem !important;
    }
    .pt-lg-3 {
        padding-top: 1rem !important;
    }
    .pt-lg-4 {
        padding-top: 1.5rem !important;
    }
    .pt-lg-5 {
        padding-top: 3rem !important;
    }
    .pe-lg-0 {
        padding-right: 0 !important;
    }
    .pe-lg-1 {
        padding-right: 0.25rem !important;
    }
    .pe-lg-2 {
        padding-right: 0.5rem !important;
    }
    .pe-lg-3 {
        padding-right: 1rem !important;
    }
    .pe-lg-4 {
        padding-right: 1.5rem !important;
    }
    .pe-lg-5 {
        padding-right: 3rem !important;
    }
    .pb-lg-0 {
        padding-bottom: 0 !important;
    }
    .pb-lg-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-lg-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-lg-3 {
        padding-bottom: 1rem !important;
    }
    .pb-lg-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-lg-5 {
        padding-bottom: 3rem !important;
    }
    .ps-lg-0 {
        padding-left: 0 !important;
    }
    .ps-lg-1 {
        padding-left: 0.25rem !important;
    }
    .ps-lg-2 {
        padding-left: 0.5rem !important;
    }
    .ps-lg-3 {
        padding-left: 1rem !important;
    }
    .ps-lg-4 {
        padding-left: 1.5rem !important;
    }
    .ps-lg-5 {
        padding-left: 3rem !important;
    }
    .gap-lg-0 {
        gap: 0 !important;
    }
    .gap-lg-1 {
        gap: 0.25rem !important;
    }
    .gap-lg-2 {
        gap: 0.5rem !important;
    }
    .gap-lg-3 {
        gap: 1rem !important;
    }
    .gap-lg-4 {
        gap: 1.5rem !important;
    }
    .gap-lg-5 {
        gap: 3rem !important;
    }
    .text-lg-start {
        text-align: left !important;
    }
    .text-lg-end {
        text-align: right !important;
    }
    .text-lg-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .float-xl-start {
        float: left !important;
    }
    .float-xl-end {
        float: right !important;
    }
    .float-xl-none {
        float: none !important;
    }
    .d-xl-inline {
        display: inline !important;
    }
    .d-xl-inline-block {
        display: inline-block !important;
    }
    .d-xl-block {
        display: block !important;
    }
    .d-xl-grid {
        display: grid !important;
    }
    .d-xl-table {
        display: table !important;
    }
    .d-xl-table-row {
        display: table-row !important;
    }
    .d-xl-table-cell {
        display: table-cell !important;
    }
    .d-xl-flex {
        display: flex !important;
    }
    .d-xl-inline-flex {
        display: inline-flex !important;
    }
    .d-xl-none {
        display: none !important;
    }
    .flex-xl-fill {
        flex: 1 1 auto !important;
    }
    .flex-xl-row {
        flex-direction: row !important;
    }
    .flex-xl-column {
        flex-direction: column !important;
    }
    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }
    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-xl-start {
        justify-content: flex-start !important;
    }
    .justify-content-xl-end {
        justify-content: flex-end !important;
    }
    .justify-content-xl-center {
        justify-content: center !important;
    }
    .justify-content-xl-between {
        justify-content: space-between !important;
    }
    .justify-content-xl-around {
        justify-content: space-around !important;
    }
    .justify-content-xl-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-xl-start {
        align-items: flex-start !important;
    }
    .align-items-xl-end {
        align-items: flex-end !important;
    }
    .align-items-xl-center {
        align-items: center !important;
    }
    .align-items-xl-baseline {
        align-items: baseline !important;
    }
    .align-items-xl-stretch {
        align-items: stretch !important;
    }
    .align-content-xl-start {
        align-content: flex-start !important;
    }
    .align-content-xl-end {
        align-content: flex-end !important;
    }
    .align-content-xl-center {
        align-content: center !important;
    }
    .align-content-xl-between {
        align-content: space-between !important;
    }
    .align-content-xl-around {
        align-content: space-around !important;
    }
    .align-content-xl-stretch {
        align-content: stretch !important;
    }
    .align-self-xl-auto {
        align-self: auto !important;
    }
    .align-self-xl-start {
        align-self: flex-start !important;
    }
    .align-self-xl-end {
        align-self: flex-end !important;
    }
    .align-self-xl-center {
        align-self: center !important;
    }
    .align-self-xl-baseline {
        align-self: baseline !important;
    }
    .align-self-xl-stretch {
        align-self: stretch !important;
    }
    .order-xl-first {
        order: -1 !important;
    }
    .order-xl-0 {
        order: 0 !important;
    }
    .order-xl-1 {
        order: 1 !important;
    }
    .order-xl-2 {
        order: 2 !important;
    }
    .order-xl-3 {
        order: 3 !important;
    }
    .order-xl-4 {
        order: 4 !important;
    }
    .order-xl-5 {
        order: 5 !important;
    }
    .order-xl-last {
        order: 6 !important;
    }
    .m-xl-0 {
        margin: 0 !important;
    }
    .m-xl-1 {
        margin: 0.25rem !important;
    }
    .m-xl-2 {
        margin: 0.5rem !important;
    }
    .m-xl-3 {
        margin: 1rem !important;
    }
    .m-xl-4 {
        margin: 1.5rem !important;
    }
    .m-xl-5 {
        margin: 3rem !important;
    }
    .m-xl-auto {
        margin: auto !important;
    }
    .mx-xl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-xl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-xl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-xl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-xl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-xl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-xl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-xl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-xl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-xl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-xl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-xl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-xl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-xl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-xl-0 {
        margin-top: 0 !important;
    }
    .mt-xl-1 {
        margin-top: 0.25rem !important;
    }
    .mt-xl-2 {
        margin-top: 0.5rem !important;
    }
    .mt-xl-3 {
        margin-top: 1rem !important;
    }
    .mt-xl-4 {
        margin-top: 1.5rem !important;
    }
    .mt-xl-5 {
        margin-top: 3rem !important;
    }
    .mt-xl-auto {
        margin-top: auto !important;
    }
    .me-xl-0 {
        margin-right: 0 !important;
    }
    .me-xl-1 {
        margin-right: 0.25rem !important;
    }
    .me-xl-2 {
        margin-right: 0.5rem !important;
    }
    .me-xl-3 {
        margin-right: 1rem !important;
    }
    .me-xl-4 {
        margin-right: 1.5rem !important;
    }
    .me-xl-5 {
        margin-right: 3rem !important;
    }
    .me-xl-auto {
        margin-right: auto !important;
    }
    .mb-xl-0 {
        margin-bottom: 0 !important;
    }
    .mb-xl-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-xl-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-xl-3 {
        margin-bottom: 1rem !important;
    }
    .mb-xl-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-xl-5 {
        margin-bottom: 3rem !important;
    }
    .mb-xl-auto {
        margin-bottom: auto !important;
    }
    .ms-xl-0 {
        margin-left: 0 !important;
    }
    .ms-xl-1 {
        margin-left: 0.25rem !important;
    }
    .ms-xl-2 {
        margin-left: 0.5rem !important;
    }
    .ms-xl-3 {
        margin-left: 1rem !important;
    }
    .ms-xl-4 {
        margin-left: 1.5rem !important;
    }
    .ms-xl-5 {
        margin-left: 3rem !important;
    }
    .ms-xl-auto {
        margin-left: auto !important;
    }
    .p-xl-0 {
        padding: 0 !important;
    }
    .p-xl-1 {
        padding: 0.25rem !important;
    }
    .p-xl-2 {
        padding: 0.5rem !important;
    }
    .p-xl-3 {
        padding: 1rem !important;
    }
    .p-xl-4 {
        padding: 1.5rem !important;
    }
    .p-xl-5 {
        padding: 3rem !important;
    }
    .px-xl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-xl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-xl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-xl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-xl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-xl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-xl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-xl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-xl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-xl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-xl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-xl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-xl-0 {
        padding-top: 0 !important;
    }
    .pt-xl-1 {
        padding-top: 0.25rem !important;
    }
    .pt-xl-2 {
        padding-top: 0.5rem !important;
    }
    .pt-xl-3 {
        padding-top: 1rem !important;
    }
    .pt-xl-4 {
        padding-top: 1.5rem !important;
    }
    .pt-xl-5 {
        padding-top: 3rem !important;
    }
    .pe-xl-0 {
        padding-right: 0 !important;
    }
    .pe-xl-1 {
        padding-right: 0.25rem !important;
    }
    .pe-xl-2 {
        padding-right: 0.5rem !important;
    }
    .pe-xl-3 {
        padding-right: 1rem !important;
    }
    .pe-xl-4 {
        padding-right: 1.5rem !important;
    }
    .pe-xl-5 {
        padding-right: 3rem !important;
    }
    .pb-xl-0 {
        padding-bottom: 0 !important;
    }
    .pb-xl-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-xl-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-xl-3 {
        padding-bottom: 1rem !important;
    }
    .pb-xl-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-xl-5 {
        padding-bottom: 3rem !important;
    }
    .ps-xl-0 {
        padding-left: 0 !important;
    }
    .ps-xl-1 {
        padding-left: 0.25rem !important;
    }
    .ps-xl-2 {
        padding-left: 0.5rem !important;
    }
    .ps-xl-3 {
        padding-left: 1rem !important;
    }
    .ps-xl-4 {
        padding-left: 1.5rem !important;
    }
    .ps-xl-5 {
        padding-left: 3rem !important;
    }
    .gap-xl-0 {
        gap: 0 !important;
    }
    .gap-xl-1 {
        gap: 0.25rem !important;
    }
    .gap-xl-2 {
        gap: 0.5rem !important;
    }
    .gap-xl-3 {
        gap: 1rem !important;
    }
    .gap-xl-4 {
        gap: 1.5rem !important;
    }
    .gap-xl-5 {
        gap: 3rem !important;
    }
    .text-xl-start {
        text-align: left !important;
    }
    .text-xl-end {
        text-align: right !important;
    }
    .text-xl-center {
        text-align: center !important;
    }
}
@media (min-width: 1400px) {
    .float-xxl-start {
        float: left !important;
    }
    .float-xxl-end {
        float: right !important;
    }
    .float-xxl-none {
        float: none !important;
    }
    .d-xxl-inline {
        display: inline !important;
    }
    .d-xxl-inline-block {
        display: inline-block !important;
    }
    .d-xxl-block {
        display: block !important;
    }
    .d-xxl-grid {
        display: grid !important;
    }
    .d-xxl-table {
        display: table !important;
    }
    .d-xxl-table-row {
        display: table-row !important;
    }
    .d-xxl-table-cell {
        display: table-cell !important;
    }
    .d-xxl-flex {
        display: flex !important;
    }
    .d-xxl-inline-flex {
        display: inline-flex !important;
    }
    .d-xxl-none {
        display: none !important;
    }
    .flex-xxl-fill {
        flex: 1 1 auto !important;
    }
    .flex-xxl-row {
        flex-direction: row !important;
    }
    .flex-xxl-column {
        flex-direction: column !important;
    }
    .flex-xxl-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-xxl-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-xxl-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-xxl-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-xxl-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-xxl-shrink-1 {
        flex-shrink: 1 !important;
    }
    .flex-xxl-wrap {
        flex-wrap: wrap !important;
    }
    .flex-xxl-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-xxl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .justify-content-xxl-start {
        justify-content: flex-start !important;
    }
    .justify-content-xxl-end {
        justify-content: flex-end !important;
    }
    .justify-content-xxl-center {
        justify-content: center !important;
    }
    .justify-content-xxl-between {
        justify-content: space-between !important;
    }
    .justify-content-xxl-around {
        justify-content: space-around !important;
    }
    .justify-content-xxl-evenly {
        justify-content: space-evenly !important;
    }
    .align-items-xxl-start {
        align-items: flex-start !important;
    }
    .align-items-xxl-end {
        align-items: flex-end !important;
    }
    .align-items-xxl-center {
        align-items: center !important;
    }
    .align-items-xxl-baseline {
        align-items: baseline !important;
    }
    .align-items-xxl-stretch {
        align-items: stretch !important;
    }
    .align-content-xxl-start {
        align-content: flex-start !important;
    }
    .align-content-xxl-end {
        align-content: flex-end !important;
    }
    .align-content-xxl-center {
        align-content: center !important;
    }
    .align-content-xxl-between {
        align-content: space-between !important;
    }
    .align-content-xxl-around {
        align-content: space-around !important;
    }
    .align-content-xxl-stretch {
        align-content: stretch !important;
    }
    .align-self-xxl-auto {
        align-self: auto !important;
    }
    .align-self-xxl-start {
        align-self: flex-start !important;
    }
    .align-self-xxl-end {
        align-self: flex-end !important;
    }
    .align-self-xxl-center {
        align-self: center !important;
    }
    .align-self-xxl-baseline {
        align-self: baseline !important;
    }
    .align-self-xxl-stretch {
        align-self: stretch !important;
    }
    .order-xxl-first {
        order: -1 !important;
    }
    .order-xxl-0 {
        order: 0 !important;
    }
    .order-xxl-1 {
        order: 1 !important;
    }
    .order-xxl-2 {
        order: 2 !important;
    }
    .order-xxl-3 {
        order: 3 !important;
    }
    .order-xxl-4 {
        order: 4 !important;
    }
    .order-xxl-5 {
        order: 5 !important;
    }
    .order-xxl-last {
        order: 6 !important;
    }
    .m-xxl-0 {
        margin: 0 !important;
    }
    .m-xxl-1 {
        margin: 0.25rem !important;
    }
    .m-xxl-2 {
        margin: 0.5rem !important;
    }
    .m-xxl-3 {
        margin: 1rem !important;
    }
    .m-xxl-4 {
        margin: 1.5rem !important;
    }
    .m-xxl-5 {
        margin: 3rem !important;
    }
    .m-xxl-auto {
        margin: auto !important;
    }
    .mx-xxl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .mx-xxl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }
    .mx-xxl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }
    .mx-xxl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }
    .mx-xxl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
    }
    .mx-xxl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }
    .mx-xxl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }
    .my-xxl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .my-xxl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }
    .my-xxl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }
    .my-xxl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    .my-xxl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .my-xxl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }
    .my-xxl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }
    .mt-xxl-0 {
        margin-top: 0 !important;
    }
    .mt-xxl-1 {
        margin-top: 0.25rem !important;
    }
    .mt-xxl-2 {
        margin-top: 0.5rem !important;
    }
    .mt-xxl-3 {
        margin-top: 1rem !important;
    }
    .mt-xxl-4 {
        margin-top: 1.5rem !important;
    }
    .mt-xxl-5 {
        margin-top: 3rem !important;
    }
    .mt-xxl-auto {
        margin-top: auto !important;
    }
    .me-xxl-0 {
        margin-right: 0 !important;
    }
    .me-xxl-1 {
        margin-right: 0.25rem !important;
    }
    .me-xxl-2 {
        margin-right: 0.5rem !important;
    }
    .me-xxl-3 {
        margin-right: 1rem !important;
    }
    .me-xxl-4 {
        margin-right: 1.5rem !important;
    }
    .me-xxl-5 {
        margin-right: 3rem !important;
    }
    .me-xxl-auto {
        margin-right: auto !important;
    }
    .mb-xxl-0 {
        margin-bottom: 0 !important;
    }
    .mb-xxl-1 {
        margin-bottom: 0.25rem !important;
    }
    .mb-xxl-2 {
        margin-bottom: 0.5rem !important;
    }
    .mb-xxl-3 {
        margin-bottom: 1rem !important;
    }
    .mb-xxl-4 {
        margin-bottom: 1.5rem !important;
    }
    .mb-xxl-5 {
        margin-bottom: 3rem !important;
    }
    .mb-xxl-auto {
        margin-bottom: auto !important;
    }
    .ms-xxl-0 {
        margin-left: 0 !important;
    }
    .ms-xxl-1 {
        margin-left: 0.25rem !important;
    }
    .ms-xxl-2 {
        margin-left: 0.5rem !important;
    }
    .ms-xxl-3 {
        margin-left: 1rem !important;
    }
    .ms-xxl-4 {
        margin-left: 1.5rem !important;
    }
    .ms-xxl-5 {
        margin-left: 3rem !important;
    }
    .ms-xxl-auto {
        margin-left: auto !important;
    }
    .p-xxl-0 {
        padding: 0 !important;
    }
    .p-xxl-1 {
        padding: 0.25rem !important;
    }
    .p-xxl-2 {
        padding: 0.5rem !important;
    }
    .p-xxl-3 {
        padding: 1rem !important;
    }
    .p-xxl-4 {
        padding: 1.5rem !important;
    }
    .p-xxl-5 {
        padding: 3rem !important;
    }
    .px-xxl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }
    .px-xxl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }
    .px-xxl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    .px-xxl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
    .px-xxl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }
    .px-xxl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }
    .py-xxl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .py-xxl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-xxl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-xxl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .py-xxl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }
    .py-xxl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .pt-xxl-0 {
        padding-top: 0 !important;
    }
    .pt-xxl-1 {
        padding-top: 0.25rem !important;
    }
    .pt-xxl-2 {
        padding-top: 0.5rem !important;
    }
    .pt-xxl-3 {
        padding-top: 1rem !important;
    }
    .pt-xxl-4 {
        padding-top: 1.5rem !important;
    }
    .pt-xxl-5 {
        padding-top: 3rem !important;
    }
    .pe-xxl-0 {
        padding-right: 0 !important;
    }
    .pe-xxl-1 {
        padding-right: 0.25rem !important;
    }
    .pe-xxl-2 {
        padding-right: 0.5rem !important;
    }
    .pe-xxl-3 {
        padding-right: 1rem !important;
    }
    .pe-xxl-4 {
        padding-right: 1.5rem !important;
    }
    .pe-xxl-5 {
        padding-right: 3rem !important;
    }
    .pb-xxl-0 {
        padding-bottom: 0 !important;
    }
    .pb-xxl-1 {
        padding-bottom: 0.25rem !important;
    }
    .pb-xxl-2 {
        padding-bottom: 0.5rem !important;
    }
    .pb-xxl-3 {
        padding-bottom: 1rem !important;
    }
    .pb-xxl-4 {
        padding-bottom: 1.5rem !important;
    }
    .pb-xxl-5 {
        padding-bottom: 3rem !important;
    }
    .ps-xxl-0 {
        padding-left: 0 !important;
    }
    .ps-xxl-1 {
        padding-left: 0.25rem !important;
    }
    .ps-xxl-2 {
        padding-left: 0.5rem !important;
    }
    .ps-xxl-3 {
        padding-left: 1rem !important;
    }
    .ps-xxl-4 {
        padding-left: 1.5rem !important;
    }
    .ps-xxl-5 {
        padding-left: 3rem !important;
    }
    .gap-xxl-0 {
        gap: 0 !important;
    }
    .gap-xxl-1 {
        gap: 0.25rem !important;
    }
    .gap-xxl-2 {
        gap: 0.5rem !important;
    }
    .gap-xxl-3 {
        gap: 1rem !important;
    }
    .gap-xxl-4 {
        gap: 1.5rem !important;
    }
    .gap-xxl-5 {
        gap: 3rem !important;
    }
    .text-xxl-start {
        text-align: left !important;
    }
    .text-xxl-end {
        text-align: right !important;
    }
    .text-xxl-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .fs-1 {
        font-size: 2.5rem !important;
    }
    .fs-2 {
        font-size: 2rem !important;
    }
    .fs-3 {
        font-size: 1.75rem !important;
    }
    .fs-4 {
        font-size: 1.5rem !important;
    }
}
@media print {
    .d-print-inline {
        display: inline !important;
    }
    .d-print-inline-block {
        display: inline-block !important;
    }
    .d-print-block {
        display: block !important;
    }
    .d-print-grid {
        display: grid !important;
    }
    .d-print-table {
        display: table !important;
    }
    .d-print-table-row {
        display: table-row !important;
    }
    .d-print-table-cell {
        display: table-cell !important;
    }
    .d-print-flex {
        display: flex !important;
    }
    .d-print-inline-flex {
        display: inline-flex !important;
    }
    .d-print-none {
        display: none !important;
    }
}
html,
body {
    height: 100%;
}

#layoutAuthentication {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
#layoutAuthentication #layoutAuthentication_content {
    min-width: 0;
    flex-grow: 1;
}
#layoutAuthentication #layoutAuthentication_footer {
    min-width: 0;
}

#layoutSidenav {
    display: flex;
}
#layoutSidenav #layoutSidenav_nav {
    flex-basis: 225px;
    flex-shrink: 0;
    transition: transform 0.15s ease-in-out;
    z-index: 1038;
    transform: translateX(-225px);
}
#layoutSidenav #layoutSidenav_content {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-width: 0;
    flex-grow: 1;
    min-height: calc(100vh - 56px);
    margin-left: -225px;
}

.sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
    transform: translateX(0);
}
.sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #000;
    z-index: 1037;
    opacity: 0.5;
    transition: opacity 0.3s ease-in-out;
}

@media (min-width: 992px) {
    #layoutSidenav #layoutSidenav_nav {
        transform: translateX(0);
    }
    #layoutSidenav #layoutSidenav_content {
        margin-left: 0;
        transition: margin 0.15s ease-in-out;
    }
    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
        transform: translateX(-225px);
    }
    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content {
        margin-left: -225px;
    }
    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
        display: none;
    }
}
.sb-nav-fixed .sb-topnav {
    z-index: 1039;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav {
    width: 225px;
    height: 100vh;
    z-index: 1038;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav {
    padding-top: 56px;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav .sb-sidenav-menu {
    overflow-y: auto;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_content {
    padding-left: 225px;
    top: 56px;
}

#layoutError {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
#layoutError #layoutError_content {
    min-width: 0;
    flex-grow: 1;
}
#layoutError #layoutError_footer {
    min-width: 0;
}

.img-error {
    max-width: 20rem;
}

.nav .nav-link .sb-nav-link-icon,
.sb-sidenav-menu .nav-link .sb-nav-link-icon {
    margin-right: 0.5rem;
}

.sb-topnav {
    padding-left: 0;
    height: 56px;
    z-index: 1039;
}
.sb-topnav .navbar-brand {
    width: 225px;
    margin: 0;
}
.sb-topnav.navbar-dark #sidebarToggle {
    color: rgba(255, 255, 255, 0.5);
}
.sb-topnav.navbar-light #sidebarToggle {
    color: #212529;
}

.sb-sidenav {
    display: flex;
    flex-direction: column;
    height: 100%;
    flex-wrap: nowrap;
}
.sb-sidenav .sb-sidenav-menu {
    flex-grow: 1;
}
.sb-sidenav .sb-sidenav-menu .nav {
    flex-direction: column;
    flex-wrap: nowrap;
}
.sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-heading {
    padding: 1.75rem 1rem 0.75rem;
    font-size: 0.75rem;
    font-weight: bold;
    text-transform: uppercase;
}
.sb-sidenav .sb-sidenav-menu .nav .nav-link {
    display: flex;
    align-items: center;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    position: relative;
}
.sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-nav-link-icon {
    font-size: 0.9rem;
}
.sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-sidenav-collapse-arrow {
    display: inline-block;
    margin-left: auto;
    transition: transform 0.15s ease;
}
.sb-sidenav
    .sb-sidenav-menu
    .nav
    .nav-link.collapsed
    .sb-sidenav-collapse-arrow {
    transform: rotate(-90deg);
}
.sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-nested {
    margin-left: 1.5rem;
    flex-direction: column;
}
.sb-sidenav .sb-sidenav-footer {
    padding: 0.75rem;
    flex-shrink: 0;
}

.sb-sidenav-dark {
    background-color: #212529;
    color: rgba(255, 255, 255, 0.5);
}
.sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
    color: rgba(255, 255, 255, 0.25);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link {
    color: rgba(255, 255, 255, 0.5);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-nav-link-icon {
    color: rgba(255, 255, 255, 0.25);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
    color: rgba(255, 255, 255, 0.25);
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link:hover {
    color: #fff;
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link.active {
    color: #fff;
}
.sb-sidenav-dark .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
    color: #fff;
}
.sb-sidenav-dark .sb-sidenav-footer {
    background-color: #343a40;
}

.sb-sidenav-light {
    background-color: #f8f9fa;
    color: #212529;
}
.sb-sidenav-light .sb-sidenav-menu .sb-sidenav-menu-heading {
    color: #adb5bd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link {
    color: #212529;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link .sb-nav-link-icon {
    color: #adb5bd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
    color: #adb5bd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link:hover {
    color: #0d6efd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link.active {
    color: #0d6efd;
}
.sb-sidenav-light .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
    color: #0d6efd;
}
.sb-sidenav-light .sb-sidenav-footer {
    background-color: #e9ecef;
}

.datatable-wrapper .datatable-container {
    font-size: 0.875rem;
}

.datatable-wrapper.no-header .datatable-container {
    border-top: none;
}

.datatable-wrapper.no-footer .datatable-container {
    border-bottom: none;
}

.datatable-top {
    padding: 0 0 1rem;
}

.datatable-bottom {
    padding: 0;
}

.datatable-top > nav:first-child,
.datatable-top > div:first-child,
.datatable-bottom > nav:first-child,
.datatable-bottom > div:first-child {
    float: left;
}

.datatable-top > nav:last-child,
.datatable-top > div:last-child,
.datatable-bottom > nav:last-child,
.datatable-bottom > div:last-child {
    float: right;
}

.datatable-selector {
    width: auto;
    display: inline-block;
    padding-left: 1.125rem;
    padding-right: 2.125rem;
    margin-right: 0.25rem;
}

.datatable-info {
    margin: 7px 0;
}

/* PAGER */
.datatable-pagination a:hover {
    background-color: #e9ecef;
}

.datatable-pagination .active a,
.datatable-pagination .active a:focus,
.datatable-pagination .active a:hover {
    background-color: #0d6efd;
}

.datatable-pagination .ellipsis a,
.datatable-pagination .disabled a,
.datatable-pagination .disabled a:focus,
.datatable-pagination .disabled a:hover {
    cursor: not-allowed;
}

.datatable-pagination .disabled a,
.datatable-pagination .disabled a:focus,
.datatable-pagination .disabled a:hover {
    cursor: not-allowed;
    opacity: 0.4;
}

.datatable-pagination .pager a {
    font-weight: bold;
}

/* TABLE */
.datatable-table {
    border-collapse: collapse;
}

.datatable-table > tbody > tr > td,
.datatable-table > tbody > tr > th,
.datatable-table > tfoot > tr > td,
.datatable-table > tfoot > tr > th,
.datatable-table > thead > tr > td,
.datatable-table > thead > tr > th {
    vertical-align: top;
    padding: 0.5rem 0.5rem;
}

.datatable-table > thead > tr > th {
    vertical-align: bottom;
    text-align: left;
    border-bottom: none;
}

.datatable-table > tfoot > tr > th {
    vertical-align: bottom;
    text-align: left;
}

.datatable-table th {
    vertical-align: bottom;
    text-align: left;
}

.datatable-table th a {
    text-decoration: none;
    color: inherit;
}

.datatable-sorter {
    display: inline-block;
    height: 100%;
    position: relative;
    width: 100%;
    padding-right: 1rem;
}

.datatable-sorter::before,
.datatable-sorter::after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    right: 4px;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    opacity: 0.2;
}

.datatable-sorter::before {
    bottom: 4px;
}

.datatable-sorter::after {
    top: 0px;
}

.asc .datatable-sorter::after,
.desc .datatable-sorter::before {
    opacity: 0.6;
}

.datatables-empty {
    text-align: center;
}

.datatable-top::after,
.datatable-bottom::after {
    clear: both;
    content: ' ';
    display: table;
}

.datatable-pagination li.datatable-hidden {
    visibility: visible;
}

.btn-datatable {
    height: 20px !important;
    width: 20px !important;
    font-size: 0.75rem;
    border-radius: 0.375rem !important;
}
3</style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">FLYBOX</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                 aria-expanded="false">{{ Auth::user()->name }}</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="GET"> <!-- Cambiado a GET -->
                        @csrf
                        <button class="btn btn-black" type="submit">Logout</button>
                    </form>                           
                </li>
            </ul>
        </li>
    </ul>
    </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">PAQUETERIA</div>
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="{{route('tarifaenvio')}}">
                                <div class="sb-nav-link-icon"></div>
                                Crear envio
                            </a>
                            <a class="nav-link" href="{{route('paqueteria')}}">
                                <div class="sb-nav-link-icon"></div>
                                Paqueteria
                            </a>
                            <a class="nav-link" href="{{route('rastreador')}}">
                                <div class="background-color"></div>
                                Rastreador
                            </a>
                        </div>
                    </div>
            </div>

            <div id="layoutSidenav_content">
                <main>

                </main>
            </div>
            
            


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        crossorigin="anonymous"></script>
                    <script src="js/scripts.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                        crossorigin="anonymous"></script>
                    <script src="assets/demo/chart-area-demo.js"></script>
                    <script src="assets/demo/chart-bar-demo.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
                        crossorigin="anonymous"></script>
                    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>