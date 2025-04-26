<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .main-box-franchise {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .franchise-head {
            background-color: rgb(6, 97, 175);
            color: white;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bluechip-franchise {
            color: white;
            font-size: 32px;
            font-weight: 500;
            padding: 15px;
            padding-top: 20px;


        }

        .franchise-box {
            display: flex;
            justify-content: center;
            background-color: rgb(203, 248, 233);
            height: 85vh;
        }

        .franchise-form {
            padding: 20px 50px;
            border: 1px soild black;
            display: flex;
            justify-content: center;
            box-shadow: 4px 4px 10px 0px rgba(0, 0, 0, 0.25);
            border-radius: 6px;
            margin-top: 25px;
            width: 600px;
            height: auto;
            background-color: rgb(247, 230, 208);
        }

        .input-area {
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;


        }

        .form-heading {
            font-size: 18px;
            font-weight: 300;
            width: 150px;
            font-family: 'Times New Roman', Times, serif;
        }

        .franchise-input-box {
            padding: 10px;
            width: 400px;
            margin-left: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 400;
            font-size: 22px;

        }

        .submit-button {
            padding: 10px;
            width: 100%;
            background-color: rgb(5, 74, 185);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 22px;
            font-weight: 400;

        }
    </style>
</head>
@include('common.header')

<body style="margin:0">
    <div class="main-box-franchise">
        <div class="franchise-head">
            <span class="bluechip-franchise">BlueChip Franchise</span>
        </div>
        <div class="franchise-box">

            <div class="franchise-form">
              <form action="/submit-franchise" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-area">
                    <span class="form-heading">Full Name:</span>
                    <input class="franchise-input-box" type="text" name="fname" id="fname">
                </div>
                <div class="input-area">
                    <span class="form-heading">Email:</span>
                    <input class="franchise-input-box" type="email" name="email" id="email">
                </div>
                <div class="input-area">
                    <span class="form-heading">Mobile No:</span>
                    <input class="franchise-input-box" type="number" name="mobile" id="mobile">
                </div>
                <div class="input-area">
                    <span class="form-heading">State:</span>
                    <input class="franchise-input-box" type="text" name="state" id="state">
                </div>
                <div class="input-area">
                    <span class="form-heading">City:</span>
                    <input class="franchise-input-box" type="text" name="city" id="city">
                </div>
                <div class="input-area">
                    <span class="form-heading">upload image:</span>
                    <input class="franchise-input-box" type="file" name="image" id="image">
                </div>
                <div class="input-area">
                    <span class="form-heading">upload video:</span>
                    <input class="franchise-input-box" type="file" name="video" id="video">
                </div>
                
                <button class="submit-button" type="submit">Submit</button>
            </form>
            
            </div>
        </div>
    </div>
</body>

</html>
