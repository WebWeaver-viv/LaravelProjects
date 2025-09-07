<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        .contact-get-s1-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .contact-get-s1-heading,
        .contact-get-s1-cell {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .contact-get-s1-heading {
            background-color: #0b780f;
            color: white;
        }

        .contact-get-s1-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .contact-get-s1-table tr:hover {
            background-color: #ddd;
        }

        .contact-show-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .table-box-s1 {
            width: 70%;
            display: flex;
            flex-direction: column;
        }

        .label-contact-list {
            font-size: 32px
        }

        .contact-heading-box {
            width: 100%;
            height: 60px;
            background-color: rgb(6, 97, 175);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-heading {
            color: white;
            font-size: 32px;
            font-family: "Times New Roman", Times, serif;
            font-weight: 500;
        }
    </style>
</head>

<body>
    @include('common.header')
    <div class="contact-show-box">
        <div class="contact-heading-box">
            <span class="contact-heading">Contact List</span>
        </div>
        <div class="table-box-s1">



            <table class="contact-get-s1-table">
                <thead>
                    <tr>
                        <th class="contact-get-s1-heading">First Name</th>
                        <th class="contact-get-s1-heading">Last Name</th>
                        <th class="contact-get-s1-heading">Email</th>
                        <th class="contact-get-s1-heading">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $jitendra)
                        <tr>
                            <td class="contact-get-s1-cell">{{ $jitendra->first_name }}</td>
                            <td class="contact-get-s1-cell">{{ $jitendra->last_name }}</td>
                            <td class="contact-get-s1-cell">{{ $jitendra->email }}</td>
                            <td class="contact-get-s1-cell">{{ $jitendra->message }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        .contact-get-s1-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .contact-get-s1-heading,
        .contact-get-s1-cell {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .contact-get-s1-heading {
            background-color: #0b780f;
            color: white;
        }

        .contact-get-s1-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .contact-get-s1-table tr:hover {
            background-color: #ddd;
        }

        .contact-show-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .table-box-s1 {
            width: 70%;
            display: flex;
            flex-direction: column;
        }

        .label-contact-list {
            font-size: 32px
        }

        .contact-heading-box {
            width: 100%;
            height: 60px;
            background-color: rgb(6, 97, 175);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-heading {
            color: white;
            font-size: 32px;
            font-family: "Times New Roman", Times, serif;
            font-weight: 500;
        }
    </style>
</head>

<body>
    @include('common.header')
    <div class="contact-show-box">
        <div class="contact-heading-box">
            <span class="contact-heading">Contact List</span>
        </div>
        <div class="table-box-s1">



            <table class="contact-get-s1-table">
                <thead>
                    <tr>
                        <th class="contact-get-s1-heading">First Name</th>
                        <th class="contact-get-s1-heading">Last Name</th>
                        <th class="contact-get-s1-heading">Email</th>
                        <th class="contact-get-s1-heading">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $jitendra)
                        <tr>
                            <td class="contact-get-s1-cell">{{ $jitendra->first_name }}</td>
                            <td class="contact-get-s1-cell">{{ $jitendra->last_name }}</td>
                            <td class="contact-get-s1-cell">{{ $jitendra->email }}</td>
                            <td class="contact-get-s1-cell">{{ $jitendra->message }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>


</body>

</html>

