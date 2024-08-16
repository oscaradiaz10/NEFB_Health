<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - Find a Provider</title>

    <?php include 'sub/links.php'; ?>
 
</head>

<body>

<?php include 'sub/main-menu.php'; ?>

<main class="container">
    <div class="row gx-5">
        <div class="col-lg-8">
            <h1>Find a Provider</h1>
            <p>Please use the following chart as a reference for your network of providers:</p>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>PLAN</th>
                        <th>NETWORK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Under 65 plans*</td>
                        <td><a href="https://www.umr.com/find-a-provider/unitedhealthcare-choice-plus-network-english" target="_blank">UnitedHealthCare Choice Plus</a></td>
                    </tr>
                    <tr>
                        <td>DentalVision</td>
                        <td>
                            <p><a href="https://www.deltadental.com/us/en/member/find-a-dentist.html" target="_blank">Delta Dental</a></p>
                            <p><a href="https://www.vsp.com/" target="_blank">VSP</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Pharmacy Network**	</td>
                        <td><a href="https://welcome.optumrx.com/rxexternal/external-pharmacy-locator?type=PDPClientPharmacy" target="_blank">OptumRx</a></td>
                    </tr>
                </tbody>
            </table>
            <p>*Advanced and Classic Choice Plans use <strong>UMR Managed Dental plans</strong>. To see a list of dental providers, visit <a href="https://fhs.umr.com/oss/cms/FHS.UMR.com/content/common/FindProvider/Dental/" target="_blank">this link</a> and click on "UMR Managed Dental."</p>
            <p>**This link provides general pharmacy information and may not include all pharmacy network results. For a complete and accurate list after enrollment in your KFBHP coverage plan, please visit <a href="https://www2.optumrx.com/" target="_blank">Optum Rx</a> to create your member account.</p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <?php include 'sub/components/call-to-action-agent.php'; ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="bg-light p-4 rounded mt-5">
            <h4>Farm Bureau Health Plans Claims</h4> <!-- SAME NUMBER AS KANSAS-->
            <p>Member toll-free number: <a class="btn btn-primary" href="tel:833-282-5560" role="button">Call (833) 282-5560</a></p>
        </div>

        <div class="col-12">
            <h2>I'm a Provider</h2>
            <p>Nebraska Farm Bureau Health Plans uses UnitedHealthcare to administer claims for the majority of our plans. Medicare Supplement plans will be processed by Members Health Insurance Company.</p>
            <h3>Under 65 Coverage</h3>
            <p>For more information, please visit <a href="https://www.uhc.com/?cid=vanity-provider" target="_blank">www.uhc.com/provider</a>. If you are a provider currently not in United's Choice Plus network you can <a href="https://www.uhcprovider.com/en/resource-library/Join-Our-Network.html" target="_blank">join here</a>.</p>
        </div>
    </div>
</main>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

</body>
</html>