<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Advanced Choice</title>

    <?php include '../sub/links.php'; ?>
 
</head>

<body>

<?php include '../sub/main-menu.php'; ?>

<main class="container">
    <div class="row">
        <div class="col-lg-8 col-12">
            <h1>Advanced Choice</h1>
            <h2>About the Plan</h2>
            <p>The Advanced Choice plan for families or individuals is one that offers peace of mind coverage and includes dental and vision benefits. With this plan you get a choice of two different deductible amounts.</p>
            <p>Farm Bureau Health Plans uses <a href="https://www.umr.com/oss/cms/UMR/Choice_Plus_no-nav.html" target="_blank">UnitedHealthcare Choice Plus Network</a>. Please keep in mind that in-network payments are based on negotiated fees. If an out-of-network provider is used, the member's liability will increase significantly.</p>
            <h2>Resources</h2> 
            <button type="button" class="btn btn-primary">
                <a href="https://www.umr.com/oss/cms/UMR/Choice_Plus_no-nav.html" target="_blank">Provider Network</a>
            </button>
            <button type="button" class="btn btn-primary">
                <a href="../media/NE_AdvancedChoice.pdf" target="_blank">Schedule of Benefits</a>
            </button>
        </div>  

        <div class="col-lg-4 col-sm-12">
            <?php include '../sub/side-column.php' ?>
        </div>
    </div>
</main>

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- ACORDION -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Advanced Choice: Overview</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 65%;"> </th>
                                        <th>In-Network</th>
                                        <th>Out-of-Network</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>CALENDAR YEAR DEDUCTIBLE (CYD)</p>
                                            <p>Unless otherwise indicated, all benefits are subject to CYD.</p>
                                        </td>
                                        <td colspan="2">
                                            <p>Option 1: $1,500 per member</p>

                                            <p>Option 2: $3,000 per member</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>OUT-OF-POCKET MAXIMUM (OOP)</p>
                                            <p>Once the OOP maximum is met, eligible benefits are provided at 100% for a member for the remainder of the calendar year. This applies to in-network provider services only. Copayments do not apply to OOP and must still be paid after OOP is met.</p>
                                        </td>
                                        <td>
                                            <p>Option 1<br>$5,000 for individual coverage;<br>$10,000 for family coverage</p>
                                            <p>Option 2<br>$10,000 for individual coverage;<br>$20,000 for family coverage</p>
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
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Advanced Choice: Services</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- First Table -->
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 65%;"> </th>
                                        <th>In-Network</th>
                                        <th>Out-of-Network</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>OFFICE VISIT</p>
                                            <p>Not subject to CYD or OOP</p>
                                        </td>
                                        <td>
                                            <p>Option 1:<br>$30 copayment* per visit</p>

                                            <p>Option 2:<br>$40 copayment* per visit</p>
                                        </td>
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
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 65%;"><p>PREVENTATIVE CARE BENEFITS</p></th>
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
                                            <p>$300 deductible per visit</p>
                                            <p>(in addition to CYD and Coinsurance)</p>
                                        </td>
                                    </tr>                                     
                                </tbody> 
                            </table>

                            <!-- Third table -->
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th colspan="3">
                                            <p>PRESCRIPTION DRUG COVERAGE</p>
                                            <p>$7,500 Calendar Year Maximum Per Member</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Generic<br>30 day supply</td>
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
                            <h4><strong>DENTAL - Six month waiting period for all members.</strong></h4>
                            <p>Routine dental services, including two exams, cleanings, x-rays and fillings per calendar year</p>
                            <ul>
                                <li>There is a copayment per visit and a $500 calendar year maximum per member per calendar year.</li>
                            </ul>
                            <h4>Vision</h4>
                            <p><em>Pediatric (Under Age 19)</em></p>
                            <p>Routine vision benefits including eye exams, eyeglasses and contact lenses.</p>
                            <ul>
                                <li>No waiting period.</li>
                                <li>Eye exams are covered at 100% once every calendar year, no dollar limit.</li>
                                <li>Eyeglass frames, eyeglass lenses or contact lenses are covered once every Calendar Year at 100% up to a maximum of $100 per Member, not subject to Deductible and Coinsurance.</li>
                            </ul>
                            <p><em>Age 19 and Over</em></p>
                            <p>Routine vision benefits including eye exams, eyeglasses and contact lenses.</p>
                            <ul>
                                <li>Subject to a six month waiting period.</li>
                                <li>Eye exams are covered once every calendar year with a $40 limit per member.</li>
                                <li>Eyeglass frames, eyeglass lenses or contact lenses are covered once every Calendar Year at 100% up to a maximum of $100 per Member, not subject to Deductible and Coinsurance.</li>
                            </ul>
                            <hr/>
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
                            <p><sup>3</sup> One routine colonoscopy every ten years for members age 45 and older</p>
                            <p><sup>4</sup> Prostate cancer screening for men age 50 and older</p>
                            <p><sup>5</sup> Prescription copayment does not apply toward deductibles or out-of-pocket maximums</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Advanced Choice: Pre-existing Condition Waiting Period</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Benefits will not be provided for any pre-existing condition until a member has completed a waiting period of at least 6 months. In rare circumstances, the pre-existing condition waiting period may be longer. A pre-existing condition is defined in the contract as “An illness, injury, pregnancy or any other medical condition which existed at any time preceding the effective date of coverage under this contract for which: Medical advice or treatment was recommended by, or received from, a provider of health care services; or symptoms existed which would cause an ordinarily prudent person to seek diagnosis, care or treatment.”</p>
                            <p><strong>Additional waiting periods may apply as indicated in the contract.</strong></p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Advanced Choice: Office Copayment Guidelines</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>A copayment will be applied to each office visit for the covered services performed in the office and provided and billed by a physician who is an in-network provider. The remaining charges for covered services rendered during the office visit will be paid at 100% of the maximum allowable charge. If a physician who is an out-of-network provider is utilized for covered services, benefits will be determined on the basis of the out-of-network coinsurance percentage after deductible is met. Copayments will not be applied toward deductibles or out-of-pocket maximums.</p>
                            <p>Copayments do not apply to the following services: advanced radiological imaging, allergy testing and injections, biopsy interpretation, bone density testing, cardiac diagnostic testing, chemotherapy services, chiropractic services, complex diagnostic services, dental services except preventative and restorative for all members, diagnostic services sent out, durable medical equipment, growth hormone injections, IV therapy, Lupron injections, mammography, maternity services, nerve conduction studies, neuropsychological or neurological tests, nuclear cardiology, nuclear medicine, orthotics, preventative services as indicated in the contract, prosthetics, provider administered specialty pharmacy products, sleep studies, surgery performed in a physician’s office and related surgical supplies, Synagis injections, therapeutic/rehabilitative services, ultrasounds and vision services. These services are subject to the terms and conditions of the contract. Deductibles and coinsurance will apply except where otherwise indicated.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Advanced Choice: Maternity Benefits</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Maternity Benefits will be provided after an individual’s coverage on a family contract has been in effect for nine consecutive months. Individual coverage has NO maternity benefits except for complications of pregnancy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ACORDION -->
        </div>
    </div>
</div>

<?php include '../sub/components/call-to-action-jumbotron.php'; ?>

<?php include '../sub/footer.php'; ?>

</body>
</html>