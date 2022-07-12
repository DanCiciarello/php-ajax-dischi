<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi - Milestone 2</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="app">

        <!-- Header -->
        <nav class="d-flex align-items-center justify-content-between">
            <img src="./img/logo.webp" alt="Nav Logo" width="40">
        </nav>
    
        <!-- Main -->
        <div class="cdDisksListsContainer py-5">
            <div class="container">
    
                <!-- Lista dischi -->
                <div class="row row-cols-5 gx-5 gy-4 mt-3">
    
                    <!-- Ciclo i dischi -->
                        <div class="col" v-for="disco in dbDischi" :key="disco.title">
                            <div class="cdDiskItemContainer text-center">
                                <img :src="disco.poster" alt="disco.title" class="cdDiskPoster mb-3">
                                <h6 class="text-uppercase text-white"><strong>{{ disco.title }}</strong></h6>
                                <span class="cdDiskSubtitle">{{ disco.author }}</span>
                                <span class="cdDiskSubtitle">{{ disco.year }}</span>
                            </div>
                        </div>
    
                </div>
    
            </div>
        </div>

    </div>

    <script src="js/vue.js"></script>

</body>

</html>