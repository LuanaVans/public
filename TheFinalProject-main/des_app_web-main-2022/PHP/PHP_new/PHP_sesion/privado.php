<?php include '_header.php';?>


<?php
// Continuamos la sesión
session_start();
// si no existe una sesión llamada username redirigir a pantalla de noacceso.php
if(!isset($_SESSION['username'])){
    header('Location: noacceso.php');
    exit();
}

// Devolver los valores de sesión
echo "Hola " . $_SESSION["username"] ." bienvenido a la sesión privada.";

?>

    <h1>Esto es una zona super secreta</h1>

    <img src="https://images.unsplash.com/photo-1505628346881-b72b27e84530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZnVubnklMjBwZXR8ZW58MHx8MHx8&auto=format&fit=crop&w=900&q=60" alt="">

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi natus explicabo blanditiis reiciendis accusantium fugiat doloremque, consectetur sed optio quae officia, vel iure voluptatum assumenda saepe voluptate aut, magnam hic adipisci? A modi nisi repellendus dolorem aliquam aspernatur accusantium laboriosam accusamus. Doloremque eos atque ut dolore quidem consequatur quae ipsa, recusandae placeat consequuntur necessitatibus. Vel commodi delectus molestiae vero accusamus sit vitae fugit in, minima debitis dolorem possimus corrupti exercitationem nihil corporis incidunt assumenda eligendi doloremque accusantium! Maxime, eos? Inventore dolor voluptas officiis consequatur fugit quidem voluptatum eaque est, commodi, sit sed natus hic enim autem nostrum quaerat pariatur sequi! Rem, optio tempora consequuntur facilis non molestiae voluptatibus, est ipsam aliquid necessitatibus enim! Iste neque quam officiis laudantium expedita beatae unde cupiditate consectetur accusantium, corporis consequuntur ducimus inventore laborum aut.</p>

    <p> Illum rem, odit, ex, mollitia amet dolores fuga sit non magni natus similique. Excepturi dolorem temporibus sed mollitia omnis corrupti dolore enim non? Ex debitis pariatur fugiat voluptates vel dignissimos, atque, natus nemo, modi reprehenderit doloribus odit explicabo laudantium dolore aliquam itaque placeat. Eius laborum voluptatum mollitia neque optio deserunt delectus sit temporibus quam consectetur deleniti nulla magnam nostrum, fugiat eaque maiores aspernatur assumenda expedita. Blanditiis sunt laboriosam quasi aut tempora consequatur velit eius similique, cumque, sit dolorum accusamus quos molestiae aliquam fuga illo, vero earum eligendi ab facilis itaque est unde facere? Obcaecati voluptatem distinctio harum, repudiandae eos vero quibusdam dolorum possimus consequuntur mollitia dolore ipsam! Dignissimos quos animi impedit a minima quaerat temporibus magnam nulla accusantium voluptate facere earum omnis maxime totam nostrum molestiae tempora exercitationem vero aperiam repudiandae at similique, officia quibusdam.</p>

    <p>Perferendis dolores cum ratione at, quidem illum nesciunt aliquam, qui inventore impedit velit nobis ducimus maxime consequatur doloribus libero veniam suscipit quo dolore! Soluta dolores culpa provident, quibusdam animi hic necessitatibus beatae, blanditiis dolorum, voluptates error autem quo! Dolorum, tenetur vitae? Ratione maxime molestiae nulla voluptatum asperiores voluptate maiores omnis quis autem modi, doloribus placeat error laboriosam numquam ea ut harum libero, cupiditate quos officiis hic? Neque et explicabo numquam doloribus sapiente dolorem ratione, illo incidunt illum porro sunt atque sint aspernatur labore molestias temporibus cupiditate sequi reiciendis modi! Commodi odio ducimus numquam rerum ad suscipit praesentium doloribus, nesciunt esse? Ex id numquam mollitia aliquam quasi rem ducimus alias obcaecati possimus laboriosam maiores, ea eligendi error illo iure minus explicabo, et nulla saepe ratione! Temporibus nam, perferendis quae magnam quod ex dicta molestiae sequi, asperiores atque nihil similique veritatis incidunt sed? Non, ut voluptatibus? Quis inventore, sint laudantium eaque fugiat ipsam aperiam fuga natus non veritatis architecto quae dignissimos culpa temporibus fugit commodi repellendus neque omnis totam vel voluptate velit? Dolorum vel necessitatibus reprehenderit suscipit? Culpa architecto sed tempora!</p>
   
    <a href="index.php">Volver al Inicio</a>
   
    <?php include '_footer.php';?>