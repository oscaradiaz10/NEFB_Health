<h1>Users</h1>
<ul>

</ul>
<script>
    fetch('https://q-ebexternal.fbfs.com/fbfsservices/api/agents/search/ByZip?zip=68501&usStateAbbreviation=NE&latitude=41.500000&longitude=-100.000000&onlyHealthBenefitCertified=true')
        .then(res => {
            return res.json();
        })
        .then(data => {
            data.forEach(user => {
                const markup = '<li>${FirstName}</li>';

                document.querySelector('ul').insertAdjacentHTML('beforeend', markup);
            });
        })
        .catch(error => console.log(error));
</script>
