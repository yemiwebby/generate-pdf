<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Demo in Laravel 7</title>

    <style type="text/css">
       /* *, ::after, ::before {
            box-sizing: border-box;
        } */

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;

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

        .col-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%;
        }

        .col-10 {
            float: right;
            width: 60%;
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
            width: 40%;
            float: left;
        }

        .box-2 {
            width: 40%;
            float: right;
        }

        .box-left{
            display: inline;
        }
        .box-right{
            float: left;
            width: 45%;

        }


        img {
            width: 150px;
            height: 120px;
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
            display: inline-block;
            flex-direction: row;
            margin-bottom: 20px;
        }
        .in-box1,
        .in-box2,
        .in-box3 {
            width: 30.3%;
        }

        .in-box4 {
            width: 400px;
        }
        .in-box5 {
            margin: 20px;
        }
        .form-item{
            margin-bottom: 1rem;
        }
    </style>

</head>

<body>

<div class="container-box">

    <div>
        <div style="float: left; width: 50%">
            This is cool
            <div class="">
                <h4>Revenue</h4>
                <table class="">
                    <thead>
                    <tr>
                        <th>Revenue</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Not Sales</td>
                        <td>$4,569.669</td>
                    </tr>
                    <tr>
                        <th>Total Revenue</th>
                        <th>$4,569.669</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="float: right; width: 50%">
            This is nice
            <div class="">
                <h4>Tips paid to bartenders</h4>
                <table class="">
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
        </div>

        <div class="clear"></div>

    </div>


    <div>
        <div class="box-1">
            <form>
                <div class="row">
                    <div class="col-2">
                        <label for="name">Pallirra #</label>
                    </div>
                    <div class="col-10">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your name.."
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <label for="date">Date</label>
                    </div>
                    <div class="col-10">
                        <input type="date" id="date" name="date" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <label for="managerName">Manager name</label>
                    </div>
                    <div class="col-10">
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
    </div>

    <div class="clear"></div>

    <div class="">
        <div class="">
            <h4>Revenue</h4>
            <table class="">
                <thead>
                    <tr>
                        <th>Revenue</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Not Sales</td>
                        <td>$4,569.669</td>
                    </tr>
                    <tr>
                        <th>Total Revenue</th>
                        <th>$4,569.669</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box-left" style="float:right">
            <h4>Tips paid to bartenders</h4>
            <table class="">
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
    </div>

    <div class="clear"></div>

    <div class="">
    <div class="">
        <h4>Tips paid to servers</h4>
        <table class="t3">
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

    <div class="">
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
    </div>
    <div class=""></div>
    <div class="">
        <table>
            <tr>
                <th>Total Credit and Gift Cards</th>
                <td>$4,569.669</td>
            </tr>
        </table>
    </div>

    <!-- <div class="clear"></div> -->
    <div class="">
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
    <!-- <div class="clear"></div> -->
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
            <textarea id="reason" name="reason" rows="4" class="fill">
          </textarea>
        </div>
    </div>
</div>


</body>
</html>
