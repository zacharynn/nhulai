<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .height {
            min-height: 200px;
        }

        .icon {
            font-size: 47px;
            color: #5CB85C;
        }

        .floatleft { float:left}

        .iconbig {
            font-size: 77px;
            color: #5CB85C;
        }

        .table > tbody > tr > .emptyrow {
            border-top: none;
        }

        .table > thead > tr > .emptyrow {
            border-bottom: none;
        }

        .table > tbody > tr > .highrow {
            border-top: 3px solid;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-left floatleft">
                <h2>Invoice #09302015</h2>
            </div>
            <div class="text-right">
                <h2>09/30/2015</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">From</div>
                        <div class="panel-body">
                            <strong>Zachary Nguyen</strong><br>
                            13711 Illinois St<br>
                            Westminster, CA 92683
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="panel panel-default height">
                        <div class="panel-heading">To</div>
                        <div class="panel-body">
                            <strong>InfoGate</strong><br>
                            <strong>2616 94th Avenue</strong><br>
                            <strong>Oakland, CA 94605</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-left"><strong>Service summary - Takara Sake</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <td><strong>Item Name</strong></td>
                                <td class="text-center"><strong>Rate</strong></td>
                                <td class="text-center"><strong>Hour</strong></td>
                                <td class="text-right"><strong>Total</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Research on how to make alcohol label.  Look into documentation.</td>
                                <td class="text-center">$45.00</td>
                                <td class="text-center">3</td>
                                <td class="text-right">$135.00</td>
                            </tr>
                            <tr>
                                <td>Implement adult signature requirement.</td>
                                <td class="text-center">$45.00</td>
                                <td class="text-center">.5</td>
                                <td class="text-right">$22.50</td>
                            </tr>
                            <tr>
                                <td>Test and push to prodduction</td>
                                <td class="text-center">$45.00</td>
                                <td class="text-center">.5</td>
                                <td class="text-right">$22.50</td>
                            </tr>
                            <tr>
                                <td class="highrow"></td>
                                <td class="highrow"></td>
                                <td class="highrow text-center"><strong>Total</strong></td>
                                <td class="highrow text-right">$180.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
