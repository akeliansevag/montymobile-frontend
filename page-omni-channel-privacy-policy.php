<?php get_header(); ?>
<section class="d-inline-block w-100 pt-5 white-text">
    <div class="container">
        <div class="row">
            <div class="col-xxl-2"></div>
            <div class="col-xxl-8">
                <div class="page-wrapper mb-5 p-4">
                    <h1>Omni-Channel Privacy Policy</h1>
                    <div class="page-content mt-3">

                    </div><!--post-content-->
                </div>
            </div><!--outer-column-->
            <div class="col-xxl-2"></div>
        </div>

    </div><!--container-->
</section>
<script>
    const apiUrl = 'https://omni-apis.montymobile.com/catalog/api/v1/Content/Privacy_Policy';
    const headers = {
        'Tenant': '98df9ffe-fa84-41ee-9293-33614722d952',
        'LanguageCode': 'en'
    };

    fetch(apiUrl, {
            method: 'GET',
            headers: headers
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Assuming the content you want is in data.content or adjust based on the API response
            const content = data.data.items[0].contentDetails[0].description || 'No content available';
            document.querySelector('.page-content').innerHTML = content;
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
</script>
<?php get_footer(); ?>