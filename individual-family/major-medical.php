<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Major Medical</title>

    <?php include '../includes/links.php'; ?>
 
</head>

<body>

<?php include '../includes/main-menu.php'; ?>

<main class="container">
    <div class="row gx-5">
        <div class="col-lg-8 col-12">
            <h1>Major Medical</h1>
            <h2>About the Plan</h2>
            <p>The Farm Bureau Health Plans Major Medical plan is ideal for those who want catastrophic protection with the advantage of a lower cost. This plan provides benefits for physician services, hospitalization, prescription drugs and more.  Available for individuals or families.</p>
            <p>Nebraska Farm Bureau Health Plans uses <a href="https://www.umr.com/oss/cms/UMR/Choice_Plus_no-nav.html" target="_blank">UnitedHealthcare Choice Plus Network</a>. Please keep in mind that in-network payments are based on negotiated fees. If an out-of-network provider is used, the member's liability will increase significantly.</p>
            <h2>Resources</h2> 
            <button type="button" class="btn btn-primary">
                <a href="https://www.umr.com/oss/cms/UMR/Choice_Plus_no-nav.html" target="_blank">Provider Network</a>
            </button>
            <button type="button" class="btn btn-primary">
                <a href="#" target="_blank">Schedule of Benefits</a>
            </button>
        </div>  

        <div class="col-lg-4 col-sm-12 side-column">
            <?php include '../includes/side-column.php' ?>
        </div>
    </div>
</main>

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- ACORDION -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Major Medical: Overview</button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 65%;"> </th>
                                        <th>In-Network</th>
                                        <th>Out-of-Network</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><strong>CALENDAR YEAR DEDUCTIBLE<sup>1</sup> (CYD)</strong></p>
                                            <p>Unless otherwise indicated, all benefits are subject to CYD.</p>
                                        </td>
                                        <td colspan="2">$7,500 per member</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>OUT-OF-POCKET MAXIMUM<sup>2</sup> (OOP)</strong></p>
                                            <p>Once the OOP maximum is met, benefits are provided at 100% for a member for the remainder of the calendar year. This applies to in-network provider services only. There is no Out of Pocket Maximum when out of network providers are used.</p>
                                        </td>
                                        <td>
                                            <p>$15,000<br>individual</p>
                                            <p>$30,000<br>family</p>
                                        </td>
                                        <td>
                                            <p>Unlimited</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>LIFETIME BENEFIT MAXIMUM</strong></p>
                                        </td>
                                        <td colspan="2">
                                            <p>Unlimited</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><strong>FOOTNOTES</strong></p>
                            <p><sup>1</sup> Deductible - the dollar amount of covered services that must be incurred and paid first by a member each calendar year before plan benefits begin.</p>
                            <p><sup>2</sup> Once the OOP maximum is met, benefits are provided at 100% for a member(s) for the remainder of the calendar year. This applies to in-network provider services only. There is no Out of Pocket Maximum when out of network providers are used.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Major Medical: Services</button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- First Table -->
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 65%;"> </th>
                                        <th>In-Network</th>
                                        <th>Out-of-Network</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><strong>COINSURANCE</strong></p>
                                            <p>Based on the maximum allowable charges for eligible benefits. Family deductible can be satisfied by one or more covered members during a calendar year.</p>
                                        </td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>
                                            <p>Plan pays: 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>TELADOC</strong></td>
                                        <td>No charge to member</td>
                                        <td>No coverage</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>PREVENTATIVE CARE BENEFITS</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Well Child Services<sup>3</sup></td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>No coverage</td>
                                    </tr>
                                    <tr>
                                        <td>Routine Colonoscopy<sup>4</sup></td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>
                                            <p>Plan pays: 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Annual Routine PSA<sup>5</sup></td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>
                                            <p>Plan pays: 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Annual OB/GYN Exam<sup>6</sup></td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>No coverage</td>
                                    </tr>
                                    <tr>
                                        <td>Annual Routine Pap Smear<sup>7</sup></td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>
                                            <p>Plan pays: 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mammogram<sup>8</sup></td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>
                                            <p>Plan pays: 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Second table -->
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="3" style="width: 65%;">
                                            <p><strong>PRESCRIPTION DRUG COVERAGE</strong><br>Unlimited Calendar Year Maximum Per Member</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Generic 30 day supply</td>
                                        <td>
                                            <p>Plan pays all but copayment</p>
                                            <p>Your responsibility: $4 copayment<sup>9</sup></p>
                                        </td>
                                        <td>
                                            <p>Plan pays 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>
                                            <p>Plan pays 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>
                                </tbody> 
                            </table>
                            <hr>
                            <p><strong>FOOTNOTES</strong></p>
                            <p><sup>3</sup> Benefits are available, subject to deductible and coinsurance, for a member under the age of seven for physical examinations and appropriate immunizations/vaccinations when services are rendered by an in-network provider. Exams not used during the time periods below do not carry over to the next time period.</p>

                            <!-- Third table -->
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Age</th>
                                        <th>Number of Exams</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Under Age One</td>
                                        <td>four exams from birth to the child's first birthday</td>
                                    </tr>
                                    <tr>
                                        <td>Age One</td>
                                        <td>two exams from the child's first birthday to the child's second birthday</td>
                                    </tr><tr>
                                        <td>Age two through six</td>
                                        <td>one exam per year (determined by the child's birthday)</td>
                                    </tr>                                   
                                </tbody> 
                            </table>
                            <p><sup>4</sup> Benefits will be provided for one routine colonoscopy every four years for members age 50 and over when provided by an in-network or out-of-network provider, subject to the deductible and coinsurance.</p>
                            <p><sup>5</sup> Benefits will be provided, subject to deductible and coinsurance, for one routine PSA per calendar year when services are rendered by an independent laboratory or other outpatient setting.</p>
                            <p><sup>6</sup> Benefits will be available for one routine OB/GYN exam per calendar year, subject to deductible and coinsurance. Services must be rendered by an in-network physician's office and billed by the in-network provider. Related pathology, including pap smear, which is provided as a part of the routine OB/GYN exam, will be covered when the services are rendered by an in-network physician's office and billed by the in-network provider. Related pathology that the physician sends to an independent laboratory will be subject to deductible and coinsurance. No benefit is available for routine OB/GYN exams provided by an out-of-network provider.</p>
                            <p><sup>7</sup> Benefits will be provided for the interpretation of one routine pap smear per calendar year when services are rendered by an independent laboratory or other outpatient setting, subject to deductible and coinsurance.</p>
                            <p><sup>8</sup> Benefits will be provided, subject to deductible and coinsurance, for routine mammography screening provided such examinations are conducted upon the recommendation of the member's physician. One baseline routine mammogram will be allowed for members between the ages of 35-39. One routine mammogram will be allowed annually for members age 40 and above. All routine mammography screens are subject to deductible and coinsurance.</p>
                            <p><sup>9</sup> Prescription copayment does not apply toward deductible or out-of-pocket maximum.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Major Medical: Pre-existing Condition Waiting Period</button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Benefits will not be provided for any pre-existing condition until a member has completed a waiting period of at least 12 months. A pre-existing condition is defined in the contract as “An illness, injury, pregnancy or any other medical condition which existed at any time preceding the effective date of coverage under this contract for which: Medical advice or treatment was recommended by, or received from, a provider of health care services; or symptoms existed which would cause an ordinarily prudent person to seek diagnosis, care or treatment.” The pre-existing condition waiting period does not apply to members under the age of 19 enrolled as dependents on a family plan.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Major Medical: Maternity Benefits</button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Maternity Benefits will be available after a member's coverage on a family contract has been in effect for nine consecutive months. Individual coverage has NO maternity benefits.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ACORDION -->
        </div>
    </div>
</div>

<?php include '../includes/components/call-to-action-jumbotron.php'; ?>

<?php include '../includes/footer.php'; ?>

</body>
</html>