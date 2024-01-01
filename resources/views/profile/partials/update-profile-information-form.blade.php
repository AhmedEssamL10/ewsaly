  <form id="send-verification" method="post" action="{{ route('verification.send') }}">
      @csrf
  </form>

  <div class="container p-2">
      <button class="accordion">User information</button>
      <form method="post" class="panel" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
          @csrf
          @method('patch')
          <div>
              <label for="name" class="label">Name:</label>
              <x-text-input id="name" name="name" type="text" class="input-field" :value="old('name', $user->name)" required
                  autofocus autocomplete="name" />
              <x-input-error class="mt-2" :messages="$errors->get('name')" />
          </div>

          <div>
              <label for="email" class="label">Email:</label>
              <x-text-input id="email" name="email" type="email" class="input-field" :value="old('email', $user->email)" required
                  autocomplete="username" />
              <x-input-error class="mt-2" :messages="$errors->get('email')" />
          </div>

          <div>
              <label for="phone" class="label">Phone:</label>
              <x-text-input id="phone" name="phone" type="text" class="input-field" :value="old('phone', $user->phone)" required
                  autofocus autocomplete="phone" />
              <x-input-error class="mt-2" :messages="$errors->get('phone')" />
          </div>

          <div>
              <label for="car-color" class="label">Car color:</label>
              <x-text-input id="car_color" name="car_color" type="text" class="input-field" :value="old('car_color', $user->car_color)"
                  required autofocus autocomplete="car_color" />
              <x-input-error class="mt-2" :messages="$errors->get('car_color')" />
          </div>
          <div>
              <label for="car-model" class="label">Car model:</label>
              <x-text-input id="car_model" name="car_model" type="text" class="input-field" :value="old('car_model', $user->car_model)"
                  required autofocus autocomplete="car_model" />
              <x-input-error class="mt-2" :messages="$errors->get('car_model')" />
          </div>
          <div>
              <label for="plate-number" class="label">Plate number:</label>
              <x-text-input id="plate_number" name="plate_number" type="text" class="input-field" :value="old('plate_number', $user->plate_number)"
                  required autofocus autocomplete="plate_number" />
              <x-input-error class="mt-2" :messages="$errors->get('plate_number')" />
          </div>

          <button type="submit" class="btn-submit">
              Update
          </button>

      </form>

  </div>

