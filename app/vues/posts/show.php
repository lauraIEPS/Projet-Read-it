<?php
/*
    ./app/vues/posts/show.php
*/
?>
<div class="row">
  <div class="col-lg-8 ftco-animate">
    <p class="mb-5">
      <img src="images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
    </p>

    <h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
    <p><?php echo $post['resume']; ?></p>
    <p><?php echo $post['content']; ?></p>
    <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
    <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
    <p class="mb-5">
      <img src="images/image_2.jpg" alt="" class="img-fluid">
    </p>
    <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
    <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
    <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
    <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
    <div class="tag-widget post-tag-container mb-5 mt-5">
      <div class="tagcloud">
        <?php
            include_once '../app/controleurs/tagsControleur.php';
            \Controleurs\Tags\indexByPostId($connexion, $id);
         ?>
      </div>
    </div>

    <div class="about-author d-flex p-4 bg-light">
      <div class="bio mr-5">
        <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
      </div>
      <div class="desc">
        <h3>George Washington</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
      </div>
    </div>


    <div class="pt-5 mt-5">
      <h3 class="mb-5">3 Comments</h3>
      <ul class="comment-list">
        <li class="comment">
          <div class="comment-body">
            <h3>John Doe</h3>
            <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
          </div>
        </li>

        <li class="comment">
          <div class="comment-body">
            <h3>John Doe</h3>
            <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
          </div>
        </li>

        <li class="comment">
          <div class="comment-body">
            <h3>John Doe</h3>
            <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
          </div>
        </li>
      </ul>
      <!-- END comment-list -->

      <div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Leave a comment</h3>
        <form action="#" class="p-5 bg-light" method="post">
          <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="hidden" name="postId" value="4" />
            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
          </div>

        </form>
      </div>
    </div>

  </div>
</div>
