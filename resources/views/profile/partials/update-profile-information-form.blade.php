<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información de Perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Actualiza la información de perfil y la dirección de correo electrónico de tu cuenta") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')


        <section class="flex gap-10">
            <div class="basis-1/2 flex flex-col gap-5">
                <div>
                    <div class="flex gap-5 items-center">
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" name="name" type="text" class="block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    </div>                   
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
        
                <div>
                    <div class="flex gap-5 items-center">
                        <x-input-label for="email" :value="__('Correo Electrónico')" />
                        <x-text-input id="email" name="email" type="email" class="block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
        
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Tu dirección de correo electrónico no está verificada.') }}
        
                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Haz clic aquí para volver a enviar el correo electrónico de verificación.') }}
                                </button>
                            </p>
        
                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div>
                    <div class="flex gap-5 items-center">
                        <x-input-label for="birthday" :value="__('Fecha de nacimiento')" />
                        <x-text-input id="birthday" name="birthday" type="date" class="block w-full" :value="old('birthday', $user->birthday)" autofocus autocomplete="birthday" />
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <div class="flex gap-5 items-center">
                        <x-input-label for="country" :value="__('Pais')" />
                        <select id="country" name="country" class="text-black border-green-300 dark:border-green-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 dark:focus:ring-green-600 rounded-md shadow-sm w-full" :value="old('country', $user->country)" autofocus>
                            <option value="">Selecciona un país</option>
                            <option {{old('country', $user->country)=="1"? 'selected':''}}  value="1">España</option>
                            <option {{old('country', $user->country)=="2"? 'selected':''}}  value="2">Francia</option>
                            <option {{old('country', $user->country)=="3"? 'selected':''}}  value="3">Alemania</option>
                            <option {{old('country', $user->country)=="4"? 'selected':''}}  value="4">Italia</option>
                            <option {{old('country', $user->country)=="5"? 'selected':''}}  value="5">Portugal</option>
                            <option {{old('country', $user->country)=="6"? 'selected':''}}  value="6">Reino Unido</option>
                            <option {{old('country', $user->country)=="7"? 'selected':''}}  value="7">Estados Unidos</option>
                            <option {{old('country', $user->country)=="8"? 'selected':''}}  value="8">México</option>
                            <option {{old('country', $user->country)=="9"? 'selected':''}}  value="9">Argentina</option>
                            <option {{old('country', $user->country)=="10"? 'selected':''}}  value="10">Chile</option>
                            <option {{old('country', $user->country)=="11"? 'selected':''}}  value="11">Colombia</option>
                            <option {{old('country', $user->country)=="12"? 'selected':''}}  value="12">Perú</option>
                            <option {{old('country', $user->country)=="13"? 'selected':''}}  value="13">Venezuela</option>
                            <option {{old('country', $user->country)=="14"? 'selected':''}}  value="14">Ecuador</option>
                            <option {{old('country', $user->country)=="15"? 'selected':''}}  value="15">Bolivia</option>
                            <option {{old('country', $user->country)=="16"? 'selected':''}}  value="16">Paraguay</option>
                            <option {{old('country', $user->country)=="17"? 'selected':''}}  value="17">Uruguay</option>
                            <option {{old('country', $user->country)=="18"? 'selected':''}}  value="18">Costa Rica</option>
                            <option {{old('country', $user->country)=="19"? 'selected':''}}  value="19">Cuba</option>
                            <option {{old('country', $user->country)=="20"? 'selected':''}}  value="20">El Salvador</option>
                            <option {{old('country', $user->country)=="21"? 'selected':''}}  value="21">Guatemala<option>              
                        </select>
                    </div>       
                </div>
            </div>
    
            <div class="basis-1/2">
                <div>
                    <x-input-label for="aboutMe" :value="__('Sobre mi')" class="mb-2" />
                    <div>
                        <textarea id="aboutMe" name="aboutMe" class="text-black border-green-300 dark:border-green-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 dark:focus:ring-green-600 rounded-md shadow-sm w-full h-48" autofocus autocomplete="aboutMe"><?php echo $user->aboutMe; ?></textarea>
                    </div>

                </div>              
            </div>
        </section>       

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Información actualizada') }}</p>
            @endif
        </div>
    </form>
</section>
