@extends('welcome')

@section('register')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="/postregister">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="TGL_LAHIR" value="{{ __('TGL LAHIR') }}" />
                <x-jet-input id="TGL_LAHIR" class="block mt-1 w-full" type="date" name="TGL_LAHIR" :value="old('TGL_LAHIR')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="TEMPAT_LAHIR" value="{{ __('TEMPAT LAHIR') }}" />
                <x-jet-input id="TEMPAT_LAHIR" class="block mt-1 w-full" type="text" name="TEMPAT_LAHIR" :value="old('TEMPAT_LAHIR')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="JENIS_KELAMIN" value="{{ __('JENIS KELAMIN') }}" />
                <input type="radio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="JENIS_KELAMIN" value="L">
                <label for="L">Laki-laki</label>
                <input type="radio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="JENIS_KELAMIN" value="P">
                <label for="P">Perempuan</label>
                <small id="emailHelp" class="form-text text-muted">(*Kolom Harus Di Isi)</small>
                <div class="form-group">
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="ALAMAT" value="{{ __('ALAMAT') }}" />
                <x-jet-input id="ALAMAT" class="block mt-1 w-full" type="text" name="ALAMAT" :value="old('ALAMAT')" required />
            </div>

             <div class="mt-4">
                <x-jet-label for="KOTA_TINGGAL" value="{{ __('KOTA TINGGAL') }}" />
                <x-jet-input id="KOTA_TINGGAL" class="block mt-1 w-full" type="text" name="KOTA_TINGGAL" :value="old('KOTA_TINGGAL')" required />
            </div>

             <div class="mt-4">
                <x-jet-label for="NO_TLP" value="{{ __('NO TLP') }}" />
                <x-jet-input id="NO_TLP" class="block mt-1 w-full" type="number" name="NO_TLP" :value="old('NO_TLP')" required />
            </div>

             <div class="mt-4">
                <x-jet-label for="PEKERJAAN" value="{{ __('PEKERJAAN') }}" />
                <x-jet-input id="PEKERJAAN" class="block mt-1 w-full" type="text" name="PEKERJAAN" :value="old('PEKERJAAN')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection