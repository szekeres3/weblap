<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&nbsp;</title>
    <link rel="shortcut icon" href="-" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="doboz"></div>
</body>
</html>
<script>
    let x = document.getElementById("doboz");
    let block = false;

    function random(min, max) {
        return Math.floor(Math.random() * (max - min + 1) ) + min;
    }
    window.addEventListener("keydown", dokey);
    function dokey(){
        console.log("Hello");
    }
    function kiiras(text){
        if (!block){
            block = true;
            let i = 0;
            (function type(){
                x.innerHTML += (text.charAt(i));
                if (++i < text.length){
                    setTimeout(type, 110);
                }
                else{
                    block=false;
                }
            })();
        }
    }
    function ekiir(text){
        (function checkFlag() {
            if(block){
                window.setTimeout(checkFlag, 150);
            }
            else{
                kiiras(text);
            }
        })();
    }
    kiiras("Szia <?php echo $_SERVER["REMOTE_ADDR"];?>!");
    ekiir("Hello");
    ekiir("Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos modi recusandae, quibusdam corporis pariatur, possimus odio velit suscipit ipsam laborum nulla ducimus tempore, voluptatibus magnam ea! Voluptatum temporibus rem molestias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae mollitia atque tempora, quam quae doloribus, odio voluptate voluptatem pariatur harum dolor expedita corrupti reprehenderit optio est velit praesentium neque sed.Ipsa blanditiis possimus suscipit id iure eos beatae ratione dolorem nihil, incidunt enim reprehenderit voluptates, assumenda nulla, ut voluptate voluptatem quae consequatur quisquam ab repellat exercitationem impedit maiores. Vitae, quas.Magni placeat ullam tempore laudantium eaque veritatis quas. Voluptatem alias cupiditate minus provident odit? Esse enim nostrum neque aliquid eligendi expedita repellendus magni ab, a reprehenderit ut voluptatem officia consequatur!Velit aliquam reiciendis maxime ipsa, at molestias delectus repudiandae ducimus assumenda cumque sint aperiam. Ut aperiam, nihil cupiditate reiciendis, placeat saepe error quia at dignissimos ea enim vitae veritatis. Fugit.Tempore harum cupiditate non, eveniet molestias repellendus iste ipsum? Laboriosam, adipisci. Eos nemo, saepe voluptate obcaecati praesentium voluptatum distinctio vero accusantium rerum nostrum, libero delectus reprehenderit beatae! Recusandae, cupiditate tempore.Harum iusto nam, vel quod atque beatae obcaecati numquam repudiandae? Aliquid neque cum voluptatibus recusandae rem deserunt? Cupiditate, beatae error reprehenderit, quo nisi ad autem explicabo nobis sunt et est.Nihil doloribus perspiciatis dolorem assumenda beatae placeat maxime minus exercitationem nam eum iste hic possimus iure eius quia atque architecto repellat in aliquid facilis dolorum, eligendi quaerat. Soluta, beatae qui?Nemo incidunt error debitis iste modi numquam mollitia voluptate officiis praesentium illum similique, aliquam quia laboriosam ipsam? Voluptate sunt explicabo nisi, fugit aut, doloremque, magnam a dolorem architecto laboriosam dolorum.Facilis, sunt nesciunt? Minima, cumque magni corporis modi est eos nostrum qui laboriosam optio ipsum accusamus recusandae nihil laudantium quas nulla rem a corrupti animi, deleniti odit esse voluptate aliquid.Doloribus beatae ad quia consequatur quis sequi tempore, rem minima, voluptate inventore amet dicta assumenda aliquid culpa animi quidem unde illum ratione at. Necessitatibus aspernatur, deserunt repellendus aliquam aut culpa!")
</script>