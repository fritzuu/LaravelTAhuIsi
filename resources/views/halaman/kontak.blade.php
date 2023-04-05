@extends('layout/aplikasi')

    @section('konten')
    <h1>Halaman Kontak</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quisquam iure fugiat reprehenderit itaque magni fugit laboriosam, repellendus minima magnam iste unde eaque labore dolore necessitatibus perspiciatis mollitia. Minus, quis.
    </p>
    <p>
        <ul>
            <li>
                Email: {{ $kontak['email'] }}
            </li>
            <li>
                Instagram: {{ $kontak['instagram'] }}
            </li>
        </ul>
    </p>
    @endsection