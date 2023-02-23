<x-app-layout>
    <x-slot name="header">
        <main class="profile-container">

            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Welcome to {{$profile->user->name}}'s Profile!
            </h2>
            <h4>
                {{$profile->bio}}
            </h4>
            <div class="profile-cta">
                <form >
                    <h1>Post a message to {{$profile->user->name}}!</h1>
                    <input type="text" />
                    <button>Submit</button>
                </form>
            </div>
        </main>

    </x-slot>
</x-app-layout>



