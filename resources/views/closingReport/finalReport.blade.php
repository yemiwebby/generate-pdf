<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel 7 PDF Example</title>

    <style>
        /* * {
            box-sizing: border-box;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            font-weight: bolder;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .clear {
            clear: both;
        }
        .box-1 {
            width: 48%;
            float: left;
            margin-bottom: 30px;
        }

        .box-2 {
            width: 48%;
            float: right;
            margin-bottom: 30px;
        }
        .container {
            padding: 90px;
        }
        img {
            width: 150px;
            height: 120px;
            align-content: center;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            color: red;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }

        .input-wrap {
            border: 1px solid #ddd;
            display: inline-flex;
            flex-direction: row;
            margin-right: 15%;
        }

        .input-sign {
            border: none;
            flex: 1;
            padding: 12px;
            background: #ddd;
        }
        .input-container {
            border: 2px solid gray;
            padding: 20px;
            margin-top: 30px;
        }

        .fill {
            width: 100%;
        }

        .in-put-wrap {
            display: flex;
            flex-direction: row;
        }
        .in-box1,
        .in-box2,
        .in-box3 {
            width: 33.3%;
        }

        .in-box4 {
            width: 400px;
        }
        .in-box5 {
            margin: 20px;
        } */
    </style>
</head>

<body>
<div class="container mt-5">

    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-primary" href="{{ route('sendMail') }}"> SendPDF</a>
    </div>

    <div class="container">
        <div class="box-1">
            <form>
                <div class="row">
                    <div class="col-25">
                        <label for="name">Pallirra #</label>
                    </div>
                    <div class="col-75">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your name.."
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="date">Date</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="date" name="date" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="managerName">Manager name</label>
                    </div>
                    <div class="col-75">
                        <input
                            type="text"
                            id=""
                            name="managerName"
                            placeholder="Your manager name"
                        />
                    </div>
                </div>
            </form>
        </div>
        <div class="box-2">
            <center>
                <img
                    src="https://laparrillastorage.blob.core.windows.net/uploadedfiles/closing_report_logo.png"
                    alt="Pallirra logo"
                />
            </center>
        </div>
        <div class="clear"></div>
        <div class="box-1">
            <h4>Revenue</h4>
            <table>
                <tr>
                    <th>Revenue</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>Not Sales</td>
                    <td>$4,569.669</td>
                </tr>
                <tr>
                    <th>Total Revenue</th>
                    <th>$4,569.669</th>
                </tr>
            </table>
        </div>
        <div class="box-2">
            <h4>Tips paid to bartenders</h4>
            <table>
                <tr>
                    <th>Number</th>
                    <th>Bartender</th>
                    <th>Tips</th>
                </tr>
                <tr>
                    <td>date here</td>
                    <td>date here</td>
                    <td>date here</td>
                </tr>
            </table>
        </div>

        <div class="clear"></div>

        <div class="box-2">
            <h4>Tips paid to servers</h4>
            <table>
                <tr>
                    <th>Number</th>
                    <th>Server</th>
                    <th>Tips</th>
                </tr>
                <tr>
                    <td>date here</td>
                    <td>date here</td>
                    <td>date here</td>
                </tr>
            </table>
        </div>
        <div class="clear"></div>
        <div class="box-2">
            <h4>Failed instant Pay Transactions</h4>
            <table>
                <tr>
                    <th>Number</th>
                    <th>Server</th>
                    <th>Tips</th>
                </tr>
                <tr>
                    <td>date here</td>
                    <td>date here</td>
                    <td>date here</td>
                </tr>
            </table>
        </div>
        <div class="clear"></div>
        <div class="box-1">
            <table>
                <tr>
                    <th>Total Credit and Gift Cards</th>
                    <td>$4,569.669</td>
                </tr>
            </table>
        </div>

        <div class="clear"></div>
        <div class="box-1">
            <h4>Expenses</h4>
            <table>
                <tr>
                    <th>Expenses</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>Not Sales</td>
                    <td>$4,569.669</td>
                </tr>
                <tr>
                    <th>Total Revenue</th>
                    <th>$4,569.669</th>
                </tr>
            </table>
        </div>
        <div class="clear"></div>
        <div class="in-put-wrap">
            <div class="in-box1">
                <h5>Aloha Deposit</h5>
                <div class="input-wrap">
                    <span class="input-sign">$</span>
                    <input type="text" id="#" />
                </div>
            </div>

            <div class="in-box2">
                <h5>Total Expenses</h5>
                <div class="input-wrap">
                    <span class="input-sign">$</span>
                    <input type="text" id="#" />
                </div>
            </div>

            <div class="in-box3">
                <h5>Total Deposit (Calculated)</h5>
                <div class="input-wrap">
                    <span class="input-sign">$</span>
                    <input type="text" id="#" />
                </div>
            </div>

            <div class="clear"></div>
        </div>

        <div class="in-put-wrap input-container">
            <div class="in-box5">
                <h5>Cash to be Deposit</h5>
                <div class="input-wrap in-box4">
                    <span class="input-sign">$</span>
                    <input type="text" id="#" />
                </div>
            </div>

            <div class="in-box5">
                <h5>Short or Over</h5>
                <div class="input-wrap in-box4">
                    <span class="input-sign">$</span>
                    <input type="text" id="#" />
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="row">
            <div class="">
                <h5>Reason for difference in deposit amount</h5>
                <textarea id="w3review" name="w3review" rows="4" class="fill">
          </textarea>
            </div>
        </div>
    </div>
</div>

</body>

</html>
