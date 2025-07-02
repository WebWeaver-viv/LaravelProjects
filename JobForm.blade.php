// laravel get and post mathed 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job form</title>
    <style>
        .main-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .user-job-main-box {
            width: 90%;
            /* Adjust width as needed */
            max-width: 800px;
            /* Limit maximum width */
            margin: 0 auto;
            /* Center horizontally */
        }

        .form-card {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-lavel {
            margin-bottom: 20px;
            text-align: center;
        }

        .head {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        /* Name Input Styles */
        .user-job-name-input {
            margin-bottom: 15px;
        }

        .user-name-head {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #555;
        }

        .user-name-input {
            display: flex;
            gap: 10px;
        }

        .user-first-name,
        .user-last-name {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }

        .user-first-name:focus,
        .user-last-name:focus {
            border-color: #007bff;
            /* Highlight on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }

        /* Email and Phone Styles */
        .user-email-phone {
            display: inline;
            gap: 20px;
            margin-bottom: 15px;
        }

        .user-email {
            width: 100%;
        }

        .user-email-label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #555;
        }

        .user-email input {
            width: 94%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }

        .user-email input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }

        /* Gender and Date Styles */
        .user-gender {
            width: 50%;
        }

        .user-gender select {
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
            appearance: none;
            /* Remove default arrow in some browsers */

            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 1em;
        }

        #dob {
            width: 22%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }

        /* Profession Styles */
        .user-propession {
            margin-bottom: 20px;
        }

        .user-propession label {
            display: inline-block;
            margin-right: 15px;
            font-size: 14px;
            color: #555;
        }

        .user-propession input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Apply Button Styles */
        .apple-btn {
            text-align: center;
        }

        .apple-btn button {
            background-color: #007bff;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .apple-btn button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    @include('common.header')
    <div class="main-container">
        <div class="user-job-main-box">
            <div class="form-card">
                <div class="form-lavel">
                    <span class="head">
                        Fill The Job Form
                    </span>
                </div>
                <form action="/job-form" method="POST">
                    @csrf
                    <div class="user-job-name-input">
                        <span class="user-name-head">Name</span>
                        <div class="user-name-input">
                            <input type="text" placeholder="First Name" name="first_name" class="user-first-name"
                                id="first_name">
                            <input type="text" placeholder="Last Name" name="last_name" class="user-last-name"
                                id="last_name">
                        </div>
                    </div>

                    <div class="user-email-phone">
                        <div class="user-email">
                            <span class="user-email-label">Email</span>
                            <input type="email" name="email" class="user-first-name" placeholder="Email"
                                id="email">
                        </div>
                        <div class="user-email">
                            <span class="user-email-label">Phone</span>
                            <input type="text" name="phone" maxlength="10" pattern="\d{10}" class="user-first-name" 
       placeholder="##########" id="phone" title="Enter a 10-digit phone number">
                        </div>
                    </div>

                    <div class="user-email-phone">
                        <div class="user-gender">
                            <span class="user-email-label">Select Gender</span>
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="user-email-phone">
                            <span class="user-email-label">Select a date:</span>
                            <input type="date" name="dob" id="dob" class="user-first-name">
                        </div>
                    </div>

                    <div class="user-propession">
                        <span class="user-email-label">Your Profession</span>
                        <label><input type="checkbox" name="profession[]" value="frontend">Frontend</label><br>
                        <label><input type="checkbox" name="profession[]" value="backend">Backend</label><br>
                        <label><input type="checkbox" name="profession[]" value="react">React Developer</label><br>
                        <label><input type="checkbox" name="profession[]" value="datascience">Data Science</label><br>
                    </div>

                    <div class="apple-btn">
                        <button type="submit">Apply</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>

