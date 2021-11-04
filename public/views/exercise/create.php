<?php
ob_start()
?>
<div>
    <p class="text-5xl pb-8">New Exercise</p>
    <label class="text-gray-700 text-xl">Title</label>
    <form>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               type="text" id="title" name="title"><br><br>
    </form>
    <a class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
       href="../../../index.php?controller=ExerciceController&method=index">
        Create Field
    </a>
</div>
<?php
$content = ob_get_clean();

require('public/views/homepage.php');