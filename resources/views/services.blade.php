@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="container">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col-6 col-md-4">
<h1 class="h1magneto">Our Services</h1>
                    <h2 class="h2magneto">Magento development</h2>
                    <p>We build Magento webstores that are fast, responsive and secure.
                        Whether you need a small design change, new feature, or get the project done from scratch,
                        you can count on us.</p>
                    <h2 class="h2magneto">Support service</h2>
                    <p>Direct communication with developer - will significantly speed up the whole process.
                        There are no monthly fees, just pay as you go.</p>
                    <h2 class="h2magneto">Magento migration</h2>
                    <p>Magento migration process doesn’t have to be a nightmare. We have the experience and the
                        know-how to make it painless. All your data, design, and functionality will be reimplemented
                        with no headaches.</p>
                    <h2 class="h2magneto">Code audit</h2>
                    <p>You will get overall health report of the webstore. We will determine
                        major and minor code issues and provide game plan to fix identified problems.</p>
                    <h2 class="h2magneto">Magento upgrade</h2>
                    <p>We always prompt clients to follow Magento releases and upgrade timely! We can upgrade Magento
                        release within the version that you have as well as we can check for the latest security
                        patches available.</p>
                    <h2 class="h2magneto">Hosting on AWS</h2>
                    <p>AWS Certified Solutions Architect will build a Magento infrastructure specially
                        calibrated for your business requirements.</p>
                </div>

                <div class="col-md-8"><img src="{{ asset('img/illustration.jpg') }}" alt="description of myimage"></div>

            </div>
        </div>
    </div>
@endsection
