<?php
$idpro = $_REQUEST['idpro'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-[1200px]">
        <form class="w-full bg-white rounded-lg px-4 pt-2" method="post">
            <div class="flex flex-wrap -mx-3 mb-6">
                <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Bình luận : </h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <p class="p-2 rounded border">
                        <?php
                        echo '' . $idpro;
                        ?>
                    </p>
                </div>
                <div class="w-full md:w-full flex items-start md:w-full px-3">
                    <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">

                    </div>

                </div>
               
        </form>
    </div>
    </div>
</body>

</html>