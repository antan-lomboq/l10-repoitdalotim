{{-- <section> --}}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ubah Kata Sandi</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            {{-- <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Ubah Password') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </header> --}}

            <div class="card-header py-3 d-flex">
                <div class="">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ __('Ubah Kata Sandi') }}
                    </h6>
                </div>
                
                @if (Auth::user()->role=='1')
                <div class="ml-auto">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                </div>
                @endif
                
                @if (Auth::user()->role=='0')
                <div class="ml-auto">
                    <a href="{{ url('dashboard') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                </div>
                @endif

            </div>

            <div class="card-body">
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    {{-- <div>
                        <x-input-label for="current_password" :value="__('Password Lama')" />
                        <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div> --}}

                    <div class="row mb-3">
                        <div class="col">
                            {{-- <x-input-label for="current_password" :value="__('Password Lama')" /> --}}
                            <label class="form-label">{{ __('Kata Sandi Lama') }}</label>
                        </div>
                        <div class="col">
                            {{-- <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
                            
                            <input type="password" id="current_password" name="current_password" class="form-control"  autocomplete="current-password" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            {{-- <x-input-label for="password" :value="__('Password Baru')" /> --}}
                            <label class="form-label">{{ __('Kata Sandi Baru') }}</label>
                        </div>
                        <div class="col">
                            {{-- <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
                            
                            <input type="password" id="password" name="password" class="form-control" value="" autocomplete="new-password" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi Baru')" />
                        </div>
                        <div class="col">
                            {{-- <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> --}}
                            
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="" autocomplete="new-password" required>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        {{-- <x-primary-button>{{ __('Simpan') }}</x-primary-button> --}}

                        <div class="row mb-3">
                            <div class="col">
                                <button class="btn btn-primary">{{ __('Simpan') }}</button>
                            </div>
                        </div>

                        @if (session('status') === 'password-updated')
                            <p
                                data="{ show: true }"
                                show="show"
                                transition
                                init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Berhasil disimpan.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
            
    </div>
    <!-- /.container-fluid -->
{{-- </section> --}}