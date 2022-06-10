<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
    <!-- header -->
    <header class="ms_header">
        <img class="header-logo" src="../img/logo.png" alt="">
    </header>
    <!-- /header -->
    <!-- main -->
    <main>
        <div id="root">
            <div class="container">
                <div class="album-card" v-for="element in database">
                    <div>
                        <img :src="element.poster" alt="">
                    </div>
                    <h3>{{ element.title }}</h3>
                    <h4>{{ element.author }}</h4>
                    <div>{{ element.year }}</div>
                </div>
            </div>
        </div>
    </main>
    <!-- /main -->
    <script src="../js/script.js"></script>
</body>
</html>