<?php
$title = 'New Exercise';
$color = 'yellow';
?>
<?php ob_start() ?>
<<<<<<< Updated upstream
    <p class="text-5xl">New Exercise</p>
    <label class="block text-gray-700 text-sm mb-2" for="title">Title</label>
=======
<div>
    <p class="text-5xl pb-8">New Exercise</p>
    <label class="text-gray-700 text-xl">Title</label>
>>>>>>> Stashed changes
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="title" name="title"><br><br>
    <form>
        <input class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" value="Create Exercise">
    </form>
<?php $content = ob_get_clean(); ?>

<?php require('views/templates/template.php'); ?>