<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="py-6 flex flex-col items-center justify-center">
            <div class="overflow-mx-auto rounded-lg shadow mb-8">
                <table class="min-w-full divide-y divide-gray-800 bg-white">
                    <tbody class="divide-y divide-gray-700 ">
                        <tr class="mx-auto object-top">
                            <td
                                class="px-6 py-4 bg-gray-800 border border-gray-200 rounded-l-md text-white text-base foont-medium tracking-wider">
                                Nama Lengkap</td>
                            <td
                                class="px-6 py-4 bg-gray-50 border border-gray-200 rounded-r-md text-gray text-base foont-medium tracking-wider">
                                {{ auth()->user()->name }}
                            </td>
                        </tr>
                        <tr class="mx-auto object-top">
                            <td
                                class="px-6 py-4 bg-gray-800 border border-gray-200 rounded-l-md text-white text-base foont-medium tracking-wider">
                                NISN</td>
                            <td
                                class="px-6 py-4 bg-gray-50 border border-gray-200 rounded-r-md text-gray text-base foont-medium tracking-wider">
                                {{ auth()->user()->nisn }}
                            </td>
                        </tr>
                        <tr class="mx-auto object-top">
                            <td
                                class="px-6 py-4 bg-gray-800 border border-gray-200 rounded-l-md text-white text-base foont-medium tracking-wider">
                                Email Siswa</td>
                            <td
                                class="px-6 py-4 bg-gray-50 border border-gray-200 rounded-r-md text-gray text-base foont-medium tracking-wider">
                                {{ auth()->user()->email }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>