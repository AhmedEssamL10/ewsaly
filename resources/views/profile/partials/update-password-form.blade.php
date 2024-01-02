
<div class="container p-2">
<button class="accordion">Update password</button>

        <form method="post"  class="panel" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')
        <div>
            <label for="update_password_current_password"  class="label">Current Password:</label>
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="input-field"  autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password"  class="label">New password:</label>
            <x-text-input id="update_password_password" name="password" type="password"  class="input-field"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password_confirmation"  class="label">Password confirmation:</label>
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"  class="input-field"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
      
        <button type="submit" class="btn-submit">
          Update
        </button>
        @if (session('status') === 'password-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="text-sm text-gray-600 dark:text-gray-400"
        >{{ __('Saved.') }}</p>
    @endif
    </form>
    </div>
    {{-- <div class="container p-2">

    <button class="accordion">Message history</button>
        @foreach ($messages as $message)
            {{$message->content}}
        @endforeach
</div> --}}
