<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-l    g bg-gray-100 mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Check your profile!</h1>

                <form method="POST" action="/profile" class="mt-10">
                    @csrf

                    <x-form.input name="name"  required />
                    <x-form.input name="first name"  required />
                    <x-form.input name="infix"  required />
                    <x-form.input name="last name"  required />
                    <x-form.input name="phone" required />
                    <x-form.input name="street_nr"  required />
                    <x-form.input name="city"  required />
                    <x-form.input name="zipcode"  required />
                    <x-form.input name="address"  required />
                    <x-form.input name="county"  required />
                    <x-form.input name="description" required />
                    <x-form.button>Log In</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

