<?php template("header") ?>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Available Courses</h1>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">#</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
              Course Title
            </th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
              Short Name
            </th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
              Fee
            </th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
              Actions
            </th>
          </tr>
        </thead>
        <tbody>
          
        
          <?php foreach($courses as $course) : ?>
            
          <tr>
            <td class="px-4 py-3"><?= $course['id'] ?></td>
            <td class="px-4 py-3"><?= $course['title'] ?></td>
            <td class="px-4 py-3"><?= $course['short'] ?></td>
            <td class="px-4 py-3 "><?= $course['fee'] ?></td>
              <td class="px-4 py-3">
                  <a href="<?= url('course-delete')?>?id=<?= $course['id'] ?> " class="ml-auto text-white text-center bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Delete</a>

              </td>
          </tr>
          <?php endforeach ?>
          
        </tbody>
      </table>
    </div>
    
  </div>
</section>

<?php template("footer") ?>
