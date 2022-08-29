 <!DOCTYPE html>
<html lang="en">

<style>
    x-guest-layout{
        display: inline-block;
        width: 20px;
    }
</style>

<head>

<style>
    x-guest-layout{
        display: inline-block;
        width: 50px;
        
        height: fit-content;
    }
</style>

</head>

<body>
  <div class="container-scroller" align="center" >
  <x-guest-layout>

<div>
  <form method="POST" action="{{url('profile') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="mail" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="contact_number" value="{{ __('Contact_number') }}" />
                <x-jet-input id="contact_number" class="block mt-1 w-full" type="text" name="contact" :value="old('contact_number')" required autofocus autocomplete="contact_number" />
            </div>

            <div class="mt-4">
                <x-jet-label for="bkash'" value="{{ __('Course_Name') }}" />
                <x-jet-input id="bkash" class="block mt-1 w-full" type="text" name="course_name" required autocomplete="bkash'" />
            </div>

            <div class="mt-4">
                <x-jet-label for="bkash'" value="{{ __('Course') }}" />
                <x-jet-input id="bkash" class="block mt-1 w-full" type="text" name="course" required autocomplete="bkash'" />
            </div>

            <div class="mt-4">
                <x-jet-label for="bkash'" value="{{ __('bkash') }}" />
                <x-jet-input id="bkash" class="block mt-1 w-full" type="text" name="tranjection_id'" required autocomplete="bkash'" />
            </div>
                <x-jet-button class="ml-4" style=" margin:5vw">
                    {{ __('Submit') }}
                </x-jet-button>
        </form>
        </div>
</x-guest-layout>
  </div>
</body>

</html>


