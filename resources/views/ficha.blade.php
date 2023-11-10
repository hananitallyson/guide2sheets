<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-screen font-sans text-gray-900 antialiased overflow-hidden">
        <main class="mt-6 flex flex-col justify-center items-center h-3/4">
            <svg class="w-96" id="Camada_1" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 1000">
                <defs>
                  <style>
                    .cls-1, .cls-2 {
                      fill: red;
                    }

                    .cls-1, .cls-3 {
                      stroke: #fff;
                      stroke-miterlimit: 10;
                      stroke-width: 5px;
                    }

                    .cls-2, .cls-4 {
                      stroke-width: 0px;
                    }

                    .cls-4 {
                      fill: #fff;
                    }
                  </style>
                </defs>
                <g>
                  <path class="cls-2" d="m992.59,561.08l15.19-4.88c5.75-1.85,14.87-10.98,19.04-18.31-5.52,1.38-12.65,2.18-17.85,2.18-1.91,0-3.51-.11-4.78-.32l-8.93-1.49,8.43-3.3c5.67-2.22,19.77-19.04,15.39-38.88-4.07-18.86-23.09-25.55-38.14-25.55-10.27,0-20.25,2.83-27.38,7.75l-6.18,4.27,2.39-7.13c6.28-18.72,23.52-35.92,38.72-44.06-7.82-2.39-16.57-4.49-25.66-6.13l-5.32-.96,4.18-3.43c8.63-7.09,25.31-13.28,40.84-16.74-22.33,1.03-49.32,8.91-65.6,25,8.63.95,21.69,3.53,27.41,5.4l9.39,3.07-9.72,1.77c-29.35,5.35-70.13,33.14-81.65,45.9l-5.94,6.57,1.63-8.7c.68-3.64,1.42-7.15,2.14-10.54,2.63-12.4,4.9-23.11,1.94-30.68-3.99-10.12-14.01-15.04-30.64-15.04-7.38,0-16.09,1.02-25.9,3.04l-8.04,1.65,5.75-5.85c12.32-12.54,30.67-22.37,46.87-31.05,14.22-7.62,27.66-14.82,29.07-20.28,2.69-10.63-20.4-31.71-30.33-36.16l-9.72-4.35,10.64-.43c3.27-.13,6.54-.2,9.7-.2,18.25,0,30.73,2.16,37.56,3.8-6.99-13.9-8.7-32.38-4-47.13l2.06-6.47,2.62,6.27c9.75,23.3,32.89,36.47,55.26,49.21,13.46,7.66,26.45,15.05,36.22,24.35-6.32-9.32-15.73-18.29-26.54-24.76l-.73-.44-.31-.8c-10-25.66-2.81-72.56,9.8-86.23l4.77-5.17-.43,7.02c-2.38,38.57,29.81,67.24,60.94,94.97,9.42,8.39,18.6,16.57,26.59,24.82-10.13-12.91-22.71-24.2-34.4-34.69-9.06-8.13-17.62-15.81-24.1-23.42l-.25-.29-.15-.35c-7.55-17.87-1.4-46.28,6.26-55.97l4.86-6.14-.4,7.82c-1.85,36.22,30.85,65.66,57.11,89.32,4.79,4.32,9.32,8.4,13.34,12.26,27.32,26.55,39.3,52.14,35.65,76.09,6.22,2.34,13.39,8.13,13.92,17.21,7.63-3.42,14.95-12.02,16.7-17.27l3.36-10.07,1.49,10.51c4.9,34.57-15.91,70.22-37.64,80.59l-5.62,2.68,2.2-5.82c.05-.14,5.25-14.47-3.67-25.15-8.1-9.86-30.97-10.62-37.78-10.62-2.43,0-4.84.08-6.79.23l-5.16.39,2.9-4.29c2.78-4.1,9.98-17.16,6.78-23.07-1.24-2.32-8.07-4.79-23.57-4.79-12.83,0-28.37,1.76-41.35,4.46,7.41.78,14.88,2.13,18.73,3.74l2.82,1.17-1.71,2.53c-3.92,5.81-12.36,27.96-6.92,33.52.87.85,1.78,1.26,2.83,1.26,3.41,0,7.38-4.2,8.63-5.82l8.83-11.5-4.47,13.79c-3.31,10.23-6.44,26.18-3.01,29.61,1.64,1.6,4.29,2.42,7.85,2.42,4.45,0,8.61-1.33,8.65-1.34l5.03-1.63-1.93,4.92c-8.37,21.29-40.35,36.13-63.81,36.13h-15.95Zm66.55-164.32c3.04,10.76,8.12,28.78,29,28.78h5.64l-1.65-5.51c-.05-.18-6.09-20.42-27.59-28.29l-7.58-2.83,2.18,7.86Z"/>
                  <path class="cls-4" d="m993.3,252.71c-4.09,66.14,90.25,103.93,109.85,152.02-11.56-41.18-55.42-67.13-76.43-91.8-6.91-16.36-1.55-44,5.92-53.45-2.26,44.28,45.55,78.83,71.21,103.51,30.04,29.19,38.64,54.86,34.55,76.01,6.63,1.69,15.65,8.18,14.1,19.04,9.59-2.26,19.46-13.26,21.72-20.02,4.65,32.86-14.67,67.69-36.24,77.98,0,0,5.92-15.65-4.09-27.64-7.9-9.61-27.58-11.52-39.7-11.52-2.82,0-5.22.1-6.98.24,0,0,11.56-17.06,6.91-25.67-2.3-4.32-12.66-6.1-25.77-6.1-19,0-43.78,3.74-58.14,8.92,1.24-.13,2.74-.19,4.42-.19,9.4,0,24.38,1.89,30.13,4.28-3.81,5.64-13.68,29.47-6.63,36.67,1.48,1.45,3.06,2.01,4.62,2.01,5.42,0,10.61-6.81,10.61-6.81,0,0-8.46,26.09-2.4,32.15,2.5,2.44,6.17,3.16,9.62,3.16,4.93,0,9.42-1.46,9.42-1.46-8.04,20.45-39.49,34.55-61.48,34.55,7.9-2.54,20.73-16.5,22.7-24.82-4.65,2.27-15.24,3.81-22.29,3.81-1.71,0-3.21-.09-4.37-.28,7.19-2.82,21.43-21.29,16.92-41.74-4.11-19.01-22.39-27.51-40.58-27.51-10.55,0-21.08,2.86-28.8,8.19,6.77-20.17,27.22-39.06,43.15-45.27-9.31-3.24-20.31-6.06-32.01-8.18,12.8-10.51,44.16-19.09,61.8-19.09.82,0,1.61.02,2.36.06-5.75-1.49-12.55-2.25-19.9-2.25-26.04,0-58.95,9.52-75.99,29.75,6.91,0,25.1,3.38,32.01,5.64-30.18,5.5-71.07,33.42-83.06,46.68,3.24-17.35,8.04-32.15,3.95-42.59-4.13-10.47-14.43-16.63-32.97-16.63-7.43,0-16.19.99-26.4,3.09,23.97-24.4,73.19-39.34,76.57-52.46h0c3.24-12.83-22.28-34.83-31.73-39.06,3.36-.14,6.56-.2,9.6-.2,28.57,0,42.86,5.41,42.86,5.41-9.17-13.54-12.13-34.13-6.91-50.49,19.18,45.83,87.43,53.16,104.35,91.24-2.4-16.5-17.91-34.83-35.82-45.55-9.73-24.96-2.4-70.93,9.31-83.62m94.83,175.33h9.01l-2.59-8.62c-.23-.91-6.87-21.88-29.15-30.04l-12.16-4.53,3.49,12.58c3.04,10.77,8.67,30.61,31.41,30.61m-88.97-189.05l-9.53,10.34c-6.43,6.98-11.66,21.92-13.98,39.96-2.42,18.84-1.08,36.65,3.69,48.87l.62,1.6,1.47.88c1.24.74,2.45,1.51,3.64,2.31-3.53-2.08-7.15-4.14-10.81-6.22-22.01-12.53-44.77-25.48-54.19-48l-5.25-12.54-4.13,12.95c-4.46,13.99-3.53,30.63,2.04,44.41-7.44-1.42-18.51-2.82-33.22-2.82-3.2,0-6.5.07-9.81.2l-21.28.86,19.43,8.7c4.07,1.82,12.3,7.99,19.02,15.16,8.41,8.97,10.63,15.24,9.91,18.11-.19.74-1.35,2.97-7.86,7.3-5.22,3.47-12.38,7.31-19.97,11.38-16.35,8.76-34.88,18.69-47.47,31.5l-11.5,11.71,16.08-3.3c9.64-1.98,18.18-2.99,25.39-2.99,15.49,0,24.75,4.4,28.32,13.46,2.69,6.86.49,17.23-2.06,29.24-.72,3.41-1.47,6.93-2.15,10.59l-3.26,17.41,11.88-13.14c11.33-12.53,51.41-39.86,80.25-45.11l6.82-1.24c-10.32,9.17-19.58,21.28-23.88,34.08l-4.78,14.25,12.37-8.55c6.72-4.64,16.18-7.31,25.95-7.31,14.8,0,31.94,6.19,35.7,23.57,2.19,9.93-.76,18.6-3.63,24.13-3.53,6.83-8.11,11.07-10.24,11.9l-16.86,6.61,17.86,2.98c1.4.23,3.14.35,5.19.35,3.64,0,8.09-.36,12.35-1.03-4.33,5.53-10.37,11.02-14.3,12.28l-30.37,9.76h31.9c24.27,0,57.4-15.49,66.14-37.72l3.88-9.87-10.08,3.29s-3.84,1.22-7.87,1.22c-1.97,0-4.61-.3-6.09-1.7-.51-.65-1.48-4.48.36-14.19,1.28-6.74,3.24-12.82,3.26-12.88l9.01-27.84-17.74,23.27c-1.52,1.97-4.77,4.84-6.64,4.84-.18,0-.51,0-1.08-.54-.96-1.04-1.91-5.14.52-14.07,1.89-6.93,5.11-13.9,6.71-16.27l3.42-5.06-5.64-2.35c-1.25-.52-2.83-1.01-4.63-1.47,8.95-1.21,18.17-1.92,26.29-1.92,15.34,0,20.61,2.5,21.37,3.48,2.05,3.9-2.54,14.38-6.66,20.48l-5.78,8.56,10.3-.78c1.89-.14,4.23-.22,6.6-.22,17.46,0,30.85,3.62,35.84,9.69,7.98,9.56,3.32,22.59,3.27,22.72l-4.25,11.53,11.09-5.27c11.73-5.6,22.77-17.56,30.29-32.83,7.95-16.15,11.06-34.04,8.75-50.36l-2.98-21.03-6.72,20.15c-1.34,4.03-6.58,10.49-12.41,14.2-1.74-6.89-6.96-12.14-13.1-14.94,1.26-10.85-.56-22.14-5.44-33.63-5.91-13.94-16.41-28.29-31.19-42.65-4.06-3.9-8.6-8-13.42-12.33-25.87-23.3-58.07-52.31-56.29-87.34l.8-15.63-9.71,12.28c-4.33,5.47-7.83,15.39-9.39,26.54-.8,5.78-1.59,15.84.67,25.41-13.75-16.56-23-34.53-21.72-55.32l.87-14.04h0Zm88.97,184.05c-17.52,0-22.74-13.32-26.59-26.97l-.86-3.11,2.97,1.11c19.69,7.21,25.83,25.87,26.07,26.63v.05s.05.12.05.12l.65,2.18h-2.28Zm-145.53,4.29c7.62-6.3,17.04-11.1,26.99-14.48-3.67,1.91-6.91,3.94-9.5,6.07l-8.36,6.86,10.64,1.92c6.91,1.25,13.62,2.76,19.86,4.47-1.8,1.16-3.6,2.43-5.4,3.8l-11.74-3.83c-4.83-1.58-14.35-3.58-22.5-4.8h0Z"/>
                </g>
                <g>
                  <path class="cls-3" d="m312.5,636.79v48.41c0,3.92,1.31,8.1,3.14,10.72-12.02,7.58-33.19,19.34-71.35,19.34-54.89,0-90.43-41.03-90.43-98.8s48.88-94.09,86.25-94.09c17.51,0,32.15,2.88,36.33,2.88,5.49,0,9.67-2.09,9.67-2.09l14.38,55.41-7.32,2.61c-1.31-3.92-5.49-10.72-9.67-13.59-6.27-4.44-12.55-7.06-28.49-7.06-27.18,0-52.27,17.77-52.27,55.41s19.34,60.64,44.43,60.64c8.36,0,15.68-1.83,19.34-3.4v-36.39c0-8.12-3.85-11.53-10-11.53v-5.76h67v5.76c-6.77,0-11,3.67-11,11.53Z"/>
                  <path class="cls-3" d="m469.5,581.06v81.49c0,8.83,1.3,17.41,3.12,20.26-18.45,19.22-31.95,30.92-62.61,30.92s-50.92-11.17-69.62-30.92c2.34-3.12,3.12-9.87,3.12-20.26v-82.28c0-8.12-2.73-11.01-9-11.01v-5.76h59v5.76c-6.55,0-9,2.88-9,11.01v79.98c0,14.21,10.99,20.65,26.01,20.65,13.14,0,21.99-7.51,21.99-20.11v-80.52c0-8.12-2.45-11.01-9-11.01v-5.76h55v5.76c-6.55,0-9,3.67-9,11.79Z"/>
                  <path class="cls-3" d="m492.5,709.5v-5.75c6.27,0,9-3.92,9-12.01v-112.31c0-5.75-3.27-10.19-9-10.19v-5.75h59v5.75c-5.25,0-8,3.4-8,11.49v111c0,8.1,2.25,12.01,8,12.01v5.75h-59Z"/>
                  <path class="cls-3" d="m617.79,711.07c-19.39,0-40.62-.52-51.29-1.57v-5.77c6.22,0,8.58-3.67,9-11.79v-112.95c-.42-5.77-3.04-10.22-9-10.22v-5.76c12.25-1.05,31.38-2.36,54.44-2.36,62.63,0,88.31,30.4,88.31,73.38s-25.42,77.04-91.46,77.04Zm10.45-117.66c-3.15,0-7.34.26-10.74.52v84.12c2.88.26,6.81.52,10.22.52,22.8,0,37.74-15.46,37.74-44.29s-14.41-40.88-37.21-40.88Z"/>
                  <path class="cls-3" d="m833.11,711.31c-3.1-1.03-9.29-1.81-15.74-1.81h-94.87v-5.77c6.55,0,9-4.19,9-10.74v-113.47c0-5.76-3.55-10.74-9-10.74v-5.28h97.53c4.47,0,10.52-1.03,13.41-1.81l8.41,38.23-5.78,2.32c-3.42-6.2-7.1-7.75-14.2-7.75h-48.37v22h43.76c5.01,0,8.44-1.75,8.44-6h5.8v44h-5.8c0-4.7-3.95-6-8.44-6h-43.76v29h48c8.26,0,11.36-1.03,14.97-8.52l5.94,1.81-9.29,40.52Z"/>
                  <path class="cls-1" d="m996.38,711.62c-3.71-1.59-11.13-2.12-18.01-2.12h-124.77c0-43.97,30.73-81.06,68.87-99.07,27.02-12.98,33.11-22.25,33.11-32.85,0-11.66-10.33-19.6-37.62-18.54-30.46,1.06-43.97,9.54-52.19,23.31l-7.15-2.12,12.72-56.42c3.44.79,8.21,1.06,11.66,1.06,7.95,0,31.52-4.77,47.95-4.77,50.6,0,73.91,22.25,73.91,55.89,0,25.16-12.98,43.71-42.65,57.48-26.23,12.19-42.65,20.66-49.01,36.03h68.08c9.54,0,15.36-2.38,19.87-11.92l6.89,1.59-11.66,52.45Z"/>
                  <path class="cls-3" d="m1076.91,712.64c-14.94,0-33.02-4.19-39.83-4.19-3.67,0-6.55.79-9.17,2.1l-9.17-51.1,7.08-1.57c1.57,4.46,3.41,9.43,7.08,12.84,6.29,6.03,18.34,9.7,38,9.7,18.08,0,24.11-5.5,24.11-10.48,0-5.24-2.62-8.91-33.54-21.49-25.68-10.48-39.57-23.32-39.57-42.45,0-27.25,22.54-45.86,63.42-45.86,10.48,0,24.37,3.14,30.14,3.14,3.67,0,6.29-.52,8.91-1.83l5.24,45.86-6.55,1.31c-1.31-4.46-3.41-7.86-7.6-10.48-4.72-3.14-13.37-5.77-28.3-5.77-16.77,0-21.49,3.93-21.49,8.39,0,4.98,3.93,8.65,30.4,19.39,22.54,9.17,40.88,20.7,40.88,45.6,0,28.04-21.49,46.91-60.01,46.91Z"/>
                  <path class="cls-3" d="m1240.5,709.5v-5.74c6.09,0,9-3.92,9-12.27v-40.99h-49v40.99c0,8.09,2.73,12.27,9,12.27v5.74h-60v-5.79c6.27,0,9-3.94,9-12.36v-113.34c0-5.52-3.55-9.73-9-9.73v-5.78h60v5.79c-6.55,0-9,3.69-9,11.85v36.35h49v-38.46c0-5.53-2.91-9.75-9-9.75v-5.79h60v5.78c-6.17,0-9,3.68-9,11.83v111.24c0,8.15,2.57,12.36,9,12.36v5.79h-60Z"/>
                  <path class="cls-3" d="m1425.11,711.31c-3.1-1.03-9.29-1.81-15.74-1.81h-94.87v-5.77c6.55,0,9-4.19,9-10.74v-113.47c0-5.76-3.55-10.74-9-10.74v-5.28h97.53c4.47,0,10.52-1.03,13.41-1.81l8.41,38.23-5.78,2.32c-3.42-6.2-7.1-7.75-14.2-7.75h-48.37v22h43.76c5.01,0,8.44-1.75,8.44-6h5.8v44h-5.8c0-4.7-3.95-6-8.44-6h-43.76v29h48c8.26,0,11.35-1.03,14.97-8.52l5.94,1.81-9.29,40.52Z"/>
                  <path class="cls-3" d="m1558.11,711.31c-3.1-1.03-9.29-1.81-15.74-1.81h-93.87v-5.77c6.55,0,9-4.19,9-10.74v-113.47c0-5.76-3.55-10.74-9-10.74v-5.28h95.62c4.38,0,10.31-1.03,13.14-1.81l8.25,38.23-5.67,2.32c-3.35-6.2-6.96-7.75-13.92-7.75h-47.42v22h43.76c5.01,0,8.44-1.75,8.44-6h5.8v44h-5.8c0-4.7-3.95-6-8.44-6h-43.76v29h48c8.26,0,11.35-1.03,14.97-8.52l5.94,1.81-9.29,40.52Z"/>
                  <path class="cls-3" d="m1714.23,603.36c-2.1-6.55-9.7-8.86-9.7-8.86h-34.03v96.7c0,8.39,2.73,12.58,9,12.58v5.72h-60v-5.77s8.77-4.19,9-12.58v-96.65h-33.77c-5.24-.05-7.86,1.52-10.22,8.86l-6.81-1.83,8.65-40.62c2.36,1.05,7.86,2.1,12.58,2.59h101.68c4.72-.49,9.96-2.07,12.05-2.59l8.39,40.62-6.81,1.83Z"/>
                  <path class="cls-3" d="m1788.12,712.64c-14.94,0-33.02-4.19-39.83-4.19-3.67,0-6.55.79-9.17,2.1l-9.17-51.1,7.08-1.57c1.57,4.46,3.41,9.43,7.08,12.84,6.29,6.03,18.34,9.7,38,9.7,18.08,0,24.11-5.5,24.11-10.48,0-5.24-2.62-8.91-33.54-21.49-25.68-10.48-39.57-23.32-39.57-42.45,0-27.25,22.54-45.86,63.42-45.86,10.48,0,24.37,3.14,30.14,3.14,3.67,0,6.29-.52,8.91-1.83l5.24,45.86-6.55,1.31c-1.31-4.46-3.41-7.86-7.6-10.48-4.72-3.14-13.37-5.77-28.3-5.77-16.77,0-21.49,3.93-21.49,8.39,0,4.98,3.93,8.65,30.4,19.39,22.54,9.17,40.88,20.7,40.88,45.6,0,28.04-21.49,46.91-60.01,46.91Z"/>
                </g>
              </svg>
            <div class="pb-12">
                <div class="mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                        <form method="POST" class="p-6 flex flex-col" action="/uploudFicha">
                            @csrf
                            <div class="flex flex-col justify-between">
                                <div class="mb-4 flex flex-col">
                                    <label for="nome-do-personagem" class="font-semibold">Nome do Personagem:</label>
                                    <input id="nome-do-personagem" type="text" name="nome_do_personagem" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" placeholder="Digite o nome do seu personagem" required>
                                </div>

                                <div class="mb-4 flex gap-2">
                                    <div class="w-16">
                                        <label for="forca" class="font-semibold">For:</label>
                                        <input id="forca" type="number" min="8" max="18" name="Forca" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" placeholder="10" pattern="^(8|9|1[0-8])$">
                                    </div>

                                    <div class="w-16">
                                        <label for="Destreza" class="font-semibold">Des:</label>
                                        <input id="Destreza" type="number" min="0" max="20" name="Destreza" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" placeholder="10" pattern="^(8|9|1[0-8])$">
                                    </div>

                                    <div class="w-16">
                                        <label for="Constituição" class="font-semibold">Cons:</label>
                                        <input id="Constituição" type="number" min="0" max="20" name="Constituicao" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" placeholder="10" pattern="^(8|9|1[0-8])$">
                                    </div>

                                    <div class="w-16">
                                        <label for="Inteligência" class="font-semibold">Int:</label>
                                        <input id="Inteligência" type="number" min="0" max="20" name="Inteligencia" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" placeholder="10" pattern="^(8|9|1[0-8])$">
                                    </div>

                                    <div class="w-16">
                                        <label for="Sabedoria" class="font-semibold">Sab:</label>
                                        <input id="Sabedoria" type="number" min="0" max="20" name="Sabedoria" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" placeholder="10" pattern="^(8|9|1[0-8])$">
                                    </div class="w-52">

                                    <div class="w-16">
                                        <label for="Carisma" class="font-semibold">Car:</label>
                                        <input id="Carisma" type="number" min="0" max="20" name="Carisma" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" placeholder="10" pattern="^(8|9|1[0-8])$">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="mb-4">
                                    <label for="raca" class="font-semibold">Raça:</label>
                                    <select id="raca" name="raca" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600">
                                        <option value="invalido" selected disabled>Escolha sua Raça</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="classe" class="font-semibold">Classe:</label>
                                    <select id="classe" name="classe" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600">
                                        <option value="invalido" selected disabled>Escolha sua Classe</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="mb-4 w-full">
                                    <label for="antecedente" class="font-semibold">Antecedente:</label>
                                    <select id="antecedente" name="antecedente" class="w-full border border-gray-300 p-2 rounded focus:border-red-600 focus:ring-red-600" disabled>
                                        <option value="invalido" selected disabled>Escolha seu Antecendente</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <a href="/" class="bg-slate-600 hover:bg-slate-700 transition-all duration-200 mt-2 py-2 px-6 text-xl rounded-full text-white font-semibold cursor-pointer transform hover:scale-105">Voltar</a>

                                <input class="bg-red-600 hover:bg-red-700 transition-all duration-200 mt-2 py-2 px-6 text-xl rounded-full text-white font-semibold cursor-pointer transform hover:scale-105" type="submit" value="Gerar Ficha!">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white w-full shadow fixed bottom-0 flex">
            <div class="mx-auto max-w-screen-xl p-4">
                <span class="text-sm text-gray-500 text-center">© {{ now()->year }} <a href="#" class="hover:underline">Guide2Sheets</a>. Todos os direitos reservados.
                </span>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        // REQUISIÇÕES
        $(document).ready(function() {

            function request(url, callback) {
                $.ajax({
                    url: "https://www.dnd5eapi.co/api/" + url,
                    method: "GET",
                    success: function(data) {
                        callback(data);
                    },
                    error: function(error) {
                        console.log("Erro: " + error);
                    },
                });
            }

            request("classes", function(data) {
                data.results.forEach(classes => {
                    $('#classe').append('<option value="' + classes.name + '">' + classes.name + '</option>');
                });
            });

            request("races", function(data) {
                data.results.forEach(racas => {
                    $('#raca').append('<option value="' + racas.name + '">' + racas.name + '</option>');
                });
            });

            request("backgrounds", function(data) {
                data.results.forEach(antecendente => {
                    $('#antecedente').append('<option value="' + antecendente.name + '">' + antecendente.name + '</option>');
                });
            });

        });
    </script>

    <script>
        // CONFIGURAÇÕES
        $("#classe, #raca").on("change", function() {
            var classe = $('#classe').val();
            var raca = $('#raca').val();

            if (classe != null && raca != null) {
                $("#antecedente, #nivel").removeAttr("disabled");
            } else {
                $("#antecedente, #nivel").attr("disabled", "disabled");
            }
        });
    </script>
</body>

</html>
