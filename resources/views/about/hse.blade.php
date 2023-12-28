@extends('layout.main')

@section('content')
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <img src="{{ asset('assets/img/hse.png') }}" class="card-img-top" alt="...">
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content --}}
        <div class="container">
            <div class="card">
                <h5 class="card-header">Report Work Accident Measurement 2023</h5>
                <div class="card-body">
                    <div id="chart1">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 offset-1 py-2">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th>START DATE</th>
                        <th>END DATE</th>
                        <th class="text-center">TOTAL MANHOUR</th>
                    </tr>
                </thead>
                <tbody class="table table-striped">
                    <tr>
                        <th class="text-primary">31-Jan-21</th>
                        <th class="text-primary">30-Oct-23</th>
                        <th class="text-primary text-center">89713</th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container" style="padding-top: 80px">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mb-3">
                        <h1>K3 Policy Commitment, Drug and Alcohol Use</h1>
                        <h1>Grha Prima Agung</h1>
                    </div>
                </div>

                <div class="row pt-3 pb-1">
                    <div class="col-12">
                        <p>We, PT. Grha Prima Agung as a company operating in the construction sector,
                            telecommunications, and procurement we have a strong commitment to enforcing the K3 Policy
                            which contains health and safety procedures for employees, consultants, work partners and
                            subcontractor, We are also PT. Grha Prima Agung is very attentive, especially to matters
                            relating to matters
                            with narcotics and illegal drugs. For this reason, the Company does not provide tolerance
                            towards employees, consultants, work partners and subcontractors if known
                            individuals or groups act outside the K3 rules that have been determined and regulated
                            in Legislation and other regulations. And if a party is found
                            working with our company as a seller, distributor and user of drugs, alcohol
                            while in the Company's work area, including being under the influence of alcohol during working
                            hours
                            We will act firmly in accordance with applicable legal regulations.</p>
                    </div>
                </div>
                <div class="container pt-1 pb-1">
                    <div class="fs-2 text">
                        To achieve this goal, PT. Grha Prima Agung is committed to:
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    01
                                </div>
                                <div>
                                    Monitor and organize the enforcement of our K3 and Environmental Procedures
                                    arrange it, and we carry it out in all work processes that the company carries out.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    02
                                </div>
                                <div>
                                    Manage company business risks and potential dangers related to work activities at the
                                    location
                                    work to prevent incidents from occurring to workers, assets (physical & data), the
                                    environment,
                                    social and corporate reputation.

                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    03
                                </div>
                                <div>
                                    Guarantee that all workers, partners and subcontractors will not use alcohol
                                    and drugs while working in the company.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    04
                                </div>
                                <div>
                                    Comply with all applicable government laws and regulations
                                    other requirements relating to K3L, prevention of drug use, and
                                    alcohol which can threaten worker safety.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    05
                                </div>
                                <div>Carry out synergy and communication with all parties (stakeholders).
                                    relevant regarding K3L aspects, the dangers of drug and alcohol use. To support
                                    business management and operational activities with an K3L perspective.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    06
                                </div>
                                <div>Communicate Company Policy regarding drug and alcohol use
                                    towards all workers, consultants, work partners and subcontractors.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    07
                                </div>
                                <div>Carry out random inspections so that there are no workers or all parties
                                    under the control of companies involved in drug and alcohol abuse.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    08
                                </div>
                                <div>
                                    Comply with applicable regulations and requirements related to safety and health aspects
                                    Work and Environment in the Company's business management and operational activities in
                                    work location.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    09
                                </div>
                                <div>
                                    Ensure that every worker and work partner is fit to work.

                                    Increase awareness and competency of K3 and Environmental aspects among Workers, &
                                    Partners work continuously, and apply sustainable technology
                                    through K3L work facilities and infrastructure in accordance with overall standards and
                                    integrated.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    10
                                </div>
                                <div>
                                    Increase awareness and competency of K3 and Environmental aspects among Workers, &
                                    Partners work continuously, and apply sustainable technology
                                    through K3L work facilities and infrastructure in accordance with overall standards and
                                    integrated.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    11
                                </div>
                                <div>
                                    Carry out continuous improvements to the K3 and Environmental Management System
                                    to prevent work accidents, environmental maintenance, use
                                    drugs and alcohol during the work process.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    12
                                </div>
                                <div>Building and maintaining a Health Safety Management System, and
                                    Sustainable Work Environment and relevant resources.
                                </div>
                            </div>
                            <div class="border px-3 py-3 rounded mb-3 bg-white d-flex">
                                <div class="display-4 font-weight-bold mr-3">
                                    13
                                </div>
                                <div>Carry out routine monitoring and inspection of labor conditions, home base,
                                    and the environment of all workshops and company work locations.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container py-4">
                    <div class="description">
                        <div class="h5 pb-2">
                            To realize our commitment, the Directors, Management, Employees and Working Partners of PT. Grha
                            Prima Agung is responsible for ensuring the implementation of this policy in accordance with the
                            regulations
                            GPA (Good Corporate, Compliant & Adaptive) and upholding Life Saving Rules.
                        </div>
                        <div class="h5 pb-5">
                            Jakarta, 25 October 2023
                        </div>
                        <div class="h5">
                            <br><br>
                            Slamet Agung Wicaksono
                            <br>
                            President Director
                        </div>
                    </div>
                </div>
                {{-- <div class="container py-2 bg-info">
                    <div class="row justify-content-center">
                        <H1 class="text-light text-center">HSE GPA ACHIVMENT</H1>
                        <img src="{{ asset('assets/img/pmi.png') }}" alt="pmi" class="">
                    </div>
                </div>

                <div class="container py-3"> --}}

                    {{-- selesai konten --}}


    </main>
    <!-- End #main -->
    <script>
        var options = {
            series: [{
                name: 'Net Profit',
                data: [3, 0, 2, 40, 0]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['FATALITY', 'CRITICAL INJURY', 'MEDICAL TREATMENT', 'NEAR MISSES', '1ST AID INCINDENT'],

            },
            yaxis: {
                title: {
                    text: 'HSE(Grha Prima Agung)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "HSE" + val + "Grha Prima Agung"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();
    </script>
@endsection
