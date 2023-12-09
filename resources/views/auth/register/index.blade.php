<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg bg-gray-100 mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username" required />
                    <x-form.input name="password" type="password" autocomplete="current-password" required />
                    <x-form.input name="name" type="text" required />
                    <x-form.input name="first_name" type="text" required />
                    <x-form.input name="last_name" type="text" required />
                    <x-form.input name="dob" type="date" required />

                    <x-form.button>Log In</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

