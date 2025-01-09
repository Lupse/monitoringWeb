<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Root</title>
    <link rel="stylesheet" href="css/root.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Scrollbar styling */
        body::-webkit-scrollbar {
            width: 10px;
        }

        body::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.134);
            border-radius: 5px;
        }

        body::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }

        body::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .main-content {
            margin-left: 342px;
            padding: 20px 60px 20px 60px;
        }

        .title {
            font-size: 29.3px;
            font-weight: 600;
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .features {
            display: flex;
            gap: 1em;
        }

        .secondary-button {
            all: unset;
            border: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            border-radius: 10px;
            padding: 12px 8px 12px 8px;
            box-shadow: 2px 2px 12px rgba(220, 208, 208, 0.6);
            font-weight: 600;
            cursor: pointer;
        }

        .primary-button {
            all: unset;
            display: flex;
            align-items: center;
            border-radius: 10px;
            padding: 12px 8px 12px 8px;
            box-shadow: 2px 2px 12px rgba(220, 208, 208, 0.6);
            font-weight: 600;
            background-color: #F56E02;
            color: white;
            cursor: pointer;
        }

        .danger-button {
            all: unset;
            display: flex;
            align-items: center;
            border-radius: 10px;
            padding: 12px 8px 12px 8px;
            box-shadow: 2px 2px 12px rgba(220, 208, 208, 0.6);
            font-weight: 600;
            background-color: #CB0B00;
            color: white;
            cursor: pointer;

        }

        /* Search Bar */
        .textfield {
            border: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            border-radius: 10px;
            padding: 8px;
            box-shadow: 2px 2px 12px rgba(220, 208, 208, 0.6);
            background-color: #fff;
        }

        .textfield input {
            border: none;
            outline: none;
            flex: 1;
            padding: 8px;
            font-size: 16px;
        }

        .textfield img {
            width: 24px;
            height: 24px;
            margin-left: 8px;
        }
    </style>
</head>

<body>
    {{-- side nav --}}
    <x-side-nav></x-side-nav>
    {{-- Main Content --}}
    <div class="main-content">
        {{-- Folder --}}
        <p style="margin-bottom: 0px; margin-left:53px">
            Monitoring and chill
        </p>

        <div style="display: flex; align-items:center; flex:1; gap: 1em ">
            {{-- back button --}}
            <a href="/">
                <img src="img/icons/arrow-left.png" alt="" width="36px">
            </a>
            {{-- Title --}}
            <p class="title">
                Add Device
            </p>
        </div>
        <hr style="margin-bottom: 3em">

        {{-- Form --}}
        <p style="font-size:15.8px">Device Name</p>
        <div class="textfield" style="flex: 1; margin-bottom:2em;">
            <input type="text" placeholder="Input device name here (Max 50 Character)" />
        </div>

        <div style="display: flex; gap: 2em; margin-bottom:2em">
            <div style="flex: 1;">
                <p style="font-size:15.8px">IP Address</p>
                <div class="textfield">
                    <input type="text" placeholder="Input IP address here" />
                </div>
            </div>
            <div style="flex: 1;">
                <p style="font-size:15.8px">MAC Address</p>
                <div class="textfield">
                    <input type="text" placeholder="Input IP address here" />
                </div>
            </div>
        </div>

        <div style="display: flex;gap:0.5em;margin-bottom: 2em">
            <svg id="exclamation-circle" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                style="width: 24px; ">
                <path fill="#ffcc00"
                    d="M12,14a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,14Zm0-1.5a1,1,0,0,0,1-1v-3a1,1,0,0,0-2,0v3A1,1,0,0,0,12,12.5ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z">
                </path>
            </svg>
            <p style="font-size:14px"> Check before you continue to “Add Device”</p>
        </div>


        <div style="display: flex; gap:1em; justify-content:end">
            <button class="secondary-button" style="width:211px;height:29px; justify-content:center"
                onclick="resetForm()"> Reset </button>
            <a href="#"><button class="primary-button" style="width:211px;height:29px; justify-content:center">
                    Add Device </button></a>
        </div>




    </div>




    <script>
        function resetForm() {
            const inputs = document.querySelectorAll('.main-content input');

            inputs.forEach(input => {
                input.value = '';
            });
        }
    </script>
</body>

</html>
