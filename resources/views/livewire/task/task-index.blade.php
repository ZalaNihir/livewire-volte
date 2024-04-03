<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 center justify-center">
                <form class="w-full max-w-sm center" wire:submit="save">
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-full-name">
                                Title
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                            wire:model="title"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                id="inline-full-name" type="text">
                                @error('title')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Slug
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                            wire:model="slug"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text" >
                                @error('slug')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Description
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <textarea wire:model="descritpion" id="description" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></textarea>
                            @error('descritpion')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Status
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select wire:model="status" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="">
                                <option value="" selected disabled>select the status</option>
                                @foreach (\App\Enums\StatusEnum::cases() as $status)
                                    <option value="{{ $status->value }}">{{$status->name}}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Priority
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select wire:model="priority" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="">
                                <option value="" selected disabled>select the priority</option>
                                @foreach (App\Enums\PriorityEnum::cases() as $priority)
                                    <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                                @endforeach
                            </select>
                            @error('priority')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Deadline
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input wire:model="deadline"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="date" >
                                @error('deadline')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button
                                class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
