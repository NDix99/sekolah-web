<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __("Edit Tentang Sekolah") }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4">
            <form
                class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4"
                action="{{ route('admin.updateTentangSekolah', $id->id) }}"
                method="POST"
            >
                @csrf
                @method('put')
                <div class="mb-4">
                    <label
                        for="visi"
                        class="block text-sm font-medium text-gray-700"
                    >Visi</label>
                    <textarea
                        name="visi"
                        id="visi"
                        rows="4"
                        class="block w-full text-sm text-gray-700 bg-gray-100 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500"
                    >{{ $id->visi }}</textarea>
                </div>

                <div class="mb-4">
                    <label
                        for="misi"
                        class="block text-sm font-medium text-gray-700"
                    >Misi</label>
                    <textarea
                        name="misi"
                        id="misi"
                        rows="4"
                        class="block w-full text-sm text-gray-700 bg-gray-100 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500"
                    >{{ $id->misi }}</textarea>
                </div>

                <div class="mb-4">
                    <label
                        for="tujuan"
                        class="block text-sm font-medium text-gray-700"
                    >Tujuan</label>
                    <textarea
                        name="tujuan"
                        id="tujuan"
                        rows="4"
                        class="block w-full text-sm text-gray-700 bg-gray-100 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500"
                    >{{ $id->tujuan }}</textarea>
                </div>

                <button
                    type="submit"
                    class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
