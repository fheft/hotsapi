@extends('template')
@section('title', 'HotsApi')

@section('content')
    <div class="panel-group" id="accordion">
        <h3>General questions</h3>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">Where to get your source code?</a>
                </h4>
            </div>
            <div id="collapse-1" class="panel-collapse collapse in">
                <div class="panel-body">
                    ˚
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">How to download replays from your site?</a>
                </h4>
            </div>
            <div id="collapse-2" class="panel-collapse collapse">
                <div class="panel-body">
                    Currently replays can be downloaded only using API. See <a href="/docs">documentation</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">How can I donate?</a>
                </h4>
            </div>
            <div id="collapse-3" class="panel-collapse collapse">
                <div class="panel-body">
                    The best way to donate is using our <a href="https://www.patreon.com/hotsapi">Patreon page</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-4">Do you benefit from replay downloads?</a>
                </h4>
            </div>
            <div id="collapse-4" class="panel-collapse collapse">
                <div class="panel-body">
                    As stated in <a href="http://docs.aws.amazon.com/AmazonDevPay/latest/DevPayDeveloperGuide/S3RequesterPays.html">AWS documentation</a>:
                    <blockquote>
                        The Requester Pays feature (used alone) lets you give other Amazon S3 users access to your data, but you can't make a profit; you can only avoid paying data transfer and request costs.
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection
