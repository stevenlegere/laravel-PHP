<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Only cat pics here 🐈') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in, now you can see some cat pics!") }}
                </div>
            </div>

            <div class="mt-8">
                <!-- The cat image container and button -->
                <div class="image-container">
                    <img id="cat-image" src="" alt="Cat Image">
                </div>
            </div>
            <div class="btn-container">
                <button id="cat-button" class="btn-pink">Get Cat Pic</button>
            </div>
        </div>
    </div>

    <style>
        .p-6 {
            color: black;
            background-color: pink;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        #cat-image {
            width: 450px;
            height: auto;
            border: 15px solid black;
            box-shadow: 15px 15px 0px rgba(255, 192, 203, 1);
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 35px;
        }

        .btn-pink {
        padding: 10px 20px; 
        background-color: pink; 
        color: black; 
        border: none;
        border-radius: 15px; 
        cursor: pointer; 
    }

    .btn-pink:hover {
        background-color: #FFEF9F;
        color: black;
    }

    #cat-image:hover {
        box-shadow: 15px 15px 0px rgba(255, 239, 159, 1);
    }
        </style>

    <!-- Your HTML code here -->
    <script src="{{ asset('js/cat.js') }}"></script>
</x-app-layout>
