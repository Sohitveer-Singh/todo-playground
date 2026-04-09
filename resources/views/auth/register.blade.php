<x-layouts.auth.app title="Register">
    <div class="min-h-screen flex justify-center items-center">


        <form class="max-w-md mx-auto" method="POST" action="{{route('register.store')}}">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="email"
                       class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                       placeholder=" " value="{{old('email')}}"/>
                <label for="email"
                       class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email
                    address</label>
                @error('email')
                <p class="mt-2.5 text-sm text-fg-danger-strong">{{$message}}.</p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" id="password"
                       class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                       placeholder=" " required value="{{old('password')}}"/>
                <label for="password"
                       class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                @error('password')
                <p class="mt-2.5 text-sm text-fg-danger-strong">{{$message}}.</p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password_confirmation" id="password_confirmation"
                       class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                       placeholder=" " required />
                <label for="password_confirmation"
                       class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Confirm
                    password</label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="first_name" id="first_name"
                           class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                           placeholder=" " required value="{{old('first_name')}}"/>
                    <label for="first_name"
                           class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">First
                        name</label>
                    @error('first_name')
                    <p class="mt-2.5 text-sm text-fg-danger-strong">{{$message}}.</p>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="last_name" id="last_name"
                           class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                           placeholder=" " required value="{{old('last_name')}}"/>
                    <label for="last_name"
                           class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Last
                        name</label>
                    @error('last_name')
                    <p class="mt-2.5 text-sm text-fg-danger-strong">{{$message}}.</p>
                    @enderror
                </div>
            </div>
            <button type="submit"
                    class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                Submit
            </button>
        </form>

    </div>
</x-layouts.auth.app>
