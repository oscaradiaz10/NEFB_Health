<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Classic Choice</title>

    <?php include '../includes/links.php'; ?>
 
</head>

<body>

<?php include '../includes/main-menu.php'; ?>

<main class="container">
    <div class="row gx-5">
        <div class="col-lg-8 col-12">
            <h1>Classic Choice</h1>
            <h2>About the Plan</h2>
            <p>Classic Choice is a comprehensive health coverage plan that includes hospitalization, medical and prescription benefits.</p>
            <p>Farm Bureau Health Plans uses <a href="https://www.umr.com/oss/cms/UMR/Choice_Plus_no-nav.html" target="_blank">UnitedHealthcare Choice Plus Network</a>. Please keep in mind that in-network payments are based on negotiated fees. If an out-of-network provider is used, the member's liability will increase significantly.</p>
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
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Classic Choice: Overview</button>
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
                                            <p><strong>CALENDAR YEAR DEDUCTIBLE (CYD)</strong></p>
                                            <p>Unless otherwise indicated, all benefits are subject to CYD.</p>
                                        </td>
                                        <td colspan="2">
                                            <p>Option 1: $3,000</p>

                                            <p>Option 2: $6,000</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>OUT-OF-POCKET MAXIMUM (OOP)</strong></p>
                                            <p>Once the OOP maximum is met, benefits are provided at 100% for a member for the remainder of the calendar year. This applies to in-network provider services only. Copayments do not apply to OOP and must still be paid after OOP is met.</p>
                                        </td>
                                        <td>
                                            <p>Option 1<br>$10,000</p>
                                            <p>Option 2<br>$20,000</p>
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
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Classic Choice: Services</button>
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
                                            <p><strong>OFFICE VISIT</strong></p>
                                            <p>Not subject to CYD or OOP</p>
                                        </td>
                                        <td>$40 copayment per visit</td>
                                        <td>CYD/Coinsurance</td>
                                    </tr>
                                    <tr>
                                        <td><strong>TELADOC</strong></td>
                                        <td>$0 copayment per visit</td>
                                        <td>No coverage</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>COINSURANCE</strong></p>
                                            <p>Based on the maximum allowable charges for eligible benefits.</p>
                                        </td>
                                        <td>
                                            <p>Plan pays: 80%</p>
                                            <P>Your responsibility: 20%</P>
                                        </td>
                                        <td>
                                            <p>Plan pays: 60%</p>
                                            <P>Your responsibility: 40%</P>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Second table -->
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 65%;"><p><strong>PREVENTATIVE CARE BENEFITS</strong></p></th>
                                        <th>In-Network</th>
                                        <th>Out-of-Network</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p><strong>NO WAITING PERIOD.<br>In-network benefits not subject to CYD</strong></p></td>
                                        <td>Plan pays 100%</td>
                                        <td>Plan pays 60%</td>
                                    </tr>
                                    <tr>
                                        <td>Preventative Health Exam<sup>1</sup></td>
                                        <td>0%</td>
                                        <td>40%</td>
                                    </tr>
                                    <tr>
                                        <td>Annual Well Woman Exam<sup>2</sup></td>
                                        <td>0%</td>
                                        <td>40%</td>
                                    </tr>
                                    <tr>
                                        <td>Routine Colonoscopy<sup>3</sup></td>
                                        <td>0%</td>
                                        <td>40%</td>
                                    </tr>
                                    <tr>
                                        <td>Annual Routine PSA<sup>4</sup></td>
                                        <td>0%</td>
                                        <td>40%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>EMERGENCY ROOM</strong><br>Not resulting in admission</td>
                                        <td colspan="2">
                                            <p>$75 deductible per visit</p>
                                            <p>(in addition to CYD and Coinsurance)</p>
                                        </td>
                                    </tr>                                     
                                </tbody> 
                            </table>

                            <!-- Third table -->
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="3">
                                            <p><strong>PRESCRIPTION DRUG COVERAGE</strong></p>
                                            <p><strong>Unlimited Calendar Year Maximum Per Member</strong></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Generic 30 day supply.<br>In-network benefits not subject to CYD.</td>
                                        <td>
                                            <p>Plan pays all but copayment</p>
                                            <p>Your responsibility: $4 copayment<sup>5</sup></p>
                                        </td>
                                        <td>
                                            <p>Plan pays 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>Brand<br>Subject to deductible</td>
                                        <td>
                                            <p>Plan pays 80%</p>
                                            <p>Your responsibility: 20%</p>
                                        </td>
                                        <td>
                                            <p>Plan pays 60%</p>
                                            <p>Your responsibility: 40%</p>
                                        </td>
                                    </tr>                                   
                                </tbody> 
                            </table>
                            <h4><strong>DENTAL - No waiting periods</strong></h4>
                            <p><em>Pediatric (Under Age 19)</em></p>
                            <ul>
                                <li>Preventative services as outlined by the United States Preventative Task Force (USPTF) and the Health Resources and Services Administration (HRSA)</li>
                                <li>Other eligible dental services subject to CYD and coinsurance</li>
                                <li>Limited orthodontic care</li>
                            </ul>
                            <p><em>Age 19 and Over</em></p>
                            <ul>
                                <li>$40 copay for preventative and restorative services</li>
                                <li>Maximum benefit per calendar year is $500</li>
                            </ul>
                            <hr/>
                            <h4><strong>VISION - No waiting periods</strong></h4>
                            <p><em>Pediatric (Under Age 19)</em></p>
                            <ul>
                                <li>Eye exams are covered at 100% once every calendar year</li>
                                <li>Eyeglass frames, eyeglass lenses or contact lenses are covered once every Calendar Year at 100% up to a maximum of $100 per Member, not subject to Deductible and Coinsurance</li>
                            </ul>
                            <p><em>Age 19 and Over</em></p>
                            <ul>
                                <li>Eye exams are covered once every calendar year with a limit of $40</li>
                                <li>Eyeglass frames, eyeglass lenses or contact lenses are covered once every Calendar Year at 100% up to a maximum of $100 per Member, not subject to Deductible and Coinsurance</li>
                            </ul>
                            <hr>
                            <p><strong>FOOTNOTES</strong></p>
                            <p><sup>1</sup> Preventative health exam for adults and children and related services as outlined below and performed by the physician during the preventative health exam or referred by the physician as appropriate, including:</p>
                            <ul>
                                <li>Screenings and counseling services with <a href="https://www.uspreventiveservicestaskforce.org/uspstf/topic_search_results?topic_status=P" target="_blank">an A or B recommendation</a> by the <a href="http://www.uspreventiveservicestaskforce.org/" target="_blank">United States Preventative Services Task Force (USPSTF)</a></li>
                                <li>Bright Futures recommendations for infants, children and adolescents supported by the <a href="http://www.hrsa.gov/index.html" target="_blank">Health Resources and Services Administration (HRSA)</a></li>
                                <li>Preventative care and screening for women as provided in the guidelines supported by <a href="http://www.hrsa.gov/index.html" target="_blank">HRSA</a>, and Immunizations recommended by the <a href="http://www.cdc.gov/vaccines/acip/" target="_blank">Advisory Committee of Immunization Practices (ACIP)</a> that have been adopted by the <a href="http://www.cdc.gov/" target="_blank">Centers for Disease Control and Prevention (CDC)</a></li>
                            </ul>
                            <p><sup>2</sup> Annual Well Woman Exam</p>
                            <ul>
                                <li>Routine well woman preventative exam office visit</li>
                                <li>Cervical cancer screening</li>
                                <li>Screening mammography at age 40 and older, with one baseline mammogram between the ages of 35-39</li>
                                <li>Other <a href="http://www.uspreventiveservicestaskforce.org/" target="_blank">USPSTF</a> screenings with an <a href="http://www.uspreventiveservicestaskforce.org/Page/Name/uspstf-a-and-b-recommendations/" target="_blank">A or B rating</a>
                                    <ul>
                                        <li>Pap smears</li>
                                        <li>Bone density measurement screening</li>
                                    </ul>
                                </li>
                            </ul>
                            <p><sup>3</sup> Colorectal cancer screening for members age 50 and older</p>
                            <p><sup>4</sup> Prostate cancer screening for men age 50 and older</p>
                            <p><sup>5</sup> Prescription copayment does not apply toward deductibles or out-of-pocket maximums</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Classic Choice: Pre-existing Condition Waiting Period</button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Benefits will not be provided for any pre-existing condition until a member has completed a waiting period of at least 6 months. A pre-existing condition is defined in the contract as “An illness, injury, pregnancy or any other medical condition which existed at any time preceding the effective date of coverage under this contract for which: Medical advice or treatment was recommended by, or received from, a provider of health care services; or symptoms existed which would cause an ordinarily prudent person to seek diagnosis, care or treatment.”</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Classic Choice: Office Copayment Guidelines</button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>A copayment will be applied to each office visit for the covered services performed in the office and provided and billed by a physician who is an in-network provider. The remaining charges for covered services rendered during the office visit will be paid at 100% of the maximum allowable charge. If a physician who is an out-of-network provider is utilized for covered services, benefits will be determined on the basis of the out-of-network coinsurance percentage after deductible is met.</p>
                            <p>Copayments do not apply to the following services: advanced radiological imaging, allergy testing and injections, biopsy interpretation, bone density testing, cardiac diagnostic testing, chemotherapy services, chiropractic services, complex diagnostic services, dental services except preventative and restorative for all Members age nineteen (19) and over, diagnostic services sent out, durable medical equipment, growth hormone injections, IV therapy, Lupron injections, mammography, maternity services, nerve conduction studies, neuropsychological or neurological tests, nuclear cardiology, nuclear medicine, orthotics, preventative services as indicated in the contract, prosthetics, provider administered specialty pharmacy products, sleep studies, surgery performed in a physician's office and related surgical supplies, Synagis injections, therapeutic/ rehabilitative/ habilitative services, ultrasounds and vision services. These services are subject to the terms and conditions of the contract. Deductibles and coinsurance will apply except where otherwise indicated. Copayments will not be applied toward deductibles or out-of-pocket maximums.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">Classic Choice: Maternity Benefits</button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Maternity benefits will be eligible as long as the pregnancy is not considered a pre-existing condition.</p>
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